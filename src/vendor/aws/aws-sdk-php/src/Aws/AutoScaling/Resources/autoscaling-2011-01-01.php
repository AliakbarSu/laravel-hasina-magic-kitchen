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
    'apiVersion' => '2011-01-01',
    'endpointPrefix' => 'autoscaling',
    'serviceFullName' => 'Auto Scaling',
    'serviceType' => 'query',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'AutoScaling',
    'regions' => [
        'us-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'autoscaling.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'autoscaling.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'autoscaling.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'autoscaling.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'autoscaling.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'autoscaling.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'autoscaling.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'autoscaling.sa-east-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'autoscaling.cn-north-1.amazonaws.com.cn',
        ],
        'us-gov-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'autoscaling.us-gov-west-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'CreateAutoScalingGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateAutoScalingGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'LaunchConfigurationName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MinSize' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'MaxSize' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'DesiredCapacity' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'DefaultCooldown' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'AvailabilityZones' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AvailabilityZones.member',
                    'minItems' => 1,
                    'items' => [
                        'name' => 'XmlStringMaxLen255',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'LoadBalancerNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'LoadBalancerNames.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen255',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'HealthCheckType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'HealthCheckGracePeriod' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'PlacementGroup' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'VPCZoneIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TerminationPolicies' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TerminationPolicies.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen1600',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'NewInstancesProtectedFromScaleIn' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Tags' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Tags.member',
                    'items' => [
                        'name' => 'Tag',
                        'type' => 'object',
                        'properties' => [
                            'ResourceId' => [
                                'type' => 'string',
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                            ],
                            'Key' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'PropagateAtLaunch' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have an Auto Scaling group or launch configuration with this name.',
                    'class' => 'AlreadyExistsException',
                ],
                [
                    'reason' =>
                        'You have already reached a limit for your Auto Scaling resources (for example, groups, launch configurations, or lifecycle hooks). For more information, see DescribeAccountLimits.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'AttachInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AttachInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'InstanceIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceIds.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen19',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DetachInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DetachInstancesAnswer',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DetachInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'InstanceIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceIds.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen19',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ShouldDecrementDesiredCapacity' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'EnterStandby' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EnterStandbyAnswer',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'EnterStandby',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'InstanceIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceIds.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen19',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ShouldDecrementDesiredCapacity' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'ExitStandby' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ExitStandbyAnswer',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ExitStandby',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'InstanceIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceIds.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen19',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DeleteAutoScalingGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteAutoScalingGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ForceDelete' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The Auto Scaling group can\'t be deleted because there are scaling activities in progress.',
                    'class' => 'ScalingActivityInProgressException',
                ],
                [
                    'reason' =>
                        'The Auto Scaling group or launch configuration can\'t be deleted because it is in use.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeAutoScalingGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AutoScalingGroupsType',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeAutoScalingGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AutoScalingGroupNames.member',
                    'items' => [
                        'name' => 'ResourceName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The NextToken value is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'UpdateAutoScalingGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateAutoScalingGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'LaunchConfigurationName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MinSize' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'MaxSize' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'DesiredCapacity' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'DefaultCooldown' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'AvailabilityZones' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AvailabilityZones.member',
                    'minItems' => 1,
                    'items' => [
                        'name' => 'XmlStringMaxLen255',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'HealthCheckType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'HealthCheckGracePeriod' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'PlacementGroup' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'VPCZoneIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TerminationPolicies' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TerminationPolicies.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen1600',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'NewInstancesProtectedFromScaleIn' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The Auto Scaling group can\'t be deleted because there are scaling activities in progress.',
                    'class' => 'ScalingActivityInProgressException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeAutoScalingInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AutoScalingInstancesType',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeAutoScalingInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'InstanceIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceIds.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen19',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The NextToken value is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeScalingProcessTypes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ProcessesType',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeScalingProcessTypes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'SuspendProcesses' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SuspendProcesses',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ScalingProcesses' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ScalingProcesses.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen255',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The Auto Scaling group or launch configuration can\'t be deleted because it is in use.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'ResumeProcesses' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ResumeProcesses',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ScalingProcesses' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ScalingProcesses.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen255',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The Auto Scaling group or launch configuration can\'t be deleted because it is in use.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'SetDesiredCapacity' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetDesiredCapacity',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'DesiredCapacity' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'HonorCooldown' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The Auto Scaling group can\'t be deleted because there are scaling activities in progress.',
                    'class' => 'ScalingActivityInProgressException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'SetInstanceHealth' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetInstanceHealth',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'HealthStatus' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ShouldRespectGracePeriod' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'AttachLoadBalancers' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AttachLoadBalancers',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'LoadBalancerNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'LoadBalancerNames.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen255',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DetachLoadBalancers' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DetachLoadBalancers',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'LoadBalancerNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'LoadBalancerNames.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen255',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'PutScheduledUpdateGroupAction' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PutScheduledUpdateGroupAction',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ScheduledActionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Time' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
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
                'Recurrence' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MinSize' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'MaxSize' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'DesiredCapacity' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have an Auto Scaling group or launch configuration with this name.',
                    'class' => 'AlreadyExistsException',
                ],
                [
                    'reason' =>
                        'You have already reached a limit for your Auto Scaling resources (for example, groups, launch configurations, or lifecycle hooks). For more information, see DescribeAccountLimits.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeScheduledActions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ScheduledActionsType',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeScheduledActions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ScheduledActionNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ScheduledActionNames.member',
                    'items' => [
                        'name' => 'ResourceName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
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
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The NextToken value is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DeleteScheduledAction' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteScheduledAction',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ScheduledActionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeAdjustmentTypes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeAdjustmentTypesAnswer',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeAdjustmentTypes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'PutScalingPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'PolicyARNType',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PutScalingPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'AdjustmentType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MinAdjustmentStep' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'MinAdjustmentMagnitude' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'ScalingAdjustment' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Cooldown' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'MetricAggregationType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'StepAdjustments' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'StepAdjustments.member',
                    'items' => [
                        'name' => 'StepAdjustment',
                        'type' => 'object',
                        'properties' => [
                            'MetricIntervalLowerBound' => [
                                'type' => 'numeric',
                            ],
                            'MetricIntervalUpperBound' => [
                                'type' => 'numeric',
                            ],
                            'ScalingAdjustment' => [
                                'required' => true,
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'EstimatedInstanceWarmup' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You have already reached a limit for your Auto Scaling resources (for example, groups, launch configurations, or lifecycle hooks). For more information, see DescribeAccountLimits.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribePolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'PoliciesType',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribePolicies',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PolicyNames.member',
                    'items' => [
                        'name' => 'ResourceName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'PolicyTypes' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PolicyTypes.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen64',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The NextToken value is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DeletePolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeletePolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'ExecutePolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ExecutePolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'HonorCooldown' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'MetricValue' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'BreachThreshold' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The Auto Scaling group can\'t be deleted because there are scaling activities in progress.',
                    'class' => 'ScalingActivityInProgressException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeMetricCollectionTypes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeMetricCollectionTypesAnswer',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeMetricCollectionTypes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'EnableMetricsCollection' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'EnableMetricsCollection',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Metrics' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Metrics.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen255',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'Granularity' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DisableMetricsCollection' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DisableMetricsCollection',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Metrics' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Metrics.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen255',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'CreateLaunchConfiguration' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateLaunchConfiguration',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'LaunchConfigurationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ImageId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'KeyName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'SecurityGroups' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SecurityGroups.member',
                    'items' => [
                        'name' => 'XmlString',
                        'type' => 'string',
                    ],
                ],
                'ClassicLinkVPCId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ClassicLinkVPCSecurityGroups' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ClassicLinkVPCSecurityGroups.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen255',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'UserData' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'InstanceType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'KernelId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'RamdiskId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'BlockDeviceMappings' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'BlockDeviceMappings.member',
                    'items' => [
                        'name' => 'BlockDeviceMapping',
                        'type' => 'object',
                        'properties' => [
                            'VirtualName' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'DeviceName' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Ebs' => [
                                'type' => 'object',
                                'properties' => [
                                    'SnapshotId' => [
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'VolumeSize' => [
                                        'type' => 'numeric',
                                        'minimum' => 1,
                                        'maximum' => 16384,
                                    ],
                                    'VolumeType' => [
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'DeleteOnTermination' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                    'Iops' => [
                                        'type' => 'numeric',
                                        'minimum' => 100,
                                        'maximum' => 20000,
                                    ],
                                    'Encrypted' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                ],
                            ],
                            'NoDevice' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
                'InstanceMonitoring' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Enabled' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
                'SpotPrice' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'IamInstanceProfile' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'EbsOptimized' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'AssociatePublicIpAddress' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'PlacementTenancy' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have an Auto Scaling group or launch configuration with this name.',
                    'class' => 'AlreadyExistsException',
                ],
                [
                    'reason' =>
                        'You have already reached a limit for your Auto Scaling resources (for example, groups, launch configurations, or lifecycle hooks). For more information, see DescribeAccountLimits.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeLaunchConfigurations' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'LaunchConfigurationsType',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeLaunchConfigurations',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'LaunchConfigurationNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'LaunchConfigurationNames.member',
                    'items' => [
                        'name' => 'ResourceName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The NextToken value is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DeleteLaunchConfiguration' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteLaunchConfiguration',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'LaunchConfigurationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The Auto Scaling group or launch configuration can\'t be deleted because it is in use.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeScalingActivities' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ActivitiesType',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeScalingActivities',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'ActivityIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ActivityIds.member',
                    'items' => [
                        'name' => 'XmlString',
                        'type' => 'string',
                    ],
                ],
                'AutoScalingGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The NextToken value is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'TerminateInstanceInAutoScalingGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ActivityType',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'TerminateInstanceInAutoScalingGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ShouldDecrementDesiredCapacity' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The Auto Scaling group can\'t be deleted because there are scaling activities in progress.',
                    'class' => 'ScalingActivityInProgressException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'SetInstanceProtection' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetInstanceProtection',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'InstanceIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InstanceIds.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen19',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ProtectedFromScaleIn' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You have already reached a limit for your Auto Scaling resources (for example, groups, launch configurations, or lifecycle hooks). For more information, see DescribeAccountLimits.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'PutNotificationConfiguration' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PutNotificationConfiguration',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TopicARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'NotificationTypes' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'NotificationTypes.member',
                    'items' => [
                        'name' => 'XmlStringMaxLen255',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You have already reached a limit for your Auto Scaling resources (for example, groups, launch configurations, or lifecycle hooks). For more information, see DescribeAccountLimits.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DeleteNotificationConfiguration' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteNotificationConfiguration',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TopicARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeNotificationConfigurations' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeNotificationConfigurationsAnswer',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeNotificationConfigurations',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AutoScalingGroupNames.member',
                    'items' => [
                        'name' => 'ResourceName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The NextToken value is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeAutoScalingNotificationTypes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeAutoScalingNotificationTypesAnswer',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeAutoScalingNotificationTypes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'CreateOrUpdateTags' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateOrUpdateTags',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'Tags' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Tags.member',
                    'items' => [
                        'name' => 'Tag',
                        'type' => 'object',
                        'properties' => [
                            'ResourceId' => [
                                'type' => 'string',
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                            ],
                            'Key' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'PropagateAtLaunch' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You have already reached a limit for your Auto Scaling resources (for example, groups, launch configurations, or lifecycle hooks). For more information, see DescribeAccountLimits.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'You already have an Auto Scaling group or launch configuration with this name.',
                    'class' => 'AlreadyExistsException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
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
                    'default' => '2011-01-01',
                ],
                'Tags' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Tags.member',
                    'items' => [
                        'name' => 'Tag',
                        'type' => 'object',
                        'properties' => [
                            'ResourceId' => [
                                'type' => 'string',
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                            ],
                            'Key' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'PropagateAtLaunch' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeTags' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'TagsType',
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
                    'default' => '2011-01-01',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Values' => [
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'XmlString',
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
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The NextToken value is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeTerminationPolicyTypes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeTerminationPolicyTypesAnswer',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeTerminationPolicyTypes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeAccountLimits' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeAccountLimitsAnswer',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeAccountLimits',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'PutLifecycleHook' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PutLifecycleHook',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'LifecycleHookName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'LifecycleTransition' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RoleARN' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'NotificationTargetARN' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'NotificationMetadata' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'HeartbeatTimeout' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'DefaultResult' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You have already reached a limit for your Auto Scaling resources (for example, groups, launch configurations, or lifecycle hooks). For more information, see DescribeAccountLimits.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DeleteLifecycleHook' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteLifecycleHook',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'LifecycleHookName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeLifecycleHooks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeLifecycleHooksAnswer',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeLifecycleHooks',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'LifecycleHookNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'LifecycleHookNames.member',
                    'items' => [
                        'name' => 'AsciiStringMaxLen255',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeLifecycleHookTypes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeLifecycleHookTypesAnswer',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeLifecycleHookTypes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'CompleteLifecycleAction' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CompleteLifecycleAction',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'LifecycleHookName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'LifecycleActionToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 36,
                ],
                'LifecycleActionResult' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'RecordLifecycleActionHeartbeat' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RecordLifecycleActionHeartbeat',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'LifecycleHookName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'LifecycleActionToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 36,
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
        'DescribeLoadBalancers' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeLoadBalancersResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeLoadBalancers',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-01-01',
                ],
                'AutoScalingGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a pending update to an Auto Scaling resource (for example, a group, instance, or load balancer).',
                    'class' => 'ResourceContentionException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'DetachInstancesAnswer' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Activities' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Activity',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'ActivityId' => [
                                'type' => 'string',
                            ],
                            'AutoScalingGroupName' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Cause' => [
                                'type' => 'string',
                            ],
                            'StartTime' => [
                                'type' => 'string',
                            ],
                            'EndTime' => [
                                'type' => 'string',
                            ],
                            'StatusCode' => [
                                'type' => 'string',
                            ],
                            'StatusMessage' => [
                                'type' => 'string',
                            ],
                            'Progress' => [
                                'type' => 'numeric',
                            ],
                            'Details' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EnterStandbyAnswer' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Activities' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Activity',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'ActivityId' => [
                                'type' => 'string',
                            ],
                            'AutoScalingGroupName' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Cause' => [
                                'type' => 'string',
                            ],
                            'StartTime' => [
                                'type' => 'string',
                            ],
                            'EndTime' => [
                                'type' => 'string',
                            ],
                            'StatusCode' => [
                                'type' => 'string',
                            ],
                            'StatusMessage' => [
                                'type' => 'string',
                            ],
                            'Progress' => [
                                'type' => 'numeric',
                            ],
                            'Details' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExitStandbyAnswer' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Activities' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Activity',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'ActivityId' => [
                                'type' => 'string',
                            ],
                            'AutoScalingGroupName' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Cause' => [
                                'type' => 'string',
                            ],
                            'StartTime' => [
                                'type' => 'string',
                            ],
                            'EndTime' => [
                                'type' => 'string',
                            ],
                            'StatusCode' => [
                                'type' => 'string',
                            ],
                            'StatusMessage' => [
                                'type' => 'string',
                            ],
                            'Progress' => [
                                'type' => 'numeric',
                            ],
                            'Details' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AutoScalingGroupsType' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AutoScalingGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'AutoScalingGroup',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'AutoScalingGroupName' => [
                                'type' => 'string',
                            ],
                            'AutoScalingGroupARN' => [
                                'type' => 'string',
                            ],
                            'LaunchConfigurationName' => [
                                'type' => 'string',
                            ],
                            'MinSize' => [
                                'type' => 'numeric',
                            ],
                            'MaxSize' => [
                                'type' => 'numeric',
                            ],
                            'DesiredCapacity' => [
                                'type' => 'numeric',
                            ],
                            'DefaultCooldown' => [
                                'type' => 'numeric',
                            ],
                            'AvailabilityZones' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'XmlStringMaxLen255',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'LoadBalancerNames' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'XmlStringMaxLen255',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'HealthCheckType' => [
                                'type' => 'string',
                            ],
                            'HealthCheckGracePeriod' => [
                                'type' => 'numeric',
                            ],
                            'Instances' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Instance',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'InstanceId' => [
                                            'type' => 'string',
                                        ],
                                        'AvailabilityZone' => [
                                            'type' => 'string',
                                        ],
                                        'LifecycleState' => [
                                            'type' => 'string',
                                        ],
                                        'HealthStatus' => [
                                            'type' => 'string',
                                        ],
                                        'LaunchConfigurationName' => [
                                            'type' => 'string',
                                        ],
                                        'ProtectedFromScaleIn' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                            'CreatedTime' => [
                                'type' => 'string',
                            ],
                            'SuspendedProcesses' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'SuspendedProcess',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'ProcessName' => [
                                            'type' => 'string',
                                        ],
                                        'SuspensionReason' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'PlacementGroup' => [
                                'type' => 'string',
                            ],
                            'VPCZoneIdentifier' => [
                                'type' => 'string',
                            ],
                            'EnabledMetrics' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'EnabledMetric',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'Metric' => [
                                            'type' => 'string',
                                        ],
                                        'Granularity' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'TagDescription',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'ResourceId' => [
                                            'type' => 'string',
                                        ],
                                        'ResourceType' => [
                                            'type' => 'string',
                                        ],
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                        ],
                                        'PropagateAtLaunch' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                            'TerminationPolicies' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'XmlStringMaxLen1600',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'NewInstancesProtectedFromScaleIn' => [
                                'type' => 'boolean',
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
        'AutoScalingInstancesType' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AutoScalingInstances' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'AutoScalingInstanceDetails',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                            'AutoScalingGroupName' => [
                                'type' => 'string',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                            ],
                            'LifecycleState' => [
                                'type' => 'string',
                            ],
                            'HealthStatus' => [
                                'type' => 'string',
                            ],
                            'LaunchConfigurationName' => [
                                'type' => 'string',
                            ],
                            'ProtectedFromScaleIn' => [
                                'type' => 'boolean',
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
        'ProcessesType' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Processes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ProcessType',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'ProcessName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ScheduledActionsType' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ScheduledUpdateGroupActions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ScheduledUpdateGroupAction',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'AutoScalingGroupName' => [
                                'type' => 'string',
                            ],
                            'ScheduledActionName' => [
                                'type' => 'string',
                            ],
                            'ScheduledActionARN' => [
                                'type' => 'string',
                            ],
                            'Time' => [
                                'type' => 'string',
                            ],
                            'StartTime' => [
                                'type' => 'string',
                            ],
                            'EndTime' => [
                                'type' => 'string',
                            ],
                            'Recurrence' => [
                                'type' => 'string',
                            ],
                            'MinSize' => [
                                'type' => 'numeric',
                            ],
                            'MaxSize' => [
                                'type' => 'numeric',
                            ],
                            'DesiredCapacity' => [
                                'type' => 'numeric',
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
        'DescribeAdjustmentTypesAnswer' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AdjustmentTypes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'AdjustmentType',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'AdjustmentType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PolicyARNType' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PolicyARN' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'PoliciesType' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ScalingPolicies' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ScalingPolicy',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'AutoScalingGroupName' => [
                                'type' => 'string',
                            ],
                            'PolicyName' => [
                                'type' => 'string',
                            ],
                            'PolicyARN' => [
                                'type' => 'string',
                            ],
                            'PolicyType' => [
                                'type' => 'string',
                            ],
                            'AdjustmentType' => [
                                'type' => 'string',
                            ],
                            'MinAdjustmentStep' => [
                                'type' => 'numeric',
                            ],
                            'MinAdjustmentMagnitude' => [
                                'type' => 'numeric',
                            ],
                            'ScalingAdjustment' => [
                                'type' => 'numeric',
                            ],
                            'Cooldown' => [
                                'type' => 'numeric',
                            ],
                            'StepAdjustments' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'StepAdjustment',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'MetricIntervalLowerBound' => [
                                            'type' => 'numeric',
                                        ],
                                        'MetricIntervalUpperBound' => [
                                            'type' => 'numeric',
                                        ],
                                        'ScalingAdjustment' => [
                                            'type' => 'numeric',
                                        ],
                                    ],
                                ],
                            ],
                            'MetricAggregationType' => [
                                'type' => 'string',
                            ],
                            'EstimatedInstanceWarmup' => [
                                'type' => 'numeric',
                            ],
                            'Alarms' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Alarm',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'AlarmName' => [
                                            'type' => 'string',
                                        ],
                                        'AlarmARN' => [
                                            'type' => 'string',
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
                ],
            ],
        ],
        'DescribeMetricCollectionTypesAnswer' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Metrics' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'MetricCollectionType',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Metric' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Granularities' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'MetricGranularityType',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Granularity' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'LaunchConfigurationsType' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LaunchConfigurations' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'LaunchConfiguration',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'LaunchConfigurationName' => [
                                'type' => 'string',
                            ],
                            'LaunchConfigurationARN' => [
                                'type' => 'string',
                            ],
                            'ImageId' => [
                                'type' => 'string',
                            ],
                            'KeyName' => [
                                'type' => 'string',
                            ],
                            'SecurityGroups' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'XmlString',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'ClassicLinkVPCId' => [
                                'type' => 'string',
                            ],
                            'ClassicLinkVPCSecurityGroups' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'XmlStringMaxLen255',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'UserData' => [
                                'type' => 'string',
                            ],
                            'InstanceType' => [
                                'type' => 'string',
                            ],
                            'KernelId' => [
                                'type' => 'string',
                            ],
                            'RamdiskId' => [
                                'type' => 'string',
                            ],
                            'BlockDeviceMappings' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'BlockDeviceMapping',
                                    'type' => 'object',
                                    'sentAs' => 'member',
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
                                                'VolumeType' => [
                                                    'type' => 'string',
                                                ],
                                                'DeleteOnTermination' => [
                                                    'type' => 'boolean',
                                                ],
                                                'Iops' => [
                                                    'type' => 'numeric',
                                                ],
                                                'Encrypted' => [
                                                    'type' => 'boolean',
                                                ],
                                            ],
                                        ],
                                        'NoDevice' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                            'InstanceMonitoring' => [
                                'type' => 'object',
                                'properties' => [
                                    'Enabled' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'SpotPrice' => [
                                'type' => 'string',
                            ],
                            'IamInstanceProfile' => [
                                'type' => 'string',
                            ],
                            'CreatedTime' => [
                                'type' => 'string',
                            ],
                            'EbsOptimized' => [
                                'type' => 'boolean',
                            ],
                            'AssociatePublicIpAddress' => [
                                'type' => 'boolean',
                            ],
                            'PlacementTenancy' => [
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
        'ActivitiesType' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Activities' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Activity',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'ActivityId' => [
                                'type' => 'string',
                            ],
                            'AutoScalingGroupName' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Cause' => [
                                'type' => 'string',
                            ],
                            'StartTime' => [
                                'type' => 'string',
                            ],
                            'EndTime' => [
                                'type' => 'string',
                            ],
                            'StatusCode' => [
                                'type' => 'string',
                            ],
                            'StatusMessage' => [
                                'type' => 'string',
                            ],
                            'Progress' => [
                                'type' => 'numeric',
                            ],
                            'Details' => [
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
        'ActivityType' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Activity' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'ActivityId' => [
                            'type' => 'string',
                        ],
                        'AutoScalingGroupName' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'Cause' => [
                            'type' => 'string',
                        ],
                        'StartTime' => [
                            'type' => 'string',
                        ],
                        'EndTime' => [
                            'type' => 'string',
                        ],
                        'StatusCode' => [
                            'type' => 'string',
                        ],
                        'StatusMessage' => [
                            'type' => 'string',
                        ],
                        'Progress' => [
                            'type' => 'numeric',
                        ],
                        'Details' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeNotificationConfigurationsAnswer' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NotificationConfigurations' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'NotificationConfiguration',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'AutoScalingGroupName' => [
                                'type' => 'string',
                            ],
                            'TopicARN' => [
                                'type' => 'string',
                            ],
                            'NotificationType' => [
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
        'DescribeAutoScalingNotificationTypesAnswer' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AutoScalingNotificationTypes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'XmlStringMaxLen255',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
            ],
        ],
        'TagsType' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Tags' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'TagDescription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'ResourceId' => [
                                'type' => 'string',
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                            ],
                            'Key' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'PropagateAtLaunch' => [
                                'type' => 'boolean',
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
        'DescribeTerminationPolicyTypesAnswer' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TerminationPolicyTypes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'XmlStringMaxLen1600',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
            ],
        ],
        'DescribeAccountLimitsAnswer' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MaxNumberOfAutoScalingGroups' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'MaxNumberOfLaunchConfigurations' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'NumberOfAutoScalingGroups' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'NumberOfLaunchConfigurations' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
            ],
        ],
        'DescribeLifecycleHooksAnswer' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LifecycleHooks' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'LifecycleHook',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'LifecycleHookName' => [
                                'type' => 'string',
                            ],
                            'AutoScalingGroupName' => [
                                'type' => 'string',
                            ],
                            'LifecycleTransition' => [
                                'type' => 'string',
                            ],
                            'NotificationTargetARN' => [
                                'type' => 'string',
                            ],
                            'RoleARN' => [
                                'type' => 'string',
                            ],
                            'NotificationMetadata' => [
                                'type' => 'string',
                            ],
                            'HeartbeatTimeout' => [
                                'type' => 'numeric',
                            ],
                            'GlobalTimeout' => [
                                'type' => 'numeric',
                            ],
                            'DefaultResult' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeLifecycleHookTypesAnswer' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LifecycleHookTypes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'XmlStringMaxLen255',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
            ],
        ],
        'DescribeLoadBalancersResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LoadBalancers' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'LoadBalancerState',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'LoadBalancerName' => [
                                'type' => 'string',
                            ],
                            'State' => [
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
    ],
    'iterators' => [
        'DescribeAutoScalingGroups' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxRecords',
            'result_key' => 'AutoScalingGroups',
        ],
        'DescribeAutoScalingInstances' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxRecords',
            'result_key' => 'AutoScalingInstances',
        ],
        'DescribeLaunchConfigurations' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxRecords',
            'result_key' => 'LaunchConfigurations',
        ],
        'DescribeNotificationConfigurations' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxRecords',
            'result_key' => 'NotificationConfigurations',
        ],
        'DescribePolicies' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxRecords',
            'result_key' => 'ScalingPolicies',
        ],
        'DescribeScalingActivities' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxRecords',
            'result_key' => 'Activities',
        ],
        'DescribeScheduledActions' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxRecords',
            'result_key' => 'ScheduledUpdateGroupActions',
        ],
        'DescribeTags' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxRecords',
            'result_key' => 'Tags',
        ],
    ],
];
