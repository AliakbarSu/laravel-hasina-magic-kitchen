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
    'apiVersion' => '2009-03-31',
    'endpointPrefix' => 'elasticmapreduce',
    'serviceFullName' => 'Amazon Elastic MapReduce',
    'serviceAbbreviation' => 'Amazon EMR',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'ElasticMapReduce.',
    'timestampFormat' => 'unixTimestamp',
    'signatureVersion' => 'v4',
    'namespace' => 'Emr',
    'regions' => [
        'us-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticmapreduce.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticmapreduce.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticmapreduce.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticmapreduce.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticmapreduce.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticmapreduce.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticmapreduce.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticmapreduce.sa-east-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticmapreduce.cn-north-1.amazonaws.com.cn',
        ],
        'us-gov-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'elasticmapreduce.us-gov-west-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'AddInstanceGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'AddInstanceGroupsOutput',
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
                    'default' => 'ElasticMapReduce.AddInstanceGroups',
                ],
                'InstanceGroups' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'InstanceGroupConfig',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Market' => [
                                'type' => 'string',
                            ],
                            'InstanceRole' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'BidPrice' => [
                                'type' => 'string',
                            ],
                            'InstanceType' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'InstanceCount' => [
                                'required' => true,
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'JobFlowId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an error occurred while processing the request and that the request was not completed.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'AddJobFlowSteps' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'AddJobFlowStepsOutput',
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
                    'default' => 'ElasticMapReduce.AddJobFlowSteps',
                ],
                'JobFlowId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Steps' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'StepConfig',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'ActionOnFailure' => [
                                'type' => 'string',
                            ],
                            'HadoopJarStep' => [
                                'required' => true,
                                'type' => 'object',
                                'properties' => [
                                    'Properties' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'KeyValue',
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
                                    'Jar' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'MainClass' => [
                                        'type' => 'string',
                                    ],
                                    'Args' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'XmlString',
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
                        'Indicates that an error occurred while processing the request and that the request was not completed.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'AddTags' => [
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
                    'default' => 'ElasticMapReduce.AddTags',
                ],
                'ResourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
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
                                'type' => 'string',
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
                        'This exception occurs when there is an internal failure in the EMR service.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'This exception occurs when there is something wrong with user input.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'DescribeCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeClusterOutput',
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
                    'default' => 'ElasticMapReduce.DescribeCluster',
                ],
                'ClusterId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception occurs when there is an internal failure in the EMR service.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'This exception occurs when there is something wrong with user input.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'DescribeJobFlows' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeJobFlowsOutput',
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
                    'default' => 'ElasticMapReduce.DescribeJobFlows',
                ],
                'CreatedAfter' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'timestamp',
                    'location' => 'json',
                ],
                'CreatedBefore' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'timestamp',
                    'location' => 'json',
                ],
                'JobFlowIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'XmlString',
                        'type' => 'string',
                    ],
                ],
                'JobFlowStates' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'JobFlowExecutionState',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an error occurred while processing the request and that the request was not completed.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeStep' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeStepOutput',
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
                    'default' => 'ElasticMapReduce.DescribeStep',
                ],
                'ClusterId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StepId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception occurs when there is an internal failure in the EMR service.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'This exception occurs when there is something wrong with user input.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'ListBootstrapActions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListBootstrapActionsOutput',
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
                    'default' => 'ElasticMapReduce.ListBootstrapActions',
                ],
                'ClusterId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception occurs when there is an internal failure in the EMR service.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'This exception occurs when there is something wrong with user input.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'ListClusters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListClustersOutput',
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
                    'default' => 'ElasticMapReduce.ListClusters',
                ],
                'CreatedAfter' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'timestamp',
                    'location' => 'json',
                ],
                'CreatedBefore' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'timestamp',
                    'location' => 'json',
                ],
                'ClusterStates' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ClusterState',
                        'type' => 'string',
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception occurs when there is an internal failure in the EMR service.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'This exception occurs when there is something wrong with user input.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'ListInstanceGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListInstanceGroupsOutput',
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
                    'default' => 'ElasticMapReduce.ListInstanceGroups',
                ],
                'ClusterId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception occurs when there is an internal failure in the EMR service.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'This exception occurs when there is something wrong with user input.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'ListInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListInstancesOutput',
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
                    'default' => 'ElasticMapReduce.ListInstances',
                ],
                'ClusterId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceGroupId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceGroupTypes' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'InstanceGroupType',
                        'type' => 'string',
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception occurs when there is an internal failure in the EMR service.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'This exception occurs when there is something wrong with user input.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'ListSteps' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListStepsOutput',
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
                    'default' => 'ElasticMapReduce.ListSteps',
                ],
                'ClusterId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StepStates' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'StepState',
                        'type' => 'string',
                    ],
                ],
                'StepIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'XmlString',
                        'type' => 'string',
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception occurs when there is an internal failure in the EMR service.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'This exception occurs when there is something wrong with user input.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'ModifyInstanceGroups' => [
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
                    'default' => 'ElasticMapReduce.ModifyInstanceGroups',
                ],
                'InstanceGroups' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'InstanceGroupModifyConfig',
                        'type' => 'object',
                        'properties' => [
                            'InstanceGroupId' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'InstanceCount' => [
                                'type' => 'numeric',
                            ],
                            'EC2InstanceIdsToTerminate' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'InstanceId',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an error occurred while processing the request and that the request was not completed.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'RemoveTags' => [
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
                    'default' => 'ElasticMapReduce.RemoveTags',
                ],
                'ResourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'TagKeys' => [
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
                        'This exception occurs when there is an internal failure in the EMR service.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'This exception occurs when there is something wrong with user input.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'RunJobFlow' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RunJobFlowOutput',
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
                    'default' => 'ElasticMapReduce.RunJobFlow',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LogUri' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AdditionalInfo' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AmiVersion' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Instances' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'MasterInstanceType' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'SlaveInstanceType' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'InstanceCount' => [
                            'type' => 'numeric',
                        ],
                        'InstanceGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'InstanceGroupConfig',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Market' => [
                                        'type' => 'string',
                                    ],
                                    'InstanceRole' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'BidPrice' => [
                                        'type' => 'string',
                                    ],
                                    'InstanceType' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'InstanceCount' => [
                                        'required' => true,
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                        'Ec2KeyName' => [
                            'type' => 'string',
                        ],
                        'Placement' => [
                            'type' => 'object',
                            'properties' => [
                                'AvailabilityZone' => [
                                    'required' => true,
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'KeepJobFlowAliveWhenNoSteps' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'TerminationProtected' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'HadoopVersion' => [
                            'type' => 'string',
                        ],
                        'Ec2SubnetId' => [
                            'type' => 'string',
                        ],
                        'EmrManagedMasterSecurityGroup' => [
                            'type' => 'string',
                        ],
                        'EmrManagedSlaveSecurityGroup' => [
                            'type' => 'string',
                        ],
                        'AdditionalMasterSecurityGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'XmlStringMaxLen256',
                                'type' => 'string',
                            ],
                        ],
                        'AdditionalSlaveSecurityGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'XmlStringMaxLen256',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Steps' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'StepConfig',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'ActionOnFailure' => [
                                'type' => 'string',
                            ],
                            'HadoopJarStep' => [
                                'required' => true,
                                'type' => 'object',
                                'properties' => [
                                    'Properties' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'KeyValue',
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
                                    'Jar' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'MainClass' => [
                                        'type' => 'string',
                                    ],
                                    'Args' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'XmlString',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'BootstrapActions' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'BootstrapActionConfig',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'ScriptBootstrapAction' => [
                                'required' => true,
                                'type' => 'object',
                                'properties' => [
                                    'Path' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'Args' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'XmlString',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'SupportedProducts' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'XmlStringMaxLen256',
                        'type' => 'string',
                    ],
                ],
                'NewSupportedProducts' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'SupportedProductConfig',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Args' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'XmlString',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'VisibleToAllUsers' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'JobFlowRole' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ServiceRole' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Tags' => [
                    'type' => 'array',
                    'location' => 'json',
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
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an error occurred while processing the request and that the request was not completed.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'SetTerminationProtection' => [
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
                    'default' => 'ElasticMapReduce.SetTerminationProtection',
                ],
                'JobFlowIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'XmlString',
                        'type' => 'string',
                    ],
                ],
                'TerminationProtected' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an error occurred while processing the request and that the request was not completed.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'SetVisibleToAllUsers' => [
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
                    'default' => 'ElasticMapReduce.SetVisibleToAllUsers',
                ],
                'JobFlowIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'XmlString',
                        'type' => 'string',
                    ],
                ],
                'VisibleToAllUsers' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an error occurred while processing the request and that the request was not completed.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'TerminateJobFlows' => [
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
                    'default' => 'ElasticMapReduce.TerminateJobFlows',
                ],
                'JobFlowIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'XmlString',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an error occurred while processing the request and that the request was not completed.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
    ],
    'models' => [
        'AddInstanceGroupsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'JobFlowId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceGroupIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'XmlStringMaxLen256',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'AddJobFlowStepsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StepIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'XmlStringMaxLen256',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'DescribeClusterOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Cluster' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'State' => [
                                    'type' => 'string',
                                ],
                                'StateChangeReason' => [
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
                                'Timeline' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CreationDateTime' => [
                                            'type' => 'string',
                                        ],
                                        'ReadyDateTime' => [
                                            'type' => 'string',
                                        ],
                                        'EndDateTime' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Ec2InstanceAttributes' => [
                            'type' => 'object',
                            'properties' => [
                                'Ec2KeyName' => [
                                    'type' => 'string',
                                ],
                                'Ec2SubnetId' => [
                                    'type' => 'string',
                                ],
                                'Ec2AvailabilityZone' => [
                                    'type' => 'string',
                                ],
                                'IamInstanceProfile' => [
                                    'type' => 'string',
                                ],
                                'EmrManagedMasterSecurityGroup' => [
                                    'type' => 'string',
                                ],
                                'EmrManagedSlaveSecurityGroup' => [
                                    'type' => 'string',
                                ],
                                'AdditionalMasterSecurityGroups' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'String',
                                        'type' => 'string',
                                    ],
                                ],
                                'AdditionalSlaveSecurityGroups' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'String',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'LogUri' => [
                            'type' => 'string',
                        ],
                        'RequestedAmiVersion' => [
                            'type' => 'string',
                        ],
                        'RunningAmiVersion' => [
                            'type' => 'string',
                        ],
                        'AutoTerminate' => [
                            'type' => 'boolean',
                        ],
                        'TerminationProtected' => [
                            'type' => 'boolean',
                        ],
                        'VisibleToAllUsers' => [
                            'type' => 'boolean',
                        ],
                        'Applications' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Application',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Version' => [
                                        'type' => 'string',
                                    ],
                                    'Args' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'AdditionalInfo' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
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
                        'ServiceRole' => [
                            'type' => 'string',
                        ],
                        'NormalizedInstanceHours' => [
                            'type' => 'numeric',
                        ],
                        'MasterPublicDnsName' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeJobFlowsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'JobFlows' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'JobFlowDetail',
                        'type' => 'object',
                        'properties' => [
                            'JobFlowId' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'LogUri' => [
                                'type' => 'string',
                            ],
                            'AmiVersion' => [
                                'type' => 'string',
                            ],
                            'ExecutionStatusDetail' => [
                                'type' => 'object',
                                'properties' => [
                                    'State' => [
                                        'type' => 'string',
                                    ],
                                    'CreationDateTime' => [
                                        'type' => 'string',
                                    ],
                                    'StartDateTime' => [
                                        'type' => 'string',
                                    ],
                                    'ReadyDateTime' => [
                                        'type' => 'string',
                                    ],
                                    'EndDateTime' => [
                                        'type' => 'string',
                                    ],
                                    'LastStateChangeReason' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Instances' => [
                                'type' => 'object',
                                'properties' => [
                                    'MasterInstanceType' => [
                                        'type' => 'string',
                                    ],
                                    'MasterPublicDnsName' => [
                                        'type' => 'string',
                                    ],
                                    'MasterInstanceId' => [
                                        'type' => 'string',
                                    ],
                                    'SlaveInstanceType' => [
                                        'type' => 'string',
                                    ],
                                    'InstanceCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'InstanceGroups' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'InstanceGroupDetail',
                                            'type' => 'object',
                                            'properties' => [
                                                'InstanceGroupId' => [
                                                    'type' => 'string',
                                                ],
                                                'Name' => [
                                                    'type' => 'string',
                                                ],
                                                'Market' => [
                                                    'type' => 'string',
                                                ],
                                                'InstanceRole' => [
                                                    'type' => 'string',
                                                ],
                                                'BidPrice' => [
                                                    'type' => 'string',
                                                ],
                                                'InstanceType' => [
                                                    'type' => 'string',
                                                ],
                                                'InstanceRequestCount' => [
                                                    'type' => 'numeric',
                                                ],
                                                'InstanceRunningCount' => [
                                                    'type' => 'numeric',
                                                ],
                                                'State' => [
                                                    'type' => 'string',
                                                ],
                                                'LastStateChangeReason' => [
                                                    'type' => 'string',
                                                ],
                                                'CreationDateTime' => [
                                                    'type' => 'string',
                                                ],
                                                'StartDateTime' => [
                                                    'type' => 'string',
                                                ],
                                                'ReadyDateTime' => [
                                                    'type' => 'string',
                                                ],
                                                'EndDateTime' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'NormalizedInstanceHours' => [
                                        'type' => 'numeric',
                                    ],
                                    'Ec2KeyName' => [
                                        'type' => 'string',
                                    ],
                                    'Ec2SubnetId' => [
                                        'type' => 'string',
                                    ],
                                    'Placement' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'AvailabilityZone' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'KeepJobFlowAliveWhenNoSteps' => [
                                        'type' => 'boolean',
                                    ],
                                    'TerminationProtected' => [
                                        'type' => 'boolean',
                                    ],
                                    'HadoopVersion' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Steps' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'StepDetail',
                                    'type' => 'object',
                                    'properties' => [
                                        'StepConfig' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'type' => 'string',
                                                ],
                                                'ActionOnFailure' => [
                                                    'type' => 'string',
                                                ],
                                                'HadoopJarStep' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Properties' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'KeyValue',
                                                                'type' =>
                                                                    'object',
                                                                'properties' => [
                                                                    'Key' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'Value' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'Jar' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MainClass' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Args' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'XmlString',
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ExecutionStatusDetail' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'State' => [
                                                    'type' => 'string',
                                                ],
                                                'CreationDateTime' => [
                                                    'type' => 'string',
                                                ],
                                                'StartDateTime' => [
                                                    'type' => 'string',
                                                ],
                                                'EndDateTime' => [
                                                    'type' => 'string',
                                                ],
                                                'LastStateChangeReason' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'BootstrapActions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'BootstrapActionDetail',
                                    'type' => 'object',
                                    'properties' => [
                                        'BootstrapActionConfig' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'type' => 'string',
                                                ],
                                                'ScriptBootstrapAction' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Path' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Args' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'XmlString',
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
                            'SupportedProducts' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'XmlStringMaxLen256',
                                    'type' => 'string',
                                ],
                            ],
                            'VisibleToAllUsers' => [
                                'type' => 'boolean',
                            ],
                            'JobFlowRole' => [
                                'type' => 'string',
                            ],
                            'ServiceRole' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeStepOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Step' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Config' => [
                            'type' => 'object',
                            'properties' => [
                                'Jar' => [
                                    'type' => 'string',
                                ],
                                'Properties' => [
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'MainClass' => [
                                    'type' => 'string',
                                ],
                                'Args' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'String',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'ActionOnFailure' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'State' => [
                                    'type' => 'string',
                                ],
                                'StateChangeReason' => [
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
                                'Timeline' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CreationDateTime' => [
                                            'type' => 'string',
                                        ],
                                        'StartDateTime' => [
                                            'type' => 'string',
                                        ],
                                        'EndDateTime' => [
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
        'ListBootstrapActionsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'BootstrapActions' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Command',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'ScriptPath' => [
                                'type' => 'string',
                            ],
                            'Args' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListClustersOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Clusters' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ClusterSummary',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'object',
                                'properties' => [
                                    'State' => [
                                        'type' => 'string',
                                    ],
                                    'StateChangeReason' => [
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
                                    'Timeline' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CreationDateTime' => [
                                                'type' => 'string',
                                            ],
                                            'ReadyDateTime' => [
                                                'type' => 'string',
                                            ],
                                            'EndDateTime' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'NormalizedInstanceHours' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListInstanceGroupsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceGroups' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'InstanceGroup',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Market' => [
                                'type' => 'string',
                            ],
                            'InstanceGroupType' => [
                                'type' => 'string',
                            ],
                            'BidPrice' => [
                                'type' => 'string',
                            ],
                            'InstanceType' => [
                                'type' => 'string',
                            ],
                            'RequestedInstanceCount' => [
                                'type' => 'numeric',
                            ],
                            'RunningInstanceCount' => [
                                'type' => 'numeric',
                            ],
                            'Status' => [
                                'type' => 'object',
                                'properties' => [
                                    'State' => [
                                        'type' => 'string',
                                    ],
                                    'StateChangeReason' => [
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
                                    'Timeline' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CreationDateTime' => [
                                                'type' => 'string',
                                            ],
                                            'ReadyDateTime' => [
                                                'type' => 'string',
                                            ],
                                            'EndDateTime' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListInstancesOutput' => [
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
                            'Id' => [
                                'type' => 'string',
                            ],
                            'Ec2InstanceId' => [
                                'type' => 'string',
                            ],
                            'PublicDnsName' => [
                                'type' => 'string',
                            ],
                            'PublicIpAddress' => [
                                'type' => 'string',
                            ],
                            'PrivateDnsName' => [
                                'type' => 'string',
                            ],
                            'PrivateIpAddress' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'object',
                                'properties' => [
                                    'State' => [
                                        'type' => 'string',
                                    ],
                                    'StateChangeReason' => [
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
                                    'Timeline' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CreationDateTime' => [
                                                'type' => 'string',
                                            ],
                                            'ReadyDateTime' => [
                                                'type' => 'string',
                                            ],
                                            'EndDateTime' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListStepsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Steps' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'StepSummary',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Config' => [
                                'type' => 'object',
                                'properties' => [
                                    'Jar' => [
                                        'type' => 'string',
                                    ],
                                    'Properties' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'MainClass' => [
                                        'type' => 'string',
                                    ],
                                    'Args' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'ActionOnFailure' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'object',
                                'properties' => [
                                    'State' => [
                                        'type' => 'string',
                                    ],
                                    'StateChangeReason' => [
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
                                    'Timeline' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CreationDateTime' => [
                                                'type' => 'string',
                                            ],
                                            'StartDateTime' => [
                                                'type' => 'string',
                                            ],
                                            'EndDateTime' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'RunJobFlowOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'JobFlowId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
    ],
    'iterators' => [
        'DescribeJobFlows' => [
            'result_key' => 'JobFlows',
        ],
        'ListBootstrapActions' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'result_key' => 'BootstrapActions',
        ],
        'ListClusters' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'result_key' => 'Clusters',
        ],
        'ListInstanceGroups' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'result_key' => 'InstanceGroups',
        ],
        'ListInstances' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'result_key' => 'Instances',
        ],
        'ListSteps' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'result_key' => 'Steps',
        ],
    ],
];
