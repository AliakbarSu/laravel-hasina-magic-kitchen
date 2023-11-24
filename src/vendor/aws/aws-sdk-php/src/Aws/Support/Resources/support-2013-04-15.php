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
    'apiVersion' => '2013-04-15',
    'endpointPrefix' => 'support',
    'serviceFullName' => 'AWS Support',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'AWSSupport_20130415.',
    'signatureVersion' => 'v4',
    'namespace' => 'Support',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'support.us-east-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'AddAttachmentsToSet' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'AddAttachmentsToSetResponse',
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
                    'default' => 'AWSSupport_20130415.AddAttachmentsToSet',
                ],
                'attachmentSetId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'attachments' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Attachment',
                        'type' => 'object',
                        'properties' => [
                            'fileName' => [
                                'type' => 'string',
                            ],
                            'data' => [
                                'type' => 'string',
                                'filters' => ['base64_encode'],
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'An attachment set with the specified ID could not be found.',
                    'class' => 'AttachmentSetIdNotFoundException',
                ],
                [
                    'reason' =>
                        'The expiration time of the attachment set has passed. The set expires 1 hour after it is created.',
                    'class' => 'AttachmentSetExpiredException',
                ],
                [
                    'reason' =>
                        'A limit for the size of an attachment set has been exceeded. The limits are 3 attachments and 5 MB per attachment.',
                    'class' => 'AttachmentSetSizeLimitExceededException',
                ],
                [
                    'reason' =>
                        'The limit for the number of attachment sets created in a short period of time has been exceeded.',
                    'class' => 'AttachmentLimitExceededException',
                ],
            ],
        ],
        'AddCommunicationToCase' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'AddCommunicationToCaseResponse',
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
                    'default' => 'AWSSupport_20130415.AddCommunicationToCase',
                ],
                'caseId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'communicationBody' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ccEmailAddresses' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'CcEmailAddress',
                        'type' => 'string',
                    ],
                ],
                'attachmentSetId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' => 'The requested CaseId could not be located.',
                    'class' => 'CaseIdNotFoundException',
                ],
                [
                    'reason' =>
                        'An attachment set with the specified ID could not be found.',
                    'class' => 'AttachmentSetIdNotFoundException',
                ],
                [
                    'reason' =>
                        'The expiration time of the attachment set has passed. The set expires 1 hour after it is created.',
                    'class' => 'AttachmentSetExpiredException',
                ],
            ],
        ],
        'CreateCase' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateCaseResponse',
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
                    'default' => 'AWSSupport_20130415.CreateCase',
                ],
                'subject' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'serviceCode' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'severityCode' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'categoryCode' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'communicationBody' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ccEmailAddresses' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'CcEmailAddress',
                        'type' => 'string',
                    ],
                ],
                'language' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'issueType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'attachmentSetId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'The case creation limit for the account has been exceeded.',
                    'class' => 'CaseCreationLimitExceededException',
                ],
                [
                    'reason' =>
                        'An attachment set with the specified ID could not be found.',
                    'class' => 'AttachmentSetIdNotFoundException',
                ],
                [
                    'reason' =>
                        'The expiration time of the attachment set has passed. The set expires 1 hour after it is created.',
                    'class' => 'AttachmentSetExpiredException',
                ],
            ],
        ],
        'DescribeAttachment' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeAttachmentResponse',
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
                    'default' => 'AWSSupport_20130415.DescribeAttachment',
                ],
                'attachmentId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'The limit for the number of DescribeAttachment requests in a short period of time has been exceeded.',
                    'class' => 'DescribeAttachmentLimitExceededException',
                ],
                [
                    'reason' =>
                        'An attachment with the specified ID could not be found.',
                    'class' => 'AttachmentIdNotFoundException',
                ],
            ],
        ],
        'DescribeCases' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeCasesResponse',
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
                    'default' => 'AWSSupport_20130415.DescribeCases',
                ],
                'caseIdList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 100,
                    'items' => [
                        'name' => 'CaseId',
                        'type' => 'string',
                    ],
                ],
                'displayId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'afterTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'beforeTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'includeResolvedCases' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 10,
                    'maximum' => 100,
                ],
                'language' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'includeCommunications' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' => 'The requested CaseId could not be located.',
                    'class' => 'CaseIdNotFoundException',
                ],
            ],
        ],
        'DescribeCommunications' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeCommunicationsResponse',
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
                    'default' => 'AWSSupport_20130415.DescribeCommunications',
                ],
                'caseId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'beforeTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'afterTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'maxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 10,
                    'maximum' => 100,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' => 'The requested CaseId could not be located.',
                    'class' => 'CaseIdNotFoundException',
                ],
            ],
        ],
        'DescribeServices' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeServicesResponse',
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
                    'default' => 'AWSSupport_20130415.DescribeServices',
                ],
                'serviceCodeList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 100,
                    'items' => [
                        'name' => 'ServiceCode',
                        'type' => 'string',
                    ],
                ],
                'language' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeSeverityLevels' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeSeverityLevelsResponse',
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
                    'default' => 'AWSSupport_20130415.DescribeSeverityLevels',
                ],
                'language' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeTrustedAdvisorCheckRefreshStatuses' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' =>
                'DescribeTrustedAdvisorCheckRefreshStatusesResponse',
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
                        'AWSSupport_20130415.DescribeTrustedAdvisorCheckRefreshStatuses',
                ],
                'checkIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeTrustedAdvisorCheckResult' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeTrustedAdvisorCheckResultResponse',
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
                        'AWSSupport_20130415.DescribeTrustedAdvisorCheckResult',
                ],
                'checkId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'language' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeTrustedAdvisorCheckSummaries' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeTrustedAdvisorCheckSummariesResponse',
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
                        'AWSSupport_20130415.DescribeTrustedAdvisorCheckSummaries',
                ],
                'checkIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeTrustedAdvisorChecks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeTrustedAdvisorChecksResponse',
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
                        'AWSSupport_20130415.DescribeTrustedAdvisorChecks',
                ],
                'language' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'RefreshTrustedAdvisorCheck' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RefreshTrustedAdvisorCheckResponse',
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
                        'AWSSupport_20130415.RefreshTrustedAdvisorCheck',
                ],
                'checkId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'ResolveCase' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ResolveCaseResponse',
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
                    'default' => 'AWSSupport_20130415.ResolveCase',
                ],
                'caseId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal server error occurred.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' => 'The requested CaseId could not be located.',
                    'class' => 'CaseIdNotFoundException',
                ],
            ],
        ],
    ],
    'models' => [
        'AddAttachmentsToSetResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'attachmentSetId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'expiryTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'AddCommunicationToCaseResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'result' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateCaseResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'caseId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DescribeAttachmentResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'attachment' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'fileName' => [
                            'type' => 'string',
                        ],
                        'data' => [
                            'type' => 'string',
                            'filters' => ['base64_decode'],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeCasesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'cases' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'CaseDetails',
                        'type' => 'object',
                        'properties' => [
                            'caseId' => [
                                'type' => 'string',
                            ],
                            'displayId' => [
                                'type' => 'string',
                            ],
                            'subject' => [
                                'type' => 'string',
                            ],
                            'status' => [
                                'type' => 'string',
                            ],
                            'serviceCode' => [
                                'type' => 'string',
                            ],
                            'categoryCode' => [
                                'type' => 'string',
                            ],
                            'severityCode' => [
                                'type' => 'string',
                            ],
                            'submittedBy' => [
                                'type' => 'string',
                            ],
                            'timeCreated' => [
                                'type' => 'string',
                            ],
                            'recentCommunications' => [
                                'type' => 'object',
                                'properties' => [
                                    'communications' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Communication',
                                            'type' => 'object',
                                            'properties' => [
                                                'caseId' => [
                                                    'type' => 'string',
                                                ],
                                                'body' => [
                                                    'type' => 'string',
                                                ],
                                                'submittedBy' => [
                                                    'type' => 'string',
                                                ],
                                                'timeCreated' => [
                                                    'type' => 'string',
                                                ],
                                                'attachmentSet' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'AttachmentDetails',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'attachmentId' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'fileName' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'nextToken' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'ccEmailAddresses' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'CcEmailAddress',
                                    'type' => 'string',
                                ],
                            ],
                            'language' => [
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
        'DescribeCommunicationsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'communications' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Communication',
                        'type' => 'object',
                        'properties' => [
                            'caseId' => [
                                'type' => 'string',
                            ],
                            'body' => [
                                'type' => 'string',
                            ],
                            'submittedBy' => [
                                'type' => 'string',
                            ],
                            'timeCreated' => [
                                'type' => 'string',
                            ],
                            'attachmentSet' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'AttachmentDetails',
                                    'type' => 'object',
                                    'properties' => [
                                        'attachmentId' => [
                                            'type' => 'string',
                                        ],
                                        'fileName' => [
                                            'type' => 'string',
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
        'DescribeServicesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'services' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Service',
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'categories' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Category',
                                    'type' => 'object',
                                    'properties' => [
                                        'code' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
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
        'DescribeSeverityLevelsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'severityLevels' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'SeverityLevel',
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeTrustedAdvisorCheckRefreshStatusesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'statuses' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'TrustedAdvisorCheckRefreshStatus',
                        'type' => 'object',
                        'properties' => [
                            'checkId' => [
                                'type' => 'string',
                            ],
                            'status' => [
                                'type' => 'string',
                            ],
                            'millisUntilNextRefreshable' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeTrustedAdvisorCheckResultResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'result' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'checkId' => [
                            'type' => 'string',
                        ],
                        'timestamp' => [
                            'type' => 'string',
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'resourcesSummary' => [
                            'type' => 'object',
                            'properties' => [
                                'resourcesProcessed' => [
                                    'type' => 'numeric',
                                ],
                                'resourcesFlagged' => [
                                    'type' => 'numeric',
                                ],
                                'resourcesIgnored' => [
                                    'type' => 'numeric',
                                ],
                                'resourcesSuppressed' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'categorySpecificSummary' => [
                            'type' => 'object',
                            'properties' => [
                                'costOptimizing' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'estimatedMonthlySavings' => [
                                            'type' => 'numeric',
                                        ],
                                        'estimatedPercentMonthlySavings' => [
                                            'type' => 'numeric',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'flaggedResources' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'TrustedAdvisorResourceDetail',
                                'type' => 'object',
                                'properties' => [
                                    'status' => [
                                        'type' => 'string',
                                    ],
                                    'region' => [
                                        'type' => 'string',
                                    ],
                                    'resourceId' => [
                                        'type' => 'string',
                                    ],
                                    'isSuppressed' => [
                                        'type' => 'boolean',
                                    ],
                                    'metadata' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'String',
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
        'DescribeTrustedAdvisorCheckSummariesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'summaries' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'TrustedAdvisorCheckSummary',
                        'type' => 'object',
                        'properties' => [
                            'checkId' => [
                                'type' => 'string',
                            ],
                            'timestamp' => [
                                'type' => 'string',
                            ],
                            'status' => [
                                'type' => 'string',
                            ],
                            'hasFlaggedResources' => [
                                'type' => 'boolean',
                            ],
                            'resourcesSummary' => [
                                'type' => 'object',
                                'properties' => [
                                    'resourcesProcessed' => [
                                        'type' => 'numeric',
                                    ],
                                    'resourcesFlagged' => [
                                        'type' => 'numeric',
                                    ],
                                    'resourcesIgnored' => [
                                        'type' => 'numeric',
                                    ],
                                    'resourcesSuppressed' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'categorySpecificSummary' => [
                                'type' => 'object',
                                'properties' => [
                                    'costOptimizing' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'estimatedMonthlySavings' => [
                                                'type' => 'numeric',
                                            ],
                                            'estimatedPercentMonthlySavings' => [
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
        ],
        'DescribeTrustedAdvisorChecksResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'checks' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'TrustedAdvisorCheckDescription',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'description' => [
                                'type' => 'string',
                            ],
                            'category' => [
                                'type' => 'string',
                            ],
                            'metadata' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'String',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RefreshTrustedAdvisorCheckResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'status' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'checkId' => [
                            'type' => 'string',
                        ],
                        'status' => [
                            'type' => 'string',
                        ],
                        'millisUntilNextRefreshable' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'ResolveCaseResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'initialCaseStatus' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'finalCaseStatus' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
    ],
    'iterators' => [
        'DescribeCases' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'maxResults',
            'result_key' => 'cases',
        ],
        'DescribeCommunications' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'limit_key' => 'maxResults',
            'result_key' => 'communications',
        ],
        'DescribeServices' => [
            'result_key' => 'services',
        ],
        'DescribeTrustedAdvisorCheckRefreshStatuses' => [
            'result_key' => 'statuses',
        ],
        'DescribeTrustedAdvisorCheckSummaries' => [
            'result_key' => 'summaries',
        ],
        'DescribeSeverityLevels' => [
            'result_key' => 'severityLevelsList',
        ],
        'DescribeTrustedAdvisorChecks' => [
            'result_key' => 'checks',
        ],
    ],
];
