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
    'apiVersion' => '2013-01-01',
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
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudsearch.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudsearch.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudsearch.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudsearch.sa-east-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'BuildSuggesters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'BuildSuggestersResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'BuildSuggesters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
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
                    'default' => '2013-01-01',
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
        'DefineAnalysisScheme' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DefineAnalysisSchemeResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DefineAnalysisScheme',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'AnalysisScheme' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'AnalysisSchemeName' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'AnalysisSchemeLanguage' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'AnalysisOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'Synonyms' => [
                                    'type' => 'string',
                                ],
                                'Stopwords' => [
                                    'type' => 'string',
                                ],
                                'StemmingDictionary' => [
                                    'type' => 'string',
                                ],
                                'JapaneseTokenizationDictionary' => [
                                    'type' => 'string',
                                ],
                                'AlgorithmicStemming' => [
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
        'DefineExpression' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DefineExpressionResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DefineExpression',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'Expression' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'ExpressionName' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'ExpressionValue' => [
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
                    'default' => '2013-01-01',
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
                        'IntOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'DefaultValue' => [
                                    'type' => 'numeric',
                                ],
                                'SourceField' => [
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'FacetEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SearchEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'ReturnEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SortEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                        'DoubleOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'DefaultValue' => [
                                    'type' => 'numeric',
                                ],
                                'SourceField' => [
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'FacetEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SearchEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'ReturnEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SortEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                        'LiteralOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'DefaultValue' => [
                                    'type' => 'string',
                                ],
                                'SourceField' => [
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'FacetEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SearchEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'ReturnEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SortEnabled' => [
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
                                'SourceField' => [
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'ReturnEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SortEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'HighlightEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'AnalysisScheme' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'DateOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'DefaultValue' => [
                                    'type' => 'string',
                                ],
                                'SourceField' => [
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'FacetEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SearchEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'ReturnEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SortEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                        'LatLonOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'DefaultValue' => [
                                    'type' => 'string',
                                ],
                                'SourceField' => [
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'FacetEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SearchEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'ReturnEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SortEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                        'IntArrayOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'DefaultValue' => [
                                    'type' => 'numeric',
                                ],
                                'SourceFields' => [
                                    'type' => 'string',
                                ],
                                'FacetEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SearchEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'ReturnEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                        'DoubleArrayOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'DefaultValue' => [
                                    'type' => 'numeric',
                                ],
                                'SourceFields' => [
                                    'type' => 'string',
                                ],
                                'FacetEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SearchEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'ReturnEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                        'LiteralArrayOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'DefaultValue' => [
                                    'type' => 'string',
                                ],
                                'SourceFields' => [
                                    'type' => 'string',
                                ],
                                'FacetEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SearchEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'ReturnEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                        'TextArrayOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'DefaultValue' => [
                                    'type' => 'string',
                                ],
                                'SourceFields' => [
                                    'type' => 'string',
                                ],
                                'ReturnEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'HighlightEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'AnalysisScheme' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'DateArrayOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'DefaultValue' => [
                                    'type' => 'string',
                                ],
                                'SourceFields' => [
                                    'type' => 'string',
                                ],
                                'FacetEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'SearchEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'ReturnEnabled' => [
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
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
        'DefineSuggester' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DefineSuggesterResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DefineSuggester',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'Suggester' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'SuggesterName' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'DocumentSuggesterOptions' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'SourceField' => [
                                    'required' => true,
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'FuzzyMatching' => [
                                    'type' => 'string',
                                ],
                                'SortExpression' => [
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
        'DeleteAnalysisScheme' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DeleteAnalysisSchemeResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteAnalysisScheme',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'AnalysisSchemeName' => [
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
                    'default' => '2013-01-01',
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
        'DeleteExpression' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DeleteExpressionResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteExpression',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'ExpressionName' => [
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
                    'default' => '2013-01-01',
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
        'DeleteSuggester' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DeleteSuggesterResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteSuggester',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'SuggesterName' => [
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
        'DescribeAnalysisSchemes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeAnalysisSchemesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeAnalysisSchemes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'AnalysisSchemeNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AnalysisSchemeNames.member',
                    'items' => [
                        'name' => 'StandardName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'Deployed' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
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
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeAvailabilityOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeAvailabilityOptionsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeAvailabilityOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'Deployed' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
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
                [
                    'reason' =>
                        'The request was rejected because it attempted an operation which is not enabled.',
                    'class' => 'DisabledOperationException',
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
                    'default' => '2013-01-01',
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
        'DescribeExpressions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeExpressionsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeExpressions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'ExpressionNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ExpressionNames.member',
                    'items' => [
                        'name' => 'StandardName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'Deployed' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
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
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
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
                    'default' => '2013-01-01',
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
                        'name' => 'DynamicFieldName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'Deployed' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
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
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeScalingParameters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeScalingParametersResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeScalingParameters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
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
                    'default' => '2013-01-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'Deployed' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
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
                        'The request was rejected because it attempted to reference a resource that does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeSuggesters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeSuggestersResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSuggesters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'SuggesterNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SuggesterNames.member',
                    'items' => [
                        'name' => 'StandardName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'Deployed' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
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
                    'default' => '2013-01-01',
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
        'ListDomainNames' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListDomainNamesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListDomainNames',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An error occurred while processing the request.',
                    'class' => 'BaseException',
                ],
            ],
        ],
        'UpdateAvailabilityOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UpdateAvailabilityOptionsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateAvailabilityOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'MultiAZ' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
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
                [
                    'reason' =>
                        'The request was rejected because it attempted an operation which is not enabled.',
                    'class' => 'DisabledOperationException',
                ],
            ],
        ],
        'UpdateScalingParameters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UpdateScalingParametersResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateScalingParameters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2013-01-01',
                ],
                'DomainName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
                'ScalingParameters' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'DesiredInstanceType' => [
                            'type' => 'string',
                        ],
                        'DesiredReplicationCount' => [
                            'type' => 'numeric',
                        ],
                        'DesiredPartitionCount' => [
                            'type' => 'numeric',
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
                    'default' => '2013-01-01',
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
    ],
    'models' => [
        'BuildSuggestersResponse' => [
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
                        'ARN' => [
                            'type' => 'string',
                        ],
                        'Created' => [
                            'type' => 'boolean',
                        ],
                        'Deleted' => [
                            'type' => 'boolean',
                        ],
                        'DocService' => [
                            'type' => 'object',
                            'properties' => [
                                'Endpoint' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'SearchService' => [
                            'type' => 'object',
                            'properties' => [
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
                        'Limits' => [
                            'type' => 'object',
                            'properties' => [
                                'MaximumReplicationCount' => [
                                    'type' => 'numeric',
                                ],
                                'MaximumPartitionCount' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DefineAnalysisSchemeResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AnalysisScheme' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'object',
                            'properties' => [
                                'AnalysisSchemeName' => [
                                    'type' => 'string',
                                ],
                                'AnalysisSchemeLanguage' => [
                                    'type' => 'string',
                                ],
                                'AnalysisOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Synonyms' => [
                                            'type' => 'string',
                                        ],
                                        'Stopwords' => [
                                            'type' => 'string',
                                        ],
                                        'StemmingDictionary' => [
                                            'type' => 'string',
                                        ],
                                        'JapaneseTokenizationDictionary' => [
                                            'type' => 'string',
                                        ],
                                        'AlgorithmicStemming' => [
                                            'type' => 'string',
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
        'DefineExpressionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Expression' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'object',
                            'properties' => [
                                'ExpressionName' => [
                                    'type' => 'string',
                                ],
                                'ExpressionValue' => [
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
                                'IntOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'numeric',
                                        ],
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SortEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'DoubleOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'numeric',
                                        ],
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SortEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'LiteralOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SortEnabled' => [
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
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SortEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'HighlightEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'AnalysisScheme' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'DateOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SortEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'LatLonOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SortEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'IntArrayOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'numeric',
                                        ],
                                        'SourceFields' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'DoubleArrayOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'numeric',
                                        ],
                                        'SourceFields' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'LiteralArrayOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SourceFields' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'TextArrayOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SourceFields' => [
                                            'type' => 'string',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'HighlightEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'AnalysisScheme' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'DateArrayOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SourceFields' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
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
        'DefineSuggesterResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Suggester' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'object',
                            'properties' => [
                                'SuggesterName' => [
                                    'type' => 'string',
                                ],
                                'DocumentSuggesterOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'FuzzyMatching' => [
                                            'type' => 'string',
                                        ],
                                        'SortExpression' => [
                                            'type' => 'string',
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
        'DeleteAnalysisSchemeResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AnalysisScheme' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'object',
                            'properties' => [
                                'AnalysisSchemeName' => [
                                    'type' => 'string',
                                ],
                                'AnalysisSchemeLanguage' => [
                                    'type' => 'string',
                                ],
                                'AnalysisOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Synonyms' => [
                                            'type' => 'string',
                                        ],
                                        'Stopwords' => [
                                            'type' => 'string',
                                        ],
                                        'StemmingDictionary' => [
                                            'type' => 'string',
                                        ],
                                        'JapaneseTokenizationDictionary' => [
                                            'type' => 'string',
                                        ],
                                        'AlgorithmicStemming' => [
                                            'type' => 'string',
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
                        'ARN' => [
                            'type' => 'string',
                        ],
                        'Created' => [
                            'type' => 'boolean',
                        ],
                        'Deleted' => [
                            'type' => 'boolean',
                        ],
                        'DocService' => [
                            'type' => 'object',
                            'properties' => [
                                'Endpoint' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'SearchService' => [
                            'type' => 'object',
                            'properties' => [
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
                        'Limits' => [
                            'type' => 'object',
                            'properties' => [
                                'MaximumReplicationCount' => [
                                    'type' => 'numeric',
                                ],
                                'MaximumPartitionCount' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteExpressionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Expression' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'object',
                            'properties' => [
                                'ExpressionName' => [
                                    'type' => 'string',
                                ],
                                'ExpressionValue' => [
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
                                'IntOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'numeric',
                                        ],
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SortEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'DoubleOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'numeric',
                                        ],
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SortEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'LiteralOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SortEnabled' => [
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
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SortEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'HighlightEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'AnalysisScheme' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'DateOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SortEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'LatLonOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SortEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'IntArrayOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'numeric',
                                        ],
                                        'SourceFields' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'DoubleArrayOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'numeric',
                                        ],
                                        'SourceFields' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'LiteralArrayOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SourceFields' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'TextArrayOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SourceFields' => [
                                            'type' => 'string',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'HighlightEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'AnalysisScheme' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'DateArrayOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'SourceFields' => [
                                            'type' => 'string',
                                        ],
                                        'FacetEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'SearchEnabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'ReturnEnabled' => [
                                            'type' => 'boolean',
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
        'DeleteSuggesterResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Suggester' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'object',
                            'properties' => [
                                'SuggesterName' => [
                                    'type' => 'string',
                                ],
                                'DocumentSuggesterOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'SourceField' => [
                                            'type' => 'string',
                                        ],
                                        'FuzzyMatching' => [
                                            'type' => 'string',
                                        ],
                                        'SortExpression' => [
                                            'type' => 'string',
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
        'DescribeAnalysisSchemesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AnalysisSchemes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'AnalysisSchemeStatus',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Options' => [
                                'type' => 'object',
                                'properties' => [
                                    'AnalysisSchemeName' => [
                                        'type' => 'string',
                                    ],
                                    'AnalysisSchemeLanguage' => [
                                        'type' => 'string',
                                    ],
                                    'AnalysisOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Synonyms' => [
                                                'type' => 'string',
                                            ],
                                            'Stopwords' => [
                                                'type' => 'string',
                                            ],
                                            'StemmingDictionary' => [
                                                'type' => 'string',
                                            ],
                                            'JapaneseTokenizationDictionary' => [
                                                'type' => 'string',
                                            ],
                                            'AlgorithmicStemming' => [
                                                'type' => 'string',
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
        'DescribeAvailabilityOptionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AvailabilityOptions' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'boolean',
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
                            'ARN' => [
                                'type' => 'string',
                            ],
                            'Created' => [
                                'type' => 'boolean',
                            ],
                            'Deleted' => [
                                'type' => 'boolean',
                            ],
                            'DocService' => [
                                'type' => 'object',
                                'properties' => [
                                    'Endpoint' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'SearchService' => [
                                'type' => 'object',
                                'properties' => [
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
                            'Limits' => [
                                'type' => 'object',
                                'properties' => [
                                    'MaximumReplicationCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'MaximumPartitionCount' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeExpressionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Expressions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ExpressionStatus',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Options' => [
                                'type' => 'object',
                                'properties' => [
                                    'ExpressionName' => [
                                        'type' => 'string',
                                    ],
                                    'ExpressionValue' => [
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
                                    'IntOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DefaultValue' => [
                                                'type' => 'numeric',
                                            ],
                                            'SourceField' => [
                                                'type' => 'string',
                                            ],
                                            'FacetEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SearchEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'ReturnEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SortEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'DoubleOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DefaultValue' => [
                                                'type' => 'numeric',
                                            ],
                                            'SourceField' => [
                                                'type' => 'string',
                                            ],
                                            'FacetEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SearchEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'ReturnEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SortEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'LiteralOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DefaultValue' => [
                                                'type' => 'string',
                                            ],
                                            'SourceField' => [
                                                'type' => 'string',
                                            ],
                                            'FacetEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SearchEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'ReturnEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SortEnabled' => [
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
                                            'SourceField' => [
                                                'type' => 'string',
                                            ],
                                            'ReturnEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SortEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'HighlightEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'AnalysisScheme' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'DateOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DefaultValue' => [
                                                'type' => 'string',
                                            ],
                                            'SourceField' => [
                                                'type' => 'string',
                                            ],
                                            'FacetEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SearchEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'ReturnEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SortEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'LatLonOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DefaultValue' => [
                                                'type' => 'string',
                                            ],
                                            'SourceField' => [
                                                'type' => 'string',
                                            ],
                                            'FacetEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SearchEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'ReturnEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SortEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'IntArrayOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DefaultValue' => [
                                                'type' => 'numeric',
                                            ],
                                            'SourceFields' => [
                                                'type' => 'string',
                                            ],
                                            'FacetEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SearchEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'ReturnEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'DoubleArrayOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DefaultValue' => [
                                                'type' => 'numeric',
                                            ],
                                            'SourceFields' => [
                                                'type' => 'string',
                                            ],
                                            'FacetEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SearchEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'ReturnEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'LiteralArrayOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DefaultValue' => [
                                                'type' => 'string',
                                            ],
                                            'SourceFields' => [
                                                'type' => 'string',
                                            ],
                                            'FacetEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SearchEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'ReturnEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'TextArrayOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DefaultValue' => [
                                                'type' => 'string',
                                            ],
                                            'SourceFields' => [
                                                'type' => 'string',
                                            ],
                                            'ReturnEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'HighlightEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'AnalysisScheme' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'DateArrayOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DefaultValue' => [
                                                'type' => 'string',
                                            ],
                                            'SourceFields' => [
                                                'type' => 'string',
                                            ],
                                            'FacetEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'SearchEnabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'ReturnEnabled' => [
                                                'type' => 'boolean',
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
        'DescribeScalingParametersResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ScalingParameters' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'object',
                            'properties' => [
                                'DesiredInstanceType' => [
                                    'type' => 'string',
                                ],
                                'DesiredReplicationCount' => [
                                    'type' => 'numeric',
                                ],
                                'DesiredPartitionCount' => [
                                    'type' => 'numeric',
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
        'DescribeSuggestersResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Suggesters' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'SuggesterStatus',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Options' => [
                                'type' => 'object',
                                'properties' => [
                                    'SuggesterName' => [
                                        'type' => 'string',
                                    ],
                                    'DocumentSuggesterOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'SourceField' => [
                                                'type' => 'string',
                                            ],
                                            'FuzzyMatching' => [
                                                'type' => 'string',
                                            ],
                                            'SortExpression' => [
                                                'type' => 'string',
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
        'ListDomainNamesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DomainNames' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'filters' => [
                        [
                            'method' =>
                                'Aws\\Common\\Command\\XmlResponseLocationVisitor::xmlMap',
                            'args' => ['@value', 'entry', 'key', 'value'],
                        ],
                    ],
                    'items' => [
                        'name' => 'entry',
                        'type' => 'object',
                        'sentAs' => 'entry',
                        'additionalProperties' => true,
                        'properties' => [
                            'key' => [
                                'type' => 'string',
                            ],
                            'value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'additionalProperties' => false,
                ],
            ],
        ],
        'UpdateAvailabilityOptionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AvailabilityOptions' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'boolean',
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
        'UpdateScalingParametersResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ScalingParameters' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Options' => [
                            'type' => 'object',
                            'properties' => [
                                'DesiredInstanceType' => [
                                    'type' => 'string',
                                ],
                                'DesiredReplicationCount' => [
                                    'type' => 'numeric',
                                ],
                                'DesiredPartitionCount' => [
                                    'type' => 'numeric',
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
    ],
    'iterators' => [
        'DescribeAnalysisSchemes' => [
            'result_key' => 'AnalysisSchemes',
        ],
        'DescribeDomains' => [
            'result_key' => 'DomainStatusList',
        ],
        'DescribeExpressions' => [
            'result_key' => 'Expressions',
        ],
        'DescribeIndexFields' => [
            'result_key' => 'IndexFields',
        ],
        'DescribeSuggesters' => [
            'result_key' => 'Suggesters',
        ],
    ],
];
