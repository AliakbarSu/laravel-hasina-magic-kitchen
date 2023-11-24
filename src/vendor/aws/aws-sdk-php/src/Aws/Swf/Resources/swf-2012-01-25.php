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
    'apiVersion' => '2012-01-25',
    'endpointPrefix' => 'swf',
    'serviceFullName' => 'Amazon Simple Workflow Service',
    'serviceAbbreviation' => 'Amazon SWF',
    'serviceType' => 'json',
    'jsonVersion' => '1.0',
    'targetPrefix' => 'SimpleWorkflowService.',
    'timestampFormat' => 'unixTimestamp',
    'signatureVersion' => 'v4',
    'namespace' => 'Swf',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'swf.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'swf.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'swf.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'swf.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'swf.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'swf.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'swf.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'swf.sa-east-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'swf.cn-north-1.amazonaws.com.cn',
        ],
        'us-gov-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'swf.us-gov-west-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'CountClosedWorkflowExecutions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'WorkflowExecutionCount',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.CountClosedWorkflowExecutions',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'startTimeFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'oldestDate' => [
                            'required' => true,
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                        'latestDate' => [
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                    ],
                ],
                'closeTimeFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'oldestDate' => [
                            'required' => true,
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                        'latestDate' => [
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                    ],
                ],
                'executionFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'workflowId' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'typeFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'version' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'tagFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'tag' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'closeStatusFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'status' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'CountOpenWorkflowExecutions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'WorkflowExecutionCount',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.CountOpenWorkflowExecutions',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'startTimeFilter' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'oldestDate' => [
                            'required' => true,
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                        'latestDate' => [
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                    ],
                ],
                'typeFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'version' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'tagFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'tag' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'executionFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'workflowId' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'CountPendingActivityTasks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PendingTaskCount',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.CountPendingActivityTasks',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'taskList' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'CountPendingDecisionTasks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PendingTaskCount',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.CountPendingDecisionTasks',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'taskList' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'DeprecateActivityType' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.DeprecateActivityType',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'activityType' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'version' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the specified activity or workflow type was already deprecated.',
                    'class' => 'TypeDeprecatedException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'DeprecateDomain' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.DeprecateDomain',
                ],
                'name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the specified domain has been deprecated.',
                    'class' => 'DomainDeprecatedException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'DeprecateWorkflowType' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.DeprecateWorkflowType',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'workflowType' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'version' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the specified activity or workflow type was already deprecated.',
                    'class' => 'TypeDeprecatedException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'DescribeActivityType' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ActivityTypeDetail',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.DescribeActivityType',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'activityType' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'version' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'DescribeDomain' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DomainDetail',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.DescribeDomain',
                ],
                'name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'DescribeWorkflowExecution' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'WorkflowExecutionDetail',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.DescribeWorkflowExecution',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'execution' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'workflowId' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'runId' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'DescribeWorkflowType' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'WorkflowTypeDetail',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.DescribeWorkflowType',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'workflowType' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'version' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'GetWorkflowExecutionHistory' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'History',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.GetWorkflowExecutionHistory',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'execution' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'workflowId' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'runId' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'nextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maximumPageSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 1000,
                ],
                'reverseOrder' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'ListActivityTypes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ActivityTypeInfos',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.ListActivityTypes',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'name' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'registrationStatus' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maximumPageSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 1000,
                ],
                'reverseOrder' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
            ],
        ],
        'ListClosedWorkflowExecutions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'WorkflowExecutionInfos',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.ListClosedWorkflowExecutions',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'startTimeFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'oldestDate' => [
                            'required' => true,
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                        'latestDate' => [
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                    ],
                ],
                'closeTimeFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'oldestDate' => [
                            'required' => true,
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                        'latestDate' => [
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                    ],
                ],
                'executionFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'workflowId' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'closeStatusFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'status' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
                'typeFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'version' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'tagFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'tag' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'nextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maximumPageSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 1000,
                ],
                'reverseOrder' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'ListDomains' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DomainInfos',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.ListDomains',
                ],
                'nextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'registrationStatus' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maximumPageSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 1000,
                ],
                'reverseOrder' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'ListOpenWorkflowExecutions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'WorkflowExecutionInfos',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.ListOpenWorkflowExecutions',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'startTimeFilter' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'oldestDate' => [
                            'required' => true,
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                        'latestDate' => [
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                    ],
                ],
                'typeFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'version' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'tagFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'tag' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'nextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maximumPageSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 1000,
                ],
                'reverseOrder' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'executionFilter' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'workflowId' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'ListWorkflowTypes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'WorkflowTypeInfos',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.ListWorkflowTypes',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'name' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'registrationStatus' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maximumPageSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 1000,
                ],
                'reverseOrder' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
            ],
        ],
        'PollForActivityTask' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ActivityTask',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.PollForActivityTask',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'taskList' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'identity' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
                [
                    'reason' =>
                        'Returned by any operation if a system imposed limitation has been reached. To address this fault you should either clean up unused resources or increase the limit by contacting AWS.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'PollForDecisionTask' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DecisionTask',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.PollForDecisionTask',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'taskList' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'identity' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maximumPageSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 1000,
                ],
                'reverseOrder' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
                [
                    'reason' =>
                        'Returned by any operation if a system imposed limitation has been reached. To address this fault you should either clean up unused resources or increase the limit by contacting AWS.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'RecordActivityTaskHeartbeat' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ActivityTaskStatus',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.RecordActivityTaskHeartbeat',
                ],
                'taskToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'details' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'RegisterActivityType' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.RegisterActivityType',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'version' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'defaultTaskStartToCloseTimeout' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'defaultTaskHeartbeatTimeout' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'defaultTaskList' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'defaultTaskPriority' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'defaultTaskScheduleToStartTimeout' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'defaultTaskScheduleToCloseTimeout' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the type already exists in the specified domain. You will get this fault even if the existing type is in deprecated status. You can specify another version if the intent is to create a new distinct version of the type.',
                    'class' => 'TypeAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Returned by any operation if a system imposed limitation has been reached. To address this fault you should either clean up unused resources or increase the limit by contacting AWS.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'RegisterDomain' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.RegisterDomain',
                ],
                'name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'workflowExecutionRetentionPeriodInDays' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified domain already exists. You will get this fault even if the existing domain is in deprecated status.',
                    'class' => 'DomainAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Returned by any operation if a system imposed limitation has been reached. To address this fault you should either clean up unused resources or increase the limit by contacting AWS.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'RegisterWorkflowType' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.RegisterWorkflowType',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'version' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'defaultTaskStartToCloseTimeout' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'defaultExecutionStartToCloseTimeout' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'defaultTaskList' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'defaultTaskPriority' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'defaultChildPolicy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the type already exists in the specified domain. You will get this fault even if the existing type is in deprecated status. You can specify another version if the intent is to create a new distinct version of the type.',
                    'class' => 'TypeAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Returned by any operation if a system imposed limitation has been reached. To address this fault you should either clean up unused resources or increase the limit by contacting AWS.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'RequestCancelWorkflowExecution' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.RequestCancelWorkflowExecution',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'workflowId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'runId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'RespondActivityTaskCanceled' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.RespondActivityTaskCanceled',
                ],
                'taskToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'details' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'RespondActivityTaskCompleted' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.RespondActivityTaskCompleted',
                ],
                'taskToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'result' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'RespondActivityTaskFailed' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.RespondActivityTaskFailed',
                ],
                'taskToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'reason' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'details' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'RespondDecisionTaskCompleted' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.RespondDecisionTaskCompleted',
                ],
                'taskToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'decisions' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Decision',
                        'type' => 'object',
                        'properties' => [
                            'decisionType' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'scheduleActivityTaskDecisionAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'activityType' => [
                                        'required' => true,
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'required' => true,
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                            'version' => [
                                                'required' => true,
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                        ],
                                    ],
                                    'activityId' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'scheduleToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'taskList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'required' => true,
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                        ],
                                    ],
                                    'taskPriority' => [
                                        'type' => 'string',
                                    ],
                                    'scheduleToStartTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'startToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'heartbeatTimeout' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'requestCancelActivityTaskDecisionAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'activityId' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                ],
                            ],
                            'completeWorkflowExecutionDecisionAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'result' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'failWorkflowExecutionDecisionAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'reason' => [
                                        'type' => 'string',
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'cancelWorkflowExecutionDecisionAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'continueAsNewWorkflowExecutionDecisionAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'executionStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'taskList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'required' => true,
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                        ],
                                    ],
                                    'taskPriority' => [
                                        'type' => 'string',
                                    ],
                                    'taskStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'childPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'tagList' => [
                                        'type' => 'array',
                                        'maxItems' => 5,
                                        'items' => [
                                            'name' => 'Tag',
                                            'type' => 'string',
                                            'minLength' => 1,
                                        ],
                                    ],
                                    'workflowTypeVersion' => [
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                ],
                            ],
                            'recordMarkerDecisionAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'markerName' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'startTimerDecisionAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timerId' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                    'startToFireTimeout' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                ],
                            ],
                            'cancelTimerDecisionAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timerId' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                ],
                            ],
                            'signalExternalWorkflowExecutionDecisionAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'runId' => [
                                        'type' => 'string',
                                    ],
                                    'signalName' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'requestCancelExternalWorkflowExecutionDecisionAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'runId' => [
                                        'type' => 'string',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'startChildWorkflowExecutionDecisionAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowType' => [
                                        'required' => true,
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'required' => true,
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                            'version' => [
                                                'required' => true,
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                        ],
                                    ],
                                    'workflowId' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'executionStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'taskList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'required' => true,
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                        ],
                                    ],
                                    'taskPriority' => [
                                        'type' => 'string',
                                    ],
                                    'taskStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'childPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'tagList' => [
                                        'type' => 'array',
                                        'maxItems' => 5,
                                        'items' => [
                                            'name' => 'Tag',
                                            'type' => 'string',
                                            'minLength' => 1,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'executionContext' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'SignalWorkflowExecution' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.SignalWorkflowExecution',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'workflowId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'runId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'signalName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'input' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'StartWorkflowExecution' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'Run',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'SimpleWorkflowService.StartWorkflowExecution',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'workflowId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'workflowType' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'version' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'taskList' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'taskPriority' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'input' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'executionStartToCloseTimeout' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'tagList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 5,
                    'items' => [
                        'name' => 'Tag',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'taskStartToCloseTimeout' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'childPolicy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the specified activity or workflow type was already deprecated.',
                    'class' => 'TypeDeprecatedException',
                ],
                [
                    'reason' =>
                        'Returned by StartWorkflowExecution when an open execution with the same workflowId is already running in the specified domain.',
                    'class' => 'WorkflowExecutionAlreadyStartedException',
                ],
                [
                    'reason' =>
                        'Returned by any operation if a system imposed limitation has been reached. To address this fault you should either clean up unused resources or increase the limit by contacting AWS.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
                [
                    'class' => 'DefaultUndefinedException',
                ],
            ],
        ],
        'TerminateWorkflowExecution' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'SimpleWorkflowService.TerminateWorkflowExecution',
                ],
                'domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'workflowId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'runId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'reason' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'details' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'childPolicy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned when the named resource cannot be found with in the scope of this operation (region or domain). This could happen if the named resource was never created or is no longer available for this operation.',
                    'class' => 'UnknownResourceException',
                ],
                [
                    'reason' =>
                        'Returned when the caller does not have sufficient permissions to invoke the action.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
    ],
    'models' => [
        'WorkflowExecutionCount' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'count' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'truncated' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'PendingTaskCount' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'count' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'truncated' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'ActivityTypeDetail' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'typeInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'activityType' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'description' => [
                            'type' => 'string',
                        ],
                        'creationDate' => [
                            'type' => 'string',
                        ],
                        'deprecationDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'configuration' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'defaultTaskStartToCloseTimeout' => [
                            'type' => 'string',
                        ],
                        'defaultTaskHeartbeatTimeout' => [
                            'type' => 'string',
                        ],
                        'defaultTaskList' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'defaultTaskPriority' => [
                            'type' => 'string',
                        ],
                        'defaultTaskScheduleToStartTimeout' => [
                            'type' => 'string',
                        ],
                        'defaultTaskScheduleToCloseTimeout' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DomainDetail' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'domainInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'type' => 'string',
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'description' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'configuration' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'workflowExecutionRetentionPeriodInDays' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'WorkflowExecutionDetail' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'executionInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'execution' => [
                            'type' => 'object',
                            'properties' => [
                                'workflowId' => [
                                    'type' => 'string',
                                ],
                                'runId' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'workflowType' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'startTimestamp' => [
                            'type' => 'string',
                        ],
                        'closeTimestamp' => [
                            'type' => 'string',
                        ],
                        'executionStatus' => [
                            'type' => 'string',
                        ],
                        'closeStatus' => [
                            'type' => 'string',
                        ],
                        'parent' => [
                            'type' => 'object',
                            'properties' => [
                                'workflowId' => [
                                    'type' => 'string',
                                ],
                                'runId' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'tagList' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Tag',
                                'type' => 'string',
                            ],
                        ],
                        'cancelRequested' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
                'executionConfiguration' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'taskStartToCloseTimeout' => [
                            'type' => 'string',
                        ],
                        'executionStartToCloseTimeout' => [
                            'type' => 'string',
                        ],
                        'taskList' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'taskPriority' => [
                            'type' => 'string',
                        ],
                        'childPolicy' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'openCounts' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'openActivityTasks' => [
                            'type' => 'numeric',
                        ],
                        'openDecisionTasks' => [
                            'type' => 'numeric',
                        ],
                        'openTimers' => [
                            'type' => 'numeric',
                        ],
                        'openChildWorkflowExecutions' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'latestActivityTaskTimestamp' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'latestExecutionContext' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'WorkflowTypeDetail' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'typeInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'workflowType' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'description' => [
                            'type' => 'string',
                        ],
                        'creationDate' => [
                            'type' => 'string',
                        ],
                        'deprecationDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'configuration' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'defaultTaskStartToCloseTimeout' => [
                            'type' => 'string',
                        ],
                        'defaultExecutionStartToCloseTimeout' => [
                            'type' => 'string',
                        ],
                        'defaultTaskList' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'defaultTaskPriority' => [
                            'type' => 'string',
                        ],
                        'defaultChildPolicy' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'History' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'events' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'HistoryEvent',
                        'type' => 'object',
                        'properties' => [
                            'eventTimestamp' => [
                                'type' => 'string',
                            ],
                            'eventType' => [
                                'type' => 'string',
                            ],
                            'eventId' => [
                                'type' => 'numeric',
                            ],
                            'workflowExecutionStartedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'executionStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'taskStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'childPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'taskList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'tagList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Tag',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'taskPriority' => [
                                        'type' => 'string',
                                    ],
                                    'continuedExecutionRunId' => [
                                        'type' => 'string',
                                    ],
                                    'parentWorkflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'parentInitiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'workflowExecutionCompletedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'result' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'completeWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'workflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'reason' => [
                                        'type' => 'string',
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'failWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'workflowExecutionTimedOutEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timeoutType' => [
                                        'type' => 'string',
                                    ],
                                    'childPolicy' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'workflowExecutionCanceledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'cancelWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'workflowExecutionContinuedAsNewEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'newExecutionRunId' => [
                                        'type' => 'string',
                                    ],
                                    'executionStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'taskList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'taskPriority' => [
                                        'type' => 'string',
                                    ],
                                    'taskStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'childPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'tagList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Tag',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'continueAsNewWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'workflowExecutionTerminatedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'reason' => [
                                        'type' => 'string',
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'childPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'workflowExecutionCancelRequestedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'externalWorkflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'externalInitiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'decisionTaskScheduledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'taskList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'taskPriority' => [
                                        'type' => 'string',
                                    ],
                                    'startToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'decisionTaskStartedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'identity' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'decisionTaskCompletedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'executionContext' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'decisionTaskTimedOutEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timeoutType' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'activityTaskScheduledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'activityType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'activityId' => [
                                        'type' => 'string',
                                    ],
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                    'scheduleToStartTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'scheduleToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'startToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'taskList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'taskPriority' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'heartbeatTimeout' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'activityTaskStartedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'identity' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'activityTaskCompletedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'result' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'activityTaskFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'reason' => [
                                        'type' => 'string',
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'activityTaskTimedOutEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timeoutType' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'activityTaskCanceledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'latestCancelRequestedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'activityTaskCancelRequestedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'activityId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'workflowExecutionSignaledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'signalName' => [
                                        'type' => 'string',
                                    ],
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'externalWorkflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'externalInitiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'markerRecordedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'markerName' => [
                                        'type' => 'string',
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'recordMarkerFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'markerName' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'timerStartedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timerId' => [
                                        'type' => 'string',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                    'startToFireTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'timerFiredEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timerId' => [
                                        'type' => 'string',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'timerCanceledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timerId' => [
                                        'type' => 'string',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'startChildWorkflowExecutionInitiatedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'executionStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'taskList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'taskPriority' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'childPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'taskStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'tagList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Tag',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'childWorkflowExecutionStartedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'childWorkflowExecutionCompletedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'result' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'childWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'reason' => [
                                        'type' => 'string',
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'childWorkflowExecutionTimedOutEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'timeoutType' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'childWorkflowExecutionCanceledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'childWorkflowExecutionTerminatedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'signalExternalWorkflowExecutionInitiatedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'runId' => [
                                        'type' => 'string',
                                    ],
                                    'signalName' => [
                                        'type' => 'string',
                                    ],
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'externalWorkflowExecutionSignaledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'signalExternalWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'runId' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'externalWorkflowExecutionCancelRequestedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'requestCancelExternalWorkflowExecutionInitiatedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'runId' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'requestCancelExternalWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'runId' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'scheduleActivityTaskFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'activityType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'activityId' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'requestCancelActivityTaskFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'activityId' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'startTimerFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timerId' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'cancelTimerFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timerId' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'startChildWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'nextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ActivityTypeInfos' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'typeInfos' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ActivityTypeInfo',
                        'type' => 'object',
                        'properties' => [
                            'activityType' => [
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'version' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'status' => [
                                'type' => 'string',
                            ],
                            'description' => [
                                'type' => 'string',
                            ],
                            'creationDate' => [
                                'type' => 'string',
                            ],
                            'deprecationDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'nextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'WorkflowExecutionInfos' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'executionInfos' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'WorkflowExecutionInfo',
                        'type' => 'object',
                        'properties' => [
                            'execution' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'runId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'workflowType' => [
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'version' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'startTimestamp' => [
                                'type' => 'string',
                            ],
                            'closeTimestamp' => [
                                'type' => 'string',
                            ],
                            'executionStatus' => [
                                'type' => 'string',
                            ],
                            'closeStatus' => [
                                'type' => 'string',
                            ],
                            'parent' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'runId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'tagList' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Tag',
                                    'type' => 'string',
                                ],
                            ],
                            'cancelRequested' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
                'nextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DomainInfos' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'domainInfos' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DomainInfo',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            'status' => [
                                'type' => 'string',
                            ],
                            'description' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'nextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'WorkflowTypeInfos' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'typeInfos' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'WorkflowTypeInfo',
                        'type' => 'object',
                        'properties' => [
                            'workflowType' => [
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'version' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'status' => [
                                'type' => 'string',
                            ],
                            'description' => [
                                'type' => 'string',
                            ],
                            'creationDate' => [
                                'type' => 'string',
                            ],
                            'deprecationDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'nextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ActivityTask' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'taskToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'activityId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'startedEventId' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'workflowExecution' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'workflowId' => [
                            'type' => 'string',
                        ],
                        'runId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'activityType' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'type' => 'string',
                        ],
                        'version' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'input' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DecisionTask' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'taskToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'startedEventId' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'workflowExecution' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'workflowId' => [
                            'type' => 'string',
                        ],
                        'runId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'workflowType' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'type' => 'string',
                        ],
                        'version' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'events' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'HistoryEvent',
                        'type' => 'object',
                        'properties' => [
                            'eventTimestamp' => [
                                'type' => 'string',
                            ],
                            'eventType' => [
                                'type' => 'string',
                            ],
                            'eventId' => [
                                'type' => 'numeric',
                            ],
                            'workflowExecutionStartedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'executionStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'taskStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'childPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'taskList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'tagList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Tag',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'taskPriority' => [
                                        'type' => 'string',
                                    ],
                                    'continuedExecutionRunId' => [
                                        'type' => 'string',
                                    ],
                                    'parentWorkflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'parentInitiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'workflowExecutionCompletedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'result' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'completeWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'workflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'reason' => [
                                        'type' => 'string',
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'failWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'workflowExecutionTimedOutEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timeoutType' => [
                                        'type' => 'string',
                                    ],
                                    'childPolicy' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'workflowExecutionCanceledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'cancelWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'workflowExecutionContinuedAsNewEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'newExecutionRunId' => [
                                        'type' => 'string',
                                    ],
                                    'executionStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'taskList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'taskPriority' => [
                                        'type' => 'string',
                                    ],
                                    'taskStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'childPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'tagList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Tag',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'continueAsNewWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'workflowExecutionTerminatedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'reason' => [
                                        'type' => 'string',
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'childPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'workflowExecutionCancelRequestedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'externalWorkflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'externalInitiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'decisionTaskScheduledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'taskList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'taskPriority' => [
                                        'type' => 'string',
                                    ],
                                    'startToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'decisionTaskStartedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'identity' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'decisionTaskCompletedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'executionContext' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'decisionTaskTimedOutEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timeoutType' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'activityTaskScheduledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'activityType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'activityId' => [
                                        'type' => 'string',
                                    ],
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                    'scheduleToStartTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'scheduleToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'startToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'taskList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'taskPriority' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'heartbeatTimeout' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'activityTaskStartedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'identity' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'activityTaskCompletedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'result' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'activityTaskFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'reason' => [
                                        'type' => 'string',
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'activityTaskTimedOutEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timeoutType' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'activityTaskCanceledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'scheduledEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'latestCancelRequestedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'activityTaskCancelRequestedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'activityId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'workflowExecutionSignaledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'signalName' => [
                                        'type' => 'string',
                                    ],
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'externalWorkflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'externalInitiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'markerRecordedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'markerName' => [
                                        'type' => 'string',
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'recordMarkerFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'markerName' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'timerStartedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timerId' => [
                                        'type' => 'string',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                    'startToFireTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'timerFiredEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timerId' => [
                                        'type' => 'string',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'timerCanceledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timerId' => [
                                        'type' => 'string',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'startChildWorkflowExecutionInitiatedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'executionStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'taskList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'taskPriority' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'childPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'taskStartToCloseTimeout' => [
                                        'type' => 'string',
                                    ],
                                    'tagList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Tag',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'childWorkflowExecutionStartedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'childWorkflowExecutionCompletedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'result' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'childWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'reason' => [
                                        'type' => 'string',
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'childWorkflowExecutionTimedOutEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'timeoutType' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'childWorkflowExecutionCanceledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'details' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'childWorkflowExecutionTerminatedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'startedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'signalExternalWorkflowExecutionInitiatedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'runId' => [
                                        'type' => 'string',
                                    ],
                                    'signalName' => [
                                        'type' => 'string',
                                    ],
                                    'input' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'externalWorkflowExecutionSignaledEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'signalExternalWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'runId' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'externalWorkflowExecutionCancelRequestedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowExecution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'workflowId' => [
                                                'type' => 'string',
                                            ],
                                            'runId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'requestCancelExternalWorkflowExecutionInitiatedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'runId' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'requestCancelExternalWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'runId' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'scheduleActivityTaskFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'activityType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'activityId' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'requestCancelActivityTaskFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'activityId' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'startTimerFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timerId' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'cancelTimerFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'timerId' => [
                                        'type' => 'string',
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'startChildWorkflowExecutionFailedEventAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'workflowType' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'cause' => [
                                        'type' => 'string',
                                    ],
                                    'workflowId' => [
                                        'type' => 'string',
                                    ],
                                    'initiatedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'decisionTaskCompletedEventId' => [
                                        'type' => 'numeric',
                                    ],
                                    'control' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'nextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'previousStartedEventId' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
        ],
        'ActivityTaskStatus' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'cancelRequested' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'Run' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'runId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
    ],
    'iterators' => [
        'GetWorkflowExecutionHistory' => [
            'limit_key' => 'maximumPageSize',
            'input_token' => 'nextPageToken',
            'output_token' => 'nextPageToken',
            'result_key' => 'events',
        ],
        'ListActivityTypes' => [
            'limit_key' => 'maximumPageSize',
            'input_token' => 'nextPageToken',
            'output_token' => 'nextPageToken',
            'result_key' => 'typeInfos',
        ],
        'ListClosedWorkflowExecutions' => [
            'limit_key' => 'maximumPageSize',
            'input_token' => 'nextPageToken',
            'output_token' => 'nextPageToken',
            'result_key' => 'executionInfos',
        ],
        'ListDomains' => [
            'limit_key' => 'maximumPageSize',
            'input_token' => 'nextPageToken',
            'output_token' => 'nextPageToken',
            'result_key' => 'domainInfos',
        ],
        'ListOpenWorkflowExecutions' => [
            'limit_key' => 'maximumPageSize',
            'input_token' => 'nextPageToken',
            'output_token' => 'nextPageToken',
            'result_key' => 'executionInfos',
        ],
        'ListWorkflowTypes' => [
            'limit_key' => 'maximumPageSize',
            'input_token' => 'nextPageToken',
            'output_token' => 'nextPageToken',
            'result_key' => 'typeInfos',
        ],
        'PollForDecisionTask' => [
            'limit_key' => 'maximumPageSize',
            'input_token' => 'nextPageToken',
            'output_token' => 'nextPageToken',
            'result_key' => 'events',
        ],
    ],
];
