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
    'apiVersion' => '2015-04-15',
    'endpointPrefix' => 'ec2',
    'serviceFullName' => 'Amazon Elastic Compute Cloud',
    'serviceAbbreviation' => 'Amazon EC2',
    'serviceType' => 'query',
    'signatureVersion' => 'v4',
    'namespace' => 'Ec2',
    'regions' => [
        'us-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'ec2.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'ec2.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'ec2.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'ec2.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'ec2.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'ec2.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'ec2.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'ec2.sa-east-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'ec2.cn-north-1.amazonaws.com.cn',
        ],
        'us-gov-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'ec2.us-gov-west-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'AcceptVpcPeeringConnection' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AcceptVpcPeeringConnectionResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AcceptVpcPeeringConnection',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcPeeringConnectionId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'AllocateAddress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AllocateAddressResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AllocateAddress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Domain' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'AssignPrivateIpAddresses' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AssignPrivateIpAddresses',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'NetworkInterfaceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PrivateIpAddresses' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PrivateIpAddress',
                    'items' => [
                        'name' => 'PrivateIpAddress',
                        'type' => 'string',
                    ],
                ],
                'SecondaryPrivateIpAddressCount' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'AllowReassignment' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'AssociateAddress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AssociateAddressResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AssociateAddress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PublicIp' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AllocationId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NetworkInterfaceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PrivateIpAddress' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AllowReassociation' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'AssociateDhcpOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AssociateDhcpOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'DhcpOptionsId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'AssociateRouteTable' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AssociateRouteTableResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AssociateRouteTable',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SubnetId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RouteTableId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'AttachClassicLinkVpc' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AttachClassicLinkVpcResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AttachClassicLinkVpc',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Groups' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SecurityGroupId',
                    'items' => [
                        'name' => 'SecurityGroupId',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'AttachInternetGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AttachInternetGateway',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InternetGatewayId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'AttachNetworkInterface' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AttachNetworkInterfaceResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AttachNetworkInterface',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'NetworkInterfaceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DeviceIndex' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'AttachVolume' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'attachment',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AttachVolume',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VolumeId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Device' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'AttachVpnGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AttachVpnGatewayResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AttachVpnGateway',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpnGatewayId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'AuthorizeSecurityGroupEgress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AuthorizeSecurityGroupEgress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'GroupId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceSecurityGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceSecurityGroupOwnerId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'IpProtocol' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'FromPort' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'ToPort' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'CidrIp' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'IpPermissions' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'items' => [
                        'name' => 'IpPermission',
                        'type' => 'object',
                        'properties' => [
                            'IpProtocol' => [
                                'type' => 'string',
                            ],
                            'FromPort' => [
                                'type' => 'numeric',
                            ],
                            'ToPort' => [
                                'type' => 'numeric',
                            ],
                            'UserIdGroupPairs' => [
                                'type' => 'array',
                                'sentAs' => 'Groups',
                                'items' => [
                                    'name' => 'Groups',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'type' => 'string',
                                        ],
                                        'GroupName' => [
                                            'type' => 'string',
                                        ],
                                        'GroupId' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'IpRanges' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'IpRange',
                                    'type' => 'object',
                                    'properties' => [
                                        'CidrIp' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'PrefixListIds' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PrefixListId',
                                    'type' => 'object',
                                    'properties' => [
                                        'PrefixListId' => [
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
        'AuthorizeSecurityGroupIngress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AuthorizeSecurityGroupIngress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'GroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'GroupId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceSecurityGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceSecurityGroupOwnerId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'IpProtocol' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'FromPort' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'ToPort' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'CidrIp' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'IpPermissions' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'items' => [
                        'name' => 'IpPermission',
                        'type' => 'object',
                        'properties' => [
                            'IpProtocol' => [
                                'type' => 'string',
                            ],
                            'FromPort' => [
                                'type' => 'numeric',
                            ],
                            'ToPort' => [
                                'type' => 'numeric',
                            ],
                            'UserIdGroupPairs' => [
                                'type' => 'array',
                                'sentAs' => 'Groups',
                                'items' => [
                                    'name' => 'Groups',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'type' => 'string',
                                        ],
                                        'GroupName' => [
                                            'type' => 'string',
                                        ],
                                        'GroupId' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'IpRanges' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'IpRange',
                                    'type' => 'object',
                                    'properties' => [
                                        'CidrIp' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'PrefixListIds' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PrefixListId',
                                    'type' => 'object',
                                    'properties' => [
                                        'PrefixListId' => [
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
        'BundleInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'BundleInstanceResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'BundleInstance',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Storage' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'S3' => [
                            'type' => 'object',
                            'properties' => [
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'type' => 'string',
                                ],
                                'AWSAccessKeyId' => [
                                    'type' => 'string',
                                ],
                                'UploadPolicy' => [
                                    'type' => 'string',
                                ],
                                'UploadPolicySignature' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CancelBundleTask' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CancelBundleTaskResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CancelBundleTask',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'BundleId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CancelConversionTask' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CancelConversionTask',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ConversionTaskId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReasonMessage' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CancelExportTask' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CancelExportTask',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'ExportTaskId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CancelImportTask' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CancelImportTaskResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CancelImportTask',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ImportTaskId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CancelReason' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CancelReservedInstancesListing' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CancelReservedInstancesListingResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CancelReservedInstancesListing',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'ReservedInstancesListingId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CancelSpotFleetRequests' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CancelSpotFleetRequestsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CancelSpotFleetRequests',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SpotFleetRequestIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SpotFleetRequestId',
                    'items' => [
                        'name' => 'SpotFleetRequestId',
                        'type' => 'string',
                    ],
                ],
                'TerminateInstances' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CancelSpotInstanceRequests' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CancelSpotInstanceRequestsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CancelSpotInstanceRequests',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SpotInstanceRequestIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SpotInstanceRequestId',
                    'items' => [
                        'name' => 'SpotInstanceRequestId',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'ConfirmProductInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ConfirmProductInstanceResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ConfirmProductInstance',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ProductCode' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CopyImage' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CopyImageResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CopyImage',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SourceRegion' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceImageId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClientToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CopySnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CopySnapshotResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CopySnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SourceRegion' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceSnapshotId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DestinationRegion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PresignedUrl' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Encrypted' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'KmsKeyId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateCustomerGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateCustomerGatewayResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateCustomerGateway',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Type' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PublicIp' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'sentAs' => 'IpAddress',
                ],
                'BgpAsn' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateDhcpOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateDhcpOptionsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateDhcpOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'DhcpConfigurations' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'DhcpConfiguration',
                    'items' => [
                        'name' => 'DhcpConfiguration',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'CreateFlowLogs' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateFlowLogsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateFlowLogs',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'ResourceIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ResourceId',
                    'items' => [
                        'name' => 'ResourceId',
                        'type' => 'string',
                    ],
                ],
                'ResourceType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TrafficType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'LogGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DeliverLogsPermissionArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClientToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateImage' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateImageResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateImage',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NoReboot' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'BlockDeviceMappings' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'BlockDeviceMapping',
                    'items' => [
                        'name' => 'BlockDeviceMapping',
                        'type' => 'object',
                        'properties' => [
                            'VirtualName' => [
                                'type' => 'string',
                            ],
                            'DeviceName' => [
                                'type' => 'string',
                            ],
                            'Ebs' => [
                                'type' => 'object',
                                'properties' => [
                                    'SnapshotId' => [
                                        'type' => 'string',
                                    ],
                                    'VolumeSize' => [
                                        'type' => 'numeric',
                                    ],
                                    'DeleteOnTermination' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                    'VolumeType' => [
                                        'type' => 'string',
                                    ],
                                    'Iops' => [
                                        'type' => 'numeric',
                                    ],
                                    'Encrypted' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                ],
                            ],
                            'NoDevice' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateInstanceExportTask' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateInstanceExportTaskResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateInstanceExportTask',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TargetEnvironment' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ExportToS3Task' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'sentAs' => 'ExportToS3',
                    'properties' => [
                        'DiskImageFormat' => [
                            'type' => 'string',
                        ],
                        'ContainerFormat' => [
                            'type' => 'string',
                        ],
                        'S3Bucket' => [
                            'type' => 'string',
                        ],
                        'S3Prefix' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'CreateInternetGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateInternetGatewayResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateInternetGateway',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateKeyPair' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateKeyPairResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateKeyPair',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'KeyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateNetworkAcl' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateNetworkAclResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateNetworkAcl',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateNetworkAclEntry' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateNetworkAclEntry',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'NetworkAclId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RuleNumber' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Protocol' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RuleAction' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Egress' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'CidrBlock' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'IcmpTypeCode' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'sentAs' => 'Icmp',
                    'properties' => [
                        'Type' => [
                            'type' => 'numeric',
                        ],
                        'Code' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'PortRange' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'From' => [
                            'type' => 'numeric',
                        ],
                        'To' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'CreateNetworkInterface' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateNetworkInterfaceResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateNetworkInterface',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'SubnetId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PrivateIpAddress' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Groups' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SecurityGroupId',
                    'items' => [
                        'name' => 'SecurityGroupId',
                        'type' => 'string',
                    ],
                ],
                'PrivateIpAddresses' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'items' => [
                        'name' => 'PrivateIpAddressSpecification',
                        'type' => 'object',
                        'properties' => [
                            'PrivateIpAddress' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Primary' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
                'SecondaryPrivateIpAddressCount' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreatePlacementGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreatePlacementGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Strategy' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateReservedInstancesListing' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateReservedInstancesListingResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateReservedInstancesListing',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'ReservedInstancesId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceCount' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'PriceSchedules' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'items' => [
                        'name' => 'PriceScheduleSpecification',
                        'type' => 'object',
                        'properties' => [
                            'Term' => [
                                'type' => 'numeric',
                            ],
                            'Price' => [
                                'type' => 'numeric',
                            ],
                            'CurrencyCode' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'ClientToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateRoute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateRouteResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateRoute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'RouteTableId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DestinationCidrBlock' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'GatewayId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NetworkInterfaceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'VpcPeeringConnectionId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateRouteTable' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateRouteTableResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateRouteTable',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateSecurityGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateSecurityGroupResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateSecurityGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'sentAs' => 'GroupDescription',
                ],
                'VpcId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'snapshot',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VolumeId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateSpotDatafeedSubscription' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateSpotDatafeedSubscriptionResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateSpotDatafeedSubscription',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Prefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateSubnet' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateSubnetResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateSubnet',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CidrBlock' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateTags' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateTags',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Resources' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ResourceId',
                    'items' => [
                        'name' => 'ResourceId',
                        'type' => 'string',
                    ],
                ],
                'Tags' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Tag',
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
        'CreateVolume' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'volume',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateVolume',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Size' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'SnapshotId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AvailabilityZone' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'VolumeType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Iops' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Encrypted' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'KmsKeyId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateVpc' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateVpcResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateVpc',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'CidrBlock' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceTenancy' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateVpcEndpoint' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateVpcEndpointResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateVpcEndpoint',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ServiceName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PolicyDocument' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RouteTableIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'RouteTableId',
                    'items' => [
                        'name' => 'RouteTableId',
                        'type' => 'string',
                    ],
                ],
                'ClientToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateVpcPeeringConnection' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateVpcPeeringConnectionResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateVpcPeeringConnection',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PeerVpcId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PeerOwnerId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateVpnConnection' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateVpnConnectionResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateVpnConnection',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Type' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CustomerGatewayId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'VpnGatewayId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Options' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'StaticRoutesOnly' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
            ],
        ],
        'CreateVpnConnectionRoute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateVpnConnectionRoute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'VpnConnectionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DestinationCidrBlock' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateVpnGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateVpnGatewayResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateVpnGateway',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Type' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteCustomerGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteCustomerGateway',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'CustomerGatewayId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteDhcpOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteDhcpOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'DhcpOptionsId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteFlowLogs' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DeleteFlowLogsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteFlowLogs',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'FlowLogIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'FlowLogId',
                    'items' => [
                        'name' => 'FlowLogId',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'DeleteInternetGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteInternetGateway',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InternetGatewayId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteKeyPair' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteKeyPair',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'KeyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteNetworkAcl' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteNetworkAcl',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'NetworkAclId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteNetworkAclEntry' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteNetworkAclEntry',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'NetworkAclId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RuleNumber' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Egress' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteNetworkInterface' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteNetworkInterface',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'NetworkInterfaceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeletePlacementGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeletePlacementGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteRoute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteRoute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'RouteTableId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DestinationCidrBlock' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteRouteTable' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteRouteTable',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'RouteTableId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteSecurityGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteSecurityGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'GroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'GroupId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SnapshotId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteSpotDatafeedSubscription' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteSpotDatafeedSubscription',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteSubnet' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteSubnet',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SubnetId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteTags' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteTags',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Resources' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ResourceId',
                    'items' => [
                        'name' => 'ResourceId',
                        'type' => 'string',
                    ],
                ],
                'Tags' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Tag',
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
        'DeleteVolume' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteVolume',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VolumeId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteVpc' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteVpc',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteVpcEndpoints' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DeleteVpcEndpointsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteVpcEndpoints',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcEndpointIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'VpcEndpointId',
                    'items' => [
                        'name' => 'VpcEndpointId',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'DeleteVpcPeeringConnection' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DeleteVpcPeeringConnectionResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteVpcPeeringConnection',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcPeeringConnectionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteVpnConnection' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteVpnConnection',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpnConnectionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteVpnConnectionRoute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteVpnConnectionRoute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'VpnConnectionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DestinationCidrBlock' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteVpnGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteVpnGateway',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpnGatewayId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeregisterImage' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeregisterImage',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ImageId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeAccountAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeAccountAttributesResult',
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
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'AttributeNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AttributeName',
                    'items' => [
                        'name' => 'AttributeName',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'DescribeAddresses' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeAddressesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeAddresses',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'PublicIps' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PublicIp',
                    'items' => [
                        'name' => 'PublicIp',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'AllocationIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AllocationId',
                    'items' => [
                        'name' => 'AllocationId',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'DescribeAvailabilityZones' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeAvailabilityZonesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeAvailabilityZones',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ZoneNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ZoneName',
                    'items' => [
                        'name' => 'ZoneName',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeBundleTasks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeBundleTasksResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeBundleTasks',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'BundleIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'BundleId',
                    'items' => [
                        'name' => 'BundleId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeClassicLinkInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeClassicLinkInstancesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeClassicLinkInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceId',
                    'items' => [
                        'name' => 'InstanceId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeConversionTasks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeConversionTasksResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeConversionTasks',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'ConversionTaskIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ConversionTaskId',
                    'items' => [
                        'name' => 'ConversionTaskId',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'DescribeCustomerGateways' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeCustomerGatewaysResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeCustomerGateways',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'CustomerGatewayIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'CustomerGatewayId',
                    'items' => [
                        'name' => 'CustomerGatewayId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeDhcpOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeDhcpOptionsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDhcpOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'DhcpOptionsIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'DhcpOptionsId',
                    'items' => [
                        'name' => 'DhcpOptionsId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeExportTasks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeExportTasksResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeExportTasks',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'ExportTaskIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ExportTaskId',
                    'items' => [
                        'name' => 'ExportTaskId',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'DescribeFlowLogs' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeFlowLogsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeFlowLogs',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'FlowLogIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'FlowLogId',
                    'items' => [
                        'name' => 'FlowLogId',
                        'type' => 'string',
                    ],
                ],
                'Filter' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeImageAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'imageAttribute',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeImageAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ImageId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attribute' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeImages' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeImagesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeImages',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ImageIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ImageId',
                    'items' => [
                        'name' => 'ImageId',
                        'type' => 'string',
                    ],
                ],
                'Owners' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Owner',
                    'items' => [
                        'name' => 'Owner',
                        'type' => 'string',
                    ],
                ],
                'ExecutableUsers' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ExecutableBy',
                    'items' => [
                        'name' => 'ExecutableBy',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeImportImageTasks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeImportImageTasksResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeImportImageTasks',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ImportTaskIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ImportTaskId',
                    'items' => [
                        'name' => 'ImportTaskId',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeImportSnapshotTasks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeImportSnapshotTasksResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeImportSnapshotTasks',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ImportTaskIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ImportTaskId',
                    'items' => [
                        'name' => 'ImportTaskId',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeInstanceAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'InstanceAttribute',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeInstanceAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attribute' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeInstanceStatus' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeInstanceStatusResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeInstanceStatus',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceId',
                    'items' => [
                        'name' => 'InstanceId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'IncludeAllInstances' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeInstancesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceId',
                    'items' => [
                        'name' => 'InstanceId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeInternetGateways' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeInternetGatewaysResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeInternetGateways',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InternetGatewayIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InternetGatewayId',
                    'items' => [
                        'name' => 'InternetGatewayId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeKeyPairs' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeKeyPairsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeKeyPairs',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'KeyNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'KeyName',
                    'items' => [
                        'name' => 'KeyName',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeMovingAddresses' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeMovingAddressesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeMovingAddresses',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'PublicIps' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PublicIp',
                    'items' => [
                        'name' => 'PublicIp',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeNetworkAcls' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeNetworkAclsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeNetworkAcls',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'NetworkAclIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'NetworkAclId',
                    'items' => [
                        'name' => 'NetworkAclId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeNetworkInterfaceAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeNetworkInterfaceAttributeResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeNetworkInterfaceAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'NetworkInterfaceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attribute' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeNetworkInterfaces' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeNetworkInterfacesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeNetworkInterfaces',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'NetworkInterfaceIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'NetworkInterfaceId',
                    'items' => [
                        'name' => 'NetworkInterfaceId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribePlacementGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribePlacementGroupsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribePlacementGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'GroupNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'GroupName',
                    'items' => [
                        'name' => 'GroupName',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribePrefixLists' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribePrefixListsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribePrefixLists',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'PrefixListIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PrefixListId',
                    'items' => [
                        'name' => 'PrefixListId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeRegions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeRegionsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeRegions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'RegionNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'RegionName',
                    'items' => [
                        'name' => 'RegionName',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeReservedInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeReservedInstancesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeReservedInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ReservedInstancesIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ReservedInstancesId',
                    'items' => [
                        'name' => 'ReservedInstancesId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'OfferingType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeReservedInstancesListings' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeReservedInstancesListingsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeReservedInstancesListings',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'ReservedInstancesId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReservedInstancesListingId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeReservedInstancesModifications' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeReservedInstancesModificationsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeReservedInstancesModifications',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'ReservedInstancesModificationIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ReservedInstancesModificationId',
                    'items' => [
                        'name' => 'ReservedInstancesModificationId',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeReservedInstancesOfferings' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeReservedInstancesOfferingsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeReservedInstancesOfferings',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ReservedInstancesOfferingIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ReservedInstancesOfferingId',
                    'items' => [
                        'name' => 'ReservedInstancesOfferingId',
                        'type' => 'string',
                    ],
                ],
                'InstanceType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ProductDescription' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'InstanceTenancy' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OfferingType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'IncludeMarketplace' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'MinDuration' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'MaxDuration' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'MaxInstanceCount' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeRouteTables' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeRouteTablesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeRouteTables',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'RouteTableIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'RouteTableId',
                    'items' => [
                        'name' => 'RouteTableId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeSecurityGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeSecurityGroupsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSecurityGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'GroupNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'GroupName',
                    'items' => [
                        'name' => 'GroupName',
                        'type' => 'string',
                    ],
                ],
                'GroupIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'GroupId',
                    'items' => [
                        'name' => 'GroupId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeSnapshotAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeSnapshotAttributeResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSnapshotAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SnapshotId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attribute' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeSnapshots' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeSnapshotsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSnapshots',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SnapshotIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SnapshotId',
                    'items' => [
                        'name' => 'SnapshotId',
                        'type' => 'string',
                    ],
                ],
                'OwnerIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Owner',
                    'items' => [
                        'name' => 'Owner',
                        'type' => 'string',
                    ],
                ],
                'RestorableByUserIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'RestorableBy',
                    'items' => [
                        'name' => 'RestorableBy',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeSpotDatafeedSubscription' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeSpotDatafeedSubscriptionResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSpotDatafeedSubscription',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeSpotFleetInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeSpotFleetInstancesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSpotFleetInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SpotFleetRequestId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeSpotFleetRequestHistory' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeSpotFleetRequestHistoryResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSpotFleetRequestHistory',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SpotFleetRequestId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EventType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'StartTime' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeSpotFleetRequests' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeSpotFleetRequestsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSpotFleetRequests',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SpotFleetRequestIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SpotFleetRequestId',
                    'items' => [
                        'name' => 'SpotFleetRequestId',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeSpotInstanceRequests' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeSpotInstanceRequestsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSpotInstanceRequests',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SpotInstanceRequestIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SpotInstanceRequestId',
                    'items' => [
                        'name' => 'SpotInstanceRequestId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeSpotPriceHistory' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeSpotPriceHistoryResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSpotPriceHistory',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
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
                'InstanceTypes' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceType',
                    'items' => [
                        'name' => 'InstanceType',
                        'type' => 'string',
                    ],
                ],
                'ProductDescriptions' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ProductDescription',
                    'items' => [
                        'name' => 'ProductDescription',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'AvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeSubnets' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeSubnetsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSubnets',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SubnetIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SubnetId',
                    'items' => [
                        'name' => 'SubnetId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeTags' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeTagsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeTags',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeVolumeAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeVolumeAttributeResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeVolumeAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VolumeId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attribute' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeVolumeStatus' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeVolumeStatusResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeVolumeStatus',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VolumeIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'VolumeId',
                    'items' => [
                        'name' => 'VolumeId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeVolumes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeVolumesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeVolumes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VolumeIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'VolumeId',
                    'items' => [
                        'name' => 'VolumeId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeVpcAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeVpcAttributeResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeVpcAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attribute' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeVpcClassicLink' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeVpcClassicLinkResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeVpcClassicLink',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'VpcId',
                    'items' => [
                        'name' => 'VpcId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeVpcEndpointServices' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeVpcEndpointServicesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeVpcEndpointServices',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeVpcEndpoints' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeVpcEndpointsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeVpcEndpoints',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcEndpointIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'VpcEndpointId',
                    'items' => [
                        'name' => 'VpcEndpointId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeVpcPeeringConnections' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeVpcPeeringConnectionsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeVpcPeeringConnections',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcPeeringConnectionIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'VpcPeeringConnectionId',
                    'items' => [
                        'name' => 'VpcPeeringConnectionId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeVpcs' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeVpcsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeVpcs',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'VpcId',
                    'items' => [
                        'name' => 'VpcId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeVpnConnections' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeVpnConnectionsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeVpnConnections',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpnConnectionIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'VpnConnectionId',
                    'items' => [
                        'name' => 'VpnConnectionId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DescribeVpnGateways' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeVpnGatewaysResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeVpnGateways',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpnGatewayIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'VpnGatewayId',
                    'items' => [
                        'name' => 'VpnGatewayId',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Value',
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
        'DetachClassicLinkVpc' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DetachClassicLinkVpcResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DetachClassicLinkVpc',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DetachInternetGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DetachInternetGateway',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InternetGatewayId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DetachNetworkInterface' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DetachNetworkInterface',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'AttachmentId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Force' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DetachVolume' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'attachment',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DetachVolume',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VolumeId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Device' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Force' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DetachVpnGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DetachVpnGateway',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpnGatewayId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DisableVgwRoutePropagation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DisableVgwRoutePropagation',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'RouteTableId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'GatewayId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DisableVpcClassicLink' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DisableVpcClassicLinkResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DisableVpcClassicLink',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DisassociateAddress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DisassociateAddress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'PublicIp' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AssociationId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DisassociateRouteTable' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DisassociateRouteTable',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'AssociationId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'EnableVgwRoutePropagation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'EnableVgwRoutePropagation',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'RouteTableId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'GatewayId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'EnableVolumeIO' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'EnableVolumeIO',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VolumeId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'EnableVpcClassicLink' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EnableVpcClassicLinkResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'EnableVpcClassicLink',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'GetConsoleOutput' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetConsoleOutputResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetConsoleOutput',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'GetPasswordData' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetPasswordDataResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetPasswordData',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ImportImage' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ImportImageResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ImportImage',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DiskContainers' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'DiskContainer',
                    'items' => [
                        'name' => 'DiskContainer',
                        'type' => 'object',
                        'properties' => [
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Format' => [
                                'type' => 'string',
                            ],
                            'Url' => [
                                'type' => 'string',
                            ],
                            'UserBucket' => [
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
                            'DeviceName' => [
                                'type' => 'string',
                            ],
                            'SnapshotId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'LicenseType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Hypervisor' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Architecture' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Platform' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClientData' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'UploadStart' => [
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'date-time',
                        ],
                        'UploadEnd' => [
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'date-time',
                        ],
                        'UploadSize' => [
                            'type' => 'numeric',
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'ClientToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RoleName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ImportInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ImportInstanceResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ImportInstance',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'LaunchSpecification' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Architecture' => [
                            'type' => 'string',
                        ],
                        'GroupNames' => [
                            'type' => 'array',
                            'sentAs' => 'GroupName',
                            'items' => [
                                'name' => 'GroupName',
                                'type' => 'string',
                            ],
                        ],
                        'GroupIds' => [
                            'type' => 'array',
                            'sentAs' => 'GroupId',
                            'items' => [
                                'name' => 'GroupId',
                                'type' => 'string',
                            ],
                        ],
                        'AdditionalInfo' => [
                            'type' => 'string',
                        ],
                        'UserData' => [
                            'type' => 'object',
                            'properties' => [
                                'Data' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'InstanceType' => [
                            'type' => 'string',
                        ],
                        'Placement' => [
                            'type' => 'object',
                            'properties' => [
                                'AvailabilityZone' => [
                                    'type' => 'string',
                                ],
                                'GroupName' => [
                                    'type' => 'string',
                                ],
                                'Tenancy' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Monitoring' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'SubnetId' => [
                            'type' => 'string',
                        ],
                        'InstanceInitiatedShutdownBehavior' => [
                            'type' => 'string',
                        ],
                        'PrivateIpAddress' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'DiskImages' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'DiskImage',
                    'items' => [
                        'name' => 'DiskImage',
                        'type' => 'object',
                        'properties' => [
                            'Image' => [
                                'type' => 'object',
                                'properties' => [
                                    'Format' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'Bytes' => [
                                        'required' => true,
                                        'type' => 'numeric',
                                    ],
                                    'ImportManifestUrl' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Volume' => [
                                'type' => 'object',
                                'properties' => [
                                    'Size' => [
                                        'required' => true,
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Platform' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ImportKeyPair' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ImportKeyPairResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ImportKeyPair',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'KeyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PublicKeyMaterial' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'filters' => ['base64_encode'],
                ],
            ],
        ],
        'ImportSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ImportSnapshotResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ImportSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DiskContainer' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Description' => [
                            'type' => 'string',
                        ],
                        'Format' => [
                            'type' => 'string',
                        ],
                        'Url' => [
                            'type' => 'string',
                        ],
                        'UserBucket' => [
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
                    ],
                ],
                'ClientData' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'UploadStart' => [
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'date-time',
                        ],
                        'UploadEnd' => [
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'date-time',
                        ],
                        'UploadSize' => [
                            'type' => 'numeric',
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'ClientToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RoleName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ImportVolume' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ImportVolumeResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ImportVolume',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'AvailabilityZone' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Image' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Format' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'Bytes' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'ImportManifestUrl' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Volume' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Size' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'ModifyImageAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyImageAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ImageId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attribute' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OperationType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'UserIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'UserId',
                    'items' => [
                        'name' => 'UserId',
                        'type' => 'string',
                    ],
                ],
                'UserGroups' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'UserGroup',
                    'items' => [
                        'name' => 'UserGroup',
                        'type' => 'string',
                    ],
                ],
                'ProductCodes' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ProductCode',
                    'items' => [
                        'name' => 'ProductCode',
                        'type' => 'string',
                    ],
                ],
                'Value' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'LaunchPermission' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Add' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'LaunchPermission',
                                'type' => 'object',
                                'properties' => [
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'Group' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'Remove' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'LaunchPermission',
                                'type' => 'object',
                                'properties' => [
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'Group' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Description' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'ModifyInstanceAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyInstanceAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attribute' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Value' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'BlockDeviceMappings' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'BlockDeviceMapping',
                    'items' => [
                        'name' => 'BlockDeviceMapping',
                        'type' => 'object',
                        'properties' => [
                            'DeviceName' => [
                                'type' => 'string',
                            ],
                            'Ebs' => [
                                'type' => 'object',
                                'properties' => [
                                    'VolumeId' => [
                                        'type' => 'string',
                                    ],
                                    'DeleteOnTermination' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                ],
                            ],
                            'VirtualName' => [
                                'type' => 'string',
                            ],
                            'NoDevice' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'SourceDestCheck' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
                'DisableApiTermination' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
                'InstanceType' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Kernel' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Ramdisk' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'UserData' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'InstanceInitiatedShutdownBehavior' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Groups' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'GroupId',
                    'items' => [
                        'name' => 'GroupId',
                        'type' => 'string',
                    ],
                ],
                'EbsOptimized' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
                'SriovNetSupport' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'ModifyNetworkInterfaceAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyNetworkInterfaceAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'NetworkInterfaceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'SourceDestCheck' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
                'Groups' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SecurityGroupId',
                    'items' => [
                        'name' => 'SecurityGroupId',
                        'type' => 'string',
                    ],
                ],
                'Attachment' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'AttachmentId' => [
                            'type' => 'string',
                        ],
                        'DeleteOnTermination' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
            ],
        ],
        'ModifyReservedInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ModifyReservedInstancesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyReservedInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'ClientToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReservedInstancesIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ReservedInstancesId',
                    'items' => [
                        'name' => 'ReservedInstancesId',
                        'type' => 'string',
                    ],
                ],
                'TargetConfigurations' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ReservedInstancesConfigurationSetItemType',
                    'items' => [
                        'name' => 'ReservedInstancesConfigurationSetItemType',
                        'type' => 'object',
                        'properties' => [
                            'AvailabilityZone' => [
                                'type' => 'string',
                            ],
                            'Platform' => [
                                'type' => 'string',
                            ],
                            'InstanceCount' => [
                                'type' => 'numeric',
                            ],
                            'InstanceType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifySnapshotAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifySnapshotAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SnapshotId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attribute' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OperationType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'UserIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'UserId',
                    'items' => [
                        'name' => 'UserId',
                        'type' => 'string',
                    ],
                ],
                'GroupNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'UserGroup',
                    'items' => [
                        'name' => 'UserGroup',
                        'type' => 'string',
                    ],
                ],
                'CreateVolumePermission' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Add' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CreateVolumePermission',
                                'type' => 'object',
                                'properties' => [
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'Group' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'Remove' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CreateVolumePermission',
                                'type' => 'object',
                                'properties' => [
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'Group' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifySubnetAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifySubnetAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'SubnetId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MapPublicIpOnLaunch' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
            ],
        ],
        'ModifyVolumeAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyVolumeAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VolumeId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AutoEnableIO' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
            ],
        ],
        'ModifyVpcAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyVpcAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'VpcId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EnableDnsSupport' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
                'EnableDnsHostnames' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
            ],
        ],
        'ModifyVpcEndpoint' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ModifyVpcEndpointResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyVpcEndpoint',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcEndpointId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ResetPolicy' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'PolicyDocument' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AddRouteTableIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AddRouteTableId',
                    'items' => [
                        'name' => 'AddRouteTableId',
                        'type' => 'string',
                    ],
                ],
                'RemoveRouteTableIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'RemoveRouteTableId',
                    'items' => [
                        'name' => 'RemoveRouteTableId',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'MonitorInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'MonitorInstancesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'MonitorInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceId',
                    'items' => [
                        'name' => 'InstanceId',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'MoveAddressToVpc' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'MoveAddressToVpcResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'MoveAddressToVpc',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'PublicIp' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'PurchaseReservedInstancesOffering' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'PurchaseReservedInstancesOfferingResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PurchaseReservedInstancesOffering',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ReservedInstancesOfferingId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceCount' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'LimitPrice' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Amount' => [
                            'type' => 'numeric',
                        ],
                        'CurrencyCode' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'RebootInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RebootInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceId',
                    'items' => [
                        'name' => 'InstanceId',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'RegisterImage' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'RegisterImageResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RegisterImage',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ImageLocation' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Architecture' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'KernelId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RamdiskId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RootDeviceName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'BlockDeviceMappings' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'BlockDeviceMapping',
                    'items' => [
                        'name' => 'BlockDeviceMapping',
                        'type' => 'object',
                        'properties' => [
                            'VirtualName' => [
                                'type' => 'string',
                            ],
                            'DeviceName' => [
                                'type' => 'string',
                            ],
                            'Ebs' => [
                                'type' => 'object',
                                'properties' => [
                                    'SnapshotId' => [
                                        'type' => 'string',
                                    ],
                                    'VolumeSize' => [
                                        'type' => 'numeric',
                                    ],
                                    'DeleteOnTermination' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                    'VolumeType' => [
                                        'type' => 'string',
                                    ],
                                    'Iops' => [
                                        'type' => 'numeric',
                                    ],
                                    'Encrypted' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                ],
                            ],
                            'NoDevice' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'VirtualizationType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SriovNetSupport' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'RejectVpcPeeringConnection' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'RejectVpcPeeringConnectionResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RejectVpcPeeringConnection',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'VpcPeeringConnectionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ReleaseAddress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ReleaseAddress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'PublicIp' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AllocationId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ReplaceNetworkAclAssociation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReplaceNetworkAclAssociationResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ReplaceNetworkAclAssociation',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'AssociationId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NetworkAclId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ReplaceNetworkAclEntry' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ReplaceNetworkAclEntry',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'NetworkAclId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RuleNumber' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Protocol' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RuleAction' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Egress' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'CidrBlock' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'IcmpTypeCode' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'sentAs' => 'Icmp',
                    'properties' => [
                        'Type' => [
                            'type' => 'numeric',
                        ],
                        'Code' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'PortRange' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'From' => [
                            'type' => 'numeric',
                        ],
                        'To' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'ReplaceRoute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ReplaceRoute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'RouteTableId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DestinationCidrBlock' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'GatewayId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NetworkInterfaceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'VpcPeeringConnectionId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ReplaceRouteTableAssociation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReplaceRouteTableAssociationResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ReplaceRouteTableAssociation',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'AssociationId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RouteTableId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ReportInstanceStatus' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ReportInstanceStatus',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Instances' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceId',
                    'items' => [
                        'name' => 'InstanceId',
                        'type' => 'string',
                    ],
                ],
                'Status' => [
                    'required' => true,
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
                'ReasonCodes' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ReasonCode',
                    'items' => [
                        'name' => 'ReasonCode',
                        'type' => 'string',
                    ],
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'RequestSpotFleet' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'RequestSpotFleetResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RequestSpotFleet',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SpotFleetRequestConfig' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'ClientToken' => [
                            'type' => 'string',
                        ],
                        'SpotPrice' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'TargetCapacity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'ValidFrom' => [
                            'type' => 'string',
                        ],
                        'ValidUntil' => [
                            'type' => 'string',
                        ],
                        'TerminateInstancesWithExpiration' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'IamFleetRole' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'LaunchSpecifications' => [
                            'required' => true,
                            'type' => 'array',
                            'minItems' => 1,
                            'items' => [
                                'name' => 'SpotFleetLaunchSpecification',
                                'type' => 'object',
                                'properties' => [
                                    'ImageId' => [
                                        'type' => 'string',
                                    ],
                                    'KeyName' => [
                                        'type' => 'string',
                                    ],
                                    'SecurityGroups' => [
                                        'type' => 'array',
                                        'sentAs' => 'GroupSet',
                                        'items' => [
                                            'name' => 'GroupSet',
                                            'type' => 'object',
                                            'properties' => [
                                                'GroupName' => [
                                                    'type' => 'string',
                                                ],
                                                'GroupId' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'UserData' => [
                                        'type' => 'string',
                                    ],
                                    'AddressingType' => [
                                        'type' => 'string',
                                    ],
                                    'InstanceType' => [
                                        'type' => 'string',
                                    ],
                                    'Placement' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'AvailabilityZone' => [
                                                'type' => 'string',
                                            ],
                                            'GroupName' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'KernelId' => [
                                        'type' => 'string',
                                    ],
                                    'RamdiskId' => [
                                        'type' => 'string',
                                    ],
                                    'BlockDeviceMappings' => [
                                        'type' => 'array',
                                        'sentAs' => 'BlockDeviceMapping',
                                        'items' => [
                                            'name' => 'BlockDeviceMapping',
                                            'type' => 'object',
                                            'properties' => [
                                                'VirtualName' => [
                                                    'type' => 'string',
                                                ],
                                                'DeviceName' => [
                                                    'type' => 'string',
                                                ],
                                                'Ebs' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'SnapshotId' => [
                                                            'type' => 'string',
                                                        ],
                                                        'VolumeSize' => [
                                                            'type' => 'numeric',
                                                        ],
                                                        'DeleteOnTermination' => [
                                                            'type' => 'boolean',
                                                            'format' =>
                                                                'boolean-string',
                                                        ],
                                                        'VolumeType' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Iops' => [
                                                            'type' => 'numeric',
                                                        ],
                                                        'Encrypted' => [
                                                            'type' => 'boolean',
                                                            'format' =>
                                                                'boolean-string',
                                                        ],
                                                    ],
                                                ],
                                                'NoDevice' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Monitoring' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Enabled' => [
                                                'type' => 'boolean',
                                                'format' => 'boolean-string',
                                            ],
                                        ],
                                    ],
                                    'SubnetId' => [
                                        'type' => 'string',
                                    ],
                                    'NetworkInterfaces' => [
                                        'type' => 'array',
                                        'sentAs' => 'NetworkInterfaceSet',
                                        'items' => [
                                            'name' => 'NetworkInterfaceSet',
                                            'type' => 'object',
                                            'properties' => [
                                                'NetworkInterfaceId' => [
                                                    'type' => 'string',
                                                ],
                                                'DeviceIndex' => [
                                                    'type' => 'numeric',
                                                ],
                                                'SubnetId' => [
                                                    'type' => 'string',
                                                ],
                                                'Description' => [
                                                    'type' => 'string',
                                                ],
                                                'PrivateIpAddress' => [
                                                    'type' => 'string',
                                                ],
                                                'Groups' => [
                                                    'type' => 'array',
                                                    'sentAs' =>
                                                        'SecurityGroupId',
                                                    'items' => [
                                                        'name' =>
                                                            'SecurityGroupId',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'DeleteOnTermination' => [
                                                    'type' => 'boolean',
                                                    'format' =>
                                                        'boolean-string',
                                                ],
                                                'PrivateIpAddresses' => [
                                                    'type' => 'array',
                                                    'sentAs' =>
                                                        'PrivateIpAddressesSet',
                                                    'items' => [
                                                        'name' =>
                                                            'PrivateIpAddressesSet',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'PrivateIpAddress' => [
                                                                'required' => true,
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Primary' => [
                                                                'type' =>
                                                                    'boolean',
                                                                'format' =>
                                                                    'boolean-string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'SecondaryPrivateIpAddressCount' => [
                                                    'type' => 'numeric',
                                                ],
                                                'AssociatePublicIpAddress' => [
                                                    'type' => 'boolean',
                                                    'format' =>
                                                        'boolean-string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'IamInstanceProfile' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Arn' => [
                                                'type' => 'string',
                                            ],
                                            'Name' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'EbsOptimized' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                    'WeightedCapacity' => [
                                        'type' => 'numeric',
                                    ],
                                    'SpotPrice' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'AllocationStrategy' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'RequestSpotInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'RequestSpotInstancesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RequestSpotInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SpotPrice' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClientToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceCount' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Type' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ValidFrom' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'aws.query',
                ],
                'ValidUntil' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'aws.query',
                ],
                'LaunchGroup' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AvailabilityZoneGroup' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'LaunchSpecification' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'ImageId' => [
                            'type' => 'string',
                        ],
                        'KeyName' => [
                            'type' => 'string',
                        ],
                        'UserData' => [
                            'type' => 'string',
                        ],
                        'AddressingType' => [
                            'type' => 'string',
                        ],
                        'InstanceType' => [
                            'type' => 'string',
                        ],
                        'Placement' => [
                            'type' => 'object',
                            'properties' => [
                                'AvailabilityZone' => [
                                    'type' => 'string',
                                ],
                                'GroupName' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'KernelId' => [
                            'type' => 'string',
                        ],
                        'RamdiskId' => [
                            'type' => 'string',
                        ],
                        'BlockDeviceMappings' => [
                            'type' => 'array',
                            'sentAs' => 'BlockDeviceMapping',
                            'items' => [
                                'name' => 'BlockDeviceMapping',
                                'type' => 'object',
                                'properties' => [
                                    'VirtualName' => [
                                        'type' => 'string',
                                    ],
                                    'DeviceName' => [
                                        'type' => 'string',
                                    ],
                                    'Ebs' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'SnapshotId' => [
                                                'type' => 'string',
                                            ],
                                            'VolumeSize' => [
                                                'type' => 'numeric',
                                            ],
                                            'DeleteOnTermination' => [
                                                'type' => 'boolean',
                                                'format' => 'boolean-string',
                                            ],
                                            'VolumeType' => [
                                                'type' => 'string',
                                            ],
                                            'Iops' => [
                                                'type' => 'numeric',
                                            ],
                                            'Encrypted' => [
                                                'type' => 'boolean',
                                                'format' => 'boolean-string',
                                            ],
                                        ],
                                    ],
                                    'NoDevice' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'Monitoring' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'required' => true,
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                        'SubnetId' => [
                            'type' => 'string',
                        ],
                        'NetworkInterfaces' => [
                            'type' => 'array',
                            'sentAs' => 'NetworkInterface',
                            'items' => [
                                'name' => 'NetworkInterface',
                                'type' => 'object',
                                'properties' => [
                                    'NetworkInterfaceId' => [
                                        'type' => 'string',
                                    ],
                                    'DeviceIndex' => [
                                        'type' => 'numeric',
                                    ],
                                    'SubnetId' => [
                                        'type' => 'string',
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                    ],
                                    'PrivateIpAddress' => [
                                        'type' => 'string',
                                    ],
                                    'Groups' => [
                                        'type' => 'array',
                                        'sentAs' => 'SecurityGroupId',
                                        'items' => [
                                            'name' => 'SecurityGroupId',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'DeleteOnTermination' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                    'PrivateIpAddresses' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' =>
                                                'PrivateIpAddressSpecification',
                                            'type' => 'object',
                                            'properties' => [
                                                'PrivateIpAddress' => [
                                                    'required' => true,
                                                    'type' => 'string',
                                                ],
                                                'Primary' => [
                                                    'type' => 'boolean',
                                                    'format' =>
                                                        'boolean-string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SecondaryPrivateIpAddressCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'AssociatePublicIpAddress' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                ],
                            ],
                        ],
                        'IamInstanceProfile' => [
                            'type' => 'object',
                            'properties' => [
                                'Arn' => [
                                    'type' => 'string',
                                ],
                                'Name' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'EbsOptimized' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'SecurityGroupIds' => [
                            'type' => 'array',
                            'sentAs' => 'SecurityGroupId',
                            'items' => [
                                'name' => 'SecurityGroupId',
                                'type' => 'string',
                            ],
                        ],
                        'SecurityGroups' => [
                            'type' => 'array',
                            'sentAs' => 'SecurityGroup',
                            'items' => [
                                'name' => 'SecurityGroup',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ResetImageAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ResetImageAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ImageId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attribute' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ResetInstanceAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ResetInstanceAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attribute' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ResetNetworkInterfaceAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ResetNetworkInterfaceAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'NetworkInterfaceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceDestCheck' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ResetSnapshotAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ResetSnapshotAttribute',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SnapshotId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attribute' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'RestoreAddressToClassic' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'RestoreAddressToClassicResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RestoreAddressToClassic',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'PublicIp' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'RevokeSecurityGroupEgress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RevokeSecurityGroupEgress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'GroupId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceSecurityGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceSecurityGroupOwnerId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'IpProtocol' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'FromPort' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'ToPort' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'CidrIp' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'IpPermissions' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'items' => [
                        'name' => 'IpPermission',
                        'type' => 'object',
                        'properties' => [
                            'IpProtocol' => [
                                'type' => 'string',
                            ],
                            'FromPort' => [
                                'type' => 'numeric',
                            ],
                            'ToPort' => [
                                'type' => 'numeric',
                            ],
                            'UserIdGroupPairs' => [
                                'type' => 'array',
                                'sentAs' => 'Groups',
                                'items' => [
                                    'name' => 'Groups',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'type' => 'string',
                                        ],
                                        'GroupName' => [
                                            'type' => 'string',
                                        ],
                                        'GroupId' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'IpRanges' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'IpRange',
                                    'type' => 'object',
                                    'properties' => [
                                        'CidrIp' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'PrefixListIds' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PrefixListId',
                                    'type' => 'object',
                                    'properties' => [
                                        'PrefixListId' => [
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
        'RevokeSecurityGroupIngress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RevokeSecurityGroupIngress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'GroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'GroupId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceSecurityGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceSecurityGroupOwnerId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'IpProtocol' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'FromPort' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'ToPort' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'CidrIp' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'IpPermissions' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'items' => [
                        'name' => 'IpPermission',
                        'type' => 'object',
                        'properties' => [
                            'IpProtocol' => [
                                'type' => 'string',
                            ],
                            'FromPort' => [
                                'type' => 'numeric',
                            ],
                            'ToPort' => [
                                'type' => 'numeric',
                            ],
                            'UserIdGroupPairs' => [
                                'type' => 'array',
                                'sentAs' => 'Groups',
                                'items' => [
                                    'name' => 'Groups',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'type' => 'string',
                                        ],
                                        'GroupName' => [
                                            'type' => 'string',
                                        ],
                                        'GroupId' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'IpRanges' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'IpRange',
                                    'type' => 'object',
                                    'properties' => [
                                        'CidrIp' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'PrefixListIds' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PrefixListId',
                                    'type' => 'object',
                                    'properties' => [
                                        'PrefixListId' => [
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
        'RunInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'reservation',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RunInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ImageId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MinCount' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'MaxCount' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'KeyName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SecurityGroups' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SecurityGroup',
                    'items' => [
                        'name' => 'SecurityGroup',
                        'type' => 'string',
                    ],
                ],
                'SecurityGroupIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SecurityGroupId',
                    'items' => [
                        'name' => 'SecurityGroupId',
                        'type' => 'string',
                    ],
                ],
                'UserData' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Placement' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'AvailabilityZone' => [
                            'type' => 'string',
                        ],
                        'GroupName' => [
                            'type' => 'string',
                        ],
                        'Tenancy' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'KernelId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RamdiskId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'BlockDeviceMappings' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'BlockDeviceMapping',
                    'items' => [
                        'name' => 'BlockDeviceMapping',
                        'type' => 'object',
                        'properties' => [
                            'VirtualName' => [
                                'type' => 'string',
                            ],
                            'DeviceName' => [
                                'type' => 'string',
                            ],
                            'Ebs' => [
                                'type' => 'object',
                                'properties' => [
                                    'SnapshotId' => [
                                        'type' => 'string',
                                    ],
                                    'VolumeSize' => [
                                        'type' => 'numeric',
                                    ],
                                    'DeleteOnTermination' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                    'VolumeType' => [
                                        'type' => 'string',
                                    ],
                                    'Iops' => [
                                        'type' => 'numeric',
                                    ],
                                    'Encrypted' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                ],
                            ],
                            'NoDevice' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Monitoring' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Enabled' => [
                            'required' => true,
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
                'SubnetId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DisableApiTermination' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceInitiatedShutdownBehavior' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PrivateIpAddress' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClientToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AdditionalInfo' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NetworkInterfaces' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'NetworkInterface',
                    'items' => [
                        'name' => 'NetworkInterface',
                        'type' => 'object',
                        'properties' => [
                            'NetworkInterfaceId' => [
                                'type' => 'string',
                            ],
                            'DeviceIndex' => [
                                'type' => 'numeric',
                            ],
                            'SubnetId' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'PrivateIpAddress' => [
                                'type' => 'string',
                            ],
                            'Groups' => [
                                'type' => 'array',
                                'sentAs' => 'SecurityGroupId',
                                'items' => [
                                    'name' => 'SecurityGroupId',
                                    'type' => 'string',
                                ],
                            ],
                            'DeleteOnTermination' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                            'PrivateIpAddresses' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PrivateIpAddressSpecification',
                                    'type' => 'object',
                                    'properties' => [
                                        'PrivateIpAddress' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                        'Primary' => [
                                            'type' => 'boolean',
                                            'format' => 'boolean-string',
                                        ],
                                    ],
                                ],
                            ],
                            'SecondaryPrivateIpAddressCount' => [
                                'type' => 'numeric',
                            ],
                            'AssociatePublicIpAddress' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
                'IamInstanceProfile' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'EbsOptimized' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'StartInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'StartInstancesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'StartInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'InstanceIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceId',
                    'items' => [
                        'name' => 'InstanceId',
                        'type' => 'string',
                    ],
                ],
                'AdditionalInfo' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'StopInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'StopInstancesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'StopInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceId',
                    'items' => [
                        'name' => 'InstanceId',
                        'type' => 'string',
                    ],
                ],
                'Force' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'TerminateInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'TerminateInstancesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'TerminateInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceId',
                    'items' => [
                        'name' => 'InstanceId',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'UnassignPrivateIpAddresses' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UnassignPrivateIpAddresses',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'NetworkInterfaceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PrivateIpAddresses' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PrivateIpAddress',
                    'items' => [
                        'name' => 'PrivateIpAddress',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'UnmonitorInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UnmonitorInstancesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UnmonitorInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-04-15',
                ],
                'DryRun' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'InstanceIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceId',
                    'items' => [
                        'name' => 'InstanceId',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'models' => [
        'AcceptVpcPeeringConnectionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VpcPeeringConnection' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'vpcPeeringConnection',
                    'properties' => [
                        'AccepterVpcInfo' => [
                            'type' => 'object',
                            'sentAs' => 'accepterVpcInfo',
                            'properties' => [
                                'CidrBlock' => [
                                    'type' => 'string',
                                    'sentAs' => 'cidrBlock',
                                ],
                                'OwnerId' => [
                                    'type' => 'string',
                                    'sentAs' => 'ownerId',
                                ],
                                'VpcId' => [
                                    'type' => 'string',
                                    'sentAs' => 'vpcId',
                                ],
                            ],
                        ],
                        'ExpirationTime' => [
                            'type' => 'string',
                            'sentAs' => 'expirationTime',
                        ],
                        'RequesterVpcInfo' => [
                            'type' => 'object',
                            'sentAs' => 'requesterVpcInfo',
                            'properties' => [
                                'CidrBlock' => [
                                    'type' => 'string',
                                    'sentAs' => 'cidrBlock',
                                ],
                                'OwnerId' => [
                                    'type' => 'string',
                                    'sentAs' => 'ownerId',
                                ],
                                'VpcId' => [
                                    'type' => 'string',
                                    'sentAs' => 'vpcId',
                                ],
                            ],
                        ],
                        'Status' => [
                            'type' => 'object',
                            'sentAs' => 'status',
                            'properties' => [
                                'Code' => [
                                    'type' => 'string',
                                    'sentAs' => 'code',
                                ],
                                'Message' => [
                                    'type' => 'string',
                                    'sentAs' => 'message',
                                ],
                            ],
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                        'VpcPeeringConnectionId' => [
                            'type' => 'string',
                            'sentAs' => 'vpcPeeringConnectionId',
                        ],
                    ],
                ],
            ],
        ],
        'AllocateAddressResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PublicIp' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'publicIp',
                ],
                'Domain' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'domain',
                ],
                'AllocationId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'allocationId',
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'AssociateAddressResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AssociationId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'associationId',
                ],
            ],
        ],
        'AssociateRouteTableResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AssociationId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'associationId',
                ],
            ],
        ],
        'AttachClassicLinkVpcResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Return' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                    'sentAs' => 'return',
                ],
            ],
        ],
        'AttachNetworkInterfaceResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AttachmentId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'attachmentId',
                ],
            ],
        ],
        'attachment' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VolumeId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'volumeId',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'instanceId',
                ],
                'Device' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'device',
                ],
                'State' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'status',
                ],
                'AttachTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'attachTime',
                ],
                'DeleteOnTermination' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                    'sentAs' => 'deleteOnTermination',
                ],
            ],
        ],
        'AttachVpnGatewayResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VpcAttachment' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'attachment',
                    'properties' => [
                        'VpcId' => [
                            'type' => 'string',
                            'sentAs' => 'vpcId',
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                    ],
                ],
            ],
        ],
        'BundleInstanceResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'BundleTask' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'bundleInstanceTask',
                    'properties' => [
                        'InstanceId' => [
                            'type' => 'string',
                            'sentAs' => 'instanceId',
                        ],
                        'BundleId' => [
                            'type' => 'string',
                            'sentAs' => 'bundleId',
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                        'StartTime' => [
                            'type' => 'string',
                            'sentAs' => 'startTime',
                        ],
                        'UpdateTime' => [
                            'type' => 'string',
                            'sentAs' => 'updateTime',
                        ],
                        'Storage' => [
                            'type' => 'object',
                            'sentAs' => 'storage',
                            'properties' => [
                                'S3' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Bucket' => [
                                            'type' => 'string',
                                            'sentAs' => 'bucket',
                                        ],
                                        'Prefix' => [
                                            'type' => 'string',
                                            'sentAs' => 'prefix',
                                        ],
                                        'AWSAccessKeyId' => [
                                            'type' => 'string',
                                        ],
                                        'UploadPolicy' => [
                                            'type' => 'string',
                                            'sentAs' => 'uploadPolicy',
                                        ],
                                        'UploadPolicySignature' => [
                                            'type' => 'string',
                                            'sentAs' => 'uploadPolicySignature',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Progress' => [
                            'type' => 'string',
                            'sentAs' => 'progress',
                        ],
                        'BundleTaskError' => [
                            'type' => 'object',
                            'sentAs' => 'error',
                            'properties' => [
                                'Code' => [
                                    'type' => 'string',
                                    'sentAs' => 'code',
                                ],
                                'Message' => [
                                    'type' => 'string',
                                    'sentAs' => 'message',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CancelBundleTaskResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'BundleTask' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'bundleInstanceTask',
                    'properties' => [
                        'InstanceId' => [
                            'type' => 'string',
                            'sentAs' => 'instanceId',
                        ],
                        'BundleId' => [
                            'type' => 'string',
                            'sentAs' => 'bundleId',
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                        'StartTime' => [
                            'type' => 'string',
                            'sentAs' => 'startTime',
                        ],
                        'UpdateTime' => [
                            'type' => 'string',
                            'sentAs' => 'updateTime',
                        ],
                        'Storage' => [
                            'type' => 'object',
                            'sentAs' => 'storage',
                            'properties' => [
                                'S3' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Bucket' => [
                                            'type' => 'string',
                                            'sentAs' => 'bucket',
                                        ],
                                        'Prefix' => [
                                            'type' => 'string',
                                            'sentAs' => 'prefix',
                                        ],
                                        'AWSAccessKeyId' => [
                                            'type' => 'string',
                                        ],
                                        'UploadPolicy' => [
                                            'type' => 'string',
                                            'sentAs' => 'uploadPolicy',
                                        ],
                                        'UploadPolicySignature' => [
                                            'type' => 'string',
                                            'sentAs' => 'uploadPolicySignature',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Progress' => [
                            'type' => 'string',
                            'sentAs' => 'progress',
                        ],
                        'BundleTaskError' => [
                            'type' => 'object',
                            'sentAs' => 'error',
                            'properties' => [
                                'Code' => [
                                    'type' => 'string',
                                    'sentAs' => 'code',
                                ],
                                'Message' => [
                                    'type' => 'string',
                                    'sentAs' => 'message',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CancelImportTaskResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ImportTaskId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'importTaskId',
                ],
                'State' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'state',
                ],
                'PreviousState' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'previousState',
                ],
            ],
        ],
        'CancelReservedInstancesListingResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ReservedInstancesListings' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'reservedInstancesListingsSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ReservedInstancesListingId' => [
                                'type' => 'string',
                                'sentAs' => 'reservedInstancesListingId',
                            ],
                            'ReservedInstancesId' => [
                                'type' => 'string',
                                'sentAs' => 'reservedInstancesId',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                                'sentAs' => 'createDate',
                            ],
                            'UpdateDate' => [
                                'type' => 'string',
                                'sentAs' => 'updateDate',
                            ],
                            'Status' => [
                                'type' => 'string',
                                'sentAs' => 'status',
                            ],
                            'StatusMessage' => [
                                'type' => 'string',
                                'sentAs' => 'statusMessage',
                            ],
                            'InstanceCounts' => [
                                'type' => 'array',
                                'sentAs' => 'instanceCounts',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'State' => [
                                            'type' => 'string',
                                            'sentAs' => 'state',
                                        ],
                                        'InstanceCount' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'instanceCount',
                                        ],
                                    ],
                                ],
                            ],
                            'PriceSchedules' => [
                                'type' => 'array',
                                'sentAs' => 'priceSchedules',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Term' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'term',
                                        ],
                                        'Price' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'price',
                                        ],
                                        'CurrencyCode' => [
                                            'type' => 'string',
                                            'sentAs' => 'currencyCode',
                                        ],
                                        'Active' => [
                                            'type' => 'boolean',
                                            'sentAs' => 'active',
                                        ],
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'ClientToken' => [
                                'type' => 'string',
                                'sentAs' => 'clientToken',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CancelSpotFleetRequestsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'UnsuccessfulFleetRequests' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'unsuccessfulFleetRequestSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'SpotFleetRequestId' => [
                                'type' => 'string',
                                'sentAs' => 'spotFleetRequestId',
                            ],
                            'Error' => [
                                'type' => 'object',
                                'sentAs' => 'error',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'string',
                                        'sentAs' => 'code',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                        'sentAs' => 'message',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'SuccessfulFleetRequests' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'successfulFleetRequestSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'SpotFleetRequestId' => [
                                'type' => 'string',
                                'sentAs' => 'spotFleetRequestId',
                            ],
                            'CurrentSpotFleetRequestState' => [
                                'type' => 'string',
                                'sentAs' => 'currentSpotFleetRequestState',
                            ],
                            'PreviousSpotFleetRequestState' => [
                                'type' => 'string',
                                'sentAs' => 'previousSpotFleetRequestState',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CancelSpotInstanceRequestsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CancelledSpotInstanceRequests' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'spotInstanceRequestSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'SpotInstanceRequestId' => [
                                'type' => 'string',
                                'sentAs' => 'spotInstanceRequestId',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ConfirmProductInstanceResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OwnerId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'ownerId',
                ],
                'Return' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                    'sentAs' => 'return',
                ],
            ],
        ],
        'CopyImageResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ImageId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'imageId',
                ],
            ],
        ],
        'CopySnapshotResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SnapshotId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'snapshotId',
                ],
            ],
        ],
        'CreateCustomerGatewayResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CustomerGateway' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'customerGateway',
                    'properties' => [
                        'CustomerGatewayId' => [
                            'type' => 'string',
                            'sentAs' => 'customerGatewayId',
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                        'Type' => [
                            'type' => 'string',
                            'sentAs' => 'type',
                        ],
                        'IpAddress' => [
                            'type' => 'string',
                            'sentAs' => 'ipAddress',
                        ],
                        'BgpAsn' => [
                            'type' => 'string',
                            'sentAs' => 'bgpAsn',
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateDhcpOptionsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DhcpOptions' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'dhcpOptions',
                    'properties' => [
                        'DhcpOptionsId' => [
                            'type' => 'string',
                            'sentAs' => 'dhcpOptionsId',
                        ],
                        'DhcpConfigurations' => [
                            'type' => 'array',
                            'sentAs' => 'dhcpConfigurationSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Values' => [
                                        'type' => 'array',
                                        'sentAs' => 'valueSet',
                                        'items' => [
                                            'name' => 'item',
                                            'type' => 'string',
                                            'sentAs' => 'item',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateFlowLogsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'FlowLogIds' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'flowLogIdSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'string',
                        'sentAs' => 'item',
                    ],
                ],
                'ClientToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'clientToken',
                ],
                'Unsuccessful' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'unsuccessful',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ResourceId' => [
                                'type' => 'string',
                                'sentAs' => 'resourceId',
                            ],
                            'Error' => [
                                'type' => 'object',
                                'sentAs' => 'error',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'string',
                                        'sentAs' => 'code',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                        'sentAs' => 'message',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateImageResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ImageId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'imageId',
                ],
            ],
        ],
        'CreateInstanceExportTaskResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ExportTask' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'exportTask',
                    'properties' => [
                        'ExportTaskId' => [
                            'type' => 'string',
                            'sentAs' => 'exportTaskId',
                        ],
                        'Description' => [
                            'type' => 'string',
                            'sentAs' => 'description',
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                        'StatusMessage' => [
                            'type' => 'string',
                            'sentAs' => 'statusMessage',
                        ],
                        'InstanceExportDetails' => [
                            'type' => 'object',
                            'sentAs' => 'instanceExport',
                            'properties' => [
                                'InstanceId' => [
                                    'type' => 'string',
                                    'sentAs' => 'instanceId',
                                ],
                                'TargetEnvironment' => [
                                    'type' => 'string',
                                    'sentAs' => 'targetEnvironment',
                                ],
                            ],
                        ],
                        'ExportToS3Task' => [
                            'type' => 'object',
                            'sentAs' => 'exportToS3',
                            'properties' => [
                                'DiskImageFormat' => [
                                    'type' => 'string',
                                    'sentAs' => 'diskImageFormat',
                                ],
                                'ContainerFormat' => [
                                    'type' => 'string',
                                    'sentAs' => 'containerFormat',
                                ],
                                'S3Bucket' => [
                                    'type' => 'string',
                                    'sentAs' => 's3Bucket',
                                ],
                                'S3Key' => [
                                    'type' => 'string',
                                    'sentAs' => 's3Key',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateInternetGatewayResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InternetGateway' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'internetGateway',
                    'properties' => [
                        'InternetGatewayId' => [
                            'type' => 'string',
                            'sentAs' => 'internetGatewayId',
                        ],
                        'Attachments' => [
                            'type' => 'array',
                            'sentAs' => 'attachmentSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'VpcId' => [
                                        'type' => 'string',
                                        'sentAs' => 'vpcId',
                                    ],
                                    'State' => [
                                        'type' => 'string',
                                        'sentAs' => 'state',
                                    ],
                                ],
                            ],
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateKeyPairResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'KeyName' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'keyName',
                ],
                'KeyFingerprint' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'keyFingerprint',
                ],
                'KeyMaterial' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'keyMaterial',
                ],
            ],
        ],
        'CreateNetworkAclResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NetworkAcl' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'networkAcl',
                    'properties' => [
                        'NetworkAclId' => [
                            'type' => 'string',
                            'sentAs' => 'networkAclId',
                        ],
                        'VpcId' => [
                            'type' => 'string',
                            'sentAs' => 'vpcId',
                        ],
                        'IsDefault' => [
                            'type' => 'boolean',
                            'sentAs' => 'default',
                        ],
                        'Entries' => [
                            'type' => 'array',
                            'sentAs' => 'entrySet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'RuleNumber' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'ruleNumber',
                                    ],
                                    'Protocol' => [
                                        'type' => 'string',
                                        'sentAs' => 'protocol',
                                    ],
                                    'RuleAction' => [
                                        'type' => 'string',
                                        'sentAs' => 'ruleAction',
                                    ],
                                    'Egress' => [
                                        'type' => 'boolean',
                                        'sentAs' => 'egress',
                                    ],
                                    'CidrBlock' => [
                                        'type' => 'string',
                                        'sentAs' => 'cidrBlock',
                                    ],
                                    'IcmpTypeCode' => [
                                        'type' => 'object',
                                        'sentAs' => 'icmpTypeCode',
                                        'properties' => [
                                            'Type' => [
                                                'type' => 'numeric',
                                                'sentAs' => 'type',
                                            ],
                                            'Code' => [
                                                'type' => 'numeric',
                                                'sentAs' => 'code',
                                            ],
                                        ],
                                    ],
                                    'PortRange' => [
                                        'type' => 'object',
                                        'sentAs' => 'portRange',
                                        'properties' => [
                                            'From' => [
                                                'type' => 'numeric',
                                                'sentAs' => 'from',
                                            ],
                                            'To' => [
                                                'type' => 'numeric',
                                                'sentAs' => 'to',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Associations' => [
                            'type' => 'array',
                            'sentAs' => 'associationSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'NetworkAclAssociationId' => [
                                        'type' => 'string',
                                        'sentAs' => 'networkAclAssociationId',
                                    ],
                                    'NetworkAclId' => [
                                        'type' => 'string',
                                        'sentAs' => 'networkAclId',
                                    ],
                                    'SubnetId' => [
                                        'type' => 'string',
                                        'sentAs' => 'subnetId',
                                    ],
                                ],
                            ],
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateNetworkInterfaceResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NetworkInterface' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'networkInterface',
                    'properties' => [
                        'NetworkInterfaceId' => [
                            'type' => 'string',
                            'sentAs' => 'networkInterfaceId',
                        ],
                        'SubnetId' => [
                            'type' => 'string',
                            'sentAs' => 'subnetId',
                        ],
                        'VpcId' => [
                            'type' => 'string',
                            'sentAs' => 'vpcId',
                        ],
                        'AvailabilityZone' => [
                            'type' => 'string',
                            'sentAs' => 'availabilityZone',
                        ],
                        'Description' => [
                            'type' => 'string',
                            'sentAs' => 'description',
                        ],
                        'OwnerId' => [
                            'type' => 'string',
                            'sentAs' => 'ownerId',
                        ],
                        'RequesterId' => [
                            'type' => 'string',
                            'sentAs' => 'requesterId',
                        ],
                        'RequesterManaged' => [
                            'type' => 'boolean',
                            'sentAs' => 'requesterManaged',
                        ],
                        'Status' => [
                            'type' => 'string',
                            'sentAs' => 'status',
                        ],
                        'MacAddress' => [
                            'type' => 'string',
                            'sentAs' => 'macAddress',
                        ],
                        'PrivateIpAddress' => [
                            'type' => 'string',
                            'sentAs' => 'privateIpAddress',
                        ],
                        'PrivateDnsName' => [
                            'type' => 'string',
                            'sentAs' => 'privateDnsName',
                        ],
                        'SourceDestCheck' => [
                            'type' => 'boolean',
                            'sentAs' => 'sourceDestCheck',
                        ],
                        'Groups' => [
                            'type' => 'array',
                            'sentAs' => 'groupSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'GroupName' => [
                                        'type' => 'string',
                                        'sentAs' => 'groupName',
                                    ],
                                    'GroupId' => [
                                        'type' => 'string',
                                        'sentAs' => 'groupId',
                                    ],
                                ],
                            ],
                        ],
                        'Attachment' => [
                            'type' => 'object',
                            'sentAs' => 'attachment',
                            'properties' => [
                                'AttachmentId' => [
                                    'type' => 'string',
                                    'sentAs' => 'attachmentId',
                                ],
                                'InstanceId' => [
                                    'type' => 'string',
                                    'sentAs' => 'instanceId',
                                ],
                                'InstanceOwnerId' => [
                                    'type' => 'string',
                                    'sentAs' => 'instanceOwnerId',
                                ],
                                'DeviceIndex' => [
                                    'type' => 'numeric',
                                    'sentAs' => 'deviceIndex',
                                ],
                                'Status' => [
                                    'type' => 'string',
                                    'sentAs' => 'status',
                                ],
                                'AttachTime' => [
                                    'type' => 'string',
                                    'sentAs' => 'attachTime',
                                ],
                                'DeleteOnTermination' => [
                                    'type' => 'boolean',
                                    'sentAs' => 'deleteOnTermination',
                                ],
                            ],
                        ],
                        'Association' => [
                            'type' => 'object',
                            'sentAs' => 'association',
                            'properties' => [
                                'PublicIp' => [
                                    'type' => 'string',
                                    'sentAs' => 'publicIp',
                                ],
                                'PublicDnsName' => [
                                    'type' => 'string',
                                    'sentAs' => 'publicDnsName',
                                ],
                                'IpOwnerId' => [
                                    'type' => 'string',
                                    'sentAs' => 'ipOwnerId',
                                ],
                                'AllocationId' => [
                                    'type' => 'string',
                                    'sentAs' => 'allocationId',
                                ],
                                'AssociationId' => [
                                    'type' => 'string',
                                    'sentAs' => 'associationId',
                                ],
                            ],
                        ],
                        'TagSet' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                        'PrivateIpAddresses' => [
                            'type' => 'array',
                            'sentAs' => 'privateIpAddressesSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'PrivateIpAddress' => [
                                        'type' => 'string',
                                        'sentAs' => 'privateIpAddress',
                                    ],
                                    'PrivateDnsName' => [
                                        'type' => 'string',
                                        'sentAs' => 'privateDnsName',
                                    ],
                                    'Primary' => [
                                        'type' => 'boolean',
                                        'sentAs' => 'primary',
                                    ],
                                    'Association' => [
                                        'type' => 'object',
                                        'sentAs' => 'association',
                                        'properties' => [
                                            'PublicIp' => [
                                                'type' => 'string',
                                                'sentAs' => 'publicIp',
                                            ],
                                            'PublicDnsName' => [
                                                'type' => 'string',
                                                'sentAs' => 'publicDnsName',
                                            ],
                                            'IpOwnerId' => [
                                                'type' => 'string',
                                                'sentAs' => 'ipOwnerId',
                                            ],
                                            'AllocationId' => [
                                                'type' => 'string',
                                                'sentAs' => 'allocationId',
                                            ],
                                            'AssociationId' => [
                                                'type' => 'string',
                                                'sentAs' => 'associationId',
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
        'CreateReservedInstancesListingResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ReservedInstancesListings' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'reservedInstancesListingsSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ReservedInstancesListingId' => [
                                'type' => 'string',
                                'sentAs' => 'reservedInstancesListingId',
                            ],
                            'ReservedInstancesId' => [
                                'type' => 'string',
                                'sentAs' => 'reservedInstancesId',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                                'sentAs' => 'createDate',
                            ],
                            'UpdateDate' => [
                                'type' => 'string',
                                'sentAs' => 'updateDate',
                            ],
                            'Status' => [
                                'type' => 'string',
                                'sentAs' => 'status',
                            ],
                            'StatusMessage' => [
                                'type' => 'string',
                                'sentAs' => 'statusMessage',
                            ],
                            'InstanceCounts' => [
                                'type' => 'array',
                                'sentAs' => 'instanceCounts',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'State' => [
                                            'type' => 'string',
                                            'sentAs' => 'state',
                                        ],
                                        'InstanceCount' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'instanceCount',
                                        ],
                                    ],
                                ],
                            ],
                            'PriceSchedules' => [
                                'type' => 'array',
                                'sentAs' => 'priceSchedules',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Term' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'term',
                                        ],
                                        'Price' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'price',
                                        ],
                                        'CurrencyCode' => [
                                            'type' => 'string',
                                            'sentAs' => 'currencyCode',
                                        ],
                                        'Active' => [
                                            'type' => 'boolean',
                                            'sentAs' => 'active',
                                        ],
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'ClientToken' => [
                                'type' => 'string',
                                'sentAs' => 'clientToken',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateRouteResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Return' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                    'sentAs' => 'return',
                ],
            ],
        ],
        'CreateRouteTableResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RouteTable' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'routeTable',
                    'properties' => [
                        'RouteTableId' => [
                            'type' => 'string',
                            'sentAs' => 'routeTableId',
                        ],
                        'VpcId' => [
                            'type' => 'string',
                            'sentAs' => 'vpcId',
                        ],
                        'Routes' => [
                            'type' => 'array',
                            'sentAs' => 'routeSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'DestinationCidrBlock' => [
                                        'type' => 'string',
                                        'sentAs' => 'destinationCidrBlock',
                                    ],
                                    'DestinationPrefixListId' => [
                                        'type' => 'string',
                                        'sentAs' => 'destinationPrefixListId',
                                    ],
                                    'GatewayId' => [
                                        'type' => 'string',
                                        'sentAs' => 'gatewayId',
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'sentAs' => 'instanceId',
                                    ],
                                    'InstanceOwnerId' => [
                                        'type' => 'string',
                                        'sentAs' => 'instanceOwnerId',
                                    ],
                                    'NetworkInterfaceId' => [
                                        'type' => 'string',
                                        'sentAs' => 'networkInterfaceId',
                                    ],
                                    'VpcPeeringConnectionId' => [
                                        'type' => 'string',
                                        'sentAs' => 'vpcPeeringConnectionId',
                                    ],
                                    'State' => [
                                        'type' => 'string',
                                        'sentAs' => 'state',
                                    ],
                                    'Origin' => [
                                        'type' => 'string',
                                        'sentAs' => 'origin',
                                    ],
                                ],
                            ],
                        ],
                        'Associations' => [
                            'type' => 'array',
                            'sentAs' => 'associationSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'RouteTableAssociationId' => [
                                        'type' => 'string',
                                        'sentAs' => 'routeTableAssociationId',
                                    ],
                                    'RouteTableId' => [
                                        'type' => 'string',
                                        'sentAs' => 'routeTableId',
                                    ],
                                    'SubnetId' => [
                                        'type' => 'string',
                                        'sentAs' => 'subnetId',
                                    ],
                                    'Main' => [
                                        'type' => 'boolean',
                                        'sentAs' => 'main',
                                    ],
                                ],
                            ],
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                        'PropagatingVgws' => [
                            'type' => 'array',
                            'sentAs' => 'propagatingVgwSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'GatewayId' => [
                                        'type' => 'string',
                                        'sentAs' => 'gatewayId',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateSecurityGroupResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GroupId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'groupId',
                ],
            ],
        ],
        'snapshot' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SnapshotId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'snapshotId',
                ],
                'VolumeId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'volumeId',
                ],
                'State' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'status',
                ],
                'StateMessage' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'statusMessage',
                ],
                'StartTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'startTime',
                ],
                'Progress' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'progress',
                ],
                'OwnerId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'ownerId',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'description',
                ],
                'VolumeSize' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                    'sentAs' => 'volumeSize',
                ],
                'OwnerAlias' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'ownerAlias',
                ],
                'Encrypted' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                    'sentAs' => 'encrypted',
                ],
                'KmsKeyId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'kmsKeyId',
                ],
                'DataEncryptionKeyId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'dataEncryptionKeyId',
                ],
            ],
        ],
        'CreateSpotDatafeedSubscriptionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SpotDatafeedSubscription' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'spotDatafeedSubscription',
                    'properties' => [
                        'OwnerId' => [
                            'type' => 'string',
                            'sentAs' => 'ownerId',
                        ],
                        'Bucket' => [
                            'type' => 'string',
                            'sentAs' => 'bucket',
                        ],
                        'Prefix' => [
                            'type' => 'string',
                            'sentAs' => 'prefix',
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                        'Fault' => [
                            'type' => 'object',
                            'sentAs' => 'fault',
                            'properties' => [
                                'Code' => [
                                    'type' => 'string',
                                    'sentAs' => 'code',
                                ],
                                'Message' => [
                                    'type' => 'string',
                                    'sentAs' => 'message',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateSubnetResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Subnet' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'subnet',
                    'properties' => [
                        'SubnetId' => [
                            'type' => 'string',
                            'sentAs' => 'subnetId',
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                        'VpcId' => [
                            'type' => 'string',
                            'sentAs' => 'vpcId',
                        ],
                        'CidrBlock' => [
                            'type' => 'string',
                            'sentAs' => 'cidrBlock',
                        ],
                        'AvailableIpAddressCount' => [
                            'type' => 'numeric',
                            'sentAs' => 'availableIpAddressCount',
                        ],
                        'AvailabilityZone' => [
                            'type' => 'string',
                            'sentAs' => 'availabilityZone',
                        ],
                        'DefaultForAz' => [
                            'type' => 'boolean',
                            'sentAs' => 'defaultForAz',
                        ],
                        'MapPublicIpOnLaunch' => [
                            'type' => 'boolean',
                            'sentAs' => 'mapPublicIpOnLaunch',
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'volume' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VolumeId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'volumeId',
                ],
                'Size' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                    'sentAs' => 'size',
                ],
                'SnapshotId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'snapshotId',
                ],
                'AvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'availabilityZone',
                ],
                'State' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'status',
                ],
                'CreateTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'createTime',
                ],
                'Attachments' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'attachmentSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'VolumeId' => [
                                'type' => 'string',
                                'sentAs' => 'volumeId',
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'Device' => [
                                'type' => 'string',
                                'sentAs' => 'device',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'status',
                            ],
                            'AttachTime' => [
                                'type' => 'string',
                                'sentAs' => 'attachTime',
                            ],
                            'DeleteOnTermination' => [
                                'type' => 'boolean',
                                'sentAs' => 'deleteOnTermination',
                            ],
                        ],
                    ],
                ],
                'Tags' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'tagSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'Key' => [
                                'type' => 'string',
                                'sentAs' => 'key',
                            ],
                            'Value' => [
                                'type' => 'string',
                                'sentAs' => 'value',
                            ],
                        ],
                    ],
                ],
                'VolumeType' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'volumeType',
                ],
                'Iops' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                    'sentAs' => 'iops',
                ],
                'Encrypted' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                    'sentAs' => 'encrypted',
                ],
                'KmsKeyId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'kmsKeyId',
                ],
            ],
        ],
        'CreateVpcResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Vpc' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'vpc',
                    'properties' => [
                        'VpcId' => [
                            'type' => 'string',
                            'sentAs' => 'vpcId',
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                        'CidrBlock' => [
                            'type' => 'string',
                            'sentAs' => 'cidrBlock',
                        ],
                        'DhcpOptionsId' => [
                            'type' => 'string',
                            'sentAs' => 'dhcpOptionsId',
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                        'InstanceTenancy' => [
                            'type' => 'string',
                            'sentAs' => 'instanceTenancy',
                        ],
                        'IsDefault' => [
                            'type' => 'boolean',
                            'sentAs' => 'isDefault',
                        ],
                    ],
                ],
            ],
        ],
        'CreateVpcEndpointResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VpcEndpoint' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'vpcEndpoint',
                    'properties' => [
                        'VpcEndpointId' => [
                            'type' => 'string',
                            'sentAs' => 'vpcEndpointId',
                        ],
                        'VpcId' => [
                            'type' => 'string',
                            'sentAs' => 'vpcId',
                        ],
                        'ServiceName' => [
                            'type' => 'string',
                            'sentAs' => 'serviceName',
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                        'PolicyDocument' => [
                            'type' => 'string',
                            'sentAs' => 'policyDocument',
                        ],
                        'RouteTableIds' => [
                            'type' => 'array',
                            'sentAs' => 'routeTableIdSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'string',
                                'sentAs' => 'item',
                            ],
                        ],
                        'CreationTimestamp' => [
                            'type' => 'string',
                            'sentAs' => 'creationTimestamp',
                        ],
                    ],
                ],
                'ClientToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'clientToken',
                ],
            ],
        ],
        'CreateVpcPeeringConnectionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VpcPeeringConnection' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'vpcPeeringConnection',
                    'properties' => [
                        'AccepterVpcInfo' => [
                            'type' => 'object',
                            'sentAs' => 'accepterVpcInfo',
                            'properties' => [
                                'CidrBlock' => [
                                    'type' => 'string',
                                    'sentAs' => 'cidrBlock',
                                ],
                                'OwnerId' => [
                                    'type' => 'string',
                                    'sentAs' => 'ownerId',
                                ],
                                'VpcId' => [
                                    'type' => 'string',
                                    'sentAs' => 'vpcId',
                                ],
                            ],
                        ],
                        'ExpirationTime' => [
                            'type' => 'string',
                            'sentAs' => 'expirationTime',
                        ],
                        'RequesterVpcInfo' => [
                            'type' => 'object',
                            'sentAs' => 'requesterVpcInfo',
                            'properties' => [
                                'CidrBlock' => [
                                    'type' => 'string',
                                    'sentAs' => 'cidrBlock',
                                ],
                                'OwnerId' => [
                                    'type' => 'string',
                                    'sentAs' => 'ownerId',
                                ],
                                'VpcId' => [
                                    'type' => 'string',
                                    'sentAs' => 'vpcId',
                                ],
                            ],
                        ],
                        'Status' => [
                            'type' => 'object',
                            'sentAs' => 'status',
                            'properties' => [
                                'Code' => [
                                    'type' => 'string',
                                    'sentAs' => 'code',
                                ],
                                'Message' => [
                                    'type' => 'string',
                                    'sentAs' => 'message',
                                ],
                            ],
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                        'VpcPeeringConnectionId' => [
                            'type' => 'string',
                            'sentAs' => 'vpcPeeringConnectionId',
                        ],
                    ],
                ],
            ],
        ],
        'CreateVpnConnectionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VpnConnection' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'vpnConnection',
                    'properties' => [
                        'VpnConnectionId' => [
                            'type' => 'string',
                            'sentAs' => 'vpnConnectionId',
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                        'CustomerGatewayConfiguration' => [
                            'type' => 'string',
                            'sentAs' => 'customerGatewayConfiguration',
                        ],
                        'Type' => [
                            'type' => 'string',
                            'sentAs' => 'type',
                        ],
                        'CustomerGatewayId' => [
                            'type' => 'string',
                            'sentAs' => 'customerGatewayId',
                        ],
                        'VpnGatewayId' => [
                            'type' => 'string',
                            'sentAs' => 'vpnGatewayId',
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                        'VgwTelemetry' => [
                            'type' => 'array',
                            'sentAs' => 'vgwTelemetry',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'OutsideIpAddress' => [
                                        'type' => 'string',
                                        'sentAs' => 'outsideIpAddress',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                        'sentAs' => 'status',
                                    ],
                                    'LastStatusChange' => [
                                        'type' => 'string',
                                        'sentAs' => 'lastStatusChange',
                                    ],
                                    'StatusMessage' => [
                                        'type' => 'string',
                                        'sentAs' => 'statusMessage',
                                    ],
                                    'AcceptedRouteCount' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'acceptedRouteCount',
                                    ],
                                ],
                            ],
                        ],
                        'Options' => [
                            'type' => 'object',
                            'sentAs' => 'options',
                            'properties' => [
                                'StaticRoutesOnly' => [
                                    'type' => 'boolean',
                                    'sentAs' => 'staticRoutesOnly',
                                ],
                            ],
                        ],
                        'Routes' => [
                            'type' => 'array',
                            'sentAs' => 'routes',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'DestinationCidrBlock' => [
                                        'type' => 'string',
                                        'sentAs' => 'destinationCidrBlock',
                                    ],
                                    'Source' => [
                                        'type' => 'string',
                                        'sentAs' => 'source',
                                    ],
                                    'State' => [
                                        'type' => 'string',
                                        'sentAs' => 'state',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateVpnGatewayResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VpnGateway' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'vpnGateway',
                    'properties' => [
                        'VpnGatewayId' => [
                            'type' => 'string',
                            'sentAs' => 'vpnGatewayId',
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                        'Type' => [
                            'type' => 'string',
                            'sentAs' => 'type',
                        ],
                        'AvailabilityZone' => [
                            'type' => 'string',
                            'sentAs' => 'availabilityZone',
                        ],
                        'VpcAttachments' => [
                            'type' => 'array',
                            'sentAs' => 'attachments',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'VpcId' => [
                                        'type' => 'string',
                                        'sentAs' => 'vpcId',
                                    ],
                                    'State' => [
                                        'type' => 'string',
                                        'sentAs' => 'state',
                                    ],
                                ],
                            ],
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteFlowLogsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Unsuccessful' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'unsuccessful',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ResourceId' => [
                                'type' => 'string',
                                'sentAs' => 'resourceId',
                            ],
                            'Error' => [
                                'type' => 'object',
                                'sentAs' => 'error',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'string',
                                        'sentAs' => 'code',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                        'sentAs' => 'message',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteVpcEndpointsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Unsuccessful' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'unsuccessful',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ResourceId' => [
                                'type' => 'string',
                                'sentAs' => 'resourceId',
                            ],
                            'Error' => [
                                'type' => 'object',
                                'sentAs' => 'error',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'string',
                                        'sentAs' => 'code',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                        'sentAs' => 'message',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteVpcPeeringConnectionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Return' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                    'sentAs' => 'return',
                ],
            ],
        ],
        'DescribeAccountAttributesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AccountAttributes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'accountAttributeSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'AttributeName' => [
                                'type' => 'string',
                                'sentAs' => 'attributeName',
                            ],
                            'AttributeValues' => [
                                'type' => 'array',
                                'sentAs' => 'attributeValueSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'AttributeValue' => [
                                            'type' => 'string',
                                            'sentAs' => 'attributeValue',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeAddressesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Addresses' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'addressesSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'PublicIp' => [
                                'type' => 'string',
                                'sentAs' => 'publicIp',
                            ],
                            'AllocationId' => [
                                'type' => 'string',
                                'sentAs' => 'allocationId',
                            ],
                            'AssociationId' => [
                                'type' => 'string',
                                'sentAs' => 'associationId',
                            ],
                            'Domain' => [
                                'type' => 'string',
                                'sentAs' => 'domain',
                            ],
                            'NetworkInterfaceId' => [
                                'type' => 'string',
                                'sentAs' => 'networkInterfaceId',
                            ],
                            'NetworkInterfaceOwnerId' => [
                                'type' => 'string',
                                'sentAs' => 'networkInterfaceOwnerId',
                            ],
                            'PrivateIpAddress' => [
                                'type' => 'string',
                                'sentAs' => 'privateIpAddress',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeAvailabilityZonesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AvailabilityZones' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'availabilityZoneInfo',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ZoneName' => [
                                'type' => 'string',
                                'sentAs' => 'zoneName',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'zoneState',
                            ],
                            'RegionName' => [
                                'type' => 'string',
                                'sentAs' => 'regionName',
                            ],
                            'Messages' => [
                                'type' => 'array',
                                'sentAs' => 'messageSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Message' => [
                                            'type' => 'string',
                                            'sentAs' => 'message',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeBundleTasksResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'BundleTasks' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'bundleInstanceTasksSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'BundleId' => [
                                'type' => 'string',
                                'sentAs' => 'bundleId',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                            'StartTime' => [
                                'type' => 'string',
                                'sentAs' => 'startTime',
                            ],
                            'UpdateTime' => [
                                'type' => 'string',
                                'sentAs' => 'updateTime',
                            ],
                            'Storage' => [
                                'type' => 'object',
                                'sentAs' => 'storage',
                                'properties' => [
                                    'S3' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Bucket' => [
                                                'type' => 'string',
                                                'sentAs' => 'bucket',
                                            ],
                                            'Prefix' => [
                                                'type' => 'string',
                                                'sentAs' => 'prefix',
                                            ],
                                            'AWSAccessKeyId' => [
                                                'type' => 'string',
                                            ],
                                            'UploadPolicy' => [
                                                'type' => 'string',
                                                'sentAs' => 'uploadPolicy',
                                            ],
                                            'UploadPolicySignature' => [
                                                'type' => 'string',
                                                'sentAs' =>
                                                    'uploadPolicySignature',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Progress' => [
                                'type' => 'string',
                                'sentAs' => 'progress',
                            ],
                            'BundleTaskError' => [
                                'type' => 'object',
                                'sentAs' => 'error',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'string',
                                        'sentAs' => 'code',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                        'sentAs' => 'message',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeClassicLinkInstancesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Instances' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'instancesSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'sentAs' => 'vpcId',
                            ],
                            'Groups' => [
                                'type' => 'array',
                                'sentAs' => 'groupSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'GroupName' => [
                                            'type' => 'string',
                                            'sentAs' => 'groupName',
                                        ],
                                        'GroupId' => [
                                            'type' => 'string',
                                            'sentAs' => 'groupId',
                                        ],
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeConversionTasksResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ConversionTasks' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'conversionTasks',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ConversionTaskId' => [
                                'type' => 'string',
                                'sentAs' => 'conversionTaskId',
                            ],
                            'ExpirationTime' => [
                                'type' => 'string',
                                'sentAs' => 'expirationTime',
                            ],
                            'ImportInstance' => [
                                'type' => 'object',
                                'sentAs' => 'importInstance',
                                'properties' => [
                                    'Volumes' => [
                                        'type' => 'array',
                                        'sentAs' => 'volumes',
                                        'items' => [
                                            'name' => 'item',
                                            'type' => 'object',
                                            'sentAs' => 'item',
                                            'properties' => [
                                                'BytesConverted' => [
                                                    'type' => 'numeric',
                                                    'sentAs' =>
                                                        'bytesConverted',
                                                ],
                                                'AvailabilityZone' => [
                                                    'type' => 'string',
                                                    'sentAs' =>
                                                        'availabilityZone',
                                                ],
                                                'Image' => [
                                                    'type' => 'object',
                                                    'sentAs' => 'image',
                                                    'properties' => [
                                                        'Format' => [
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'format',
                                                        ],
                                                        'Size' => [
                                                            'type' => 'numeric',
                                                            'sentAs' => 'size',
                                                        ],
                                                        'ImportManifestUrl' => [
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'importManifestUrl',
                                                        ],
                                                        'Checksum' => [
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'checksum',
                                                        ],
                                                    ],
                                                ],
                                                'Volume' => [
                                                    'type' => 'object',
                                                    'sentAs' => 'volume',
                                                    'properties' => [
                                                        'Size' => [
                                                            'type' => 'numeric',
                                                            'sentAs' => 'size',
                                                        ],
                                                        'Id' => [
                                                            'type' => 'string',
                                                            'sentAs' => 'id',
                                                        ],
                                                    ],
                                                ],
                                                'Status' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'status',
                                                ],
                                                'StatusMessage' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'statusMessage',
                                                ],
                                                'Description' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'description',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'sentAs' => 'instanceId',
                                    ],
                                    'Platform' => [
                                        'type' => 'string',
                                        'sentAs' => 'platform',
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                        'sentAs' => 'description',
                                    ],
                                ],
                            ],
                            'ImportVolume' => [
                                'type' => 'object',
                                'sentAs' => 'importVolume',
                                'properties' => [
                                    'BytesConverted' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'bytesConverted',
                                    ],
                                    'AvailabilityZone' => [
                                        'type' => 'string',
                                        'sentAs' => 'availabilityZone',
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                        'sentAs' => 'description',
                                    ],
                                    'Image' => [
                                        'type' => 'object',
                                        'sentAs' => 'image',
                                        'properties' => [
                                            'Format' => [
                                                'type' => 'string',
                                                'sentAs' => 'format',
                                            ],
                                            'Size' => [
                                                'type' => 'numeric',
                                                'sentAs' => 'size',
                                            ],
                                            'ImportManifestUrl' => [
                                                'type' => 'string',
                                                'sentAs' => 'importManifestUrl',
                                            ],
                                            'Checksum' => [
                                                'type' => 'string',
                                                'sentAs' => 'checksum',
                                            ],
                                        ],
                                    ],
                                    'Volume' => [
                                        'type' => 'object',
                                        'sentAs' => 'volume',
                                        'properties' => [
                                            'Size' => [
                                                'type' => 'numeric',
                                                'sentAs' => 'size',
                                            ],
                                            'Id' => [
                                                'type' => 'string',
                                                'sentAs' => 'id',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                            'StatusMessage' => [
                                'type' => 'string',
                                'sentAs' => 'statusMessage',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeCustomerGatewaysResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CustomerGateways' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'customerGatewaySet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'CustomerGatewayId' => [
                                'type' => 'string',
                                'sentAs' => 'customerGatewayId',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                            'Type' => [
                                'type' => 'string',
                                'sentAs' => 'type',
                            ],
                            'IpAddress' => [
                                'type' => 'string',
                                'sentAs' => 'ipAddress',
                            ],
                            'BgpAsn' => [
                                'type' => 'string',
                                'sentAs' => 'bgpAsn',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeDhcpOptionsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DhcpOptions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'dhcpOptionsSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'DhcpOptionsId' => [
                                'type' => 'string',
                                'sentAs' => 'dhcpOptionsId',
                            ],
                            'DhcpConfigurations' => [
                                'type' => 'array',
                                'sentAs' => 'dhcpConfigurationSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Values' => [
                                            'type' => 'array',
                                            'sentAs' => 'valueSet',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'string',
                                                'sentAs' => 'item',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeExportTasksResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ExportTasks' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'exportTaskSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ExportTaskId' => [
                                'type' => 'string',
                                'sentAs' => 'exportTaskId',
                            ],
                            'Description' => [
                                'type' => 'string',
                                'sentAs' => 'description',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                            'StatusMessage' => [
                                'type' => 'string',
                                'sentAs' => 'statusMessage',
                            ],
                            'InstanceExportDetails' => [
                                'type' => 'object',
                                'sentAs' => 'instanceExport',
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'sentAs' => 'instanceId',
                                    ],
                                    'TargetEnvironment' => [
                                        'type' => 'string',
                                        'sentAs' => 'targetEnvironment',
                                    ],
                                ],
                            ],
                            'ExportToS3Task' => [
                                'type' => 'object',
                                'sentAs' => 'exportToS3',
                                'properties' => [
                                    'DiskImageFormat' => [
                                        'type' => 'string',
                                        'sentAs' => 'diskImageFormat',
                                    ],
                                    'ContainerFormat' => [
                                        'type' => 'string',
                                        'sentAs' => 'containerFormat',
                                    ],
                                    'S3Bucket' => [
                                        'type' => 'string',
                                        'sentAs' => 's3Bucket',
                                    ],
                                    'S3Key' => [
                                        'type' => 'string',
                                        'sentAs' => 's3Key',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeFlowLogsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'FlowLogs' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'flowLogSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'CreationTime' => [
                                'type' => 'string',
                                'sentAs' => 'creationTime',
                            ],
                            'FlowLogId' => [
                                'type' => 'string',
                                'sentAs' => 'flowLogId',
                            ],
                            'FlowLogStatus' => [
                                'type' => 'string',
                                'sentAs' => 'flowLogStatus',
                            ],
                            'ResourceId' => [
                                'type' => 'string',
                                'sentAs' => 'resourceId',
                            ],
                            'TrafficType' => [
                                'type' => 'string',
                                'sentAs' => 'trafficType',
                            ],
                            'LogGroupName' => [
                                'type' => 'string',
                                'sentAs' => 'logGroupName',
                            ],
                            'DeliverLogsStatus' => [
                                'type' => 'string',
                                'sentAs' => 'deliverLogsStatus',
                            ],
                            'DeliverLogsErrorMessage' => [
                                'type' => 'string',
                                'sentAs' => 'deliverLogsErrorMessage',
                            ],
                            'DeliverLogsPermissionArn' => [
                                'type' => 'string',
                                'sentAs' => 'deliverLogsPermissionArn',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'imageAttribute' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ImageId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'imageId',
                ],
                'LaunchPermissions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'launchPermission',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'UserId' => [
                                'type' => 'string',
                                'sentAs' => 'userId',
                            ],
                            'Group' => [
                                'type' => 'string',
                                'sentAs' => 'group',
                            ],
                        ],
                    ],
                ],
                'ProductCodes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'productCodes',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ProductCodeId' => [
                                'type' => 'string',
                                'sentAs' => 'productCode',
                            ],
                            'ProductCodeType' => [
                                'type' => 'string',
                                'sentAs' => 'type',
                            ],
                        ],
                    ],
                ],
                'KernelId' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'kernel',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'RamdiskId' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'ramdisk',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'Description' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'description',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'SriovNetSupport' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'sriovNetSupport',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'BlockDeviceMappings' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'blockDeviceMapping',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'VirtualName' => [
                                'type' => 'string',
                                'sentAs' => 'virtualName',
                            ],
                            'DeviceName' => [
                                'type' => 'string',
                                'sentAs' => 'deviceName',
                            ],
                            'Ebs' => [
                                'type' => 'object',
                                'sentAs' => 'ebs',
                                'properties' => [
                                    'SnapshotId' => [
                                        'type' => 'string',
                                        'sentAs' => 'snapshotId',
                                    ],
                                    'VolumeSize' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'volumeSize',
                                    ],
                                    'DeleteOnTermination' => [
                                        'type' => 'boolean',
                                        'sentAs' => 'deleteOnTermination',
                                    ],
                                    'VolumeType' => [
                                        'type' => 'string',
                                        'sentAs' => 'volumeType',
                                    ],
                                    'Iops' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'iops',
                                    ],
                                    'Encrypted' => [
                                        'type' => 'boolean',
                                        'sentAs' => 'encrypted',
                                    ],
                                ],
                            ],
                            'NoDevice' => [
                                'type' => 'string',
                                'sentAs' => 'noDevice',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeImagesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Images' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'imagesSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ImageId' => [
                                'type' => 'string',
                                'sentAs' => 'imageId',
                            ],
                            'ImageLocation' => [
                                'type' => 'string',
                                'sentAs' => 'imageLocation',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'imageState',
                            ],
                            'OwnerId' => [
                                'type' => 'string',
                                'sentAs' => 'imageOwnerId',
                            ],
                            'CreationDate' => [
                                'type' => 'string',
                                'sentAs' => 'creationDate',
                            ],
                            'Public' => [
                                'type' => 'boolean',
                                'sentAs' => 'isPublic',
                            ],
                            'ProductCodes' => [
                                'type' => 'array',
                                'sentAs' => 'productCodes',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'ProductCodeId' => [
                                            'type' => 'string',
                                            'sentAs' => 'productCode',
                                        ],
                                        'ProductCodeType' => [
                                            'type' => 'string',
                                            'sentAs' => 'type',
                                        ],
                                    ],
                                ],
                            ],
                            'Architecture' => [
                                'type' => 'string',
                                'sentAs' => 'architecture',
                            ],
                            'ImageType' => [
                                'type' => 'string',
                                'sentAs' => 'imageType',
                            ],
                            'KernelId' => [
                                'type' => 'string',
                                'sentAs' => 'kernelId',
                            ],
                            'RamdiskId' => [
                                'type' => 'string',
                                'sentAs' => 'ramdiskId',
                            ],
                            'Platform' => [
                                'type' => 'string',
                                'sentAs' => 'platform',
                            ],
                            'SriovNetSupport' => [
                                'type' => 'string',
                                'sentAs' => 'sriovNetSupport',
                            ],
                            'StateReason' => [
                                'type' => 'object',
                                'sentAs' => 'stateReason',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'string',
                                        'sentAs' => 'code',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                        'sentAs' => 'message',
                                    ],
                                ],
                            ],
                            'ImageOwnerAlias' => [
                                'type' => 'string',
                                'sentAs' => 'imageOwnerAlias',
                            ],
                            'Name' => [
                                'type' => 'string',
                                'sentAs' => 'name',
                            ],
                            'Description' => [
                                'type' => 'string',
                                'sentAs' => 'description',
                            ],
                            'RootDeviceType' => [
                                'type' => 'string',
                                'sentAs' => 'rootDeviceType',
                            ],
                            'RootDeviceName' => [
                                'type' => 'string',
                                'sentAs' => 'rootDeviceName',
                            ],
                            'BlockDeviceMappings' => [
                                'type' => 'array',
                                'sentAs' => 'blockDeviceMapping',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'VirtualName' => [
                                            'type' => 'string',
                                            'sentAs' => 'virtualName',
                                        ],
                                        'DeviceName' => [
                                            'type' => 'string',
                                            'sentAs' => 'deviceName',
                                        ],
                                        'Ebs' => [
                                            'type' => 'object',
                                            'sentAs' => 'ebs',
                                            'properties' => [
                                                'SnapshotId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'snapshotId',
                                                ],
                                                'VolumeSize' => [
                                                    'type' => 'numeric',
                                                    'sentAs' => 'volumeSize',
                                                ],
                                                'DeleteOnTermination' => [
                                                    'type' => 'boolean',
                                                    'sentAs' =>
                                                        'deleteOnTermination',
                                                ],
                                                'VolumeType' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'volumeType',
                                                ],
                                                'Iops' => [
                                                    'type' => 'numeric',
                                                    'sentAs' => 'iops',
                                                ],
                                                'Encrypted' => [
                                                    'type' => 'boolean',
                                                    'sentAs' => 'encrypted',
                                                ],
                                            ],
                                        ],
                                        'NoDevice' => [
                                            'type' => 'string',
                                            'sentAs' => 'noDevice',
                                        ],
                                    ],
                                ],
                            ],
                            'VirtualizationType' => [
                                'type' => 'string',
                                'sentAs' => 'virtualizationType',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'Hypervisor' => [
                                'type' => 'string',
                                'sentAs' => 'hypervisor',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeImportImageTasksResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ImportImageTasks' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'importImageTaskSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ImportTaskId' => [
                                'type' => 'string',
                                'sentAs' => 'importTaskId',
                            ],
                            'Architecture' => [
                                'type' => 'string',
                                'sentAs' => 'architecture',
                            ],
                            'LicenseType' => [
                                'type' => 'string',
                                'sentAs' => 'licenseType',
                            ],
                            'Platform' => [
                                'type' => 'string',
                                'sentAs' => 'platform',
                            ],
                            'Hypervisor' => [
                                'type' => 'string',
                                'sentAs' => 'hypervisor',
                            ],
                            'Description' => [
                                'type' => 'string',
                                'sentAs' => 'description',
                            ],
                            'SnapshotDetails' => [
                                'type' => 'array',
                                'sentAs' => 'snapshotDetailSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'DiskImageSize' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'diskImageSize',
                                        ],
                                        'Description' => [
                                            'type' => 'string',
                                            'sentAs' => 'description',
                                        ],
                                        'Format' => [
                                            'type' => 'string',
                                            'sentAs' => 'format',
                                        ],
                                        'Url' => [
                                            'type' => 'string',
                                            'sentAs' => 'url',
                                        ],
                                        'UserBucket' => [
                                            'type' => 'object',
                                            'sentAs' => 'userBucket',
                                            'properties' => [
                                                'S3Bucket' => [
                                                    'type' => 'string',
                                                    'sentAs' => 's3Bucket',
                                                ],
                                                'S3Key' => [
                                                    'type' => 'string',
                                                    'sentAs' => 's3Key',
                                                ],
                                            ],
                                        ],
                                        'DeviceName' => [
                                            'type' => 'string',
                                            'sentAs' => 'deviceName',
                                        ],
                                        'SnapshotId' => [
                                            'type' => 'string',
                                            'sentAs' => 'snapshotId',
                                        ],
                                        'Progress' => [
                                            'type' => 'string',
                                            'sentAs' => 'progress',
                                        ],
                                        'StatusMessage' => [
                                            'type' => 'string',
                                            'sentAs' => 'statusMessage',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                            'sentAs' => 'status',
                                        ],
                                    ],
                                ],
                            ],
                            'ImageId' => [
                                'type' => 'string',
                                'sentAs' => 'imageId',
                            ],
                            'Progress' => [
                                'type' => 'string',
                                'sentAs' => 'progress',
                            ],
                            'StatusMessage' => [
                                'type' => 'string',
                                'sentAs' => 'statusMessage',
                            ],
                            'Status' => [
                                'type' => 'string',
                                'sentAs' => 'status',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeImportSnapshotTasksResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ImportSnapshotTasks' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'importSnapshotTaskSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ImportTaskId' => [
                                'type' => 'string',
                                'sentAs' => 'importTaskId',
                            ],
                            'SnapshotTaskDetail' => [
                                'type' => 'object',
                                'sentAs' => 'snapshotTaskDetail',
                                'properties' => [
                                    'DiskImageSize' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'diskImageSize',
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                        'sentAs' => 'description',
                                    ],
                                    'Format' => [
                                        'type' => 'string',
                                        'sentAs' => 'format',
                                    ],
                                    'Url' => [
                                        'type' => 'string',
                                        'sentAs' => 'url',
                                    ],
                                    'UserBucket' => [
                                        'type' => 'object',
                                        'sentAs' => 'userBucket',
                                        'properties' => [
                                            'S3Bucket' => [
                                                'type' => 'string',
                                                'sentAs' => 's3Bucket',
                                            ],
                                            'S3Key' => [
                                                'type' => 'string',
                                                'sentAs' => 's3Key',
                                            ],
                                        ],
                                    ],
                                    'SnapshotId' => [
                                        'type' => 'string',
                                        'sentAs' => 'snapshotId',
                                    ],
                                    'Progress' => [
                                        'type' => 'string',
                                        'sentAs' => 'progress',
                                    ],
                                    'StatusMessage' => [
                                        'type' => 'string',
                                        'sentAs' => 'statusMessage',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                        'sentAs' => 'status',
                                    ],
                                ],
                            ],
                            'Description' => [
                                'type' => 'string',
                                'sentAs' => 'description',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'InstanceAttribute' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'instanceId',
                ],
                'InstanceType' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'instanceType',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'KernelId' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'kernel',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'RamdiskId' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'ramdisk',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'UserData' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'userData',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'DisableApiTermination' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'disableApiTermination',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'InstanceInitiatedShutdownBehavior' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'instanceInitiatedShutdownBehavior',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'RootDeviceName' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'rootDeviceName',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'BlockDeviceMappings' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'blockDeviceMapping',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'DeviceName' => [
                                'type' => 'string',
                                'sentAs' => 'deviceName',
                            ],
                            'Ebs' => [
                                'type' => 'object',
                                'sentAs' => 'ebs',
                                'properties' => [
                                    'VolumeId' => [
                                        'type' => 'string',
                                        'sentAs' => 'volumeId',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                        'sentAs' => 'status',
                                    ],
                                    'AttachTime' => [
                                        'type' => 'string',
                                        'sentAs' => 'attachTime',
                                    ],
                                    'DeleteOnTermination' => [
                                        'type' => 'boolean',
                                        'sentAs' => 'deleteOnTermination',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'ProductCodes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'productCodes',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ProductCodeId' => [
                                'type' => 'string',
                                'sentAs' => 'productCode',
                            ],
                            'ProductCodeType' => [
                                'type' => 'string',
                                'sentAs' => 'type',
                            ],
                        ],
                    ],
                ],
                'EbsOptimized' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'ebsOptimized',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'SriovNetSupport' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'sriovNetSupport',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'SourceDestCheck' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'sourceDestCheck',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'Groups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'groupSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'GroupName' => [
                                'type' => 'string',
                                'sentAs' => 'groupName',
                            ],
                            'GroupId' => [
                                'type' => 'string',
                                'sentAs' => 'groupId',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeInstanceStatusResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceStatuses' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'instanceStatusSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                                'sentAs' => 'availabilityZone',
                            ],
                            'Events' => [
                                'type' => 'array',
                                'sentAs' => 'eventsSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Code' => [
                                            'type' => 'string',
                                            'sentAs' => 'code',
                                        ],
                                        'Description' => [
                                            'type' => 'string',
                                            'sentAs' => 'description',
                                        ],
                                        'NotBefore' => [
                                            'type' => 'string',
                                            'sentAs' => 'notBefore',
                                        ],
                                        'NotAfter' => [
                                            'type' => 'string',
                                            'sentAs' => 'notAfter',
                                        ],
                                    ],
                                ],
                            ],
                            'InstanceState' => [
                                'type' => 'object',
                                'sentAs' => 'instanceState',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'code',
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                        'sentAs' => 'name',
                                    ],
                                ],
                            ],
                            'SystemStatus' => [
                                'type' => 'object',
                                'sentAs' => 'systemStatus',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'string',
                                        'sentAs' => 'status',
                                    ],
                                    'Details' => [
                                        'type' => 'array',
                                        'sentAs' => 'details',
                                        'items' => [
                                            'name' => 'item',
                                            'type' => 'object',
                                            'sentAs' => 'item',
                                            'properties' => [
                                                'Name' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'name',
                                                ],
                                                'Status' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'status',
                                                ],
                                                'ImpairedSince' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'impairedSince',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'InstanceStatus' => [
                                'type' => 'object',
                                'sentAs' => 'instanceStatus',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'string',
                                        'sentAs' => 'status',
                                    ],
                                    'Details' => [
                                        'type' => 'array',
                                        'sentAs' => 'details',
                                        'items' => [
                                            'name' => 'item',
                                            'type' => 'object',
                                            'sentAs' => 'item',
                                            'properties' => [
                                                'Name' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'name',
                                                ],
                                                'Status' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'status',
                                                ],
                                                'ImpairedSince' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'impairedSince',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeInstancesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Reservations' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'reservationSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ReservationId' => [
                                'type' => 'string',
                                'sentAs' => 'reservationId',
                            ],
                            'OwnerId' => [
                                'type' => 'string',
                                'sentAs' => 'ownerId',
                            ],
                            'RequesterId' => [
                                'type' => 'string',
                                'sentAs' => 'requesterId',
                            ],
                            'Groups' => [
                                'type' => 'array',
                                'sentAs' => 'groupSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'GroupName' => [
                                            'type' => 'string',
                                            'sentAs' => 'groupName',
                                        ],
                                        'GroupId' => [
                                            'type' => 'string',
                                            'sentAs' => 'groupId',
                                        ],
                                    ],
                                ],
                            ],
                            'Instances' => [
                                'type' => 'array',
                                'sentAs' => 'instancesSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'InstanceId' => [
                                            'type' => 'string',
                                            'sentAs' => 'instanceId',
                                        ],
                                        'ImageId' => [
                                            'type' => 'string',
                                            'sentAs' => 'imageId',
                                        ],
                                        'State' => [
                                            'type' => 'object',
                                            'sentAs' => 'instanceState',
                                            'properties' => [
                                                'Code' => [
                                                    'type' => 'numeric',
                                                    'sentAs' => 'code',
                                                ],
                                                'Name' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'name',
                                                ],
                                            ],
                                        ],
                                        'PrivateDnsName' => [
                                            'type' => 'string',
                                            'sentAs' => 'privateDnsName',
                                        ],
                                        'PublicDnsName' => [
                                            'type' => 'string',
                                            'sentAs' => 'dnsName',
                                        ],
                                        'StateTransitionReason' => [
                                            'type' => 'string',
                                            'sentAs' => 'reason',
                                        ],
                                        'KeyName' => [
                                            'type' => 'string',
                                            'sentAs' => 'keyName',
                                        ],
                                        'AmiLaunchIndex' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'amiLaunchIndex',
                                        ],
                                        'ProductCodes' => [
                                            'type' => 'array',
                                            'sentAs' => 'productCodes',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'object',
                                                'sentAs' => 'item',
                                                'properties' => [
                                                    'ProductCodeId' => [
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'productCode',
                                                    ],
                                                    'ProductCodeType' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'type',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'InstanceType' => [
                                            'type' => 'string',
                                            'sentAs' => 'instanceType',
                                        ],
                                        'LaunchTime' => [
                                            'type' => 'string',
                                            'sentAs' => 'launchTime',
                                        ],
                                        'Placement' => [
                                            'type' => 'object',
                                            'sentAs' => 'placement',
                                            'properties' => [
                                                'AvailabilityZone' => [
                                                    'type' => 'string',
                                                    'sentAs' =>
                                                        'availabilityZone',
                                                ],
                                                'GroupName' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'groupName',
                                                ],
                                                'Tenancy' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'tenancy',
                                                ],
                                            ],
                                        ],
                                        'KernelId' => [
                                            'type' => 'string',
                                            'sentAs' => 'kernelId',
                                        ],
                                        'RamdiskId' => [
                                            'type' => 'string',
                                            'sentAs' => 'ramdiskId',
                                        ],
                                        'Platform' => [
                                            'type' => 'string',
                                            'sentAs' => 'platform',
                                        ],
                                        'Monitoring' => [
                                            'type' => 'object',
                                            'sentAs' => 'monitoring',
                                            'properties' => [
                                                'State' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'state',
                                                ],
                                            ],
                                        ],
                                        'SubnetId' => [
                                            'type' => 'string',
                                            'sentAs' => 'subnetId',
                                        ],
                                        'VpcId' => [
                                            'type' => 'string',
                                            'sentAs' => 'vpcId',
                                        ],
                                        'PrivateIpAddress' => [
                                            'type' => 'string',
                                            'sentAs' => 'privateIpAddress',
                                        ],
                                        'PublicIpAddress' => [
                                            'type' => 'string',
                                            'sentAs' => 'ipAddress',
                                        ],
                                        'StateReason' => [
                                            'type' => 'object',
                                            'sentAs' => 'stateReason',
                                            'properties' => [
                                                'Code' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'code',
                                                ],
                                                'Message' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'message',
                                                ],
                                            ],
                                        ],
                                        'Architecture' => [
                                            'type' => 'string',
                                            'sentAs' => 'architecture',
                                        ],
                                        'RootDeviceType' => [
                                            'type' => 'string',
                                            'sentAs' => 'rootDeviceType',
                                        ],
                                        'RootDeviceName' => [
                                            'type' => 'string',
                                            'sentAs' => 'rootDeviceName',
                                        ],
                                        'BlockDeviceMappings' => [
                                            'type' => 'array',
                                            'sentAs' => 'blockDeviceMapping',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'object',
                                                'sentAs' => 'item',
                                                'properties' => [
                                                    'DeviceName' => [
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'deviceName',
                                                    ],
                                                    'Ebs' => [
                                                        'type' => 'object',
                                                        'sentAs' => 'ebs',
                                                        'properties' => [
                                                            'VolumeId' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'volumeId',
                                                            ],
                                                            'Status' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'status',
                                                            ],
                                                            'AttachTime' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'attachTime',
                                                            ],
                                                            'DeleteOnTermination' => [
                                                                'type' =>
                                                                    'boolean',
                                                                'sentAs' =>
                                                                    'deleteOnTermination',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'VirtualizationType' => [
                                            'type' => 'string',
                                            'sentAs' => 'virtualizationType',
                                        ],
                                        'InstanceLifecycle' => [
                                            'type' => 'string',
                                            'sentAs' => 'instanceLifecycle',
                                        ],
                                        'SpotInstanceRequestId' => [
                                            'type' => 'string',
                                            'sentAs' => 'spotInstanceRequestId',
                                        ],
                                        'ClientToken' => [
                                            'type' => 'string',
                                            'sentAs' => 'clientToken',
                                        ],
                                        'Tags' => [
                                            'type' => 'array',
                                            'sentAs' => 'tagSet',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'object',
                                                'sentAs' => 'item',
                                                'properties' => [
                                                    'Key' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'key',
                                                    ],
                                                    'Value' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'value',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'SecurityGroups' => [
                                            'type' => 'array',
                                            'sentAs' => 'groupSet',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'object',
                                                'sentAs' => 'item',
                                                'properties' => [
                                                    'GroupName' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'groupName',
                                                    ],
                                                    'GroupId' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'groupId',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'SourceDestCheck' => [
                                            'type' => 'boolean',
                                            'sentAs' => 'sourceDestCheck',
                                        ],
                                        'Hypervisor' => [
                                            'type' => 'string',
                                            'sentAs' => 'hypervisor',
                                        ],
                                        'NetworkInterfaces' => [
                                            'type' => 'array',
                                            'sentAs' => 'networkInterfaceSet',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'object',
                                                'sentAs' => 'item',
                                                'properties' => [
                                                    'NetworkInterfaceId' => [
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'networkInterfaceId',
                                                    ],
                                                    'SubnetId' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'subnetId',
                                                    ],
                                                    'VpcId' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'vpcId',
                                                    ],
                                                    'Description' => [
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'description',
                                                    ],
                                                    'OwnerId' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'ownerId',
                                                    ],
                                                    'Status' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'status',
                                                    ],
                                                    'MacAddress' => [
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'macAddress',
                                                    ],
                                                    'PrivateIpAddress' => [
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'privateIpAddress',
                                                    ],
                                                    'PrivateDnsName' => [
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'privateDnsName',
                                                    ],
                                                    'SourceDestCheck' => [
                                                        'type' => 'boolean',
                                                        'sentAs' =>
                                                            'sourceDestCheck',
                                                    ],
                                                    'Groups' => [
                                                        'type' => 'array',
                                                        'sentAs' => 'groupSet',
                                                        'items' => [
                                                            'name' => 'item',
                                                            'type' => 'object',
                                                            'sentAs' => 'item',
                                                            'properties' => [
                                                                'GroupName' => [
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'groupName',
                                                                ],
                                                                'GroupId' => [
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'groupId',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'Attachment' => [
                                                        'type' => 'object',
                                                        'sentAs' =>
                                                            'attachment',
                                                        'properties' => [
                                                            'AttachmentId' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'attachmentId',
                                                            ],
                                                            'DeviceIndex' => [
                                                                'type' =>
                                                                    'numeric',
                                                                'sentAs' =>
                                                                    'deviceIndex',
                                                            ],
                                                            'Status' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'status',
                                                            ],
                                                            'AttachTime' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'attachTime',
                                                            ],
                                                            'DeleteOnTermination' => [
                                                                'type' =>
                                                                    'boolean',
                                                                'sentAs' =>
                                                                    'deleteOnTermination',
                                                            ],
                                                        ],
                                                    ],
                                                    'Association' => [
                                                        'type' => 'object',
                                                        'sentAs' =>
                                                            'association',
                                                        'properties' => [
                                                            'PublicIp' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'publicIp',
                                                            ],
                                                            'PublicDnsName' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'publicDnsName',
                                                            ],
                                                            'IpOwnerId' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'ipOwnerId',
                                                            ],
                                                        ],
                                                    ],
                                                    'PrivateIpAddresses' => [
                                                        'type' => 'array',
                                                        'sentAs' =>
                                                            'privateIpAddressesSet',
                                                        'items' => [
                                                            'name' => 'item',
                                                            'type' => 'object',
                                                            'sentAs' => 'item',
                                                            'properties' => [
                                                                'PrivateIpAddress' => [
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'privateIpAddress',
                                                                ],
                                                                'PrivateDnsName' => [
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'privateDnsName',
                                                                ],
                                                                'Primary' => [
                                                                    'type' =>
                                                                        'boolean',
                                                                    'sentAs' =>
                                                                        'primary',
                                                                ],
                                                                'Association' => [
                                                                    'type' =>
                                                                        'object',
                                                                    'sentAs' =>
                                                                        'association',
                                                                    'properties' => [
                                                                        'PublicIp' => [
                                                                            'type' =>
                                                                                'string',
                                                                            'sentAs' =>
                                                                                'publicIp',
                                                                        ],
                                                                        'PublicDnsName' => [
                                                                            'type' =>
                                                                                'string',
                                                                            'sentAs' =>
                                                                                'publicDnsName',
                                                                        ],
                                                                        'IpOwnerId' => [
                                                                            'type' =>
                                                                                'string',
                                                                            'sentAs' =>
                                                                                'ipOwnerId',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'IamInstanceProfile' => [
                                            'type' => 'object',
                                            'sentAs' => 'iamInstanceProfile',
                                            'properties' => [
                                                'Arn' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'arn',
                                                ],
                                                'Id' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'id',
                                                ],
                                            ],
                                        ],
                                        'EbsOptimized' => [
                                            'type' => 'boolean',
                                            'sentAs' => 'ebsOptimized',
                                        ],
                                        'SriovNetSupport' => [
                                            'type' => 'string',
                                            'sentAs' => 'sriovNetSupport',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeInternetGatewaysResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InternetGateways' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'internetGatewaySet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'InternetGatewayId' => [
                                'type' => 'string',
                                'sentAs' => 'internetGatewayId',
                            ],
                            'Attachments' => [
                                'type' => 'array',
                                'sentAs' => 'attachmentSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'VpcId' => [
                                            'type' => 'string',
                                            'sentAs' => 'vpcId',
                                        ],
                                        'State' => [
                                            'type' => 'string',
                                            'sentAs' => 'state',
                                        ],
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeKeyPairsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'KeyPairs' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'keySet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'KeyName' => [
                                'type' => 'string',
                                'sentAs' => 'keyName',
                            ],
                            'KeyFingerprint' => [
                                'type' => 'string',
                                'sentAs' => 'keyFingerprint',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeMovingAddressesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MovingAddressStatuses' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'movingAddressStatusSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'PublicIp' => [
                                'type' => 'string',
                                'sentAs' => 'publicIp',
                            ],
                            'MoveStatus' => [
                                'type' => 'string',
                                'sentAs' => 'moveStatus',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeNetworkAclsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NetworkAcls' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'networkAclSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'NetworkAclId' => [
                                'type' => 'string',
                                'sentAs' => 'networkAclId',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'sentAs' => 'vpcId',
                            ],
                            'IsDefault' => [
                                'type' => 'boolean',
                                'sentAs' => 'default',
                            ],
                            'Entries' => [
                                'type' => 'array',
                                'sentAs' => 'entrySet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'RuleNumber' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'ruleNumber',
                                        ],
                                        'Protocol' => [
                                            'type' => 'string',
                                            'sentAs' => 'protocol',
                                        ],
                                        'RuleAction' => [
                                            'type' => 'string',
                                            'sentAs' => 'ruleAction',
                                        ],
                                        'Egress' => [
                                            'type' => 'boolean',
                                            'sentAs' => 'egress',
                                        ],
                                        'CidrBlock' => [
                                            'type' => 'string',
                                            'sentAs' => 'cidrBlock',
                                        ],
                                        'IcmpTypeCode' => [
                                            'type' => 'object',
                                            'sentAs' => 'icmpTypeCode',
                                            'properties' => [
                                                'Type' => [
                                                    'type' => 'numeric',
                                                    'sentAs' => 'type',
                                                ],
                                                'Code' => [
                                                    'type' => 'numeric',
                                                    'sentAs' => 'code',
                                                ],
                                            ],
                                        ],
                                        'PortRange' => [
                                            'type' => 'object',
                                            'sentAs' => 'portRange',
                                            'properties' => [
                                                'From' => [
                                                    'type' => 'numeric',
                                                    'sentAs' => 'from',
                                                ],
                                                'To' => [
                                                    'type' => 'numeric',
                                                    'sentAs' => 'to',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Associations' => [
                                'type' => 'array',
                                'sentAs' => 'associationSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'NetworkAclAssociationId' => [
                                            'type' => 'string',
                                            'sentAs' =>
                                                'networkAclAssociationId',
                                        ],
                                        'NetworkAclId' => [
                                            'type' => 'string',
                                            'sentAs' => 'networkAclId',
                                        ],
                                        'SubnetId' => [
                                            'type' => 'string',
                                            'sentAs' => 'subnetId',
                                        ],
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeNetworkInterfaceAttributeResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NetworkInterfaceId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'networkInterfaceId',
                ],
                'Description' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'description',
                    'properties' => [
                        'Value' => [
                            'type' => 'string',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'SourceDestCheck' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'sourceDestCheck',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'Groups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'groupSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'GroupName' => [
                                'type' => 'string',
                                'sentAs' => 'groupName',
                            ],
                            'GroupId' => [
                                'type' => 'string',
                                'sentAs' => 'groupId',
                            ],
                        ],
                    ],
                ],
                'Attachment' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'attachment',
                    'properties' => [
                        'AttachmentId' => [
                            'type' => 'string',
                            'sentAs' => 'attachmentId',
                        ],
                        'InstanceId' => [
                            'type' => 'string',
                            'sentAs' => 'instanceId',
                        ],
                        'InstanceOwnerId' => [
                            'type' => 'string',
                            'sentAs' => 'instanceOwnerId',
                        ],
                        'DeviceIndex' => [
                            'type' => 'numeric',
                            'sentAs' => 'deviceIndex',
                        ],
                        'Status' => [
                            'type' => 'string',
                            'sentAs' => 'status',
                        ],
                        'AttachTime' => [
                            'type' => 'string',
                            'sentAs' => 'attachTime',
                        ],
                        'DeleteOnTermination' => [
                            'type' => 'boolean',
                            'sentAs' => 'deleteOnTermination',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeNetworkInterfacesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NetworkInterfaces' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'networkInterfaceSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'NetworkInterfaceId' => [
                                'type' => 'string',
                                'sentAs' => 'networkInterfaceId',
                            ],
                            'SubnetId' => [
                                'type' => 'string',
                                'sentAs' => 'subnetId',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'sentAs' => 'vpcId',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                                'sentAs' => 'availabilityZone',
                            ],
                            'Description' => [
                                'type' => 'string',
                                'sentAs' => 'description',
                            ],
                            'OwnerId' => [
                                'type' => 'string',
                                'sentAs' => 'ownerId',
                            ],
                            'RequesterId' => [
                                'type' => 'string',
                                'sentAs' => 'requesterId',
                            ],
                            'RequesterManaged' => [
                                'type' => 'boolean',
                                'sentAs' => 'requesterManaged',
                            ],
                            'Status' => [
                                'type' => 'string',
                                'sentAs' => 'status',
                            ],
                            'MacAddress' => [
                                'type' => 'string',
                                'sentAs' => 'macAddress',
                            ],
                            'PrivateIpAddress' => [
                                'type' => 'string',
                                'sentAs' => 'privateIpAddress',
                            ],
                            'PrivateDnsName' => [
                                'type' => 'string',
                                'sentAs' => 'privateDnsName',
                            ],
                            'SourceDestCheck' => [
                                'type' => 'boolean',
                                'sentAs' => 'sourceDestCheck',
                            ],
                            'Groups' => [
                                'type' => 'array',
                                'sentAs' => 'groupSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'GroupName' => [
                                            'type' => 'string',
                                            'sentAs' => 'groupName',
                                        ],
                                        'GroupId' => [
                                            'type' => 'string',
                                            'sentAs' => 'groupId',
                                        ],
                                    ],
                                ],
                            ],
                            'Attachment' => [
                                'type' => 'object',
                                'sentAs' => 'attachment',
                                'properties' => [
                                    'AttachmentId' => [
                                        'type' => 'string',
                                        'sentAs' => 'attachmentId',
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'sentAs' => 'instanceId',
                                    ],
                                    'InstanceOwnerId' => [
                                        'type' => 'string',
                                        'sentAs' => 'instanceOwnerId',
                                    ],
                                    'DeviceIndex' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'deviceIndex',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                        'sentAs' => 'status',
                                    ],
                                    'AttachTime' => [
                                        'type' => 'string',
                                        'sentAs' => 'attachTime',
                                    ],
                                    'DeleteOnTermination' => [
                                        'type' => 'boolean',
                                        'sentAs' => 'deleteOnTermination',
                                    ],
                                ],
                            ],
                            'Association' => [
                                'type' => 'object',
                                'sentAs' => 'association',
                                'properties' => [
                                    'PublicIp' => [
                                        'type' => 'string',
                                        'sentAs' => 'publicIp',
                                    ],
                                    'PublicDnsName' => [
                                        'type' => 'string',
                                        'sentAs' => 'publicDnsName',
                                    ],
                                    'IpOwnerId' => [
                                        'type' => 'string',
                                        'sentAs' => 'ipOwnerId',
                                    ],
                                    'AllocationId' => [
                                        'type' => 'string',
                                        'sentAs' => 'allocationId',
                                    ],
                                    'AssociationId' => [
                                        'type' => 'string',
                                        'sentAs' => 'associationId',
                                    ],
                                ],
                            ],
                            'TagSet' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'PrivateIpAddresses' => [
                                'type' => 'array',
                                'sentAs' => 'privateIpAddressesSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'PrivateIpAddress' => [
                                            'type' => 'string',
                                            'sentAs' => 'privateIpAddress',
                                        ],
                                        'PrivateDnsName' => [
                                            'type' => 'string',
                                            'sentAs' => 'privateDnsName',
                                        ],
                                        'Primary' => [
                                            'type' => 'boolean',
                                            'sentAs' => 'primary',
                                        ],
                                        'Association' => [
                                            'type' => 'object',
                                            'sentAs' => 'association',
                                            'properties' => [
                                                'PublicIp' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'publicIp',
                                                ],
                                                'PublicDnsName' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'publicDnsName',
                                                ],
                                                'IpOwnerId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'ipOwnerId',
                                                ],
                                                'AllocationId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'allocationId',
                                                ],
                                                'AssociationId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'associationId',
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
        'DescribePlacementGroupsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PlacementGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'placementGroupSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'GroupName' => [
                                'type' => 'string',
                                'sentAs' => 'groupName',
                            ],
                            'Strategy' => [
                                'type' => 'string',
                                'sentAs' => 'strategy',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribePrefixListsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PrefixLists' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'prefixListSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'PrefixListId' => [
                                'type' => 'string',
                                'sentAs' => 'prefixListId',
                            ],
                            'PrefixListName' => [
                                'type' => 'string',
                                'sentAs' => 'prefixListName',
                            ],
                            'Cidrs' => [
                                'type' => 'array',
                                'sentAs' => 'cidrSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'string',
                                    'sentAs' => 'item',
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeRegionsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Regions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'regionInfo',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'RegionName' => [
                                'type' => 'string',
                                'sentAs' => 'regionName',
                            ],
                            'Endpoint' => [
                                'type' => 'string',
                                'sentAs' => 'regionEndpoint',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeReservedInstancesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ReservedInstances' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'reservedInstancesSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ReservedInstancesId' => [
                                'type' => 'string',
                                'sentAs' => 'reservedInstancesId',
                            ],
                            'InstanceType' => [
                                'type' => 'string',
                                'sentAs' => 'instanceType',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                                'sentAs' => 'availabilityZone',
                            ],
                            'Start' => [
                                'type' => 'string',
                                'sentAs' => 'start',
                            ],
                            'End' => [
                                'type' => 'string',
                                'sentAs' => 'end',
                            ],
                            'Duration' => [
                                'type' => 'numeric',
                                'sentAs' => 'duration',
                            ],
                            'UsagePrice' => [
                                'type' => 'numeric',
                                'sentAs' => 'usagePrice',
                            ],
                            'FixedPrice' => [
                                'type' => 'numeric',
                                'sentAs' => 'fixedPrice',
                            ],
                            'InstanceCount' => [
                                'type' => 'numeric',
                                'sentAs' => 'instanceCount',
                            ],
                            'ProductDescription' => [
                                'type' => 'string',
                                'sentAs' => 'productDescription',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'InstanceTenancy' => [
                                'type' => 'string',
                                'sentAs' => 'instanceTenancy',
                            ],
                            'CurrencyCode' => [
                                'type' => 'string',
                                'sentAs' => 'currencyCode',
                            ],
                            'OfferingType' => [
                                'type' => 'string',
                                'sentAs' => 'offeringType',
                            ],
                            'RecurringCharges' => [
                                'type' => 'array',
                                'sentAs' => 'recurringCharges',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Frequency' => [
                                            'type' => 'string',
                                            'sentAs' => 'frequency',
                                        ],
                                        'Amount' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'amount',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeReservedInstancesListingsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ReservedInstancesListings' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'reservedInstancesListingsSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ReservedInstancesListingId' => [
                                'type' => 'string',
                                'sentAs' => 'reservedInstancesListingId',
                            ],
                            'ReservedInstancesId' => [
                                'type' => 'string',
                                'sentAs' => 'reservedInstancesId',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                                'sentAs' => 'createDate',
                            ],
                            'UpdateDate' => [
                                'type' => 'string',
                                'sentAs' => 'updateDate',
                            ],
                            'Status' => [
                                'type' => 'string',
                                'sentAs' => 'status',
                            ],
                            'StatusMessage' => [
                                'type' => 'string',
                                'sentAs' => 'statusMessage',
                            ],
                            'InstanceCounts' => [
                                'type' => 'array',
                                'sentAs' => 'instanceCounts',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'State' => [
                                            'type' => 'string',
                                            'sentAs' => 'state',
                                        ],
                                        'InstanceCount' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'instanceCount',
                                        ],
                                    ],
                                ],
                            ],
                            'PriceSchedules' => [
                                'type' => 'array',
                                'sentAs' => 'priceSchedules',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Term' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'term',
                                        ],
                                        'Price' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'price',
                                        ],
                                        'CurrencyCode' => [
                                            'type' => 'string',
                                            'sentAs' => 'currencyCode',
                                        ],
                                        'Active' => [
                                            'type' => 'boolean',
                                            'sentAs' => 'active',
                                        ],
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'ClientToken' => [
                                'type' => 'string',
                                'sentAs' => 'clientToken',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeReservedInstancesModificationsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ReservedInstancesModifications' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'reservedInstancesModificationsSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ReservedInstancesModificationId' => [
                                'type' => 'string',
                                'sentAs' => 'reservedInstancesModificationId',
                            ],
                            'ReservedInstancesIds' => [
                                'type' => 'array',
                                'sentAs' => 'reservedInstancesSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'ReservedInstancesId' => [
                                            'type' => 'string',
                                            'sentAs' => 'reservedInstancesId',
                                        ],
                                    ],
                                ],
                            ],
                            'ModificationResults' => [
                                'type' => 'array',
                                'sentAs' => 'modificationResultSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'ReservedInstancesId' => [
                                            'type' => 'string',
                                            'sentAs' => 'reservedInstancesId',
                                        ],
                                        'TargetConfiguration' => [
                                            'type' => 'object',
                                            'sentAs' => 'targetConfiguration',
                                            'properties' => [
                                                'AvailabilityZone' => [
                                                    'type' => 'string',
                                                    'sentAs' =>
                                                        'availabilityZone',
                                                ],
                                                'Platform' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'platform',
                                                ],
                                                'InstanceCount' => [
                                                    'type' => 'numeric',
                                                    'sentAs' => 'instanceCount',
                                                ],
                                                'InstanceType' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'instanceType',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                                'sentAs' => 'createDate',
                            ],
                            'UpdateDate' => [
                                'type' => 'string',
                                'sentAs' => 'updateDate',
                            ],
                            'EffectiveDate' => [
                                'type' => 'string',
                                'sentAs' => 'effectiveDate',
                            ],
                            'Status' => [
                                'type' => 'string',
                                'sentAs' => 'status',
                            ],
                            'StatusMessage' => [
                                'type' => 'string',
                                'sentAs' => 'statusMessage',
                            ],
                            'ClientToken' => [
                                'type' => 'string',
                                'sentAs' => 'clientToken',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeReservedInstancesOfferingsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ReservedInstancesOfferings' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'reservedInstancesOfferingsSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ReservedInstancesOfferingId' => [
                                'type' => 'string',
                                'sentAs' => 'reservedInstancesOfferingId',
                            ],
                            'InstanceType' => [
                                'type' => 'string',
                                'sentAs' => 'instanceType',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                                'sentAs' => 'availabilityZone',
                            ],
                            'Duration' => [
                                'type' => 'numeric',
                                'sentAs' => 'duration',
                            ],
                            'UsagePrice' => [
                                'type' => 'numeric',
                                'sentAs' => 'usagePrice',
                            ],
                            'FixedPrice' => [
                                'type' => 'numeric',
                                'sentAs' => 'fixedPrice',
                            ],
                            'ProductDescription' => [
                                'type' => 'string',
                                'sentAs' => 'productDescription',
                            ],
                            'InstanceTenancy' => [
                                'type' => 'string',
                                'sentAs' => 'instanceTenancy',
                            ],
                            'CurrencyCode' => [
                                'type' => 'string',
                                'sentAs' => 'currencyCode',
                            ],
                            'OfferingType' => [
                                'type' => 'string',
                                'sentAs' => 'offeringType',
                            ],
                            'RecurringCharges' => [
                                'type' => 'array',
                                'sentAs' => 'recurringCharges',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Frequency' => [
                                            'type' => 'string',
                                            'sentAs' => 'frequency',
                                        ],
                                        'Amount' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'amount',
                                        ],
                                    ],
                                ],
                            ],
                            'Marketplace' => [
                                'type' => 'boolean',
                                'sentAs' => 'marketplace',
                            ],
                            'PricingDetails' => [
                                'type' => 'array',
                                'sentAs' => 'pricingDetailsSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Price' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'price',
                                        ],
                                        'Count' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'count',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeRouteTablesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RouteTables' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'routeTableSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'RouteTableId' => [
                                'type' => 'string',
                                'sentAs' => 'routeTableId',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'sentAs' => 'vpcId',
                            ],
                            'Routes' => [
                                'type' => 'array',
                                'sentAs' => 'routeSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'DestinationCidrBlock' => [
                                            'type' => 'string',
                                            'sentAs' => 'destinationCidrBlock',
                                        ],
                                        'DestinationPrefixListId' => [
                                            'type' => 'string',
                                            'sentAs' =>
                                                'destinationPrefixListId',
                                        ],
                                        'GatewayId' => [
                                            'type' => 'string',
                                            'sentAs' => 'gatewayId',
                                        ],
                                        'InstanceId' => [
                                            'type' => 'string',
                                            'sentAs' => 'instanceId',
                                        ],
                                        'InstanceOwnerId' => [
                                            'type' => 'string',
                                            'sentAs' => 'instanceOwnerId',
                                        ],
                                        'NetworkInterfaceId' => [
                                            'type' => 'string',
                                            'sentAs' => 'networkInterfaceId',
                                        ],
                                        'VpcPeeringConnectionId' => [
                                            'type' => 'string',
                                            'sentAs' =>
                                                'vpcPeeringConnectionId',
                                        ],
                                        'State' => [
                                            'type' => 'string',
                                            'sentAs' => 'state',
                                        ],
                                        'Origin' => [
                                            'type' => 'string',
                                            'sentAs' => 'origin',
                                        ],
                                    ],
                                ],
                            ],
                            'Associations' => [
                                'type' => 'array',
                                'sentAs' => 'associationSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'RouteTableAssociationId' => [
                                            'type' => 'string',
                                            'sentAs' =>
                                                'routeTableAssociationId',
                                        ],
                                        'RouteTableId' => [
                                            'type' => 'string',
                                            'sentAs' => 'routeTableId',
                                        ],
                                        'SubnetId' => [
                                            'type' => 'string',
                                            'sentAs' => 'subnetId',
                                        ],
                                        'Main' => [
                                            'type' => 'boolean',
                                            'sentAs' => 'main',
                                        ],
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'PropagatingVgws' => [
                                'type' => 'array',
                                'sentAs' => 'propagatingVgwSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'GatewayId' => [
                                            'type' => 'string',
                                            'sentAs' => 'gatewayId',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeSecurityGroupsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SecurityGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'securityGroupInfo',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'OwnerId' => [
                                'type' => 'string',
                                'sentAs' => 'ownerId',
                            ],
                            'GroupName' => [
                                'type' => 'string',
                                'sentAs' => 'groupName',
                            ],
                            'GroupId' => [
                                'type' => 'string',
                                'sentAs' => 'groupId',
                            ],
                            'Description' => [
                                'type' => 'string',
                                'sentAs' => 'groupDescription',
                            ],
                            'IpPermissions' => [
                                'type' => 'array',
                                'sentAs' => 'ipPermissions',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'IpProtocol' => [
                                            'type' => 'string',
                                            'sentAs' => 'ipProtocol',
                                        ],
                                        'FromPort' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'fromPort',
                                        ],
                                        'ToPort' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'toPort',
                                        ],
                                        'UserIdGroupPairs' => [
                                            'type' => 'array',
                                            'sentAs' => 'groups',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'object',
                                                'sentAs' => 'item',
                                                'properties' => [
                                                    'UserId' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'userId',
                                                    ],
                                                    'GroupName' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'groupName',
                                                    ],
                                                    'GroupId' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'groupId',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'IpRanges' => [
                                            'type' => 'array',
                                            'sentAs' => 'ipRanges',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'object',
                                                'sentAs' => 'item',
                                                'properties' => [
                                                    'CidrIp' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'cidrIp',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'PrefixListIds' => [
                                            'type' => 'array',
                                            'sentAs' => 'prefixListIds',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'object',
                                                'sentAs' => 'item',
                                                'properties' => [
                                                    'PrefixListId' => [
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'prefixListId',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'IpPermissionsEgress' => [
                                'type' => 'array',
                                'sentAs' => 'ipPermissionsEgress',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'IpProtocol' => [
                                            'type' => 'string',
                                            'sentAs' => 'ipProtocol',
                                        ],
                                        'FromPort' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'fromPort',
                                        ],
                                        'ToPort' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'toPort',
                                        ],
                                        'UserIdGroupPairs' => [
                                            'type' => 'array',
                                            'sentAs' => 'groups',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'object',
                                                'sentAs' => 'item',
                                                'properties' => [
                                                    'UserId' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'userId',
                                                    ],
                                                    'GroupName' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'groupName',
                                                    ],
                                                    'GroupId' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'groupId',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'IpRanges' => [
                                            'type' => 'array',
                                            'sentAs' => 'ipRanges',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'object',
                                                'sentAs' => 'item',
                                                'properties' => [
                                                    'CidrIp' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'cidrIp',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'PrefixListIds' => [
                                            'type' => 'array',
                                            'sentAs' => 'prefixListIds',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'object',
                                                'sentAs' => 'item',
                                                'properties' => [
                                                    'PrefixListId' => [
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'prefixListId',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'sentAs' => 'vpcId',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeSnapshotAttributeResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SnapshotId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'snapshotId',
                ],
                'CreateVolumePermissions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'createVolumePermission',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'UserId' => [
                                'type' => 'string',
                                'sentAs' => 'userId',
                            ],
                            'Group' => [
                                'type' => 'string',
                                'sentAs' => 'group',
                            ],
                        ],
                    ],
                ],
                'ProductCodes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'productCodes',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ProductCodeId' => [
                                'type' => 'string',
                                'sentAs' => 'productCode',
                            ],
                            'ProductCodeType' => [
                                'type' => 'string',
                                'sentAs' => 'type',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeSnapshotsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Snapshots' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'snapshotSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'SnapshotId' => [
                                'type' => 'string',
                                'sentAs' => 'snapshotId',
                            ],
                            'VolumeId' => [
                                'type' => 'string',
                                'sentAs' => 'volumeId',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'status',
                            ],
                            'StateMessage' => [
                                'type' => 'string',
                                'sentAs' => 'statusMessage',
                            ],
                            'StartTime' => [
                                'type' => 'string',
                                'sentAs' => 'startTime',
                            ],
                            'Progress' => [
                                'type' => 'string',
                                'sentAs' => 'progress',
                            ],
                            'OwnerId' => [
                                'type' => 'string',
                                'sentAs' => 'ownerId',
                            ],
                            'Description' => [
                                'type' => 'string',
                                'sentAs' => 'description',
                            ],
                            'VolumeSize' => [
                                'type' => 'numeric',
                                'sentAs' => 'volumeSize',
                            ],
                            'OwnerAlias' => [
                                'type' => 'string',
                                'sentAs' => 'ownerAlias',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'Encrypted' => [
                                'type' => 'boolean',
                                'sentAs' => 'encrypted',
                            ],
                            'KmsKeyId' => [
                                'type' => 'string',
                                'sentAs' => 'kmsKeyId',
                            ],
                            'DataEncryptionKeyId' => [
                                'type' => 'string',
                                'sentAs' => 'dataEncryptionKeyId',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeSpotDatafeedSubscriptionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SpotDatafeedSubscription' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'spotDatafeedSubscription',
                    'properties' => [
                        'OwnerId' => [
                            'type' => 'string',
                            'sentAs' => 'ownerId',
                        ],
                        'Bucket' => [
                            'type' => 'string',
                            'sentAs' => 'bucket',
                        ],
                        'Prefix' => [
                            'type' => 'string',
                            'sentAs' => 'prefix',
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                        'Fault' => [
                            'type' => 'object',
                            'sentAs' => 'fault',
                            'properties' => [
                                'Code' => [
                                    'type' => 'string',
                                    'sentAs' => 'code',
                                ],
                                'Message' => [
                                    'type' => 'string',
                                    'sentAs' => 'message',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeSpotFleetInstancesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SpotFleetRequestId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'spotFleetRequestId',
                ],
                'ActiveInstances' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'activeInstanceSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'InstanceType' => [
                                'type' => 'string',
                                'sentAs' => 'instanceType',
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'SpotInstanceRequestId' => [
                                'type' => 'string',
                                'sentAs' => 'spotInstanceRequestId',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeSpotFleetRequestHistoryResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SpotFleetRequestId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'spotFleetRequestId',
                ],
                'StartTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'startTime',
                ],
                'LastEvaluatedTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'lastEvaluatedTime',
                ],
                'HistoryRecords' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'historyRecordSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'Timestamp' => [
                                'type' => 'string',
                                'sentAs' => 'timestamp',
                            ],
                            'EventType' => [
                                'type' => 'string',
                                'sentAs' => 'eventType',
                            ],
                            'EventInformation' => [
                                'type' => 'object',
                                'sentAs' => 'eventInformation',
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'sentAs' => 'instanceId',
                                    ],
                                    'EventSubType' => [
                                        'type' => 'string',
                                        'sentAs' => 'eventSubType',
                                    ],
                                    'EventDescription' => [
                                        'type' => 'string',
                                        'sentAs' => 'eventDescription',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeSpotFleetRequestsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SpotFleetRequestConfigs' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'spotFleetRequestConfigSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'SpotFleetRequestId' => [
                                'type' => 'string',
                                'sentAs' => 'spotFleetRequestId',
                            ],
                            'SpotFleetRequestState' => [
                                'type' => 'string',
                                'sentAs' => 'spotFleetRequestState',
                            ],
                            'SpotFleetRequestConfig' => [
                                'type' => 'object',
                                'sentAs' => 'spotFleetRequestConfig',
                                'properties' => [
                                    'ClientToken' => [
                                        'type' => 'string',
                                        'sentAs' => 'clientToken',
                                    ],
                                    'SpotPrice' => [
                                        'type' => 'string',
                                        'sentAs' => 'spotPrice',
                                    ],
                                    'TargetCapacity' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'targetCapacity',
                                    ],
                                    'ValidFrom' => [
                                        'type' => 'string',
                                        'sentAs' => 'validFrom',
                                    ],
                                    'ValidUntil' => [
                                        'type' => 'string',
                                        'sentAs' => 'validUntil',
                                    ],
                                    'TerminateInstancesWithExpiration' => [
                                        'type' => 'boolean',
                                        'sentAs' =>
                                            'terminateInstancesWithExpiration',
                                    ],
                                    'IamFleetRole' => [
                                        'type' => 'string',
                                        'sentAs' => 'iamFleetRole',
                                    ],
                                    'LaunchSpecifications' => [
                                        'type' => 'array',
                                        'sentAs' => 'launchSpecifications',
                                        'items' => [
                                            'name' => 'item',
                                            'type' => 'object',
                                            'sentAs' => 'item',
                                            'properties' => [
                                                'ImageId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'imageId',
                                                ],
                                                'KeyName' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'keyName',
                                                ],
                                                'SecurityGroups' => [
                                                    'type' => 'array',
                                                    'sentAs' => 'groupSet',
                                                    'items' => [
                                                        'name' => 'item',
                                                        'type' => 'object',
                                                        'sentAs' => 'item',
                                                        'properties' => [
                                                            'GroupName' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'groupName',
                                                            ],
                                                            'GroupId' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'groupId',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'UserData' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'userData',
                                                ],
                                                'AddressingType' => [
                                                    'type' => 'string',
                                                    'sentAs' =>
                                                        'addressingType',
                                                ],
                                                'InstanceType' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'instanceType',
                                                ],
                                                'Placement' => [
                                                    'type' => 'object',
                                                    'sentAs' => 'placement',
                                                    'properties' => [
                                                        'AvailabilityZone' => [
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'availabilityZone',
                                                        ],
                                                        'GroupName' => [
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'groupName',
                                                        ],
                                                    ],
                                                ],
                                                'KernelId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'kernelId',
                                                ],
                                                'RamdiskId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'ramdiskId',
                                                ],
                                                'BlockDeviceMappings' => [
                                                    'type' => 'array',
                                                    'sentAs' =>
                                                        'blockDeviceMapping',
                                                    'items' => [
                                                        'name' => 'item',
                                                        'type' => 'object',
                                                        'sentAs' => 'item',
                                                        'properties' => [
                                                            'VirtualName' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'virtualName',
                                                            ],
                                                            'DeviceName' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'deviceName',
                                                            ],
                                                            'Ebs' => [
                                                                'type' =>
                                                                    'object',
                                                                'sentAs' =>
                                                                    'ebs',
                                                                'properties' => [
                                                                    'SnapshotId' => [
                                                                        'type' =>
                                                                            'string',
                                                                        'sentAs' =>
                                                                            'snapshotId',
                                                                    ],
                                                                    'VolumeSize' => [
                                                                        'type' =>
                                                                            'numeric',
                                                                        'sentAs' =>
                                                                            'volumeSize',
                                                                    ],
                                                                    'DeleteOnTermination' => [
                                                                        'type' =>
                                                                            'boolean',
                                                                        'sentAs' =>
                                                                            'deleteOnTermination',
                                                                    ],
                                                                    'VolumeType' => [
                                                                        'type' =>
                                                                            'string',
                                                                        'sentAs' =>
                                                                            'volumeType',
                                                                    ],
                                                                    'Iops' => [
                                                                        'type' =>
                                                                            'numeric',
                                                                        'sentAs' =>
                                                                            'iops',
                                                                    ],
                                                                    'Encrypted' => [
                                                                        'type' =>
                                                                            'boolean',
                                                                        'sentAs' =>
                                                                            'encrypted',
                                                                    ],
                                                                ],
                                                            ],
                                                            'NoDevice' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'noDevice',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Monitoring' => [
                                                    'type' => 'object',
                                                    'sentAs' => 'monitoring',
                                                    'properties' => [
                                                        'Enabled' => [
                                                            'type' => 'boolean',
                                                            'sentAs' =>
                                                                'enabled',
                                                        ],
                                                    ],
                                                ],
                                                'SubnetId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'subnetId',
                                                ],
                                                'NetworkInterfaces' => [
                                                    'type' => 'array',
                                                    'sentAs' =>
                                                        'networkInterfaceSet',
                                                    'items' => [
                                                        'name' => 'item',
                                                        'type' => 'object',
                                                        'sentAs' => 'item',
                                                        'properties' => [
                                                            'NetworkInterfaceId' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'networkInterfaceId',
                                                            ],
                                                            'DeviceIndex' => [
                                                                'type' =>
                                                                    'numeric',
                                                                'sentAs' =>
                                                                    'deviceIndex',
                                                            ],
                                                            'SubnetId' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'subnetId',
                                                            ],
                                                            'Description' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'description',
                                                            ],
                                                            'PrivateIpAddress' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'privateIpAddress',
                                                            ],
                                                            'Groups' => [
                                                                'type' =>
                                                                    'array',
                                                                'sentAs' =>
                                                                    'SecurityGroupId',
                                                                'items' => [
                                                                    'name' =>
                                                                        'SecurityGroupId',
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'SecurityGroupId',
                                                                ],
                                                            ],
                                                            'DeleteOnTermination' => [
                                                                'type' =>
                                                                    'boolean',
                                                                'sentAs' =>
                                                                    'deleteOnTermination',
                                                            ],
                                                            'PrivateIpAddresses' => [
                                                                'type' =>
                                                                    'array',
                                                                'sentAs' =>
                                                                    'privateIpAddressesSet',
                                                                'items' => [
                                                                    'name' =>
                                                                        'item',
                                                                    'type' =>
                                                                        'object',
                                                                    'sentAs' =>
                                                                        'item',
                                                                    'properties' => [
                                                                        'PrivateIpAddress' => [
                                                                            'type' =>
                                                                                'string',
                                                                            'sentAs' =>
                                                                                'privateIpAddress',
                                                                        ],
                                                                        'Primary' => [
                                                                            'type' =>
                                                                                'boolean',
                                                                            'sentAs' =>
                                                                                'primary',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'SecondaryPrivateIpAddressCount' => [
                                                                'type' =>
                                                                    'numeric',
                                                                'sentAs' =>
                                                                    'secondaryPrivateIpAddressCount',
                                                            ],
                                                            'AssociatePublicIpAddress' => [
                                                                'type' =>
                                                                    'boolean',
                                                                'sentAs' =>
                                                                    'associatePublicIpAddress',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'IamInstanceProfile' => [
                                                    'type' => 'object',
                                                    'sentAs' =>
                                                        'iamInstanceProfile',
                                                    'properties' => [
                                                        'Arn' => [
                                                            'type' => 'string',
                                                            'sentAs' => 'arn',
                                                        ],
                                                        'Name' => [
                                                            'type' => 'string',
                                                            'sentAs' => 'name',
                                                        ],
                                                    ],
                                                ],
                                                'EbsOptimized' => [
                                                    'type' => 'boolean',
                                                    'sentAs' => 'ebsOptimized',
                                                ],
                                                'WeightedCapacity' => [
                                                    'type' => 'numeric',
                                                    'sentAs' =>
                                                        'weightedCapacity',
                                                ],
                                                'SpotPrice' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'spotPrice',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AllocationStrategy' => [
                                        'type' => 'string',
                                        'sentAs' => 'allocationStrategy',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeSpotInstanceRequestsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SpotInstanceRequests' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'spotInstanceRequestSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'SpotInstanceRequestId' => [
                                'type' => 'string',
                                'sentAs' => 'spotInstanceRequestId',
                            ],
                            'SpotPrice' => [
                                'type' => 'string',
                                'sentAs' => 'spotPrice',
                            ],
                            'Type' => [
                                'type' => 'string',
                                'sentAs' => 'type',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                            'Fault' => [
                                'type' => 'object',
                                'sentAs' => 'fault',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'string',
                                        'sentAs' => 'code',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                        'sentAs' => 'message',
                                    ],
                                ],
                            ],
                            'Status' => [
                                'type' => 'object',
                                'sentAs' => 'status',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'string',
                                        'sentAs' => 'code',
                                    ],
                                    'UpdateTime' => [
                                        'type' => 'string',
                                        'sentAs' => 'updateTime',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                        'sentAs' => 'message',
                                    ],
                                ],
                            ],
                            'ValidFrom' => [
                                'type' => 'string',
                                'sentAs' => 'validFrom',
                            ],
                            'ValidUntil' => [
                                'type' => 'string',
                                'sentAs' => 'validUntil',
                            ],
                            'LaunchGroup' => [
                                'type' => 'string',
                                'sentAs' => 'launchGroup',
                            ],
                            'AvailabilityZoneGroup' => [
                                'type' => 'string',
                                'sentAs' => 'availabilityZoneGroup',
                            ],
                            'LaunchSpecification' => [
                                'type' => 'object',
                                'sentAs' => 'launchSpecification',
                                'properties' => [
                                    'ImageId' => [
                                        'type' => 'string',
                                        'sentAs' => 'imageId',
                                    ],
                                    'KeyName' => [
                                        'type' => 'string',
                                        'sentAs' => 'keyName',
                                    ],
                                    'SecurityGroups' => [
                                        'type' => 'array',
                                        'sentAs' => 'groupSet',
                                        'items' => [
                                            'name' => 'item',
                                            'type' => 'object',
                                            'sentAs' => 'item',
                                            'properties' => [
                                                'GroupName' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'groupName',
                                                ],
                                                'GroupId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'groupId',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'UserData' => [
                                        'type' => 'string',
                                        'sentAs' => 'userData',
                                    ],
                                    'AddressingType' => [
                                        'type' => 'string',
                                        'sentAs' => 'addressingType',
                                    ],
                                    'InstanceType' => [
                                        'type' => 'string',
                                        'sentAs' => 'instanceType',
                                    ],
                                    'Placement' => [
                                        'type' => 'object',
                                        'sentAs' => 'placement',
                                        'properties' => [
                                            'AvailabilityZone' => [
                                                'type' => 'string',
                                                'sentAs' => 'availabilityZone',
                                            ],
                                            'GroupName' => [
                                                'type' => 'string',
                                                'sentAs' => 'groupName',
                                            ],
                                        ],
                                    ],
                                    'KernelId' => [
                                        'type' => 'string',
                                        'sentAs' => 'kernelId',
                                    ],
                                    'RamdiskId' => [
                                        'type' => 'string',
                                        'sentAs' => 'ramdiskId',
                                    ],
                                    'BlockDeviceMappings' => [
                                        'type' => 'array',
                                        'sentAs' => 'blockDeviceMapping',
                                        'items' => [
                                            'name' => 'item',
                                            'type' => 'object',
                                            'sentAs' => 'item',
                                            'properties' => [
                                                'VirtualName' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'virtualName',
                                                ],
                                                'DeviceName' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'deviceName',
                                                ],
                                                'Ebs' => [
                                                    'type' => 'object',
                                                    'sentAs' => 'ebs',
                                                    'properties' => [
                                                        'SnapshotId' => [
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'snapshotId',
                                                        ],
                                                        'VolumeSize' => [
                                                            'type' => 'numeric',
                                                            'sentAs' =>
                                                                'volumeSize',
                                                        ],
                                                        'DeleteOnTermination' => [
                                                            'type' => 'boolean',
                                                            'sentAs' =>
                                                                'deleteOnTermination',
                                                        ],
                                                        'VolumeType' => [
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'volumeType',
                                                        ],
                                                        'Iops' => [
                                                            'type' => 'numeric',
                                                            'sentAs' => 'iops',
                                                        ],
                                                        'Encrypted' => [
                                                            'type' => 'boolean',
                                                            'sentAs' =>
                                                                'encrypted',
                                                        ],
                                                    ],
                                                ],
                                                'NoDevice' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'noDevice',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'MonitoringEnabled' => [
                                        'type' => 'boolean',
                                        'sentAs' => 'monitoringEnabled',
                                    ],
                                    'SubnetId' => [
                                        'type' => 'string',
                                        'sentAs' => 'subnetId',
                                    ],
                                    'NetworkInterfaces' => [
                                        'type' => 'array',
                                        'sentAs' => 'networkInterfaceSet',
                                        'items' => [
                                            'name' => 'item',
                                            'type' => 'object',
                                            'sentAs' => 'item',
                                            'properties' => [
                                                'NetworkInterfaceId' => [
                                                    'type' => 'string',
                                                    'sentAs' =>
                                                        'networkInterfaceId',
                                                ],
                                                'DeviceIndex' => [
                                                    'type' => 'numeric',
                                                    'sentAs' => 'deviceIndex',
                                                ],
                                                'SubnetId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'subnetId',
                                                ],
                                                'Description' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'description',
                                                ],
                                                'PrivateIpAddress' => [
                                                    'type' => 'string',
                                                    'sentAs' =>
                                                        'privateIpAddress',
                                                ],
                                                'Groups' => [
                                                    'type' => 'array',
                                                    'sentAs' =>
                                                        'SecurityGroupId',
                                                    'items' => [
                                                        'name' =>
                                                            'SecurityGroupId',
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'SecurityGroupId',
                                                    ],
                                                ],
                                                'DeleteOnTermination' => [
                                                    'type' => 'boolean',
                                                    'sentAs' =>
                                                        'deleteOnTermination',
                                                ],
                                                'PrivateIpAddresses' => [
                                                    'type' => 'array',
                                                    'sentAs' =>
                                                        'privateIpAddressesSet',
                                                    'items' => [
                                                        'name' => 'item',
                                                        'type' => 'object',
                                                        'sentAs' => 'item',
                                                        'properties' => [
                                                            'PrivateIpAddress' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'privateIpAddress',
                                                            ],
                                                            'Primary' => [
                                                                'type' =>
                                                                    'boolean',
                                                                'sentAs' =>
                                                                    'primary',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'SecondaryPrivateIpAddressCount' => [
                                                    'type' => 'numeric',
                                                    'sentAs' =>
                                                        'secondaryPrivateIpAddressCount',
                                                ],
                                                'AssociatePublicIpAddress' => [
                                                    'type' => 'boolean',
                                                    'sentAs' =>
                                                        'associatePublicIpAddress',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'IamInstanceProfile' => [
                                        'type' => 'object',
                                        'sentAs' => 'iamInstanceProfile',
                                        'properties' => [
                                            'Arn' => [
                                                'type' => 'string',
                                                'sentAs' => 'arn',
                                            ],
                                            'Name' => [
                                                'type' => 'string',
                                                'sentAs' => 'name',
                                            ],
                                        ],
                                    ],
                                    'EbsOptimized' => [
                                        'type' => 'boolean',
                                        'sentAs' => 'ebsOptimized',
                                    ],
                                ],
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'CreateTime' => [
                                'type' => 'string',
                                'sentAs' => 'createTime',
                            ],
                            'ProductDescription' => [
                                'type' => 'string',
                                'sentAs' => 'productDescription',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'LaunchedAvailabilityZone' => [
                                'type' => 'string',
                                'sentAs' => 'launchedAvailabilityZone',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeSpotPriceHistoryResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SpotPriceHistory' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'spotPriceHistorySet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'InstanceType' => [
                                'type' => 'string',
                                'sentAs' => 'instanceType',
                            ],
                            'ProductDescription' => [
                                'type' => 'string',
                                'sentAs' => 'productDescription',
                            ],
                            'SpotPrice' => [
                                'type' => 'string',
                                'sentAs' => 'spotPrice',
                            ],
                            'Timestamp' => [
                                'type' => 'string',
                                'sentAs' => 'timestamp',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                                'sentAs' => 'availabilityZone',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeSubnetsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Subnets' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'subnetSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'SubnetId' => [
                                'type' => 'string',
                                'sentAs' => 'subnetId',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'sentAs' => 'vpcId',
                            ],
                            'CidrBlock' => [
                                'type' => 'string',
                                'sentAs' => 'cidrBlock',
                            ],
                            'AvailableIpAddressCount' => [
                                'type' => 'numeric',
                                'sentAs' => 'availableIpAddressCount',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                                'sentAs' => 'availabilityZone',
                            ],
                            'DefaultForAz' => [
                                'type' => 'boolean',
                                'sentAs' => 'defaultForAz',
                            ],
                            'MapPublicIpOnLaunch' => [
                                'type' => 'boolean',
                                'sentAs' => 'mapPublicIpOnLaunch',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeTagsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Tags' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'tagSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ResourceId' => [
                                'type' => 'string',
                                'sentAs' => 'resourceId',
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                                'sentAs' => 'resourceType',
                            ],
                            'Key' => [
                                'type' => 'string',
                                'sentAs' => 'key',
                            ],
                            'Value' => [
                                'type' => 'string',
                                'sentAs' => 'value',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeVolumeAttributeResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VolumeId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'volumeId',
                ],
                'AutoEnableIO' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'autoEnableIO',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'ProductCodes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'productCodes',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'ProductCodeId' => [
                                'type' => 'string',
                                'sentAs' => 'productCode',
                            ],
                            'ProductCodeType' => [
                                'type' => 'string',
                                'sentAs' => 'type',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeVolumeStatusResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VolumeStatuses' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'volumeStatusSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'VolumeId' => [
                                'type' => 'string',
                                'sentAs' => 'volumeId',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                                'sentAs' => 'availabilityZone',
                            ],
                            'VolumeStatus' => [
                                'type' => 'object',
                                'sentAs' => 'volumeStatus',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'string',
                                        'sentAs' => 'status',
                                    ],
                                    'Details' => [
                                        'type' => 'array',
                                        'sentAs' => 'details',
                                        'items' => [
                                            'name' => 'item',
                                            'type' => 'object',
                                            'sentAs' => 'item',
                                            'properties' => [
                                                'Name' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'name',
                                                ],
                                                'Status' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'status',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Events' => [
                                'type' => 'array',
                                'sentAs' => 'eventsSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'EventType' => [
                                            'type' => 'string',
                                            'sentAs' => 'eventType',
                                        ],
                                        'Description' => [
                                            'type' => 'string',
                                            'sentAs' => 'description',
                                        ],
                                        'NotBefore' => [
                                            'type' => 'string',
                                            'sentAs' => 'notBefore',
                                        ],
                                        'NotAfter' => [
                                            'type' => 'string',
                                            'sentAs' => 'notAfter',
                                        ],
                                        'EventId' => [
                                            'type' => 'string',
                                            'sentAs' => 'eventId',
                                        ],
                                    ],
                                ],
                            ],
                            'Actions' => [
                                'type' => 'array',
                                'sentAs' => 'actionsSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Code' => [
                                            'type' => 'string',
                                            'sentAs' => 'code',
                                        ],
                                        'Description' => [
                                            'type' => 'string',
                                            'sentAs' => 'description',
                                        ],
                                        'EventType' => [
                                            'type' => 'string',
                                            'sentAs' => 'eventType',
                                        ],
                                        'EventId' => [
                                            'type' => 'string',
                                            'sentAs' => 'eventId',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeVolumesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Volumes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'volumeSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'VolumeId' => [
                                'type' => 'string',
                                'sentAs' => 'volumeId',
                            ],
                            'Size' => [
                                'type' => 'numeric',
                                'sentAs' => 'size',
                            ],
                            'SnapshotId' => [
                                'type' => 'string',
                                'sentAs' => 'snapshotId',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                                'sentAs' => 'availabilityZone',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'status',
                            ],
                            'CreateTime' => [
                                'type' => 'string',
                                'sentAs' => 'createTime',
                            ],
                            'Attachments' => [
                                'type' => 'array',
                                'sentAs' => 'attachmentSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'VolumeId' => [
                                            'type' => 'string',
                                            'sentAs' => 'volumeId',
                                        ],
                                        'InstanceId' => [
                                            'type' => 'string',
                                            'sentAs' => 'instanceId',
                                        ],
                                        'Device' => [
                                            'type' => 'string',
                                            'sentAs' => 'device',
                                        ],
                                        'State' => [
                                            'type' => 'string',
                                            'sentAs' => 'status',
                                        ],
                                        'AttachTime' => [
                                            'type' => 'string',
                                            'sentAs' => 'attachTime',
                                        ],
                                        'DeleteOnTermination' => [
                                            'type' => 'boolean',
                                            'sentAs' => 'deleteOnTermination',
                                        ],
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'VolumeType' => [
                                'type' => 'string',
                                'sentAs' => 'volumeType',
                            ],
                            'Iops' => [
                                'type' => 'numeric',
                                'sentAs' => 'iops',
                            ],
                            'Encrypted' => [
                                'type' => 'boolean',
                                'sentAs' => 'encrypted',
                            ],
                            'KmsKeyId' => [
                                'type' => 'string',
                                'sentAs' => 'kmsKeyId',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeVpcAttributeResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VpcId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'vpcId',
                ],
                'EnableDnsSupport' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'enableDnsSupport',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
                'EnableDnsHostnames' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'enableDnsHostnames',
                    'properties' => [
                        'Value' => [
                            'type' => 'boolean',
                            'sentAs' => 'value',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeVpcClassicLinkResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Vpcs' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'vpcSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'VpcId' => [
                                'type' => 'string',
                                'sentAs' => 'vpcId',
                            ],
                            'ClassicLinkEnabled' => [
                                'type' => 'boolean',
                                'sentAs' => 'classicLinkEnabled',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeVpcEndpointServicesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ServiceNames' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'serviceNameSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'string',
                        'sentAs' => 'item',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeVpcEndpointsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VpcEndpoints' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'vpcEndpointSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'VpcEndpointId' => [
                                'type' => 'string',
                                'sentAs' => 'vpcEndpointId',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'sentAs' => 'vpcId',
                            ],
                            'ServiceName' => [
                                'type' => 'string',
                                'sentAs' => 'serviceName',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                            'PolicyDocument' => [
                                'type' => 'string',
                                'sentAs' => 'policyDocument',
                            ],
                            'RouteTableIds' => [
                                'type' => 'array',
                                'sentAs' => 'routeTableIdSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'string',
                                    'sentAs' => 'item',
                                ],
                            ],
                            'CreationTimestamp' => [
                                'type' => 'string',
                                'sentAs' => 'creationTimestamp',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'nextToken',
                ],
            ],
        ],
        'DescribeVpcPeeringConnectionsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VpcPeeringConnections' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'vpcPeeringConnectionSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'AccepterVpcInfo' => [
                                'type' => 'object',
                                'sentAs' => 'accepterVpcInfo',
                                'properties' => [
                                    'CidrBlock' => [
                                        'type' => 'string',
                                        'sentAs' => 'cidrBlock',
                                    ],
                                    'OwnerId' => [
                                        'type' => 'string',
                                        'sentAs' => 'ownerId',
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'sentAs' => 'vpcId',
                                    ],
                                ],
                            ],
                            'ExpirationTime' => [
                                'type' => 'string',
                                'sentAs' => 'expirationTime',
                            ],
                            'RequesterVpcInfo' => [
                                'type' => 'object',
                                'sentAs' => 'requesterVpcInfo',
                                'properties' => [
                                    'CidrBlock' => [
                                        'type' => 'string',
                                        'sentAs' => 'cidrBlock',
                                    ],
                                    'OwnerId' => [
                                        'type' => 'string',
                                        'sentAs' => 'ownerId',
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'sentAs' => 'vpcId',
                                    ],
                                ],
                            ],
                            'Status' => [
                                'type' => 'object',
                                'sentAs' => 'status',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'string',
                                        'sentAs' => 'code',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                        'sentAs' => 'message',
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'VpcPeeringConnectionId' => [
                                'type' => 'string',
                                'sentAs' => 'vpcPeeringConnectionId',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeVpcsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Vpcs' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'vpcSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'VpcId' => [
                                'type' => 'string',
                                'sentAs' => 'vpcId',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                            'CidrBlock' => [
                                'type' => 'string',
                                'sentAs' => 'cidrBlock',
                            ],
                            'DhcpOptionsId' => [
                                'type' => 'string',
                                'sentAs' => 'dhcpOptionsId',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'InstanceTenancy' => [
                                'type' => 'string',
                                'sentAs' => 'instanceTenancy',
                            ],
                            'IsDefault' => [
                                'type' => 'boolean',
                                'sentAs' => 'isDefault',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeVpnConnectionsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VpnConnections' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'vpnConnectionSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'VpnConnectionId' => [
                                'type' => 'string',
                                'sentAs' => 'vpnConnectionId',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                            'CustomerGatewayConfiguration' => [
                                'type' => 'string',
                                'sentAs' => 'customerGatewayConfiguration',
                            ],
                            'Type' => [
                                'type' => 'string',
                                'sentAs' => 'type',
                            ],
                            'CustomerGatewayId' => [
                                'type' => 'string',
                                'sentAs' => 'customerGatewayId',
                            ],
                            'VpnGatewayId' => [
                                'type' => 'string',
                                'sentAs' => 'vpnGatewayId',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'VgwTelemetry' => [
                                'type' => 'array',
                                'sentAs' => 'vgwTelemetry',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'OutsideIpAddress' => [
                                            'type' => 'string',
                                            'sentAs' => 'outsideIpAddress',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                            'sentAs' => 'status',
                                        ],
                                        'LastStatusChange' => [
                                            'type' => 'string',
                                            'sentAs' => 'lastStatusChange',
                                        ],
                                        'StatusMessage' => [
                                            'type' => 'string',
                                            'sentAs' => 'statusMessage',
                                        ],
                                        'AcceptedRouteCount' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'acceptedRouteCount',
                                        ],
                                    ],
                                ],
                            ],
                            'Options' => [
                                'type' => 'object',
                                'sentAs' => 'options',
                                'properties' => [
                                    'StaticRoutesOnly' => [
                                        'type' => 'boolean',
                                        'sentAs' => 'staticRoutesOnly',
                                    ],
                                ],
                            ],
                            'Routes' => [
                                'type' => 'array',
                                'sentAs' => 'routes',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'DestinationCidrBlock' => [
                                            'type' => 'string',
                                            'sentAs' => 'destinationCidrBlock',
                                        ],
                                        'Source' => [
                                            'type' => 'string',
                                            'sentAs' => 'source',
                                        ],
                                        'State' => [
                                            'type' => 'string',
                                            'sentAs' => 'state',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeVpnGatewaysResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VpnGateways' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'vpnGatewaySet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'VpnGatewayId' => [
                                'type' => 'string',
                                'sentAs' => 'vpnGatewayId',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                            'Type' => [
                                'type' => 'string',
                                'sentAs' => 'type',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                                'sentAs' => 'availabilityZone',
                            ],
                            'VpcAttachments' => [
                                'type' => 'array',
                                'sentAs' => 'attachments',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'VpcId' => [
                                            'type' => 'string',
                                            'sentAs' => 'vpcId',
                                        ],
                                        'State' => [
                                            'type' => 'string',
                                            'sentAs' => 'state',
                                        ],
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DetachClassicLinkVpcResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Return' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                    'sentAs' => 'return',
                ],
            ],
        ],
        'DisableVpcClassicLinkResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Return' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                    'sentAs' => 'return',
                ],
            ],
        ],
        'EnableVpcClassicLinkResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Return' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                    'sentAs' => 'return',
                ],
            ],
        ],
        'GetConsoleOutputResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'instanceId',
                ],
                'Timestamp' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'timestamp',
                ],
                'Output' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'output',
                ],
            ],
        ],
        'GetPasswordDataResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'instanceId',
                ],
                'Timestamp' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'timestamp',
                ],
                'PasswordData' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'passwordData',
                ],
            ],
        ],
        'ImportImageResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ImportTaskId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'importTaskId',
                ],
                'Architecture' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'architecture',
                ],
                'LicenseType' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'licenseType',
                ],
                'Platform' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'platform',
                ],
                'Hypervisor' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'hypervisor',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'description',
                ],
                'SnapshotDetails' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'snapshotDetailSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'DiskImageSize' => [
                                'type' => 'numeric',
                                'sentAs' => 'diskImageSize',
                            ],
                            'Description' => [
                                'type' => 'string',
                                'sentAs' => 'description',
                            ],
                            'Format' => [
                                'type' => 'string',
                                'sentAs' => 'format',
                            ],
                            'Url' => [
                                'type' => 'string',
                                'sentAs' => 'url',
                            ],
                            'UserBucket' => [
                                'type' => 'object',
                                'sentAs' => 'userBucket',
                                'properties' => [
                                    'S3Bucket' => [
                                        'type' => 'string',
                                        'sentAs' => 's3Bucket',
                                    ],
                                    'S3Key' => [
                                        'type' => 'string',
                                        'sentAs' => 's3Key',
                                    ],
                                ],
                            ],
                            'DeviceName' => [
                                'type' => 'string',
                                'sentAs' => 'deviceName',
                            ],
                            'SnapshotId' => [
                                'type' => 'string',
                                'sentAs' => 'snapshotId',
                            ],
                            'Progress' => [
                                'type' => 'string',
                                'sentAs' => 'progress',
                            ],
                            'StatusMessage' => [
                                'type' => 'string',
                                'sentAs' => 'statusMessage',
                            ],
                            'Status' => [
                                'type' => 'string',
                                'sentAs' => 'status',
                            ],
                        ],
                    ],
                ],
                'ImageId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'imageId',
                ],
                'Progress' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'progress',
                ],
                'StatusMessage' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'statusMessage',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'status',
                ],
            ],
        ],
        'ImportInstanceResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ConversionTask' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'conversionTask',
                    'properties' => [
                        'ConversionTaskId' => [
                            'type' => 'string',
                            'sentAs' => 'conversionTaskId',
                        ],
                        'ExpirationTime' => [
                            'type' => 'string',
                            'sentAs' => 'expirationTime',
                        ],
                        'ImportInstance' => [
                            'type' => 'object',
                            'sentAs' => 'importInstance',
                            'properties' => [
                                'Volumes' => [
                                    'type' => 'array',
                                    'sentAs' => 'volumes',
                                    'items' => [
                                        'name' => 'item',
                                        'type' => 'object',
                                        'sentAs' => 'item',
                                        'properties' => [
                                            'BytesConverted' => [
                                                'type' => 'numeric',
                                                'sentAs' => 'bytesConverted',
                                            ],
                                            'AvailabilityZone' => [
                                                'type' => 'string',
                                                'sentAs' => 'availabilityZone',
                                            ],
                                            'Image' => [
                                                'type' => 'object',
                                                'sentAs' => 'image',
                                                'properties' => [
                                                    'Format' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'format',
                                                    ],
                                                    'Size' => [
                                                        'type' => 'numeric',
                                                        'sentAs' => 'size',
                                                    ],
                                                    'ImportManifestUrl' => [
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'importManifestUrl',
                                                    ],
                                                    'Checksum' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'checksum',
                                                    ],
                                                ],
                                            ],
                                            'Volume' => [
                                                'type' => 'object',
                                                'sentAs' => 'volume',
                                                'properties' => [
                                                    'Size' => [
                                                        'type' => 'numeric',
                                                        'sentAs' => 'size',
                                                    ],
                                                    'Id' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'id',
                                                    ],
                                                ],
                                            ],
                                            'Status' => [
                                                'type' => 'string',
                                                'sentAs' => 'status',
                                            ],
                                            'StatusMessage' => [
                                                'type' => 'string',
                                                'sentAs' => 'statusMessage',
                                            ],
                                            'Description' => [
                                                'type' => 'string',
                                                'sentAs' => 'description',
                                            ],
                                        ],
                                    ],
                                ],
                                'InstanceId' => [
                                    'type' => 'string',
                                    'sentAs' => 'instanceId',
                                ],
                                'Platform' => [
                                    'type' => 'string',
                                    'sentAs' => 'platform',
                                ],
                                'Description' => [
                                    'type' => 'string',
                                    'sentAs' => 'description',
                                ],
                            ],
                        ],
                        'ImportVolume' => [
                            'type' => 'object',
                            'sentAs' => 'importVolume',
                            'properties' => [
                                'BytesConverted' => [
                                    'type' => 'numeric',
                                    'sentAs' => 'bytesConverted',
                                ],
                                'AvailabilityZone' => [
                                    'type' => 'string',
                                    'sentAs' => 'availabilityZone',
                                ],
                                'Description' => [
                                    'type' => 'string',
                                    'sentAs' => 'description',
                                ],
                                'Image' => [
                                    'type' => 'object',
                                    'sentAs' => 'image',
                                    'properties' => [
                                        'Format' => [
                                            'type' => 'string',
                                            'sentAs' => 'format',
                                        ],
                                        'Size' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'size',
                                        ],
                                        'ImportManifestUrl' => [
                                            'type' => 'string',
                                            'sentAs' => 'importManifestUrl',
                                        ],
                                        'Checksum' => [
                                            'type' => 'string',
                                            'sentAs' => 'checksum',
                                        ],
                                    ],
                                ],
                                'Volume' => [
                                    'type' => 'object',
                                    'sentAs' => 'volume',
                                    'properties' => [
                                        'Size' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'size',
                                        ],
                                        'Id' => [
                                            'type' => 'string',
                                            'sentAs' => 'id',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                        'StatusMessage' => [
                            'type' => 'string',
                            'sentAs' => 'statusMessage',
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ImportKeyPairResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'KeyName' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'keyName',
                ],
                'KeyFingerprint' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'keyFingerprint',
                ],
            ],
        ],
        'ImportSnapshotResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ImportTaskId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'importTaskId',
                ],
                'SnapshotTaskDetail' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'snapshotTaskDetail',
                    'properties' => [
                        'DiskImageSize' => [
                            'type' => 'numeric',
                            'sentAs' => 'diskImageSize',
                        ],
                        'Description' => [
                            'type' => 'string',
                            'sentAs' => 'description',
                        ],
                        'Format' => [
                            'type' => 'string',
                            'sentAs' => 'format',
                        ],
                        'Url' => [
                            'type' => 'string',
                            'sentAs' => 'url',
                        ],
                        'UserBucket' => [
                            'type' => 'object',
                            'sentAs' => 'userBucket',
                            'properties' => [
                                'S3Bucket' => [
                                    'type' => 'string',
                                    'sentAs' => 's3Bucket',
                                ],
                                'S3Key' => [
                                    'type' => 'string',
                                    'sentAs' => 's3Key',
                                ],
                            ],
                        ],
                        'SnapshotId' => [
                            'type' => 'string',
                            'sentAs' => 'snapshotId',
                        ],
                        'Progress' => [
                            'type' => 'string',
                            'sentAs' => 'progress',
                        ],
                        'StatusMessage' => [
                            'type' => 'string',
                            'sentAs' => 'statusMessage',
                        ],
                        'Status' => [
                            'type' => 'string',
                            'sentAs' => 'status',
                        ],
                    ],
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'description',
                ],
            ],
        ],
        'ImportVolumeResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ConversionTask' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'sentAs' => 'conversionTask',
                    'properties' => [
                        'ConversionTaskId' => [
                            'type' => 'string',
                            'sentAs' => 'conversionTaskId',
                        ],
                        'ExpirationTime' => [
                            'type' => 'string',
                            'sentAs' => 'expirationTime',
                        ],
                        'ImportInstance' => [
                            'type' => 'object',
                            'sentAs' => 'importInstance',
                            'properties' => [
                                'Volumes' => [
                                    'type' => 'array',
                                    'sentAs' => 'volumes',
                                    'items' => [
                                        'name' => 'item',
                                        'type' => 'object',
                                        'sentAs' => 'item',
                                        'properties' => [
                                            'BytesConverted' => [
                                                'type' => 'numeric',
                                                'sentAs' => 'bytesConverted',
                                            ],
                                            'AvailabilityZone' => [
                                                'type' => 'string',
                                                'sentAs' => 'availabilityZone',
                                            ],
                                            'Image' => [
                                                'type' => 'object',
                                                'sentAs' => 'image',
                                                'properties' => [
                                                    'Format' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'format',
                                                    ],
                                                    'Size' => [
                                                        'type' => 'numeric',
                                                        'sentAs' => 'size',
                                                    ],
                                                    'ImportManifestUrl' => [
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'importManifestUrl',
                                                    ],
                                                    'Checksum' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'checksum',
                                                    ],
                                                ],
                                            ],
                                            'Volume' => [
                                                'type' => 'object',
                                                'sentAs' => 'volume',
                                                'properties' => [
                                                    'Size' => [
                                                        'type' => 'numeric',
                                                        'sentAs' => 'size',
                                                    ],
                                                    'Id' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'id',
                                                    ],
                                                ],
                                            ],
                                            'Status' => [
                                                'type' => 'string',
                                                'sentAs' => 'status',
                                            ],
                                            'StatusMessage' => [
                                                'type' => 'string',
                                                'sentAs' => 'statusMessage',
                                            ],
                                            'Description' => [
                                                'type' => 'string',
                                                'sentAs' => 'description',
                                            ],
                                        ],
                                    ],
                                ],
                                'InstanceId' => [
                                    'type' => 'string',
                                    'sentAs' => 'instanceId',
                                ],
                                'Platform' => [
                                    'type' => 'string',
                                    'sentAs' => 'platform',
                                ],
                                'Description' => [
                                    'type' => 'string',
                                    'sentAs' => 'description',
                                ],
                            ],
                        ],
                        'ImportVolume' => [
                            'type' => 'object',
                            'sentAs' => 'importVolume',
                            'properties' => [
                                'BytesConverted' => [
                                    'type' => 'numeric',
                                    'sentAs' => 'bytesConverted',
                                ],
                                'AvailabilityZone' => [
                                    'type' => 'string',
                                    'sentAs' => 'availabilityZone',
                                ],
                                'Description' => [
                                    'type' => 'string',
                                    'sentAs' => 'description',
                                ],
                                'Image' => [
                                    'type' => 'object',
                                    'sentAs' => 'image',
                                    'properties' => [
                                        'Format' => [
                                            'type' => 'string',
                                            'sentAs' => 'format',
                                        ],
                                        'Size' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'size',
                                        ],
                                        'ImportManifestUrl' => [
                                            'type' => 'string',
                                            'sentAs' => 'importManifestUrl',
                                        ],
                                        'Checksum' => [
                                            'type' => 'string',
                                            'sentAs' => 'checksum',
                                        ],
                                    ],
                                ],
                                'Volume' => [
                                    'type' => 'object',
                                    'sentAs' => 'volume',
                                    'properties' => [
                                        'Size' => [
                                            'type' => 'numeric',
                                            'sentAs' => 'size',
                                        ],
                                        'Id' => [
                                            'type' => 'string',
                                            'sentAs' => 'id',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'State' => [
                            'type' => 'string',
                            'sentAs' => 'state',
                        ],
                        'StatusMessage' => [
                            'type' => 'string',
                            'sentAs' => 'statusMessage',
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'sentAs' => 'tagSet',
                            'items' => [
                                'name' => 'item',
                                'type' => 'object',
                                'sentAs' => 'item',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                        'sentAs' => 'key',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                        'sentAs' => 'value',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyReservedInstancesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ReservedInstancesModificationId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'reservedInstancesModificationId',
                ],
            ],
        ],
        'ModifyVpcEndpointResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Return' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                    'sentAs' => 'return',
                ],
            ],
        ],
        'MonitorInstancesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceMonitorings' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'instancesSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'Monitoring' => [
                                'type' => 'object',
                                'sentAs' => 'monitoring',
                                'properties' => [
                                    'State' => [
                                        'type' => 'string',
                                        'sentAs' => 'state',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'MoveAddressToVpcResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AllocationId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'allocationId',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'status',
                ],
            ],
        ],
        'PurchaseReservedInstancesOfferingResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ReservedInstancesId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'reservedInstancesId',
                ],
            ],
        ],
        'RegisterImageResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ImageId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'imageId',
                ],
            ],
        ],
        'RejectVpcPeeringConnectionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Return' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                    'sentAs' => 'return',
                ],
            ],
        ],
        'ReplaceNetworkAclAssociationResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NewAssociationId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'newAssociationId',
                ],
            ],
        ],
        'ReplaceRouteTableAssociationResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NewAssociationId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'newAssociationId',
                ],
            ],
        ],
        'RequestSpotFleetResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SpotFleetRequestId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'spotFleetRequestId',
                ],
            ],
        ],
        'RequestSpotInstancesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SpotInstanceRequests' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'spotInstanceRequestSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'SpotInstanceRequestId' => [
                                'type' => 'string',
                                'sentAs' => 'spotInstanceRequestId',
                            ],
                            'SpotPrice' => [
                                'type' => 'string',
                                'sentAs' => 'spotPrice',
                            ],
                            'Type' => [
                                'type' => 'string',
                                'sentAs' => 'type',
                            ],
                            'State' => [
                                'type' => 'string',
                                'sentAs' => 'state',
                            ],
                            'Fault' => [
                                'type' => 'object',
                                'sentAs' => 'fault',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'string',
                                        'sentAs' => 'code',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                        'sentAs' => 'message',
                                    ],
                                ],
                            ],
                            'Status' => [
                                'type' => 'object',
                                'sentAs' => 'status',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'string',
                                        'sentAs' => 'code',
                                    ],
                                    'UpdateTime' => [
                                        'type' => 'string',
                                        'sentAs' => 'updateTime',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                        'sentAs' => 'message',
                                    ],
                                ],
                            ],
                            'ValidFrom' => [
                                'type' => 'string',
                                'sentAs' => 'validFrom',
                            ],
                            'ValidUntil' => [
                                'type' => 'string',
                                'sentAs' => 'validUntil',
                            ],
                            'LaunchGroup' => [
                                'type' => 'string',
                                'sentAs' => 'launchGroup',
                            ],
                            'AvailabilityZoneGroup' => [
                                'type' => 'string',
                                'sentAs' => 'availabilityZoneGroup',
                            ],
                            'LaunchSpecification' => [
                                'type' => 'object',
                                'sentAs' => 'launchSpecification',
                                'properties' => [
                                    'ImageId' => [
                                        'type' => 'string',
                                        'sentAs' => 'imageId',
                                    ],
                                    'KeyName' => [
                                        'type' => 'string',
                                        'sentAs' => 'keyName',
                                    ],
                                    'SecurityGroups' => [
                                        'type' => 'array',
                                        'sentAs' => 'groupSet',
                                        'items' => [
                                            'name' => 'item',
                                            'type' => 'object',
                                            'sentAs' => 'item',
                                            'properties' => [
                                                'GroupName' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'groupName',
                                                ],
                                                'GroupId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'groupId',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'UserData' => [
                                        'type' => 'string',
                                        'sentAs' => 'userData',
                                    ],
                                    'AddressingType' => [
                                        'type' => 'string',
                                        'sentAs' => 'addressingType',
                                    ],
                                    'InstanceType' => [
                                        'type' => 'string',
                                        'sentAs' => 'instanceType',
                                    ],
                                    'Placement' => [
                                        'type' => 'object',
                                        'sentAs' => 'placement',
                                        'properties' => [
                                            'AvailabilityZone' => [
                                                'type' => 'string',
                                                'sentAs' => 'availabilityZone',
                                            ],
                                            'GroupName' => [
                                                'type' => 'string',
                                                'sentAs' => 'groupName',
                                            ],
                                        ],
                                    ],
                                    'KernelId' => [
                                        'type' => 'string',
                                        'sentAs' => 'kernelId',
                                    ],
                                    'RamdiskId' => [
                                        'type' => 'string',
                                        'sentAs' => 'ramdiskId',
                                    ],
                                    'BlockDeviceMappings' => [
                                        'type' => 'array',
                                        'sentAs' => 'blockDeviceMapping',
                                        'items' => [
                                            'name' => 'item',
                                            'type' => 'object',
                                            'sentAs' => 'item',
                                            'properties' => [
                                                'VirtualName' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'virtualName',
                                                ],
                                                'DeviceName' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'deviceName',
                                                ],
                                                'Ebs' => [
                                                    'type' => 'object',
                                                    'sentAs' => 'ebs',
                                                    'properties' => [
                                                        'SnapshotId' => [
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'snapshotId',
                                                        ],
                                                        'VolumeSize' => [
                                                            'type' => 'numeric',
                                                            'sentAs' =>
                                                                'volumeSize',
                                                        ],
                                                        'DeleteOnTermination' => [
                                                            'type' => 'boolean',
                                                            'sentAs' =>
                                                                'deleteOnTermination',
                                                        ],
                                                        'VolumeType' => [
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'volumeType',
                                                        ],
                                                        'Iops' => [
                                                            'type' => 'numeric',
                                                            'sentAs' => 'iops',
                                                        ],
                                                        'Encrypted' => [
                                                            'type' => 'boolean',
                                                            'sentAs' =>
                                                                'encrypted',
                                                        ],
                                                    ],
                                                ],
                                                'NoDevice' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'noDevice',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'MonitoringEnabled' => [
                                        'type' => 'boolean',
                                        'sentAs' => 'monitoringEnabled',
                                    ],
                                    'SubnetId' => [
                                        'type' => 'string',
                                        'sentAs' => 'subnetId',
                                    ],
                                    'NetworkInterfaces' => [
                                        'type' => 'array',
                                        'sentAs' => 'networkInterfaceSet',
                                        'items' => [
                                            'name' => 'item',
                                            'type' => 'object',
                                            'sentAs' => 'item',
                                            'properties' => [
                                                'NetworkInterfaceId' => [
                                                    'type' => 'string',
                                                    'sentAs' =>
                                                        'networkInterfaceId',
                                                ],
                                                'DeviceIndex' => [
                                                    'type' => 'numeric',
                                                    'sentAs' => 'deviceIndex',
                                                ],
                                                'SubnetId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'subnetId',
                                                ],
                                                'Description' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'description',
                                                ],
                                                'PrivateIpAddress' => [
                                                    'type' => 'string',
                                                    'sentAs' =>
                                                        'privateIpAddress',
                                                ],
                                                'Groups' => [
                                                    'type' => 'array',
                                                    'sentAs' =>
                                                        'SecurityGroupId',
                                                    'items' => [
                                                        'name' =>
                                                            'SecurityGroupId',
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'SecurityGroupId',
                                                    ],
                                                ],
                                                'DeleteOnTermination' => [
                                                    'type' => 'boolean',
                                                    'sentAs' =>
                                                        'deleteOnTermination',
                                                ],
                                                'PrivateIpAddresses' => [
                                                    'type' => 'array',
                                                    'sentAs' =>
                                                        'privateIpAddressesSet',
                                                    'items' => [
                                                        'name' => 'item',
                                                        'type' => 'object',
                                                        'sentAs' => 'item',
                                                        'properties' => [
                                                            'PrivateIpAddress' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'privateIpAddress',
                                                            ],
                                                            'Primary' => [
                                                                'type' =>
                                                                    'boolean',
                                                                'sentAs' =>
                                                                    'primary',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'SecondaryPrivateIpAddressCount' => [
                                                    'type' => 'numeric',
                                                    'sentAs' =>
                                                        'secondaryPrivateIpAddressCount',
                                                ],
                                                'AssociatePublicIpAddress' => [
                                                    'type' => 'boolean',
                                                    'sentAs' =>
                                                        'associatePublicIpAddress',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'IamInstanceProfile' => [
                                        'type' => 'object',
                                        'sentAs' => 'iamInstanceProfile',
                                        'properties' => [
                                            'Arn' => [
                                                'type' => 'string',
                                                'sentAs' => 'arn',
                                            ],
                                            'Name' => [
                                                'type' => 'string',
                                                'sentAs' => 'name',
                                            ],
                                        ],
                                    ],
                                    'EbsOptimized' => [
                                        'type' => 'boolean',
                                        'sentAs' => 'ebsOptimized',
                                    ],
                                ],
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'CreateTime' => [
                                'type' => 'string',
                                'sentAs' => 'createTime',
                            ],
                            'ProductDescription' => [
                                'type' => 'string',
                                'sentAs' => 'productDescription',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'LaunchedAvailabilityZone' => [
                                'type' => 'string',
                                'sentAs' => 'launchedAvailabilityZone',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RestoreAddressToClassicResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'status',
                ],
                'PublicIp' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'publicIp',
                ],
            ],
        ],
        'reservation' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ReservationId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'reservationId',
                ],
                'OwnerId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'ownerId',
                ],
                'RequesterId' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'requesterId',
                ],
                'Groups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'groupSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'GroupName' => [
                                'type' => 'string',
                                'sentAs' => 'groupName',
                            ],
                            'GroupId' => [
                                'type' => 'string',
                                'sentAs' => 'groupId',
                            ],
                        ],
                    ],
                ],
                'Instances' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'instancesSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'ImageId' => [
                                'type' => 'string',
                                'sentAs' => 'imageId',
                            ],
                            'State' => [
                                'type' => 'object',
                                'sentAs' => 'instanceState',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'code',
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                        'sentAs' => 'name',
                                    ],
                                ],
                            ],
                            'PrivateDnsName' => [
                                'type' => 'string',
                                'sentAs' => 'privateDnsName',
                            ],
                            'PublicDnsName' => [
                                'type' => 'string',
                                'sentAs' => 'dnsName',
                            ],
                            'StateTransitionReason' => [
                                'type' => 'string',
                                'sentAs' => 'reason',
                            ],
                            'KeyName' => [
                                'type' => 'string',
                                'sentAs' => 'keyName',
                            ],
                            'AmiLaunchIndex' => [
                                'type' => 'numeric',
                                'sentAs' => 'amiLaunchIndex',
                            ],
                            'ProductCodes' => [
                                'type' => 'array',
                                'sentAs' => 'productCodes',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'ProductCodeId' => [
                                            'type' => 'string',
                                            'sentAs' => 'productCode',
                                        ],
                                        'ProductCodeType' => [
                                            'type' => 'string',
                                            'sentAs' => 'type',
                                        ],
                                    ],
                                ],
                            ],
                            'InstanceType' => [
                                'type' => 'string',
                                'sentAs' => 'instanceType',
                            ],
                            'LaunchTime' => [
                                'type' => 'string',
                                'sentAs' => 'launchTime',
                            ],
                            'Placement' => [
                                'type' => 'object',
                                'sentAs' => 'placement',
                                'properties' => [
                                    'AvailabilityZone' => [
                                        'type' => 'string',
                                        'sentAs' => 'availabilityZone',
                                    ],
                                    'GroupName' => [
                                        'type' => 'string',
                                        'sentAs' => 'groupName',
                                    ],
                                    'Tenancy' => [
                                        'type' => 'string',
                                        'sentAs' => 'tenancy',
                                    ],
                                ],
                            ],
                            'KernelId' => [
                                'type' => 'string',
                                'sentAs' => 'kernelId',
                            ],
                            'RamdiskId' => [
                                'type' => 'string',
                                'sentAs' => 'ramdiskId',
                            ],
                            'Platform' => [
                                'type' => 'string',
                                'sentAs' => 'platform',
                            ],
                            'Monitoring' => [
                                'type' => 'object',
                                'sentAs' => 'monitoring',
                                'properties' => [
                                    'State' => [
                                        'type' => 'string',
                                        'sentAs' => 'state',
                                    ],
                                ],
                            ],
                            'SubnetId' => [
                                'type' => 'string',
                                'sentAs' => 'subnetId',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'sentAs' => 'vpcId',
                            ],
                            'PrivateIpAddress' => [
                                'type' => 'string',
                                'sentAs' => 'privateIpAddress',
                            ],
                            'PublicIpAddress' => [
                                'type' => 'string',
                                'sentAs' => 'ipAddress',
                            ],
                            'StateReason' => [
                                'type' => 'object',
                                'sentAs' => 'stateReason',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'string',
                                        'sentAs' => 'code',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                        'sentAs' => 'message',
                                    ],
                                ],
                            ],
                            'Architecture' => [
                                'type' => 'string',
                                'sentAs' => 'architecture',
                            ],
                            'RootDeviceType' => [
                                'type' => 'string',
                                'sentAs' => 'rootDeviceType',
                            ],
                            'RootDeviceName' => [
                                'type' => 'string',
                                'sentAs' => 'rootDeviceName',
                            ],
                            'BlockDeviceMappings' => [
                                'type' => 'array',
                                'sentAs' => 'blockDeviceMapping',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'DeviceName' => [
                                            'type' => 'string',
                                            'sentAs' => 'deviceName',
                                        ],
                                        'Ebs' => [
                                            'type' => 'object',
                                            'sentAs' => 'ebs',
                                            'properties' => [
                                                'VolumeId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'volumeId',
                                                ],
                                                'Status' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'status',
                                                ],
                                                'AttachTime' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'attachTime',
                                                ],
                                                'DeleteOnTermination' => [
                                                    'type' => 'boolean',
                                                    'sentAs' =>
                                                        'deleteOnTermination',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'VirtualizationType' => [
                                'type' => 'string',
                                'sentAs' => 'virtualizationType',
                            ],
                            'InstanceLifecycle' => [
                                'type' => 'string',
                                'sentAs' => 'instanceLifecycle',
                            ],
                            'SpotInstanceRequestId' => [
                                'type' => 'string',
                                'sentAs' => 'spotInstanceRequestId',
                            ],
                            'ClientToken' => [
                                'type' => 'string',
                                'sentAs' => 'clientToken',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'sentAs' => 'tagSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'sentAs' => 'key',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'sentAs' => 'value',
                                        ],
                                    ],
                                ],
                            ],
                            'SecurityGroups' => [
                                'type' => 'array',
                                'sentAs' => 'groupSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'GroupName' => [
                                            'type' => 'string',
                                            'sentAs' => 'groupName',
                                        ],
                                        'GroupId' => [
                                            'type' => 'string',
                                            'sentAs' => 'groupId',
                                        ],
                                    ],
                                ],
                            ],
                            'SourceDestCheck' => [
                                'type' => 'boolean',
                                'sentAs' => 'sourceDestCheck',
                            ],
                            'Hypervisor' => [
                                'type' => 'string',
                                'sentAs' => 'hypervisor',
                            ],
                            'NetworkInterfaces' => [
                                'type' => 'array',
                                'sentAs' => 'networkInterfaceSet',
                                'items' => [
                                    'name' => 'item',
                                    'type' => 'object',
                                    'sentAs' => 'item',
                                    'properties' => [
                                        'NetworkInterfaceId' => [
                                            'type' => 'string',
                                            'sentAs' => 'networkInterfaceId',
                                        ],
                                        'SubnetId' => [
                                            'type' => 'string',
                                            'sentAs' => 'subnetId',
                                        ],
                                        'VpcId' => [
                                            'type' => 'string',
                                            'sentAs' => 'vpcId',
                                        ],
                                        'Description' => [
                                            'type' => 'string',
                                            'sentAs' => 'description',
                                        ],
                                        'OwnerId' => [
                                            'type' => 'string',
                                            'sentAs' => 'ownerId',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                            'sentAs' => 'status',
                                        ],
                                        'MacAddress' => [
                                            'type' => 'string',
                                            'sentAs' => 'macAddress',
                                        ],
                                        'PrivateIpAddress' => [
                                            'type' => 'string',
                                            'sentAs' => 'privateIpAddress',
                                        ],
                                        'PrivateDnsName' => [
                                            'type' => 'string',
                                            'sentAs' => 'privateDnsName',
                                        ],
                                        'SourceDestCheck' => [
                                            'type' => 'boolean',
                                            'sentAs' => 'sourceDestCheck',
                                        ],
                                        'Groups' => [
                                            'type' => 'array',
                                            'sentAs' => 'groupSet',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'object',
                                                'sentAs' => 'item',
                                                'properties' => [
                                                    'GroupName' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'groupName',
                                                    ],
                                                    'GroupId' => [
                                                        'type' => 'string',
                                                        'sentAs' => 'groupId',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Attachment' => [
                                            'type' => 'object',
                                            'sentAs' => 'attachment',
                                            'properties' => [
                                                'AttachmentId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'attachmentId',
                                                ],
                                                'DeviceIndex' => [
                                                    'type' => 'numeric',
                                                    'sentAs' => 'deviceIndex',
                                                ],
                                                'Status' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'status',
                                                ],
                                                'AttachTime' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'attachTime',
                                                ],
                                                'DeleteOnTermination' => [
                                                    'type' => 'boolean',
                                                    'sentAs' =>
                                                        'deleteOnTermination',
                                                ],
                                            ],
                                        ],
                                        'Association' => [
                                            'type' => 'object',
                                            'sentAs' => 'association',
                                            'properties' => [
                                                'PublicIp' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'publicIp',
                                                ],
                                                'PublicDnsName' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'publicDnsName',
                                                ],
                                                'IpOwnerId' => [
                                                    'type' => 'string',
                                                    'sentAs' => 'ipOwnerId',
                                                ],
                                            ],
                                        ],
                                        'PrivateIpAddresses' => [
                                            'type' => 'array',
                                            'sentAs' => 'privateIpAddressesSet',
                                            'items' => [
                                                'name' => 'item',
                                                'type' => 'object',
                                                'sentAs' => 'item',
                                                'properties' => [
                                                    'PrivateIpAddress' => [
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'privateIpAddress',
                                                    ],
                                                    'PrivateDnsName' => [
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'privateDnsName',
                                                    ],
                                                    'Primary' => [
                                                        'type' => 'boolean',
                                                        'sentAs' => 'primary',
                                                    ],
                                                    'Association' => [
                                                        'type' => 'object',
                                                        'sentAs' =>
                                                            'association',
                                                        'properties' => [
                                                            'PublicIp' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'publicIp',
                                                            ],
                                                            'PublicDnsName' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'publicDnsName',
                                                            ],
                                                            'IpOwnerId' => [
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'ipOwnerId',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'IamInstanceProfile' => [
                                'type' => 'object',
                                'sentAs' => 'iamInstanceProfile',
                                'properties' => [
                                    'Arn' => [
                                        'type' => 'string',
                                        'sentAs' => 'arn',
                                    ],
                                    'Id' => [
                                        'type' => 'string',
                                        'sentAs' => 'id',
                                    ],
                                ],
                            ],
                            'EbsOptimized' => [
                                'type' => 'boolean',
                                'sentAs' => 'ebsOptimized',
                            ],
                            'SriovNetSupport' => [
                                'type' => 'string',
                                'sentAs' => 'sriovNetSupport',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartInstancesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StartingInstances' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'instancesSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'CurrentState' => [
                                'type' => 'object',
                                'sentAs' => 'currentState',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'code',
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                        'sentAs' => 'name',
                                    ],
                                ],
                            ],
                            'PreviousState' => [
                                'type' => 'object',
                                'sentAs' => 'previousState',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'code',
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                        'sentAs' => 'name',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StopInstancesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StoppingInstances' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'instancesSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'CurrentState' => [
                                'type' => 'object',
                                'sentAs' => 'currentState',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'code',
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                        'sentAs' => 'name',
                                    ],
                                ],
                            ],
                            'PreviousState' => [
                                'type' => 'object',
                                'sentAs' => 'previousState',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'code',
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                        'sentAs' => 'name',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'TerminateInstancesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TerminatingInstances' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'instancesSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'CurrentState' => [
                                'type' => 'object',
                                'sentAs' => 'currentState',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'code',
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                        'sentAs' => 'name',
                                    ],
                                ],
                            ],
                            'PreviousState' => [
                                'type' => 'object',
                                'sentAs' => 'previousState',
                                'properties' => [
                                    'Code' => [
                                        'type' => 'numeric',
                                        'sentAs' => 'code',
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                        'sentAs' => 'name',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UnmonitorInstancesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceMonitorings' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'instancesSet',
                    'items' => [
                        'name' => 'item',
                        'type' => 'object',
                        'sentAs' => 'item',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                                'sentAs' => 'instanceId',
                            ],
                            'Monitoring' => [
                                'type' => 'object',
                                'sentAs' => 'monitoring',
                                'properties' => [
                                    'State' => [
                                        'type' => 'string',
                                        'sentAs' => 'state',
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
        'DescribeAccountAttributes' => [
            'result_key' => 'AccountAttributes',
        ],
        'DescribeAddresses' => [
            'result_key' => 'Addresses',
        ],
        'DescribeAvailabilityZones' => [
            'result_key' => 'AvailabilityZones',
        ],
        'DescribeBundleTasks' => [
            'result_key' => 'BundleTasks',
        ],
        'DescribeConversionTasks' => [
            'result_key' => 'ConversionTasks',
        ],
        'DescribeCustomerGateways' => [
            'result_key' => 'CustomerGateways',
        ],
        'DescribeDhcpOptions' => [
            'result_key' => 'DhcpOptions',
        ],
        'DescribeExportTasks' => [
            'result_key' => 'ExportTasks',
        ],
        'DescribeImages' => [
            'result_key' => 'Images',
        ],
        'DescribeInstanceStatus' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxResults',
            'result_key' => 'InstanceStatuses',
        ],
        'DescribeInstances' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxResults',
            'result_key' => 'Reservations',
        ],
        'DescribeInternetGateways' => [
            'result_key' => 'InternetGateways',
        ],
        'DescribeKeyPairs' => [
            'result_key' => 'KeyPairs',
        ],
        'DescribeNetworkAcls' => [
            'result_key' => 'NetworkAcls',
        ],
        'DescribeNetworkInterfaces' => [
            'result_key' => 'NetworkInterfaces',
        ],
        'DescribePlacementGroups' => [
            'result_key' => 'PlacementGroups',
        ],
        'DescribeRegions' => [
            'result_key' => 'Regions',
        ],
        'DescribeReservedInstances' => [
            'result_key' => 'ReservedInstances',
        ],
        'DescribeReservedInstancesListings' => [
            'result_key' => 'ReservedInstancesListings',
        ],
        'DescribeReservedInstancesOfferings' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxResults',
            'result_key' => 'ReservedInstancesOfferings',
        ],
        'DescribeReservedInstancesModifications' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'ReservedInstancesModifications',
        ],
        'DescribeRouteTables' => [
            'result_key' => 'RouteTables',
        ],
        'DescribeSecurityGroups' => [
            'result_key' => 'SecurityGroups',
        ],
        'DescribeSnapshots' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'Snapshots',
        ],
        'DescribeSpotInstanceRequests' => [
            'result_key' => 'SpotInstanceRequests',
        ],
        'DescribeSpotPriceHistory' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxResults',
            'result_key' => 'SpotPriceHistory',
        ],
        'DescribeSubnets' => [
            'result_key' => 'Subnets',
        ],
        'DescribeTags' => [
            'result_key' => 'Tags',
        ],
        'DescribeVolumeStatus' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxResults',
            'result_key' => 'VolumeStatuses',
        ],
        'DescribeVolumes' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxResults',
            'result_key' => 'Volumes',
        ],
        'DescribeVpcs' => [
            'result_key' => 'Vpcs',
        ],
        'DescribeVpnConnections' => [
            'result_key' => 'VpnConnections',
        ],
        'DescribeVpnGateways' => [
            'result_key' => 'VpnGateways',
        ],
    ],
    'waiters' => [
        '__default__' => [
            'interval' => 15,
            'max_attempts' => 40,
            'acceptor.type' => 'output',
        ],
        '__InstanceState' => [
            'operation' => 'DescribeInstances',
            'acceptor.path' => 'Reservations/*/Instances/*/State/Name',
        ],
        'InstanceRunning' => [
            'extends' => '__InstanceState',
            'success.value' => 'running',
            'failure.value' => ['shutting-down', 'terminated', 'stopping'],
        ],
        'InstanceStopped' => [
            'extends' => '__InstanceState',
            'success.value' => 'stopped',
            'failure.value' => ['pending', 'terminated'],
        ],
        'InstanceTerminated' => [
            'extends' => '__InstanceState',
            'success.value' => 'terminated',
            'failure.value' => ['pending', 'stopping'],
        ],
        '__ExportTaskState' => [
            'operation' => 'DescribeExportTasks',
            'acceptor.path' => 'ExportTasks/*/State',
        ],
        'ExportTaskCompleted' => [
            'extends' => '__ExportTaskState',
            'success.value' => 'completed',
        ],
        'ExportTaskCancelled' => [
            'extends' => '__ExportTaskState',
            'success.value' => 'cancelled',
        ],
        'SnapshotCompleted' => [
            'operation' => 'DescribeSnapshots',
            'success.path' => 'Snapshots/*/State',
            'success.value' => 'completed',
        ],
        'SubnetAvailable' => [
            'operation' => 'DescribeSubnets',
            'success.path' => 'Subnets/*/State',
            'success.value' => 'available',
        ],
        '__VolumeStatus' => [
            'operation' => 'DescribeVolumes',
            'acceptor.key' => 'VolumeStatuses/*/VolumeStatus/Status',
        ],
        'VolumeAvailable' => [
            'extends' => '__VolumeStatus',
            'success.value' => 'available',
            'failure.value' => ['deleted'],
        ],
        'VolumeInUse' => [
            'extends' => '__VolumeStatus',
            'success.value' => 'in-use',
            'failure.value' => ['deleted'],
        ],
        'VolumeDeleted' => [
            'extends' => '__VolumeStatus',
            'success.value' => 'deleted',
        ],
        'VpcAvailable' => [
            'operation' => 'DescribeVpcs',
            'success.path' => 'Vpcs/*/State',
            'success.value' => 'available',
        ],
        '__VpnConnectionState' => [
            'operation' => 'DescribeVpnConnections',
            'acceptor.path' => 'VpnConnections/*/State',
        ],
        'VpnConnectionAvailable' => [
            'extends' => '__VpnConnectionState',
            'success.value' => 'available',
            'failure.value' => ['deleting', 'deleted'],
        ],
        'VpnConnectionDeleted' => [
            'extends' => '__VpnConnectionState',
            'success.value' => 'deleted',
            'failure.value' => ['pending'],
        ],
        'BundleTaskComplete' => [
            'operation' => 'DescribeBundleTasks',
            'acceptor.path' => 'BundleTasks/*/State',
            'success.value' => 'complete',
            'failure.value' => ['failed'],
        ],
        '__ConversionTaskState' => [
            'operation' => 'DescribeConversionTasks',
            'acceptor.path' => 'ConversionTasks/*/State',
        ],
        'ConversionTaskCompleted' => [
            'extends' => '__ConversionTaskState',
            'success.value' => 'completed',
            'failure.value' => ['cancelled', 'cancelling'],
        ],
        'ConversionTaskCancelled' => [
            'extends' => '__ConversionTaskState',
            'success.value' => 'cancelled',
        ],
        '__CustomerGatewayState' => [
            'operation' => 'DescribeCustomerGateways',
            'acceptor.path' => 'CustomerGateways/*/State',
        ],
        'CustomerGatewayAvailable' => [
            'extends' => '__CustomerGatewayState',
            'success.value' => 'available',
            'failure.value' => ['deleted', 'deleting'],
        ],
        'ConversionTaskDeleted' => [
            'extends' => '__CustomerGatewayState',
            'success.value' => 'deleted',
        ],
    ],
];
