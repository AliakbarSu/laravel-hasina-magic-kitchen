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
    'apiVersion' => '2012-06-01',
    'endpointPrefix' => 'elasticloadbalancing',
    'serviceFullName' => 'Elastic Load Balancing',
    'serviceType' => 'query',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'ElasticLoadBalancing',
    'regions' => [
        'us-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticloadbalancing.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticloadbalancing.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticloadbalancing.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticloadbalancing.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticloadbalancing.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticloadbalancing.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticloadbalancing.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticloadbalancing.sa-east-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticloadbalancing.cn-north-1.amazonaws.com.cn',
        ],
        'us-gov-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticloadbalancing.us-gov-west-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'AddTags' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AddTags',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'LoadBalancerNames.member',
                    'items' => [
                        'name' => 'AccessPointName',
                        'type' => 'string',
                    ],
                ],
                'Tags' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Tags.member',
                    'minItems' => 1,
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
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' =>
                        'The quota for the number of tags that can be assigned to a load balancer has been reached.',
                    'class' => 'TooManyTagsException',
                ],
                [
                    'reason' => 'The same tag key specified multiple times.',
                    'class' => 'DuplicateTagKeysException',
                ],
            ],
        ],
        'ApplySecurityGroupsToLoadBalancer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ApplySecurityGroupsToLoadBalancerOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ApplySecurityGroupsToLoadBalancer',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SecurityGroups' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SecurityGroups.member',
                    'items' => [
                        'name' => 'SecurityGroupId',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
                [
                    'reason' =>
                        'One or more specified security groups do not exist.',
                    'class' => 'InvalidSecurityGroupException',
                ],
            ],
        ],
        'AttachLoadBalancerToSubnets' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AttachLoadBalancerToSubnetsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AttachLoadBalancerToSubnets',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Subnets' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Subnets.member',
                    'items' => [
                        'name' => 'SubnetId',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
                [
                    'reason' => 'One or more subnets were not found.',
                    'class' => 'SubnetNotFoundException',
                ],
                [
                    'reason' => 'The VPC has no Internet gateway.',
                    'class' => 'InvalidSubnetException',
                ],
            ],
        ],
        'ConfigureHealthCheck' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ConfigureHealthCheckOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ConfigureHealthCheck',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'HealthCheck' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Target' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'Interval' => [
                            'required' => true,
                            'type' => 'numeric',
                            'minimum' => 1,
                            'maximum' => 300,
                        ],
                        'Timeout' => [
                            'required' => true,
                            'type' => 'numeric',
                            'minimum' => 1,
                            'maximum' => 300,
                        ],
                        'UnhealthyThreshold' => [
                            'required' => true,
                            'type' => 'numeric',
                            'minimum' => 2,
                            'maximum' => 10,
                        ],
                        'HealthyThreshold' => [
                            'required' => true,
                            'type' => 'numeric',
                            'minimum' => 2,
                            'maximum' => 10,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
            ],
        ],
        'CreateAppCookieStickinessPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateAppCookieStickinessPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CookieName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' =>
                        'Policy with the same name exists for this load balancer. Please choose another name.',
                    'class' => 'DuplicatePolicyNameException',
                ],
                [
                    'reason' =>
                        'Quota for number of policies for this load balancer has already been reached.',
                    'class' => 'TooManyPoliciesException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
            ],
        ],
        'CreateLBCookieStickinessPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateLBCookieStickinessPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CookieExpirationPeriod' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' =>
                        'Policy with the same name exists for this load balancer. Please choose another name.',
                    'class' => 'DuplicatePolicyNameException',
                ],
                [
                    'reason' =>
                        'Quota for number of policies for this load balancer has already been reached.',
                    'class' => 'TooManyPoliciesException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
            ],
        ],
        'CreateLoadBalancer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateAccessPointOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateLoadBalancer',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Listeners' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Listeners.member',
                    'items' => [
                        'name' => 'Listener',
                        'type' => 'object',
                        'properties' => [
                            'Protocol' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'LoadBalancerPort' => [
                                'required' => true,
                                'type' => 'numeric',
                            ],
                            'InstanceProtocol' => [
                                'type' => 'string',
                            ],
                            'InstancePort' => [
                                'required' => true,
                                'type' => 'numeric',
                                'minimum' => 1,
                                'maximum' => 65535,
                            ],
                            'SSLCertificateId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'AvailabilityZones' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AvailabilityZones.member',
                    'items' => [
                        'name' => 'AvailabilityZone',
                        'type' => 'string',
                    ],
                ],
                'Subnets' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Subnets.member',
                    'items' => [
                        'name' => 'SubnetId',
                        'type' => 'string',
                    ],
                ],
                'SecurityGroups' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SecurityGroups.member',
                    'items' => [
                        'name' => 'SecurityGroupId',
                        'type' => 'string',
                    ],
                ],
                'Scheme' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Tags' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Tags.member',
                    'minItems' => 1,
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
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The load balancer name already exists for this account. Please choose another name.',
                    'class' => 'DuplicateAccessPointNameException',
                ],
                [
                    'reason' =>
                        'The quota for the number of load balancers has already been reached.',
                    'class' => 'TooManyAccessPointsException',
                ],
                [
                    'reason' =>
                        'The specified SSL ID does not refer to a valid SSL certificate in the AWS Identity and Access Management Service.',
                    'class' => 'CertificateNotFoundException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
                [
                    'reason' => 'One or more subnets were not found.',
                    'class' => 'SubnetNotFoundException',
                ],
                [
                    'reason' => 'The VPC has no Internet gateway.',
                    'class' => 'InvalidSubnetException',
                ],
                [
                    'reason' =>
                        'One or more specified security groups do not exist.',
                    'class' => 'InvalidSecurityGroupException',
                ],
                [
                    'reason' =>
                        'Invalid value for scheme. Scheme can only be specified for load balancers in VPC.',
                    'class' => 'InvalidSchemeException',
                ],
                [
                    'reason' =>
                        'The quota for the number of tags that can be assigned to a load balancer has been reached.',
                    'class' => 'TooManyTagsException',
                ],
                [
                    'reason' => 'The same tag key specified multiple times.',
                    'class' => 'DuplicateTagKeysException',
                ],
            ],
        ],
        'CreateLoadBalancerListeners' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateLoadBalancerListeners',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Listeners' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Listeners.member',
                    'items' => [
                        'name' => 'Listener',
                        'type' => 'object',
                        'properties' => [
                            'Protocol' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'LoadBalancerPort' => [
                                'required' => true,
                                'type' => 'numeric',
                            ],
                            'InstanceProtocol' => [
                                'type' => 'string',
                            ],
                            'InstancePort' => [
                                'required' => true,
                                'type' => 'numeric',
                                'minimum' => 1,
                                'maximum' => 65535,
                            ],
                            'SSLCertificateId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' =>
                        'A Listener already exists for the given LoadBalancerName and LoadBalancerPort, but with a different InstancePort, Protocol, or SSLCertificateId.',
                    'class' => 'DuplicateListenerException',
                ],
                [
                    'reason' =>
                        'The specified SSL ID does not refer to a valid SSL certificate in the AWS Identity and Access Management Service.',
                    'class' => 'CertificateNotFoundException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
            ],
        ],
        'CreateLoadBalancerPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateLoadBalancerPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PolicyTypeName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PolicyAttributes' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PolicyAttributes.member',
                    'items' => [
                        'name' => 'PolicyAttribute',
                        'type' => 'object',
                        'properties' => [
                            'AttributeName' => [
                                'type' => 'string',
                            ],
                            'AttributeValue' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' =>
                        'One or more of the specified policy types do not exist.',
                    'class' => 'PolicyTypeNotFoundException',
                ],
                [
                    'reason' =>
                        'Policy with the same name exists for this load balancer. Please choose another name.',
                    'class' => 'DuplicatePolicyNameException',
                ],
                [
                    'reason' =>
                        'Quota for number of policies for this load balancer has already been reached.',
                    'class' => 'TooManyPoliciesException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
            ],
        ],
        'DeleteLoadBalancer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteLoadBalancer',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteLoadBalancerListeners' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteLoadBalancerListeners',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'LoadBalancerPorts' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'LoadBalancerPorts.member',
                    'items' => [
                        'name' => 'AccessPointPort',
                        'type' => 'numeric',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
            ],
        ],
        'DeleteLoadBalancerPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteLoadBalancerPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
            ],
        ],
        'DeregisterInstancesFromLoadBalancer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DeregisterEndPointsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeregisterInstancesFromLoadBalancer',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Instances' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Instances.member',
                    'items' => [
                        'name' => 'Instance',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' => 'The specified EndPoint is not valid.',
                    'class' => 'InvalidEndPointException',
                ],
            ],
        ],
        'DescribeInstanceHealth' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeEndPointStateOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeInstanceHealth',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Instances' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Instances.member',
                    'items' => [
                        'name' => 'Instance',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' => 'The specified EndPoint is not valid.',
                    'class' => 'InvalidEndPointException',
                ],
            ],
        ],
        'DescribeLoadBalancerAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeLoadBalancerAttributesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeLoadBalancerAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified load balancer attribute could not be found.',
                    'class' => 'LoadBalancerAttributeNotFoundException',
                ],
            ],
        ],
        'DescribeLoadBalancerPolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeLoadBalancerPoliciesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeLoadBalancerPolicies',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PolicyNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PolicyNames.member',
                    'items' => [
                        'name' => 'PolicyName',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' =>
                        'One or more specified policies were not found.',
                    'class' => 'PolicyNotFoundException',
                ],
            ],
        ],
        'DescribeLoadBalancerPolicyTypes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeLoadBalancerPolicyTypesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeLoadBalancerPolicyTypes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'PolicyTypeNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PolicyTypeNames.member',
                    'items' => [
                        'name' => 'PolicyTypeName',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more of the specified policy types do not exist.',
                    'class' => 'PolicyTypeNotFoundException',
                ],
            ],
        ],
        'DescribeLoadBalancers' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeAccessPointsOutput',
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
                    'default' => '2012-06-01',
                ],
                'LoadBalancerNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'LoadBalancerNames.member',
                    'items' => [
                        'name' => 'AccessPointName',
                        'type' => 'string',
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PageSize' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 400,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
            ],
        ],
        'DescribeTags' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeTagsOutput',
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
                    'default' => '2012-06-01',
                ],
                'LoadBalancerNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'LoadBalancerNames.member',
                    'minItems' => 1,
                    'maxItems' => 20,
                    'items' => [
                        'name' => 'AccessPointName',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
            ],
        ],
        'DetachLoadBalancerFromSubnets' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DetachLoadBalancerFromSubnetsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DetachLoadBalancerFromSubnets',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Subnets' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Subnets.member',
                    'items' => [
                        'name' => 'SubnetId',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
            ],
        ],
        'DisableAvailabilityZonesForLoadBalancer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'RemoveAvailabilityZonesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DisableAvailabilityZonesForLoadBalancer',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AvailabilityZones' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AvailabilityZones.member',
                    'items' => [
                        'name' => 'AvailabilityZone',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
            ],
        ],
        'EnableAvailabilityZonesForLoadBalancer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AddAvailabilityZonesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'EnableAvailabilityZonesForLoadBalancer',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AvailabilityZones' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AvailabilityZones.member',
                    'items' => [
                        'name' => 'AvailabilityZone',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
            ],
        ],
        'ModifyLoadBalancerAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ModifyLoadBalancerAttributesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyLoadBalancerAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'LoadBalancerAttributes' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'CrossZoneLoadBalancing' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'required' => true,
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                        'AccessLog' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'required' => true,
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'S3BucketName' => [
                                    'type' => 'string',
                                ],
                                'EmitInterval' => [
                                    'type' => 'numeric',
                                ],
                                'S3BucketPrefix' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'ConnectionDraining' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'required' => true,
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'Timeout' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'ConnectionSettings' => [
                            'type' => 'object',
                            'properties' => [
                                'IdleTimeout' => [
                                    'required' => true,
                                    'type' => 'numeric',
                                    'minimum' => 1,
                                    'maximum' => 3600,
                                ],
                            ],
                        ],
                        'AdditionalAttributes' => [
                            'type' => 'array',
                            'sentAs' => 'AdditionalAttributes.member',
                            'items' => [
                                'name' => 'AdditionalAttribute',
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
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified load balancer attribute could not be found.',
                    'class' => 'LoadBalancerAttributeNotFoundException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
            ],
        ],
        'RegisterInstancesWithLoadBalancer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'RegisterEndPointsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RegisterInstancesWithLoadBalancer',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Instances' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Instances.member',
                    'items' => [
                        'name' => 'Instance',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' => 'The specified EndPoint is not valid.',
                    'class' => 'InvalidEndPointException',
                ],
            ],
        ],
        'RemoveTags' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RemoveTags',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'LoadBalancerNames.member',
                    'items' => [
                        'name' => 'AccessPointName',
                        'type' => 'string',
                    ],
                ],
                'Tags' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Tags.member',
                    'minItems' => 1,
                    'items' => [
                        'name' => 'TagKeyOnly',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
            ],
        ],
        'SetLoadBalancerListenerSSLCertificate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetLoadBalancerListenerSSLCertificate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'LoadBalancerPort' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'SSLCertificateId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified SSL ID does not refer to a valid SSL certificate in the AWS Identity and Access Management Service.',
                    'class' => 'CertificateNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' =>
                        'Load balancer does not have a listener configured at the given port.',
                    'class' => 'ListenerNotFoundException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
            ],
        ],
        'SetLoadBalancerPoliciesForBackendServer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetLoadBalancerPoliciesForBackendServer',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'InstancePort' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'PolicyNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PolicyNames.member',
                    'items' => [
                        'name' => 'PolicyName',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' =>
                        'One or more specified policies were not found.',
                    'class' => 'PolicyNotFoundException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
            ],
        ],
        'SetLoadBalancerPoliciesOfListener' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetLoadBalancerPoliciesOfListener',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-06-01',
                ],
                'LoadBalancerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'LoadBalancerPort' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'PolicyNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PolicyNames.member',
                    'items' => [
                        'name' => 'PolicyName',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified load balancer could not be found.',
                    'class' => 'AccessPointNotFoundException',
                ],
                [
                    'reason' =>
                        'One or more specified policies were not found.',
                    'class' => 'PolicyNotFoundException',
                ],
                [
                    'reason' =>
                        'Load balancer does not have a listener configured at the given port.',
                    'class' => 'ListenerNotFoundException',
                ],
                [
                    'reason' => 'Requested configuration change is invalid.',
                    'class' => 'InvalidConfigurationRequestException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'ApplySecurityGroupsToLoadBalancerOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SecurityGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'SecurityGroupId',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
            ],
        ],
        'AttachLoadBalancerToSubnetsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Subnets' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'SubnetId',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
            ],
        ],
        'ConfigureHealthCheckOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HealthCheck' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Target' => [
                            'type' => 'string',
                        ],
                        'Interval' => [
                            'type' => 'numeric',
                        ],
                        'Timeout' => [
                            'type' => 'numeric',
                        ],
                        'UnhealthyThreshold' => [
                            'type' => 'numeric',
                        ],
                        'HealthyThreshold' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'CreateAccessPointOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DNSName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'DeregisterEndPointsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Instances' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Instance',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeEndPointStateOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceStates' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'InstanceState',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                            'State' => [
                                'type' => 'string',
                            ],
                            'ReasonCode' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeLoadBalancerAttributesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LoadBalancerAttributes' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CrossZoneLoadBalancing' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                        'AccessLog' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'S3BucketName' => [
                                    'type' => 'string',
                                ],
                                'EmitInterval' => [
                                    'type' => 'numeric',
                                ],
                                'S3BucketPrefix' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'ConnectionDraining' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'Timeout' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'ConnectionSettings' => [
                            'type' => 'object',
                            'properties' => [
                                'IdleTimeout' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'AdditionalAttributes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'AdditionalAttribute',
                                'type' => 'object',
                                'sentAs' => 'member',
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
            ],
        ],
        'DescribeLoadBalancerPoliciesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PolicyDescriptions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'PolicyDescription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'PolicyName' => [
                                'type' => 'string',
                            ],
                            'PolicyTypeName' => [
                                'type' => 'string',
                            ],
                            'PolicyAttributeDescriptions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PolicyAttributeDescription',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'AttributeName' => [
                                            'type' => 'string',
                                        ],
                                        'AttributeValue' => [
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
        'DescribeLoadBalancerPolicyTypesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PolicyTypeDescriptions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'PolicyTypeDescription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'PolicyTypeName' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'PolicyAttributeTypeDescriptions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PolicyAttributeTypeDescription',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'AttributeName' => [
                                            'type' => 'string',
                                        ],
                                        'AttributeType' => [
                                            'type' => 'string',
                                        ],
                                        'Description' => [
                                            'type' => 'string',
                                        ],
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'Cardinality' => [
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
        'DescribeAccessPointsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LoadBalancerDescriptions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'LoadBalancerDescription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'LoadBalancerName' => [
                                'type' => 'string',
                            ],
                            'DNSName' => [
                                'type' => 'string',
                            ],
                            'CanonicalHostedZoneName' => [
                                'type' => 'string',
                            ],
                            'CanonicalHostedZoneNameID' => [
                                'type' => 'string',
                            ],
                            'ListenerDescriptions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ListenerDescription',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'Listener' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Protocol' => [
                                                    'type' => 'string',
                                                ],
                                                'LoadBalancerPort' => [
                                                    'type' => 'numeric',
                                                ],
                                                'InstanceProtocol' => [
                                                    'type' => 'string',
                                                ],
                                                'InstancePort' => [
                                                    'type' => 'numeric',
                                                ],
                                                'SSLCertificateId' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'PolicyNames' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'PolicyName',
                                                'type' => 'string',
                                                'sentAs' => 'member',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Policies' => [
                                'type' => 'object',
                                'properties' => [
                                    'AppCookieStickinessPolicies' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' =>
                                                'AppCookieStickinessPolicy',
                                            'type' => 'object',
                                            'sentAs' => 'member',
                                            'properties' => [
                                                'PolicyName' => [
                                                    'type' => 'string',
                                                ],
                                                'CookieName' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'LBCookieStickinessPolicies' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' =>
                                                'LBCookieStickinessPolicy',
                                            'type' => 'object',
                                            'sentAs' => 'member',
                                            'properties' => [
                                                'PolicyName' => [
                                                    'type' => 'string',
                                                ],
                                                'CookieExpirationPeriod' => [
                                                    'type' => 'numeric',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'OtherPolicies' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'PolicyName',
                                            'type' => 'string',
                                            'sentAs' => 'member',
                                        ],
                                    ],
                                ],
                            ],
                            'BackendServerDescriptions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'BackendServerDescription',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'InstancePort' => [
                                            'type' => 'numeric',
                                        ],
                                        'PolicyNames' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'PolicyName',
                                                'type' => 'string',
                                                'sentAs' => 'member',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'AvailabilityZones' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'AvailabilityZone',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'Subnets' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'SubnetId',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'VPCId' => [
                                'type' => 'string',
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
                                    ],
                                ],
                            ],
                            'HealthCheck' => [
                                'type' => 'object',
                                'properties' => [
                                    'Target' => [
                                        'type' => 'string',
                                    ],
                                    'Interval' => [
                                        'type' => 'numeric',
                                    ],
                                    'Timeout' => [
                                        'type' => 'numeric',
                                    ],
                                    'UnhealthyThreshold' => [
                                        'type' => 'numeric',
                                    ],
                                    'HealthyThreshold' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'SourceSecurityGroup' => [
                                'type' => 'object',
                                'properties' => [
                                    'OwnerAlias' => [
                                        'type' => 'string',
                                    ],
                                    'GroupName' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'SecurityGroups' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'SecurityGroupId',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'CreatedTime' => [
                                'type' => 'string',
                            ],
                            'Scheme' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'DescribeTagsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TagDescriptions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'TagDescription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'LoadBalancerName' => [
                                'type' => 'string',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Tag',
                                    'type' => 'object',
                                    'sentAs' => 'member',
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
                ],
            ],
        ],
        'DetachLoadBalancerFromSubnetsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Subnets' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'SubnetId',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
            ],
        ],
        'RemoveAvailabilityZonesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AvailabilityZones' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'AvailabilityZone',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
            ],
        ],
        'AddAvailabilityZonesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AvailabilityZones' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'AvailabilityZone',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
            ],
        ],
        'ModifyLoadBalancerAttributesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LoadBalancerName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LoadBalancerAttributes' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CrossZoneLoadBalancing' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                        'AccessLog' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'S3BucketName' => [
                                    'type' => 'string',
                                ],
                                'EmitInterval' => [
                                    'type' => 'numeric',
                                ],
                                'S3BucketPrefix' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'ConnectionDraining' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'Timeout' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'ConnectionSettings' => [
                            'type' => 'object',
                            'properties' => [
                                'IdleTimeout' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'AdditionalAttributes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'AdditionalAttribute',
                                'type' => 'object',
                                'sentAs' => 'member',
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
            ],
        ],
        'RegisterEndPointsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Instances' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Instance',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'iterators' => [
        'DescribeInstanceHealth' => [
            'result_key' => 'InstanceStates',
        ],
        'DescribeLoadBalancerPolicies' => [
            'result_key' => 'PolicyDescriptions',
        ],
        'DescribeLoadBalancerPolicyTypes' => [
            'result_key' => 'PolicyTypeDescriptions',
        ],
        'DescribeLoadBalancers' => [
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'result_key' => 'LoadBalancerDescriptions',
        ],
        'DescribeTags' => [
            'result_key' => 'TagDescriptions',
        ],
    ],
];
