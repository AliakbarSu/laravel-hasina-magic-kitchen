<?php

return [
    'apiVersion' => '2015-04-16',
    'endpointPrefix' => 'ds',
    'serviceFullName' => 'AWS Directory Service',
    'serviceAbbreviation' => 'Directory Service',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'DirectoryService_20150416.',
    'signatureVersion' => 'v4',
    'namespace' => 'DirectoryService',
    'operations' => [
        'ConnectDirectory' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ConnectDirectoryResult',
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
                    'default' => 'DirectoryService_20150416.ConnectDirectory',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ShortName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Size' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ConnectSettings' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'VpcId' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'SubnetIds' => [
                            'required' => true,
                            'type' => 'array',
                            'items' => [
                                'name' => 'SubnetId',
                                'type' => 'string',
                            ],
                        ],
                        'CustomerDnsIps' => [
                            'required' => true,
                            'type' => 'array',
                            'items' => [
                                'name' => 'IpAddr',
                                'type' => 'string',
                            ],
                        ],
                        'CustomerUserName' => [
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
                        'The maximum number of directories in the region has been reached. You can use the GetDirectoryLimits operation to determine your directory limits in the region.',
                    'class' => 'DirectoryLimitExceededException',
                ],
                [
                    'reason' => 'One or more parameters are not valid.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'CreateAlias' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateAliasResult',
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
                    'default' => 'DirectoryService_20150416.CreateAlias',
                ],
                'DirectoryId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Alias' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified entity already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' => 'One or more parameters are not valid.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'CreateComputer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateComputerResult',
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
                    'default' => 'DirectoryService_20150416.CreateComputer',
                ],
                'DirectoryId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ComputerName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 8,
                ],
                'OrganizationalUnitDistinguishedName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ComputerAttributes' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Attribute',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
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
                    'reason' => 'An authentication error occurred.',
                    'class' => 'AuthenticationFailedException',
                ],
                [
                    'reason' =>
                        'The specified directory is unavailable or could not be found.',
                    'class' => 'DirectoryUnavailableException',
                ],
                [
                    'reason' => 'The specified entity already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' => 'One or more parameters are not valid.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'The operation is not supported.',
                    'class' => 'UnsupportedOperationException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'CreateDirectory' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateDirectoryResult',
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
                    'default' => 'DirectoryService_20150416.CreateDirectory',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ShortName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Size' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'VpcSettings' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'VpcId' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'SubnetIds' => [
                            'required' => true,
                            'type' => 'array',
                            'items' => [
                                'name' => 'SubnetId',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The maximum number of directories in the region has been reached. You can use the GetDirectoryLimits operation to determine your directory limits in the region.',
                    'class' => 'DirectoryLimitExceededException',
                ],
                [
                    'reason' => 'One or more parameters are not valid.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'CreateSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateSnapshotResult',
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
                    'default' => 'DirectoryService_20150416.CreateSnapshot',
                ],
                'DirectoryId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' => 'One or more parameters are not valid.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The maximum number of manual snapshots for the directory has been reached. You can use the GetSnapshotLimits operation to determine the snapshot limits for a directory.',
                    'class' => 'SnapshotLimitExceededException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'DeleteDirectory' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteDirectoryResult',
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
                    'default' => 'DirectoryService_20150416.DeleteDirectory',
                ],
                'DirectoryId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'DeleteSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteSnapshotResult',
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
                    'default' => 'DirectoryService_20150416.DeleteSnapshot',
                ],
                'SnapshotId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' => 'One or more parameters are not valid.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'DescribeDirectories' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeDirectoriesResult',
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
                        'DirectoryService_20150416.DescribeDirectories',
                ],
                'DirectoryIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DirectoryId',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' => 'One or more parameters are not valid.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'The NextToken value is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'DescribeSnapshots' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeSnapshotsResult',
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
                    'default' => 'DirectoryService_20150416.DescribeSnapshots',
                ],
                'DirectoryId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SnapshotIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'SnapshotId',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' => 'One or more parameters are not valid.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'The NextToken value is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'DisableRadius' => [
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
                    'default' => 'DirectoryService_20150416.DisableRadius',
                ],
                'DirectoryId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'DisableSso' => [
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
                    'default' => 'DirectoryService_20150416.DisableSso',
                ],
                'DirectoryId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Password' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' =>
                        'The account does not have sufficient permission to perform the operation.',
                    'class' => 'InsufficientPermissionsException',
                ],
                [
                    'reason' => 'An authentication error occurred.',
                    'class' => 'AuthenticationFailedException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'EnableRadius' => [
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
                    'default' => 'DirectoryService_20150416.EnableRadius',
                ],
                'DirectoryId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RadiusSettings' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'RadiusServers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Server',
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                        'RadiusPort' => [
                            'type' => 'numeric',
                            'minimum' => 1025,
                            'maximum' => 65535,
                        ],
                        'RadiusTimeout' => [
                            'type' => 'numeric',
                            'minimum' => 1,
                            'maximum' => 20,
                        ],
                        'RadiusRetries' => [
                            'type' => 'numeric',
                            'maximum' => 10,
                        ],
                        'SharedSecret' => [
                            'type' => 'string',
                            'minLength' => 8,
                        ],
                        'AuthenticationProtocol' => [
                            'type' => 'string',
                        ],
                        'DisplayLabel' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'UseSameUsername' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'One or more parameters are not valid.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'The specified entity already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'EnableSso' => [
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
                    'default' => 'DirectoryService_20150416.EnableSso',
                ],
                'DirectoryId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Password' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' =>
                        'The account does not have sufficient permission to perform the operation.',
                    'class' => 'InsufficientPermissionsException',
                ],
                [
                    'reason' => 'An authentication error occurred.',
                    'class' => 'AuthenticationFailedException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'GetDirectoryLimits' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetDirectoryLimitsResult',
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
                    'default' => 'DirectoryService_20150416.GetDirectoryLimits',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'GetSnapshotLimits' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetSnapshotLimitsResult',
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
                    'default' => 'DirectoryService_20150416.GetSnapshotLimits',
                ],
                'DirectoryId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'RestoreFromSnapshot' => [
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
                        'DirectoryService_20150416.RestoreFromSnapshot',
                ],
                'SnapshotId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' => 'One or more parameters are not valid.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'UpdateRadius' => [
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
                    'default' => 'DirectoryService_20150416.UpdateRadius',
                ],
                'DirectoryId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RadiusSettings' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'RadiusServers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Server',
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                        'RadiusPort' => [
                            'type' => 'numeric',
                            'minimum' => 1025,
                            'maximum' => 65535,
                        ],
                        'RadiusTimeout' => [
                            'type' => 'numeric',
                            'minimum' => 1,
                            'maximum' => 20,
                        ],
                        'RadiusRetries' => [
                            'type' => 'numeric',
                            'maximum' => 10,
                        ],
                        'SharedSecret' => [
                            'type' => 'string',
                            'minLength' => 8,
                        ],
                        'AuthenticationProtocol' => [
                            'type' => 'string',
                        ],
                        'DisplayLabel' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'UseSameUsername' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'One or more parameters are not valid.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'The specified entity could not be found.',
                    'class' => 'EntityDoesNotExistException',
                ],
                [
                    'reason' => 'A client exception has occurred.',
                    'class' => 'ClientException',
                ],
                [
                    'reason' =>
                        'An exception has occurred in AWS Directory Service.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
    ],
    'models' => [
        'ConnectDirectoryResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DirectoryId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateAliasResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DirectoryId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Alias' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateComputerResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Computer' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'ComputerId' => [
                            'type' => 'string',
                        ],
                        'ComputerName' => [
                            'type' => 'string',
                        ],
                        'ComputerAttributes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Attribute',
                                'type' => 'object',
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
        ],
        'CreateDirectoryResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DirectoryId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateSnapshotResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SnapshotId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteDirectoryResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DirectoryId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteSnapshotResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SnapshotId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DescribeDirectoriesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DirectoryDescriptions' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DirectoryDescription',
                        'type' => 'object',
                        'properties' => [
                            'DirectoryId' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'ShortName' => [
                                'type' => 'string',
                            ],
                            'Size' => [
                                'type' => 'string',
                            ],
                            'Alias' => [
                                'type' => 'string',
                            ],
                            'AccessUrl' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'DnsIpAddrs' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'IpAddr',
                                    'type' => 'string',
                                ],
                            ],
                            'Stage' => [
                                'type' => 'string',
                            ],
                            'LaunchTime' => [
                                'type' => 'string',
                            ],
                            'StageLastUpdatedDateTime' => [
                                'type' => 'string',
                            ],
                            'Type' => [
                                'type' => 'string',
                            ],
                            'VpcSettings' => [
                                'type' => 'object',
                                'properties' => [
                                    'VpcId' => [
                                        'type' => 'string',
                                    ],
                                    'SubnetIds' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'SubnetId',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                    ],
                                    'AvailabilityZones' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'AvailabilityZone',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'ConnectSettings' => [
                                'type' => 'object',
                                'properties' => [
                                    'VpcId' => [
                                        'type' => 'string',
                                    ],
                                    'SubnetIds' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'SubnetId',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'CustomerUserName' => [
                                        'type' => 'string',
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                    ],
                                    'AvailabilityZones' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'AvailabilityZone',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'ConnectIps' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'IpAddr',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'RadiusSettings' => [
                                'type' => 'object',
                                'properties' => [
                                    'RadiusServers' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Server',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'RadiusPort' => [
                                        'type' => 'numeric',
                                    ],
                                    'RadiusTimeout' => [
                                        'type' => 'numeric',
                                    ],
                                    'RadiusRetries' => [
                                        'type' => 'numeric',
                                    ],
                                    'SharedSecret' => [
                                        'type' => 'string',
                                    ],
                                    'AuthenticationProtocol' => [
                                        'type' => 'string',
                                    ],
                                    'DisplayLabel' => [
                                        'type' => 'string',
                                    ],
                                    'UseSameUsername' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'RadiusStatus' => [
                                'type' => 'string',
                            ],
                            'StageReason' => [
                                'type' => 'string',
                            ],
                            'SsoEnabled' => [
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
        'DescribeSnapshotsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Snapshots' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Snapshot',
                        'type' => 'object',
                        'properties' => [
                            'DirectoryId' => [
                                'type' => 'string',
                            ],
                            'SnapshotId' => [
                                'type' => 'string',
                            ],
                            'Type' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'StartTime' => [
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
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'GetDirectoryLimitsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DirectoryLimits' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'CloudOnlyDirectoriesLimit' => [
                            'type' => 'numeric',
                        ],
                        'CloudOnlyDirectoriesCurrentCount' => [
                            'type' => 'numeric',
                        ],
                        'CloudOnlyDirectoriesLimitReached' => [
                            'type' => 'boolean',
                        ],
                        'ConnectedDirectoriesLimit' => [
                            'type' => 'numeric',
                        ],
                        'ConnectedDirectoriesCurrentCount' => [
                            'type' => 'numeric',
                        ],
                        'ConnectedDirectoriesLimitReached' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
            ],
        ],
        'GetSnapshotLimitsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SnapshotLimits' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'ManualSnapshotsLimit' => [
                            'type' => 'numeric',
                        ],
                        'ManualSnapshotsCurrentCount' => [
                            'type' => 'numeric',
                        ],
                        'ManualSnapshotsLimitReached' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
