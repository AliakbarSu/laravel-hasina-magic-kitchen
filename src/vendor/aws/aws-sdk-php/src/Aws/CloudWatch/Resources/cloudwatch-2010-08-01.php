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
    'apiVersion' => '2010-08-01',
    'endpointPrefix' => 'monitoring',
    'serviceFullName' => 'Amazon CloudWatch',
    'serviceAbbreviation' => 'CloudWatch',
    'serviceType' => 'query',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'CloudWatch',
    'regions' => [
        'us-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'monitoring.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'monitoring.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'monitoring.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'monitoring.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'monitoring.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'monitoring.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'monitoring.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'monitoring.sa-east-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'monitoring.cn-north-1.amazonaws.com.cn',
        ],
        'us-gov-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'monitoring.us-gov-west-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'DeleteAlarms' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteAlarms',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-08-01',
                ],
                'AlarmNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AlarmNames.member',
                    'maxItems' => 100,
                    'items' => [
                        'name' => 'AlarmName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The named resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeAlarmHistory' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeAlarmHistoryOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeAlarmHistory',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-08-01',
                ],
                'AlarmName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'HistoryItemType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'StartDate' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'aws.query',
                ],
                'EndDate' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 100,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The next token specified is invalid.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'DescribeAlarms' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeAlarmsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeAlarms',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-08-01',
                ],
                'AlarmNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AlarmNames.member',
                    'maxItems' => 100,
                    'items' => [
                        'name' => 'AlarmName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'AlarmNamePrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'StateValue' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ActionPrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 100,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The next token specified is invalid.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'DescribeAlarmsForMetric' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeAlarmsForMetricOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeAlarmsForMetric',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-08-01',
                ],
                'MetricName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Namespace' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Statistic' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Dimensions' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Dimensions.member',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'Dimension',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Value' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                'Period' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 60,
                ],
                'Unit' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DisableAlarmActions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DisableAlarmActions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-08-01',
                ],
                'AlarmNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AlarmNames.member',
                    'maxItems' => 100,
                    'items' => [
                        'name' => 'AlarmName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
        ],
        'EnableAlarmActions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'EnableAlarmActions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-08-01',
                ],
                'AlarmNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AlarmNames.member',
                    'maxItems' => 100,
                    'items' => [
                        'name' => 'AlarmName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
        ],
        'GetMetricStatistics' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetMetricStatisticsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetMetricStatistics',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-08-01',
                ],
                'Namespace' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MetricName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Dimensions' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Dimensions.member',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'Dimension',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Value' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                'StartTime' => [
                    'required' => true,
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'aws.query',
                ],
                'EndTime' => [
                    'required' => true,
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'aws.query',
                ],
                'Period' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 60,
                ],
                'Statistics' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Statistics.member',
                    'minItems' => 1,
                    'maxItems' => 5,
                    'items' => [
                        'name' => 'Statistic',
                        'type' => 'string',
                    ],
                ],
                'Unit' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Bad or out-of-range value was supplied for the input parameter.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'An input parameter that is mandatory for processing the request is not supplied.',
                    'class' => 'MissingRequiredParameterException',
                ],
                [
                    'reason' =>
                        'Parameters that must not be used together were used together.',
                    'class' => 'InvalidParameterCombinationException',
                ],
                [
                    'reason' =>
                        'Indicates that the request processing has failed due to some unknown error, exception, or failure.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'ListMetrics' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListMetricsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListMetrics',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-08-01',
                ],
                'Namespace' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MetricName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Dimensions' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Dimensions.member',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'DimensionFilter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Value' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the request processing has failed due to some unknown error, exception, or failure.',
                    'class' => 'InternalServiceException',
                ],
                [
                    'reason' =>
                        'Bad or out-of-range value was supplied for the input parameter.',
                    'class' => 'InvalidParameterValueException',
                ],
            ],
        ],
        'PutMetricAlarm' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PutMetricAlarm',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-08-01',
                ],
                'AlarmName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'AlarmDescription' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ActionsEnabled' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'OKActions' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'OKActions.member',
                    'maxItems' => 5,
                    'items' => [
                        'name' => 'ResourceName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'AlarmActions' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AlarmActions.member',
                    'maxItems' => 5,
                    'items' => [
                        'name' => 'ResourceName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'InsufficientDataActions' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'InsufficientDataActions.member',
                    'maxItems' => 5,
                    'items' => [
                        'name' => 'ResourceName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'MetricName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Namespace' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Statistic' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Dimensions' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Dimensions.member',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'Dimension',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Value' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                'Period' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 60,
                ],
                'Unit' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EvaluationPeriods' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                ],
                'Threshold' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'ComparisonOperator' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The quota for alarms for this customer has already been reached.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'PutMetricData' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PutMetricData',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-08-01',
                ],
                'Namespace' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MetricData' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'MetricData.member',
                    'items' => [
                        'name' => 'MetricDatum',
                        'type' => 'object',
                        'properties' => [
                            'MetricName' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Dimensions' => [
                                'type' => 'array',
                                'sentAs' => 'Dimensions.member',
                                'maxItems' => 10,
                                'items' => [
                                    'name' => 'Dimension',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'required' => true,
                                            'type' => 'string',
                                            'minLength' => 1,
                                        ],
                                        'Value' => [
                                            'required' => true,
                                            'type' => 'string',
                                            'minLength' => 1,
                                        ],
                                    ],
                                ],
                            ],
                            'Timestamp' => [
                                'type' => ['object', 'string', 'integer'],
                                'format' => 'date-time',
                            ],
                            'Value' => [
                                'type' => 'numeric',
                            ],
                            'StatisticValues' => [
                                'type' => 'object',
                                'properties' => [
                                    'SampleCount' => [
                                        'required' => true,
                                        'type' => 'numeric',
                                    ],
                                    'Sum' => [
                                        'required' => true,
                                        'type' => 'numeric',
                                    ],
                                    'Minimum' => [
                                        'required' => true,
                                        'type' => 'numeric',
                                    ],
                                    'Maximum' => [
                                        'required' => true,
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'Unit' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Bad or out-of-range value was supplied for the input parameter.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'An input parameter that is mandatory for processing the request is not supplied.',
                    'class' => 'MissingRequiredParameterException',
                ],
                [
                    'reason' =>
                        'Parameters that must not be used together were used together.',
                    'class' => 'InvalidParameterCombinationException',
                ],
                [
                    'reason' =>
                        'Indicates that the request processing has failed due to some unknown error, exception, or failure.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'SetAlarmState' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetAlarmState',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-08-01',
                ],
                'AlarmName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'StateValue' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'StateReason' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'StateReasonData' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The named resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'Data was not syntactically valid JSON.',
                    'class' => 'InvalidFormatException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'DescribeAlarmHistoryOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AlarmHistoryItems' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'AlarmHistoryItem',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'AlarmName' => [
                                'type' => 'string',
                            ],
                            'Timestamp' => [
                                'type' => 'string',
                            ],
                            'HistoryItemType' => [
                                'type' => 'string',
                            ],
                            'HistorySummary' => [
                                'type' => 'string',
                            ],
                            'HistoryData' => [
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
        'DescribeAlarmsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MetricAlarms' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'MetricAlarm',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'AlarmName' => [
                                'type' => 'string',
                            ],
                            'AlarmArn' => [
                                'type' => 'string',
                            ],
                            'AlarmDescription' => [
                                'type' => 'string',
                            ],
                            'AlarmConfigurationUpdatedTimestamp' => [
                                'type' => 'string',
                            ],
                            'ActionsEnabled' => [
                                'type' => 'boolean',
                            ],
                            'OKActions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ResourceName',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'AlarmActions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ResourceName',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'InsufficientDataActions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ResourceName',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'StateValue' => [
                                'type' => 'string',
                            ],
                            'StateReason' => [
                                'type' => 'string',
                            ],
                            'StateReasonData' => [
                                'type' => 'string',
                            ],
                            'StateUpdatedTimestamp' => [
                                'type' => 'string',
                            ],
                            'MetricName' => [
                                'type' => 'string',
                            ],
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'Statistic' => [
                                'type' => 'string',
                            ],
                            'Dimensions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Dimension',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'Period' => [
                                'type' => 'numeric',
                            ],
                            'Unit' => [
                                'type' => 'string',
                            ],
                            'EvaluationPeriods' => [
                                'type' => 'numeric',
                            ],
                            'Threshold' => [
                                'type' => 'numeric',
                            ],
                            'ComparisonOperator' => [
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
        'DescribeAlarmsForMetricOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MetricAlarms' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'MetricAlarm',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'AlarmName' => [
                                'type' => 'string',
                            ],
                            'AlarmArn' => [
                                'type' => 'string',
                            ],
                            'AlarmDescription' => [
                                'type' => 'string',
                            ],
                            'AlarmConfigurationUpdatedTimestamp' => [
                                'type' => 'string',
                            ],
                            'ActionsEnabled' => [
                                'type' => 'boolean',
                            ],
                            'OKActions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ResourceName',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'AlarmActions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ResourceName',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'InsufficientDataActions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ResourceName',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'StateValue' => [
                                'type' => 'string',
                            ],
                            'StateReason' => [
                                'type' => 'string',
                            ],
                            'StateReasonData' => [
                                'type' => 'string',
                            ],
                            'StateUpdatedTimestamp' => [
                                'type' => 'string',
                            ],
                            'MetricName' => [
                                'type' => 'string',
                            ],
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'Statistic' => [
                                'type' => 'string',
                            ],
                            'Dimensions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Dimension',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'Period' => [
                                'type' => 'numeric',
                            ],
                            'Unit' => [
                                'type' => 'string',
                            ],
                            'EvaluationPeriods' => [
                                'type' => 'numeric',
                            ],
                            'Threshold' => [
                                'type' => 'numeric',
                            ],
                            'ComparisonOperator' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetMetricStatisticsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Label' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Datapoints' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Datapoint',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Timestamp' => [
                                'type' => 'string',
                            ],
                            'SampleCount' => [
                                'type' => 'numeric',
                            ],
                            'Average' => [
                                'type' => 'numeric',
                            ],
                            'Sum' => [
                                'type' => 'numeric',
                            ],
                            'Minimum' => [
                                'type' => 'numeric',
                            ],
                            'Maximum' => [
                                'type' => 'numeric',
                            ],
                            'Unit' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListMetricsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Metrics' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Metric',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'MetricName' => [
                                'type' => 'string',
                            ],
                            'Dimensions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Dimension',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'Name' => [
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
    ],
    'iterators' => [
        'DescribeAlarmHistory' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxRecords',
            'result_key' => 'AlarmHistoryItems',
        ],
        'DescribeAlarms' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxRecords',
            'result_key' => 'MetricAlarms',
        ],
        'DescribeAlarmsForMetric' => [
            'result_key' => 'MetricAlarms',
        ],
        'ListMetrics' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'Metrics',
        ],
    ],
];
