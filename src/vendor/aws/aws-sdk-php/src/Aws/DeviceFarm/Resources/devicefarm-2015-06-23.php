<?php

return [
    'apiVersion' => '2015-06-23',
    'endpointPrefix' => 'devicefarm',
    'serviceFullName' => 'AWS Device Farm',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'DeviceFarm_20150623.',
    'signatureVersion' => 'v4',
    'namespace' => 'DeviceFarm',
    'operations' => [
        'CreateDevicePool' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateDevicePoolResult',
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
                    'default' => 'DeviceFarm_20150623.CreateDevicePool',
                ],
                'projectArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'rules' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Rule',
                        'type' => 'object',
                        'properties' => [
                            'attribute' => [
                                'type' => 'string',
                            ],
                            'operator' => [
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
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'CreateProject' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateProjectResult',
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
                    'default' => 'DeviceFarm_20150623.CreateProject',
                ],
                'name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'CreateUpload' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateUploadResult',
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
                    'default' => 'DeviceFarm_20150623.CreateUpload',
                ],
                '' => [
                    'type' => 'object',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'DeleteDevicePool' => [
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
                    'default' => 'DeviceFarm_20150623.DeleteDevicePool',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'DeleteProject' => [
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
                    'default' => 'DeviceFarm_20150623.DeleteProject',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'DeleteRun' => [
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
                    'default' => 'DeviceFarm_20150623.DeleteRun',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'DeleteUpload' => [
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
                    'default' => 'DeviceFarm_20150623.DeleteUpload',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'GetAccountSettings' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetAccountSettingsResult',
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
                    'default' => 'DeviceFarm_20150623.GetAccountSettings',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'GetDevice' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetDeviceResult',
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
                    'default' => 'DeviceFarm_20150623.GetDevice',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'GetDevicePool' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetDevicePoolResult',
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
                    'default' => 'DeviceFarm_20150623.GetDevicePool',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'GetDevicePoolCompatibility' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetDevicePoolCompatibilityResult',
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
                        'DeviceFarm_20150623.GetDevicePoolCompatibility',
                ],
                'devicePoolArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'appArn' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'testType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'GetJob' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetJobResult',
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
                    'default' => 'DeviceFarm_20150623.GetJob',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'GetProject' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetProjectResult',
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
                    'default' => 'DeviceFarm_20150623.GetProject',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'GetRun' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetRunResult',
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
                    'default' => 'DeviceFarm_20150623.GetRun',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'GetSuite' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetSuiteResult',
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
                    'default' => 'DeviceFarm_20150623.GetSuite',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'GetTest' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetTestResult',
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
                    'default' => 'DeviceFarm_20150623.GetTest',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'GetUpload' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetUploadResult',
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
                    'default' => 'DeviceFarm_20150623.GetUpload',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'ListArtifacts' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListArtifactsResult',
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
                    'default' => 'DeviceFarm_20150623.ListArtifacts',
                ],
                '' => [
                    'type' => 'object',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'ListDevicePools' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListDevicePoolsResult',
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
                    'default' => 'DeviceFarm_20150623.ListDevicePools',
                ],
                '' => [
                    'type' => 'object',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'ListDevices' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListDevicesResult',
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
                    'default' => 'DeviceFarm_20150623.ListDevices',
                ],
                'arn' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 4,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'ListJobs' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListJobsResult',
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
                    'default' => 'DeviceFarm_20150623.ListJobs',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 4,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'ListProjects' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListProjectsResult',
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
                    'default' => 'DeviceFarm_20150623.ListProjects',
                ],
                'arn' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 4,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'ListRuns' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListRunsResult',
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
                    'default' => 'DeviceFarm_20150623.ListRuns',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 4,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'ListSamples' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListSamplesResult',
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
                    'default' => 'DeviceFarm_20150623.ListSamples',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 4,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'ListSuites' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListSuitesResult',
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
                    'default' => 'DeviceFarm_20150623.ListSuites',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 4,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'ListTests' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListTestsResult',
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
                    'default' => 'DeviceFarm_20150623.ListTests',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 4,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'ListUniqueProblems' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListUniqueProblemsResult',
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
                    'default' => 'DeviceFarm_20150623.ListUniqueProblems',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 4,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'ListUploads' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListUploadsResult',
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
                    'default' => 'DeviceFarm_20150623.ListUploads',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 4,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'ScheduleRun' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ScheduleRunResult',
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
                    'default' => 'DeviceFarm_20150623.ScheduleRun',
                ],
                'projectArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'appArn' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'devicePoolArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'test' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [
                            'type' => 'object',
                        ],
                    ],
                ],
                'configuration' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'extraDataPackageArn' => [
                            'type' => 'string',
                            'minLength' => 32,
                        ],
                        'networkProfileArn' => [
                            'type' => 'string',
                            'minLength' => 32,
                        ],
                        'locale' => [
                            'type' => 'string',
                        ],
                        'location' => [
                            'type' => 'object',
                            'properties' => [
                                'latitude' => [
                                    'required' => true,
                                    'type' => 'numeric',
                                ],
                                'longitude' => [
                                    'required' => true,
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'radios' => [
                            'type' => 'object',
                            'properties' => [
                                'wifi' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'bluetooth' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'nfc' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'gps' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                        'auxiliaryApps' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'AmazonResourceName',
                                'type' => 'string',
                                'minLength' => 32,
                            ],
                        ],
                        'billingMethod' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'An entity with the same name already exists.',
                    'class' => 'IdempotencyException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'UpdateDevicePool' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateDevicePoolResult',
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
                    'default' => 'DeviceFarm_20150623.UpdateDevicePool',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'rules' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Rule',
                        'type' => 'object',
                        'properties' => [
                            'attribute' => [
                                'type' => 'string',
                            ],
                            'operator' => [
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
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
        'UpdateProject' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateProjectResult',
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
                    'default' => 'DeviceFarm_20150623.UpdateProject',
                ],
                'arn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 32,
                ],
                'name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An invalid argument was specified.',
                    'class' => 'ArgumentException',
                ],
                [
                    'reason' => 'The specified entity was not found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'A limit was exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' => 'There was a problem with the service account.',
                    'class' => 'ServiceAccountException',
                ],
            ],
        ],
    ],
    'models' => [
        'CreateDevicePoolResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'devicePool' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
        ],
        'CreateProjectResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'project' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'arn' => [
                            'type' => 'string',
                        ],
                        'name' => [
                            'type' => 'string',
                        ],
                        'created' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'CreateUploadResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'upload' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'GetAccountSettingsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'accountSettings' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'awsAccountNumber' => [
                            'type' => 'string',
                        ],
                        'unmeteredDevices' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDeviceResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'device' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'arn' => [
                            'type' => 'string',
                        ],
                        'name' => [
                            'type' => 'string',
                        ],
                        'manufacturer' => [
                            'type' => 'string',
                        ],
                        'model' => [
                            'type' => 'string',
                        ],
                        'formFactor' => [
                            'type' => 'string',
                        ],
                        'platform' => [
                            'type' => 'string',
                        ],
                        'os' => [
                            'type' => 'string',
                        ],
                        'cpu' => [
                            'type' => 'object',
                            'properties' => [
                                'frequency' => [
                                    'type' => 'string',
                                ],
                                'architecture' => [
                                    'type' => 'string',
                                ],
                                'clock' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'resolution' => [
                            'type' => 'object',
                            'properties' => [
                                'width' => [
                                    'type' => 'numeric',
                                ],
                                'height' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'heapSize' => [
                            'type' => 'numeric',
                        ],
                        'memory' => [
                            'type' => 'numeric',
                        ],
                        'image' => [
                            'type' => 'string',
                        ],
                        'carrier' => [
                            'type' => 'string',
                        ],
                        'radio' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetDevicePoolResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'devicePool' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
        ],
        'GetDevicePoolCompatibilityResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'compatibleDevices' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DevicePoolCompatibilityResult',
                        'type' => 'object',
                        'properties' => [
                            'device' => [
                                'type' => 'object',
                                'properties' => [
                                    'arn' => [
                                        'type' => 'string',
                                    ],
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'manufacturer' => [
                                        'type' => 'string',
                                    ],
                                    'model' => [
                                        'type' => 'string',
                                    ],
                                    'formFactor' => [
                                        'type' => 'string',
                                    ],
                                    'platform' => [
                                        'type' => 'string',
                                    ],
                                    'os' => [
                                        'type' => 'string',
                                    ],
                                    'cpu' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'frequency' => [
                                                'type' => 'string',
                                            ],
                                            'architecture' => [
                                                'type' => 'string',
                                            ],
                                            'clock' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                    'resolution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'width' => [
                                                'type' => 'numeric',
                                            ],
                                            'height' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                    'heapSize' => [
                                        'type' => 'numeric',
                                    ],
                                    'memory' => [
                                        'type' => 'numeric',
                                    ],
                                    'image' => [
                                        'type' => 'string',
                                    ],
                                    'carrier' => [
                                        'type' => 'string',
                                    ],
                                    'radio' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'compatible' => [
                                'type' => 'boolean',
                            ],
                            'incompatibilityMessages' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'IncompatibilityMessage',
                                    'type' => 'object',
                                    'properties' => [
                                        '' => [
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'incompatibleDevices' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DevicePoolCompatibilityResult',
                        'type' => 'object',
                        'properties' => [
                            'device' => [
                                'type' => 'object',
                                'properties' => [
                                    'arn' => [
                                        'type' => 'string',
                                    ],
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'manufacturer' => [
                                        'type' => 'string',
                                    ],
                                    'model' => [
                                        'type' => 'string',
                                    ],
                                    'formFactor' => [
                                        'type' => 'string',
                                    ],
                                    'platform' => [
                                        'type' => 'string',
                                    ],
                                    'os' => [
                                        'type' => 'string',
                                    ],
                                    'cpu' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'frequency' => [
                                                'type' => 'string',
                                            ],
                                            'architecture' => [
                                                'type' => 'string',
                                            ],
                                            'clock' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                    'resolution' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'width' => [
                                                'type' => 'numeric',
                                            ],
                                            'height' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                    'heapSize' => [
                                        'type' => 'numeric',
                                    ],
                                    'memory' => [
                                        'type' => 'numeric',
                                    ],
                                    'image' => [
                                        'type' => 'string',
                                    ],
                                    'carrier' => [
                                        'type' => 'string',
                                    ],
                                    'radio' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'compatible' => [
                                'type' => 'boolean',
                            ],
                            'incompatibilityMessages' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'IncompatibilityMessage',
                                    'type' => 'object',
                                    'properties' => [
                                        '' => [
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetJobResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'job' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
        ],
        'GetProjectResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'project' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'arn' => [
                            'type' => 'string',
                        ],
                        'name' => [
                            'type' => 'string',
                        ],
                        'created' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetRunResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'run' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
        ],
        'GetSuiteResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'suite' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
        ],
        'GetTestResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'test' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
        ],
        'GetUploadResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'upload' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
        ],
        'ListArtifactsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'artifacts' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Artifact',
                        'type' => 'object',
                        'properties' => [
                            '' => [
                                'type' => 'object',
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
        'ListDevicePoolsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'devicePools' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DevicePool',
                        'type' => 'object',
                        'properties' => [
                            '' => [
                                'type' => 'object',
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
        'ListDevicesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'devices' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Device',
                        'type' => 'object',
                        'properties' => [
                            'arn' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'manufacturer' => [
                                'type' => 'string',
                            ],
                            'model' => [
                                'type' => 'string',
                            ],
                            'formFactor' => [
                                'type' => 'string',
                            ],
                            'platform' => [
                                'type' => 'string',
                            ],
                            'os' => [
                                'type' => 'string',
                            ],
                            'cpu' => [
                                'type' => 'object',
                                'properties' => [
                                    'frequency' => [
                                        'type' => 'string',
                                    ],
                                    'architecture' => [
                                        'type' => 'string',
                                    ],
                                    'clock' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'resolution' => [
                                'type' => 'object',
                                'properties' => [
                                    'width' => [
                                        'type' => 'numeric',
                                    ],
                                    'height' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'heapSize' => [
                                'type' => 'numeric',
                            ],
                            'memory' => [
                                'type' => 'numeric',
                            ],
                            'image' => [
                                'type' => 'string',
                            ],
                            'carrier' => [
                                'type' => 'string',
                            ],
                            'radio' => [
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
        'ListJobsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'jobs' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Job',
                        'type' => 'object',
                        'properties' => [
                            '' => [
                                'type' => 'object',
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
        'ListProjectsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'projects' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Project',
                        'type' => 'object',
                        'properties' => [
                            'arn' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'created' => [
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
        'ListRunsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'runs' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Run',
                        'type' => 'object',
                        'properties' => [
                            '' => [
                                'type' => 'object',
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
        'ListSamplesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'samples' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Sample',
                        'type' => 'object',
                        'properties' => [
                            '' => [
                                'type' => 'object',
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
        'ListSuitesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'suites' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Suite',
                        'type' => 'object',
                        'properties' => [
                            '' => [
                                'type' => 'object',
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
        'ListTestsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'tests' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Test',
                        'type' => 'object',
                        'properties' => [
                            '' => [
                                'type' => 'object',
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
        'ListUniqueProblemsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'uniqueProblems' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'array',
                        'items' => [
                            'name' => 'UniqueProblem',
                            'type' => 'object',
                            'properties' => [
                                'message' => [
                                    'type' => 'string',
                                ],
                                'problems' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Problem',
                                        'type' => 'object',
                                        'properties' => [
                                            'run' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'arn' => [
                                                        'type' => 'string',
                                                    ],
                                                    'name' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'job' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'arn' => [
                                                        'type' => 'string',
                                                    ],
                                                    'name' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'suite' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'arn' => [
                                                        'type' => 'string',
                                                    ],
                                                    'name' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'test' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'arn' => [
                                                        'type' => 'string',
                                                    ],
                                                    'name' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'device' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'arn' => [
                                                        'type' => 'string',
                                                    ],
                                                    'name' => [
                                                        'type' => 'string',
                                                    ],
                                                    'manufacturer' => [
                                                        'type' => 'string',
                                                    ],
                                                    'model' => [
                                                        'type' => 'string',
                                                    ],
                                                    'formFactor' => [
                                                        'type' => 'string',
                                                    ],
                                                    'platform' => [
                                                        'type' => 'string',
                                                    ],
                                                    'os' => [
                                                        'type' => 'string',
                                                    ],
                                                    'cpu' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'frequency' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'architecture' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'clock' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                        ],
                                                    ],
                                                    'resolution' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'width' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'height' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                        ],
                                                    ],
                                                    'heapSize' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'memory' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'image' => [
                                                        'type' => 'string',
                                                    ],
                                                    'carrier' => [
                                                        'type' => 'string',
                                                    ],
                                                    'radio' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'result' => [
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
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListUploadsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'uploads' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Upload',
                        'type' => 'object',
                        'properties' => [
                            '' => [
                                'type' => 'object',
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
        'ScheduleRunResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'run' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDevicePoolResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'devicePool' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
        ],
        'UpdateProjectResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'project' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'arn' => [
                            'type' => 'string',
                        ],
                        'name' => [
                            'type' => 'string',
                        ],
                        'created' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListArtifacts' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'result_key' => 'artifacts',
        ],
        'ListDevicePools' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'result_key' => 'devicePools',
        ],
        'ListDevices' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'result_key' => 'devices',
        ],
        'ListJobs' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'result_key' => 'jobs',
        ],
        'ListProjects' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'result_key' => 'projects',
        ],
        'ListRuns' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'result_key' => 'runs',
        ],
        'ListSamples' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'result_key' => 'samples',
        ],
        'ListSuites' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'result_key' => 'suites',
        ],
        'ListTests' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'result_key' => 'tests',
        ],
        'ListUniqueProblems' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'result_key' => 'uniqueProblems',
        ],
        'ListUploads' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'result_key' => 'uploads',
        ],
    ],
];
