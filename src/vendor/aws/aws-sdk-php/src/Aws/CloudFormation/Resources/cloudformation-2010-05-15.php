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
    'apiVersion' => '2010-05-15',
    'endpointPrefix' => 'cloudformation',
    'serviceFullName' => 'AWS CloudFormation',
    'serviceType' => 'query',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'CloudFormation',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudformation.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudformation.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudformation.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudformation.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudformation.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudformation.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudformation.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudformation.sa-east-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudformation.cn-north-1.amazonaws.com.cn',
        ],
        'us-gov-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudformation.us-gov-west-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'CancelUpdateStack' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CancelUpdateStack',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'StackName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'CreateStack' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateStackOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateStack',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'StackName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TemplateBody' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateURL' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Parameters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Parameters.member',
                    'items' => [
                        'name' => 'Parameter',
                        'type' => 'object',
                        'properties' => [
                            'ParameterKey' => [
                                'type' => 'string',
                            ],
                            'ParameterValue' => [
                                'type' => 'string',
                            ],
                            'UsePreviousValue' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
                'DisableRollback' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'TimeoutInMinutes' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                ],
                'NotificationARNs' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'NotificationARNs.member',
                    'maxItems' => 5,
                    'items' => [
                        'name' => 'NotificationARN',
                        'type' => 'string',
                    ],
                ],
                'Capabilities' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Capabilities.member',
                    'items' => [
                        'name' => 'Capability',
                        'type' => 'string',
                    ],
                ],
                'ResourceTypes' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ResourceTypes.member',
                    'items' => [
                        'name' => 'ResourceType',
                        'type' => 'string',
                    ],
                ],
                'OnFailure' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'StackPolicyBody' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'StackPolicyURL' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Tags' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Tags.member',
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
                        'Quota for the resource has already been reached.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Resource with the name requested already exists.',
                    'class' => 'AlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The template contains resources with capabilities that were not specified in the Capabilities parameter.',
                    'class' => 'InsufficientCapabilitiesException',
                ],
            ],
        ],
        'DeleteStack' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteStack',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'StackName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeAccountLimits' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeAccountLimitsOutput',
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
                    'default' => '2010-05-15',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
        ],
        'DescribeStackEvents' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeStackEventsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeStackEvents',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'StackName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
        ],
        'DescribeStackResource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeStackResourceOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeStackResource',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'StackName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'LogicalResourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeStackResources' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeStackResourcesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeStackResources',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'StackName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'LogicalResourceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PhysicalResourceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeStacks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeStacksOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeStacks',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'StackName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
        ],
        'EstimateTemplateCost' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EstimateTemplateCostOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'EstimateTemplateCost',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'TemplateBody' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateURL' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Parameters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Parameters.member',
                    'items' => [
                        'name' => 'Parameter',
                        'type' => 'object',
                        'properties' => [
                            'ParameterKey' => [
                                'type' => 'string',
                            ],
                            'ParameterValue' => [
                                'type' => 'string',
                            ],
                            'UsePreviousValue' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetStackPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetStackPolicyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetStackPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'StackName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'GetTemplate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetTemplateOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetTemplate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'StackName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'GetTemplateSummary' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetTemplateSummaryOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetTemplateSummary',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'TemplateBody' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateURL' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'StackName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
        ],
        'ListStackResources' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListStackResourcesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListStackResources',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'StackName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
        ],
        'ListStacks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListStacksOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListStacks',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'StackStatusFilter' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'StackStatusFilter.member',
                    'items' => [
                        'name' => 'StackStatus',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'SetStackPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetStackPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'StackName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'StackPolicyBody' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'StackPolicyURL' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
        ],
        'SignalResource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SignalResource',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'StackName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'LogicalResourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'UniqueId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Status' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'UpdateStack' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UpdateStackOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateStack',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'StackName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TemplateBody' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateURL' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'UsePreviousTemplate' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'StackPolicyDuringUpdateBody' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'StackPolicyDuringUpdateURL' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Parameters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Parameters.member',
                    'items' => [
                        'name' => 'Parameter',
                        'type' => 'object',
                        'properties' => [
                            'ParameterKey' => [
                                'type' => 'string',
                            ],
                            'ParameterValue' => [
                                'type' => 'string',
                            ],
                            'UsePreviousValue' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
                'Capabilities' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Capabilities.member',
                    'items' => [
                        'name' => 'Capability',
                        'type' => 'string',
                    ],
                ],
                'ResourceTypes' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ResourceTypes.member',
                    'items' => [
                        'name' => 'ResourceType',
                        'type' => 'string',
                    ],
                ],
                'StackPolicyBody' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'StackPolicyURL' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'NotificationARNs' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'NotificationARNs.member',
                    'maxItems' => 5,
                    'items' => [
                        'name' => 'NotificationARN',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The template contains resources with capabilities that were not specified in the Capabilities parameter.',
                    'class' => 'InsufficientCapabilitiesException',
                ],
            ],
        ],
        'ValidateTemplate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ValidateTemplateOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ValidateTemplate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-15',
                ],
                'TemplateBody' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateURL' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'CreateStackOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StackId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'DescribeAccountLimitsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AccountLimits' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'AccountLimit',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Value' => [
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
        'DescribeStackEventsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StackEvents' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'StackEvent',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'EventId' => [
                                'type' => 'string',
                            ],
                            'StackName' => [
                                'type' => 'string',
                            ],
                            'LogicalResourceId' => [
                                'type' => 'string',
                            ],
                            'PhysicalResourceId' => [
                                'type' => 'string',
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                            ],
                            'Timestamp' => [
                                'type' => 'string',
                            ],
                            'ResourceStatus' => [
                                'type' => 'string',
                            ],
                            'ResourceStatusReason' => [
                                'type' => 'string',
                            ],
                            'ResourceProperties' => [
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
        'DescribeStackResourceOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StackResourceDetail' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'StackName' => [
                            'type' => 'string',
                        ],
                        'StackId' => [
                            'type' => 'string',
                        ],
                        'LogicalResourceId' => [
                            'type' => 'string',
                        ],
                        'PhysicalResourceId' => [
                            'type' => 'string',
                        ],
                        'ResourceType' => [
                            'type' => 'string',
                        ],
                        'LastUpdatedTimestamp' => [
                            'type' => 'string',
                        ],
                        'ResourceStatus' => [
                            'type' => 'string',
                        ],
                        'ResourceStatusReason' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'Metadata' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeStackResourcesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StackResources' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'StackResource',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'StackName' => [
                                'type' => 'string',
                            ],
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'LogicalResourceId' => [
                                'type' => 'string',
                            ],
                            'PhysicalResourceId' => [
                                'type' => 'string',
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                            ],
                            'Timestamp' => [
                                'type' => 'string',
                            ],
                            'ResourceStatus' => [
                                'type' => 'string',
                            ],
                            'ResourceStatusReason' => [
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
        'DescribeStacksOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Stacks' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Stack',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'StackName' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Parameters' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Parameter',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'ParameterKey' => [
                                            'type' => 'string',
                                        ],
                                        'ParameterValue' => [
                                            'type' => 'string',
                                        ],
                                        'UsePreviousValue' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                            'CreationTime' => [
                                'type' => 'string',
                            ],
                            'LastUpdatedTime' => [
                                'type' => 'string',
                            ],
                            'StackStatus' => [
                                'type' => 'string',
                            ],
                            'StackStatusReason' => [
                                'type' => 'string',
                            ],
                            'DisableRollback' => [
                                'type' => 'boolean',
                            ],
                            'NotificationARNs' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'NotificationARN',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'TimeoutInMinutes' => [
                                'type' => 'numeric',
                            ],
                            'Capabilities' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Capability',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'Outputs' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Output',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'OutputKey' => [
                                            'type' => 'string',
                                        ],
                                        'OutputValue' => [
                                            'type' => 'string',
                                        ],
                                        'Description' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
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
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'EstimateTemplateCostOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Url' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetStackPolicyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StackPolicyBody' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetTemplateOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TemplateBody' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetTemplateSummaryOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Parameters' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ParameterDeclaration',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'ParameterKey' => [
                                'type' => 'string',
                            ],
                            'DefaultValue' => [
                                'type' => 'string',
                            ],
                            'ParameterType' => [
                                'type' => 'string',
                            ],
                            'NoEcho' => [
                                'type' => 'boolean',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'ParameterConstraints' => [
                                'type' => 'object',
                                'properties' => [
                                    'AllowedValues' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'AllowedValue',
                                            'type' => 'string',
                                            'sentAs' => 'member',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Capabilities' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Capability',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'CapabilitiesReason' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ResourceTypes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ResourceType',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'Version' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Metadata' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListStackResourcesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StackResourceSummaries' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'StackResourceSummary',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'LogicalResourceId' => [
                                'type' => 'string',
                            ],
                            'PhysicalResourceId' => [
                                'type' => 'string',
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                            ],
                            'LastUpdatedTimestamp' => [
                                'type' => 'string',
                            ],
                            'ResourceStatus' => [
                                'type' => 'string',
                            ],
                            'ResourceStatusReason' => [
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
        'ListStacksOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StackSummaries' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'StackSummary',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'StackId' => [
                                'type' => 'string',
                            ],
                            'StackName' => [
                                'type' => 'string',
                            ],
                            'TemplateDescription' => [
                                'type' => 'string',
                            ],
                            'CreationTime' => [
                                'type' => 'string',
                            ],
                            'LastUpdatedTime' => [
                                'type' => 'string',
                            ],
                            'DeletionTime' => [
                                'type' => 'string',
                            ],
                            'StackStatus' => [
                                'type' => 'string',
                            ],
                            'StackStatusReason' => [
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
        'UpdateStackOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StackId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ValidateTemplateOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Parameters' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'TemplateParameter',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'ParameterKey' => [
                                'type' => 'string',
                            ],
                            'DefaultValue' => [
                                'type' => 'string',
                            ],
                            'NoEcho' => [
                                'type' => 'boolean',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Capabilities' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Capability',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'CapabilitiesReason' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
    ],
    'iterators' => [
        'DescribeStackEvents' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'StackEvents',
        ],
        'DescribeStackResources' => [
            'result_key' => 'StackResources',
        ],
        'DescribeStacks' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'Stacks',
        ],
        'ListStackResources' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'StackResourceSummaries',
        ],
        'ListStacks' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'StackSummaries',
        ],
    ],
];
