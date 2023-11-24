<?php

return [
    'apiVersion' => '2014-12-12',
    'endpointPrefix' => 'machinelearning',
    'serviceFullName' => 'Amazon Machine Learning',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'AmazonML_20141212.',
    'signatureVersion' => 'v4',
    'namespace' => 'MachineLearning',
    'operations' => [
        'CreateBatchPrediction' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateBatchPredictionOutput',
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
                    'default' => 'AmazonML_20141212.CreateBatchPrediction',
                ],
                'BatchPredictionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'BatchPredictionName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MLModelId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'BatchPredictionDataSourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'OutputUri' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'A second request to use or change an object was not allowed. This can result from retrying a request using a parameter that was not present in the original request.',
                    'class' => 'IdempotentParameterMismatchException',
                ],
            ],
        ],
        'CreateDataSourceFromRDS' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateDataSourceFromRDSOutput',
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
                    'default' => 'AmazonML_20141212.CreateDataSourceFromRDS',
                ],
                'DataSourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'DataSourceName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RDSData' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'DatabaseInformation' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'InstanceIdentifier' => [
                                    'required' => true,
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'DatabaseName' => [
                                    'required' => true,
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                            ],
                        ],
                        'SelectSqlQuery' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'DatabaseCredentials' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'Username' => [
                                    'required' => true,
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'Password' => [
                                    'required' => true,
                                    'type' => 'string',
                                    'minLength' => 8,
                                ],
                            ],
                        ],
                        'S3StagingLocation' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'DataRearrangement' => [
                            'type' => 'string',
                        ],
                        'DataSchema' => [
                            'type' => 'string',
                        ],
                        'DataSchemaUri' => [
                            'type' => 'string',
                        ],
                        'ResourceRole' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'ServiceRole' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'SubnetId' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'SecurityGroupIds' => [
                            'required' => true,
                            'type' => 'array',
                            'items' => [
                                'name' => 'EDPSecurityGroupId',
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                'RoleARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ComputeStatistics' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'A second request to use or change an object was not allowed. This can result from retrying a request using a parameter that was not present in the original request.',
                    'class' => 'IdempotentParameterMismatchException',
                ],
            ],
        ],
        'CreateDataSourceFromRedshift' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateDataSourceFromRedshiftOutput',
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
                        'AmazonML_20141212.CreateDataSourceFromRedshift',
                ],
                'DataSourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'DataSourceName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DataSpec' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'DatabaseInformation' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'DatabaseName' => [
                                    'required' => true,
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'ClusterIdentifier' => [
                                    'required' => true,
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                            ],
                        ],
                        'SelectSqlQuery' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'DatabaseCredentials' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'Username' => [
                                    'required' => true,
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'Password' => [
                                    'required' => true,
                                    'type' => 'string',
                                    'minLength' => 8,
                                ],
                            ],
                        ],
                        'S3StagingLocation' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'DataRearrangement' => [
                            'type' => 'string',
                        ],
                        'DataSchema' => [
                            'type' => 'string',
                        ],
                        'DataSchemaUri' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RoleARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ComputeStatistics' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'A second request to use or change an object was not allowed. This can result from retrying a request using a parameter that was not present in the original request.',
                    'class' => 'IdempotentParameterMismatchException',
                ],
            ],
        ],
        'CreateDataSourceFromS3' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateDataSourceFromS3Output',
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
                    'default' => 'AmazonML_20141212.CreateDataSourceFromS3',
                ],
                'DataSourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'DataSourceName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DataSpec' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'DataLocationS3' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'DataRearrangement' => [
                            'type' => 'string',
                        ],
                        'DataSchema' => [
                            'type' => 'string',
                        ],
                        'DataSchemaLocationS3' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'ComputeStatistics' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'A second request to use or change an object was not allowed. This can result from retrying a request using a parameter that was not present in the original request.',
                    'class' => 'IdempotentParameterMismatchException',
                ],
            ],
        ],
        'CreateEvaluation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateEvaluationOutput',
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
                    'default' => 'AmazonML_20141212.CreateEvaluation',
                ],
                'EvaluationId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'EvaluationName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MLModelId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'EvaluationDataSourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'A second request to use or change an object was not allowed. This can result from retrying a request using a parameter that was not present in the original request.',
                    'class' => 'IdempotentParameterMismatchException',
                ],
            ],
        ],
        'CreateMLModel' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateMLModelOutput',
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
                    'default' => 'AmazonML_20141212.CreateMLModel',
                ],
                'MLModelId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'MLModelName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MLModelType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Parameters' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'StringType',
                        ],
                    ],
                ],
                'TrainingDataSourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Recipe' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RecipeUri' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'A second request to use or change an object was not allowed. This can result from retrying a request using a parameter that was not present in the original request.',
                    'class' => 'IdempotentParameterMismatchException',
                ],
            ],
        ],
        'CreateRealtimeEndpoint' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateRealtimeEndpointOutput',
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
                    'default' => 'AmazonML_20141212.CreateRealtimeEndpoint',
                ],
                'MLModelId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'DeleteBatchPrediction' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteBatchPredictionOutput',
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
                    'default' => 'AmazonML_20141212.DeleteBatchPrediction',
                ],
                'BatchPredictionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'DeleteDataSource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteDataSourceOutput',
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
                    'default' => 'AmazonML_20141212.DeleteDataSource',
                ],
                'DataSourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'DeleteEvaluation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteEvaluationOutput',
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
                    'default' => 'AmazonML_20141212.DeleteEvaluation',
                ],
                'EvaluationId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'DeleteMLModel' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteMLModelOutput',
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
                    'default' => 'AmazonML_20141212.DeleteMLModel',
                ],
                'MLModelId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'DeleteRealtimeEndpoint' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteRealtimeEndpointOutput',
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
                    'default' => 'AmazonML_20141212.DeleteRealtimeEndpoint',
                ],
                'MLModelId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'DescribeBatchPredictions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeBatchPredictionsOutput',
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
                    'default' => 'AmazonML_20141212.DescribeBatchPredictions',
                ],
                'FilterVariable' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'EQ' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'GT' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LT' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'GE' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LE' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NE' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Prefix' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SortOrder' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 100,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'DescribeDataSources' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeDataSourcesOutput',
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
                    'default' => 'AmazonML_20141212.DescribeDataSources',
                ],
                'FilterVariable' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'EQ' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'GT' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LT' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'GE' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LE' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NE' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Prefix' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SortOrder' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 100,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'DescribeEvaluations' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeEvaluationsOutput',
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
                    'default' => 'AmazonML_20141212.DescribeEvaluations',
                ],
                'FilterVariable' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'EQ' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'GT' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LT' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'GE' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LE' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NE' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Prefix' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SortOrder' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 100,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'DescribeMLModels' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeMLModelsOutput',
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
                    'default' => 'AmazonML_20141212.DescribeMLModels',
                ],
                'FilterVariable' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'EQ' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'GT' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LT' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'GE' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LE' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NE' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Prefix' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SortOrder' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 100,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'GetBatchPrediction' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetBatchPredictionOutput',
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
                    'default' => 'AmazonML_20141212.GetBatchPrediction',
                ],
                'BatchPredictionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'GetDataSource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetDataSourceOutput',
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
                    'default' => 'AmazonML_20141212.GetDataSource',
                ],
                'DataSourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Verbose' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'GetEvaluation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetEvaluationOutput',
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
                    'default' => 'AmazonML_20141212.GetEvaluation',
                ],
                'EvaluationId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'GetMLModel' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetMLModelOutput',
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
                    'default' => 'AmazonML_20141212.GetMLModel',
                ],
                'MLModelId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Verbose' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'Predict' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PredictOutput',
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
                    'default' => 'AmazonML_20141212.Predict',
                ],
                'MLModelId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Record' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'VariableName',
                        ],
                    ],
                ],
                'PredictEndpoint' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The subscriber exceeded the maximum number of operations. This exception can occur when listing objects such as DataSource.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
                [
                    'reason' =>
                        'The exception is thrown when a predict request is made to an unmounted MLModel.',
                    'class' => 'PredictorNotMountedException',
                ],
            ],
        ],
        'UpdateBatchPrediction' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateBatchPredictionOutput',
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
                    'default' => 'AmazonML_20141212.UpdateBatchPrediction',
                ],
                'BatchPredictionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'BatchPredictionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'UpdateDataSource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateDataSourceOutput',
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
                    'default' => 'AmazonML_20141212.UpdateDataSource',
                ],
                'DataSourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'DataSourceName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'UpdateEvaluation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateEvaluationOutput',
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
                    'default' => 'AmazonML_20141212.UpdateEvaluation',
                ],
                'EvaluationId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'EvaluationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
        'UpdateMLModel' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateMLModelOutput',
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
                    'default' => 'AmazonML_20141212.UpdateMLModel',
                ],
                'MLModelId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'MLModelName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ScoreThreshold' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error on the client occurred. Typically, the cause is an invalid input value.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'A specified resource cannot be located.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'An error on the server occurred when trying to process a request.',
                    'class' => 'InternalServerException',
                ],
            ],
        ],
    ],
    'models' => [
        'CreateBatchPredictionOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'BatchPredictionId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateDataSourceFromRDSOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DataSourceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateDataSourceFromRedshiftOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DataSourceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateDataSourceFromS3Output' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DataSourceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateEvaluationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EvaluationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateMLModelOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MLModelId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateRealtimeEndpointOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MLModelId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RealtimeEndpointInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'PeakRequestsPerSecond' => [
                            'type' => 'numeric',
                        ],
                        'CreatedAt' => [
                            'type' => 'string',
                        ],
                        'EndpointUrl' => [
                            'type' => 'string',
                        ],
                        'EndpointStatus' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DeleteBatchPredictionOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'BatchPredictionId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteDataSourceOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DataSourceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteEvaluationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EvaluationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteMLModelOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MLModelId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteRealtimeEndpointOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MLModelId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RealtimeEndpointInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'PeakRequestsPerSecond' => [
                            'type' => 'numeric',
                        ],
                        'CreatedAt' => [
                            'type' => 'string',
                        ],
                        'EndpointUrl' => [
                            'type' => 'string',
                        ],
                        'EndpointStatus' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeBatchPredictionsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Results' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'BatchPrediction',
                        'type' => 'object',
                        'properties' => [
                            'BatchPredictionId' => [
                                'type' => 'string',
                            ],
                            'MLModelId' => [
                                'type' => 'string',
                            ],
                            'BatchPredictionDataSourceId' => [
                                'type' => 'string',
                            ],
                            'InputDataLocationS3' => [
                                'type' => 'string',
                            ],
                            'CreatedByIamUser' => [
                                'type' => 'string',
                            ],
                            'CreatedAt' => [
                                'type' => 'string',
                            ],
                            'LastUpdatedAt' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'OutputUri' => [
                                'type' => 'string',
                            ],
                            'Message' => [
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
        'DescribeDataSourcesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Results' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DataSource',
                        'type' => 'object',
                        'properties' => [
                            'DataSourceId' => [
                                'type' => 'string',
                            ],
                            'DataLocationS3' => [
                                'type' => 'string',
                            ],
                            'DataRearrangement' => [
                                'type' => 'string',
                            ],
                            'CreatedByIamUser' => [
                                'type' => 'string',
                            ],
                            'CreatedAt' => [
                                'type' => 'string',
                            ],
                            'LastUpdatedAt' => [
                                'type' => 'string',
                            ],
                            'DataSizeInBytes' => [
                                'type' => 'numeric',
                            ],
                            'NumberOfFiles' => [
                                'type' => 'numeric',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RedshiftMetadata' => [
                                'type' => 'object',
                                'properties' => [
                                    'RedshiftDatabase' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DatabaseName' => [
                                                'type' => 'string',
                                            ],
                                            'ClusterIdentifier' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'DatabaseUserName' => [
                                        'type' => 'string',
                                    ],
                                    'SelectSqlQuery' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'RDSMetadata' => [
                                'type' => 'object',
                                'properties' => [
                                    'Database' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'InstanceIdentifier' => [
                                                'type' => 'string',
                                            ],
                                            'DatabaseName' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'DatabaseUserName' => [
                                        'type' => 'string',
                                    ],
                                    'SelectSqlQuery' => [
                                        'type' => 'string',
                                    ],
                                    'ResourceRole' => [
                                        'type' => 'string',
                                    ],
                                    'ServiceRole' => [
                                        'type' => 'string',
                                    ],
                                    'DataPipelineId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'RoleARN' => [
                                'type' => 'string',
                            ],
                            'ComputeStatistics' => [
                                'type' => 'boolean',
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
        'DescribeEvaluationsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Results' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Evaluation',
                        'type' => 'object',
                        'properties' => [
                            'EvaluationId' => [
                                'type' => 'string',
                            ],
                            'MLModelId' => [
                                'type' => 'string',
                            ],
                            'EvaluationDataSourceId' => [
                                'type' => 'string',
                            ],
                            'InputDataLocationS3' => [
                                'type' => 'string',
                            ],
                            'CreatedByIamUser' => [
                                'type' => 'string',
                            ],
                            'CreatedAt' => [
                                'type' => 'string',
                            ],
                            'LastUpdatedAt' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'PerformanceMetrics' => [
                                'type' => 'object',
                                'properties' => [
                                    'Properties' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
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
        'DescribeMLModelsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Results' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'MLModel',
                        'type' => 'object',
                        'properties' => [
                            'MLModelId' => [
                                'type' => 'string',
                            ],
                            'TrainingDataSourceId' => [
                                'type' => 'string',
                            ],
                            'CreatedByIamUser' => [
                                'type' => 'string',
                            ],
                            'CreatedAt' => [
                                'type' => 'string',
                            ],
                            'LastUpdatedAt' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'SizeInBytes' => [
                                'type' => 'numeric',
                            ],
                            'EndpointInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'PeakRequestsPerSecond' => [
                                        'type' => 'numeric',
                                    ],
                                    'CreatedAt' => [
                                        'type' => 'string',
                                    ],
                                    'EndpointUrl' => [
                                        'type' => 'string',
                                    ],
                                    'EndpointStatus' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'TrainingParameters' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'InputDataLocationS3' => [
                                'type' => 'string',
                            ],
                            'Algorithm' => [
                                'type' => 'string',
                            ],
                            'MLModelType' => [
                                'type' => 'string',
                            ],
                            'ScoreThreshold' => [
                                'type' => 'numeric',
                            ],
                            'ScoreThresholdLastUpdatedAt' => [
                                'type' => 'string',
                            ],
                            'Message' => [
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
        'GetBatchPredictionOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'BatchPredictionId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MLModelId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'BatchPredictionDataSourceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InputDataLocationS3' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreatedByIamUser' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreatedAt' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LastUpdatedAt' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'OutputUri' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LogUri' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Message' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetDataSourceOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DataSourceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DataLocationS3' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DataRearrangement' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreatedByIamUser' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreatedAt' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LastUpdatedAt' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DataSizeInBytes' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'NumberOfFiles' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LogUri' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Message' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RedshiftMetadata' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'RedshiftDatabase' => [
                            'type' => 'object',
                            'properties' => [
                                'DatabaseName' => [
                                    'type' => 'string',
                                ],
                                'ClusterIdentifier' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'DatabaseUserName' => [
                            'type' => 'string',
                        ],
                        'SelectSqlQuery' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RDSMetadata' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Database' => [
                            'type' => 'object',
                            'properties' => [
                                'InstanceIdentifier' => [
                                    'type' => 'string',
                                ],
                                'DatabaseName' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'DatabaseUserName' => [
                            'type' => 'string',
                        ],
                        'SelectSqlQuery' => [
                            'type' => 'string',
                        ],
                        'ResourceRole' => [
                            'type' => 'string',
                        ],
                        'ServiceRole' => [
                            'type' => 'string',
                        ],
                        'DataPipelineId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RoleARN' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ComputeStatistics' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'DataSourceSchema' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetEvaluationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EvaluationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MLModelId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'EvaluationDataSourceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InputDataLocationS3' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreatedByIamUser' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreatedAt' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LastUpdatedAt' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'PerformanceMetrics' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Properties' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'LogUri' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Message' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetMLModelOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MLModelId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'TrainingDataSourceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreatedByIamUser' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreatedAt' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LastUpdatedAt' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SizeInBytes' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'EndpointInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'PeakRequestsPerSecond' => [
                            'type' => 'numeric',
                        ],
                        'CreatedAt' => [
                            'type' => 'string',
                        ],
                        'EndpointUrl' => [
                            'type' => 'string',
                        ],
                        'EndpointStatus' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'TrainingParameters' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
                'InputDataLocationS3' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MLModelType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ScoreThreshold' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'ScoreThresholdLastUpdatedAt' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LogUri' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Message' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Recipe' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Schema' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'PredictOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Prediction' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'predictedLabel' => [
                            'type' => 'string',
                        ],
                        'predictedValue' => [
                            'type' => 'numeric',
                        ],
                        'predictedScores' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'numeric',
                            ],
                        ],
                        'details' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateBatchPredictionOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'BatchPredictionId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'UpdateDataSourceOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DataSourceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'UpdateEvaluationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EvaluationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'UpdateMLModelOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MLModelId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
    ],
    'iterators' => [
        'DescribeBatchPredictions' => [
            'limit_key' => 'Limit',
            'output_token' => 'NextToken',
            'input_token' => 'NextToken',
            'result_key' => 'Results',
        ],
        'DescribeDataSources' => [
            'limit_key' => 'Limit',
            'output_token' => 'NextToken',
            'input_token' => 'NextToken',
            'result_key' => 'Results',
        ],
        'DescribeEvaluations' => [
            'limit_key' => 'Limit',
            'output_token' => 'NextToken',
            'input_token' => 'NextToken',
            'result_key' => 'Results',
        ],
        'DescribeMLModels' => [
            'limit_key' => 'Limit',
            'output_token' => 'NextToken',
            'input_token' => 'NextToken',
            'result_key' => 'Results',
        ],
    ],
];
