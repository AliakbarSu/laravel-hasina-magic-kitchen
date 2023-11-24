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
    'apiVersion' => '2011-02-01',
    'endpointPrefix' => 'cloudsearch',
    'serviceFullName' => 'Amazon CloudSearch',
    'serviceType' => 'query',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'CloudSearch',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudsearch.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudsearch.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudsearch.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudsearch.eu-west-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudsearch.ap-southeast-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'CreateDomain' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateDomainResponse',
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
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a resource limit has already been met.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'DefineIndexField' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DefineIndexFieldResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DefineIndexField',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'IndexField' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'IndexFieldName' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'IndexFieldType' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'UIntOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'DefaultValue' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'LiteralOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'DefaultValue' => [
                                    'type' => 'string',
                                ],
                                'SearchEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'FacetEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'ResultEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                        'TextOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'DefaultValue' => [
                                    'type' => 'string',
                                ],
                                'FacetEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'ResultEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'TextProcessor' => [
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                            ],
                        ],
                        'SourceAttributes' => [
                            'type' => 'array',
                            'sentAs' => 'SourceAttributes.member',
                            'items' => [
                                'name' => 'SourceAttribute',
                                'type' => 'object',
                                'properties' => [
                                    'SourceDataFunction' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'SourceDataCopy' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'SourceName' => [
                                                'required' => true,
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                            'DefaultValue' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'SourceDataTrimTitle' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'SourceName' => [
                                                'required' => true,
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                            'DefaultValue' => [
                                                'type' => 'string',
                                            ],
                                            'Separator' => [
                                                'type' => 'string',
                                            ],
                                            'Language' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'SourceDataMap' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'SourceName' => [
                                                'required' => true,
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                            'DefaultValue' => [
                                                'type' => 'string',
                                            ],
                                            'Cases' => [
                                                'type' => 'object',
                                                'sentAs' => 'Cases.entry',
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                    'data' => [
                                                        'shape_name' =>
                                                            'FieldValue',
                                                    ],
                                                ],
                                            ],
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
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a resource limit has already been met.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it specified an invalid type definition.',
                    'class' => 'InvalidTypeException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DefineRankExpression' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DefineRankExpressionResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DefineRankExpression',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'RankExpression' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'RankName' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'RankExpression' => [
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
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a resource limit has already been met.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it specified an invalid type definition.',
                    'class' => 'InvalidTypeException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DeleteDomain' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DeleteDomainResponse',
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
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
            ],
        ],
        'DeleteIndexField' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DeleteIndexFieldResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteIndexField',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'IndexFieldName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it specified an invalid type definition.',
                    'class' => 'InvalidTypeException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DeleteRankExpression' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DeleteRankExpressionResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteRankExpression',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'RankName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it specified an invalid type definition.',
                    'class' => 'InvalidTypeException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeDefaultSearchField' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeDefaultSearchFieldResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDefaultSearchField',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeDomains' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeDomainsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDomains',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'DomainNames.member',
                    'items' => [
                        'name' => 'DomainName',
                        'type' => 'string',
                        'minLength' => 3,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
            ],
        ],
        'DescribeIndexFields' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeIndexFieldsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeIndexFields',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'FieldNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'FieldNames.member',
                    'items' => [
                        'name' => 'FieldName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeRankExpressions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeRankExpressionsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeRankExpressions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'RankNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'RankNames.member',
                    'items' => [
                        'name' => 'FieldName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeServiceAccessPolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeServiceAccessPoliciesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeServiceAccessPolicies',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeStemmingOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeStemmingOptionsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeStemmingOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeStopwordOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeStopwordOptionsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeStopwordOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeSynonymOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeSynonymOptionsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSynonymOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'IndexDocuments' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'IndexDocumentsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'IndexDocuments',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UpdateDefaultSearchField' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UpdateDefaultSearchFieldResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateDefaultSearchField',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'DefaultSearchField' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it specified an invalid type definition.',
                    'class' => 'InvalidTypeException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UpdateServiceAccessPolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UpdateServiceAccessPoliciesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateServiceAccessPolicies',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'AccessPolicies' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a resource limit has already been met.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it specified an invalid type definition.',
                    'class' => 'InvalidTypeException',
                ],
            ],
        ],
        'UpdateStemmingOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UpdateStemmingOptionsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateStemmingOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'Stems' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it specified an invalid type definition.',
                    'class' => 'InvalidTypeException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a resource limit has already been met.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UpdateStopwordOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UpdateStopwordOptionsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateStopwordOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'Stopwords' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it specified an invalid type definition.',
                    'class' => 'InvalidTypeException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a resource limit has already been met.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'UpdateSynonymOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UpdateSynonymOptionsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateSynonymOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-02-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'Synonyms' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
                [
                    'reason' =>
                        'An internal error occurred while processing the request. If this problem persists, report an issue from the Service Health Dashboard.',
                    'class' => 'InternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it specified an invalid type definition.',
                    'class' => 'InvalidTypeException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a resource limit has already been met.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
    ],
    'models' => [
        'CreateDomainResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DomainStatus' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DomainId' => [
                            'type' => 'string',
                        ],
                        'DomainName' => [
                            'type' => 'string',
                        ],
                        'Created' => [
                            'type' => 'boolean',
                        ],
                        'Deleted' => [
                            'type' => 'boolean',
                        ],
                        'NumSearchableDocs' => [
                            'type' => 'numeric',
                        ],
                        'DocService' => [
                            'type' => 'object',
                            'properties' => [
                                'Arn' => [
                                    'type' => 'string',
                                ],
                                'Endpoint' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'SearchService' => [
                            'type' => 'object',
                            'properties' => [
                                'Arn' => [
                                    'type' => 'string',
                                ],
                                'Endpoint' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'RequiresIndexDocuments' => [
                            'type' => 'boolean',
                        ],
                        'Processing' => [
                            'type' => 'boolean',
                        ],
                        'SearchInstanceType' => [
                            'type' => 'string',
                        ],
                        'SearchPartitionCount' => [
                            'type' => 'numeric',
                        ],
                        'SearchInstanceCount' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'DefineIndexFieldResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IndexField' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'object',
                            'properties' => [
                                'IndexFieldName' => [
                                    'type' => 'string',
                                ],
                                'IndexFieldType' => [
                                    'type' => 'string',
                                ],
                                'UIntOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'numeric',
                                        ],
                                    ],
                                ],
                                'LiteralOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ResultEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'TextOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ResultEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'TextProcessor' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'SourceAttributes' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'SourceAttribute',
                                        'type' => 'object',
                                        'sentAs' => 'member',
                                        'properties' => [
                                            'SourceDataFunction' => [
                                                'type' => 'string',
                                            ],
                                            'SourceDataCopy' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'SourceName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'DefaultValue' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'SourceDataTrimTitle' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'SourceName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'DefaultValue' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Separator' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Language' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'SourceDataMap' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'SourceName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'DefaultValue' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Cases' => [
                                                        'type' => 'array',
                                                        'filters' => [
                                                            [
                                                                'method' =>
                                                                    'Aws\\Common\\Command\\XmlResponseLocationVisitor::xmlMap',
                                                                'args' => [
                                                                    '@value',
                                                                    'entry',
                                                                    'key',
                                                                    'value',
                                                                ],
                                                            ],
                                                        ],
                                                        'items' => [
                                                            'name' => 'entry',
                                                            'type' => 'object',
                                                            'sentAs' => 'entry',
                                                            'additionalProperties' => true,
                                                            'properties' => [
                                                                'key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'value' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                        'additionalProperties' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DefineRankExpressionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RankExpression' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'object',
                            'properties' => [
                                'RankName' => [
                                    'type' => 'string',
                                ],
                                'RankExpression' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteDomainResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DomainStatus' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DomainId' => [
                            'type' => 'string',
                        ],
                        'DomainName' => [
                            'type' => 'string',
                        ],
                        'Created' => [
                            'type' => 'boolean',
                        ],
                        'Deleted' => [
                            'type' => 'boolean',
                        ],
                        'NumSearchableDocs' => [
                            'type' => 'numeric',
                        ],
                        'DocService' => [
                            'type' => 'object',
                            'properties' => [
                                'Arn' => [
                                    'type' => 'string',
                                ],
                                'Endpoint' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'SearchService' => [
                            'type' => 'object',
                            'properties' => [
                                'Arn' => [
                                    'type' => 'string',
                                ],
                                'Endpoint' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'RequiresIndexDocuments' => [
                            'type' => 'boolean',
                        ],
                        'Processing' => [
                            'type' => 'boolean',
                        ],
                        'SearchInstanceType' => [
                            'type' => 'string',
                        ],
                        'SearchPartitionCount' => [
                            'type' => 'numeric',
                        ],
                        'SearchInstanceCount' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'DeleteIndexFieldResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IndexField' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'object',
                            'properties' => [
                                'IndexFieldName' => [
                                    'type' => 'string',
                                ],
                                'IndexFieldType' => [
                                    'type' => 'string',
                                ],
                                'UIntOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'numeric',
                                        ],
                                    ],
                                ],
                                'LiteralOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ResultEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'TextOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ResultEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'TextProcessor' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'SourceAttributes' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'SourceAttribute',
                                        'type' => 'object',
                                        'sentAs' => 'member',
                                        'properties' => [
                                            'SourceDataFunction' => [
                                                'type' => 'string',
                                            ],
                                            'SourceDataCopy' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'SourceName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'DefaultValue' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'SourceDataTrimTitle' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'SourceName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'DefaultValue' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Separator' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Language' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'SourceDataMap' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'SourceName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'DefaultValue' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Cases' => [
                                                        'type' => 'array',
                                                        'filters' => [
                                                            [
                                                                'method' =>
                                                                    'Aws\\Common\\Command\\XmlResponseLocationVisitor::xmlMap',
                                                                'args' => [
                                                                    '@value',
                                                                    'entry',
                                                                    'key',
                                                                    'value',
                                                                ],
                                                            ],
                                                        ],
                                                        'items' => [
                                                            'name' => 'entry',
                                                            'type' => 'object',
                                                            'sentAs' => 'entry',
                                                            'additionalProperties' => true,
                                                            'properties' => [
                                                                'key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'value' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                        'additionalProperties' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteRankExpressionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RankExpression' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'object',
                            'properties' => [
                                'RankName' => [
                                    'type' => 'string',
                                ],
                                'RankExpression' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeDefaultSearchFieldResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DefaultSearchField' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeDomainsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DomainStatusList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DomainStatus',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'DomainId' => [
                                'type' => 'string',
                            ],
                            'DomainName' => [
                                'type' => 'string',
                            ],
                            'Created' => [
                                'type' => 'boolean',
                            ],
                            'Deleted' => [
                                'type' => 'boolean',
                            ],
                            'NumSearchableDocs' => [
                                'type' => 'numeric',
                            ],
                            'DocService' => [
                                'type' => 'object',
                                'properties' => [
                                    'Arn' => [
                                        'type' => 'string',
                                    ],
                                    'Endpoint' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'SearchService' => [
                                'type' => 'object',
                                'properties' => [
                                    'Arn' => [
                                        'type' => 'string',
                                    ],
                                    'Endpoint' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'RequiresIndexDocuments' => [
                                'type' => 'boolean',
                            ],
                            'Processing' => [
                                'type' => 'boolean',
                            ],
                            'SearchInstanceType' => [
                                'type' => 'string',
                            ],
                            'SearchPartitionCount' => [
                                'type' => 'numeric',
                            ],
                            'SearchInstanceCount' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeIndexFieldsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IndexFields' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'IndexFieldStatus',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Options' => [
                                'type' => 'object',
                                'properties' => [
                                    'IndexFieldName' => [
                                        'type' => 'string',
                                    ],
                                    'IndexFieldType' => [
                                        'type' => 'string',
                                    ],
                                    'UIntOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DefaultValue' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                    'LiteralOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DefaultValue' => [
                                                'type' => 'string',
                                            ],
                                            'SearchEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'FacetEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'ResultEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'TextOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DefaultValue' => [
                                                'type' => 'string',
                                            ],
                                            'FacetEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'ResultEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'TextProcessor' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'SourceAttributes' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'SourceAttribute',
                                            'type' => 'object',
                                            'sentAs' => 'member',
                                            'properties' => [
                                                'SourceDataFunction' => [
                                                    'type' => 'string',
                                                ],
                                                'SourceDataCopy' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'SourceName' => [
                                                            'type' => 'string',
                                                        ],
                                                        'DefaultValue' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                                'SourceDataTrimTitle' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'SourceName' => [
                                                            'type' => 'string',
                                                        ],
                                                        'DefaultValue' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Separator' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Language' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                                'SourceDataMap' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'SourceName' => [
                                                            'type' => 'string',
                                                        ],
                                                        'DefaultValue' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Cases' => [
                                                            'type' => 'array',
                                                            'filters' => [
                                                                [
                                                                    'method' =>
                                                                        'Aws\\Common\\Command\\XmlResponseLocationVisitor::xmlMap',
                                                                    'args' => [
                                                                        '@value',
                                                                        'entry',
                                                                        'key',
                                                                        'value',
                                                                    ],
                                                                ],
                                                            ],
                                                            'items' => [
                                                                'name' =>
                                                                    'entry',
                                                                'type' =>
                                                                    'object',
                                                                'sentAs' =>
                                                                    'entry',
                                                                'additionalProperties' => true,
                                                                'properties' => [
                                                                    'key' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'value' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                ],
                                                            ],
                                                            'additionalProperties' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Status' => [
                                'type' => 'object',
                                'properties' => [
                                    'CreationDate' => [
                                        'type' => 'string',
                                    ],
                                    'UpdateDate' => [
                                        'type' => 'string',
                                    ],
                                    'UpdateVersion' => [
                                        'type' => 'numeric',
                                    ],
                                    'State' => [
                                        'type' => 'string',
                                    ],
                                    'PendingDeletion' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeRankExpressionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RankExpressions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'RankExpressionStatus',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Options' => [
                                'type' => 'object',
                                'properties' => [
                                    'RankName' => [
                                        'type' => 'string',
                                    ],
                                    'RankExpression' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Status' => [
                                'type' => 'object',
                                'properties' => [
                                    'CreationDate' => [
                                        'type' => 'string',
                                    ],
                                    'UpdateDate' => [
                                        'type' => 'string',
                                    ],
                                    'UpdateVersion' => [
                                        'type' => 'numeric',
                                    ],
                                    'State' => [
                                        'type' => 'string',
                                    ],
                                    'PendingDeletion' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeServiceAccessPoliciesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AccessPolicies' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeStemmingOptionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Stems' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeStopwordOptionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Stopwords' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeSynonymOptionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Synonyms' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'IndexDocumentsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'FieldNames' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'FieldName',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
            ],
        ],
        'UpdateDefaultSearchFieldResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DefaultSearchField' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateServiceAccessPoliciesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AccessPolicies' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateStemmingOptionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Stems' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateStopwordOptionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Stopwords' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateSynonymOptionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Synonyms' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'CreationDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateDate' => [
                                    'type' => 'string',
                                ],
                                'UpdateVersion' => [
                                    'type' => 'numeric',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'PendingDeletion' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'iterators' => [
        'DescribeDomains' => [
            'result_key' => 'DomainStatusList',
        ],
        'DescribeIndexFields' => [
            'result_key' => 'IndexFields',
        ],
        'DescribeRankExpressions' => [
            'result_key' => 'RankExpressions',
        ],
    ],
];
