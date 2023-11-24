<?php

return [
    'apiVersion' => '2013-01-01',
    'endpointPrefix' => 'cloudsearchdomain',
    'serviceFullName' => 'Amazon CloudSearch Domain',
    'serviceType' => 'rest-json',
    'signatureVersion' => 'v4',
    'signingName' => 'cloudsearch',
    'namespace' => 'CloudSearchDomain',
    'operations' => [
        'Search' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-01-01/search?format=sdk&pretty=true',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'SearchResponse',
            'responseType' => 'model',
            'parameters' => [
                'cursor' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'expr' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'facet' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'filterQuery' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'fq',
                ],
                'highlight' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'partial' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'query',
                ],
                'query' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'q',
                ],
                'queryOptions' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'q.options',
                ],
                'queryParser' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'q.parser',
                ],
                'return' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'size' => [
                    'type' => 'numeric',
                    'location' => 'query',
                ],
                'sort' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'start' => [
                    'type' => 'numeric',
                    'location' => 'query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Information about any problems encountered while processing a search request.',
                    'class' => 'SearchException',
                ],
            ],
        ],
        'Suggest' => [
            'httpMethod' => 'GET',
            'uri' => '/2013-01-01/suggest?format=sdk&pretty=true',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'SuggestResponse',
            'responseType' => 'model',
            'parameters' => [
                'query' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'q',
                ],
                'suggester' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                ],
                'size' => [
                    'type' => 'numeric',
                    'location' => 'query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Information about any problems encountered while processing a search request.',
                    'class' => 'SearchException',
                ],
            ],
        ],
        'UploadDocuments' => [
            'httpMethod' => 'POST',
            'uri' => '/2013-01-01/documents/batch?format=sdk',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UploadDocumentsResponse',
            'responseType' => 'model',
            'parameters' => [
                'documents' => [
                    'required' => true,
                    'type' => ['string', 'object'],
                    'location' => 'body',
                ],
                'contentType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Information about any problems encountered while processing an upload request.',
                    'class' => 'DocumentServiceException',
                ],
            ],
        ],
    ],
    'models' => [
        'SearchResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'status' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'timems' => [
                            'type' => 'numeric',
                        ],
                        'rid' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'hits' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'found' => [
                            'type' => 'numeric',
                        ],
                        'start' => [
                            'type' => 'numeric',
                        ],
                        'cursor' => [
                            'type' => 'string',
                        ],
                        'hit' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Hit',
                                'type' => 'object',
                                'properties' => [
                                    'id' => [
                                        'type' => 'string',
                                    ],
                                    'fields' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'String',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'exprs' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'highlights' => [
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
                'facets' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'object',
                        'properties' => [
                            'buckets' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Bucket',
                                    'type' => 'object',
                                    'properties' => [
                                        'value' => [
                                            'type' => 'string',
                                        ],
                                        'count' => [
                                            'type' => 'numeric',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SuggestResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'status' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'timems' => [
                            'type' => 'numeric',
                        ],
                        'rid' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'suggest' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'query' => [
                            'type' => 'string',
                        ],
                        'found' => [
                            'type' => 'numeric',
                        ],
                        'suggestions' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'SuggestionMatch',
                                'type' => 'object',
                                'properties' => [
                                    'suggestion' => [
                                        'type' => 'string',
                                    ],
                                    'score' => [
                                        'type' => 'numeric',
                                    ],
                                    'id' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UploadDocumentsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'adds' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'deletes' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'warnings' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DocumentServiceWarning',
                        'type' => 'object',
                        'properties' => [
                            'message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
