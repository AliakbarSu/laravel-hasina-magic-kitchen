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
    'apiVersion' => '2013-02-18',
    'endpointPrefix' => 'opsworks',
    'serviceFullName' => 'AWS OpsWorks',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'OpsWorks_20130218.',
    'signatureVersion' => 'v4',
    'namespace' => 'OpsWorks',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'opsworks.us-east-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'AssignInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.AssignInstance',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LayerIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'AssignVolume' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.AssignVolume',
                ],
                'VolumeId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'AssociateElasticIp' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.AssociateElasticIp',
                ],
                'ElasticIp' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'AttachElasticLoadBalancer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.AttachElasticLoadBalancer',
                ],
                'ElasticLoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LayerId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'CloneStack' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CloneStackResult',
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
                    'default' => 'OpsWorks_20130218.CloneStack',
                ],
                'SourceStackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Region' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'VpcId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Attributes' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'StackAttributesKeys',
                        ],
                    ],
                ],
                'ServiceRoleArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultInstanceProfileArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultOs' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'HostnameTheme' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultAvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultSubnetId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CustomJson' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ConfigurationManager' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Version' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'ChefConfiguration' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'ManageBerkshelf' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'BerkshelfVersion' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'UseCustomCookbooks' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'UseOpsworksSecurityGroups' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'CustomCookbooksSource' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Type' => [
                            'type' => 'string',
                        ],
                        'Url' => [
                            'type' => 'string',
                        ],
                        'Username' => [
                            'type' => 'string',
                        ],
                        'Password' => [
                            'type' => 'string',
                        ],
                        'SshKey' => [
                            'type' => 'string',
                        ],
                        'Revision' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'DefaultSshKeyName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ClonePermissions' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'CloneAppIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'DefaultRootDeviceType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AgentVersion' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'CreateApp' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateAppResult',
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
                    'default' => 'OpsWorks_20130218.CreateApp',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Shortname' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DataSources' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DataSource',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Type' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AppSource' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Type' => [
                            'type' => 'string',
                        ],
                        'Url' => [
                            'type' => 'string',
                        ],
                        'Username' => [
                            'type' => 'string',
                        ],
                        'Password' => [
                            'type' => 'string',
                        ],
                        'SshKey' => [
                            'type' => 'string',
                        ],
                        'Revision' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Domains' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'EnableSsl' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'SslConfiguration' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Certificate' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'PrivateKey' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'Chain' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Attributes' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'AppAttributesKeys',
                        ],
                    ],
                ],
                'Environment' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'EnvironmentVariable',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Value' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Secure' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'CreateDeployment' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateDeploymentResult',
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
                    'default' => 'OpsWorks_20130218.CreateDeployment',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AppId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'Command' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Name' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'Args' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'array',
                                'data' => [
                                    'shape_name' => 'String',
                                ],
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'Comment' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CustomJson' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'CreateInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateInstanceResult',
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
                    'default' => 'OpsWorks_20130218.CreateInstance',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LayerIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'InstanceType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AutoScalingType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Hostname' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Os' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AmiId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SshKeyName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'VirtualizationType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SubnetId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Architecture' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RootDeviceType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'BlockDeviceMappings' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'BlockDeviceMapping',
                        'type' => 'object',
                        'properties' => [
                            'DeviceName' => [
                                'type' => 'string',
                            ],
                            'NoDevice' => [
                                'type' => 'string',
                            ],
                            'VirtualName' => [
                                'type' => 'string',
                            ],
                            'Ebs' => [
                                'type' => 'object',
                                'properties' => [
                                    'SnapshotId' => [
                                        'type' => 'string',
                                    ],
                                    'Iops' => [
                                        'type' => 'numeric',
                                    ],
                                    'VolumeSize' => [
                                        'type' => 'numeric',
                                    ],
                                    'VolumeType' => [
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
                ],
                'InstallUpdatesOnBoot' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'EbsOptimized' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'AgentVersion' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'CreateLayer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateLayerResult',
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
                    'default' => 'OpsWorks_20130218.CreateLayer',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Type' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Shortname' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Attributes' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'LayerAttributesKeys',
                        ],
                    ],
                ],
                'CustomInstanceProfileArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CustomJson' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CustomSecurityGroupIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'Packages' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'VolumeConfigurations' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'VolumeConfiguration',
                        'type' => 'object',
                        'properties' => [
                            'MountPoint' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'RaidLevel' => [
                                'type' => 'numeric',
                            ],
                            'NumberOfDisks' => [
                                'required' => true,
                                'type' => 'numeric',
                            ],
                            'Size' => [
                                'required' => true,
                                'type' => 'numeric',
                            ],
                            'VolumeType' => [
                                'type' => 'string',
                            ],
                            'Iops' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'EnableAutoHealing' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'AutoAssignElasticIps' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'AutoAssignPublicIps' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'CustomRecipes' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Setup' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'String',
                                'type' => 'string',
                            ],
                        ],
                        'Configure' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'String',
                                'type' => 'string',
                            ],
                        ],
                        'Deploy' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'String',
                                'type' => 'string',
                            ],
                        ],
                        'Undeploy' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'String',
                                'type' => 'string',
                            ],
                        ],
                        'Shutdown' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'String',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'InstallUpdatesOnBoot' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'UseEbsOptimizedInstances' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'LifecycleEventConfiguration' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Shutdown' => [
                            'type' => 'object',
                            'properties' => [
                                'ExecutionTimeout' => [
                                    'type' => 'numeric',
                                ],
                                'DelayUntilElbConnectionsDrained' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'CreateStack' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateStackResult',
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
                    'default' => 'OpsWorks_20130218.CreateStack',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Region' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'VpcId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Attributes' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'StackAttributesKeys',
                        ],
                    ],
                ],
                'ServiceRoleArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultInstanceProfileArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultOs' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'HostnameTheme' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultAvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultSubnetId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CustomJson' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ConfigurationManager' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Version' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'ChefConfiguration' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'ManageBerkshelf' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'BerkshelfVersion' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'UseCustomCookbooks' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'UseOpsworksSecurityGroups' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'CustomCookbooksSource' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Type' => [
                            'type' => 'string',
                        ],
                        'Url' => [
                            'type' => 'string',
                        ],
                        'Username' => [
                            'type' => 'string',
                        ],
                        'Password' => [
                            'type' => 'string',
                        ],
                        'SshKey' => [
                            'type' => 'string',
                        ],
                        'Revision' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'DefaultSshKeyName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultRootDeviceType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AgentVersion' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
            ],
        ],
        'CreateUserProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateUserProfileResult',
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
                    'default' => 'OpsWorks_20130218.CreateUserProfile',
                ],
                'IamUserArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SshUsername' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SshPublicKey' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AllowSelfManagement' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
            ],
        ],
        'DeleteApp' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.DeleteApp',
                ],
                'AppId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DeleteInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.DeleteInstance',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DeleteElasticIp' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'DeleteVolumes' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DeleteLayer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.DeleteLayer',
                ],
                'LayerId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DeleteStack' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.DeleteStack',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DeleteUserProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.DeleteUserProfile',
                ],
                'IamUserArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DeregisterEcsCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.DeregisterEcsCluster',
                ],
                'EcsClusterArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DeregisterElasticIp' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.DeregisterElasticIp',
                ],
                'ElasticIp' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DeregisterInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.DeregisterInstance',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DeregisterRdsDbInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.DeregisterRdsDbInstance',
                ],
                'RdsDbInstanceArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DeregisterVolume' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.DeregisterVolume',
                ],
                'VolumeId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeAgentVersions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeAgentVersionsResult',
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
                    'default' => 'OpsWorks_20130218.DescribeAgentVersions',
                ],
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ConfigurationManager' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Version' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeApps' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeAppsResult',
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
                    'default' => 'OpsWorks_20130218.DescribeApps',
                ],
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AppIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeCommands' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeCommandsResult',
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
                    'default' => 'OpsWorks_20130218.DescribeCommands',
                ],
                'DeploymentId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CommandIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeDeployments' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeDeploymentsResult',
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
                    'default' => 'OpsWorks_20130218.DescribeDeployments',
                ],
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AppId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DeploymentIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeEcsClusters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeEcsClustersResult',
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
                    'default' => 'OpsWorks_20130218.DescribeEcsClusters',
                ],
                'EcsClusterArns' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeElasticIps' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeElasticIpsResult',
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
                    'default' => 'OpsWorks_20130218.DescribeElasticIps',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Ips' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeElasticLoadBalancers' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeElasticLoadBalancersResult',
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
                        'OpsWorks_20130218.DescribeElasticLoadBalancers',
                ],
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LayerIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeInstancesResult',
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
                    'default' => 'OpsWorks_20130218.DescribeInstances',
                ],
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LayerId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeLayers' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeLayersResult',
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
                    'default' => 'OpsWorks_20130218.DescribeLayers',
                ],
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LayerIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeLoadBasedAutoScaling' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeLoadBasedAutoScalingResult',
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
                        'OpsWorks_20130218.DescribeLoadBasedAutoScaling',
                ],
                'LayerIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeMyUserProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeMyUserProfileResult',
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
                    'default' => 'OpsWorks_20130218.DescribeMyUserProfile',
                ],
            ],
        ],
        'DescribePermissions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribePermissionsResult',
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
                    'default' => 'OpsWorks_20130218.DescribePermissions',
                ],
                'IamUserArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeRaidArrays' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeRaidArraysResult',
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
                    'default' => 'OpsWorks_20130218.DescribeRaidArrays',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RaidArrayIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeRdsDbInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeRdsDbInstancesResult',
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
                    'default' => 'OpsWorks_20130218.DescribeRdsDbInstances',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RdsDbInstanceArns' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeServiceErrors' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeServiceErrorsResult',
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
                    'default' => 'OpsWorks_20130218.DescribeServiceErrors',
                ],
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ServiceErrorIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeStackProvisioningParameters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeStackProvisioningParametersResult',
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
                        'OpsWorks_20130218.DescribeStackProvisioningParameters',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeStackSummary' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeStackSummaryResult',
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
                    'default' => 'OpsWorks_20130218.DescribeStackSummary',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeStacks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeStacksResult',
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
                    'default' => 'OpsWorks_20130218.DescribeStacks',
                ],
                'StackIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeTimeBasedAutoScaling' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeTimeBasedAutoScalingResult',
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
                        'OpsWorks_20130218.DescribeTimeBasedAutoScaling',
                ],
                'InstanceIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeUserProfiles' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeUserProfilesResult',
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
                    'default' => 'OpsWorks_20130218.DescribeUserProfiles',
                ],
                'IamUserArns' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeVolumes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeVolumesResult',
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
                    'default' => 'OpsWorks_20130218.DescribeVolumes',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RaidArrayId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'VolumeIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DetachElasticLoadBalancer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.DetachElasticLoadBalancer',
                ],
                'ElasticLoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LayerId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DisassociateElasticIp' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.DisassociateElasticIp',
                ],
                'ElasticIp' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'GetHostnameSuggestion' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetHostnameSuggestionResult',
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
                    'default' => 'OpsWorks_20130218.GetHostnameSuggestion',
                ],
                'LayerId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'GrantAccess' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GrantAccessResult',
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
                    'default' => 'OpsWorks_20130218.GrantAccess',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ValidForInMinutes' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 60,
                    'maximum' => 1440,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'RebootInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.RebootInstance',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'RegisterEcsCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RegisterEcsClusterResult',
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
                    'default' => 'OpsWorks_20130218.RegisterEcsCluster',
                ],
                'EcsClusterArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'RegisterElasticIp' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RegisterElasticIpResult',
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
                    'default' => 'OpsWorks_20130218.RegisterElasticIp',
                ],
                'ElasticIp' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'RegisterInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RegisterInstanceResult',
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
                    'default' => 'OpsWorks_20130218.RegisterInstance',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Hostname' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'PublicIp' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'PrivateIp' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RsaPublicKey' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RsaPublicKeyFingerprint' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceIdentity' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Document' => [
                            'type' => 'string',
                        ],
                        'Signature' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'RegisterRdsDbInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.RegisterRdsDbInstance',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RdsDbInstanceArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DbUser' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DbPassword' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'RegisterVolume' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RegisterVolumeResult',
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
                    'default' => 'OpsWorks_20130218.RegisterVolume',
                ],
                'Ec2VolumeId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'SetLoadBasedAutoScaling' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.SetLoadBasedAutoScaling',
                ],
                'LayerId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Enable' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'UpScaling' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'InstanceCount' => [
                            'type' => 'numeric',
                        ],
                        'ThresholdsWaitTime' => [
                            'type' => 'numeric',
                            'minimum' => 1,
                            'maximum' => 100,
                        ],
                        'IgnoreMetricsTime' => [
                            'type' => 'numeric',
                            'minimum' => 1,
                            'maximum' => 100,
                        ],
                        'CpuThreshold' => [
                            'type' => 'numeric',
                        ],
                        'MemoryThreshold' => [
                            'type' => 'numeric',
                        ],
                        'LoadThreshold' => [
                            'type' => 'numeric',
                        ],
                        'Alarms' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'String',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'DownScaling' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'InstanceCount' => [
                            'type' => 'numeric',
                        ],
                        'ThresholdsWaitTime' => [
                            'type' => 'numeric',
                            'minimum' => 1,
                            'maximum' => 100,
                        ],
                        'IgnoreMetricsTime' => [
                            'type' => 'numeric',
                            'minimum' => 1,
                            'maximum' => 100,
                        ],
                        'CpuThreshold' => [
                            'type' => 'numeric',
                        ],
                        'MemoryThreshold' => [
                            'type' => 'numeric',
                        ],
                        'LoadThreshold' => [
                            'type' => 'numeric',
                        ],
                        'Alarms' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'String',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'SetPermission' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.SetPermission',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IamUserArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AllowSsh' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'AllowSudo' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'Level' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'SetTimeBasedAutoScaling' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.SetTimeBasedAutoScaling',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AutoScalingSchedule' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Monday' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                                'data' => [
                                    'shape_name' => 'Hour',
                                ],
                            ],
                        ],
                        'Tuesday' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                                'data' => [
                                    'shape_name' => 'Hour',
                                ],
                            ],
                        ],
                        'Wednesday' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                                'data' => [
                                    'shape_name' => 'Hour',
                                ],
                            ],
                        ],
                        'Thursday' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                                'data' => [
                                    'shape_name' => 'Hour',
                                ],
                            ],
                        ],
                        'Friday' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                                'data' => [
                                    'shape_name' => 'Hour',
                                ],
                            ],
                        ],
                        'Saturday' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                                'data' => [
                                    'shape_name' => 'Hour',
                                ],
                            ],
                        ],
                        'Sunday' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                                'data' => [
                                    'shape_name' => 'Hour',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'StartInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.StartInstance',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'StartStack' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.StartStack',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'StopInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.StopInstance',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'StopStack' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.StopStack',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UnassignInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.UnassignInstance',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UnassignVolume' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.UnassignVolume',
                ],
                'VolumeId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UpdateApp' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.UpdateApp',
                ],
                'AppId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DataSources' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DataSource',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Type' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AppSource' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Type' => [
                            'type' => 'string',
                        ],
                        'Url' => [
                            'type' => 'string',
                        ],
                        'Username' => [
                            'type' => 'string',
                        ],
                        'Password' => [
                            'type' => 'string',
                        ],
                        'SshKey' => [
                            'type' => 'string',
                        ],
                        'Revision' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Domains' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'EnableSsl' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'SslConfiguration' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Certificate' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'PrivateKey' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'Chain' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Attributes' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'AppAttributesKeys',
                        ],
                    ],
                ],
                'Environment' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'EnvironmentVariable',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Value' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Secure' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UpdateElasticIp' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.UpdateElasticIp',
                ],
                'ElasticIp' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UpdateInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.UpdateInstance',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LayerIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'InstanceType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AutoScalingType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Hostname' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Os' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AmiId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SshKeyName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Architecture' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstallUpdatesOnBoot' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'EbsOptimized' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'AgentVersion' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UpdateLayer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.UpdateLayer',
                ],
                'LayerId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Shortname' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Attributes' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'LayerAttributesKeys',
                        ],
                    ],
                ],
                'CustomInstanceProfileArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CustomJson' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CustomSecurityGroupIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'Packages' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'VolumeConfigurations' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'VolumeConfiguration',
                        'type' => 'object',
                        'properties' => [
                            'MountPoint' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'RaidLevel' => [
                                'type' => 'numeric',
                            ],
                            'NumberOfDisks' => [
                                'required' => true,
                                'type' => 'numeric',
                            ],
                            'Size' => [
                                'required' => true,
                                'type' => 'numeric',
                            ],
                            'VolumeType' => [
                                'type' => 'string',
                            ],
                            'Iops' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'EnableAutoHealing' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'AutoAssignElasticIps' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'AutoAssignPublicIps' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'CustomRecipes' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Setup' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'String',
                                'type' => 'string',
                            ],
                        ],
                        'Configure' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'String',
                                'type' => 'string',
                            ],
                        ],
                        'Deploy' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'String',
                                'type' => 'string',
                            ],
                        ],
                        'Undeploy' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'String',
                                'type' => 'string',
                            ],
                        ],
                        'Shutdown' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'String',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'InstallUpdatesOnBoot' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'UseEbsOptimizedInstances' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'LifecycleEventConfiguration' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Shutdown' => [
                            'type' => 'object',
                            'properties' => [
                                'ExecutionTimeout' => [
                                    'type' => 'numeric',
                                ],
                                'DelayUntilElbConnectionsDrained' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UpdateMyUserProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.UpdateMyUserProfile',
                ],
                'SshPublicKey' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
            ],
        ],
        'UpdateRdsDbInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.UpdateRdsDbInstance',
                ],
                'RdsDbInstanceArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DbUser' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DbPassword' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UpdateStack' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.UpdateStack',
                ],
                'StackId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Attributes' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'StackAttributesKeys',
                        ],
                    ],
                ],
                'ServiceRoleArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultInstanceProfileArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultOs' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'HostnameTheme' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultAvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultSubnetId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CustomJson' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ConfigurationManager' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Version' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'ChefConfiguration' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'ManageBerkshelf' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'BerkshelfVersion' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'UseCustomCookbooks' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'CustomCookbooksSource' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Type' => [
                            'type' => 'string',
                        ],
                        'Url' => [
                            'type' => 'string',
                        ],
                        'Username' => [
                            'type' => 'string',
                        ],
                        'Password' => [
                            'type' => 'string',
                        ],
                        'SshKey' => [
                            'type' => 'string',
                        ],
                        'Revision' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'DefaultSshKeyName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DefaultRootDeviceType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'UseOpsworksSecurityGroups' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'AgentVersion' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UpdateUserProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.UpdateUserProfile',
                ],
                'IamUserArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SshUsername' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SshPublicKey' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AllowSelfManagement' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UpdateVolume' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => 'OpsWorks_20130218.UpdateVolume',
                ],
                'VolumeId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MountPoint' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Indicates that a request was invalid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'Indicates that a resource was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'CloneStackResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateAppResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AppId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateDeploymentResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DeploymentId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateInstanceResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateLayerResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LayerId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateStackResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StackId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateUserProfileResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IamUserArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DescribeAgentVersionsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AgentVersions' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'AgentVersion',
                        'type' => 'object',
                        'properties' => [
                            'Version' => [
                                'type' => 'string',
                            ],
                            'ConfigurationManager' => [
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
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
        'DescribeAppsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Apps' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'App',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'type' => 'string',
                            ],
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'Shortname' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'DataSources' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'DataSource',
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'type' => 'string',
                                        ],
                                        'Arn' => [
                                            'type' => 'string',
                                        ],
                                        'DatabaseName' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'Type' => [
                                'type' => 'string',
                            ],
                            'AppSource' => [
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'type' => 'string',
                                    ],
                                    'Url' => [
                                        'type' => 'string',
                                    ],
                                    'Username' => [
                                        'type' => 'string',
                                    ],
                                    'Password' => [
                                        'type' => 'string',
                                    ],
                                    'SshKey' => [
                                        'type' => 'string',
                                    ],
                                    'Revision' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Domains' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'EnableSsl' => [
                                'type' => 'boolean',
                            ],
                            'SslConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Certificate' => [
                                        'type' => 'string',
                                    ],
                                    'PrivateKey' => [
                                        'type' => 'string',
                                    ],
                                    'Chain' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Attributes' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'CreatedAt' => [
                                'type' => 'string',
                            ],
                            'Environment' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'EnvironmentVariable',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                        ],
                                        'Secure' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeCommandsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Commands' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Command',
                        'type' => 'object',
                        'properties' => [
                            'CommandId' => [
                                'type' => 'string',
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                            'DeploymentId' => [
                                'type' => 'string',
                            ],
                            'CreatedAt' => [
                                'type' => 'string',
                            ],
                            'AcknowledgedAt' => [
                                'type' => 'string',
                            ],
                            'CompletedAt' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'ExitCode' => [
                                'type' => 'numeric',
                            ],
                            'LogUrl' => [
                                'type' => 'string',
                            ],
                            'Type' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeDeploymentsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Deployments' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Deployment',
                        'type' => 'object',
                        'properties' => [
                            'DeploymentId' => [
                                'type' => 'string',
                            ],
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'AppId' => [
                                'type' => 'string',
                            ],
                            'CreatedAt' => [
                                'type' => 'string',
                            ],
                            'CompletedAt' => [
                                'type' => 'string',
                            ],
                            'Duration' => [
                                'type' => 'numeric',
                            ],
                            'IamUserArn' => [
                                'type' => 'string',
                            ],
                            'Comment' => [
                                'type' => 'string',
                            ],
                            'Command' => [
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Args' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'String',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'CustomJson' => [
                                'type' => 'string',
                            ],
                            'InstanceIds' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeEcsClustersResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EcsClusters' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'EcsCluster',
                        'type' => 'object',
                        'properties' => [
                            'EcsClusterArn' => [
                                'type' => 'string',
                            ],
                            'EcsClusterName' => [
                                'type' => 'string',
                            ],
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'RegisteredAt' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DescribeElasticIpsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ElasticIps' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ElasticIp',
                        'type' => 'object',
                        'properties' => [
                            'Ip' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Domain' => [
                                'type' => 'string',
                            ],
                            'Region' => [
                                'type' => 'string',
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeElasticLoadBalancersResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ElasticLoadBalancers' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ElasticLoadBalancer',
                        'type' => 'object',
                        'properties' => [
                            'ElasticLoadBalancerName' => [
                                'type' => 'string',
                            ],
                            'Region' => [
                                'type' => 'string',
                            ],
                            'DnsName' => [
                                'type' => 'string',
                            ],
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'LayerId' => [
                                'type' => 'string',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                            ],
                            'AvailabilityZones' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'SubnetIds' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'Ec2InstanceIds' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeInstancesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Instances' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Instance',
                        'type' => 'object',
                        'properties' => [
                            'AgentVersion' => [
                                'type' => 'string',
                            ],
                            'AmiId' => [
                                'type' => 'string',
                            ],
                            'Architecture' => [
                                'type' => 'string',
                            ],
                            'AutoScalingType' => [
                                'type' => 'string',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                            ],
                            'BlockDeviceMappings' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'BlockDeviceMapping',
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceName' => [
                                            'type' => 'string',
                                        ],
                                        'NoDevice' => [
                                            'type' => 'string',
                                        ],
                                        'VirtualName' => [
                                            'type' => 'string',
                                        ],
                                        'Ebs' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'SnapshotId' => [
                                                    'type' => 'string',
                                                ],
                                                'Iops' => [
                                                    'type' => 'numeric',
                                                ],
                                                'VolumeSize' => [
                                                    'type' => 'numeric',
                                                ],
                                                'VolumeType' => [
                                                    'type' => 'string',
                                                ],
                                                'DeleteOnTermination' => [
                                                    'type' => 'boolean',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'CreatedAt' => [
                                'type' => 'string',
                            ],
                            'EbsOptimized' => [
                                'type' => 'boolean',
                            ],
                            'Ec2InstanceId' => [
                                'type' => 'string',
                            ],
                            'EcsClusterArn' => [
                                'type' => 'string',
                            ],
                            'EcsContainerInstanceArn' => [
                                'type' => 'string',
                            ],
                            'ElasticIp' => [
                                'type' => 'string',
                            ],
                            'Hostname' => [
                                'type' => 'string',
                            ],
                            'InfrastructureClass' => [
                                'type' => 'string',
                            ],
                            'InstallUpdatesOnBoot' => [
                                'type' => 'boolean',
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                            'InstanceProfileArn' => [
                                'type' => 'string',
                            ],
                            'InstanceType' => [
                                'type' => 'string',
                            ],
                            'LastServiceErrorId' => [
                                'type' => 'string',
                            ],
                            'LayerIds' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'Os' => [
                                'type' => 'string',
                            ],
                            'Platform' => [
                                'type' => 'string',
                            ],
                            'PrivateDns' => [
                                'type' => 'string',
                            ],
                            'PrivateIp' => [
                                'type' => 'string',
                            ],
                            'PublicDns' => [
                                'type' => 'string',
                            ],
                            'PublicIp' => [
                                'type' => 'string',
                            ],
                            'RegisteredBy' => [
                                'type' => 'string',
                            ],
                            'ReportedAgentVersion' => [
                                'type' => 'string',
                            ],
                            'ReportedOs' => [
                                'type' => 'object',
                                'properties' => [
                                    'Family' => [
                                        'type' => 'string',
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Version' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'RootDeviceType' => [
                                'type' => 'string',
                            ],
                            'RootDeviceVolumeId' => [
                                'type' => 'string',
                            ],
                            'SecurityGroupIds' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'SshHostDsaKeyFingerprint' => [
                                'type' => 'string',
                            ],
                            'SshHostRsaKeyFingerprint' => [
                                'type' => 'string',
                            ],
                            'SshKeyName' => [
                                'type' => 'string',
                            ],
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'SubnetId' => [
                                'type' => 'string',
                            ],
                            'VirtualizationType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeLayersResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Layers' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Layer',
                        'type' => 'object',
                        'properties' => [
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'LayerId' => [
                                'type' => 'string',
                            ],
                            'Type' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Shortname' => [
                                'type' => 'string',
                            ],
                            'Attributes' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'CustomInstanceProfileArn' => [
                                'type' => 'string',
                            ],
                            'CustomJson' => [
                                'type' => 'string',
                            ],
                            'CustomSecurityGroupIds' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'DefaultSecurityGroupNames' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'Packages' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'VolumeConfigurations' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'VolumeConfiguration',
                                    'type' => 'object',
                                    'properties' => [
                                        'MountPoint' => [
                                            'type' => 'string',
                                        ],
                                        'RaidLevel' => [
                                            'type' => 'numeric',
                                        ],
                                        'NumberOfDisks' => [
                                            'type' => 'numeric',
                                        ],
                                        'Size' => [
                                            'type' => 'numeric',
                                        ],
                                        'VolumeType' => [
                                            'type' => 'string',
                                        ],
                                        'Iops' => [
                                            'type' => 'numeric',
                                        ],
                                    ],
                                ],
                            ],
                            'EnableAutoHealing' => [
                                'type' => 'boolean',
                            ],
                            'AutoAssignElasticIps' => [
                                'type' => 'boolean',
                            ],
                            'AutoAssignPublicIps' => [
                                'type' => 'boolean',
                            ],
                            'DefaultRecipes' => [
                                'type' => 'object',
                                'properties' => [
                                    'Setup' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Configure' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Deploy' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Undeploy' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Shutdown' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'CustomRecipes' => [
                                'type' => 'object',
                                'properties' => [
                                    'Setup' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Configure' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Deploy' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Undeploy' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Shutdown' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'CreatedAt' => [
                                'type' => 'string',
                            ],
                            'InstallUpdatesOnBoot' => [
                                'type' => 'boolean',
                            ],
                            'UseEbsOptimizedInstances' => [
                                'type' => 'boolean',
                            ],
                            'LifecycleEventConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Shutdown' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'ExecutionTimeout' => [
                                                'type' => 'numeric',
                                            ],
                                            'DelayUntilElbConnectionsDrained' => [
                                                'type' => 'boolean',
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
        'DescribeLoadBasedAutoScalingResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LoadBasedAutoScalingConfigurations' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'LoadBasedAutoScalingConfiguration',
                        'type' => 'object',
                        'properties' => [
                            'LayerId' => [
                                'type' => 'string',
                            ],
                            'Enable' => [
                                'type' => 'boolean',
                            ],
                            'UpScaling' => [
                                'type' => 'object',
                                'properties' => [
                                    'InstanceCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'ThresholdsWaitTime' => [
                                        'type' => 'numeric',
                                    ],
                                    'IgnoreMetricsTime' => [
                                        'type' => 'numeric',
                                    ],
                                    'CpuThreshold' => [
                                        'type' => 'numeric',
                                    ],
                                    'MemoryThreshold' => [
                                        'type' => 'numeric',
                                    ],
                                    'LoadThreshold' => [
                                        'type' => 'numeric',
                                    ],
                                    'Alarms' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'DownScaling' => [
                                'type' => 'object',
                                'properties' => [
                                    'InstanceCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'ThresholdsWaitTime' => [
                                        'type' => 'numeric',
                                    ],
                                    'IgnoreMetricsTime' => [
                                        'type' => 'numeric',
                                    ],
                                    'CpuThreshold' => [
                                        'type' => 'numeric',
                                    ],
                                    'MemoryThreshold' => [
                                        'type' => 'numeric',
                                    ],
                                    'LoadThreshold' => [
                                        'type' => 'numeric',
                                    ],
                                    'Alarms' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
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
        'DescribeMyUserProfileResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'UserProfile' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'IamUserArn' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'SshUsername' => [
                            'type' => 'string',
                        ],
                        'SshPublicKey' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DescribePermissionsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Permissions' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Permission',
                        'type' => 'object',
                        'properties' => [
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'IamUserArn' => [
                                'type' => 'string',
                            ],
                            'AllowSsh' => [
                                'type' => 'boolean',
                            ],
                            'AllowSudo' => [
                                'type' => 'boolean',
                            ],
                            'Level' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeRaidArraysResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RaidArrays' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'RaidArray',
                        'type' => 'object',
                        'properties' => [
                            'RaidArrayId' => [
                                'type' => 'string',
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'RaidLevel' => [
                                'type' => 'numeric',
                            ],
                            'NumberOfDisks' => [
                                'type' => 'numeric',
                            ],
                            'Size' => [
                                'type' => 'numeric',
                            ],
                            'Device' => [
                                'type' => 'string',
                            ],
                            'MountPoint' => [
                                'type' => 'string',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                            ],
                            'CreatedAt' => [
                                'type' => 'string',
                            ],
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'VolumeType' => [
                                'type' => 'string',
                            ],
                            'Iops' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeRdsDbInstancesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RdsDbInstances' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'RdsDbInstance',
                        'type' => 'object',
                        'properties' => [
                            'RdsDbInstanceArn' => [
                                'type' => 'string',
                            ],
                            'DbInstanceIdentifier' => [
                                'type' => 'string',
                            ],
                            'DbUser' => [
                                'type' => 'string',
                            ],
                            'DbPassword' => [
                                'type' => 'string',
                            ],
                            'Region' => [
                                'type' => 'string',
                            ],
                            'Address' => [
                                'type' => 'string',
                            ],
                            'Engine' => [
                                'type' => 'string',
                            ],
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'MissingOnRds' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeServiceErrorsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ServiceErrors' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ServiceError',
                        'type' => 'object',
                        'properties' => [
                            'ServiceErrorId' => [
                                'type' => 'string',
                            ],
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                            'Type' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'CreatedAt' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeStackProvisioningParametersResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AgentInstallerUrl' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Parameters' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'DescribeStackSummaryResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StackSummary' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'StackId' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'LayersCount' => [
                            'type' => 'numeric',
                        ],
                        'AppsCount' => [
                            'type' => 'numeric',
                        ],
                        'InstancesCount' => [
                            'type' => 'object',
                            'properties' => [
                                'Assigning' => [
                                    'type' => 'numeric',
                                ],
                                'Booting' => [
                                    'type' => 'numeric',
                                ],
                                'ConnectionLost' => [
                                    'type' => 'numeric',
                                ],
                                'Deregistering' => [
                                    'type' => 'numeric',
                                ],
                                'Online' => [
                                    'type' => 'numeric',
                                ],
                                'Pending' => [
                                    'type' => 'numeric',
                                ],
                                'Rebooting' => [
                                    'type' => 'numeric',
                                ],
                                'Registered' => [
                                    'type' => 'numeric',
                                ],
                                'Registering' => [
                                    'type' => 'numeric',
                                ],
                                'Requested' => [
                                    'type' => 'numeric',
                                ],
                                'RunningSetup' => [
                                    'type' => 'numeric',
                                ],
                                'SetupFailed' => [
                                    'type' => 'numeric',
                                ],
                                'ShuttingDown' => [
                                    'type' => 'numeric',
                                ],
                                'StartFailed' => [
                                    'type' => 'numeric',
                                ],
                                'Stopped' => [
                                    'type' => 'numeric',
                                ],
                                'Stopping' => [
                                    'type' => 'numeric',
                                ],
                                'Terminated' => [
                                    'type' => 'numeric',
                                ],
                                'Terminating' => [
                                    'type' => 'numeric',
                                ],
                                'Unassigning' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeStacksResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Stacks' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Stack',
                        'type' => 'object',
                        'properties' => [
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'Region' => [
                                'type' => 'string',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                            ],
                            'Attributes' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'ServiceRoleArn' => [
                                'type' => 'string',
                            ],
                            'DefaultInstanceProfileArn' => [
                                'type' => 'string',
                            ],
                            'DefaultOs' => [
                                'type' => 'string',
                            ],
                            'HostnameTheme' => [
                                'type' => 'string',
                            ],
                            'DefaultAvailabilityZone' => [
                                'type' => 'string',
                            ],
                            'DefaultSubnetId' => [
                                'type' => 'string',
                            ],
                            'CustomJson' => [
                                'type' => 'string',
                            ],
                            'ConfigurationManager' => [
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Version' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'ChefConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'ManageBerkshelf' => [
                                        'type' => 'boolean',
                                    ],
                                    'BerkshelfVersion' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'UseCustomCookbooks' => [
                                'type' => 'boolean',
                            ],
                            'UseOpsworksSecurityGroups' => [
                                'type' => 'boolean',
                            ],
                            'CustomCookbooksSource' => [
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'type' => 'string',
                                    ],
                                    'Url' => [
                                        'type' => 'string',
                                    ],
                                    'Username' => [
                                        'type' => 'string',
                                    ],
                                    'Password' => [
                                        'type' => 'string',
                                    ],
                                    'SshKey' => [
                                        'type' => 'string',
                                    ],
                                    'Revision' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'DefaultSshKeyName' => [
                                'type' => 'string',
                            ],
                            'CreatedAt' => [
                                'type' => 'string',
                            ],
                            'DefaultRootDeviceType' => [
                                'type' => 'string',
                            ],
                            'AgentVersion' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeTimeBasedAutoScalingResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TimeBasedAutoScalingConfigurations' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'TimeBasedAutoScalingConfiguration',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                            'AutoScalingSchedule' => [
                                'type' => 'object',
                                'properties' => [
                                    'Monday' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Tuesday' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Wednesday' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Thursday' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Friday' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Saturday' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Sunday' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
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
        'DescribeUserProfilesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'UserProfiles' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'UserProfile',
                        'type' => 'object',
                        'properties' => [
                            'IamUserArn' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'SshUsername' => [
                                'type' => 'string',
                            ],
                            'SshPublicKey' => [
                                'type' => 'string',
                            ],
                            'AllowSelfManagement' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeVolumesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Volumes' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Volume',
                        'type' => 'object',
                        'properties' => [
                            'VolumeId' => [
                                'type' => 'string',
                            ],
                            'Ec2VolumeId' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'RaidArrayId' => [
                                'type' => 'string',
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'Size' => [
                                'type' => 'numeric',
                            ],
                            'Device' => [
                                'type' => 'string',
                            ],
                            'MountPoint' => [
                                'type' => 'string',
                            ],
                            'Region' => [
                                'type' => 'string',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                            ],
                            'VolumeType' => [
                                'type' => 'string',
                            ],
                            'Iops' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetHostnameSuggestionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LayerId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Hostname' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GrantAccessResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TemporaryCredential' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Username' => [
                            'type' => 'string',
                        ],
                        'Password' => [
                            'type' => 'string',
                        ],
                        'ValidForInMinutes' => [
                            'type' => 'numeric',
                        ],
                        'InstanceId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'RegisterEcsClusterResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EcsClusterArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'RegisterElasticIpResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ElasticIp' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'RegisterInstanceResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'RegisterVolumeResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VolumeId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
    ],
    'iterators' => [
        'DescribeApps' => [
            'result_key' => 'Apps',
        ],
        'DescribeCommands' => [
            'result_key' => 'Commands',
        ],
        'DescribeDeployments' => [
            'result_key' => 'Deployments',
        ],
        'DescribeEcsClusters' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxResults',
            'result_key' => 'EcsClusters',
        ],
        'DescribeElasticIps' => [
            'result_key' => 'ElasticIps',
        ],
        'DescribeElasticLoadBalancers' => [
            'result_key' => 'ElasticLoadBalancers',
        ],
        'DescribeInstances' => [
            'result_key' => 'Instances',
        ],
        'DescribeLayers' => [
            'result_key' => 'Layers',
        ],
        'DescribeLoadBasedAutoScaling' => [
            'result_key' => 'LoadBasedAutoScalingConfigurations',
        ],
        'DescribePermissions' => [
            'result_key' => 'Permissions',
        ],
        'DescribeRaidArrays' => [
            'result_key' => 'RaidArrays',
        ],
        'DescribeServiceErrors' => [
            'result_key' => 'ServiceErrors',
        ],
        'DescribeStacks' => [
            'result_key' => 'Stacks',
        ],
        'DescribeTimeBasedAutoScaling' => [
            'result_key' => 'TimeBasedAutoScalingConfigurations',
        ],
        'DescribeUserProfiles' => [
            'result_key' => 'UserProfiles',
        ],
        'DescribeVolumes' => [
            'result_key' => 'Volumes',
        ],
    ],
];
