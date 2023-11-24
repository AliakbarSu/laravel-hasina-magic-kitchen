<?php
/**
 * Copyright 2010-2014 Amazon.com, Inc. or its affiliates. All Rights Reserved.
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
    'apiVersion' => '2014-10-06',
    'endpointPrefix' => 'codedeploy',
    'serviceFullName' => 'AWS CodeDeploy',
    'serviceAbbreviation' => 'CodeDeploy',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'CodeDeploy_20141006.',
    'timestampFormat' => 'unixTimestamp',
    'signatureVersion' => 'v4',
    'namespace' => 'CodeDeploy',
    'operations' => [
        'AddTagsToOnPremisesInstances' => [
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
                        'CodeDeploy_20141006.AddTagsToOnPremisesInstances',
                ],
                'tags' => [
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
                'instanceNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'InstanceName',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An on-premises instance name was not specified.',
                    'class' => 'InstanceNameRequiredException',
                ],
                [
                    'reason' => 'A tag was not specified.',
                    'class' => 'TagRequiredException',
                ],
                [
                    'reason' =>
                        'The specified tag was specified in an invalid format.',
                    'class' => 'InvalidTagException',
                ],
                [
                    'reason' =>
                        'The maximum allowed number of tags was exceeded.',
                    'class' => 'TagLimitExceededException',
                ],
                [
                    'reason' =>
                        'The maximum number of allowed on-premises instances in a single call was exceeded.',
                    'class' => 'InstanceLimitExceededException',
                ],
                [
                    'reason' =>
                        'The specified on-premises instance is not registered.',
                    'class' => 'InstanceNotRegisteredException',
                ],
            ],
        ],
        'BatchGetApplications' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'BatchGetApplicationsOutput',
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
                    'default' => 'CodeDeploy_20141006.BatchGetApplications',
                ],
                'applicationNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ApplicationName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' =>
                        'The application does not exist with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationDoesNotExistException',
                ],
            ],
        ],
        'BatchGetDeployments' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'BatchGetDeploymentsOutput',
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
                    'default' => 'CodeDeploy_20141006.BatchGetDeployments',
                ],
                'deploymentIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DeploymentId',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'At least one deployment ID must be specified.',
                    'class' => 'DeploymentIdRequiredException',
                ],
                [
                    'reason' =>
                        'At least one of the deployment IDs was specified in an invalid format.',
                    'class' => 'InvalidDeploymentIdException',
                ],
            ],
        ],
        'BatchGetOnPremisesInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'BatchGetOnPremisesInstancesOutput',
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
                        'CodeDeploy_20141006.BatchGetOnPremisesInstances',
                ],
                'instanceNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'InstanceName',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An on-premises instance name was not specified.',
                    'class' => 'InstanceNameRequiredException',
                ],
                [
                    'reason' =>
                        'The specified on-premises instance name was specified in an invalid format.',
                    'class' => 'InvalidInstanceNameException',
                ],
            ],
        ],
        'CreateApplication' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateApplicationOutput',
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
                    'default' => 'CodeDeploy_20141006.CreateApplication',
                ],
                'applicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' =>
                        'An application with the specified name already exists with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'More applications were attempted to be created than were allowed.',
                    'class' => 'ApplicationLimitExceededException',
                ],
            ],
        ],
        'CreateDeployment' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateDeploymentOutput',
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
                    'default' => 'CodeDeploy_20141006.CreateDeployment',
                ],
                'applicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'deploymentGroupName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'revision' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'revisionType' => [
                            'type' => 'string',
                        ],
                        's3Location' => [
                            'type' => 'object',
                            'properties' => [
                                'bucket' => [
                                    'type' => 'string',
                                ],
                                'key' => [
                                    'type' => 'string',
                                ],
                                'bundleType' => [
                                    'type' => 'string',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                                'eTag' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'gitHubLocation' => [
                            'type' => 'object',
                            'properties' => [
                                'repository' => [
                                    'type' => 'string',
                                ],
                                'commitId' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'deploymentConfigName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ignoreApplicationStopFailures' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' =>
                        'The application does not exist with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationDoesNotExistException',
                ],
                [
                    'reason' => 'The deployment group name was not specified.',
                    'class' => 'DeploymentGroupNameRequiredException',
                ],
                [
                    'reason' =>
                        'The deployment group name was specified in an invalid format.',
                    'class' => 'InvalidDeploymentGroupNameException',
                ],
                [
                    'reason' =>
                        'The named deployment group does not exist with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentGroupDoesNotExistException',
                ],
                [
                    'reason' => 'The revision ID was not specified.',
                    'class' => 'RevisionRequiredException',
                ],
                [
                    'reason' =>
                        'The revision was specified in an invalid format.',
                    'class' => 'InvalidRevisionException',
                ],
                [
                    'reason' =>
                        'The deployment configuration name was specified in an invalid format.',
                    'class' => 'InvalidDeploymentConfigNameException',
                ],
                [
                    'reason' =>
                        'The deployment configuration does not exist with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentConfigDoesNotExistException',
                ],
                [
                    'reason' =>
                        'The description that was provided is too long.',
                    'class' => 'DescriptionTooLongException',
                ],
                [
                    'reason' =>
                        'The number of allowed deployments was exceeded.',
                    'class' => 'DeploymentLimitExceededException',
                ],
            ],
        ],
        'CreateDeploymentConfig' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateDeploymentConfigOutput',
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
                    'default' => 'CodeDeploy_20141006.CreateDeploymentConfig',
                ],
                'deploymentConfigName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'minimumHealthyHosts' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The deployment configuration name was specified in an invalid format.',
                    'class' => 'InvalidDeploymentConfigNameException',
                ],
                [
                    'reason' =>
                        'The deployment configuration name was not specified.',
                    'class' => 'DeploymentConfigNameRequiredException',
                ],
                [
                    'reason' =>
                        'A deployment configuration with the specified name already exists with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentConfigAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The minimum healthy instances value was specified in an invalid format.',
                    'class' => 'InvalidMinimumHealthyHostValueException',
                ],
                [
                    'reason' =>
                        'The deployment configurations limit was exceeded.',
                    'class' => 'DeploymentConfigLimitExceededException',
                ],
            ],
        ],
        'CreateDeploymentGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateDeploymentGroupOutput',
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
                    'default' => 'CodeDeploy_20141006.CreateDeploymentGroup',
                ],
                'applicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'deploymentGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'deploymentConfigName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ec2TagFilters' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'EC2TagFilter',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Type' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'onPremisesInstanceTagFilters' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'TagFilter',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Type' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'autoScalingGroups' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'AutoScalingGroupName',
                        'type' => 'string',
                    ],
                ],
                'serviceRoleArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' =>
                        'The application does not exist with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationDoesNotExistException',
                ],
                [
                    'reason' => 'The deployment group name was not specified.',
                    'class' => 'DeploymentGroupNameRequiredException',
                ],
                [
                    'reason' =>
                        'The deployment group name was specified in an invalid format.',
                    'class' => 'InvalidDeploymentGroupNameException',
                ],
                [
                    'reason' =>
                        'A deployment group with the specified name already exists with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentGroupAlreadyExistsException',
                ],
                [
                    'reason' => 'The tag was specified in an invalid format.',
                    'class' => 'InvalidEC2TagException',
                ],
                [
                    'reason' =>
                        'The specified tag was specified in an invalid format.',
                    'class' => 'InvalidTagException',
                ],
                [
                    'reason' =>
                        'The Auto Scaling group was specified in an invalid format or does not exist.',
                    'class' => 'InvalidAutoScalingGroupException',
                ],
                [
                    'reason' =>
                        'The deployment configuration name was specified in an invalid format.',
                    'class' => 'InvalidDeploymentConfigNameException',
                ],
                [
                    'reason' =>
                        'The deployment configuration does not exist with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentConfigDoesNotExistException',
                ],
                [
                    'reason' => 'The role ID was not specified.',
                    'class' => 'RoleRequiredException',
                ],
                [
                    'reason' =>
                        'The service role ARN was specified in an invalid format. Or, if an Auto Scaling group was specified, the specified service role does not grant the appropriate permissions to Auto Scaling.',
                    'class' => 'InvalidRoleException',
                ],
                [
                    'reason' => 'The deployment groups limit was exceeded.',
                    'class' => 'DeploymentGroupLimitExceededException',
                ],
            ],
        ],
        'DeleteApplication' => [
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
                    'default' => 'CodeDeploy_20141006.DeleteApplication',
                ],
                'applicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
            ],
        ],
        'DeleteDeploymentConfig' => [
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
                    'default' => 'CodeDeploy_20141006.DeleteDeploymentConfig',
                ],
                'deploymentConfigName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The deployment configuration name was specified in an invalid format.',
                    'class' => 'InvalidDeploymentConfigNameException',
                ],
                [
                    'reason' =>
                        'The deployment configuration name was not specified.',
                    'class' => 'DeploymentConfigNameRequiredException',
                ],
                [
                    'reason' => 'The deployment configuration is still in use.',
                    'class' => 'DeploymentConfigInUseException',
                ],
                [
                    'reason' => 'An invalid operation was detected.',
                    'class' => 'InvalidOperationException',
                ],
            ],
        ],
        'DeleteDeploymentGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteDeploymentGroupOutput',
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
                    'default' => 'CodeDeploy_20141006.DeleteDeploymentGroup',
                ],
                'applicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'deploymentGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' => 'The deployment group name was not specified.',
                    'class' => 'DeploymentGroupNameRequiredException',
                ],
                [
                    'reason' =>
                        'The deployment group name was specified in an invalid format.',
                    'class' => 'InvalidDeploymentGroupNameException',
                ],
                [
                    'reason' =>
                        'The service role ARN was specified in an invalid format. Or, if an Auto Scaling group was specified, the specified service role does not grant the appropriate permissions to Auto Scaling.',
                    'class' => 'InvalidRoleException',
                ],
            ],
        ],
        'DeregisterOnPremisesInstance' => [
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
                        'CodeDeploy_20141006.DeregisterOnPremisesInstance',
                ],
                'instanceName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An on-premises instance name was not specified.',
                    'class' => 'InstanceNameRequiredException',
                ],
                [
                    'reason' =>
                        'The specified on-premises instance name was specified in an invalid format.',
                    'class' => 'InvalidInstanceNameException',
                ],
            ],
        ],
        'GetApplication' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetApplicationOutput',
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
                    'default' => 'CodeDeploy_20141006.GetApplication',
                ],
                'applicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' =>
                        'The application does not exist with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationDoesNotExistException',
                ],
            ],
        ],
        'GetApplicationRevision' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetApplicationRevisionOutput',
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
                    'default' => 'CodeDeploy_20141006.GetApplicationRevision',
                ],
                'applicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'revision' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'revisionType' => [
                            'type' => 'string',
                        ],
                        's3Location' => [
                            'type' => 'object',
                            'properties' => [
                                'bucket' => [
                                    'type' => 'string',
                                ],
                                'key' => [
                                    'type' => 'string',
                                ],
                                'bundleType' => [
                                    'type' => 'string',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                                'eTag' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'gitHubLocation' => [
                            'type' => 'object',
                            'properties' => [
                                'repository' => [
                                    'type' => 'string',
                                ],
                                'commitId' => [
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
                        'The application does not exist with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationDoesNotExistException',
                ],
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' =>
                        'The named revision does not exist with the applicable IAM user or AWS account.',
                    'class' => 'RevisionDoesNotExistException',
                ],
                [
                    'reason' => 'The revision ID was not specified.',
                    'class' => 'RevisionRequiredException',
                ],
                [
                    'reason' =>
                        'The revision was specified in an invalid format.',
                    'class' => 'InvalidRevisionException',
                ],
            ],
        ],
        'GetDeployment' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetDeploymentOutput',
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
                    'default' => 'CodeDeploy_20141006.GetDeployment',
                ],
                'deploymentId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'At least one deployment ID must be specified.',
                    'class' => 'DeploymentIdRequiredException',
                ],
                [
                    'reason' =>
                        'At least one of the deployment IDs was specified in an invalid format.',
                    'class' => 'InvalidDeploymentIdException',
                ],
                [
                    'reason' =>
                        'The deployment does not exist with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentDoesNotExistException',
                ],
            ],
        ],
        'GetDeploymentConfig' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetDeploymentConfigOutput',
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
                    'default' => 'CodeDeploy_20141006.GetDeploymentConfig',
                ],
                'deploymentConfigName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The deployment configuration name was specified in an invalid format.',
                    'class' => 'InvalidDeploymentConfigNameException',
                ],
                [
                    'reason' =>
                        'The deployment configuration name was not specified.',
                    'class' => 'DeploymentConfigNameRequiredException',
                ],
                [
                    'reason' =>
                        'The deployment configuration does not exist with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentConfigDoesNotExistException',
                ],
            ],
        ],
        'GetDeploymentGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetDeploymentGroupOutput',
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
                    'default' => 'CodeDeploy_20141006.GetDeploymentGroup',
                ],
                'applicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'deploymentGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' =>
                        'The application does not exist with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationDoesNotExistException',
                ],
                [
                    'reason' => 'The deployment group name was not specified.',
                    'class' => 'DeploymentGroupNameRequiredException',
                ],
                [
                    'reason' =>
                        'The deployment group name was specified in an invalid format.',
                    'class' => 'InvalidDeploymentGroupNameException',
                ],
                [
                    'reason' =>
                        'The named deployment group does not exist with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentGroupDoesNotExistException',
                ],
            ],
        ],
        'GetDeploymentInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetDeploymentInstanceOutput',
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
                    'default' => 'CodeDeploy_20141006.GetDeploymentInstance',
                ],
                'deploymentId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'instanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'At least one deployment ID must be specified.',
                    'class' => 'DeploymentIdRequiredException',
                ],
                [
                    'reason' =>
                        'The deployment does not exist with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentDoesNotExistException',
                ],
                [
                    'reason' => 'The instance ID was not specified.',
                    'class' => 'InstanceIdRequiredException',
                ],
                [
                    'reason' =>
                        'At least one of the deployment IDs was specified in an invalid format.',
                    'class' => 'InvalidDeploymentIdException',
                ],
                [
                    'reason' =>
                        'The specified instance does not exist in the deployment group.',
                    'class' => 'InstanceDoesNotExistException',
                ],
            ],
        ],
        'GetOnPremisesInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetOnPremisesInstanceOutput',
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
                    'default' => 'CodeDeploy_20141006.GetOnPremisesInstance',
                ],
                'instanceName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An on-premises instance name was not specified.',
                    'class' => 'InstanceNameRequiredException',
                ],
                [
                    'reason' =>
                        'The specified on-premises instance is not registered.',
                    'class' => 'InstanceNotRegisteredException',
                ],
                [
                    'reason' =>
                        'The specified on-premises instance name was specified in an invalid format.',
                    'class' => 'InvalidInstanceNameException',
                ],
            ],
        ],
        'ListApplicationRevisions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListApplicationRevisionsOutput',
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
                    'default' => 'CodeDeploy_20141006.ListApplicationRevisions',
                ],
                'applicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'sortBy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'sortOrder' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                's3Bucket' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                's3KeyPrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'deployed' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The application does not exist with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationDoesNotExistException',
                ],
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' =>
                        'The column name to sort by is either not present or was specified in an invalid format.',
                    'class' => 'InvalidSortByException',
                ],
                [
                    'reason' =>
                        'The sort order was specified in an invalid format.',
                    'class' => 'InvalidSortOrderException',
                ],
                [
                    'reason' =>
                        'The bucket name either doesn\'t exist or was specified in an invalid format.',
                    'class' => 'InvalidBucketNameFilterException',
                ],
                [
                    'reason' =>
                        'The specified key prefix filter was specified in an invalid format.',
                    'class' => 'InvalidKeyPrefixFilterException',
                ],
                [
                    'reason' =>
                        'A bucket name is required but was not provided.',
                    'class' => 'BucketNameFilterRequiredException',
                ],
                [
                    'reason' =>
                        'The deployed state filter was specified in an invalid format.',
                    'class' => 'InvalidDeployedStateFilterException',
                ],
                [
                    'reason' =>
                        'The next token was specified in an invalid format.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'ListApplications' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListApplicationsOutput',
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
                    'default' => 'CodeDeploy_20141006.ListApplications',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The next token was specified in an invalid format.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'ListDeploymentConfigs' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListDeploymentConfigsOutput',
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
                    'default' => 'CodeDeploy_20141006.ListDeploymentConfigs',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The next token was specified in an invalid format.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'ListDeploymentGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListDeploymentGroupsOutput',
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
                    'default' => 'CodeDeploy_20141006.ListDeploymentGroups',
                ],
                'applicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' =>
                        'The application does not exist with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationDoesNotExistException',
                ],
                [
                    'reason' =>
                        'The next token was specified in an invalid format.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'ListDeploymentInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListDeploymentInstancesOutput',
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
                    'default' => 'CodeDeploy_20141006.ListDeploymentInstances',
                ],
                'deploymentId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'instanceStatusFilter' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'InstanceStatus',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'At least one deployment ID must be specified.',
                    'class' => 'DeploymentIdRequiredException',
                ],
                [
                    'reason' =>
                        'The deployment does not exist with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentDoesNotExistException',
                ],
                [
                    'reason' => 'The specified deployment has not started.',
                    'class' => 'DeploymentNotStartedException',
                ],
                [
                    'reason' =>
                        'The next token was specified in an invalid format.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' =>
                        'At least one of the deployment IDs was specified in an invalid format.',
                    'class' => 'InvalidDeploymentIdException',
                ],
                [
                    'reason' => 'The specified instance status does not exist.',
                    'class' => 'InvalidInstanceStatusException',
                ],
            ],
        ],
        'ListDeployments' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListDeploymentsOutput',
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
                    'default' => 'CodeDeploy_20141006.ListDeployments',
                ],
                'applicationName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'deploymentGroupName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'includeOnlyStatuses' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DeploymentStatus',
                        'type' => 'string',
                    ],
                ],
                'createTimeRange' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'start' => [
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                        'end' => [
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'timestamp',
                        ],
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' =>
                        'The application does not exist with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationDoesNotExistException',
                ],
                [
                    'reason' =>
                        'The deployment group name was specified in an invalid format.',
                    'class' => 'InvalidDeploymentGroupNameException',
                ],
                [
                    'reason' =>
                        'The named deployment group does not exist with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentGroupDoesNotExistException',
                ],
                [
                    'reason' => 'The deployment group name was not specified.',
                    'class' => 'DeploymentGroupNameRequiredException',
                ],
                [
                    'reason' =>
                        'The specified time range was specified in an invalid format.',
                    'class' => 'InvalidTimeRangeException',
                ],
                [
                    'reason' =>
                        'The specified deployment status doesn\'t exist or cannot be determined.',
                    'class' => 'InvalidDeploymentStatusException',
                ],
                [
                    'reason' =>
                        'The next token was specified in an invalid format.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'ListOnPremisesInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListOnPremisesInstancesOutput',
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
                    'default' => 'CodeDeploy_20141006.ListOnPremisesInstances',
                ],
                'registrationStatus' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'tagFilters' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'TagFilter',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Type' => [
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
            'errorResponses' => [
                [
                    'reason' =>
                        'The registration status was specified in an invalid format.',
                    'class' => 'InvalidRegistrationStatusException',
                ],
                [
                    'reason' =>
                        'The specified tag filter was specified in an invalid format.',
                    'class' => 'InvalidTagFilterException',
                ],
                [
                    'reason' =>
                        'The next token was specified in an invalid format.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'RegisterApplicationRevision' => [
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
                        'CodeDeploy_20141006.RegisterApplicationRevision',
                ],
                'applicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'revision' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'revisionType' => [
                            'type' => 'string',
                        ],
                        's3Location' => [
                            'type' => 'object',
                            'properties' => [
                                'bucket' => [
                                    'type' => 'string',
                                ],
                                'key' => [
                                    'type' => 'string',
                                ],
                                'bundleType' => [
                                    'type' => 'string',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                                'eTag' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'gitHubLocation' => [
                            'type' => 'object',
                            'properties' => [
                                'repository' => [
                                    'type' => 'string',
                                ],
                                'commitId' => [
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
                        'The application does not exist with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationDoesNotExistException',
                ],
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' =>
                        'The description that was provided is too long.',
                    'class' => 'DescriptionTooLongException',
                ],
                [
                    'reason' => 'The revision ID was not specified.',
                    'class' => 'RevisionRequiredException',
                ],
                [
                    'reason' =>
                        'The revision was specified in an invalid format.',
                    'class' => 'InvalidRevisionException',
                ],
            ],
        ],
        'RegisterOnPremisesInstance' => [
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
                        'CodeDeploy_20141006.RegisterOnPremisesInstance',
                ],
                'instanceName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'iamUserArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified on-premises instance name is already registered.',
                    'class' => 'InstanceNameAlreadyRegisteredException',
                ],
                [
                    'reason' =>
                        'The specified IAM user ARN is already registered with an on-premises instance.',
                    'class' => 'IamUserArnAlreadyRegisteredException',
                ],
                [
                    'reason' =>
                        'An on-premises instance name was not specified.',
                    'class' => 'InstanceNameRequiredException',
                ],
                [
                    'reason' => 'An IAM user ARN was not specified.',
                    'class' => 'IamUserArnRequiredException',
                ],
                [
                    'reason' =>
                        'The specified on-premises instance name was specified in an invalid format.',
                    'class' => 'InvalidInstanceNameException',
                ],
                [
                    'reason' =>
                        'The IAM user ARN was specified in an invalid format.',
                    'class' => 'InvalidIamUserArnException',
                ],
            ],
        ],
        'RemoveTagsFromOnPremisesInstances' => [
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
                        'CodeDeploy_20141006.RemoveTagsFromOnPremisesInstances',
                ],
                'tags' => [
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
                'instanceNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'InstanceName',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An on-premises instance name was not specified.',
                    'class' => 'InstanceNameRequiredException',
                ],
                [
                    'reason' => 'A tag was not specified.',
                    'class' => 'TagRequiredException',
                ],
                [
                    'reason' =>
                        'The specified tag was specified in an invalid format.',
                    'class' => 'InvalidTagException',
                ],
                [
                    'reason' =>
                        'The maximum allowed number of tags was exceeded.',
                    'class' => 'TagLimitExceededException',
                ],
                [
                    'reason' =>
                        'The maximum number of allowed on-premises instances in a single call was exceeded.',
                    'class' => 'InstanceLimitExceededException',
                ],
                [
                    'reason' =>
                        'The specified on-premises instance is not registered.',
                    'class' => 'InstanceNotRegisteredException',
                ],
            ],
        ],
        'StopDeployment' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'StopDeploymentOutput',
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
                    'default' => 'CodeDeploy_20141006.StopDeployment',
                ],
                'deploymentId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'At least one deployment ID must be specified.',
                    'class' => 'DeploymentIdRequiredException',
                ],
                [
                    'reason' =>
                        'The deployment does not exist with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentDoesNotExistException',
                ],
                [
                    'reason' => 'The deployment is already completed.',
                    'class' => 'DeploymentAlreadyCompletedException',
                ],
                [
                    'reason' =>
                        'At least one of the deployment IDs was specified in an invalid format.',
                    'class' => 'InvalidDeploymentIdException',
                ],
            ],
        ],
        'UpdateApplication' => [
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
                    'default' => 'CodeDeploy_20141006.UpdateApplication',
                ],
                'applicationName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'newApplicationName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' =>
                        'An application with the specified name already exists with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The application does not exist with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationDoesNotExistException',
                ],
            ],
        ],
        'UpdateDeploymentGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateDeploymentGroupOutput',
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
                    'default' => 'CodeDeploy_20141006.UpdateDeploymentGroup',
                ],
                'applicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'currentDeploymentGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'newDeploymentGroupName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'deploymentConfigName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ec2TagFilters' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'EC2TagFilter',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Type' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'onPremisesInstanceTagFilters' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'TagFilter',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Type' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'autoScalingGroups' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'AutoScalingGroupName',
                        'type' => 'string',
                    ],
                ],
                'serviceRoleArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The minimum number of required application names was not specified.',
                    'class' => 'ApplicationNameRequiredException',
                ],
                [
                    'reason' =>
                        'The application name was specified in an invalid format.',
                    'class' => 'InvalidApplicationNameException',
                ],
                [
                    'reason' =>
                        'The application does not exist with the applicable IAM user or AWS account.',
                    'class' => 'ApplicationDoesNotExistException',
                ],
                [
                    'reason' =>
                        'The deployment group name was specified in an invalid format.',
                    'class' => 'InvalidDeploymentGroupNameException',
                ],
                [
                    'reason' =>
                        'A deployment group with the specified name already exists with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentGroupAlreadyExistsException',
                ],
                [
                    'reason' => 'The deployment group name was not specified.',
                    'class' => 'DeploymentGroupNameRequiredException',
                ],
                [
                    'reason' =>
                        'The named deployment group does not exist with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentGroupDoesNotExistException',
                ],
                [
                    'reason' => 'The tag was specified in an invalid format.',
                    'class' => 'InvalidEC2TagException',
                ],
                [
                    'reason' =>
                        'The specified tag was specified in an invalid format.',
                    'class' => 'InvalidTagException',
                ],
                [
                    'reason' =>
                        'The Auto Scaling group was specified in an invalid format or does not exist.',
                    'class' => 'InvalidAutoScalingGroupException',
                ],
                [
                    'reason' =>
                        'The deployment configuration name was specified in an invalid format.',
                    'class' => 'InvalidDeploymentConfigNameException',
                ],
                [
                    'reason' =>
                        'The deployment configuration does not exist with the applicable IAM user or AWS account.',
                    'class' => 'DeploymentConfigDoesNotExistException',
                ],
                [
                    'reason' =>
                        'The service role ARN was specified in an invalid format. Or, if an Auto Scaling group was specified, the specified service role does not grant the appropriate permissions to Auto Scaling.',
                    'class' => 'InvalidRoleException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'BatchGetApplicationsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'applicationsInfo' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ApplicationInfo',
                        'type' => 'object',
                        'properties' => [
                            'applicationId' => [
                                'type' => 'string',
                            ],
                            'applicationName' => [
                                'type' => 'string',
                            ],
                            'createTime' => [
                                'type' => 'string',
                            ],
                            'linkedToGitHub' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchGetDeploymentsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'deploymentsInfo' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DeploymentInfo',
                        'type' => 'object',
                        'properties' => [
                            'applicationName' => [
                                'type' => 'string',
                            ],
                            'deploymentGroupName' => [
                                'type' => 'string',
                            ],
                            'deploymentConfigName' => [
                                'type' => 'string',
                            ],
                            'deploymentId' => [
                                'type' => 'string',
                            ],
                            'revision' => [
                                'type' => 'object',
                                'properties' => [
                                    'revisionType' => [
                                        'type' => 'string',
                                    ],
                                    's3Location' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'bucket' => [
                                                'type' => 'string',
                                            ],
                                            'key' => [
                                                'type' => 'string',
                                            ],
                                            'bundleType' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                            'eTag' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'gitHubLocation' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'repository' => [
                                                'type' => 'string',
                                            ],
                                            'commitId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'status' => [
                                'type' => 'string',
                            ],
                            'errorInformation' => [
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
                            'createTime' => [
                                'type' => 'string',
                            ],
                            'startTime' => [
                                'type' => 'string',
                            ],
                            'completeTime' => [
                                'type' => 'string',
                            ],
                            'deploymentOverview' => [
                                'type' => 'object',
                                'properties' => [
                                    'Pending' => [
                                        'type' => 'numeric',
                                    ],
                                    'InProgress' => [
                                        'type' => 'numeric',
                                    ],
                                    'Succeeded' => [
                                        'type' => 'numeric',
                                    ],
                                    'Failed' => [
                                        'type' => 'numeric',
                                    ],
                                    'Skipped' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'description' => [
                                'type' => 'string',
                            ],
                            'creator' => [
                                'type' => 'string',
                            ],
                            'ignoreApplicationStopFailures' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchGetOnPremisesInstancesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'instanceInfos' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'InstanceInfo',
                        'type' => 'object',
                        'properties' => [
                            'instanceName' => [
                                'type' => 'string',
                            ],
                            'iamUserArn' => [
                                'type' => 'string',
                            ],
                            'instanceArn' => [
                                'type' => 'string',
                            ],
                            'registerTime' => [
                                'type' => 'string',
                            ],
                            'deregisterTime' => [
                                'type' => 'string',
                            ],
                            'tags' => [
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
                        ],
                    ],
                ],
            ],
        ],
        'CreateApplicationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'applicationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateDeploymentOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'deploymentId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateDeploymentConfigOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'deploymentConfigId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateDeploymentGroupOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'deploymentGroupId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteDeploymentGroupOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'hooksNotCleanedUp' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'AutoScalingGroup',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            'hook' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetApplicationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'application' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'applicationId' => [
                            'type' => 'string',
                        ],
                        'applicationName' => [
                            'type' => 'string',
                        ],
                        'createTime' => [
                            'type' => 'string',
                        ],
                        'linkedToGitHub' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
            ],
        ],
        'GetApplicationRevisionOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'applicationName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'revision' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'revisionType' => [
                            'type' => 'string',
                        ],
                        's3Location' => [
                            'type' => 'object',
                            'properties' => [
                                'bucket' => [
                                    'type' => 'string',
                                ],
                                'key' => [
                                    'type' => 'string',
                                ],
                                'bundleType' => [
                                    'type' => 'string',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                                'eTag' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'gitHubLocation' => [
                            'type' => 'object',
                            'properties' => [
                                'repository' => [
                                    'type' => 'string',
                                ],
                                'commitId' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'revisionInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'description' => [
                            'type' => 'string',
                        ],
                        'deploymentGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'DeploymentGroupName',
                                'type' => 'string',
                            ],
                        ],
                        'firstUsedTime' => [
                            'type' => 'string',
                        ],
                        'lastUsedTime' => [
                            'type' => 'string',
                        ],
                        'registerTime' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetDeploymentOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'deploymentInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'applicationName' => [
                            'type' => 'string',
                        ],
                        'deploymentGroupName' => [
                            'type' => 'string',
                        ],
                        'deploymentConfigName' => [
                            'type' => 'string',
                        ],
                        'deploymentId' => [
                            'type' => 'string',
                        ],
                        'revision' => [
                            'type' => 'object',
                            'properties' => [
                                'revisionType' => [
                                    'type' => 'string',
                                ],
                                's3Location' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'bucket' => [
                                            'type' => 'string',
                                        ],
                                        'key' => [
                                            'type' => 'string',
                                        ],
                                        'bundleType' => [
                                            'type' => 'string',
                                        ],
                                        'version' => [
                                            'type' => 'string',
                                        ],
                                        'eTag' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'gitHubLocation' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'repository' => [
                                            'type' => 'string',
                                        ],
                                        'commitId' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'errorInformation' => [
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
                        'createTime' => [
                            'type' => 'string',
                        ],
                        'startTime' => [
                            'type' => 'string',
                        ],
                        'completeTime' => [
                            'type' => 'string',
                        ],
                        'deploymentOverview' => [
                            'type' => 'object',
                            'properties' => [
                                'Pending' => [
                                    'type' => 'numeric',
                                ],
                                'InProgress' => [
                                    'type' => 'numeric',
                                ],
                                'Succeeded' => [
                                    'type' => 'numeric',
                                ],
                                'Failed' => [
                                    'type' => 'numeric',
                                ],
                                'Skipped' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'description' => [
                            'type' => 'string',
                        ],
                        'creator' => [
                            'type' => 'string',
                        ],
                        'ignoreApplicationStopFailures' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
            ],
        ],
        'GetDeploymentConfigOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'deploymentConfigInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'deploymentConfigId' => [
                            'type' => 'string',
                        ],
                        'deploymentConfigName' => [
                            'type' => 'string',
                        ],
                        'minimumHealthyHosts' => [
                            'type' => 'object',
                            'properties' => [
                                '' => [],
                            ],
                        ],
                        'createTime' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetDeploymentGroupOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'deploymentGroupInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'applicationName' => [
                            'type' => 'string',
                        ],
                        'deploymentGroupId' => [
                            'type' => 'string',
                        ],
                        'deploymentGroupName' => [
                            'type' => 'string',
                        ],
                        'deploymentConfigName' => [
                            'type' => 'string',
                        ],
                        'ec2TagFilters' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'EC2TagFilter',
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                    ],
                                    'Type' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'onPremisesInstanceTagFilters' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'TagFilter',
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'Value' => [
                                        'type' => 'string',
                                    ],
                                    'Type' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'autoScalingGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'AutoScalingGroup',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'hook' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'serviceRoleArn' => [
                            'type' => 'string',
                        ],
                        'targetRevision' => [
                            'type' => 'object',
                            'properties' => [
                                'revisionType' => [
                                    'type' => 'string',
                                ],
                                's3Location' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'bucket' => [
                                            'type' => 'string',
                                        ],
                                        'key' => [
                                            'type' => 'string',
                                        ],
                                        'bundleType' => [
                                            'type' => 'string',
                                        ],
                                        'version' => [
                                            'type' => 'string',
                                        ],
                                        'eTag' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'gitHubLocation' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'repository' => [
                                            'type' => 'string',
                                        ],
                                        'commitId' => [
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
        'GetDeploymentInstanceOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'instanceSummary' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'deploymentId' => [
                            'type' => 'string',
                        ],
                        'instanceId' => [
                            'type' => 'string',
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'lastUpdatedAt' => [
                            'type' => 'string',
                        ],
                        'lifecycleEvents' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'LifecycleEvent',
                                'type' => 'object',
                                'properties' => [
                                    'lifecycleEventName' => [
                                        'type' => 'string',
                                    ],
                                    'diagnostics' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'errorCode' => [
                                                'type' => 'string',
                                            ],
                                            'scriptName' => [
                                                'type' => 'string',
                                            ],
                                            'message' => [
                                                'type' => 'string',
                                            ],
                                            'logTail' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'startTime' => [
                                        'type' => 'string',
                                    ],
                                    'endTime' => [
                                        'type' => 'string',
                                    ],
                                    'status' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetOnPremisesInstanceOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'instanceInfo' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'instanceName' => [
                            'type' => 'string',
                        ],
                        'iamUserArn' => [
                            'type' => 'string',
                        ],
                        'instanceArn' => [
                            'type' => 'string',
                        ],
                        'registerTime' => [
                            'type' => 'string',
                        ],
                        'deregisterTime' => [
                            'type' => 'string',
                        ],
                        'tags' => [
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
                    ],
                ],
            ],
        ],
        'ListApplicationRevisionsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'revisions' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'RevisionLocation',
                        'type' => 'object',
                        'properties' => [
                            'revisionType' => [
                                'type' => 'string',
                            ],
                            's3Location' => [
                                'type' => 'object',
                                'properties' => [
                                    'bucket' => [
                                        'type' => 'string',
                                    ],
                                    'key' => [
                                        'type' => 'string',
                                    ],
                                    'bundleType' => [
                                        'type' => 'string',
                                    ],
                                    'version' => [
                                        'type' => 'string',
                                    ],
                                    'eTag' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'gitHubLocation' => [
                                'type' => 'object',
                                'properties' => [
                                    'repository' => [
                                        'type' => 'string',
                                    ],
                                    'commitId' => [
                                        'type' => 'string',
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
        'ListApplicationsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'applications' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ApplicationName',
                        'type' => 'string',
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListDeploymentConfigsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'deploymentConfigsList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DeploymentConfigName',
                        'type' => 'string',
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListDeploymentGroupsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'applicationName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'deploymentGroups' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DeploymentGroupName',
                        'type' => 'string',
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListDeploymentInstancesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'instancesList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'InstanceId',
                        'type' => 'string',
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListDeploymentsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'deployments' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DeploymentId',
                        'type' => 'string',
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListOnPremisesInstancesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'instanceNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'InstanceName',
                        'type' => 'string',
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'StopDeploymentOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'statusMessage' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'UpdateDeploymentGroupOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'hooksNotCleanedUp' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'AutoScalingGroup',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            'hook' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
