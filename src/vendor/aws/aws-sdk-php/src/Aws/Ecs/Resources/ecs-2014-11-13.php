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
    'apiVersion' => '2014-11-13',
    'endpointPrefix' => 'ecs',
    'serviceFullName' => 'Amazon EC2 Container Service',
    'serviceAbbreviation' => 'Amazon ECS',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'AmazonEC2ContainerServiceV20141113.',
    'signatureVersion' => 'v4',
    'namespace' => 'Ecs',
    'operations' => [
        'CreateCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateClusterResponse',
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
                        'AmazonEC2ContainerServiceV20141113.CreateCluster',
                ],
                'clusterName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
            ],
        ],
        'CreateService' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateServiceResponse',
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
                        'AmazonEC2ContainerServiceV20141113.CreateService',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'serviceName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'taskDefinition' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'loadBalancers' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'LoadBalancer',
                        'type' => 'object',
                        'properties' => [
                            'loadBalancerName' => [
                                'type' => 'string',
                            ],
                            'containerName' => [
                                'type' => 'string',
                            ],
                            'containerPort' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'desiredCount' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'clientToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'role' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
            ],
        ],
        'DeleteCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteClusterResponse',
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
                        'AmazonEC2ContainerServiceV20141113.DeleteCluster',
                ],
                'cluster' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'You cannot delete a cluster that has registered container instances. You must first deregister the container instances before you can delete the cluster. For more information, see DeregisterContainerInstance.',
                    'class' => 'ClusterContainsContainerInstancesException',
                ],
                [
                    'reason' =>
                        'You cannot delete a cluster that contains services. You must first update the service to reduce its desired task count to 0 and then delete the service. For more information, see UpdateService and DeleteService.',
                    'class' => 'ClusterContainsServicesException',
                ],
            ],
        ],
        'DeleteService' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteServiceResponse',
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
                        'AmazonEC2ContainerServiceV20141113.DeleteService',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'service' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified service could not be found. You can view your available services with ListServices. Amazon ECS services are cluster-specific and region-specific.',
                    'class' => 'ServiceNotFoundException',
                ],
            ],
        ],
        'DeregisterContainerInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeregisterContainerInstanceResponse',
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
                        'AmazonEC2ContainerServiceV20141113.DeregisterContainerInstance',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'containerInstance' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'force' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
            ],
        ],
        'DeregisterTaskDefinition' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeregisterTaskDefinitionResponse',
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
                        'AmazonEC2ContainerServiceV20141113.DeregisterTaskDefinition',
                ],
                'taskDefinition' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
            ],
        ],
        'DescribeClusters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeClustersResponse',
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
                        'AmazonEC2ContainerServiceV20141113.DescribeClusters',
                ],
                'clusters' => [
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
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
            ],
        ],
        'DescribeContainerInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeContainerInstancesResponse',
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
                        'AmazonEC2ContainerServiceV20141113.DescribeContainerInstances',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'containerInstances' => [
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
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
            ],
        ],
        'DescribeServices' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeServicesResponse',
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
                        'AmazonEC2ContainerServiceV20141113.DescribeServices',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'services' => [
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
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
            ],
        ],
        'DescribeTaskDefinition' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeTaskDefinitionResponse',
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
                        'AmazonEC2ContainerServiceV20141113.DescribeTaskDefinition',
                ],
                'taskDefinition' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
            ],
        ],
        'DescribeTasks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeTasksResponse',
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
                        'AmazonEC2ContainerServiceV20141113.DescribeTasks',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'tasks' => [
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
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
            ],
        ],
        'DiscoverPollEndpoint' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DiscoverPollEndpointResponse',
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
                        'AmazonEC2ContainerServiceV20141113.DiscoverPollEndpoint',
                ],
                'containerInstance' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
            ],
        ],
        'ListClusters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListClustersResponse',
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
                        'AmazonEC2ContainerServiceV20141113.ListClusters',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
            ],
        ],
        'ListContainerInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListContainerInstancesResponse',
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
                        'AmazonEC2ContainerServiceV20141113.ListContainerInstances',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
            ],
        ],
        'ListServices' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListServicesResponse',
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
                        'AmazonEC2ContainerServiceV20141113.ListServices',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
            ],
        ],
        'ListTaskDefinitionFamilies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListTaskDefinitionFamiliesResponse',
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
                        'AmazonEC2ContainerServiceV20141113.ListTaskDefinitionFamilies',
                ],
                'familyPrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
            ],
        ],
        'ListTaskDefinitions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListTaskDefinitionsResponse',
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
                        'AmazonEC2ContainerServiceV20141113.ListTaskDefinitions',
                ],
                'familyPrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'sort' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
            ],
        ],
        'ListTasks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListTasksResponse',
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
                    'default' => 'AmazonEC2ContainerServiceV20141113.ListTasks',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'containerInstance' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'family' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'startedBy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'serviceName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'desiredStatus' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified service could not be found. You can view your available services with ListServices. Amazon ECS services are cluster-specific and region-specific.',
                    'class' => 'ServiceNotFoundException',
                ],
            ],
        ],
        'RegisterContainerInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RegisterContainerInstanceResponse',
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
                        'AmazonEC2ContainerServiceV20141113.RegisterContainerInstance',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'instanceIdentityDocument' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'instanceIdentityDocumentSignature' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'totalResources' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Resource',
                        'type' => 'object',
                        'properties' => [
                            '' => [
                                'type' => 'object',
                            ],
                        ],
                    ],
                ],
                'versionInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'agentVersion' => [
                            'type' => 'string',
                        ],
                        'agentHash' => [
                            'type' => 'string',
                        ],
                        'dockerVersion' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'containerInstanceArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'attributes' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Attribute',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
            ],
        ],
        'RegisterTaskDefinition' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RegisterTaskDefinitionResponse',
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
                        'AmazonEC2ContainerServiceV20141113.RegisterTaskDefinition',
                ],
                'family' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'containerDefinitions' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ContainerDefinition',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            'image' => [
                                'type' => 'string',
                            ],
                            'cpu' => [
                                'type' => 'numeric',
                            ],
                            'memory' => [
                                'type' => 'numeric',
                            ],
                            'links' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'portMappings' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PortMapping',
                                    'type' => 'object',
                                    'properties' => [
                                        'containerPort' => [
                                            'type' => 'numeric',
                                        ],
                                        'hostPort' => [
                                            'type' => 'numeric',
                                        ],
                                        'protocol' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'essential' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                            'entryPoint' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'command' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'environment' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'KeyValuePair',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'value' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'mountPoints' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'MountPoint',
                                    'type' => 'object',
                                    'properties' => [
                                        'sourceVolume' => [
                                            'type' => 'string',
                                        ],
                                        'containerPath' => [
                                            'type' => 'string',
                                        ],
                                        'readOnly' => [
                                            'type' => 'boolean',
                                            'format' => 'boolean-string',
                                        ],
                                    ],
                                ],
                            ],
                            'volumesFrom' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'VolumeFrom',
                                    'type' => 'object',
                                    'properties' => [
                                        'sourceContainer' => [
                                            'type' => 'string',
                                        ],
                                        'readOnly' => [
                                            'type' => 'boolean',
                                            'format' => 'boolean-string',
                                        ],
                                    ],
                                ],
                            ],
                            'hostname' => [
                                'type' => 'string',
                            ],
                            'user' => [
                                'type' => 'string',
                            ],
                            'workingDirectory' => [
                                'type' => 'string',
                            ],
                            'disableNetworking' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                            'privileged' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                            'readonlyRootFilesystem' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                            'dnsServers' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'dnsSearchDomains' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'extraHosts' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'HostEntry',
                                    'type' => 'object',
                                    'properties' => [
                                        'hostname' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                        'ipAddress' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'dockerSecurityOptions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                            'dockerLabels' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'data' => [
                                        'shape_name' => 'String',
                                    ],
                                ],
                            ],
                            'ulimits' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Ulimit',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                        'softLimit' => [
                                            'required' => true,
                                            'type' => 'numeric',
                                        ],
                                        'hardLimit' => [
                                            'required' => true,
                                            'type' => 'numeric',
                                        ],
                                    ],
                                ],
                            ],
                            'logConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'logDriver' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'options' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                            'data' => [
                                                'shape_name' => 'String',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'volumes' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Volume',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            'host' => [
                                'type' => 'object',
                                'properties' => [
                                    'sourcePath' => [
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
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
            ],
        ],
        'RunTask' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RunTaskResponse',
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
                    'default' => 'AmazonEC2ContainerServiceV20141113.RunTask',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'taskDefinition' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'overrides' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'containerOverrides' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ContainerOverride',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'command' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'environment' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'KeyValuePair',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'value' => [
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
                'count' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'startedBy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
            ],
        ],
        'StartTask' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'StartTaskResponse',
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
                    'default' => 'AmazonEC2ContainerServiceV20141113.StartTask',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'taskDefinition' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'overrides' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'containerOverrides' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ContainerOverride',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'command' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'environment' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'KeyValuePair',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'value' => [
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
                'containerInstances' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'startedBy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
            ],
        ],
        'StopTask' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'StopTaskResponse',
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
                    'default' => 'AmazonEC2ContainerServiceV20141113.StopTask',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'task' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
            ],
        ],
        'SubmitContainerStateChange' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'SubmitContainerStateChangeResponse',
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
                        'AmazonEC2ContainerServiceV20141113.SubmitContainerStateChange',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'task' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'containerName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'exitCode' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'reason' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'networkBindings' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'NetworkBinding',
                        'type' => 'object',
                        'properties' => [
                            'bindIP' => [
                                'type' => 'string',
                            ],
                            'containerPort' => [
                                'type' => 'numeric',
                            ],
                            'hostPort' => [
                                'type' => 'numeric',
                            ],
                            'protocol' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
            ],
        ],
        'SubmitTaskStateChange' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'SubmitTaskStateChangeResponse',
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
                        'AmazonEC2ContainerServiceV20141113.SubmitTaskStateChange',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'task' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'reason' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
            ],
        ],
        'UpdateContainerAgent' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateContainerAgentResponse',
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
                        'AmazonEC2ContainerServiceV20141113.UpdateContainerAgent',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'containerInstance' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'There is already a current Amazon ECS container agent update in progress on the specified container instance. If the container agent becomes disconnected while it is in a transitional stage, such as PENDING or STAGING, the update process can get stuck in that state. However, when the agent reconnects, it resumes where it stopped previously.',
                    'class' => 'UpdateInProgressException',
                ],
                [
                    'reason' =>
                        'There is no update available for this Amazon ECS container agent. This could be because the agent is already running the latest version, or it is so old that there is no update path to the current version.',
                    'class' => 'NoUpdateAvailableException',
                ],
                [
                    'reason' =>
                        'Amazon ECS is unable to determine the current version of the Amazon ECS container agent on the container instance and does not have enough information to proceed with an update. This could be because the agent running on the container instance is an older or custom version that does not use our version information.',
                    'class' => 'MissingVersionException',
                ],
            ],
        ],
        'UpdateService' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateServiceResponse',
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
                        'AmazonEC2ContainerServiceV20141113.UpdateService',
                ],
                'cluster' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'service' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'desiredCount' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'taskDefinition' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'These errors are usually caused by a server issue.',
                    'class' => 'ServerException',
                ],
                [
                    'reason' =>
                        'These errors are usually caused by a client action, such as using an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specifying an identifier that is not valid.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'The specified parameter is invalid. Review the available parameters for the API request.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The specified cluster could not be found. You can view your available clusters with ListClusters. Amazon ECS clusters are region-specific.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified service could not be found. You can view your available services with ListServices. Amazon ECS services are cluster-specific and region-specific.',
                    'class' => 'ServiceNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified service is not active. You cannot update a service that is not active. If you have previously deleted a service, you can re-create it with CreateService.',
                    'class' => 'ServiceNotActiveException',
                ],
            ],
        ],
    ],
    'models' => [
        'CreateClusterResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'cluster' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'clusterArn' => [
                            'type' => 'string',
                        ],
                        'clusterName' => [
                            'type' => 'string',
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'registeredContainerInstancesCount' => [
                            'type' => 'numeric',
                        ],
                        'runningTasksCount' => [
                            'type' => 'numeric',
                        ],
                        'pendingTasksCount' => [
                            'type' => 'numeric',
                        ],
                        'activeServicesCount' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'CreateServiceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'service' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'serviceArn' => [
                            'type' => 'string',
                        ],
                        'serviceName' => [
                            'type' => 'string',
                        ],
                        'clusterArn' => [
                            'type' => 'string',
                        ],
                        'loadBalancers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'LoadBalancer',
                                'type' => 'object',
                                'properties' => [
                                    'loadBalancerName' => [
                                        'type' => 'string',
                                    ],
                                    'containerName' => [
                                        'type' => 'string',
                                    ],
                                    'containerPort' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'desiredCount' => [
                            'type' => 'numeric',
                        ],
                        'runningCount' => [
                            'type' => 'numeric',
                        ],
                        'pendingCount' => [
                            'type' => 'numeric',
                        ],
                        'taskDefinition' => [
                            'type' => 'string',
                        ],
                        'deployments' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Deployment',
                                'type' => 'object',
                                'properties' => [
                                    'id' => [
                                        'type' => 'string',
                                    ],
                                    'status' => [
                                        'type' => 'string',
                                    ],
                                    'taskDefinition' => [
                                        'type' => 'string',
                                    ],
                                    'desiredCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'pendingCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'runningCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'createdAt' => [
                                        'type' => 'string',
                                    ],
                                    'updatedAt' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'roleArn' => [
                            'type' => 'string',
                        ],
                        'events' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ServiceEvent',
                                'type' => 'object',
                                'properties' => [
                                    'id' => [
                                        'type' => 'string',
                                    ],
                                    'createdAt' => [
                                        'type' => 'string',
                                    ],
                                    'message' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteClusterResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'cluster' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'clusterArn' => [
                            'type' => 'string',
                        ],
                        'clusterName' => [
                            'type' => 'string',
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'registeredContainerInstancesCount' => [
                            'type' => 'numeric',
                        ],
                        'runningTasksCount' => [
                            'type' => 'numeric',
                        ],
                        'pendingTasksCount' => [
                            'type' => 'numeric',
                        ],
                        'activeServicesCount' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'DeleteServiceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'service' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'serviceArn' => [
                            'type' => 'string',
                        ],
                        'serviceName' => [
                            'type' => 'string',
                        ],
                        'clusterArn' => [
                            'type' => 'string',
                        ],
                        'loadBalancers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'LoadBalancer',
                                'type' => 'object',
                                'properties' => [
                                    'loadBalancerName' => [
                                        'type' => 'string',
                                    ],
                                    'containerName' => [
                                        'type' => 'string',
                                    ],
                                    'containerPort' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'desiredCount' => [
                            'type' => 'numeric',
                        ],
                        'runningCount' => [
                            'type' => 'numeric',
                        ],
                        'pendingCount' => [
                            'type' => 'numeric',
                        ],
                        'taskDefinition' => [
                            'type' => 'string',
                        ],
                        'deployments' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Deployment',
                                'type' => 'object',
                                'properties' => [
                                    'id' => [
                                        'type' => 'string',
                                    ],
                                    'status' => [
                                        'type' => 'string',
                                    ],
                                    'taskDefinition' => [
                                        'type' => 'string',
                                    ],
                                    'desiredCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'pendingCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'runningCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'createdAt' => [
                                        'type' => 'string',
                                    ],
                                    'updatedAt' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'roleArn' => [
                            'type' => 'string',
                        ],
                        'events' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ServiceEvent',
                                'type' => 'object',
                                'properties' => [
                                    'id' => [
                                        'type' => 'string',
                                    ],
                                    'createdAt' => [
                                        'type' => 'string',
                                    ],
                                    'message' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeregisterContainerInstanceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'containerInstance' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'containerInstanceArn' => [
                            'type' => 'string',
                        ],
                        'ec2InstanceId' => [
                            'type' => 'string',
                        ],
                        'versionInfo' => [
                            'type' => 'object',
                            'properties' => [
                                'agentVersion' => [
                                    'type' => 'string',
                                ],
                                'agentHash' => [
                                    'type' => 'string',
                                ],
                                'dockerVersion' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'remainingResources' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Resource',
                                'type' => 'object',
                                'properties' => [
                                    '' => [
                                        'type' => 'object',
                                    ],
                                ],
                            ],
                        ],
                        'registeredResources' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Resource',
                                'type' => 'object',
                                'properties' => [
                                    '' => [
                                        'type' => 'object',
                                    ],
                                ],
                            ],
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'agentConnected' => [
                            'type' => 'boolean',
                        ],
                        'runningTasksCount' => [
                            'type' => 'numeric',
                        ],
                        'pendingTasksCount' => [
                            'type' => 'numeric',
                        ],
                        'agentUpdateStatus' => [
                            'type' => 'string',
                        ],
                        'attributes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Attribute',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'value' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeregisterTaskDefinitionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'taskDefinition' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'taskDefinitionArn' => [
                            'type' => 'string',
                        ],
                        'containerDefinitions' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ContainerDefinition',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'image' => [
                                        'type' => 'string',
                                    ],
                                    'cpu' => [
                                        'type' => 'numeric',
                                    ],
                                    'memory' => [
                                        'type' => 'numeric',
                                    ],
                                    'links' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'portMappings' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'PortMapping',
                                            'type' => 'object',
                                            'properties' => [
                                                'containerPort' => [
                                                    'type' => 'numeric',
                                                ],
                                                'hostPort' => [
                                                    'type' => 'numeric',
                                                ],
                                                'protocol' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'essential' => [
                                        'type' => 'boolean',
                                    ],
                                    'entryPoint' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'command' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'environment' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'KeyValuePair',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'value' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'mountPoints' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'MountPoint',
                                            'type' => 'object',
                                            'properties' => [
                                                'sourceVolume' => [
                                                    'type' => 'string',
                                                ],
                                                'containerPath' => [
                                                    'type' => 'string',
                                                ],
                                                'readOnly' => [
                                                    'type' => 'boolean',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'volumesFrom' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'VolumeFrom',
                                            'type' => 'object',
                                            'properties' => [
                                                'sourceContainer' => [
                                                    'type' => 'string',
                                                ],
                                                'readOnly' => [
                                                    'type' => 'boolean',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'hostname' => [
                                        'type' => 'string',
                                    ],
                                    'user' => [
                                        'type' => 'string',
                                    ],
                                    'workingDirectory' => [
                                        'type' => 'string',
                                    ],
                                    'disableNetworking' => [
                                        'type' => 'boolean',
                                    ],
                                    'privileged' => [
                                        'type' => 'boolean',
                                    ],
                                    'readonlyRootFilesystem' => [
                                        'type' => 'boolean',
                                    ],
                                    'dnsServers' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'dnsSearchDomains' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'extraHosts' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'HostEntry',
                                            'type' => 'object',
                                            'properties' => [
                                                'hostname' => [
                                                    'type' => 'string',
                                                ],
                                                'ipAddress' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'dockerSecurityOptions' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'dockerLabels' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'ulimits' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Ulimit',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'softLimit' => [
                                                    'type' => 'numeric',
                                                ],
                                                'hardLimit' => [
                                                    'type' => 'numeric',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'logConfiguration' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'logDriver' => [
                                                'type' => 'string',
                                            ],
                                            'options' => [
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
                        'family' => [
                            'type' => 'string',
                        ],
                        'revision' => [
                            'type' => 'numeric',
                        ],
                        'volumes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Volume',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'host' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'sourcePath' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'requiresAttributes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Attribute',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'value' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeClustersResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'clusters' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Cluster',
                        'type' => 'object',
                        'properties' => [
                            'clusterArn' => [
                                'type' => 'string',
                            ],
                            'clusterName' => [
                                'type' => 'string',
                            ],
                            'status' => [
                                'type' => 'string',
                            ],
                            'registeredContainerInstancesCount' => [
                                'type' => 'numeric',
                            ],
                            'runningTasksCount' => [
                                'type' => 'numeric',
                            ],
                            'pendingTasksCount' => [
                                'type' => 'numeric',
                            ],
                            'activeServicesCount' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'failures' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Failure',
                        'type' => 'object',
                        'properties' => [
                            'arn' => [
                                'type' => 'string',
                            ],
                            'reason' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeContainerInstancesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'containerInstances' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ContainerInstance',
                        'type' => 'object',
                        'properties' => [
                            'containerInstanceArn' => [
                                'type' => 'string',
                            ],
                            'ec2InstanceId' => [
                                'type' => 'string',
                            ],
                            'versionInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'agentVersion' => [
                                        'type' => 'string',
                                    ],
                                    'agentHash' => [
                                        'type' => 'string',
                                    ],
                                    'dockerVersion' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'remainingResources' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Resource',
                                    'type' => 'object',
                                    'properties' => [
                                        '' => [
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                            'registeredResources' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Resource',
                                    'type' => 'object',
                                    'properties' => [
                                        '' => [
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                            'status' => [
                                'type' => 'string',
                            ],
                            'agentConnected' => [
                                'type' => 'boolean',
                            ],
                            'runningTasksCount' => [
                                'type' => 'numeric',
                            ],
                            'pendingTasksCount' => [
                                'type' => 'numeric',
                            ],
                            'agentUpdateStatus' => [
                                'type' => 'string',
                            ],
                            'attributes' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Attribute',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'value' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'failures' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Failure',
                        'type' => 'object',
                        'properties' => [
                            'arn' => [
                                'type' => 'string',
                            ],
                            'reason' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeServicesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'services' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Service',
                        'type' => 'object',
                        'properties' => [
                            'serviceArn' => [
                                'type' => 'string',
                            ],
                            'serviceName' => [
                                'type' => 'string',
                            ],
                            'clusterArn' => [
                                'type' => 'string',
                            ],
                            'loadBalancers' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'LoadBalancer',
                                    'type' => 'object',
                                    'properties' => [
                                        'loadBalancerName' => [
                                            'type' => 'string',
                                        ],
                                        'containerName' => [
                                            'type' => 'string',
                                        ],
                                        'containerPort' => [
                                            'type' => 'numeric',
                                        ],
                                    ],
                                ],
                            ],
                            'status' => [
                                'type' => 'string',
                            ],
                            'desiredCount' => [
                                'type' => 'numeric',
                            ],
                            'runningCount' => [
                                'type' => 'numeric',
                            ],
                            'pendingCount' => [
                                'type' => 'numeric',
                            ],
                            'taskDefinition' => [
                                'type' => 'string',
                            ],
                            'deployments' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Deployment',
                                    'type' => 'object',
                                    'properties' => [
                                        'id' => [
                                            'type' => 'string',
                                        ],
                                        'status' => [
                                            'type' => 'string',
                                        ],
                                        'taskDefinition' => [
                                            'type' => 'string',
                                        ],
                                        'desiredCount' => [
                                            'type' => 'numeric',
                                        ],
                                        'pendingCount' => [
                                            'type' => 'numeric',
                                        ],
                                        'runningCount' => [
                                            'type' => 'numeric',
                                        ],
                                        'createdAt' => [
                                            'type' => 'string',
                                        ],
                                        'updatedAt' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'roleArn' => [
                                'type' => 'string',
                            ],
                            'events' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ServiceEvent',
                                    'type' => 'object',
                                    'properties' => [
                                        'id' => [
                                            'type' => 'string',
                                        ],
                                        'createdAt' => [
                                            'type' => 'string',
                                        ],
                                        'message' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'failures' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Failure',
                        'type' => 'object',
                        'properties' => [
                            'arn' => [
                                'type' => 'string',
                            ],
                            'reason' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeTaskDefinitionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'taskDefinition' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'taskDefinitionArn' => [
                            'type' => 'string',
                        ],
                        'containerDefinitions' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ContainerDefinition',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'image' => [
                                        'type' => 'string',
                                    ],
                                    'cpu' => [
                                        'type' => 'numeric',
                                    ],
                                    'memory' => [
                                        'type' => 'numeric',
                                    ],
                                    'links' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'portMappings' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'PortMapping',
                                            'type' => 'object',
                                            'properties' => [
                                                'containerPort' => [
                                                    'type' => 'numeric',
                                                ],
                                                'hostPort' => [
                                                    'type' => 'numeric',
                                                ],
                                                'protocol' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'essential' => [
                                        'type' => 'boolean',
                                    ],
                                    'entryPoint' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'command' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'environment' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'KeyValuePair',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'value' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'mountPoints' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'MountPoint',
                                            'type' => 'object',
                                            'properties' => [
                                                'sourceVolume' => [
                                                    'type' => 'string',
                                                ],
                                                'containerPath' => [
                                                    'type' => 'string',
                                                ],
                                                'readOnly' => [
                                                    'type' => 'boolean',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'volumesFrom' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'VolumeFrom',
                                            'type' => 'object',
                                            'properties' => [
                                                'sourceContainer' => [
                                                    'type' => 'string',
                                                ],
                                                'readOnly' => [
                                                    'type' => 'boolean',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'hostname' => [
                                        'type' => 'string',
                                    ],
                                    'user' => [
                                        'type' => 'string',
                                    ],
                                    'workingDirectory' => [
                                        'type' => 'string',
                                    ],
                                    'disableNetworking' => [
                                        'type' => 'boolean',
                                    ],
                                    'privileged' => [
                                        'type' => 'boolean',
                                    ],
                                    'readonlyRootFilesystem' => [
                                        'type' => 'boolean',
                                    ],
                                    'dnsServers' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'dnsSearchDomains' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'extraHosts' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'HostEntry',
                                            'type' => 'object',
                                            'properties' => [
                                                'hostname' => [
                                                    'type' => 'string',
                                                ],
                                                'ipAddress' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'dockerSecurityOptions' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'dockerLabels' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'ulimits' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Ulimit',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'softLimit' => [
                                                    'type' => 'numeric',
                                                ],
                                                'hardLimit' => [
                                                    'type' => 'numeric',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'logConfiguration' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'logDriver' => [
                                                'type' => 'string',
                                            ],
                                            'options' => [
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
                        'family' => [
                            'type' => 'string',
                        ],
                        'revision' => [
                            'type' => 'numeric',
                        ],
                        'volumes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Volume',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'host' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'sourcePath' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'requiresAttributes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Attribute',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'value' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeTasksResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'tasks' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Task',
                        'type' => 'object',
                        'properties' => [
                            'taskArn' => [
                                'type' => 'string',
                            ],
                            'clusterArn' => [
                                'type' => 'string',
                            ],
                            'taskDefinitionArn' => [
                                'type' => 'string',
                            ],
                            'containerInstanceArn' => [
                                'type' => 'string',
                            ],
                            'overrides' => [
                                'type' => 'object',
                                'properties' => [
                                    'containerOverrides' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'ContainerOverride',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'command' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'String',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'environment' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'KeyValuePair',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'value' => [
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
                            ],
                            'lastStatus' => [
                                'type' => 'string',
                            ],
                            'desiredStatus' => [
                                'type' => 'string',
                            ],
                            'containers' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Container',
                                    'type' => 'object',
                                    'properties' => [
                                        'containerArn' => [
                                            'type' => 'string',
                                        ],
                                        'taskArn' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'lastStatus' => [
                                            'type' => 'string',
                                        ],
                                        'exitCode' => [
                                            'type' => 'numeric',
                                        ],
                                        'reason' => [
                                            'type' => 'string',
                                        ],
                                        'networkBindings' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'NetworkBinding',
                                                'type' => 'object',
                                                'properties' => [
                                                    'bindIP' => [
                                                        'type' => 'string',
                                                    ],
                                                    'containerPort' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'hostPort' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'protocol' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'startedBy' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'failures' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Failure',
                        'type' => 'object',
                        'properties' => [
                            'arn' => [
                                'type' => 'string',
                            ],
                            'reason' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DiscoverPollEndpointResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'endpoint' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'telemetryEndpoint' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListClustersResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'clusterArns' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListContainerInstancesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'containerInstanceArns' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListServicesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'serviceArns' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListTaskDefinitionFamiliesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'families' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListTaskDefinitionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'taskDefinitionArns' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListTasksResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'taskArns' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'RegisterContainerInstanceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'containerInstance' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'containerInstanceArn' => [
                            'type' => 'string',
                        ],
                        'ec2InstanceId' => [
                            'type' => 'string',
                        ],
                        'versionInfo' => [
                            'type' => 'object',
                            'properties' => [
                                'agentVersion' => [
                                    'type' => 'string',
                                ],
                                'agentHash' => [
                                    'type' => 'string',
                                ],
                                'dockerVersion' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'remainingResources' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Resource',
                                'type' => 'object',
                                'properties' => [
                                    '' => [
                                        'type' => 'object',
                                    ],
                                ],
                            ],
                        ],
                        'registeredResources' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Resource',
                                'type' => 'object',
                                'properties' => [
                                    '' => [
                                        'type' => 'object',
                                    ],
                                ],
                            ],
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'agentConnected' => [
                            'type' => 'boolean',
                        ],
                        'runningTasksCount' => [
                            'type' => 'numeric',
                        ],
                        'pendingTasksCount' => [
                            'type' => 'numeric',
                        ],
                        'agentUpdateStatus' => [
                            'type' => 'string',
                        ],
                        'attributes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Attribute',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'value' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RegisterTaskDefinitionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'taskDefinition' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'taskDefinitionArn' => [
                            'type' => 'string',
                        ],
                        'containerDefinitions' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ContainerDefinition',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'image' => [
                                        'type' => 'string',
                                    ],
                                    'cpu' => [
                                        'type' => 'numeric',
                                    ],
                                    'memory' => [
                                        'type' => 'numeric',
                                    ],
                                    'links' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'portMappings' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'PortMapping',
                                            'type' => 'object',
                                            'properties' => [
                                                'containerPort' => [
                                                    'type' => 'numeric',
                                                ],
                                                'hostPort' => [
                                                    'type' => 'numeric',
                                                ],
                                                'protocol' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'essential' => [
                                        'type' => 'boolean',
                                    ],
                                    'entryPoint' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'command' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'environment' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'KeyValuePair',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'value' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'mountPoints' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'MountPoint',
                                            'type' => 'object',
                                            'properties' => [
                                                'sourceVolume' => [
                                                    'type' => 'string',
                                                ],
                                                'containerPath' => [
                                                    'type' => 'string',
                                                ],
                                                'readOnly' => [
                                                    'type' => 'boolean',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'volumesFrom' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'VolumeFrom',
                                            'type' => 'object',
                                            'properties' => [
                                                'sourceContainer' => [
                                                    'type' => 'string',
                                                ],
                                                'readOnly' => [
                                                    'type' => 'boolean',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'hostname' => [
                                        'type' => 'string',
                                    ],
                                    'user' => [
                                        'type' => 'string',
                                    ],
                                    'workingDirectory' => [
                                        'type' => 'string',
                                    ],
                                    'disableNetworking' => [
                                        'type' => 'boolean',
                                    ],
                                    'privileged' => [
                                        'type' => 'boolean',
                                    ],
                                    'readonlyRootFilesystem' => [
                                        'type' => 'boolean',
                                    ],
                                    'dnsServers' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'dnsSearchDomains' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'extraHosts' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'HostEntry',
                                            'type' => 'object',
                                            'properties' => [
                                                'hostname' => [
                                                    'type' => 'string',
                                                ],
                                                'ipAddress' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'dockerSecurityOptions' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'dockerLabels' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'ulimits' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Ulimit',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'softLimit' => [
                                                    'type' => 'numeric',
                                                ],
                                                'hardLimit' => [
                                                    'type' => 'numeric',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'logConfiguration' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'logDriver' => [
                                                'type' => 'string',
                                            ],
                                            'options' => [
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
                        'family' => [
                            'type' => 'string',
                        ],
                        'revision' => [
                            'type' => 'numeric',
                        ],
                        'volumes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Volume',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'host' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'sourcePath' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'requiresAttributes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Attribute',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'value' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RunTaskResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'tasks' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Task',
                        'type' => 'object',
                        'properties' => [
                            'taskArn' => [
                                'type' => 'string',
                            ],
                            'clusterArn' => [
                                'type' => 'string',
                            ],
                            'taskDefinitionArn' => [
                                'type' => 'string',
                            ],
                            'containerInstanceArn' => [
                                'type' => 'string',
                            ],
                            'overrides' => [
                                'type' => 'object',
                                'properties' => [
                                    'containerOverrides' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'ContainerOverride',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'command' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'String',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'environment' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'KeyValuePair',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'value' => [
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
                            ],
                            'lastStatus' => [
                                'type' => 'string',
                            ],
                            'desiredStatus' => [
                                'type' => 'string',
                            ],
                            'containers' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Container',
                                    'type' => 'object',
                                    'properties' => [
                                        'containerArn' => [
                                            'type' => 'string',
                                        ],
                                        'taskArn' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'lastStatus' => [
                                            'type' => 'string',
                                        ],
                                        'exitCode' => [
                                            'type' => 'numeric',
                                        ],
                                        'reason' => [
                                            'type' => 'string',
                                        ],
                                        'networkBindings' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'NetworkBinding',
                                                'type' => 'object',
                                                'properties' => [
                                                    'bindIP' => [
                                                        'type' => 'string',
                                                    ],
                                                    'containerPort' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'hostPort' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'protocol' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'startedBy' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'failures' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Failure',
                        'type' => 'object',
                        'properties' => [
                            'arn' => [
                                'type' => 'string',
                            ],
                            'reason' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartTaskResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'tasks' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Task',
                        'type' => 'object',
                        'properties' => [
                            'taskArn' => [
                                'type' => 'string',
                            ],
                            'clusterArn' => [
                                'type' => 'string',
                            ],
                            'taskDefinitionArn' => [
                                'type' => 'string',
                            ],
                            'containerInstanceArn' => [
                                'type' => 'string',
                            ],
                            'overrides' => [
                                'type' => 'object',
                                'properties' => [
                                    'containerOverrides' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'ContainerOverride',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'command' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'String',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'environment' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'KeyValuePair',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'value' => [
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
                            ],
                            'lastStatus' => [
                                'type' => 'string',
                            ],
                            'desiredStatus' => [
                                'type' => 'string',
                            ],
                            'containers' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Container',
                                    'type' => 'object',
                                    'properties' => [
                                        'containerArn' => [
                                            'type' => 'string',
                                        ],
                                        'taskArn' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'lastStatus' => [
                                            'type' => 'string',
                                        ],
                                        'exitCode' => [
                                            'type' => 'numeric',
                                        ],
                                        'reason' => [
                                            'type' => 'string',
                                        ],
                                        'networkBindings' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'NetworkBinding',
                                                'type' => 'object',
                                                'properties' => [
                                                    'bindIP' => [
                                                        'type' => 'string',
                                                    ],
                                                    'containerPort' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'hostPort' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'protocol' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'startedBy' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'failures' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Failure',
                        'type' => 'object',
                        'properties' => [
                            'arn' => [
                                'type' => 'string',
                            ],
                            'reason' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StopTaskResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'task' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'taskArn' => [
                            'type' => 'string',
                        ],
                        'clusterArn' => [
                            'type' => 'string',
                        ],
                        'taskDefinitionArn' => [
                            'type' => 'string',
                        ],
                        'containerInstanceArn' => [
                            'type' => 'string',
                        ],
                        'overrides' => [
                            'type' => 'object',
                            'properties' => [
                                'containerOverrides' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'ContainerOverride',
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'command' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'String',
                                                    'type' => 'string',
                                                ],
                                            ],
                                            'environment' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'KeyValuePair',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'name' => [
                                                            'type' => 'string',
                                                        ],
                                                        'value' => [
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
                        'lastStatus' => [
                            'type' => 'string',
                        ],
                        'desiredStatus' => [
                            'type' => 'string',
                        ],
                        'containers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Container',
                                'type' => 'object',
                                'properties' => [
                                    'containerArn' => [
                                        'type' => 'string',
                                    ],
                                    'taskArn' => [
                                        'type' => 'string',
                                    ],
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'lastStatus' => [
                                        'type' => 'string',
                                    ],
                                    'exitCode' => [
                                        'type' => 'numeric',
                                    ],
                                    'reason' => [
                                        'type' => 'string',
                                    ],
                                    'networkBindings' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'NetworkBinding',
                                            'type' => 'object',
                                            'properties' => [
                                                'bindIP' => [
                                                    'type' => 'string',
                                                ],
                                                'containerPort' => [
                                                    'type' => 'numeric',
                                                ],
                                                'hostPort' => [
                                                    'type' => 'numeric',
                                                ],
                                                'protocol' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'startedBy' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'SubmitContainerStateChangeResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'acknowledgment' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'SubmitTaskStateChangeResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'acknowledgment' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'UpdateContainerAgentResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'containerInstance' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'containerInstanceArn' => [
                            'type' => 'string',
                        ],
                        'ec2InstanceId' => [
                            'type' => 'string',
                        ],
                        'versionInfo' => [
                            'type' => 'object',
                            'properties' => [
                                'agentVersion' => [
                                    'type' => 'string',
                                ],
                                'agentHash' => [
                                    'type' => 'string',
                                ],
                                'dockerVersion' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'remainingResources' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Resource',
                                'type' => 'object',
                                'properties' => [
                                    '' => [
                                        'type' => 'object',
                                    ],
                                ],
                            ],
                        ],
                        'registeredResources' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Resource',
                                'type' => 'object',
                                'properties' => [
                                    '' => [
                                        'type' => 'object',
                                    ],
                                ],
                            ],
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'agentConnected' => [
                            'type' => 'boolean',
                        ],
                        'runningTasksCount' => [
                            'type' => 'numeric',
                        ],
                        'pendingTasksCount' => [
                            'type' => 'numeric',
                        ],
                        'agentUpdateStatus' => [
                            'type' => 'string',
                        ],
                        'attributes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Attribute',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'value' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateServiceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'service' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'serviceArn' => [
                            'type' => 'string',
                        ],
                        'serviceName' => [
                            'type' => 'string',
                        ],
                        'clusterArn' => [
                            'type' => 'string',
                        ],
                        'loadBalancers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'LoadBalancer',
                                'type' => 'object',
                                'properties' => [
                                    'loadBalancerName' => [
                                        'type' => 'string',
                                    ],
                                    'containerName' => [
                                        'type' => 'string',
                                    ],
                                    'containerPort' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'desiredCount' => [
                            'type' => 'numeric',
                        ],
                        'runningCount' => [
                            'type' => 'numeric',
                        ],
                        'pendingCount' => [
                            'type' => 'numeric',
                        ],
                        'taskDefinition' => [
                            'type' => 'string',
                        ],
                        'deployments' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Deployment',
                                'type' => 'object',
                                'properties' => [
                                    'id' => [
                                        'type' => 'string',
                                    ],
                                    'status' => [
                                        'type' => 'string',
                                    ],
                                    'taskDefinition' => [
                                        'type' => 'string',
                                    ],
                                    'desiredCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'pendingCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'runningCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'createdAt' => [
                                        'type' => 'string',
                                    ],
                                    'updatedAt' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'roleArn' => [
                            'type' => 'string',
                        ],
                        'events' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ServiceEvent',
                                'type' => 'object',
                                'properties' => [
                                    'id' => [
                                        'type' => 'string',
                                    ],
                                    'createdAt' => [
                                        'type' => 'string',
                                    ],
                                    'message' => [
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
    'iterators' => [
        'ListClusters' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'maxResults',
            'result_key' => 'clusterArns',
        ],
        'ListContainerInstances' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'maxResults',
            'result_key' => 'containerInstanceArns',
        ],
        'ListTaskDefinitions' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'maxResults',
            'result_key' => 'taskDefinitionArns',
        ],
        'ListTaskDefinitionFamilies' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'maxResults',
            'result_key' => 'families',
        ],
        'ListTasks' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'maxResults',
            'result_key' => 'taskArns',
        ],
        'ListServices' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'maxResults',
            'result_key' => 'serviceArns',
        ],
    ],
];
