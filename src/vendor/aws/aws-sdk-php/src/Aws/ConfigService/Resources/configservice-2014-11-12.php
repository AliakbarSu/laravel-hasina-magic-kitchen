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
    'apiVersion' => '2014-11-12',
    'endpointPrefix' => 'config',
    'serviceFullName' => 'AWS Config',
    'serviceAbbreviation' => 'Config Service',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'StarlingDoveService.',
    'signatureVersion' => 'v4',
    'namespace' => 'ConfigService',
    'operations' => [
        'DeleteConfigRule' => [
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
                    'default' => 'StarlingDoveService.DeleteConfigRule',
                ],
                'ConfigRuleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more AWS Config rules in the request are invalid. Verify that the rule names are correct and try again.',
                    'class' => 'NoSuchConfigRuleException',
                ],
            ],
        ],
        'DeleteDeliveryChannel' => [
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
                    'default' => 'StarlingDoveService.DeleteDeliveryChannel',
                ],
                'DeliveryChannelName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You have specified a delivery channel that does not exist.',
                    'class' => 'NoSuchDeliveryChannelException',
                ],
                [
                    'reason' =>
                        'You cannot delete the delivery channel you specified because the configuration recorder is running.',
                    'class' => 'LastDeliveryChannelDeleteFailedException',
                ],
            ],
        ],
        'DeliverConfigSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeliverConfigSnapshotResponse',
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
                    'default' => 'StarlingDoveService.DeliverConfigSnapshot',
                ],
                'deliveryChannelName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You have specified a delivery channel that does not exist.',
                    'class' => 'NoSuchDeliveryChannelException',
                ],
                [
                    'reason' =>
                        'There are no configuration recorders available to provide the role needed to describe your resources. Create a configuration recorder.',
                    'class' => 'NoAvailableConfigurationRecorderException',
                ],
                [
                    'reason' => 'There is no configuration recorder running.',
                    'class' => 'NoRunningConfigurationRecorderException',
                ],
            ],
        ],
        'DescribeComplianceByConfigRule' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeComplianceByConfigRuleResponse',
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
                        'StarlingDoveService.DescribeComplianceByConfigRule',
                ],
                'ConfigRuleNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 25,
                    'items' => [
                        'name' => 'StringWithCharLimit64',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'ComplianceTypes' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 3,
                    'items' => [
                        'name' => 'ComplianceType',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more of the specified parameters are invalid. Verify that your parameters are valid and try again.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'One or more AWS Config rules in the request are invalid. Verify that the rule names are correct and try again.',
                    'class' => 'NoSuchConfigRuleException',
                ],
            ],
        ],
        'DescribeComplianceByResource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeComplianceByResourceResponse',
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
                        'StarlingDoveService.DescribeComplianceByResource',
                ],
                'ResourceType' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ResourceId' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ComplianceTypes' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 3,
                    'items' => [
                        'name' => 'ComplianceType',
                        'type' => 'string',
                    ],
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 100,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more of the specified parameters are invalid. Verify that your parameters are valid and try again.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'The specified next token is invalid. Specify the nextToken string that was returned in the previous response to get the next page of results.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'DescribeConfigRuleEvaluationStatus' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeConfigRuleEvaluationStatusResponse',
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
                        'StarlingDoveService.DescribeConfigRuleEvaluationStatus',
                ],
                'ConfigRuleNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 25,
                    'items' => [
                        'name' => 'StringWithCharLimit64',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more AWS Config rules in the request are invalid. Verify that the rule names are correct and try again.',
                    'class' => 'NoSuchConfigRuleException',
                ],
            ],
        ],
        'DescribeConfigRules' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeConfigRulesResponse',
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
                    'default' => 'StarlingDoveService.DescribeConfigRules',
                ],
                'ConfigRuleNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 25,
                    'items' => [
                        'name' => 'StringWithCharLimit64',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more AWS Config rules in the request are invalid. Verify that the rule names are correct and try again.',
                    'class' => 'NoSuchConfigRuleException',
                ],
            ],
        ],
        'DescribeConfigurationRecorderStatus' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeConfigurationRecorderStatusResponse',
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
                        'StarlingDoveService.DescribeConfigurationRecorderStatus',
                ],
                'ConfigurationRecorderNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'RecorderName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You have specified a configuration recorder that does not exist.',
                    'class' => 'NoSuchConfigurationRecorderException',
                ],
            ],
        ],
        'DescribeConfigurationRecorders' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeConfigurationRecordersResponse',
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
                        'StarlingDoveService.DescribeConfigurationRecorders',
                ],
                'ConfigurationRecorderNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'RecorderName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You have specified a configuration recorder that does not exist.',
                    'class' => 'NoSuchConfigurationRecorderException',
                ],
            ],
        ],
        'DescribeDeliveryChannelStatus' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeDeliveryChannelStatusResponse',
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
                        'StarlingDoveService.DescribeDeliveryChannelStatus',
                ],
                'DeliveryChannelNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ChannelName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You have specified a delivery channel that does not exist.',
                    'class' => 'NoSuchDeliveryChannelException',
                ],
            ],
        ],
        'DescribeDeliveryChannels' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeDeliveryChannelsResponse',
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
                    'default' => 'StarlingDoveService.DescribeDeliveryChannels',
                ],
                'DeliveryChannelNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ChannelName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You have specified a delivery channel that does not exist.',
                    'class' => 'NoSuchDeliveryChannelException',
                ],
            ],
        ],
        'GetComplianceDetailsByConfigRule' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetComplianceDetailsByConfigRuleResponse',
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
                        'StarlingDoveService.GetComplianceDetailsByConfigRule',
                ],
                'ConfigRuleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ComplianceTypes' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 3,
                    'items' => [
                        'name' => 'ComplianceType',
                        'type' => 'string',
                    ],
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 100,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more of the specified parameters are invalid. Verify that your parameters are valid and try again.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'The specified next token is invalid. Specify the nextToken string that was returned in the previous response to get the next page of results.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' =>
                        'One or more AWS Config rules in the request are invalid. Verify that the rule names are correct and try again.',
                    'class' => 'NoSuchConfigRuleException',
                ],
            ],
        ],
        'GetComplianceDetailsByResource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetComplianceDetailsByResourceResponse',
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
                        'StarlingDoveService.GetComplianceDetailsByResource',
                ],
                'ResourceType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ResourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ComplianceTypes' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 3,
                    'items' => [
                        'name' => 'ComplianceType',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more of the specified parameters are invalid. Verify that your parameters are valid and try again.',
                    'class' => 'InvalidParameterValueException',
                ],
            ],
        ],
        'GetComplianceSummaryByConfigRule' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetComplianceSummaryByConfigRuleResponse',
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
                        'StarlingDoveService.GetComplianceSummaryByConfigRule',
                ],
            ],
        ],
        'GetComplianceSummaryByResourceType' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetComplianceSummaryByResourceTypeResponse',
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
                        'StarlingDoveService.GetComplianceSummaryByResourceType',
                ],
                'ResourceTypes' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 100,
                    'items' => [
                        'name' => 'StringWithCharLimit256',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more of the specified parameters are invalid. Verify that your parameters are valid and try again.',
                    'class' => 'InvalidParameterValueException',
                ],
            ],
        ],
        'GetResourceConfigHistory' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetResourceConfigHistoryResponse',
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
                    'default' => 'StarlingDoveService.GetResourceConfigHistory',
                ],
                'resourceType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'resourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'laterTime' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'json',
                ],
                'earlierTime' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'json',
                ],
                'chronologicalOrder' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 100,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The requested action is not valid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified time range is not valid. The earlier time is not chronologically before the later time.',
                    'class' => 'InvalidTimeRangeException',
                ],
                [
                    'reason' =>
                        'The specified limit is outside the allowable range.',
                    'class' => 'InvalidLimitException',
                ],
                [
                    'reason' =>
                        'The specified next token is invalid. Specify the nextToken string that was returned in the previous response to get the next page of results.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' =>
                        'There are no configuration recorders available to provide the role needed to describe your resources. Create a configuration recorder.',
                    'class' => 'NoAvailableConfigurationRecorderException',
                ],
                [
                    'reason' =>
                        'You have specified a resource that is either unknown or has not been discovered.',
                    'class' => 'ResourceNotDiscoveredException',
                ],
            ],
        ],
        'ListDiscoveredResources' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListDiscoveredResourcesResponse',
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
                    'default' => 'StarlingDoveService.ListDiscoveredResources',
                ],
                'resourceType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'resourceIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ResourceId',
                        'type' => 'string',
                    ],
                ],
                'resourceName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 100,
                ],
                'includeDeletedResources' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The requested action is not valid.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified limit is outside the allowable range.',
                    'class' => 'InvalidLimitException',
                ],
                [
                    'reason' =>
                        'The specified next token is invalid. Specify the nextToken string that was returned in the previous response to get the next page of results.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' =>
                        'There are no configuration recorders available to provide the role needed to describe your resources. Create a configuration recorder.',
                    'class' => 'NoAvailableConfigurationRecorderException',
                ],
            ],
        ],
        'PutConfigRule' => [
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
                    'default' => 'StarlingDoveService.PutConfigRule',
                ],
                'ConfigRule' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'ConfigRuleName' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'ConfigRuleArn' => [
                            'type' => 'string',
                        ],
                        'ConfigRuleId' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'Scope' => [
                            'type' => 'object',
                            'properties' => [
                                'ComplianceResourceTypes' => [
                                    'type' => 'array',
                                    'maxItems' => 100,
                                    'items' => [
                                        'name' => 'StringWithCharLimit256',
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                ],
                                'TagKey' => [
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'TagValue' => [
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'ComplianceResourceId' => [
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                            ],
                        ],
                        'Source' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'Owner' => [
                                    'type' => 'string',
                                ],
                                'SourceIdentifier' => [
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'SourceDetails' => [
                                    'type' => 'array',
                                    'maxItems' => 25,
                                    'items' => [
                                        'name' => 'SourceDetail',
                                        'type' => 'object',
                                        'properties' => [
                                            'EventSource' => [
                                                'type' => 'string',
                                            ],
                                            'MessageType' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'InputParameters' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'MaximumExecutionFrequency' => [
                            'type' => 'string',
                        ],
                        'ConfigRuleState' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more of the specified parameters are invalid. Verify that your parameters are valid and try again.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Failed to add the AWS Config rule because the account already contains the maximum number of 25 rules. Consider deleting any deactivated rules before adding new rules.',
                    'class' => 'MaxNumberOfConfigRulesExceededException',
                ],
                [
                    'reason' =>
                        'The rule is currently being deleted. Wait for a while and try again.',
                    'class' => 'ResourceInUseException',
                ],
            ],
        ],
        'PutConfigurationRecorder' => [
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
                    'default' => 'StarlingDoveService.PutConfigurationRecorder',
                ],
                'ConfigurationRecorder' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'roleARN' => [
                            'type' => 'string',
                        ],
                        'recordingGroup' => [
                            'type' => 'object',
                            'properties' => [
                                'allSupported' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'resourceTypes' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'ResourceType',
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
                        'You have reached the limit on the number of recorders you can create.',
                    'class' =>
                        'MaxNumberOfConfigurationRecordersExceededException',
                ],
                [
                    'reason' =>
                        'You have provided a configuration recorder name that is not valid.',
                    'class' => 'InvalidConfigurationRecorderNameException',
                ],
                [
                    'reason' => 'You have provided a null or empty role ARN.',
                    'class' => 'InvalidRoleException',
                ],
                [
                    'reason' =>
                        'AWS Config throws an exception if the recording group does not contain a valid list of resource types. Invalid values could also be incorrectly formatted.',
                    'class' => 'InvalidRecordingGroupException',
                ],
            ],
        ],
        'PutDeliveryChannel' => [
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
                    'default' => 'StarlingDoveService.PutDeliveryChannel',
                ],
                'DeliveryChannel' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        's3BucketName' => [
                            'type' => 'string',
                        ],
                        's3KeyPrefix' => [
                            'type' => 'string',
                        ],
                        'snsTopicARN' => [
                            'type' => 'string',
                        ],
                        'configSnapshotDeliveryProperties' => [
                            'type' => 'object',
                            'properties' => [
                                'deliveryFrequency' => [
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
                        'You have reached the limit on the number of delivery channels you can create.',
                    'class' => 'MaxNumberOfDeliveryChannelsExceededException',
                ],
                [
                    'reason' =>
                        'There are no configuration recorders available to provide the role needed to describe your resources. Create a configuration recorder.',
                    'class' => 'NoAvailableConfigurationRecorderException',
                ],
                [
                    'reason' =>
                        'The specified delivery channel name is not valid.',
                    'class' => 'InvalidDeliveryChannelNameException',
                ],
                [
                    'reason' =>
                        'The specified Amazon S3 bucket does not exist.',
                    'class' => 'NoSuchBucketException',
                ],
                [
                    'reason' =>
                        'The specified Amazon S3 key prefix is not valid.',
                    'class' => 'InvalidS3KeyPrefixException',
                ],
                [
                    'reason' =>
                        'The specified Amazon SNS topic does not exist.',
                    'class' => 'InvalidSNSTopicARNException',
                ],
                [
                    'reason' =>
                        'Your Amazon S3 bucket policy does not permit AWS Config to write to it.',
                    'class' => 'InsufficientDeliveryPolicyException',
                ],
            ],
        ],
        'PutEvaluations' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PutEvaluationsResponse',
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
                    'default' => 'StarlingDoveService.PutEvaluations',
                ],
                'Evaluations' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 100,
                    'items' => [
                        'name' => 'Evaluation',
                        'type' => 'object',
                        'properties' => [
                            'ComplianceResourceType' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'ComplianceResourceId' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'ComplianceType' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Annotation' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'OrderingTimestamp' => [
                                'required' => true,
                                'type' => ['object', 'string', 'integer'],
                                'format' => 'date-time',
                            ],
                        ],
                    ],
                ],
                'ResultToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more of the specified parameters are invalid. Verify that your parameters are valid and try again.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' => 'The result token is invalid.',
                    'class' => 'InvalidResultTokenException',
                ],
                [
                    'reason' =>
                        'One or more AWS Config rules in the request are invalid. Verify that the rule names are correct and try again.',
                    'class' => 'NoSuchConfigRuleException',
                ],
            ],
        ],
        'StartConfigurationRecorder' => [
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
                    'default' =>
                        'StarlingDoveService.StartConfigurationRecorder',
                ],
                'ConfigurationRecorderName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You have specified a configuration recorder that does not exist.',
                    'class' => 'NoSuchConfigurationRecorderException',
                ],
                [
                    'reason' =>
                        'There is no delivery channel available to record configurations.',
                    'class' => 'NoAvailableDeliveryChannelException',
                ],
            ],
        ],
        'StopConfigurationRecorder' => [
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
                    'default' =>
                        'StarlingDoveService.StopConfigurationRecorder',
                ],
                'ConfigurationRecorderName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You have specified a configuration recorder that does not exist.',
                    'class' => 'NoSuchConfigurationRecorderException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'DeliverConfigSnapshotResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'configSnapshotId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DescribeComplianceByConfigRuleResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ComplianceByConfigRules' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ComplianceByConfigRule',
                        'type' => 'object',
                        'properties' => [
                            'ConfigRuleName' => [
                                'type' => 'string',
                            ],
                            'Compliance' => [
                                'type' => 'object',
                                'properties' => [
                                    'ComplianceType' => [
                                        'type' => 'string',
                                    ],
                                    'ComplianceContributorCount' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CappedCount' => [
                                                'type' => 'numeric',
                                            ],
                                            'CapExceeded' => [
                                                'type' => 'boolean',
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
                    'location' => 'json',
                ],
            ],
        ],
        'DescribeComplianceByResourceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ComplianceByResources' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ComplianceByResource',
                        'type' => 'object',
                        'properties' => [
                            'ResourceType' => [
                                'type' => 'string',
                            ],
                            'ResourceId' => [
                                'type' => 'string',
                            ],
                            'Compliance' => [
                                'type' => 'object',
                                'properties' => [
                                    'ComplianceType' => [
                                        'type' => 'string',
                                    ],
                                    'ComplianceContributorCount' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CappedCount' => [
                                                'type' => 'numeric',
                                            ],
                                            'CapExceeded' => [
                                                'type' => 'boolean',
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
                    'location' => 'json',
                ],
            ],
        ],
        'DescribeConfigRuleEvaluationStatusResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ConfigRulesEvaluationStatus' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ConfigRuleEvaluationStatus',
                        'type' => 'object',
                        'properties' => [
                            'ConfigRuleName' => [
                                'type' => 'string',
                            ],
                            'ConfigRuleArn' => [
                                'type' => 'string',
                            ],
                            'ConfigRuleId' => [
                                'type' => 'string',
                            ],
                            'LastSuccessfulInvocationTime' => [
                                'type' => 'string',
                            ],
                            'LastFailedInvocationTime' => [
                                'type' => 'string',
                            ],
                            'FirstActivatedTime' => [
                                'type' => 'string',
                            ],
                            'LastErrorCode' => [
                                'type' => 'string',
                            ],
                            'LastErrorMessage' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeConfigRulesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ConfigRules' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ConfigRule',
                        'type' => 'object',
                        'properties' => [
                            'ConfigRuleName' => [
                                'type' => 'string',
                            ],
                            'ConfigRuleArn' => [
                                'type' => 'string',
                            ],
                            'ConfigRuleId' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Scope' => [
                                'type' => 'object',
                                'properties' => [
                                    'ComplianceResourceTypes' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'StringWithCharLimit256',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'TagKey' => [
                                        'type' => 'string',
                                    ],
                                    'TagValue' => [
                                        'type' => 'string',
                                    ],
                                    'ComplianceResourceId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Source' => [
                                'type' => 'object',
                                'properties' => [
                                    'Owner' => [
                                        'type' => 'string',
                                    ],
                                    'SourceIdentifier' => [
                                        'type' => 'string',
                                    ],
                                    'SourceDetails' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'SourceDetail',
                                            'type' => 'object',
                                            'properties' => [
                                                'EventSource' => [
                                                    'type' => 'string',
                                                ],
                                                'MessageType' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'InputParameters' => [
                                'type' => 'string',
                            ],
                            'MaximumExecutionFrequency' => [
                                'type' => 'string',
                            ],
                            'ConfigRuleState' => [
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
        'DescribeConfigurationRecorderStatusResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ConfigurationRecordersStatus' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ConfigurationRecorderStatus',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            'lastStartTime' => [
                                'type' => 'string',
                            ],
                            'lastStopTime' => [
                                'type' => 'string',
                            ],
                            'recording' => [
                                'type' => 'boolean',
                            ],
                            'lastStatus' => [
                                'type' => 'string',
                            ],
                            'lastErrorCode' => [
                                'type' => 'string',
                            ],
                            'lastErrorMessage' => [
                                'type' => 'string',
                            ],
                            'lastStatusChangeTime' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeConfigurationRecordersResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ConfigurationRecorders' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ConfigurationRecorder',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            'roleARN' => [
                                'type' => 'string',
                            ],
                            'recordingGroup' => [
                                'type' => 'object',
                                'properties' => [
                                    'allSupported' => [
                                        'type' => 'boolean',
                                    ],
                                    'resourceTypes' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'ResourceType',
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
        'DescribeDeliveryChannelStatusResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DeliveryChannelsStatus' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DeliveryChannelStatus',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            'configSnapshotDeliveryInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'lastStatus' => [
                                        'type' => 'string',
                                    ],
                                    'lastErrorCode' => [
                                        'type' => 'string',
                                    ],
                                    'lastErrorMessage' => [
                                        'type' => 'string',
                                    ],
                                    'lastAttemptTime' => [
                                        'type' => 'string',
                                    ],
                                    'lastSuccessfulTime' => [
                                        'type' => 'string',
                                    ],
                                    'nextDeliveryTime' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'configHistoryDeliveryInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'lastStatus' => [
                                        'type' => 'string',
                                    ],
                                    'lastErrorCode' => [
                                        'type' => 'string',
                                    ],
                                    'lastErrorMessage' => [
                                        'type' => 'string',
                                    ],
                                    'lastAttemptTime' => [
                                        'type' => 'string',
                                    ],
                                    'lastSuccessfulTime' => [
                                        'type' => 'string',
                                    ],
                                    'nextDeliveryTime' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'configStreamDeliveryInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'lastStatus' => [
                                        'type' => 'string',
                                    ],
                                    'lastErrorCode' => [
                                        'type' => 'string',
                                    ],
                                    'lastErrorMessage' => [
                                        'type' => 'string',
                                    ],
                                    'lastStatusChangeTime' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeDeliveryChannelsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DeliveryChannels' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DeliveryChannel',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            's3BucketName' => [
                                'type' => 'string',
                            ],
                            's3KeyPrefix' => [
                                'type' => 'string',
                            ],
                            'snsTopicARN' => [
                                'type' => 'string',
                            ],
                            'configSnapshotDeliveryProperties' => [
                                'type' => 'object',
                                'properties' => [
                                    'deliveryFrequency' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetComplianceDetailsByConfigRuleResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EvaluationResults' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'EvaluationResult',
                        'type' => 'object',
                        'properties' => [
                            'EvaluationResultIdentifier' => [
                                'type' => 'object',
                                'properties' => [
                                    'EvaluationResultQualifier' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'ConfigRuleName' => [
                                                'type' => 'string',
                                            ],
                                            'ResourceType' => [
                                                'type' => 'string',
                                            ],
                                            'ResourceId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'OrderingTimestamp' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'ComplianceType' => [
                                'type' => 'string',
                            ],
                            'ResultRecordedTime' => [
                                'type' => 'string',
                            ],
                            'ConfigRuleInvokedTime' => [
                                'type' => 'string',
                            ],
                            'Annotation' => [
                                'type' => 'string',
                            ],
                            'ResultToken' => [
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
        'GetComplianceDetailsByResourceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EvaluationResults' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'EvaluationResult',
                        'type' => 'object',
                        'properties' => [
                            'EvaluationResultIdentifier' => [
                                'type' => 'object',
                                'properties' => [
                                    'EvaluationResultQualifier' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'ConfigRuleName' => [
                                                'type' => 'string',
                                            ],
                                            'ResourceType' => [
                                                'type' => 'string',
                                            ],
                                            'ResourceId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'OrderingTimestamp' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'ComplianceType' => [
                                'type' => 'string',
                            ],
                            'ResultRecordedTime' => [
                                'type' => 'string',
                            ],
                            'ConfigRuleInvokedTime' => [
                                'type' => 'string',
                            ],
                            'Annotation' => [
                                'type' => 'string',
                            ],
                            'ResultToken' => [
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
        'GetComplianceSummaryByConfigRuleResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ComplianceSummary' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'CompliantResourceCount' => [
                            'type' => 'object',
                            'properties' => [
                                'CappedCount' => [
                                    'type' => 'numeric',
                                ],
                                'CapExceeded' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                        'NonCompliantResourceCount' => [
                            'type' => 'object',
                            'properties' => [
                                'CappedCount' => [
                                    'type' => 'numeric',
                                ],
                                'CapExceeded' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                        'ComplianceSummaryTimestamp' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetComplianceSummaryByResourceTypeResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ComplianceSummariesByResourceType' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ComplianceSummaryByResourceType',
                        'type' => 'object',
                        'properties' => [
                            'ResourceType' => [
                                'type' => 'string',
                            ],
                            'ComplianceSummary' => [
                                'type' => 'object',
                                'properties' => [
                                    'CompliantResourceCount' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CappedCount' => [
                                                'type' => 'numeric',
                                            ],
                                            'CapExceeded' => [
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'NonCompliantResourceCount' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CappedCount' => [
                                                'type' => 'numeric',
                                            ],
                                            'CapExceeded' => [
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'ComplianceSummaryTimestamp' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetResourceConfigHistoryResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'configurationItems' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ConfigurationItem',
                        'type' => 'object',
                        'properties' => [
                            'version' => [
                                'type' => 'string',
                            ],
                            'accountId' => [
                                'type' => 'string',
                            ],
                            'configurationItemCaptureTime' => [
                                'type' => 'string',
                            ],
                            'configurationItemStatus' => [
                                'type' => 'string',
                            ],
                            'configurationStateId' => [
                                'type' => 'string',
                            ],
                            'configurationItemMD5Hash' => [
                                'type' => 'string',
                            ],
                            'arn' => [
                                'type' => 'string',
                            ],
                            'resourceType' => [
                                'type' => 'string',
                            ],
                            'resourceId' => [
                                'type' => 'string',
                            ],
                            'resourceName' => [
                                'type' => 'string',
                            ],
                            'awsRegion' => [
                                'type' => 'string',
                            ],
                            'availabilityZone' => [
                                'type' => 'string',
                            ],
                            'resourceCreationTime' => [
                                'type' => 'string',
                            ],
                            'tags' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'relatedEvents' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'RelatedEvent',
                                    'type' => 'string',
                                ],
                            ],
                            'relationships' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Relationship',
                                    'type' => 'object',
                                    'properties' => [
                                        'resourceType' => [
                                            'type' => 'string',
                                        ],
                                        'resourceId' => [
                                            'type' => 'string',
                                        ],
                                        'resourceName' => [
                                            'type' => 'string',
                                        ],
                                        'relationshipName' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'configuration' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListDiscoveredResourcesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'resourceIdentifiers' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ResourceIdentifier',
                        'type' => 'object',
                        'properties' => [
                            'resourceType' => [
                                'type' => 'string',
                            ],
                            'resourceId' => [
                                'type' => 'string',
                            ],
                            'resourceName' => [
                                'type' => 'string',
                            ],
                            'resourceDeletionTime' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'PutEvaluationsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'FailedEvaluations' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Evaluation',
                        'type' => 'object',
                        'properties' => [
                            'ComplianceResourceType' => [
                                'type' => 'string',
                            ],
                            'ComplianceResourceId' => [
                                'type' => 'string',
                            ],
                            'ComplianceType' => [
                                'type' => 'string',
                            ],
                            'Annotation' => [
                                'type' => 'string',
                            ],
                            'OrderingTimestamp' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'iterators' => [
        'GetResourceConfigHistory' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'limit',
            'result_key' => 'configurationItems',
        ],
    ],
];
