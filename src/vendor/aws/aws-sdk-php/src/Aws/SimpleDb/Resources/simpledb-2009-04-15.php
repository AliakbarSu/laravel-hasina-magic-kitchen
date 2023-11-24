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
    'apiVersion' => '2009-04-15',
    'endpointPrefix' => 'sdb',
    'serviceFullName' => 'Amazon SimpleDB',
    'serviceType' => 'query',
    'resultWrapped' => true,
    'signatureVersion' => 'v2',
    'namespace' => 'SimpleDb',
    'regions' => [
        'us-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sdb.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sdb.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sdb.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sdb.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sdb.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sdb.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sdb.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sdb.sa-east-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'BatchDeleteAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'BatchDeleteAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2009-04-15',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Items' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Item',
                    'items' => [
                        'name' => 'Item',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                                'sentAs' => 'ItemName',
                            ],
                            'Attributes' => [
                                'type' => 'array',
                                'sentAs' => 'Attribute',
                                'items' => [
                                    'name' => 'Attribute',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                        'AlternateNameEncoding' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                        ],
                                        'AlternateValueEncoding' => [
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
        'BatchPutAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'BatchPutAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2009-04-15',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Items' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Item',
                    'items' => [
                        'name' => 'Item',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                                'sentAs' => 'ItemName',
                            ],
                            'Attributes' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Attribute',
                                'items' => [
                                    'name' => 'Attribute',
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
                                        'Replace' => [
                                            'type' => 'boolean',
                                            'format' => 'boolean-string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The item name was specified more than once.',
                    'class' => 'DuplicateItemNameException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'The request must contain the specified missing parameter.',
                    'class' => 'MissingParameterException',
                ],
                [
                    'reason' => 'The specified domain does not exist.',
                    'class' => 'NoSuchDomainException',
                ],
                [
                    'reason' => 'Too many attributes in this item.',
                    'class' => 'NumberItemAttributesExceededException',
                ],
                [
                    'reason' => 'Too many attributes in this domain.',
                    'class' => 'NumberDomainAttributesExceededException',
                ],
                [
                    'reason' => 'Too many bytes in this domain.',
                    'class' => 'NumberDomainBytesExceededException',
                ],
                [
                    'reason' => 'Too many items exist in a single call.',
                    'class' => 'NumberSubmittedItemsExceededException',
                ],
                [
                    'reason' => 'Too many attributes exist in a single call.',
                    'class' => 'NumberSubmittedAttributesExceededException',
                ],
            ],
        ],
        'CreateDomain' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateDomain',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2009-04-15',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'The request must contain the specified missing parameter.',
                    'class' => 'MissingParameterException',
                ],
                [
                    'reason' => 'Too many domains exist per this account.',
                    'class' => 'NumberDomainsExceededException',
                ],
            ],
        ],
        'DeleteAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2009-04-15',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ItemName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attributes' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Attribute',
                    'items' => [
                        'name' => 'Attribute',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'AlternateNameEncoding' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'AlternateValueEncoding' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Expected' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Value' => [
                            'type' => 'string',
                        ],
                        'Exists' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'The request must contain the specified missing parameter.',
                    'class' => 'MissingParameterException',
                ],
                [
                    'reason' => 'The specified domain does not exist.',
                    'class' => 'NoSuchDomainException',
                ],
                [
                    'reason' => 'The specified attribute does not exist.',
                    'class' => 'AttributeDoesNotExistException',
                ],
            ],
        ],
        'DeleteDomain' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteDomain',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2009-04-15',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request must contain the specified missing parameter.',
                    'class' => 'MissingParameterException',
                ],
            ],
        ],
        'DomainMetadata' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DomainMetadataResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DomainMetadata',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2009-04-15',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request must contain the specified missing parameter.',
                    'class' => 'MissingParameterException',
                ],
                [
                    'reason' => 'The specified domain does not exist.',
                    'class' => 'NoSuchDomainException',
                ],
            ],
        ],
        'GetAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetAttributesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2009-04-15',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ItemName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AttributeNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AttributeName',
                    'items' => [
                        'name' => 'AttributeName',
                        'type' => 'string',
                    ],
                ],
                'ConsistentRead' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'The request must contain the specified missing parameter.',
                    'class' => 'MissingParameterException',
                ],
                [
                    'reason' => 'The specified domain does not exist.',
                    'class' => 'NoSuchDomainException',
                ],
            ],
        ],
        'ListDomains' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListDomainsResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListDomains',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2009-04-15',
                ],
                'MaxNumberOfDomains' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' => 'The specified NextToken is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'PutAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PutAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2009-04-15',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ItemName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attributes' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Attribute',
                    'items' => [
                        'name' => 'Attribute',
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
                            'Replace' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
                'Expected' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Value' => [
                            'type' => 'string',
                        ],
                        'Exists' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'The request must contain the specified missing parameter.',
                    'class' => 'MissingParameterException',
                ],
                [
                    'reason' => 'The specified domain does not exist.',
                    'class' => 'NoSuchDomainException',
                ],
                [
                    'reason' => 'Too many attributes in this domain.',
                    'class' => 'NumberDomainAttributesExceededException',
                ],
                [
                    'reason' => 'Too many bytes in this domain.',
                    'class' => 'NumberDomainBytesExceededException',
                ],
                [
                    'reason' => 'Too many attributes in this item.',
                    'class' => 'NumberItemAttributesExceededException',
                ],
                [
                    'reason' => 'The specified attribute does not exist.',
                    'class' => 'AttributeDoesNotExistException',
                ],
            ],
        ],
        'Select' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SelectResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'Select',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2009-04-15',
                ],
                'SelectExpression' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ConsistentRead' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' => 'The specified NextToken is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' =>
                        'Too many predicates exist in the query expression.',
                    'class' => 'InvalidNumberPredicatesException',
                ],
                [
                    'reason' =>
                        'Too many predicates exist in the query expression.',
                    'class' => 'InvalidNumberValueTestsException',
                ],
                [
                    'reason' =>
                        'The specified query expression syntax is not valid.',
                    'class' => 'InvalidQueryExpressionException',
                ],
                [
                    'reason' =>
                        'The request must contain the specified missing parameter.',
                    'class' => 'MissingParameterException',
                ],
                [
                    'reason' => 'The specified domain does not exist.',
                    'class' => 'NoSuchDomainException',
                ],
                [
                    'reason' =>
                        'A timeout occurred when attempting to query the specified domain with specified query expression.',
                    'class' => 'RequestTimeoutException',
                ],
                [
                    'reason' => 'Too many attributes requested.',
                    'class' => 'TooManyRequestedAttributesException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'DomainMetadataResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ItemCount' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'ItemNamesSizeBytes' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'AttributeNameCount' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'AttributeNamesSizeBytes' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'AttributeValueCount' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'AttributeValuesSizeBytes' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'Timestamp' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetAttributesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Attributes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'Attribute',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'Attribute',
                        'type' => 'object',
                        'sentAs' => 'Attribute',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'AlternateNameEncoding' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'AlternateValueEncoding' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDomainsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DomainNames' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'DomainName',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'DomainName',
                        'type' => 'string',
                        'sentAs' => 'DomainName',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'SelectResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Items' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'Item',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'Item',
                        'type' => 'object',
                        'sentAs' => 'Item',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'AlternateNameEncoding' => [
                                'type' => 'string',
                            ],
                            'Attributes' => [
                                'type' => 'array',
                                'sentAs' => 'Attribute',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'Attribute',
                                    'type' => 'object',
                                    'sentAs' => 'Attribute',
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                        ],
                                        'AlternateNameEncoding' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                        ],
                                        'AlternateValueEncoding' => [
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
        'ListDomains' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxNumberOfDomains',
            'result_key' => 'DomainNames',
        ],
        'Select' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'Items',
        ],
    ],
];
