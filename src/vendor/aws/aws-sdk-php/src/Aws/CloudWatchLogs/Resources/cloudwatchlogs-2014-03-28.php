<?php

return [
    'apiVersion' => '2014-03-28',
    'endpointPrefix' => 'logs',
    'serviceFullName' => 'Amazon CloudWatch Logs',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'Logs_20140328.',
    'signatureVersion' => 'v4',
    'namespace' => 'CloudWatchLogs',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'logs.us-east-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'CancelExportTask' => [
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
                    'default' => 'Logs_20140328.CancelExportTask',
                ],
                'taskId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the operation is not valid on the specified resource',
                    'class' => 'InvalidOperationException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'CreateExportTask' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateExportTaskResponse',
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
                    'default' => 'Logs_20140328.CreateExportTask',
                ],
                'taskName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'logStreamNamePrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'from' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'to' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'destination' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'destinationPrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if you have reached the maximum number of resources that can be created.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource already exists.',
                    'class' => 'ResourceAlreadyExistsException',
                ],
            ],
        ],
        'CreateLogGroup' => [
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
                    'default' => 'Logs_20140328.CreateLogGroup',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource already exists.',
                    'class' => 'ResourceAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Returned if you have reached the maximum number of resources that can be created.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'CreateLogStream' => [
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
                    'default' => 'Logs_20140328.CreateLogStream',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'logStreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource already exists.',
                    'class' => 'ResourceAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DeleteDestination' => [
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
                    'default' => 'Logs_20140328.DeleteDestination',
                ],
                'destinationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DeleteLogGroup' => [
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
                    'default' => 'Logs_20140328.DeleteLogGroup',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DeleteLogStream' => [
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
                    'default' => 'Logs_20140328.DeleteLogStream',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'logStreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DeleteMetricFilter' => [
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
                    'default' => 'Logs_20140328.DeleteMetricFilter',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'filterName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DeleteRetentionPolicy' => [
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
                    'default' => 'Logs_20140328.DeleteRetentionPolicy',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DeleteSubscriptionFilter' => [
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
                    'default' => 'Logs_20140328.DeleteSubscriptionFilter',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'filterName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DescribeDestinations' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeDestinationsResponse',
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
                    'default' => 'Logs_20140328.DescribeDestinations',
                ],
                'DestinationNamePrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DescribeExportTasks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeExportTasksResponse',
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
                    'default' => 'Logs_20140328.DescribeExportTasks',
                ],
                'taskId' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'statusCode' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DescribeLogGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeLogGroupsResponse',
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
                    'default' => 'Logs_20140328.DescribeLogGroups',
                ],
                'logGroupNamePrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DescribeLogStreams' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeLogStreamsResponse',
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
                    'default' => 'Logs_20140328.DescribeLogStreams',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'logStreamNamePrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'orderBy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'descending' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DescribeMetricFilters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeMetricFiltersResponse',
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
                    'default' => 'Logs_20140328.DescribeMetricFilters',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'filterNamePrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DescribeSubscriptionFilters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeSubscriptionFiltersResponse',
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
                    'default' => 'Logs_20140328.DescribeSubscriptionFilters',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'filterNamePrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'FilterLogEvents' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'FilterLogEventsResponse',
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
                    'default' => 'Logs_20140328.FilterLogEvents',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'logStreamNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 100,
                    'items' => [
                        'name' => 'LogStreamName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'startTime' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'endTime' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'filterPattern' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 10000,
                ],
                'interleaved' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'GetLogEvents' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetLogEventsResponse',
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
                    'default' => 'Logs_20140328.GetLogEvents',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'logStreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'startTime' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'endTime' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 10000,
                ],
                'startFromHead' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'PutDestination' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PutDestinationResponse',
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
                    'default' => 'Logs_20140328.PutDestination',
                ],
                'destinationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'targetArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'roleArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'PutDestinationPolicy' => [
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
                    'default' => 'Logs_20140328.PutDestinationPolicy',
                ],
                'destinationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'accessPolicy' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'PutLogEvents' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PutLogEventsResponse',
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
                    'default' => 'Logs_20140328.PutLogEvents',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'logStreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'logEvents' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 10000,
                    'items' => [
                        'name' => 'InputLogEvent',
                        'type' => 'object',
                        'properties' => [
                            'timestamp' => [
                                'required' => true,
                                'type' => 'numeric',
                            ],
                            'message' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                'sequenceToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'class' => 'InvalidSequenceTokenException',
                ],
                [
                    'class' => 'DataAlreadyAcceptedException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'PutMetricFilter' => [
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
                    'default' => 'Logs_20140328.PutMetricFilter',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'filterName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'filterPattern' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'metricTransformations' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 1,
                    'items' => [
                        'name' => 'MetricTransformation',
                        'type' => 'object',
                        'properties' => [
                            'metricName' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'metricNamespace' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'metricValue' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if you have reached the maximum number of resources that can be created.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'PutRetentionPolicy' => [
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
                    'default' => 'Logs_20140328.PutRetentionPolicy',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'retentionInDays' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'PutSubscriptionFilter' => [
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
                    'default' => 'Logs_20140328.PutSubscriptionFilter',
                ],
                'logGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'filterName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'filterPattern' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'destinationArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'roleArn' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if multiple requests to update the same resource were in conflict.',
                    'class' => 'OperationAbortedException',
                ],
                [
                    'reason' =>
                        'Returned if you have reached the maximum number of resources that can be created.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'TestMetricFilter' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'TestMetricFilterResponse',
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
                    'default' => 'Logs_20140328.TestMetricFilter',
                ],
                'filterPattern' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'logEventMessages' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 50,
                    'items' => [
                        'name' => 'EventMessage',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'CreateExportTaskResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'taskId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DescribeDestinationsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'destinations' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Destination',
                        'type' => 'object',
                        'properties' => [
                            'destinationName' => [
                                'type' => 'string',
                            ],
                            'targetArn' => [
                                'type' => 'string',
                            ],
                            'roleArn' => [
                                'type' => 'string',
                            ],
                            'accessPolicy' => [
                                'type' => 'string',
                            ],
                            'arn' => [
                                'type' => 'string',
                            ],
                            'creationTime' => [
                                'type' => 'numeric',
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
        'DescribeExportTasksResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'exportTasks' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ExportTask',
                        'type' => 'object',
                        'properties' => [
                            'taskId' => [
                                'type' => 'string',
                            ],
                            'taskName' => [
                                'type' => 'string',
                            ],
                            'logGroupName' => [
                                'type' => 'string',
                            ],
                            'from' => [
                                'type' => 'numeric',
                            ],
                            'to' => [
                                'type' => 'numeric',
                            ],
                            'destination' => [
                                'type' => 'string',
                            ],
                            'destinationPrefix' => [
                                'type' => 'string',
                            ],
                            'status' => [
                                'type' => 'object',
                                'properties' => [
                                    'code' => [
                                        'type' => 'string',
                                    ],
                                    'message' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'executionInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'creationTime' => [
                                        'type' => 'numeric',
                                    ],
                                    'completionTime' => [
                                        'type' => 'numeric',
                                    ],
                                ],
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
        'DescribeLogGroupsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'logGroups' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'LogGroup',
                        'type' => 'object',
                        'properties' => [
                            'logGroupName' => [
                                'type' => 'string',
                            ],
                            'creationTime' => [
                                'type' => 'numeric',
                            ],
                            'retentionInDays' => [
                                'type' => 'numeric',
                            ],
                            'metricFilterCount' => [
                                'type' => 'numeric',
                            ],
                            'arn' => [
                                'type' => 'string',
                            ],
                            'storedBytes' => [
                                'type' => 'numeric',
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
        'DescribeLogStreamsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'logStreams' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'LogStream',
                        'type' => 'object',
                        'properties' => [
                            'logStreamName' => [
                                'type' => 'string',
                            ],
                            'creationTime' => [
                                'type' => 'numeric',
                            ],
                            'firstEventTimestamp' => [
                                'type' => 'numeric',
                            ],
                            'lastEventTimestamp' => [
                                'type' => 'numeric',
                            ],
                            'lastIngestionTime' => [
                                'type' => 'numeric',
                            ],
                            'uploadSequenceToken' => [
                                'type' => 'string',
                            ],
                            'arn' => [
                                'type' => 'string',
                            ],
                            'storedBytes' => [
                                'type' => 'numeric',
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
        'DescribeMetricFiltersResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'metricFilters' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'MetricFilter',
                        'type' => 'object',
                        'properties' => [
                            'filterName' => [
                                'type' => 'string',
                            ],
                            'filterPattern' => [
                                'type' => 'string',
                            ],
                            'metricTransformations' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'MetricTransformation',
                                    'type' => 'object',
                                    'properties' => [
                                        'metricName' => [
                                            'type' => 'string',
                                        ],
                                        'metricNamespace' => [
                                            'type' => 'string',
                                        ],
                                        'metricValue' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'creationTime' => [
                                'type' => 'numeric',
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
        'DescribeSubscriptionFiltersResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'subscriptionFilters' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'SubscriptionFilter',
                        'type' => 'object',
                        'properties' => [
                            'filterName' => [
                                'type' => 'string',
                            ],
                            'logGroupName' => [
                                'type' => 'string',
                            ],
                            'filterPattern' => [
                                'type' => 'string',
                            ],
                            'destinationArn' => [
                                'type' => 'string',
                            ],
                            'roleArn' => [
                                'type' => 'string',
                            ],
                            'creationTime' => [
                                'type' => 'numeric',
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
        'FilterLogEventsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'events' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'FilteredLogEvent',
                        'type' => 'object',
                        'properties' => [
                            'logStreamName' => [
                                'type' => 'string',
                            ],
                            'timestamp' => [
                                'type' => 'numeric',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'ingestionTime' => [
                                'type' => 'numeric',
                            ],
                            'eventId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'searchedLogStreams' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'SearchedLogStream',
                        'type' => 'object',
                        'properties' => [
                            'logStreamName' => [
                                'type' => 'string',
                            ],
                            'searchedCompletely' => [
                                'type' => 'boolean',
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
        'GetLogEventsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'events' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'OutputLogEvent',
                        'type' => 'object',
                        'properties' => [
                            'timestamp' => [
                                'type' => 'numeric',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'ingestionTime' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'nextForwardToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextBackwardToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'PutDestinationResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'destination' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'destinationName' => [
                            'type' => 'string',
                        ],
                        'targetArn' => [
                            'type' => 'string',
                        ],
                        'roleArn' => [
                            'type' => 'string',
                        ],
                        'accessPolicy' => [
                            'type' => 'string',
                        ],
                        'arn' => [
                            'type' => 'string',
                        ],
                        'creationTime' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'PutLogEventsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'nextSequenceToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'rejectedLogEventsInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'tooNewLogEventStartIndex' => [
                            'type' => 'numeric',
                        ],
                        'tooOldLogEventEndIndex' => [
                            'type' => 'numeric',
                        ],
                        'expiredLogEventEndIndex' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'TestMetricFilterResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'matches' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'MetricFilterMatchRecord',
                        'type' => 'object',
                        'properties' => [
                            'eventNumber' => [
                                'type' => 'numeric',
                            ],
                            'eventMessage' => [
                                'type' => 'string',
                            ],
                            'extractedValues' => [
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
    'iterators' => [
        'DescribeDestinations' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'limit',
            'result_key' => 'destinations',
        ],
        'DescribeLogGroups' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'limit',
            'result_key' => 'logGroups',
        ],
        'DescribeLogStreams' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'limit',
            'result_key' => 'logStreams',
        ],
        'DescribeMetricFilters' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'limit',
            'result_key' => 'metricFilters',
        ],
        'DescribeSubscriptionFilters' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'limit',
            'result_key' => 'subscriptionFilters',
        ],
        'FilterLogEvents' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'limit',
            'result_key' => ['events', 'searchedLogStreams'],
        ],
        'GetLogEvents' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextForwardToken',
            'limit_key' => 'limit',
            'result_key' => 'events',
        ],
    ],
];
