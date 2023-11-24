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
    'apiVersion' => '2013-04-01',
    'endpointPrefix' => 'route53',
    'serviceFullName' => 'Amazon Route 53',
    'serviceAbbreviation' => 'Route 53',
    'serviceType' => 'rest-xml',
    'globalEndpoint' => 'route53.amazonaws.com',
    'signatureVersion' => 'v3https',
    'namespace' => 'Route53',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'route53.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'route53.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'route53.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'route53.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'route53.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'route53.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'route53.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'route53.amazonaws.com',
        ],
    ],
    'operations' => [
        'AssociateVPCWithHostedZone' => [
            'httpMethod' => 'POST',
            'uri' => '/2013-04-01/hostedzone/{HostedZoneId}/associatevpc',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'AssociateVPCWithHostedZoneResponse',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'AssociateVPCWithHostedZoneRequest',
                    'namespaces' => [
                        'https://route53.amazonaws.com/doc/2013-04-01/',
                    ],
                ],
            ],
            'parameters' => [
                'HostedZoneId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'VPC' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'VPCRegion' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'VPCId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Comment' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'NoSuchHostedZoneException',
                ],
                [
                    'reason' =>
                        'The hosted zone you are trying to create for your VPC_ID does not belong to you. Route 53 returns this error when the VPC specified by VPCId does not belong to you.',
                    'class' => 'InvalidVPCIdException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The hosted zone you are trying to associate VPC with doesn\'t have any VPC association. Route 53 currently doesn\'t support associate a VPC with a public hosted zone.',
                    'class' => 'PublicZoneVPCAssociationException',
                ],
                [
                    'class' => 'ConflictingDomainExistsException',
                ],
            ],
        ],
        'ChangeResourceRecordSets' => [
            'httpMethod' => 'POST',
            'uri' => '/2013-04-01/hostedzone/{HostedZoneId}/rrset/',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ChangeResourceRecordSetsResponse',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'ChangeResourceRecordSetsRequest',
                    'namespaces' => [
                        'https://route53.amazonaws.com/doc/2013-04-01/',
                    ],
                ],
            ],
            'parameters' => [
                'HostedZoneId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'filters' => ['Aws\\Route53\\Route53Client::cleanId'],
                ],
                'ChangeBatch' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Comment' => [
                            'type' => 'string',
                        ],
                        'Changes' => [
                            'required' => true,
                            'type' => 'array',
                            'minItems' => 1,
                            'items' => [
                                'name' => 'Change',
                                'type' => 'object',
                                'properties' => [
                                    'Action' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'ResourceRecordSet' => [
                                        'required' => true,
                                        'type' => 'object',
                                        'properties' => [
                                            'Name' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'Type' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'SetIdentifier' => [
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                            'Weight' => [
                                                'type' => 'numeric',
                                                'maximum' => 255,
                                            ],
                                            'Region' => [
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                            'GeoLocation' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'ContinentCode' => [
                                                        'type' => 'string',
                                                        'minLength' => 2,
                                                    ],
                                                    'CountryCode' => [
                                                        'type' => 'string',
                                                        'minLength' => 1,
                                                    ],
                                                    'SubdivisionCode' => [
                                                        'type' => 'string',
                                                        'minLength' => 1,
                                                    ],
                                                ],
                                            ],
                                            'Failover' => [
                                                'type' => 'string',
                                            ],
                                            'TTL' => [
                                                'type' => 'numeric',
                                                'maximum' => 2147483647,
                                            ],
                                            'ResourceRecords' => [
                                                'type' => 'array',
                                                'minItems' => 1,
                                                'items' => [
                                                    'name' => 'ResourceRecord',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Value' => [
                                                            'required' => true,
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'AliasTarget' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'HostedZoneId' => [
                                                        'required' => true,
                                                        'type' => 'string',
                                                    ],
                                                    'DNSName' => [
                                                        'required' => true,
                                                        'type' => 'string',
                                                    ],
                                                    'EvaluateTargetHealth' => [
                                                        'required' => true,
                                                        'type' => 'boolean',
                                                        'format' =>
                                                            'boolean-string',
                                                    ],
                                                ],
                                            ],
                                            'HealthCheckId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'NoSuchHostedZoneException',
                ],
                [
                    'reason' =>
                        'The health check you are trying to get or delete does not exist.',
                    'class' => 'NoSuchHealthCheckException',
                ],
                [
                    'reason' =>
                        'This error contains a list of one or more error messages. Each error message indicates one error in the change batch. For more information, see Example InvalidChangeBatch Errors.',
                    'class' => 'InvalidChangeBatchException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because Route 53 was still processing a prior request.',
                    'class' => 'PriorRequestNotCompleteException',
                ],
            ],
        ],
        'ChangeTagsForResource' => [
            'httpMethod' => 'POST',
            'uri' => '/2013-04-01/tags/{ResourceType}/{ResourceId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ChangeTagsForResourceResponse',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'ChangeTagsForResourceRequest',
                    'namespaces' => [
                        'https://route53.amazonaws.com/doc/2013-04-01/',
                    ],
                ],
            ],
            'parameters' => [
                'ResourceType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'ResourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'AddTags' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'minItems' => 1,
                    'maxItems' => 10,
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
                'RemoveTagKeys' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'minItems' => 1,
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'Key',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The health check you are trying to get or delete does not exist.',
                    'class' => 'NoSuchHealthCheckException',
                ],
                [
                    'class' => 'NoSuchHostedZoneException',
                ],
                [
                    'reason' =>
                        'The request was rejected because Route 53 was still processing a prior request.',
                    'class' => 'PriorRequestNotCompleteException',
                ],
                [
                    'class' => 'ThrottlingException',
                ],
            ],
        ],
        'CreateHealthCheck' => [
            'httpMethod' => 'POST',
            'uri' => '/2013-04-01/healthcheck',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateHealthCheckResponse',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'CreateHealthCheckRequest',
                    'namespaces' => [
                        'https://route53.amazonaws.com/doc/2013-04-01/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                    'minLength' => 1,
                ],
                'HealthCheckConfig' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'IPAddress' => [
                            'type' => 'string',
                        ],
                        'Port' => [
                            'type' => 'numeric',
                            'minimum' => 1,
                            'maximum' => 65535,
                        ],
                        'Type' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'ResourcePath' => [
                            'type' => 'string',
                        ],
                        'FullyQualifiedDomainName' => [
                            'type' => 'string',
                        ],
                        'SearchString' => [
                            'type' => 'string',
                        ],
                        'RequestInterval' => [
                            'type' => 'numeric',
                            'minimum' => 10,
                            'maximum' => 30,
                        ],
                        'FailureThreshold' => [
                            'type' => 'numeric',
                            'minimum' => 1,
                            'maximum' => 10,
                        ],
                        'MeasureLatency' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'Inverted' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'HealthThreshold' => [
                            'type' => 'numeric',
                            'maximum' => 256,
                        ],
                        'ChildHealthChecks' => [
                            'type' => 'array',
                            'maxItems' => 256,
                            'items' => [
                                'name' => 'ChildHealthCheck',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'TooManyHealthChecksException',
                ],
                [
                    'reason' =>
                        'The health check you are trying to create already exists. Route 53 returns this error when a health check has already been created with the specified CallerReference.',
                    'class' => 'HealthCheckAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'CreateHostedZone' => [
            'httpMethod' => 'POST',
            'uri' => '/2013-04-01/hostedzone',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateHostedZoneResponse',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'CreateHostedZoneRequest',
                    'namespaces' => [
                        'https://route53.amazonaws.com/doc/2013-04-01/',
                    ],
                ],
            ],
            'parameters' => [
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'VPC' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'VPCRegion' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'VPCId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'CallerReference' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                    'minLength' => 1,
                ],
                'HostedZoneConfig' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Comment' => [
                            'type' => 'string',
                        ],
                        'PrivateZone' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
                'DelegationSetId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This error indicates that the specified domain name is not valid.',
                    'class' => 'InvalidDomainNameException',
                ],
                [
                    'reason' =>
                        'The hosted zone you are trying to create already exists. Route 53 returns this error when a hosted zone has already been created with the specified CallerReference.',
                    'class' => 'HostedZoneAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'This error indicates that you\'ve reached the maximum number of hosted zones that can be created for the current AWS account. You can request an increase to the limit on the Contact Us page.',
                    'class' => 'TooManyHostedZonesException',
                ],
                [
                    'reason' =>
                        'The hosted zone you are trying to create for your VPC_ID does not belong to you. Route 53 returns this error when the VPC specified by VPCId does not belong to you.',
                    'class' => 'InvalidVPCIdException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'Route 53 allows some duplicate domain names, but there is a maximum number of duplicate names. This error indicates that you have reached that maximum. If you want to create another hosted zone with the same name and Route 53 generates this error, you can request an increase to the limit on the Contact Us page.',
                    'class' => 'DelegationSetNotAvailableException',
                ],
                [
                    'class' => 'ConflictingDomainExistsException',
                ],
                [
                    'reason' => 'The specified delegation set does not exist.',
                    'class' => 'NoSuchDelegationSetException',
                ],
                [
                    'reason' =>
                        'The specified delegation set has not been marked as reusable.',
                    'class' => 'DelegationSetNotReusableException',
                ],
            ],
        ],
        'CreateReusableDelegationSet' => [
            'httpMethod' => 'POST',
            'uri' => '/2013-04-01/delegationset',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateReusableDelegationSetResponse',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'CreateReusableDelegationSetRequest',
                    'namespaces' => [
                        'https://route53.amazonaws.com/doc/2013-04-01/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                    'minLength' => 1,
                ],
                'HostedZoneId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A delegation set with the same owner and caller reference combination has already been created.',
                    'class' => 'DelegationSetAlreadyCreatedException',
                ],
                [
                    'reason' =>
                        'The limits specified for a resource have been exceeded.',
                    'class' => 'LimitsExceededException',
                ],
                [
                    'reason' => 'The specified HostedZone cannot be found.',
                    'class' => 'HostedZoneNotFoundException',
                ],
                [
                    'reason' =>
                        'At least one of the specified arguments is invalid.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'Route 53 allows some duplicate domain names, but there is a maximum number of duplicate names. This error indicates that you have reached that maximum. If you want to create another hosted zone with the same name and Route 53 generates this error, you can request an increase to the limit on the Contact Us page.',
                    'class' => 'DelegationSetNotAvailableException',
                ],
                [
                    'reason' =>
                        'The specified delegation set has already been marked as reusable.',
                    'class' => 'DelegationSetAlreadyReusableException',
                ],
            ],
        ],
        'DeleteHealthCheck' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2013-04-01/healthcheck/{HealthCheckId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DeleteHealthCheckResponse',
            'responseType' => 'model',
            'parameters' => [
                'HealthCheckId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The health check you are trying to get or delete does not exist.',
                    'class' => 'NoSuchHealthCheckException',
                ],
                [
                    'reason' =>
                        'There are resource records associated with this health check. Before you can delete the health check, you must disassociate it from the resource record sets.',
                    'class' => 'HealthCheckInUseException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'DeleteHostedZone' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2013-04-01/hostedzone/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DeleteHostedZoneResponse',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'filters' => ['Aws\\Route53\\Route53Client::cleanId'],
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'NoSuchHostedZoneException',
                ],
                [
                    'reason' =>
                        'The hosted zone contains resource record sets in addition to the default NS and SOA resource record sets. Before you can delete the hosted zone, you must delete the additional resource record sets.',
                    'class' => 'HostedZoneNotEmptyException',
                ],
                [
                    'reason' =>
                        'The request was rejected because Route 53 was still processing a prior request.',
                    'class' => 'PriorRequestNotCompleteException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'DeleteReusableDelegationSet' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2013-04-01/delegationset/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DeleteReusableDelegationSetResponse',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified delegation set does not exist.',
                    'class' => 'NoSuchDelegationSetException',
                ],
                [
                    'reason' =>
                        'The specified delegation contains associated hosted zones which must be deleted before the reusable delegation set can be deleted.',
                    'class' => 'DelegationSetInUseException',
                ],
                [
                    'reason' =>
                        'The specified delegation set has not been marked as reusable.',
                    'class' => 'DelegationSetNotReusableException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'DisassociateVPCFromHostedZone' => [
            'httpMethod' => 'POST',
            'uri' => '/2013-04-01/hostedzone/{HostedZoneId}/disassociatevpc',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DisassociateVPCFromHostedZoneResponse',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'DisassociateVPCFromHostedZoneRequest',
                    'namespaces' => [
                        'https://route53.amazonaws.com/doc/2013-04-01/',
                    ],
                ],
            ],
            'parameters' => [
                'HostedZoneId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'VPC' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'VPCRegion' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'VPCId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Comment' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'NoSuchHostedZoneException',
                ],
                [
                    'reason' =>
                        'The hosted zone you are trying to create for your VPC_ID does not belong to you. Route 53 returns this error when the VPC specified by VPCId does not belong to you.',
                    'class' => 'InvalidVPCIdException',
                ],
                [
                    'reason' =>
                        'The VPC you specified is not currently associated with the hosted zone.',
                    'class' => 'VPCAssociationNotFoundException',
                ],
                [
                    'reason' =>
                        'The VPC you are trying to disassociate from the hosted zone is the last the VPC that is associated with the hosted zone. Route 53 currently doesn\'t support disassociate the last VPC from the hosted zone.',
                    'class' => 'LastVPCAssociationException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'GetChange' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/change/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetChangeResponse',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'filters' => ['Aws\\Route53\\Route53Client::cleanId'],
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'NoSuchChangeException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'GetCheckerIpRanges' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/checkeripranges',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetCheckerIpRangesResponse',
            'responseType' => 'model',
            'parameters' => [
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetGeoLocation' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/geolocation',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetGeoLocationResponse',
            'responseType' => 'model',
            'parameters' => [
                'ContinentCode' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'continentcode',
                    'minLength' => 2,
                ],
                'CountryCode' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'countrycode',
                    'minLength' => 1,
                ],
                'SubdivisionCode' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'subdivisioncode',
                    'minLength' => 1,
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The geo location you are trying to get does not exist.',
                    'class' => 'NoSuchGeoLocationException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'GetHealthCheck' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/healthcheck/{HealthCheckId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetHealthCheckResponse',
            'responseType' => 'model',
            'parameters' => [
                'HealthCheckId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The health check you are trying to get or delete does not exist.',
                    'class' => 'NoSuchHealthCheckException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The resource you are trying to access is unsupported on this Route 53 endpoint. Please consider using a newer endpoint or a tool that does so.',
                    'class' => 'IncompatibleVersionException',
                ],
            ],
        ],
        'GetHealthCheckCount' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/healthcheckcount',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetHealthCheckCountResponse',
            'responseType' => 'model',
            'parameters' => [
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetHealthCheckLastFailureReason' => [
            'httpMethod' => 'GET',
            'uri' =>
                '/2013-04-01/healthcheck/{HealthCheckId}/lastfailurereason',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetHealthCheckLastFailureReasonResponse',
            'responseType' => 'model',
            'parameters' => [
                'HealthCheckId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The health check you are trying to get or delete does not exist.',
                    'class' => 'NoSuchHealthCheckException',
                ],
            ],
        ],
        'GetHealthCheckStatus' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/healthcheck/{HealthCheckId}/status',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetHealthCheckStatusResponse',
            'responseType' => 'model',
            'parameters' => [
                'HealthCheckId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The health check you are trying to get or delete does not exist.',
                    'class' => 'NoSuchHealthCheckException',
                ],
            ],
        ],
        'GetHostedZone' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/hostedzone/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetHostedZoneResponse',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'filters' => ['Aws\\Route53\\Route53Client::cleanId'],
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'NoSuchHostedZoneException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'GetHostedZoneCount' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/hostedzonecount',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetHostedZoneCountResponse',
            'responseType' => 'model',
            'parameters' => [
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'GetReusableDelegationSet' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/delegationset/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetReusableDelegationSetResponse',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified delegation set does not exist.',
                    'class' => 'NoSuchDelegationSetException',
                ],
                [
                    'reason' =>
                        'The specified delegation set has not been marked as reusable.',
                    'class' => 'DelegationSetNotReusableException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'ListGeoLocations' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/geolocations',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListGeoLocationsResponse',
            'responseType' => 'model',
            'parameters' => [
                'StartContinentCode' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'startcontinentcode',
                    'minLength' => 2,
                ],
                'StartCountryCode' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'startcountrycode',
                    'minLength' => 1,
                ],
                'StartSubdivisionCode' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'startsubdivisioncode',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'maxitems',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'ListHealthChecks' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/healthcheck',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListHealthChecksResponse',
            'responseType' => 'model',
            'parameters' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'marker',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'maxitems',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The resource you are trying to access is unsupported on this Route 53 endpoint. Please consider using a newer endpoint or a tool that does so.',
                    'class' => 'IncompatibleVersionException',
                ],
            ],
        ],
        'ListHostedZones' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/hostedzone',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListHostedZonesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'marker',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'maxitems',
                ],
                'DelegationSetId' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'delegationsetid',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' => 'The specified delegation set does not exist.',
                    'class' => 'NoSuchDelegationSetException',
                ],
                [
                    'reason' =>
                        'The specified delegation set has not been marked as reusable.',
                    'class' => 'DelegationSetNotReusableException',
                ],
            ],
        ],
        'ListHostedZonesByName' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/hostedzonesbyname',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListHostedZonesByNameResponse',
            'responseType' => 'model',
            'parameters' => [
                'DNSName' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'dnsname',
                ],
                'HostedZoneId' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'hostedzoneid',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'maxitems',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'This error indicates that the specified domain name is not valid.',
                    'class' => 'InvalidDomainNameException',
                ],
            ],
        ],
        'ListResourceRecordSets' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/hostedzone/{HostedZoneId}/rrset',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListResourceRecordSetsResponse',
            'responseType' => 'model',
            'parameters' => [
                'HostedZoneId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'filters' => ['Aws\\Route53\\Route53Client::cleanId'],
                ],
                'StartRecordName' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'name',
                ],
                'StartRecordType' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'type',
                ],
                'StartRecordIdentifier' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'identifier',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'maxitems',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'NoSuchHostedZoneException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'ListReusableDelegationSets' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/delegationset',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListReusableDelegationSetsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'marker',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'maxitems',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'ListTagsForResource' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-04-01/tags/{ResourceType}/{ResourceId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListTagsForResourceResponse',
            'responseType' => 'model',
            'parameters' => [
                'ResourceType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'ResourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The health check you are trying to get or delete does not exist.',
                    'class' => 'NoSuchHealthCheckException',
                ],
                [
                    'class' => 'NoSuchHostedZoneException',
                ],
                [
                    'reason' =>
                        'The request was rejected because Route 53 was still processing a prior request.',
                    'class' => 'PriorRequestNotCompleteException',
                ],
                [
                    'class' => 'ThrottlingException',
                ],
            ],
        ],
        'ListTagsForResources' => [
            'httpMethod' => 'POST',
            'uri' => '/2013-04-01/tags/{ResourceType}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListTagsForResourcesResponse',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'ListTagsForResourcesRequest',
                    'namespaces' => [
                        'https://route53.amazonaws.com/doc/2013-04-01/',
                    ],
                ],
            ],
            'parameters' => [
                'ResourceType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'ResourceIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'xml',
                    'minItems' => 1,
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'ResourceId',
                        'type' => 'string',
                    ],
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The health check you are trying to get or delete does not exist.',
                    'class' => 'NoSuchHealthCheckException',
                ],
                [
                    'class' => 'NoSuchHostedZoneException',
                ],
                [
                    'reason' =>
                        'The request was rejected because Route 53 was still processing a prior request.',
                    'class' => 'PriorRequestNotCompleteException',
                ],
                [
                    'class' => 'ThrottlingException',
                ],
            ],
        ],
        'UpdateHealthCheck' => [
            'httpMethod' => 'POST',
            'uri' => '/2013-04-01/healthcheck/{HealthCheckId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UpdateHealthCheckResponse',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'UpdateHealthCheckRequest',
                    'namespaces' => [
                        'https://route53.amazonaws.com/doc/2013-04-01/',
                    ],
                ],
            ],
            'parameters' => [
                'HealthCheckId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'HealthCheckVersion' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                    'minimum' => 1,
                ],
                'IPAddress' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Port' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                    'minimum' => 1,
                    'maximum' => 65535,
                ],
                'ResourcePath' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'FullyQualifiedDomainName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'SearchString' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'FailureThreshold' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                    'minimum' => 1,
                    'maximum' => 10,
                ],
                'Inverted' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'xml',
                ],
                'HealthThreshold' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                    'maximum' => 256,
                ],
                'ChildHealthChecks' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'maxItems' => 256,
                    'items' => [
                        'name' => 'ChildHealthCheck',
                        'type' => 'string',
                    ],
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The health check you are trying to get or delete does not exist.',
                    'class' => 'NoSuchHealthCheckException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'class' => 'HealthCheckVersionMismatchException',
                ],
            ],
        ],
        'UpdateHostedZoneComment' => [
            'httpMethod' => 'POST',
            'uri' => '/2013-04-01/hostedzone/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UpdateHostedZoneCommentResponse',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'UpdateHostedZoneCommentRequest',
                    'namespaces' => [
                        'https://route53.amazonaws.com/doc/2013-04-01/',
                    ],
                ],
            ],
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Comment' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'NoSuchHostedZoneException',
                ],
                [
                    'reason' =>
                        'Some value specified in the request is invalid or the XML document is malformed.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
    ],
    'models' => [
        'AssociateVPCWithHostedZoneResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ChangeInfo' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'SubmittedAt' => [
                            'type' => 'string',
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ChangeResourceRecordSetsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ChangeInfo' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'SubmittedAt' => [
                            'type' => 'string',
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ChangeTagsForResourceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'CreateHealthCheckResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HealthCheck' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'HealthCheckConfig' => [
                            'type' => 'object',
                            'properties' => [
                                'IPAddress' => [
                                    'type' => 'string',
                                ],
                                'Port' => [
                                    'type' => 'numeric',
                                ],
                                'Type' => [
                                    'type' => 'string',
                                ],
                                'ResourcePath' => [
                                    'type' => 'string',
                                ],
                                'FullyQualifiedDomainName' => [
                                    'type' => 'string',
                                ],
                                'SearchString' => [
                                    'type' => 'string',
                                ],
                                'RequestInterval' => [
                                    'type' => 'numeric',
                                ],
                                'FailureThreshold' => [
                                    'type' => 'numeric',
                                ],
                                'MeasureLatency' => [
                                    'type' => 'boolean',
                                ],
                                'Inverted' => [
                                    'type' => 'boolean',
                                ],
                                'HealthThreshold' => [
                                    'type' => 'numeric',
                                ],
                                'ChildHealthChecks' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'ChildHealthCheck',
                                        'type' => 'string',
                                        'sentAs' => 'ChildHealthCheck',
                                    ],
                                ],
                            ],
                        ],
                        'HealthCheckVersion' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'Location' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'CreateHostedZoneResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HostedZone' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'Config' => [
                            'type' => 'object',
                            'properties' => [
                                'Comment' => [
                                    'type' => 'string',
                                ],
                                'PrivateZone' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                        'ResourceRecordSetCount' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'ChangeInfo' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'SubmittedAt' => [
                            'type' => 'string',
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'DelegationSet' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'NameServers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'NameServer',
                                'type' => 'string',
                                'sentAs' => 'NameServer',
                            ],
                        ],
                    ],
                ],
                'VPC' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'VPCRegion' => [
                            'type' => 'string',
                        ],
                        'VPCId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Location' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'CreateReusableDelegationSetResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DelegationSet' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'NameServers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'NameServer',
                                'type' => 'string',
                                'sentAs' => 'NameServer',
                            ],
                        ],
                    ],
                ],
                'Location' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteHealthCheckResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteHostedZoneResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ChangeInfo' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'SubmittedAt' => [
                            'type' => 'string',
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteReusableDelegationSetResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DisassociateVPCFromHostedZoneResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ChangeInfo' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'SubmittedAt' => [
                            'type' => 'string',
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetChangeResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ChangeInfo' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'SubmittedAt' => [
                            'type' => 'string',
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetCheckerIpRangesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CheckerIpRanges' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'IPAddressCidr',
                        'type' => 'string',
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetGeoLocationResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GeoLocationDetails' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'ContinentCode' => [
                            'type' => 'string',
                        ],
                        'ContinentName' => [
                            'type' => 'string',
                        ],
                        'CountryCode' => [
                            'type' => 'string',
                        ],
                        'CountryName' => [
                            'type' => 'string',
                        ],
                        'SubdivisionCode' => [
                            'type' => 'string',
                        ],
                        'SubdivisionName' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetHealthCheckResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HealthCheck' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'HealthCheckConfig' => [
                            'type' => 'object',
                            'properties' => [
                                'IPAddress' => [
                                    'type' => 'string',
                                ],
                                'Port' => [
                                    'type' => 'numeric',
                                ],
                                'Type' => [
                                    'type' => 'string',
                                ],
                                'ResourcePath' => [
                                    'type' => 'string',
                                ],
                                'FullyQualifiedDomainName' => [
                                    'type' => 'string',
                                ],
                                'SearchString' => [
                                    'type' => 'string',
                                ],
                                'RequestInterval' => [
                                    'type' => 'numeric',
                                ],
                                'FailureThreshold' => [
                                    'type' => 'numeric',
                                ],
                                'MeasureLatency' => [
                                    'type' => 'boolean',
                                ],
                                'Inverted' => [
                                    'type' => 'boolean',
                                ],
                                'HealthThreshold' => [
                                    'type' => 'numeric',
                                ],
                                'ChildHealthChecks' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'ChildHealthCheck',
                                        'type' => 'string',
                                        'sentAs' => 'ChildHealthCheck',
                                    ],
                                ],
                            ],
                        ],
                        'HealthCheckVersion' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetHealthCheckCountResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HealthCheckCount' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetHealthCheckLastFailureReasonResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HealthCheckObservations' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'HealthCheckObservation',
                        'type' => 'object',
                        'sentAs' => 'HealthCheckObservation',
                        'properties' => [
                            'IPAddress' => [
                                'type' => 'string',
                            ],
                            'StatusReport' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'CheckedTime' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetHealthCheckStatusResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HealthCheckObservations' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'HealthCheckObservation',
                        'type' => 'object',
                        'sentAs' => 'HealthCheckObservation',
                        'properties' => [
                            'IPAddress' => [
                                'type' => 'string',
                            ],
                            'StatusReport' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'CheckedTime' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetHostedZoneResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HostedZone' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'Config' => [
                            'type' => 'object',
                            'properties' => [
                                'Comment' => [
                                    'type' => 'string',
                                ],
                                'PrivateZone' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                        'ResourceRecordSetCount' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'DelegationSet' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'NameServers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'NameServer',
                                'type' => 'string',
                                'sentAs' => 'NameServer',
                            ],
                        ],
                    ],
                ],
                'VPCs' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'VPC',
                        'type' => 'object',
                        'sentAs' => 'VPC',
                        'properties' => [
                            'VPCRegion' => [
                                'type' => 'string',
                            ],
                            'VPCId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetHostedZoneCountResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HostedZoneCount' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetReusableDelegationSetResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DelegationSet' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'NameServers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'NameServer',
                                'type' => 'string',
                                'sentAs' => 'NameServer',
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListGeoLocationsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GeoLocationDetailsList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'GeoLocationDetails',
                        'type' => 'object',
                        'sentAs' => 'GeoLocationDetails',
                        'properties' => [
                            'ContinentCode' => [
                                'type' => 'string',
                            ],
                            'ContinentName' => [
                                'type' => 'string',
                            ],
                            'CountryCode' => [
                                'type' => 'string',
                            ],
                            'CountryName' => [
                                'type' => 'string',
                            ],
                            'SubdivisionCode' => [
                                'type' => 'string',
                            ],
                            'SubdivisionName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'NextContinentCode' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextCountryCode' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextSubdivisionCode' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListHealthChecksResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HealthChecks' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'HealthCheck',
                        'type' => 'object',
                        'sentAs' => 'HealthCheck',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'CallerReference' => [
                                'type' => 'string',
                            ],
                            'HealthCheckConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'IPAddress' => [
                                        'type' => 'string',
                                    ],
                                    'Port' => [
                                        'type' => 'numeric',
                                    ],
                                    'Type' => [
                                        'type' => 'string',
                                    ],
                                    'ResourcePath' => [
                                        'type' => 'string',
                                    ],
                                    'FullyQualifiedDomainName' => [
                                        'type' => 'string',
                                    ],
                                    'SearchString' => [
                                        'type' => 'string',
                                    ],
                                    'RequestInterval' => [
                                        'type' => 'numeric',
                                    ],
                                    'FailureThreshold' => [
                                        'type' => 'numeric',
                                    ],
                                    'MeasureLatency' => [
                                        'type' => 'boolean',
                                    ],
                                    'Inverted' => [
                                        'type' => 'boolean',
                                    ],
                                    'HealthThreshold' => [
                                        'type' => 'numeric',
                                    ],
                                    'ChildHealthChecks' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'ChildHealthCheck',
                                            'type' => 'string',
                                            'sentAs' => 'ChildHealthCheck',
                                        ],
                                    ],
                                ],
                            ],
                            'HealthCheckVersion' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListHostedZonesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HostedZones' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'HostedZone',
                        'type' => 'object',
                        'sentAs' => 'HostedZone',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'CallerReference' => [
                                'type' => 'string',
                            ],
                            'Config' => [
                                'type' => 'object',
                                'properties' => [
                                    'Comment' => [
                                        'type' => 'string',
                                    ],
                                    'PrivateZone' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'ResourceRecordSetCount' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListHostedZonesByNameResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HostedZones' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'HostedZone',
                        'type' => 'object',
                        'sentAs' => 'HostedZone',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'CallerReference' => [
                                'type' => 'string',
                            ],
                            'Config' => [
                                'type' => 'object',
                                'properties' => [
                                    'Comment' => [
                                        'type' => 'string',
                                    ],
                                    'PrivateZone' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'ResourceRecordSetCount' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'DNSName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'HostedZoneId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'NextDNSName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextHostedZoneId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListResourceRecordSetsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ResourceRecordSets' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ResourceRecordSet',
                        'type' => 'object',
                        'sentAs' => 'ResourceRecordSet',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Type' => [
                                'type' => 'string',
                            ],
                            'SetIdentifier' => [
                                'type' => 'string',
                            ],
                            'Weight' => [
                                'type' => 'numeric',
                            ],
                            'Region' => [
                                'type' => 'string',
                            ],
                            'GeoLocation' => [
                                'type' => 'object',
                                'properties' => [
                                    'ContinentCode' => [
                                        'type' => 'string',
                                    ],
                                    'CountryCode' => [
                                        'type' => 'string',
                                    ],
                                    'SubdivisionCode' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Failover' => [
                                'type' => 'string',
                            ],
                            'TTL' => [
                                'type' => 'numeric',
                            ],
                            'ResourceRecords' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ResourceRecord',
                                    'type' => 'object',
                                    'sentAs' => 'ResourceRecord',
                                    'properties' => [
                                        'Value' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'AliasTarget' => [
                                'type' => 'object',
                                'properties' => [
                                    'HostedZoneId' => [
                                        'type' => 'string',
                                    ],
                                    'DNSName' => [
                                        'type' => 'string',
                                    ],
                                    'EvaluateTargetHealth' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'HealthCheckId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'NextRecordName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextRecordType' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextRecordIdentifier' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListReusableDelegationSetsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DelegationSets' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DelegationSet',
                        'type' => 'object',
                        'sentAs' => 'DelegationSet',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'CallerReference' => [
                                'type' => 'string',
                            ],
                            'NameServers' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'NameServer',
                                    'type' => 'string',
                                    'sentAs' => 'NameServer',
                                ],
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListTagsForResourceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ResourceTagSet' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'ResourceType' => [
                            'type' => 'string',
                        ],
                        'ResourceId' => [
                            'type' => 'string',
                        ],
                        'Tags' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Tag',
                                'type' => 'object',
                                'sentAs' => 'Tag',
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
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListTagsForResourcesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ResourceTagSets' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ResourceTagSet',
                        'type' => 'object',
                        'sentAs' => 'ResourceTagSet',
                        'properties' => [
                            'ResourceType' => [
                                'type' => 'string',
                            ],
                            'ResourceId' => [
                                'type' => 'string',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Tag',
                                    'type' => 'object',
                                    'sentAs' => 'Tag',
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
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'UpdateHealthCheckResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HealthCheck' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'HealthCheckConfig' => [
                            'type' => 'object',
                            'properties' => [
                                'IPAddress' => [
                                    'type' => 'string',
                                ],
                                'Port' => [
                                    'type' => 'numeric',
                                ],
                                'Type' => [
                                    'type' => 'string',
                                ],
                                'ResourcePath' => [
                                    'type' => 'string',
                                ],
                                'FullyQualifiedDomainName' => [
                                    'type' => 'string',
                                ],
                                'SearchString' => [
                                    'type' => 'string',
                                ],
                                'RequestInterval' => [
                                    'type' => 'numeric',
                                ],
                                'FailureThreshold' => [
                                    'type' => 'numeric',
                                ],
                                'MeasureLatency' => [
                                    'type' => 'boolean',
                                ],
                                'Inverted' => [
                                    'type' => 'boolean',
                                ],
                                'HealthThreshold' => [
                                    'type' => 'numeric',
                                ],
                                'ChildHealthChecks' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'ChildHealthCheck',
                                        'type' => 'string',
                                        'sentAs' => 'ChildHealthCheck',
                                    ],
                                ],
                            ],
                        ],
                        'HealthCheckVersion' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'UpdateHostedZoneCommentResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HostedZone' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'Config' => [
                            'type' => 'object',
                            'properties' => [
                                'Comment' => [
                                    'type' => 'string',
                                ],
                                'PrivateZone' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                        'ResourceRecordSetCount' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListHealthChecks' => [
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'HealthChecks',
        ],
        'ListHostedZones' => [
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'HostedZones',
        ],
        'ListResourceRecordSets' => [
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'ResourceRecordSets',
            'input_token' => [
                'StartRecordName',
                'StartRecordType',
                'StartRecordIdentifier',
            ],
            'output_token' => [
                'NextRecordName',
                'NextRecordType',
                'NextRecordIdentifier',
            ],
        ],
    ],
];
