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
    'apiVersion' => '2014-05-15',
    'endpointPrefix' => 'route53domains',
    'serviceFullName' => 'Amazon Route 53 Domains',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'Route53Domains_v20140515.',
    'signatureVersion' => 'v4',
    'namespace' => 'Route53Domains',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'route53domains.us-east-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'CheckDomainAvailability' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CheckDomainAvailabilityResponse',
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
                        'Route53Domains_v20140515.CheckDomainAvailability',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IdnLangCode' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
            ],
        ],
        'DeleteTagsForDomain' => [
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
                    'default' => 'Route53Domains_v20140515.DeleteTagsForDomain',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'TagsToDelete' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'TagKey',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The number of operations or jobs running exceeded the allowed threshold for the account.',
                    'class' => 'OperationLimitExceededException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
            ],
        ],
        'DisableDomainAutoRenew' => [
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
                        'Route53Domains_v20140515.DisableDomainAutoRenew',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
            ],
        ],
        'DisableDomainTransferLock' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DisableDomainTransferLockResponse',
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
                        'Route53Domains_v20140515.DisableDomainTransferLock',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request is already in progress for the domain.',
                    'class' => 'DuplicateRequestException',
                ],
                [
                    'reason' =>
                        'The top-level domain does not support this operation.',
                    'class' => 'TLDRulesViolationException',
                ],
                [
                    'reason' =>
                        'The number of operations or jobs running exceeded the allowed threshold for the account.',
                    'class' => 'OperationLimitExceededException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
            ],
        ],
        'EnableDomainAutoRenew' => [
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
                        'Route53Domains_v20140515.EnableDomainAutoRenew',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
            ],
        ],
        'EnableDomainTransferLock' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EnableDomainTransferLockResponse',
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
                        'Route53Domains_v20140515.EnableDomainTransferLock',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request is already in progress for the domain.',
                    'class' => 'DuplicateRequestException',
                ],
                [
                    'reason' =>
                        'The top-level domain does not support this operation.',
                    'class' => 'TLDRulesViolationException',
                ],
                [
                    'reason' =>
                        'The number of operations or jobs running exceeded the allowed threshold for the account.',
                    'class' => 'OperationLimitExceededException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
            ],
        ],
        'GetDomainDetail' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetDomainDetailResponse',
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
                    'default' => 'Route53Domains_v20140515.GetDomainDetail',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
            ],
        ],
        'GetOperationDetail' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetOperationDetailResponse',
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
                    'default' => 'Route53Domains_v20140515.GetOperationDetail',
                ],
                'OperationId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'ListDomains' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListDomainsResponse',
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
                    'default' => 'Route53Domains_v20140515.ListDomains',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 100,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'ListOperations' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListOperationsResponse',
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
                    'default' => 'Route53Domains_v20140515.ListOperations',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 100,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'ListTagsForDomain' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListTagsForDomainResponse',
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
                    'default' => 'Route53Domains_v20140515.ListTagsForDomain',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The number of operations or jobs running exceeded the allowed threshold for the account.',
                    'class' => 'OperationLimitExceededException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
            ],
        ],
        'RegisterDomain' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RegisterDomainResponse',
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
                    'default' => 'Route53Domains_v20140515.RegisterDomain',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IdnLangCode' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DurationInYears' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 10,
                ],
                'AutoRenew' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'AdminContact' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'FirstName' => [
                            'type' => 'string',
                        ],
                        'LastName' => [
                            'type' => 'string',
                        ],
                        'ContactType' => [
                            'type' => 'string',
                        ],
                        'OrganizationName' => [
                            'type' => 'string',
                        ],
                        'AddressLine1' => [
                            'type' => 'string',
                        ],
                        'AddressLine2' => [
                            'type' => 'string',
                        ],
                        'City' => [
                            'type' => 'string',
                        ],
                        'State' => [
                            'type' => 'string',
                        ],
                        'CountryCode' => [
                            'type' => 'string',
                        ],
                        'ZipCode' => [
                            'type' => 'string',
                        ],
                        'PhoneNumber' => [
                            'type' => 'string',
                        ],
                        'Email' => [
                            'type' => 'string',
                        ],
                        'Fax' => [
                            'type' => 'string',
                        ],
                        'ExtraParams' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ExtraParam',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'Value' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'RegistrantContact' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'FirstName' => [
                            'type' => 'string',
                        ],
                        'LastName' => [
                            'type' => 'string',
                        ],
                        'ContactType' => [
                            'type' => 'string',
                        ],
                        'OrganizationName' => [
                            'type' => 'string',
                        ],
                        'AddressLine1' => [
                            'type' => 'string',
                        ],
                        'AddressLine2' => [
                            'type' => 'string',
                        ],
                        'City' => [
                            'type' => 'string',
                        ],
                        'State' => [
                            'type' => 'string',
                        ],
                        'CountryCode' => [
                            'type' => 'string',
                        ],
                        'ZipCode' => [
                            'type' => 'string',
                        ],
                        'PhoneNumber' => [
                            'type' => 'string',
                        ],
                        'Email' => [
                            'type' => 'string',
                        ],
                        'Fax' => [
                            'type' => 'string',
                        ],
                        'ExtraParams' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ExtraParam',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'Value' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'TechContact' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'FirstName' => [
                            'type' => 'string',
                        ],
                        'LastName' => [
                            'type' => 'string',
                        ],
                        'ContactType' => [
                            'type' => 'string',
                        ],
                        'OrganizationName' => [
                            'type' => 'string',
                        ],
                        'AddressLine1' => [
                            'type' => 'string',
                        ],
                        'AddressLine2' => [
                            'type' => 'string',
                        ],
                        'City' => [
                            'type' => 'string',
                        ],
                        'State' => [
                            'type' => 'string',
                        ],
                        'CountryCode' => [
                            'type' => 'string',
                        ],
                        'ZipCode' => [
                            'type' => 'string',
                        ],
                        'PhoneNumber' => [
                            'type' => 'string',
                        ],
                        'Email' => [
                            'type' => 'string',
                        ],
                        'Fax' => [
                            'type' => 'string',
                        ],
                        'ExtraParams' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ExtraParam',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'Value' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'PrivacyProtectAdminContact' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'PrivacyProtectRegistrantContact' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'PrivacyProtectTechContact' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
                [
                    'reason' =>
                        'The request is already in progress for the domain.',
                    'class' => 'DuplicateRequestException',
                ],
                [
                    'reason' =>
                        'The top-level domain does not support this operation.',
                    'class' => 'TLDRulesViolationException',
                ],
                [
                    'reason' =>
                        'The number of domains has exceeded the allowed threshold for the account.',
                    'class' => 'DomainLimitExceededException',
                ],
                [
                    'reason' =>
                        'The number of operations or jobs running exceeded the allowed threshold for the account.',
                    'class' => 'OperationLimitExceededException',
                ],
            ],
        ],
        'RetrieveDomainAuthCode' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RetrieveDomainAuthCodeResponse',
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
                        'Route53Domains_v20140515.RetrieveDomainAuthCode',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
            ],
        ],
        'TransferDomain' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'TransferDomainResponse',
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
                    'default' => 'Route53Domains_v20140515.TransferDomain',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IdnLangCode' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DurationInYears' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 10,
                ],
                'Nameservers' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Nameserver',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'GlueIps' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'GlueIp',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'AuthCode' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AutoRenew' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'AdminContact' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'FirstName' => [
                            'type' => 'string',
                        ],
                        'LastName' => [
                            'type' => 'string',
                        ],
                        'ContactType' => [
                            'type' => 'string',
                        ],
                        'OrganizationName' => [
                            'type' => 'string',
                        ],
                        'AddressLine1' => [
                            'type' => 'string',
                        ],
                        'AddressLine2' => [
                            'type' => 'string',
                        ],
                        'City' => [
                            'type' => 'string',
                        ],
                        'State' => [
                            'type' => 'string',
                        ],
                        'CountryCode' => [
                            'type' => 'string',
                        ],
                        'ZipCode' => [
                            'type' => 'string',
                        ],
                        'PhoneNumber' => [
                            'type' => 'string',
                        ],
                        'Email' => [
                            'type' => 'string',
                        ],
                        'Fax' => [
                            'type' => 'string',
                        ],
                        'ExtraParams' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ExtraParam',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'Value' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'RegistrantContact' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'FirstName' => [
                            'type' => 'string',
                        ],
                        'LastName' => [
                            'type' => 'string',
                        ],
                        'ContactType' => [
                            'type' => 'string',
                        ],
                        'OrganizationName' => [
                            'type' => 'string',
                        ],
                        'AddressLine1' => [
                            'type' => 'string',
                        ],
                        'AddressLine2' => [
                            'type' => 'string',
                        ],
                        'City' => [
                            'type' => 'string',
                        ],
                        'State' => [
                            'type' => 'string',
                        ],
                        'CountryCode' => [
                            'type' => 'string',
                        ],
                        'ZipCode' => [
                            'type' => 'string',
                        ],
                        'PhoneNumber' => [
                            'type' => 'string',
                        ],
                        'Email' => [
                            'type' => 'string',
                        ],
                        'Fax' => [
                            'type' => 'string',
                        ],
                        'ExtraParams' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ExtraParam',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'Value' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'TechContact' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'FirstName' => [
                            'type' => 'string',
                        ],
                        'LastName' => [
                            'type' => 'string',
                        ],
                        'ContactType' => [
                            'type' => 'string',
                        ],
                        'OrganizationName' => [
                            'type' => 'string',
                        ],
                        'AddressLine1' => [
                            'type' => 'string',
                        ],
                        'AddressLine2' => [
                            'type' => 'string',
                        ],
                        'City' => [
                            'type' => 'string',
                        ],
                        'State' => [
                            'type' => 'string',
                        ],
                        'CountryCode' => [
                            'type' => 'string',
                        ],
                        'ZipCode' => [
                            'type' => 'string',
                        ],
                        'PhoneNumber' => [
                            'type' => 'string',
                        ],
                        'Email' => [
                            'type' => 'string',
                        ],
                        'Fax' => [
                            'type' => 'string',
                        ],
                        'ExtraParams' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ExtraParam',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'Value' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'PrivacyProtectAdminContact' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'PrivacyProtectRegistrantContact' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'PrivacyProtectTechContact' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
                [
                    'reason' =>
                        'The request is already in progress for the domain.',
                    'class' => 'DuplicateRequestException',
                ],
                [
                    'reason' =>
                        'The top-level domain does not support this operation.',
                    'class' => 'TLDRulesViolationException',
                ],
                [
                    'reason' =>
                        'The number of domains has exceeded the allowed threshold for the account.',
                    'class' => 'DomainLimitExceededException',
                ],
                [
                    'reason' =>
                        'The number of operations or jobs running exceeded the allowed threshold for the account.',
                    'class' => 'OperationLimitExceededException',
                ],
            ],
        ],
        'UpdateDomainContact' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateDomainContactResponse',
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
                    'default' => 'Route53Domains_v20140515.UpdateDomainContact',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AdminContact' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'FirstName' => [
                            'type' => 'string',
                        ],
                        'LastName' => [
                            'type' => 'string',
                        ],
                        'ContactType' => [
                            'type' => 'string',
                        ],
                        'OrganizationName' => [
                            'type' => 'string',
                        ],
                        'AddressLine1' => [
                            'type' => 'string',
                        ],
                        'AddressLine2' => [
                            'type' => 'string',
                        ],
                        'City' => [
                            'type' => 'string',
                        ],
                        'State' => [
                            'type' => 'string',
                        ],
                        'CountryCode' => [
                            'type' => 'string',
                        ],
                        'ZipCode' => [
                            'type' => 'string',
                        ],
                        'PhoneNumber' => [
                            'type' => 'string',
                        ],
                        'Email' => [
                            'type' => 'string',
                        ],
                        'Fax' => [
                            'type' => 'string',
                        ],
                        'ExtraParams' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ExtraParam',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'Value' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'RegistrantContact' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'FirstName' => [
                            'type' => 'string',
                        ],
                        'LastName' => [
                            'type' => 'string',
                        ],
                        'ContactType' => [
                            'type' => 'string',
                        ],
                        'OrganizationName' => [
                            'type' => 'string',
                        ],
                        'AddressLine1' => [
                            'type' => 'string',
                        ],
                        'AddressLine2' => [
                            'type' => 'string',
                        ],
                        'City' => [
                            'type' => 'string',
                        ],
                        'State' => [
                            'type' => 'string',
                        ],
                        'CountryCode' => [
                            'type' => 'string',
                        ],
                        'ZipCode' => [
                            'type' => 'string',
                        ],
                        'PhoneNumber' => [
                            'type' => 'string',
                        ],
                        'Email' => [
                            'type' => 'string',
                        ],
                        'Fax' => [
                            'type' => 'string',
                        ],
                        'ExtraParams' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ExtraParam',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'Value' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'TechContact' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'FirstName' => [
                            'type' => 'string',
                        ],
                        'LastName' => [
                            'type' => 'string',
                        ],
                        'ContactType' => [
                            'type' => 'string',
                        ],
                        'OrganizationName' => [
                            'type' => 'string',
                        ],
                        'AddressLine1' => [
                            'type' => 'string',
                        ],
                        'AddressLine2' => [
                            'type' => 'string',
                        ],
                        'City' => [
                            'type' => 'string',
                        ],
                        'State' => [
                            'type' => 'string',
                        ],
                        'CountryCode' => [
                            'type' => 'string',
                        ],
                        'ZipCode' => [
                            'type' => 'string',
                        ],
                        'PhoneNumber' => [
                            'type' => 'string',
                        ],
                        'Email' => [
                            'type' => 'string',
                        ],
                        'Fax' => [
                            'type' => 'string',
                        ],
                        'ExtraParams' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ExtraParam',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'Value' => [
                                        'required' => true,
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
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request is already in progress for the domain.',
                    'class' => 'DuplicateRequestException',
                ],
                [
                    'reason' =>
                        'The top-level domain does not support this operation.',
                    'class' => 'TLDRulesViolationException',
                ],
                [
                    'reason' =>
                        'The number of operations or jobs running exceeded the allowed threshold for the account.',
                    'class' => 'OperationLimitExceededException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
            ],
        ],
        'UpdateDomainContactPrivacy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateDomainContactPrivacyResponse',
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
                        'Route53Domains_v20140515.UpdateDomainContactPrivacy',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AdminPrivacy' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'RegistrantPrivacy' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'TechPrivacy' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request is already in progress for the domain.',
                    'class' => 'DuplicateRequestException',
                ],
                [
                    'reason' =>
                        'The top-level domain does not support this operation.',
                    'class' => 'TLDRulesViolationException',
                ],
                [
                    'reason' =>
                        'The number of operations or jobs running exceeded the allowed threshold for the account.',
                    'class' => 'OperationLimitExceededException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
            ],
        ],
        'UpdateDomainNameservers' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateDomainNameserversResponse',
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
                        'Route53Domains_v20140515.UpdateDomainNameservers',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'FIAuthKey' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Nameservers' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Nameserver',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'GlueIps' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'GlueIp',
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
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request is already in progress for the domain.',
                    'class' => 'DuplicateRequestException',
                ],
                [
                    'reason' =>
                        'The top-level domain does not support this operation.',
                    'class' => 'TLDRulesViolationException',
                ],
                [
                    'reason' =>
                        'The number of operations or jobs running exceeded the allowed threshold for the account.',
                    'class' => 'OperationLimitExceededException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
            ],
        ],
        'UpdateTagsForDomain' => [
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
                    'default' => 'Route53Domains_v20140515.UpdateTagsForDomain',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'TagsToUpdate' => [
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
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The number of operations or jobs running exceeded the allowed threshold for the account.',
                    'class' => 'OperationLimitExceededException',
                ],
                [
                    'reason' =>
                        'Amazon Route 53 does not support this top-level domain.',
                    'class' => 'UnsupportedTLDException',
                ],
            ],
        ],
    ],
    'models' => [
        'CheckDomainAvailabilityResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Availability' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'DisableDomainTransferLockResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OperationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'EnableDomainTransferLockResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OperationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetDomainDetailResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DomainName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Nameservers' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Nameserver',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'GlueIps' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'GlueIp',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'AutoRenew' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'AdminContact' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'FirstName' => [
                            'type' => 'string',
                        ],
                        'LastName' => [
                            'type' => 'string',
                        ],
                        'ContactType' => [
                            'type' => 'string',
                        ],
                        'OrganizationName' => [
                            'type' => 'string',
                        ],
                        'AddressLine1' => [
                            'type' => 'string',
                        ],
                        'AddressLine2' => [
                            'type' => 'string',
                        ],
                        'City' => [
                            'type' => 'string',
                        ],
                        'State' => [
                            'type' => 'string',
                        ],
                        'CountryCode' => [
                            'type' => 'string',
                        ],
                        'ZipCode' => [
                            'type' => 'string',
                        ],
                        'PhoneNumber' => [
                            'type' => 'string',
                        ],
                        'Email' => [
                            'type' => 'string',
                        ],
                        'Fax' => [
                            'type' => 'string',
                        ],
                        'ExtraParams' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ExtraParam',
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
                'RegistrantContact' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'FirstName' => [
                            'type' => 'string',
                        ],
                        'LastName' => [
                            'type' => 'string',
                        ],
                        'ContactType' => [
                            'type' => 'string',
                        ],
                        'OrganizationName' => [
                            'type' => 'string',
                        ],
                        'AddressLine1' => [
                            'type' => 'string',
                        ],
                        'AddressLine2' => [
                            'type' => 'string',
                        ],
                        'City' => [
                            'type' => 'string',
                        ],
                        'State' => [
                            'type' => 'string',
                        ],
                        'CountryCode' => [
                            'type' => 'string',
                        ],
                        'ZipCode' => [
                            'type' => 'string',
                        ],
                        'PhoneNumber' => [
                            'type' => 'string',
                        ],
                        'Email' => [
                            'type' => 'string',
                        ],
                        'Fax' => [
                            'type' => 'string',
                        ],
                        'ExtraParams' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ExtraParam',
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
                'TechContact' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'FirstName' => [
                            'type' => 'string',
                        ],
                        'LastName' => [
                            'type' => 'string',
                        ],
                        'ContactType' => [
                            'type' => 'string',
                        ],
                        'OrganizationName' => [
                            'type' => 'string',
                        ],
                        'AddressLine1' => [
                            'type' => 'string',
                        ],
                        'AddressLine2' => [
                            'type' => 'string',
                        ],
                        'City' => [
                            'type' => 'string',
                        ],
                        'State' => [
                            'type' => 'string',
                        ],
                        'CountryCode' => [
                            'type' => 'string',
                        ],
                        'ZipCode' => [
                            'type' => 'string',
                        ],
                        'PhoneNumber' => [
                            'type' => 'string',
                        ],
                        'Email' => [
                            'type' => 'string',
                        ],
                        'Fax' => [
                            'type' => 'string',
                        ],
                        'ExtraParams' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ExtraParam',
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
                'AdminPrivacy' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'RegistrantPrivacy' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'TechPrivacy' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'RegistrarName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'WhoIsServer' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RegistrarUrl' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AbuseContactEmail' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AbuseContactPhone' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RegistryDomainId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreationDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'UpdatedDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ExpirationDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Reseller' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DnsSec' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StatusList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DomainStatus',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'GetOperationDetailResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OperationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Message' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DomainName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Type' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SubmittedDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListDomainsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Domains' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DomainSummary',
                        'type' => 'object',
                        'properties' => [
                            'DomainName' => [
                                'type' => 'string',
                            ],
                            'AutoRenew' => [
                                'type' => 'boolean',
                            ],
                            'TransferLock' => [
                                'type' => 'boolean',
                            ],
                            'Expiry' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextPageMarker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListOperationsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Operations' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'OperationSummary',
                        'type' => 'object',
                        'properties' => [
                            'OperationId' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'Type' => [
                                'type' => 'string',
                            ],
                            'SubmittedDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextPageMarker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListTagsForDomainResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TagList' => [
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
            ],
        ],
        'RegisterDomainResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OperationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'RetrieveDomainAuthCodeResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AuthCode' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'TransferDomainResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OperationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'UpdateDomainContactResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OperationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'UpdateDomainContactPrivacyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OperationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'UpdateDomainNameserversResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OperationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListDomains' => [
            'limit_key' => 'MaxItems',
            'input_token' => 'Marker',
            'output_token' => 'NextPageMarker',
            'result_key' => 'Domains',
        ],
        'ListOperations' => [
            'limit_key' => 'MaxItems',
            'input_token' => 'Marker',
            'output_token' => 'NextPageMarker',
            'result_key' => 'Operations',
        ],
    ],
];
