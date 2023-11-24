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
    'apiVersion' => '2015-07-27',
    'endpointPrefix' => 'cloudfront',
    'serviceFullName' => 'Amazon CloudFront',
    'serviceAbbreviation' => 'CloudFront',
    'serviceType' => 'rest-xml',
    'globalEndpoint' => 'cloudfront.amazonaws.com',
    'signatureVersion' => 'v4',
    'namespace' => 'CloudFront',
    'regions' => [
        'us-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'cloudfront.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'cloudfront.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'cloudfront.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'cloudfront.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'cloudfront.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'cloudfront.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'cloudfront.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'cloudfront.amazonaws.com',
        ],
    ],
    'operations' => [
        'CreateCloudFrontOriginAccessIdentity' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-07-27/origin-access-identity/cloudfront',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateCloudFrontOriginAccessIdentityResult',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'CloudFrontOriginAccessIdentityConfig',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2015-07-27/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Comment' => [
                    'required' => true,
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
                        'If the CallerReference is a value you already sent in a previous request to create an identity but the content of the CloudFrontOriginAccessIdentityConfig is different from the original request, CloudFront returns a CloudFrontOriginAccessIdentityAlreadyExists error.',
                    'class' =>
                        'CloudFrontOriginAccessIdentityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'This operation requires a body. Ensure that the body is present and the Content-Type header is set.',
                    'class' => 'MissingBodyException',
                ],
                [
                    'reason' =>
                        'Processing your request would cause you to exceed the maximum number of origin access identities allowed.',
                    'class' =>
                        'TooManyCloudFrontOriginAccessIdentitiesException',
                ],
                [
                    'reason' => 'The argument is invalid.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The value of Quantity and the size of Items do not match.',
                    'class' => 'InconsistentQuantitiesException',
                ],
            ],
        ],
        'CreateDistribution' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-07-27/distribution',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateDistributionResult',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'DistributionConfig',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2015-07-27/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Aliases' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CNAME',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'DefaultRootObject' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Origins' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'minItems' => 1,
                            'items' => [
                                'name' => 'Origin',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'DomainName' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'OriginPath' => [
                                        'type' => 'string',
                                    ],
                                    'S3OriginConfig' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'OriginAccessIdentity' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'CustomOriginConfig' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'HTTPPort' => [
                                                'required' => true,
                                                'type' => 'numeric',
                                            ],
                                            'HTTPSPort' => [
                                                'required' => true,
                                                'type' => 'numeric',
                                            ],
                                            'OriginProtocolPolicy' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'DefaultCacheBehavior' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'TargetOriginId' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'ForwardedValues' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'QueryString' => [
                                    'required' => true,
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'Cookies' => [
                                    'required' => true,
                                    'type' => 'object',
                                    'properties' => [
                                        'Forward' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                        'WhitelistedNames' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Quantity' => [
                                                    'required' => true,
                                                    'type' => 'numeric',
                                                ],
                                                'Items' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'Name',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'Headers' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Quantity' => [
                                            'required' => true,
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Name',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'TrustedSigners' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'required' => true,
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'Quantity' => [
                                    'required' => true,
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'AwsAccountNumber',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'ViewerProtocolPolicy' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'MinTTL' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'AllowedMethods' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'required' => true,
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'required' => true,
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Method',
                                        'type' => 'string',
                                    ],
                                ],
                                'CachedMethods' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Quantity' => [
                                            'required' => true,
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'required' => true,
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Method',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'SmoothStreaming' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'DefaultTTL' => [
                            'type' => 'numeric',
                        ],
                        'MaxTTL' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'CacheBehaviors' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CacheBehavior',
                                'type' => 'object',
                                'properties' => [
                                    'PathPattern' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'TargetOriginId' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'ForwardedValues' => [
                                        'required' => true,
                                        'type' => 'object',
                                        'properties' => [
                                            'QueryString' => [
                                                'required' => true,
                                                'type' => 'boolean',
                                                'format' => 'boolean-string',
                                            ],
                                            'Cookies' => [
                                                'required' => true,
                                                'type' => 'object',
                                                'properties' => [
                                                    'Forward' => [
                                                        'required' => true,
                                                        'type' => 'string',
                                                    ],
                                                    'WhitelistedNames' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Quantity' => [
                                                                'required' => true,
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'Items' => [
                                                                'type' =>
                                                                    'array',
                                                                'items' => [
                                                                    'name' =>
                                                                        'Name',
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Headers' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Quantity' => [
                                                        'required' => true,
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' => 'Name',
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TrustedSigners' => [
                                        'required' => true,
                                        'type' => 'object',
                                        'properties' => [
                                            'Enabled' => [
                                                'required' => true,
                                                'type' => 'boolean',
                                                'format' => 'boolean-string',
                                            ],
                                            'Quantity' => [
                                                'required' => true,
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' =>
                                                        'AwsAccountNumber',
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ViewerProtocolPolicy' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'MinTTL' => [
                                        'required' => true,
                                        'type' => 'numeric',
                                    ],
                                    'AllowedMethods' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'required' => true,
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'required' => true,
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'Method',
                                                    'type' => 'string',
                                                ],
                                            ],
                                            'CachedMethods' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Quantity' => [
                                                        'required' => true,
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'required' => true,
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' => 'Method',
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SmoothStreaming' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                    'DefaultTTL' => [
                                        'type' => 'numeric',
                                    ],
                                    'MaxTTL' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'CustomErrorResponses' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CustomErrorResponse',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'required' => true,
                                        'type' => 'numeric',
                                    ],
                                    'ResponsePagePath' => [
                                        'type' => 'string',
                                    ],
                                    'ResponseCode' => [
                                        'type' => 'string',
                                    ],
                                    'ErrorCachingMinTTL' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Comment' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Logging' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'required' => true,
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'IncludeCookies' => [
                            'required' => true,
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'Bucket' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'Prefix' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
                'PriceClass' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Enabled' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'xml',
                ],
                'ViewerCertificate' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'IAMCertificateId' => [
                            'type' => 'string',
                        ],
                        'CloudFrontDefaultCertificate' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'SSLSupportMethod' => [
                            'type' => 'string',
                        ],
                        'MinimumProtocolVersion' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Restrictions' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'GeoRestriction' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'RestrictionType' => [
                                    'required' => true,
                                    'type' => 'string',
                                ],
                                'Quantity' => [
                                    'required' => true,
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Location',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'WebACLId' => [
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
                    'class' => 'CNAMEAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The caller reference you attempted to create the distribution with is associated with another distribution.',
                    'class' => 'DistributionAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The Amazon S3 origin server specified does not refer to a valid Amazon S3 bucket.',
                    'class' => 'InvalidOriginException',
                ],
                [
                    'reason' =>
                        'The origin access identity is not valid or doesn\'t exist.',
                    'class' => 'InvalidOriginAccessIdentityException',
                ],
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Your request contains more trusted signers than are allowed per distribution.',
                    'class' => 'TooManyTrustedSignersException',
                ],
                [
                    'reason' =>
                        'One or more of your trusted signers do not exist.',
                    'class' => 'TrustedSignerDoesNotExistException',
                ],
                [
                    'class' => 'InvalidViewerCertificateException',
                ],
                [
                    'class' => 'InvalidMinimumProtocolVersionException',
                ],
                [
                    'reason' =>
                        'This operation requires a body. Ensure that the body is present and the Content-Type header is set.',
                    'class' => 'MissingBodyException',
                ],
                [
                    'reason' =>
                        'Your request contains more CNAMEs than are allowed per distribution.',
                    'class' => 'TooManyDistributionCNAMEsException',
                ],
                [
                    'reason' =>
                        'Processing your request would cause you to exceed the maximum number of distributions allowed.',
                    'class' => 'TooManyDistributionsException',
                ],
                [
                    'reason' =>
                        'The default root object file name is too big or contains an invalid character.',
                    'class' => 'InvalidDefaultRootObjectException',
                ],
                [
                    'reason' =>
                        'The relative path is too big, is not URL-encoded, or does not begin with a slash (/).',
                    'class' => 'InvalidRelativePathException',
                ],
                [
                    'class' => 'InvalidErrorCodeException',
                ],
                [
                    'class' => 'InvalidResponseCodeException',
                ],
                [
                    'reason' => 'The argument is invalid.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'This operation requires the HTTPS protocol. Ensure that you specify the HTTPS protocol in your request, or omit the RequiredProtocols element from your distribution configuration.',
                    'class' => 'InvalidRequiredProtocolException',
                ],
                [
                    'reason' =>
                        'No origin exists with the specified Origin Id.',
                    'class' => 'NoSuchOriginException',
                ],
                [
                    'reason' =>
                        'You cannot create anymore origins for the distribution.',
                    'class' => 'TooManyOriginsException',
                ],
                [
                    'reason' =>
                        'You cannot create anymore cache behaviors for the distribution.',
                    'class' => 'TooManyCacheBehaviorsException',
                ],
                [
                    'reason' =>
                        'Your request contains more cookie names in the whitelist than are allowed per cache behavior.',
                    'class' => 'TooManyCookieNamesInWhiteListException',
                ],
                [
                    'reason' =>
                        'Your request contains forward cookies option which doesn\'t match with the expectation for the whitelisted list of cookie names. Either list of cookie names has been specified when not allowed or list of cookie names is missing when expected.',
                    'class' => 'InvalidForwardCookiesException',
                ],
                [
                    'class' => 'TooManyHeadersInForwardedValuesException',
                ],
                [
                    'class' => 'InvalidHeadersForS3OriginException',
                ],
                [
                    'reason' =>
                        'The value of Quantity and the size of Items do not match.',
                    'class' => 'InconsistentQuantitiesException',
                ],
                [
                    'reason' =>
                        'You cannot create anymore custom ssl certificates.',
                    'class' => 'TooManyCertificatesException',
                ],
                [
                    'class' => 'InvalidLocationCodeException',
                ],
                [
                    'class' => 'InvalidGeoRestrictionParameterException',
                ],
                [
                    'reason' =>
                        'You cannot specify SSLv3 as the minimum protocol version if you only want to support only clients that Support Server Name Indication (SNI).',
                    'class' => 'InvalidProtocolSettingsException',
                ],
                [
                    'class' => 'InvalidTTLOrderException',
                ],
                [
                    'class' => 'InvalidWebACLIdException',
                ],
            ],
        ],
        'CreateInvalidation' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-07-27/distribution/{DistributionId}/invalidation',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateInvalidationResult',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'InvalidationBatch',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2015-07-27/',
                    ],
                ],
            ],
            'parameters' => [
                'DistributionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Paths' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Path',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'CallerReference' => [
                    'required' => true,
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
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'This operation requires a body. Ensure that the body is present and the Content-Type header is set.',
                    'class' => 'MissingBodyException',
                ],
                [
                    'reason' => 'The argument is invalid.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' => 'The specified distribution does not exist.',
                    'class' => 'NoSuchDistributionException',
                ],
                [
                    'class' => 'BatchTooLargeException',
                ],
                [
                    'reason' =>
                        'You have exceeded the maximum number of allowable InProgress invalidation batch requests, or invalidation objects.',
                    'class' => 'TooManyInvalidationsInProgressException',
                ],
                [
                    'reason' =>
                        'The value of Quantity and the size of Items do not match.',
                    'class' => 'InconsistentQuantitiesException',
                ],
            ],
        ],
        'CreateStreamingDistribution' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-07-27/streaming-distribution',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateStreamingDistributionResult',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'StreamingDistributionConfig',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2015-07-27/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'S3Origin' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DomainName' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'OriginAccessIdentity' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
                'Aliases' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CNAME',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Comment' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Logging' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'required' => true,
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'Bucket' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'Prefix' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
                'TrustedSigners' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'required' => true,
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'Quantity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'AwsAccountNumber',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'PriceClass' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Enabled' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'xml',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'CNAMEAlreadyExistsException',
                ],
                [
                    'class' => 'StreamingDistributionAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The Amazon S3 origin server specified does not refer to a valid Amazon S3 bucket.',
                    'class' => 'InvalidOriginException',
                ],
                [
                    'reason' =>
                        'The origin access identity is not valid or doesn\'t exist.',
                    'class' => 'InvalidOriginAccessIdentityException',
                ],
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Your request contains more trusted signers than are allowed per distribution.',
                    'class' => 'TooManyTrustedSignersException',
                ],
                [
                    'reason' =>
                        'One or more of your trusted signers do not exist.',
                    'class' => 'TrustedSignerDoesNotExistException',
                ],
                [
                    'reason' =>
                        'This operation requires a body. Ensure that the body is present and the Content-Type header is set.',
                    'class' => 'MissingBodyException',
                ],
                [
                    'class' => 'TooManyStreamingDistributionCNAMEsException',
                ],
                [
                    'reason' =>
                        'Processing your request would cause you to exceed the maximum number of streaming distributions allowed.',
                    'class' => 'TooManyStreamingDistributionsException',
                ],
                [
                    'reason' => 'The argument is invalid.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The value of Quantity and the size of Items do not match.',
                    'class' => 'InconsistentQuantitiesException',
                ],
            ],
        ],
        'DeleteCloudFrontOriginAccessIdentity' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2015-07-27/origin-access-identity/cloudfront/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' =>
                'DeleteCloudFrontOriginAccessIdentity2015_07_27Output',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'If-Match',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'The If-Match version is missing or not valid for the distribution.',
                    'class' => 'InvalidIfMatchVersionException',
                ],
                [
                    'reason' =>
                        'The specified origin access identity does not exist.',
                    'class' => 'NoSuchCloudFrontOriginAccessIdentityException',
                ],
                [
                    'reason' =>
                        'The precondition given in one or more of the request-header fields evaluated to false.',
                    'class' => 'PreconditionFailedException',
                ],
                [
                    'class' => 'CloudFrontOriginAccessIdentityInUseException',
                ],
            ],
        ],
        'DeleteDistribution' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2015-07-27/distribution/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DeleteDistribution2015_07_27Output',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'If-Match',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'class' => 'DistributionNotDisabledException',
                ],
                [
                    'reason' =>
                        'The If-Match version is missing or not valid for the distribution.',
                    'class' => 'InvalidIfMatchVersionException',
                ],
                [
                    'reason' => 'The specified distribution does not exist.',
                    'class' => 'NoSuchDistributionException',
                ],
                [
                    'reason' =>
                        'The precondition given in one or more of the request-header fields evaluated to false.',
                    'class' => 'PreconditionFailedException',
                ],
            ],
        ],
        'DeleteStreamingDistribution' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2015-07-27/streaming-distribution/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DeleteStreamingDistribution2015_07_27Output',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'If-Match',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'class' => 'StreamingDistributionNotDisabledException',
                ],
                [
                    'reason' =>
                        'The If-Match version is missing or not valid for the distribution.',
                    'class' => 'InvalidIfMatchVersionException',
                ],
                [
                    'reason' =>
                        'The specified streaming distribution does not exist.',
                    'class' => 'NoSuchStreamingDistributionException',
                ],
                [
                    'reason' =>
                        'The precondition given in one or more of the request-header fields evaluated to false.',
                    'class' => 'PreconditionFailedException',
                ],
            ],
        ],
        'GetCloudFrontOriginAccessIdentity' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-07-27/origin-access-identity/cloudfront/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetCloudFrontOriginAccessIdentityResult',
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
                    'reason' =>
                        'The specified origin access identity does not exist.',
                    'class' => 'NoSuchCloudFrontOriginAccessIdentityException',
                ],
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'GetCloudFrontOriginAccessIdentityConfig' => [
            'httpMethod' => 'GET',
            'uri' =>
                '/2015-07-27/origin-access-identity/cloudfront/{Id}/config',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetCloudFrontOriginAccessIdentityConfigResult',
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
                    'reason' =>
                        'The specified origin access identity does not exist.',
                    'class' => 'NoSuchCloudFrontOriginAccessIdentityException',
                ],
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'GetDistribution' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-07-27/distribution/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetDistributionResult',
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
                    'reason' => 'The specified distribution does not exist.',
                    'class' => 'NoSuchDistributionException',
                ],
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'GetDistributionConfig' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-07-27/distribution/{Id}/config',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetDistributionConfigResult',
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
                    'reason' => 'The specified distribution does not exist.',
                    'class' => 'NoSuchDistributionException',
                ],
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'GetInvalidation' => [
            'httpMethod' => 'GET',
            'uri' =>
                '/2015-07-27/distribution/{DistributionId}/invalidation/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetInvalidationResult',
            'responseType' => 'model',
            'parameters' => [
                'DistributionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
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
                    'reason' => 'The specified invalidation does not exist.',
                    'class' => 'NoSuchInvalidationException',
                ],
                [
                    'reason' => 'The specified distribution does not exist.',
                    'class' => 'NoSuchDistributionException',
                ],
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'GetStreamingDistribution' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-07-27/streaming-distribution/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetStreamingDistributionResult',
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
                    'reason' =>
                        'The specified streaming distribution does not exist.',
                    'class' => 'NoSuchStreamingDistributionException',
                ],
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'GetStreamingDistributionConfig' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-07-27/streaming-distribution/{Id}/config',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetStreamingDistributionConfigResult',
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
                    'reason' =>
                        'The specified streaming distribution does not exist.',
                    'class' => 'NoSuchStreamingDistributionException',
                ],
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'ListCloudFrontOriginAccessIdentities' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-07-27/origin-access-identity/cloudfront',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListCloudFrontOriginAccessIdentitiesResult',
            'responseType' => 'model',
            'parameters' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The argument is invalid.',
                    'class' => 'InvalidArgumentException',
                ],
            ],
        ],
        'ListDistributions' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-07-27/distribution',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListDistributionsResult',
            'responseType' => 'model',
            'parameters' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The argument is invalid.',
                    'class' => 'InvalidArgumentException',
                ],
            ],
        ],
        'ListDistributionsByWebACLId' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-07-27/distributionsByWebACLId/{WebACLId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListDistributionsByWebACLIdResult',
            'responseType' => 'model',
            'parameters' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'WebACLId' => [
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
                    'reason' => 'The argument is invalid.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'class' => 'InvalidWebACLIdException',
                ],
            ],
        ],
        'ListInvalidations' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-07-27/distribution/{DistributionId}/invalidation',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListInvalidationsResult',
            'responseType' => 'model',
            'parameters' => [
                'DistributionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The argument is invalid.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' => 'The specified distribution does not exist.',
                    'class' => 'NoSuchDistributionException',
                ],
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'ListStreamingDistributions' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-07-27/streaming-distribution',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListStreamingDistributionsResult',
            'responseType' => 'model',
            'parameters' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'MaxItems' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The argument is invalid.',
                    'class' => 'InvalidArgumentException',
                ],
            ],
        ],
        'UpdateCloudFrontOriginAccessIdentity' => [
            'httpMethod' => 'PUT',
            'uri' =>
                '/2015-07-27/origin-access-identity/cloudfront/{Id}/config',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UpdateCloudFrontOriginAccessIdentityResult',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'CloudFrontOriginAccessIdentityConfig',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2015-07-27/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Comment' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'If-Match',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' => 'Origin and CallerReference cannot be updated.',
                    'class' => 'IllegalUpdateException',
                ],
                [
                    'reason' =>
                        'The If-Match version is missing or not valid for the distribution.',
                    'class' => 'InvalidIfMatchVersionException',
                ],
                [
                    'reason' =>
                        'This operation requires a body. Ensure that the body is present and the Content-Type header is set.',
                    'class' => 'MissingBodyException',
                ],
                [
                    'reason' =>
                        'The specified origin access identity does not exist.',
                    'class' => 'NoSuchCloudFrontOriginAccessIdentityException',
                ],
                [
                    'reason' =>
                        'The precondition given in one or more of the request-header fields evaluated to false.',
                    'class' => 'PreconditionFailedException',
                ],
                [
                    'reason' => 'The argument is invalid.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The value of Quantity and the size of Items do not match.',
                    'class' => 'InconsistentQuantitiesException',
                ],
            ],
        ],
        'UpdateDistribution' => [
            'httpMethod' => 'PUT',
            'uri' => '/2015-07-27/distribution/{Id}/config',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UpdateDistributionResult',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'DistributionConfig',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2015-07-27/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Aliases' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CNAME',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'DefaultRootObject' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Origins' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'minItems' => 1,
                            'items' => [
                                'name' => 'Origin',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'DomainName' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'OriginPath' => [
                                        'type' => 'string',
                                    ],
                                    'S3OriginConfig' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'OriginAccessIdentity' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'CustomOriginConfig' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'HTTPPort' => [
                                                'required' => true,
                                                'type' => 'numeric',
                                            ],
                                            'HTTPSPort' => [
                                                'required' => true,
                                                'type' => 'numeric',
                                            ],
                                            'OriginProtocolPolicy' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'DefaultCacheBehavior' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'TargetOriginId' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'ForwardedValues' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'QueryString' => [
                                    'required' => true,
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'Cookies' => [
                                    'required' => true,
                                    'type' => 'object',
                                    'properties' => [
                                        'Forward' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                        'WhitelistedNames' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Quantity' => [
                                                    'required' => true,
                                                    'type' => 'numeric',
                                                ],
                                                'Items' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'Name',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'Headers' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Quantity' => [
                                            'required' => true,
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Name',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'TrustedSigners' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'required' => true,
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'Quantity' => [
                                    'required' => true,
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'AwsAccountNumber',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'ViewerProtocolPolicy' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'MinTTL' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'AllowedMethods' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'required' => true,
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'required' => true,
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Method',
                                        'type' => 'string',
                                    ],
                                ],
                                'CachedMethods' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Quantity' => [
                                            'required' => true,
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'required' => true,
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Method',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'SmoothStreaming' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'DefaultTTL' => [
                            'type' => 'numeric',
                        ],
                        'MaxTTL' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'CacheBehaviors' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CacheBehavior',
                                'type' => 'object',
                                'properties' => [
                                    'PathPattern' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'TargetOriginId' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'ForwardedValues' => [
                                        'required' => true,
                                        'type' => 'object',
                                        'properties' => [
                                            'QueryString' => [
                                                'required' => true,
                                                'type' => 'boolean',
                                                'format' => 'boolean-string',
                                            ],
                                            'Cookies' => [
                                                'required' => true,
                                                'type' => 'object',
                                                'properties' => [
                                                    'Forward' => [
                                                        'required' => true,
                                                        'type' => 'string',
                                                    ],
                                                    'WhitelistedNames' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Quantity' => [
                                                                'required' => true,
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'Items' => [
                                                                'type' =>
                                                                    'array',
                                                                'items' => [
                                                                    'name' =>
                                                                        'Name',
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Headers' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Quantity' => [
                                                        'required' => true,
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' => 'Name',
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TrustedSigners' => [
                                        'required' => true,
                                        'type' => 'object',
                                        'properties' => [
                                            'Enabled' => [
                                                'required' => true,
                                                'type' => 'boolean',
                                                'format' => 'boolean-string',
                                            ],
                                            'Quantity' => [
                                                'required' => true,
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' =>
                                                        'AwsAccountNumber',
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ViewerProtocolPolicy' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'MinTTL' => [
                                        'required' => true,
                                        'type' => 'numeric',
                                    ],
                                    'AllowedMethods' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'required' => true,
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'required' => true,
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'Method',
                                                    'type' => 'string',
                                                ],
                                            ],
                                            'CachedMethods' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Quantity' => [
                                                        'required' => true,
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'required' => true,
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' => 'Method',
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SmoothStreaming' => [
                                        'type' => 'boolean',
                                        'format' => 'boolean-string',
                                    ],
                                    'DefaultTTL' => [
                                        'type' => 'numeric',
                                    ],
                                    'MaxTTL' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'CustomErrorResponses' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CustomErrorResponse',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'required' => true,
                                        'type' => 'numeric',
                                    ],
                                    'ResponsePagePath' => [
                                        'type' => 'string',
                                    ],
                                    'ResponseCode' => [
                                        'type' => 'string',
                                    ],
                                    'ErrorCachingMinTTL' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Comment' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Logging' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'required' => true,
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'IncludeCookies' => [
                            'required' => true,
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'Bucket' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'Prefix' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
                'PriceClass' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Enabled' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'xml',
                ],
                'ViewerCertificate' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'IAMCertificateId' => [
                            'type' => 'string',
                        ],
                        'CloudFrontDefaultCertificate' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'SSLSupportMethod' => [
                            'type' => 'string',
                        ],
                        'MinimumProtocolVersion' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Restrictions' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'GeoRestriction' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'RestrictionType' => [
                                    'required' => true,
                                    'type' => 'string',
                                ],
                                'Quantity' => [
                                    'required' => true,
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Location',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'WebACLId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'If-Match',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'class' => 'CNAMEAlreadyExistsException',
                ],
                [
                    'reason' => 'Origin and CallerReference cannot be updated.',
                    'class' => 'IllegalUpdateException',
                ],
                [
                    'reason' =>
                        'The If-Match version is missing or not valid for the distribution.',
                    'class' => 'InvalidIfMatchVersionException',
                ],
                [
                    'reason' =>
                        'This operation requires a body. Ensure that the body is present and the Content-Type header is set.',
                    'class' => 'MissingBodyException',
                ],
                [
                    'reason' => 'The specified distribution does not exist.',
                    'class' => 'NoSuchDistributionException',
                ],
                [
                    'reason' =>
                        'The precondition given in one or more of the request-header fields evaluated to false.',
                    'class' => 'PreconditionFailedException',
                ],
                [
                    'reason' =>
                        'Your request contains more CNAMEs than are allowed per distribution.',
                    'class' => 'TooManyDistributionCNAMEsException',
                ],
                [
                    'reason' =>
                        'The default root object file name is too big or contains an invalid character.',
                    'class' => 'InvalidDefaultRootObjectException',
                ],
                [
                    'reason' =>
                        'The relative path is too big, is not URL-encoded, or does not begin with a slash (/).',
                    'class' => 'InvalidRelativePathException',
                ],
                [
                    'class' => 'InvalidErrorCodeException',
                ],
                [
                    'class' => 'InvalidResponseCodeException',
                ],
                [
                    'reason' => 'The argument is invalid.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The origin access identity is not valid or doesn\'t exist.',
                    'class' => 'InvalidOriginAccessIdentityException',
                ],
                [
                    'reason' =>
                        'Your request contains more trusted signers than are allowed per distribution.',
                    'class' => 'TooManyTrustedSignersException',
                ],
                [
                    'reason' =>
                        'One or more of your trusted signers do not exist.',
                    'class' => 'TrustedSignerDoesNotExistException',
                ],
                [
                    'class' => 'InvalidViewerCertificateException',
                ],
                [
                    'class' => 'InvalidMinimumProtocolVersionException',
                ],
                [
                    'reason' =>
                        'This operation requires the HTTPS protocol. Ensure that you specify the HTTPS protocol in your request, or omit the RequiredProtocols element from your distribution configuration.',
                    'class' => 'InvalidRequiredProtocolException',
                ],
                [
                    'reason' =>
                        'No origin exists with the specified Origin Id.',
                    'class' => 'NoSuchOriginException',
                ],
                [
                    'reason' =>
                        'You cannot create anymore origins for the distribution.',
                    'class' => 'TooManyOriginsException',
                ],
                [
                    'reason' =>
                        'You cannot create anymore cache behaviors for the distribution.',
                    'class' => 'TooManyCacheBehaviorsException',
                ],
                [
                    'reason' =>
                        'Your request contains more cookie names in the whitelist than are allowed per cache behavior.',
                    'class' => 'TooManyCookieNamesInWhiteListException',
                ],
                [
                    'reason' =>
                        'Your request contains forward cookies option which doesn\'t match with the expectation for the whitelisted list of cookie names. Either list of cookie names has been specified when not allowed or list of cookie names is missing when expected.',
                    'class' => 'InvalidForwardCookiesException',
                ],
                [
                    'class' => 'TooManyHeadersInForwardedValuesException',
                ],
                [
                    'class' => 'InvalidHeadersForS3OriginException',
                ],
                [
                    'reason' =>
                        'The value of Quantity and the size of Items do not match.',
                    'class' => 'InconsistentQuantitiesException',
                ],
                [
                    'reason' =>
                        'You cannot create anymore custom ssl certificates.',
                    'class' => 'TooManyCertificatesException',
                ],
                [
                    'class' => 'InvalidLocationCodeException',
                ],
                [
                    'class' => 'InvalidGeoRestrictionParameterException',
                ],
                [
                    'class' => 'InvalidTTLOrderException',
                ],
                [
                    'class' => 'InvalidWebACLIdException',
                ],
            ],
        ],
        'UpdateStreamingDistribution' => [
            'httpMethod' => 'PUT',
            'uri' => '/2015-07-27/streaming-distribution/{Id}/config',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UpdateStreamingDistributionResult',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'StreamingDistributionConfig',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2015-07-27/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'S3Origin' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DomainName' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'OriginAccessIdentity' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
                'Aliases' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CNAME',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Comment' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Logging' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'required' => true,
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'Bucket' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'Prefix' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
                'TrustedSigners' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'required' => true,
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'Quantity' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'AwsAccountNumber',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'PriceClass' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Enabled' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'xml',
                ],
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'If-Match',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Access denied.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'class' => 'CNAMEAlreadyExistsException',
                ],
                [
                    'reason' => 'Origin and CallerReference cannot be updated.',
                    'class' => 'IllegalUpdateException',
                ],
                [
                    'reason' =>
                        'The If-Match version is missing or not valid for the distribution.',
                    'class' => 'InvalidIfMatchVersionException',
                ],
                [
                    'reason' =>
                        'This operation requires a body. Ensure that the body is present and the Content-Type header is set.',
                    'class' => 'MissingBodyException',
                ],
                [
                    'reason' =>
                        'The specified streaming distribution does not exist.',
                    'class' => 'NoSuchStreamingDistributionException',
                ],
                [
                    'reason' =>
                        'The precondition given in one or more of the request-header fields evaluated to false.',
                    'class' => 'PreconditionFailedException',
                ],
                [
                    'class' => 'TooManyStreamingDistributionCNAMEsException',
                ],
                [
                    'reason' => 'The argument is invalid.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The origin access identity is not valid or doesn\'t exist.',
                    'class' => 'InvalidOriginAccessIdentityException',
                ],
                [
                    'reason' =>
                        'Your request contains more trusted signers than are allowed per distribution.',
                    'class' => 'TooManyTrustedSignersException',
                ],
                [
                    'reason' =>
                        'One or more of your trusted signers do not exist.',
                    'class' => 'TrustedSignerDoesNotExistException',
                ],
                [
                    'reason' =>
                        'The value of Quantity and the size of Items do not match.',
                    'class' => 'InconsistentQuantitiesException',
                ],
            ],
        ],
    ],
    'models' => [
        'CreateCloudFrontOriginAccessIdentityResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Id' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'S3CanonicalUserId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CloudFrontOriginAccessIdentityConfig' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Location' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'CreateDistributionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Id' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModifiedTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'InProgressInvalidationBatches' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'DomainName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ActiveTrustedSigners' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Signer',
                                'type' => 'object',
                                'sentAs' => 'Signer',
                                'properties' => [
                                    'AwsAccountNumber' => [
                                        'type' => 'string',
                                    ],
                                    'KeyPairIds' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'KeyPairId',
                                                    'type' => 'string',
                                                    'sentAs' => 'KeyPairId',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'DistributionConfig' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'Aliases' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CNAME',
                                        'type' => 'string',
                                        'sentAs' => 'CNAME',
                                    ],
                                ],
                            ],
                        ],
                        'DefaultRootObject' => [
                            'type' => 'string',
                        ],
                        'Origins' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Origin',
                                        'type' => 'object',
                                        'sentAs' => 'Origin',
                                        'properties' => [
                                            'Id' => [
                                                'type' => 'string',
                                            ],
                                            'DomainName' => [
                                                'type' => 'string',
                                            ],
                                            'OriginPath' => [
                                                'type' => 'string',
                                            ],
                                            'S3OriginConfig' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'OriginAccessIdentity' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'CustomOriginConfig' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'HTTPPort' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'HTTPSPort' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'OriginProtocolPolicy' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'DefaultCacheBehavior' => [
                            'type' => 'object',
                            'properties' => [
                                'TargetOriginId' => [
                                    'type' => 'string',
                                ],
                                'ForwardedValues' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'QueryString' => [
                                            'type' => 'boolean',
                                        ],
                                        'Cookies' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Forward' => [
                                                    'type' => 'string',
                                                ],
                                                'WhitelistedNames' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Quantity' => [
                                                            'type' => 'numeric',
                                                        ],
                                                        'Items' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'Name',
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'Name',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Headers' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Quantity' => [
                                                    'type' => 'numeric',
                                                ],
                                                'Items' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'Name',
                                                        'type' => 'string',
                                                        'sentAs' => 'Name',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'TrustedSigners' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Enabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'Quantity' => [
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'AwsAccountNumber',
                                                'type' => 'string',
                                                'sentAs' => 'AwsAccountNumber',
                                            ],
                                        ],
                                    ],
                                ],
                                'ViewerProtocolPolicy' => [
                                    'type' => 'string',
                                ],
                                'MinTTL' => [
                                    'type' => 'numeric',
                                ],
                                'AllowedMethods' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Quantity' => [
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Method',
                                                'type' => 'string',
                                                'sentAs' => 'Method',
                                            ],
                                        ],
                                        'CachedMethods' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Quantity' => [
                                                    'type' => 'numeric',
                                                ],
                                                'Items' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'Method',
                                                        'type' => 'string',
                                                        'sentAs' => 'Method',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'SmoothStreaming' => [
                                    'type' => 'boolean',
                                ],
                                'DefaultTTL' => [
                                    'type' => 'numeric',
                                ],
                                'MaxTTL' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'CacheBehaviors' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CacheBehavior',
                                        'type' => 'object',
                                        'sentAs' => 'CacheBehavior',
                                        'properties' => [
                                            'PathPattern' => [
                                                'type' => 'string',
                                            ],
                                            'TargetOriginId' => [
                                                'type' => 'string',
                                            ],
                                            'ForwardedValues' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'QueryString' => [
                                                        'type' => 'boolean',
                                                    ],
                                                    'Cookies' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Forward' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'WhitelistedNames' => [
                                                                'type' =>
                                                                    'object',
                                                                'properties' => [
                                                                    'Quantity' => [
                                                                        'type' =>
                                                                            'numeric',
                                                                    ],
                                                                    'Items' => [
                                                                        'type' =>
                                                                            'array',
                                                                        'items' => [
                                                                            'name' =>
                                                                                'Name',
                                                                            'type' =>
                                                                                'string',
                                                                            'sentAs' =>
                                                                                'Name',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'Headers' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Quantity' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'Items' => [
                                                                'type' =>
                                                                    'array',
                                                                'items' => [
                                                                    'name' =>
                                                                        'Name',
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'Name',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'TrustedSigners' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Enabled' => [
                                                        'type' => 'boolean',
                                                    ],
                                                    'Quantity' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' =>
                                                                'AwsAccountNumber',
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'AwsAccountNumber',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'ViewerProtocolPolicy' => [
                                                'type' => 'string',
                                            ],
                                            'MinTTL' => [
                                                'type' => 'numeric',
                                            ],
                                            'AllowedMethods' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Quantity' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' => 'Method',
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'Method',
                                                        ],
                                                    ],
                                                    'CachedMethods' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Quantity' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'Items' => [
                                                                'type' =>
                                                                    'array',
                                                                'items' => [
                                                                    'name' =>
                                                                        'Method',
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'Method',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'SmoothStreaming' => [
                                                'type' => 'boolean',
                                            ],
                                            'DefaultTTL' => [
                                                'type' => 'numeric',
                                            ],
                                            'MaxTTL' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'CustomErrorResponses' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CustomErrorResponse',
                                        'type' => 'object',
                                        'sentAs' => 'CustomErrorResponse',
                                        'properties' => [
                                            'ErrorCode' => [
                                                'type' => 'numeric',
                                            ],
                                            'ResponsePagePath' => [
                                                'type' => 'string',
                                            ],
                                            'ResponseCode' => [
                                                'type' => 'string',
                                            ],
                                            'ErrorCachingMinTTL' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                        'Logging' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'IncludeCookies' => [
                                    'type' => 'boolean',
                                ],
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'PriceClass' => [
                            'type' => 'string',
                        ],
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'ViewerCertificate' => [
                            'type' => 'object',
                            'properties' => [
                                'IAMCertificateId' => [
                                    'type' => 'string',
                                ],
                                'CloudFrontDefaultCertificate' => [
                                    'type' => 'boolean',
                                ],
                                'SSLSupportMethod' => [
                                    'type' => 'string',
                                ],
                                'MinimumProtocolVersion' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Restrictions' => [
                            'type' => 'object',
                            'properties' => [
                                'GeoRestriction' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RestrictionType' => [
                                            'type' => 'string',
                                        ],
                                        'Quantity' => [
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Location',
                                                'type' => 'string',
                                                'sentAs' => 'Location',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'WebACLId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Location' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'CreateInvalidationResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Location' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'Id' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CreateTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'InvalidationBatch' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Paths' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Path',
                                        'type' => 'string',
                                        'sentAs' => 'Path',
                                    ],
                                ],
                            ],
                        ],
                        'CallerReference' => [
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
        'CreateStreamingDistributionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Id' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModifiedTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DomainName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ActiveTrustedSigners' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Signer',
                                'type' => 'object',
                                'sentAs' => 'Signer',
                                'properties' => [
                                    'AwsAccountNumber' => [
                                        'type' => 'string',
                                    ],
                                    'KeyPairIds' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'KeyPairId',
                                                    'type' => 'string',
                                                    'sentAs' => 'KeyPairId',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'StreamingDistributionConfig' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'S3Origin' => [
                            'type' => 'object',
                            'properties' => [
                                'DomainName' => [
                                    'type' => 'string',
                                ],
                                'OriginAccessIdentity' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Aliases' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CNAME',
                                        'type' => 'string',
                                        'sentAs' => 'CNAME',
                                    ],
                                ],
                            ],
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                        'Logging' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'TrustedSigners' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'AwsAccountNumber',
                                        'type' => 'string',
                                        'sentAs' => 'AwsAccountNumber',
                                    ],
                                ],
                            ],
                        ],
                        'PriceClass' => [
                            'type' => 'string',
                        ],
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
                'Location' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteCloudFrontOriginAccessIdentity2015_07_27Output' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteDistribution2015_07_27Output' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteStreamingDistribution2015_07_27Output' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetCloudFrontOriginAccessIdentityResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Id' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'S3CanonicalUserId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CloudFrontOriginAccessIdentityConfig' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetCloudFrontOriginAccessIdentityConfigResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CallerReference' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Comment' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetDistributionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Id' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModifiedTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'InProgressInvalidationBatches' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'DomainName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ActiveTrustedSigners' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Signer',
                                'type' => 'object',
                                'sentAs' => 'Signer',
                                'properties' => [
                                    'AwsAccountNumber' => [
                                        'type' => 'string',
                                    ],
                                    'KeyPairIds' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'KeyPairId',
                                                    'type' => 'string',
                                                    'sentAs' => 'KeyPairId',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'DistributionConfig' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'Aliases' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CNAME',
                                        'type' => 'string',
                                        'sentAs' => 'CNAME',
                                    ],
                                ],
                            ],
                        ],
                        'DefaultRootObject' => [
                            'type' => 'string',
                        ],
                        'Origins' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Origin',
                                        'type' => 'object',
                                        'sentAs' => 'Origin',
                                        'properties' => [
                                            'Id' => [
                                                'type' => 'string',
                                            ],
                                            'DomainName' => [
                                                'type' => 'string',
                                            ],
                                            'OriginPath' => [
                                                'type' => 'string',
                                            ],
                                            'S3OriginConfig' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'OriginAccessIdentity' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'CustomOriginConfig' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'HTTPPort' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'HTTPSPort' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'OriginProtocolPolicy' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'DefaultCacheBehavior' => [
                            'type' => 'object',
                            'properties' => [
                                'TargetOriginId' => [
                                    'type' => 'string',
                                ],
                                'ForwardedValues' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'QueryString' => [
                                            'type' => 'boolean',
                                        ],
                                        'Cookies' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Forward' => [
                                                    'type' => 'string',
                                                ],
                                                'WhitelistedNames' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Quantity' => [
                                                            'type' => 'numeric',
                                                        ],
                                                        'Items' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'Name',
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'Name',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Headers' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Quantity' => [
                                                    'type' => 'numeric',
                                                ],
                                                'Items' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'Name',
                                                        'type' => 'string',
                                                        'sentAs' => 'Name',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'TrustedSigners' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Enabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'Quantity' => [
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'AwsAccountNumber',
                                                'type' => 'string',
                                                'sentAs' => 'AwsAccountNumber',
                                            ],
                                        ],
                                    ],
                                ],
                                'ViewerProtocolPolicy' => [
                                    'type' => 'string',
                                ],
                                'MinTTL' => [
                                    'type' => 'numeric',
                                ],
                                'AllowedMethods' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Quantity' => [
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Method',
                                                'type' => 'string',
                                                'sentAs' => 'Method',
                                            ],
                                        ],
                                        'CachedMethods' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Quantity' => [
                                                    'type' => 'numeric',
                                                ],
                                                'Items' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'Method',
                                                        'type' => 'string',
                                                        'sentAs' => 'Method',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'SmoothStreaming' => [
                                    'type' => 'boolean',
                                ],
                                'DefaultTTL' => [
                                    'type' => 'numeric',
                                ],
                                'MaxTTL' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'CacheBehaviors' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CacheBehavior',
                                        'type' => 'object',
                                        'sentAs' => 'CacheBehavior',
                                        'properties' => [
                                            'PathPattern' => [
                                                'type' => 'string',
                                            ],
                                            'TargetOriginId' => [
                                                'type' => 'string',
                                            ],
                                            'ForwardedValues' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'QueryString' => [
                                                        'type' => 'boolean',
                                                    ],
                                                    'Cookies' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Forward' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'WhitelistedNames' => [
                                                                'type' =>
                                                                    'object',
                                                                'properties' => [
                                                                    'Quantity' => [
                                                                        'type' =>
                                                                            'numeric',
                                                                    ],
                                                                    'Items' => [
                                                                        'type' =>
                                                                            'array',
                                                                        'items' => [
                                                                            'name' =>
                                                                                'Name',
                                                                            'type' =>
                                                                                'string',
                                                                            'sentAs' =>
                                                                                'Name',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'Headers' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Quantity' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'Items' => [
                                                                'type' =>
                                                                    'array',
                                                                'items' => [
                                                                    'name' =>
                                                                        'Name',
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'Name',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'TrustedSigners' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Enabled' => [
                                                        'type' => 'boolean',
                                                    ],
                                                    'Quantity' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' =>
                                                                'AwsAccountNumber',
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'AwsAccountNumber',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'ViewerProtocolPolicy' => [
                                                'type' => 'string',
                                            ],
                                            'MinTTL' => [
                                                'type' => 'numeric',
                                            ],
                                            'AllowedMethods' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Quantity' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' => 'Method',
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'Method',
                                                        ],
                                                    ],
                                                    'CachedMethods' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Quantity' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'Items' => [
                                                                'type' =>
                                                                    'array',
                                                                'items' => [
                                                                    'name' =>
                                                                        'Method',
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'Method',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'SmoothStreaming' => [
                                                'type' => 'boolean',
                                            ],
                                            'DefaultTTL' => [
                                                'type' => 'numeric',
                                            ],
                                            'MaxTTL' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'CustomErrorResponses' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CustomErrorResponse',
                                        'type' => 'object',
                                        'sentAs' => 'CustomErrorResponse',
                                        'properties' => [
                                            'ErrorCode' => [
                                                'type' => 'numeric',
                                            ],
                                            'ResponsePagePath' => [
                                                'type' => 'string',
                                            ],
                                            'ResponseCode' => [
                                                'type' => 'string',
                                            ],
                                            'ErrorCachingMinTTL' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                        'Logging' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'IncludeCookies' => [
                                    'type' => 'boolean',
                                ],
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'PriceClass' => [
                            'type' => 'string',
                        ],
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'ViewerCertificate' => [
                            'type' => 'object',
                            'properties' => [
                                'IAMCertificateId' => [
                                    'type' => 'string',
                                ],
                                'CloudFrontDefaultCertificate' => [
                                    'type' => 'boolean',
                                ],
                                'SSLSupportMethod' => [
                                    'type' => 'string',
                                ],
                                'MinimumProtocolVersion' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Restrictions' => [
                            'type' => 'object',
                            'properties' => [
                                'GeoRestriction' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RestrictionType' => [
                                            'type' => 'string',
                                        ],
                                        'Quantity' => [
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Location',
                                                'type' => 'string',
                                                'sentAs' => 'Location',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'WebACLId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetDistributionConfigResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CallerReference' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Aliases' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CNAME',
                                'type' => 'string',
                                'sentAs' => 'CNAME',
                            ],
                        ],
                    ],
                ],
                'DefaultRootObject' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Origins' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Origin',
                                'type' => 'object',
                                'sentAs' => 'Origin',
                                'properties' => [
                                    'Id' => [
                                        'type' => 'string',
                                    ],
                                    'DomainName' => [
                                        'type' => 'string',
                                    ],
                                    'OriginPath' => [
                                        'type' => 'string',
                                    ],
                                    'S3OriginConfig' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'OriginAccessIdentity' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'CustomOriginConfig' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'HTTPPort' => [
                                                'type' => 'numeric',
                                            ],
                                            'HTTPSPort' => [
                                                'type' => 'numeric',
                                            ],
                                            'OriginProtocolPolicy' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'DefaultCacheBehavior' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'TargetOriginId' => [
                            'type' => 'string',
                        ],
                        'ForwardedValues' => [
                            'type' => 'object',
                            'properties' => [
                                'QueryString' => [
                                    'type' => 'boolean',
                                ],
                                'Cookies' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Forward' => [
                                            'type' => 'string',
                                        ],
                                        'WhitelistedNames' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Quantity' => [
                                                    'type' => 'numeric',
                                                ],
                                                'Items' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'Name',
                                                        'type' => 'string',
                                                        'sentAs' => 'Name',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'Headers' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Quantity' => [
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Name',
                                                'type' => 'string',
                                                'sentAs' => 'Name',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'TrustedSigners' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'AwsAccountNumber',
                                        'type' => 'string',
                                        'sentAs' => 'AwsAccountNumber',
                                    ],
                                ],
                            ],
                        ],
                        'ViewerProtocolPolicy' => [
                            'type' => 'string',
                        ],
                        'MinTTL' => [
                            'type' => 'numeric',
                        ],
                        'AllowedMethods' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Method',
                                        'type' => 'string',
                                        'sentAs' => 'Method',
                                    ],
                                ],
                                'CachedMethods' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Quantity' => [
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Method',
                                                'type' => 'string',
                                                'sentAs' => 'Method',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'SmoothStreaming' => [
                            'type' => 'boolean',
                        ],
                        'DefaultTTL' => [
                            'type' => 'numeric',
                        ],
                        'MaxTTL' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'CacheBehaviors' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CacheBehavior',
                                'type' => 'object',
                                'sentAs' => 'CacheBehavior',
                                'properties' => [
                                    'PathPattern' => [
                                        'type' => 'string',
                                    ],
                                    'TargetOriginId' => [
                                        'type' => 'string',
                                    ],
                                    'ForwardedValues' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'QueryString' => [
                                                'type' => 'boolean',
                                            ],
                                            'Cookies' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Forward' => [
                                                        'type' => 'string',
                                                    ],
                                                    'WhitelistedNames' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Quantity' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'Items' => [
                                                                'type' =>
                                                                    'array',
                                                                'items' => [
                                                                    'name' =>
                                                                        'Name',
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'Name',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Headers' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Quantity' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' => 'Name',
                                                            'type' => 'string',
                                                            'sentAs' => 'Name',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TrustedSigners' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Enabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' =>
                                                        'AwsAccountNumber',
                                                    'type' => 'string',
                                                    'sentAs' =>
                                                        'AwsAccountNumber',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ViewerProtocolPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'MinTTL' => [
                                        'type' => 'numeric',
                                    ],
                                    'AllowedMethods' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'Method',
                                                    'type' => 'string',
                                                    'sentAs' => 'Method',
                                                ],
                                            ],
                                            'CachedMethods' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Quantity' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' => 'Method',
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'Method',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SmoothStreaming' => [
                                        'type' => 'boolean',
                                    ],
                                    'DefaultTTL' => [
                                        'type' => 'numeric',
                                    ],
                                    'MaxTTL' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'CustomErrorResponses' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CustomErrorResponse',
                                'type' => 'object',
                                'sentAs' => 'CustomErrorResponse',
                                'properties' => [
                                    'ErrorCode' => [
                                        'type' => 'numeric',
                                    ],
                                    'ResponsePagePath' => [
                                        'type' => 'string',
                                    ],
                                    'ResponseCode' => [
                                        'type' => 'string',
                                    ],
                                    'ErrorCachingMinTTL' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Comment' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Logging' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'IncludeCookies' => [
                            'type' => 'boolean',
                        ],
                        'Bucket' => [
                            'type' => 'string',
                        ],
                        'Prefix' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'PriceClass' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Enabled' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'ViewerCertificate' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'IAMCertificateId' => [
                            'type' => 'string',
                        ],
                        'CloudFrontDefaultCertificate' => [
                            'type' => 'boolean',
                        ],
                        'SSLSupportMethod' => [
                            'type' => 'string',
                        ],
                        'MinimumProtocolVersion' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Restrictions' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'GeoRestriction' => [
                            'type' => 'object',
                            'properties' => [
                                'RestrictionType' => [
                                    'type' => 'string',
                                ],
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Location',
                                        'type' => 'string',
                                        'sentAs' => 'Location',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'WebACLId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetInvalidationResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Id' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CreateTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'InvalidationBatch' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Paths' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Path',
                                        'type' => 'string',
                                        'sentAs' => 'Path',
                                    ],
                                ],
                            ],
                        ],
                        'CallerReference' => [
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
        'GetStreamingDistributionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Id' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModifiedTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DomainName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ActiveTrustedSigners' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Signer',
                                'type' => 'object',
                                'sentAs' => 'Signer',
                                'properties' => [
                                    'AwsAccountNumber' => [
                                        'type' => 'string',
                                    ],
                                    'KeyPairIds' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'KeyPairId',
                                                    'type' => 'string',
                                                    'sentAs' => 'KeyPairId',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'StreamingDistributionConfig' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'S3Origin' => [
                            'type' => 'object',
                            'properties' => [
                                'DomainName' => [
                                    'type' => 'string',
                                ],
                                'OriginAccessIdentity' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Aliases' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CNAME',
                                        'type' => 'string',
                                        'sentAs' => 'CNAME',
                                    ],
                                ],
                            ],
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                        'Logging' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'TrustedSigners' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'AwsAccountNumber',
                                        'type' => 'string',
                                        'sentAs' => 'AwsAccountNumber',
                                    ],
                                ],
                            ],
                        ],
                        'PriceClass' => [
                            'type' => 'string',
                        ],
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetStreamingDistributionConfigResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CallerReference' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'S3Origin' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DomainName' => [
                            'type' => 'string',
                        ],
                        'OriginAccessIdentity' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Aliases' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CNAME',
                                'type' => 'string',
                                'sentAs' => 'CNAME',
                            ],
                        ],
                    ],
                ],
                'Comment' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Logging' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'Bucket' => [
                            'type' => 'string',
                        ],
                        'Prefix' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'TrustedSigners' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'AwsAccountNumber',
                                'type' => 'string',
                                'sentAs' => 'AwsAccountNumber',
                            ],
                        ],
                    ],
                ],
                'PriceClass' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Enabled' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListCloudFrontOriginAccessIdentitiesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Quantity' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'Items' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'CloudFrontOriginAccessIdentitySummary',
                        'type' => 'object',
                        'sentAs' => 'CloudFrontOriginAccessIdentitySummary',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'S3CanonicalUserId' => [
                                'type' => 'string',
                            ],
                            'Comment' => [
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
        'ListDistributionsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Quantity' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'Items' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DistributionSummary',
                        'type' => 'object',
                        'sentAs' => 'DistributionSummary',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'LastModifiedTime' => [
                                'type' => 'string',
                            ],
                            'DomainName' => [
                                'type' => 'string',
                            ],
                            'Aliases' => [
                                'type' => 'object',
                                'properties' => [
                                    'Quantity' => [
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'CNAME',
                                            'type' => 'string',
                                            'sentAs' => 'CNAME',
                                        ],
                                    ],
                                ],
                            ],
                            'Origins' => [
                                'type' => 'object',
                                'properties' => [
                                    'Quantity' => [
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Origin',
                                            'type' => 'object',
                                            'sentAs' => 'Origin',
                                            'properties' => [
                                                'Id' => [
                                                    'type' => 'string',
                                                ],
                                                'DomainName' => [
                                                    'type' => 'string',
                                                ],
                                                'OriginPath' => [
                                                    'type' => 'string',
                                                ],
                                                'S3OriginConfig' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'OriginAccessIdentity' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                                'CustomOriginConfig' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'HTTPPort' => [
                                                            'type' => 'numeric',
                                                        ],
                                                        'HTTPSPort' => [
                                                            'type' => 'numeric',
                                                        ],
                                                        'OriginProtocolPolicy' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'DefaultCacheBehavior' => [
                                'type' => 'object',
                                'properties' => [
                                    'TargetOriginId' => [
                                        'type' => 'string',
                                    ],
                                    'ForwardedValues' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'QueryString' => [
                                                'type' => 'boolean',
                                            ],
                                            'Cookies' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Forward' => [
                                                        'type' => 'string',
                                                    ],
                                                    'WhitelistedNames' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Quantity' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'Items' => [
                                                                'type' =>
                                                                    'array',
                                                                'items' => [
                                                                    'name' =>
                                                                        'Name',
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'Name',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Headers' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Quantity' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' => 'Name',
                                                            'type' => 'string',
                                                            'sentAs' => 'Name',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TrustedSigners' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Enabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' =>
                                                        'AwsAccountNumber',
                                                    'type' => 'string',
                                                    'sentAs' =>
                                                        'AwsAccountNumber',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ViewerProtocolPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'MinTTL' => [
                                        'type' => 'numeric',
                                    ],
                                    'AllowedMethods' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'Method',
                                                    'type' => 'string',
                                                    'sentAs' => 'Method',
                                                ],
                                            ],
                                            'CachedMethods' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Quantity' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' => 'Method',
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'Method',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SmoothStreaming' => [
                                        'type' => 'boolean',
                                    ],
                                    'DefaultTTL' => [
                                        'type' => 'numeric',
                                    ],
                                    'MaxTTL' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'CacheBehaviors' => [
                                'type' => 'object',
                                'properties' => [
                                    'Quantity' => [
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'CacheBehavior',
                                            'type' => 'object',
                                            'sentAs' => 'CacheBehavior',
                                            'properties' => [
                                                'PathPattern' => [
                                                    'type' => 'string',
                                                ],
                                                'TargetOriginId' => [
                                                    'type' => 'string',
                                                ],
                                                'ForwardedValues' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'QueryString' => [
                                                            'type' => 'boolean',
                                                        ],
                                                        'Cookies' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Forward' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'WhitelistedNames' => [
                                                                    'type' =>
                                                                        'object',
                                                                    'properties' => [
                                                                        'Quantity' => [
                                                                            'type' =>
                                                                                'numeric',
                                                                        ],
                                                                        'Items' => [
                                                                            'type' =>
                                                                                'array',
                                                                            'items' => [
                                                                                'name' =>
                                                                                    'Name',
                                                                                'type' =>
                                                                                    'string',
                                                                                'sentAs' =>
                                                                                    'Name',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'Headers' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Quantity' => [
                                                                    'type' =>
                                                                        'numeric',
                                                                ],
                                                                'Items' => [
                                                                    'type' =>
                                                                        'array',
                                                                    'items' => [
                                                                        'name' =>
                                                                            'Name',
                                                                        'type' =>
                                                                            'string',
                                                                        'sentAs' =>
                                                                            'Name',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'TrustedSigners' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Enabled' => [
                                                            'type' => 'boolean',
                                                        ],
                                                        'Quantity' => [
                                                            'type' => 'numeric',
                                                        ],
                                                        'Items' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'AwsAccountNumber',
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'AwsAccountNumber',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ViewerProtocolPolicy' => [
                                                    'type' => 'string',
                                                ],
                                                'MinTTL' => [
                                                    'type' => 'numeric',
                                                ],
                                                'AllowedMethods' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Quantity' => [
                                                            'type' => 'numeric',
                                                        ],
                                                        'Items' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'Method',
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'Method',
                                                            ],
                                                        ],
                                                        'CachedMethods' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Quantity' => [
                                                                    'type' =>
                                                                        'numeric',
                                                                ],
                                                                'Items' => [
                                                                    'type' =>
                                                                        'array',
                                                                    'items' => [
                                                                        'name' =>
                                                                            'Method',
                                                                        'type' =>
                                                                            'string',
                                                                        'sentAs' =>
                                                                            'Method',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'SmoothStreaming' => [
                                                    'type' => 'boolean',
                                                ],
                                                'DefaultTTL' => [
                                                    'type' => 'numeric',
                                                ],
                                                'MaxTTL' => [
                                                    'type' => 'numeric',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'CustomErrorResponses' => [
                                'type' => 'object',
                                'properties' => [
                                    'Quantity' => [
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'CustomErrorResponse',
                                            'type' => 'object',
                                            'sentAs' => 'CustomErrorResponse',
                                            'properties' => [
                                                'ErrorCode' => [
                                                    'type' => 'numeric',
                                                ],
                                                'ResponsePagePath' => [
                                                    'type' => 'string',
                                                ],
                                                'ResponseCode' => [
                                                    'type' => 'string',
                                                ],
                                                'ErrorCachingMinTTL' => [
                                                    'type' => 'numeric',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Comment' => [
                                'type' => 'string',
                            ],
                            'PriceClass' => [
                                'type' => 'string',
                            ],
                            'Enabled' => [
                                'type' => 'boolean',
                            ],
                            'ViewerCertificate' => [
                                'type' => 'object',
                                'properties' => [
                                    'IAMCertificateId' => [
                                        'type' => 'string',
                                    ],
                                    'CloudFrontDefaultCertificate' => [
                                        'type' => 'boolean',
                                    ],
                                    'SSLSupportMethod' => [
                                        'type' => 'string',
                                    ],
                                    'MinimumProtocolVersion' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Restrictions' => [
                                'type' => 'object',
                                'properties' => [
                                    'GeoRestriction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'RestrictionType' => [
                                                'type' => 'string',
                                            ],
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'Location',
                                                    'type' => 'string',
                                                    'sentAs' => 'Location',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'WebACLId' => [
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
        'ListDistributionsByWebACLIdResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Quantity' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'Items' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DistributionSummary',
                        'type' => 'object',
                        'sentAs' => 'DistributionSummary',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'LastModifiedTime' => [
                                'type' => 'string',
                            ],
                            'DomainName' => [
                                'type' => 'string',
                            ],
                            'Aliases' => [
                                'type' => 'object',
                                'properties' => [
                                    'Quantity' => [
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'CNAME',
                                            'type' => 'string',
                                            'sentAs' => 'CNAME',
                                        ],
                                    ],
                                ],
                            ],
                            'Origins' => [
                                'type' => 'object',
                                'properties' => [
                                    'Quantity' => [
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Origin',
                                            'type' => 'object',
                                            'sentAs' => 'Origin',
                                            'properties' => [
                                                'Id' => [
                                                    'type' => 'string',
                                                ],
                                                'DomainName' => [
                                                    'type' => 'string',
                                                ],
                                                'OriginPath' => [
                                                    'type' => 'string',
                                                ],
                                                'S3OriginConfig' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'OriginAccessIdentity' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                                'CustomOriginConfig' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'HTTPPort' => [
                                                            'type' => 'numeric',
                                                        ],
                                                        'HTTPSPort' => [
                                                            'type' => 'numeric',
                                                        ],
                                                        'OriginProtocolPolicy' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'DefaultCacheBehavior' => [
                                'type' => 'object',
                                'properties' => [
                                    'TargetOriginId' => [
                                        'type' => 'string',
                                    ],
                                    'ForwardedValues' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'QueryString' => [
                                                'type' => 'boolean',
                                            ],
                                            'Cookies' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Forward' => [
                                                        'type' => 'string',
                                                    ],
                                                    'WhitelistedNames' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Quantity' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'Items' => [
                                                                'type' =>
                                                                    'array',
                                                                'items' => [
                                                                    'name' =>
                                                                        'Name',
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'Name',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Headers' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Quantity' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' => 'Name',
                                                            'type' => 'string',
                                                            'sentAs' => 'Name',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TrustedSigners' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Enabled' => [
                                                'type' => 'boolean',
                                            ],
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' =>
                                                        'AwsAccountNumber',
                                                    'type' => 'string',
                                                    'sentAs' =>
                                                        'AwsAccountNumber',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ViewerProtocolPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'MinTTL' => [
                                        'type' => 'numeric',
                                    ],
                                    'AllowedMethods' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'Method',
                                                    'type' => 'string',
                                                    'sentAs' => 'Method',
                                                ],
                                            ],
                                            'CachedMethods' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Quantity' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' => 'Method',
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'Method',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SmoothStreaming' => [
                                        'type' => 'boolean',
                                    ],
                                    'DefaultTTL' => [
                                        'type' => 'numeric',
                                    ],
                                    'MaxTTL' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'CacheBehaviors' => [
                                'type' => 'object',
                                'properties' => [
                                    'Quantity' => [
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'CacheBehavior',
                                            'type' => 'object',
                                            'sentAs' => 'CacheBehavior',
                                            'properties' => [
                                                'PathPattern' => [
                                                    'type' => 'string',
                                                ],
                                                'TargetOriginId' => [
                                                    'type' => 'string',
                                                ],
                                                'ForwardedValues' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'QueryString' => [
                                                            'type' => 'boolean',
                                                        ],
                                                        'Cookies' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Forward' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'WhitelistedNames' => [
                                                                    'type' =>
                                                                        'object',
                                                                    'properties' => [
                                                                        'Quantity' => [
                                                                            'type' =>
                                                                                'numeric',
                                                                        ],
                                                                        'Items' => [
                                                                            'type' =>
                                                                                'array',
                                                                            'items' => [
                                                                                'name' =>
                                                                                    'Name',
                                                                                'type' =>
                                                                                    'string',
                                                                                'sentAs' =>
                                                                                    'Name',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'Headers' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Quantity' => [
                                                                    'type' =>
                                                                        'numeric',
                                                                ],
                                                                'Items' => [
                                                                    'type' =>
                                                                        'array',
                                                                    'items' => [
                                                                        'name' =>
                                                                            'Name',
                                                                        'type' =>
                                                                            'string',
                                                                        'sentAs' =>
                                                                            'Name',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'TrustedSigners' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Enabled' => [
                                                            'type' => 'boolean',
                                                        ],
                                                        'Quantity' => [
                                                            'type' => 'numeric',
                                                        ],
                                                        'Items' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'AwsAccountNumber',
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'AwsAccountNumber',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ViewerProtocolPolicy' => [
                                                    'type' => 'string',
                                                ],
                                                'MinTTL' => [
                                                    'type' => 'numeric',
                                                ],
                                                'AllowedMethods' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Quantity' => [
                                                            'type' => 'numeric',
                                                        ],
                                                        'Items' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'Method',
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'Method',
                                                            ],
                                                        ],
                                                        'CachedMethods' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Quantity' => [
                                                                    'type' =>
                                                                        'numeric',
                                                                ],
                                                                'Items' => [
                                                                    'type' =>
                                                                        'array',
                                                                    'items' => [
                                                                        'name' =>
                                                                            'Method',
                                                                        'type' =>
                                                                            'string',
                                                                        'sentAs' =>
                                                                            'Method',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'SmoothStreaming' => [
                                                    'type' => 'boolean',
                                                ],
                                                'DefaultTTL' => [
                                                    'type' => 'numeric',
                                                ],
                                                'MaxTTL' => [
                                                    'type' => 'numeric',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'CustomErrorResponses' => [
                                'type' => 'object',
                                'properties' => [
                                    'Quantity' => [
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'CustomErrorResponse',
                                            'type' => 'object',
                                            'sentAs' => 'CustomErrorResponse',
                                            'properties' => [
                                                'ErrorCode' => [
                                                    'type' => 'numeric',
                                                ],
                                                'ResponsePagePath' => [
                                                    'type' => 'string',
                                                ],
                                                'ResponseCode' => [
                                                    'type' => 'string',
                                                ],
                                                'ErrorCachingMinTTL' => [
                                                    'type' => 'numeric',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Comment' => [
                                'type' => 'string',
                            ],
                            'PriceClass' => [
                                'type' => 'string',
                            ],
                            'Enabled' => [
                                'type' => 'boolean',
                            ],
                            'ViewerCertificate' => [
                                'type' => 'object',
                                'properties' => [
                                    'IAMCertificateId' => [
                                        'type' => 'string',
                                    ],
                                    'CloudFrontDefaultCertificate' => [
                                        'type' => 'boolean',
                                    ],
                                    'SSLSupportMethod' => [
                                        'type' => 'string',
                                    ],
                                    'MinimumProtocolVersion' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Restrictions' => [
                                'type' => 'object',
                                'properties' => [
                                    'GeoRestriction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'RestrictionType' => [
                                                'type' => 'string',
                                            ],
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'Location',
                                                    'type' => 'string',
                                                    'sentAs' => 'Location',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'WebACLId' => [
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
        'ListInvalidationsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Quantity' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'Items' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'InvalidationSummary',
                        'type' => 'object',
                        'sentAs' => 'InvalidationSummary',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'CreateTime' => [
                                'type' => 'string',
                            ],
                            'Status' => [
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
        'ListStreamingDistributionsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Quantity' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'Items' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'StreamingDistributionSummary',
                        'type' => 'object',
                        'sentAs' => 'StreamingDistributionSummary',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'LastModifiedTime' => [
                                'type' => 'string',
                            ],
                            'DomainName' => [
                                'type' => 'string',
                            ],
                            'S3Origin' => [
                                'type' => 'object',
                                'properties' => [
                                    'DomainName' => [
                                        'type' => 'string',
                                    ],
                                    'OriginAccessIdentity' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Aliases' => [
                                'type' => 'object',
                                'properties' => [
                                    'Quantity' => [
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'CNAME',
                                            'type' => 'string',
                                            'sentAs' => 'CNAME',
                                        ],
                                    ],
                                ],
                            ],
                            'TrustedSigners' => [
                                'type' => 'object',
                                'properties' => [
                                    'Enabled' => [
                                        'type' => 'boolean',
                                    ],
                                    'Quantity' => [
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'AwsAccountNumber',
                                            'type' => 'string',
                                            'sentAs' => 'AwsAccountNumber',
                                        ],
                                    ],
                                ],
                            ],
                            'Comment' => [
                                'type' => 'string',
                            ],
                            'PriceClass' => [
                                'type' => 'string',
                            ],
                            'Enabled' => [
                                'type' => 'boolean',
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
        'UpdateCloudFrontOriginAccessIdentityResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Id' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'S3CanonicalUserId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CloudFrontOriginAccessIdentityConfig' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'UpdateDistributionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Id' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModifiedTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'InProgressInvalidationBatches' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'DomainName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ActiveTrustedSigners' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Signer',
                                'type' => 'object',
                                'sentAs' => 'Signer',
                                'properties' => [
                                    'AwsAccountNumber' => [
                                        'type' => 'string',
                                    ],
                                    'KeyPairIds' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'KeyPairId',
                                                    'type' => 'string',
                                                    'sentAs' => 'KeyPairId',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'DistributionConfig' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'Aliases' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CNAME',
                                        'type' => 'string',
                                        'sentAs' => 'CNAME',
                                    ],
                                ],
                            ],
                        ],
                        'DefaultRootObject' => [
                            'type' => 'string',
                        ],
                        'Origins' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Origin',
                                        'type' => 'object',
                                        'sentAs' => 'Origin',
                                        'properties' => [
                                            'Id' => [
                                                'type' => 'string',
                                            ],
                                            'DomainName' => [
                                                'type' => 'string',
                                            ],
                                            'OriginPath' => [
                                                'type' => 'string',
                                            ],
                                            'S3OriginConfig' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'OriginAccessIdentity' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'CustomOriginConfig' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'HTTPPort' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'HTTPSPort' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'OriginProtocolPolicy' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'DefaultCacheBehavior' => [
                            'type' => 'object',
                            'properties' => [
                                'TargetOriginId' => [
                                    'type' => 'string',
                                ],
                                'ForwardedValues' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'QueryString' => [
                                            'type' => 'boolean',
                                        ],
                                        'Cookies' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Forward' => [
                                                    'type' => 'string',
                                                ],
                                                'WhitelistedNames' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Quantity' => [
                                                            'type' => 'numeric',
                                                        ],
                                                        'Items' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'Name',
                                                                'type' =>
                                                                    'string',
                                                                'sentAs' =>
                                                                    'Name',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Headers' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Quantity' => [
                                                    'type' => 'numeric',
                                                ],
                                                'Items' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'Name',
                                                        'type' => 'string',
                                                        'sentAs' => 'Name',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'TrustedSigners' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Enabled' => [
                                            'type' => 'boolean',
                                        ],
                                        'Quantity' => [
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'AwsAccountNumber',
                                                'type' => 'string',
                                                'sentAs' => 'AwsAccountNumber',
                                            ],
                                        ],
                                    ],
                                ],
                                'ViewerProtocolPolicy' => [
                                    'type' => 'string',
                                ],
                                'MinTTL' => [
                                    'type' => 'numeric',
                                ],
                                'AllowedMethods' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Quantity' => [
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Method',
                                                'type' => 'string',
                                                'sentAs' => 'Method',
                                            ],
                                        ],
                                        'CachedMethods' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Quantity' => [
                                                    'type' => 'numeric',
                                                ],
                                                'Items' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'Method',
                                                        'type' => 'string',
                                                        'sentAs' => 'Method',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'SmoothStreaming' => [
                                    'type' => 'boolean',
                                ],
                                'DefaultTTL' => [
                                    'type' => 'numeric',
                                ],
                                'MaxTTL' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'CacheBehaviors' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CacheBehavior',
                                        'type' => 'object',
                                        'sentAs' => 'CacheBehavior',
                                        'properties' => [
                                            'PathPattern' => [
                                                'type' => 'string',
                                            ],
                                            'TargetOriginId' => [
                                                'type' => 'string',
                                            ],
                                            'ForwardedValues' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'QueryString' => [
                                                        'type' => 'boolean',
                                                    ],
                                                    'Cookies' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Forward' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'WhitelistedNames' => [
                                                                'type' =>
                                                                    'object',
                                                                'properties' => [
                                                                    'Quantity' => [
                                                                        'type' =>
                                                                            'numeric',
                                                                    ],
                                                                    'Items' => [
                                                                        'type' =>
                                                                            'array',
                                                                        'items' => [
                                                                            'name' =>
                                                                                'Name',
                                                                            'type' =>
                                                                                'string',
                                                                            'sentAs' =>
                                                                                'Name',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'Headers' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Quantity' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'Items' => [
                                                                'type' =>
                                                                    'array',
                                                                'items' => [
                                                                    'name' =>
                                                                        'Name',
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'Name',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'TrustedSigners' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Enabled' => [
                                                        'type' => 'boolean',
                                                    ],
                                                    'Quantity' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' =>
                                                                'AwsAccountNumber',
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'AwsAccountNumber',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'ViewerProtocolPolicy' => [
                                                'type' => 'string',
                                            ],
                                            'MinTTL' => [
                                                'type' => 'numeric',
                                            ],
                                            'AllowedMethods' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Quantity' => [
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' => 'Method',
                                                            'type' => 'string',
                                                            'sentAs' =>
                                                                'Method',
                                                        ],
                                                    ],
                                                    'CachedMethods' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Quantity' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'Items' => [
                                                                'type' =>
                                                                    'array',
                                                                'items' => [
                                                                    'name' =>
                                                                        'Method',
                                                                    'type' =>
                                                                        'string',
                                                                    'sentAs' =>
                                                                        'Method',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'SmoothStreaming' => [
                                                'type' => 'boolean',
                                            ],
                                            'DefaultTTL' => [
                                                'type' => 'numeric',
                                            ],
                                            'MaxTTL' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'CustomErrorResponses' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CustomErrorResponse',
                                        'type' => 'object',
                                        'sentAs' => 'CustomErrorResponse',
                                        'properties' => [
                                            'ErrorCode' => [
                                                'type' => 'numeric',
                                            ],
                                            'ResponsePagePath' => [
                                                'type' => 'string',
                                            ],
                                            'ResponseCode' => [
                                                'type' => 'string',
                                            ],
                                            'ErrorCachingMinTTL' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                        'Logging' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'IncludeCookies' => [
                                    'type' => 'boolean',
                                ],
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'PriceClass' => [
                            'type' => 'string',
                        ],
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'ViewerCertificate' => [
                            'type' => 'object',
                            'properties' => [
                                'IAMCertificateId' => [
                                    'type' => 'string',
                                ],
                                'CloudFrontDefaultCertificate' => [
                                    'type' => 'boolean',
                                ],
                                'SSLSupportMethod' => [
                                    'type' => 'string',
                                ],
                                'MinimumProtocolVersion' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Restrictions' => [
                            'type' => 'object',
                            'properties' => [
                                'GeoRestriction' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RestrictionType' => [
                                            'type' => 'string',
                                        ],
                                        'Quantity' => [
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Location',
                                                'type' => 'string',
                                                'sentAs' => 'Location',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'WebACLId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'UpdateStreamingDistributionResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Id' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModifiedTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DomainName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ActiveTrustedSigners' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Signer',
                                'type' => 'object',
                                'sentAs' => 'Signer',
                                'properties' => [
                                    'AwsAccountNumber' => [
                                        'type' => 'string',
                                    ],
                                    'KeyPairIds' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'KeyPairId',
                                                    'type' => 'string',
                                                    'sentAs' => 'KeyPairId',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'StreamingDistributionConfig' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'type' => 'string',
                        ],
                        'S3Origin' => [
                            'type' => 'object',
                            'properties' => [
                                'DomainName' => [
                                    'type' => 'string',
                                ],
                                'OriginAccessIdentity' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Aliases' => [
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CNAME',
                                        'type' => 'string',
                                        'sentAs' => 'CNAME',
                                    ],
                                ],
                            ],
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                        'Logging' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'TrustedSigners' => [
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'type' => 'boolean',
                                ],
                                'Quantity' => [
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'AwsAccountNumber',
                                        'type' => 'string',
                                        'sentAs' => 'AwsAccountNumber',
                                    ],
                                ],
                            ],
                        ],
                        'PriceClass' => [
                            'type' => 'string',
                        ],
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListCloudFrontOriginAccessIdentities' => [
            'input_token' => 'Marker',
            'output_token' => 'CloudFrontOriginAccessIdentityList/NextMarker',
            'limit_key' => 'MaxItems',
            'more_results' => 'CloudFrontOriginAccessIdentityList/IsTruncated',
            'result_key' => 'CloudFrontOriginAccessIdentityList/Items',
        ],
        'ListDistributions' => [
            'input_token' => 'Marker',
            'output_token' => 'DistributionList/NextMarker',
            'limit_key' => 'MaxItems',
            'more_results' => 'DistributionList/IsTruncated',
            'result_key' => 'DistributionList/Items',
        ],
        'ListInvalidations' => [
            'input_token' => 'Marker',
            'output_token' => 'InvalidationList/NextMarker',
            'limit_key' => 'MaxItems',
            'more_results' => 'InvalidationList/IsTruncated',
            'result_key' => 'InvalidationList/Items',
        ],
        'ListStreamingDistributions' => [
            'input_token' => 'Marker',
            'output_token' => 'StreamingDistributionList/NextMarker',
            'limit_key' => 'MaxItems',
            'more_results' => 'StreamingDistributionList/IsTruncated',
            'result_key' => 'StreamingDistributionList/Items',
        ],
    ],
    'waiters' => [
        '__default__' => [
            'success.type' => 'output',
            'success.path' => 'Status',
        ],
        'StreamingDistributionDeployed' => [
            'operation' => 'GetStreamingDistribution',
            'interval' => 60,
            'max_attempts' => 25,
            'success.value' => 'Deployed',
        ],
        'DistributionDeployed' => [
            'operation' => 'GetDistribution',
            'interval' => 60,
            'max_attempts' => 25,
            'success.value' => 'Deployed',
        ],
        'InvalidationCompleted' => [
            'operation' => 'GetInvalidation',
            'interval' => 20,
            'max_attempts' => 30,
            'success.value' => 'Completed',
        ],
    ],
];
