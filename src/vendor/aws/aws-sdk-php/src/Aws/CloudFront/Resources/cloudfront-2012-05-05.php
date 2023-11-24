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
    'apiVersion' => '2012-05-05',
    'endpointPrefix' => 'cloudfront',
    'serviceFullName' => 'Amazon CloudFront',
    'serviceAbbreviation' => 'CloudFront',
    'serviceType' => 'rest-xml',
    'globalEndpoint' => 'cloudfront.amazonaws.com',
    'signatureVersion' => 'cloudfront',
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
            'uri' => '/2012-05-05/origin-access-identity/cloudfront',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateCloudFrontOriginAccessIdentityResult',
            'responseType' => 'model',
            'summary' => 'Create a new origin access identity.',
            'data' => [
                'xmlRoot' => [
                    'name' => 'CloudFrontOriginAccessIdentityConfig',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2012-05-05/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'description' =>
                        'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the CloudFrontOriginAccessIdentityConfig object), a new origin access identity is created. If the CallerReference is a value you already sent in a previous request to create an identity, and the content of the CloudFrontOriginAccessIdentityConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create an identity but the content of the CloudFrontOriginAccessIdentityConfig is different from the original request, CloudFront returns a CloudFrontOriginAccessIdentityAlreadyExists error.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Comment' => [
                    'required' => true,
                    'description' =>
                        'Any comments you want to include about the origin access identity.',
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
                    'class' =>
                        'CloudFrontOriginAccessIdentityAlreadyExistsException',
                ],
                [
                    'class' => 'MissingBodyException',
                ],
                [
                    'class' =>
                        'TooManyCloudFrontOriginAccessIdentitiesException',
                ],
                [
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'class' => 'InconsistentQuantitiesException',
                ],
            ],
        ],
        'CreateDistribution' => [
            'httpMethod' => 'POST',
            'uri' => '/2012-05-05/distribution',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateDistributionResult',
            'responseType' => 'model',
            'summary' => 'Create a new distribution.',
            'data' => [
                'xmlRoot' => [
                    'name' => 'DistributionConfig',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2012-05-05/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'description' =>
                        'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the DistributionConfig object), a new distribution is created. If the CallerReference is a value you already sent in a previous request to create a distribution, and the content of the DistributionConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a distribution but the content of the DistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Aliases' => [
                    'required' => true,
                    'description' =>
                        'A complex type that contains information about CNAMEs (alternate domain names), if any, for this distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'description' =>
                                'The number of CNAMEs, if any, for this distribution.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'CNAME',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'DefaultRootObject' => [
                    'required' => true,
                    'description' =>
                        'The object that you want CloudFront to return (for example, index.html) when an end user requests the root URL for your distribution (http://www.example.com) instead of an object in your distribution (http://www.example.com/index.html). Specifying a default root object avoids exposing the contents of your distribution. If you don\'t want to specify a default root object when you create a distribution, include an empty DefaultRootObject element. To delete the default root object from an existing distribution, update the distribution configuration and include an empty DefaultRootObject element. To replace the default root object, update the distribution configuration and specify the new object.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Origins' => [
                    'required' => true,
                    'description' =>
                        'A complex type that contains information about origins for this distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'description' =>
                                'The number of origins for this distribution.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'A complex type that contains origins for this distribution.',
                            'type' => 'array',
                            'minItems' => 1,
                            'items' => [
                                'name' => 'Origin',
                                'description' =>
                                    'A complex type that describes the Amazon S3 bucket or the HTTP server (for example, a web server) from which CloudFront gets your files.You must create at least one origin.',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'required' => true,
                                        'description' =>
                                            'A unique identifier for the origin. The value of Id must be unique within the distribution. You use the value of Id when you create a cache behavior. The Id identifies the origin that CloudFront routes a request to when the request matches the path pattern for that cache behavior.',
                                        'type' => 'string',
                                    ],
                                    'DomainName' => [
                                        'required' => true,
                                        'description' =>
                                            'Amazon S3 origins: The DNS name of the Amazon S3 bucket from which you want CloudFront to get objects for this origin, for example, myawsbucket.s3.amazonaws.com. Custom origins: The DNS domain name for the HTTP server from which you want CloudFront to get objects for this origin, for example, www.example.com.',
                                        'type' => 'string',
                                    ],
                                    'S3OriginConfig' => [
                                        'description' =>
                                            'A complex type that contains information about the Amazon S3 origin. If the origin is a custom origin, use the CustomOriginConfig element instead.',
                                        'type' => 'object',
                                        'properties' => [
                                            'OriginAccessIdentity' => [
                                                'required' => true,
                                                'description' =>
                                                    'The CloudFront origin access identity to associate with the origin. Use an origin access identity to configure the origin so that end users can only access objects in an Amazon S3 bucket through CloudFront. If you want end users to be able to access objects using either the CloudFront URL or the Amazon S3 URL, specify an empty OriginAccessIdentity element. To delete the origin access identity from an existing distribution, update the distribution configuration and include an empty OriginAccessIdentity element. To replace the origin access identity, update the distribution configuration and specify the new origin access identity.',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'CustomOriginConfig' => [
                                        'description' =>
                                            'A complex type that contains information about a custom origin. If the origin is an Amazon S3 bucket, use the S3OriginConfig element instead.',
                                        'type' => 'object',
                                        'properties' => [
                                            'HTTPPort' => [
                                                'required' => true,
                                                'description' =>
                                                    'The HTTP port the custom origin listens on.',
                                                'type' => 'numeric',
                                            ],
                                            'HTTPSPort' => [
                                                'required' => true,
                                                'description' =>
                                                    'The HTTPS port the custom origin listens on.',
                                                'type' => 'numeric',
                                            ],
                                            'OriginProtocolPolicy' => [
                                                'required' => true,
                                                'description' =>
                                                    'The origin protocol policy to apply to your origin.',
                                                'type' => 'string',
                                                'enum' => [
                                                    'http-only',
                                                    'match-viewer',
                                                ],
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
                    'description' =>
                        'A complex type that describes the default cache behavior if you do not specify a CacheBehavior element or if files don\'t match any of the values of PathPattern in CacheBehavior elements.You must create exactly one default cache behavior.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'TargetOriginId' => [
                            'required' => true,
                            'description' =>
                                'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                            'type' => 'string',
                        ],
                        'ForwardedValues' => [
                            'required' => true,
                            'description' =>
                                'A complex type that specifies how CloudFront handles query strings.',
                            'type' => 'object',
                            'properties' => [
                                'QueryString' => [
                                    'required' => true,
                                    'description' =>
                                        'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                        'TrustedSigners' => [
                            'required' => true,
                            'description' =>
                                'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'required' => true,
                                    'description' =>
                                        'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'Quantity' => [
                                    'required' => true,
                                    'description' =>
                                        'The number of trusted signers for this cache behavior.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                            'description' =>
                                'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                            'type' => 'string',
                            'enum' => ['allow-all', 'https-only'],
                        ],
                        'MinTTL' => [
                            'required' => true,
                            'description' =>
                                'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'CacheBehaviors' => [
                    'required' => true,
                    'description' =>
                        'A complex type that contains zero or more CacheBehavior elements.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'description' =>
                                'The number of cache behaviors for this distribution.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'Optional: A complex type that contains cache behaviors for this distribution. If Quantity is 0, you can omit Items.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'CacheBehavior',
                                'description' =>
                                    'A complex type that describes how CloudFront processes requests. You can create up to 10 cache behaviors.You must create at least as many cache behaviors (including the default cache behavior) as you have origins if you want CloudFront to distribute objects from all of the origins. Each cache behavior specifies the one origin from which you want CloudFront to get objects. If you have two origins and only the default cache behavior, the default cache behavior will cause CloudFront to get objects from one of the origins, but the other origin will never be used. If you don\'t want to specify any cache behaviors, include only an empty CacheBehaviors element. Don\'t include an empty CacheBehavior element, or CloudFront returns a MalformedXML error. To delete all cache behaviors in an existing distribution, update the distribution configuration and include only an empty CacheBehaviors element. To add, change, or remove one or more cache behaviors, update the distribution configuration and specify all of the cache behaviors that you want to include in the updated distribution.',
                                'type' => 'object',
                                'properties' => [
                                    'PathPattern' => [
                                        'required' => true,
                                        'description' =>
                                            'The pattern (for example, images/*.jpg) that specifies which requests you want this cache behavior to apply to. When CloudFront receives an end-user request, the requested path is compared with path patterns in the order in which cache behaviors are listed in the distribution. The path pattern for the default cache behavior is * and cannot be changed. If the request for an object does not match the path pattern for any cache behaviors, CloudFront applies the behavior in the default cache behavior.',
                                        'type' => 'string',
                                    ],
                                    'TargetOriginId' => [
                                        'required' => true,
                                        'description' =>
                                            'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                                        'type' => 'string',
                                    ],
                                    'ForwardedValues' => [
                                        'required' => true,
                                        'description' =>
                                            'A complex type that specifies how CloudFront handles query strings.',
                                        'type' => 'object',
                                        'properties' => [
                                            'QueryString' => [
                                                'required' => true,
                                                'description' =>
                                                    'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                                'type' => 'boolean',
                                                'format' => 'boolean-string',
                                            ],
                                        ],
                                    ],
                                    'TrustedSigners' => [
                                        'required' => true,
                                        'description' =>
                                            'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                                        'type' => 'object',
                                        'properties' => [
                                            'Enabled' => [
                                                'required' => true,
                                                'description' =>
                                                    'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                                'type' => 'boolean',
                                                'format' => 'boolean-string',
                                            ],
                                            'Quantity' => [
                                                'required' => true,
                                                'description' =>
                                                    'The number of trusted signers for this cache behavior.',
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'description' =>
                                                    'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                                        'description' =>
                                            'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                                        'type' => 'string',
                                        'enum' => ['allow-all', 'https-only'],
                                    ],
                                    'MinTTL' => [
                                        'required' => true,
                                        'description' =>
                                            'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Comment' => [
                    'required' => true,
                    'description' =>
                        'Any comments you want to include about the distribution.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Logging' => [
                    'required' => true,
                    'description' =>
                        'A complex type that controls whether access logs are written for the distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'required' => true,
                            'description' =>
                                'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a distribution or if you want to disable logging for an existing distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket and Prefix, the values are automatically deleted.',
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'Bucket' => [
                            'required' => true,
                            'description' =>
                                'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
                            'type' => 'string',
                        ],
                        'Prefix' => [
                            'required' => true,
                            'description' =>
                                'An optional string that you want CloudFront to prefix to the access log filenames for this distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'Enabled' => [
                    'required' => true,
                    'description' =>
                        'Whether the distribution is enabled to accept end user requests for content.',
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
                    'class' => 'DistributionAlreadyExistsException',
                ],
                [
                    'class' => 'InvalidOriginException',
                ],
                [
                    'class' => 'InvalidOriginAccessIdentityException',
                ],
                [
                    'class' => 'AccessDeniedException',
                ],
                [
                    'class' => 'TooManyTrustedSignersException',
                ],
                [
                    'class' => 'TrustedSignerDoesNotExistException',
                ],
                [
                    'class' => 'MissingBodyException',
                ],
                [
                    'class' => 'TooManyDistributionCNAMEsException',
                ],
                [
                    'class' => 'TooManyDistributionsException',
                ],
                [
                    'class' => 'InvalidDefaultRootObjectException',
                ],
                [
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'class' => 'InvalidRequiredProtocolException',
                ],
                [
                    'class' => 'NoSuchOriginException',
                ],
                [
                    'class' => 'TooManyOriginsException',
                ],
                [
                    'class' => 'TooManyCacheBehaviorsException',
                ],
                [
                    'class' => 'InconsistentQuantitiesException',
                ],
            ],
        ],
        'CreateInvalidation' => [
            'httpMethod' => 'POST',
            'uri' => '/2012-05-05/distribution/{DistributionId}/invalidation',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateInvalidationResult',
            'responseType' => 'model',
            'summary' => 'Create a new invalidation.',
            'data' => [
                'xmlRoot' => [
                    'name' => 'InvalidationBatch',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2012-05-05/',
                    ],
                ],
            ],
            'parameters' => [
                'DistributionId' => [
                    'required' => true,
                    'description' => 'The distribution\'s id.',
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Paths' => [
                    'required' => true,
                    'description' =>
                        'The path of the object to invalidate. The path is relative to the distribution and must begin with a slash (/). You must enclose each invalidation object with the Path element tags. If the path includes non-ASCII characters or unsafe characters as defined in RFC 1783 (http://www.ietf.org/rfc/rfc1738.txt), URL encode those characters. Do not URL encode any other characters in the path, or CloudFront will not invalidate the old version of the updated object.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'description' =>
                                'The number of objects that you want to invalidate.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'A complex type that contains a list of the objects that you want to invalidate.',
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
                    'description' =>
                        'A unique name that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the Path object), a new distribution is created. If the CallerReference is a value you already sent in a previous request to create an invalidation batch, and the content of each Path element is identical to the original request, the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a distribution but the content of any Path is different from the original request, CloudFront returns an InvalidationBatchAlreadyExists error.',
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
                    'class' => 'AccessDeniedException',
                ],
                [
                    'class' => 'MissingBodyException',
                ],
                [
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'class' => 'NoSuchDistributionException',
                ],
                [
                    'class' => 'BatchTooLargeException',
                ],
                [
                    'class' => 'TooManyInvalidationsInProgressException',
                ],
                [
                    'class' => 'InconsistentQuantitiesException',
                ],
            ],
        ],
        'CreateStreamingDistribution' => [
            'httpMethod' => 'POST',
            'uri' => '/2012-05-05/streaming-distribution',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateStreamingDistributionResult',
            'responseType' => 'model',
            'summary' => 'Create a new streaming distribution.',
            'data' => [
                'xmlRoot' => [
                    'name' => 'StreamingDistributionConfig',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2012-05-05/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'description' =>
                        'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the StreamingDistributionConfig object), a new streaming distribution is created. If the CallerReference is a value you already sent in a previous request to create a streaming distribution, and the content of the StreamingDistributionConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a streaming distribution but the content of the StreamingDistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'S3Origin' => [
                    'required' => true,
                    'description' =>
                        'A complex type that contains information about the Amazon S3 bucket from which you want CloudFront to get your media files for distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DomainName' => [
                            'required' => true,
                            'description' => 'The DNS name of the S3 origin.',
                            'type' => 'string',
                        ],
                        'OriginAccessIdentity' => [
                            'required' => true,
                            'description' =>
                                'Your S3 origin\'s origin access identity.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'Aliases' => [
                    'required' => true,
                    'description' =>
                        'A complex type that contains information about CNAMEs (alternate domain names), if any, for this streaming distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'description' =>
                                'The number of CNAMEs, if any, for this distribution.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
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
                    'description' =>
                        'Any comments you want to include about the streaming distribution.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Logging' => [
                    'required' => true,
                    'description' =>
                        'A complex type that controls whether access logs are written for the streaming distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'required' => true,
                            'description' =>
                                'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a distribution or if you want to disable logging for an existing distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket and Prefix, the values are automatically deleted.',
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'Bucket' => [
                            'required' => true,
                            'description' =>
                                'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
                            'type' => 'string',
                        ],
                        'Prefix' => [
                            'required' => true,
                            'description' =>
                                'An optional string that you want CloudFront to prefix to the access log filenames for this distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'TrustedSigners' => [
                    'required' => true,
                    'description' =>
                        'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'required' => true,
                            'description' =>
                                'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'Quantity' => [
                            'required' => true,
                            'description' =>
                                'The number of trusted signers for this cache behavior.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'AwsAccountNumber',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Enabled' => [
                    'required' => true,
                    'description' =>
                        'Whether the streaming distribution is enabled to accept end user requests for content.',
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
                    'class' => 'InvalidOriginException',
                ],
                [
                    'class' => 'InvalidOriginAccessIdentityException',
                ],
                [
                    'class' => 'AccessDeniedException',
                ],
                [
                    'class' => 'TooManyTrustedSignersException',
                ],
                [
                    'class' => 'TrustedSignerDoesNotExistException',
                ],
                [
                    'class' => 'MissingBodyException',
                ],
                [
                    'class' => 'TooManyStreamingDistributionCNAMEsException',
                ],
                [
                    'class' => 'TooManyStreamingDistributionsException',
                ],
                [
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'class' => 'InconsistentQuantitiesException',
                ],
            ],
        ],
        'DeleteCloudFrontOriginAccessIdentity' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2012-05-05/origin-access-identity/cloudfront/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' =>
                'DeleteCloudFrontOriginAccessIdentity2012_05_05Output',
            'responseType' => 'model',
            'summary' => 'Delete an origin access identity.',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'description' => 'The origin access identity\'s id.',
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'description' =>
                        'The value of the ETag header you received from a previous GET or PUT request. For example: E2QWRUHAPOMQZL.',
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'If-Match',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'AccessDeniedException',
                ],
                [
                    'class' => 'InvalidIfMatchVersionException',
                ],
                [
                    'class' => 'NoSuchCloudFrontOriginAccessIdentityException',
                ],
                [
                    'class' => 'PreconditionFailedException',
                ],
                [
                    'class' => 'CloudFrontOriginAccessIdentityInUseException',
                ],
            ],
        ],
        'DeleteDistribution' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2012-05-05/distribution/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DeleteDistribution2012_05_05Output',
            'responseType' => 'model',
            'summary' => 'Delete a distribution.',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'description' => 'The distribution id.',
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'description' =>
                        'The value of the ETag header you received when you disabled the distribution. For example: E2QWRUHAPOMQZL.',
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'If-Match',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'AccessDeniedException',
                ],
                [
                    'class' => 'DistributionNotDisabledException',
                ],
                [
                    'class' => 'InvalidIfMatchVersionException',
                ],
                [
                    'class' => 'NoSuchDistributionException',
                ],
                [
                    'class' => 'PreconditionFailedException',
                ],
            ],
        ],
        'DeleteStreamingDistribution' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2012-05-05/streaming-distribution/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DeleteStreamingDistribution2012_05_05Output',
            'responseType' => 'model',
            'summary' => 'Delete a streaming distribution.',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'description' => 'The distribution id.',
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'description' =>
                        'The value of the ETag header you received when you disabled the streaming distribution. For example: E2QWRUHAPOMQZL.',
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'If-Match',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'AccessDeniedException',
                ],
                [
                    'class' => 'StreamingDistributionNotDisabledException',
                ],
                [
                    'class' => 'InvalidIfMatchVersionException',
                ],
                [
                    'class' => 'NoSuchStreamingDistributionException',
                ],
                [
                    'class' => 'PreconditionFailedException',
                ],
            ],
        ],
        'GetCloudFrontOriginAccessIdentity' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-05-05/origin-access-identity/cloudfront/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetCloudFrontOriginAccessIdentityResult',
            'responseType' => 'model',
            'summary' => 'Get the information about an origin access identity.',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'description' => 'The identity\'s id.',
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
                    'class' => 'NoSuchCloudFrontOriginAccessIdentityException',
                ],
                [
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'GetCloudFrontOriginAccessIdentityConfig' => [
            'httpMethod' => 'GET',
            'uri' =>
                '/2012-05-05/origin-access-identity/cloudfront/{Id}/config',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetCloudFrontOriginAccessIdentityConfigResult',
            'responseType' => 'model',
            'summary' =>
                'Get the configuration information about an origin access identity.',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'description' => 'The identity\'s id.',
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
                    'class' => 'NoSuchCloudFrontOriginAccessIdentityException',
                ],
                [
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'GetDistribution' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-05-05/distribution/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetDistributionResult',
            'responseType' => 'model',
            'summary' => 'Get the information about a distribution.',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'description' => 'The distribution\'s id.',
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
                    'class' => 'NoSuchDistributionException',
                ],
                [
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'GetDistributionConfig' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-05-05/distribution/{Id}/config',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetDistributionConfigResult',
            'responseType' => 'model',
            'summary' =>
                'Get the configuration information about a distribution.',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'description' => 'The distribution\'s id.',
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
                    'class' => 'NoSuchDistributionException',
                ],
                [
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'GetInvalidation' => [
            'httpMethod' => 'GET',
            'uri' =>
                '/2012-05-05/distribution/{DistributionId}/invalidation/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetInvalidationResult',
            'responseType' => 'model',
            'summary' => 'Get the information about an invalidation.',
            'parameters' => [
                'DistributionId' => [
                    'required' => true,
                    'description' => 'The distribution\'s id.',
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Id' => [
                    'required' => true,
                    'description' => 'The invalidation\'s id.',
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
                    'class' => 'NoSuchInvalidationException',
                ],
                [
                    'class' => 'NoSuchDistributionException',
                ],
                [
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'GetStreamingDistribution' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-05-05/streaming-distribution/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetStreamingDistributionResult',
            'responseType' => 'model',
            'summary' => 'Get the information about a streaming distribution.',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'description' => 'The streaming distribution\'s id.',
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
                    'class' => 'NoSuchStreamingDistributionException',
                ],
                [
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'GetStreamingDistributionConfig' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-05-05/streaming-distribution/{Id}/config',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetStreamingDistributionConfigResult',
            'responseType' => 'model',
            'summary' =>
                'Get the configuration information about a streaming distribution.',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'description' => 'The streaming distribution\'s id.',
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
                    'class' => 'NoSuchStreamingDistributionException',
                ],
                [
                    'class' => 'AccessDeniedException',
                ],
            ],
        ],
        'ListCloudFrontOriginAccessIdentities' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-05-05/origin-access-identity/cloudfront',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListCloudFrontOriginAccessIdentitiesResult',
            'responseType' => 'model',
            'summary' => 'List origin access identities.',
            'parameters' => [
                'Marker' => [
                    'description' =>
                        'Use this when paginating results to indicate where to begin in your list of origin access identities. The results include identities in the list that occur after the marker. To get the next page of results, set the Marker to the value of the NextMarker from the current page\'s response (which is also the ID of the last identity on that page).',
                    'type' => 'string',
                    'location' => 'query',
                ],
                'MaxItems' => [
                    'description' =>
                        'The maximum number of origin access identities you want in the response body.',
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
                    'class' => 'InvalidArgumentException',
                ],
            ],
        ],
        'ListDistributions' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-05-05/distribution',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListDistributionsResult',
            'responseType' => 'model',
            'summary' => 'List distributions.',
            'parameters' => [
                'Marker' => [
                    'description' =>
                        'Use this when paginating results to indicate where to begin in your list of distributions. The results include distributions in the list that occur after the marker. To get the next page of results, set the Marker to the value of the NextMarker from the current page\'s response (which is also the ID of the last distribution on that page).',
                    'type' => 'string',
                    'location' => 'query',
                ],
                'MaxItems' => [
                    'description' =>
                        'The maximum number of distributions you want in the response body.',
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
                    'class' => 'InvalidArgumentException',
                ],
            ],
        ],
        'ListInvalidations' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-05-05/distribution/{DistributionId}/invalidation',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListInvalidationsResult',
            'responseType' => 'model',
            'summary' => 'List invalidation batches.',
            'parameters' => [
                'DistributionId' => [
                    'required' => true,
                    'description' => 'The distribution\'s id.',
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Marker' => [
                    'description' =>
                        'Use this parameter when paginating results to indicate where to begin in your list of invalidation batches. Because the results are returned in decreasing order from most recent to oldest, the most recent results are on the first page, the second page will contain earlier results, and so on. To get the next page of results, set the Marker to the value of the NextMarker from the current page\'s response. This value is the same as the ID of the last invalidation batch on that page.',
                    'type' => 'string',
                    'location' => 'query',
                ],
                'MaxItems' => [
                    'description' =>
                        'The maximum number of invalidation batches you want in the response body.',
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
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'class' => 'NoSuchDistributionException',
                ],
            ],
        ],
        'ListStreamingDistributions' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-05-05/streaming-distribution',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListStreamingDistributionsResult',
            'responseType' => 'model',
            'summary' => 'List streaming distributions.',
            'parameters' => [
                'Marker' => [
                    'description' =>
                        'Use this when paginating results to indicate where to begin in your list of streaming distributions. The results include distributions in the list that occur after the marker. To get the next page of results, set the Marker to the value of the NextMarker from the current page\'s response (which is also the ID of the last distribution on that page).',
                    'type' => 'string',
                    'location' => 'query',
                ],
                'MaxItems' => [
                    'description' =>
                        'The maximum number of streaming distributions you want in the response body.',
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
                    'class' => 'InvalidArgumentException',
                ],
            ],
        ],
        'UpdateCloudFrontOriginAccessIdentity' => [
            'httpMethod' => 'PUT',
            'uri' =>
                '/2012-05-05/origin-access-identity/cloudfront/{Id}/config',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UpdateCloudFrontOriginAccessIdentityResult',
            'responseType' => 'model',
            'summary' => 'Update an origin access identity.',
            'data' => [
                'xmlRoot' => [
                    'name' => 'CloudFrontOriginAccessIdentityConfig',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2012-05-05/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'description' =>
                        'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the CloudFrontOriginAccessIdentityConfig object), a new origin access identity is created. If the CallerReference is a value you already sent in a previous request to create an identity, and the content of the CloudFrontOriginAccessIdentityConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create an identity but the content of the CloudFrontOriginAccessIdentityConfig is different from the original request, CloudFront returns a CloudFrontOriginAccessIdentityAlreadyExists error.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Comment' => [
                    'required' => true,
                    'description' =>
                        'Any comments you want to include about the origin access identity.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Id' => [
                    'required' => true,
                    'description' => 'The identity\'s id.',
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'description' =>
                        'The value of the ETag header you received when retrieving the identity\'s configuration. For example: E2QWRUHAPOMQZL.',
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
                    'class' => 'AccessDeniedException',
                ],
                [
                    'class' => 'IllegalUpdateException',
                ],
                [
                    'class' => 'InvalidIfMatchVersionException',
                ],
                [
                    'class' => 'MissingBodyException',
                ],
                [
                    'class' => 'NoSuchCloudFrontOriginAccessIdentityException',
                ],
                [
                    'class' => 'PreconditionFailedException',
                ],
                [
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'class' => 'InconsistentQuantitiesException',
                ],
            ],
        ],
        'UpdateDistribution' => [
            'httpMethod' => 'PUT',
            'uri' => '/2012-05-05/distribution/{Id}/config',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UpdateDistributionResult',
            'responseType' => 'model',
            'summary' => 'Update a distribution.',
            'data' => [
                'xmlRoot' => [
                    'name' => 'DistributionConfig',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2012-05-05/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'description' =>
                        'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the DistributionConfig object), a new distribution is created. If the CallerReference is a value you already sent in a previous request to create a distribution, and the content of the DistributionConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a distribution but the content of the DistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Aliases' => [
                    'required' => true,
                    'description' =>
                        'A complex type that contains information about CNAMEs (alternate domain names), if any, for this distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'description' =>
                                'The number of CNAMEs, if any, for this distribution.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'CNAME',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'DefaultRootObject' => [
                    'required' => true,
                    'description' =>
                        'The object that you want CloudFront to return (for example, index.html) when an end user requests the root URL for your distribution (http://www.example.com) instead of an object in your distribution (http://www.example.com/index.html). Specifying a default root object avoids exposing the contents of your distribution. If you don\'t want to specify a default root object when you create a distribution, include an empty DefaultRootObject element. To delete the default root object from an existing distribution, update the distribution configuration and include an empty DefaultRootObject element. To replace the default root object, update the distribution configuration and specify the new object.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Origins' => [
                    'required' => true,
                    'description' =>
                        'A complex type that contains information about origins for this distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'description' =>
                                'The number of origins for this distribution.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'A complex type that contains origins for this distribution.',
                            'type' => 'array',
                            'minItems' => 1,
                            'items' => [
                                'name' => 'Origin',
                                'description' =>
                                    'A complex type that describes the Amazon S3 bucket or the HTTP server (for example, a web server) from which CloudFront gets your files.You must create at least one origin.',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'required' => true,
                                        'description' =>
                                            'A unique identifier for the origin. The value of Id must be unique within the distribution. You use the value of Id when you create a cache behavior. The Id identifies the origin that CloudFront routes a request to when the request matches the path pattern for that cache behavior.',
                                        'type' => 'string',
                                    ],
                                    'DomainName' => [
                                        'required' => true,
                                        'description' =>
                                            'Amazon S3 origins: The DNS name of the Amazon S3 bucket from which you want CloudFront to get objects for this origin, for example, myawsbucket.s3.amazonaws.com. Custom origins: The DNS domain name for the HTTP server from which you want CloudFront to get objects for this origin, for example, www.example.com.',
                                        'type' => 'string',
                                    ],
                                    'S3OriginConfig' => [
                                        'description' =>
                                            'A complex type that contains information about the Amazon S3 origin. If the origin is a custom origin, use the CustomOriginConfig element instead.',
                                        'type' => 'object',
                                        'properties' => [
                                            'OriginAccessIdentity' => [
                                                'required' => true,
                                                'description' =>
                                                    'The CloudFront origin access identity to associate with the origin. Use an origin access identity to configure the origin so that end users can only access objects in an Amazon S3 bucket through CloudFront. If you want end users to be able to access objects using either the CloudFront URL or the Amazon S3 URL, specify an empty OriginAccessIdentity element. To delete the origin access identity from an existing distribution, update the distribution configuration and include an empty OriginAccessIdentity element. To replace the origin access identity, update the distribution configuration and specify the new origin access identity.',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'CustomOriginConfig' => [
                                        'description' =>
                                            'A complex type that contains information about a custom origin. If the origin is an Amazon S3 bucket, use the S3OriginConfig element instead.',
                                        'type' => 'object',
                                        'properties' => [
                                            'HTTPPort' => [
                                                'required' => true,
                                                'description' =>
                                                    'The HTTP port the custom origin listens on.',
                                                'type' => 'numeric',
                                            ],
                                            'HTTPSPort' => [
                                                'required' => true,
                                                'description' =>
                                                    'The HTTPS port the custom origin listens on.',
                                                'type' => 'numeric',
                                            ],
                                            'OriginProtocolPolicy' => [
                                                'required' => true,
                                                'description' =>
                                                    'The origin protocol policy to apply to your origin.',
                                                'type' => 'string',
                                                'enum' => [
                                                    'http-only',
                                                    'match-viewer',
                                                ],
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
                    'description' =>
                        'A complex type that describes the default cache behavior if you do not specify a CacheBehavior element or if files don\'t match any of the values of PathPattern in CacheBehavior elements.You must create exactly one default cache behavior.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'TargetOriginId' => [
                            'required' => true,
                            'description' =>
                                'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                            'type' => 'string',
                        ],
                        'ForwardedValues' => [
                            'required' => true,
                            'description' =>
                                'A complex type that specifies how CloudFront handles query strings.',
                            'type' => 'object',
                            'properties' => [
                                'QueryString' => [
                                    'required' => true,
                                    'description' =>
                                        'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                            ],
                        ],
                        'TrustedSigners' => [
                            'required' => true,
                            'description' =>
                                'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'required' => true,
                                    'description' =>
                                        'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                    'type' => 'boolean',
                                    'format' => 'boolean-string',
                                ],
                                'Quantity' => [
                                    'required' => true,
                                    'description' =>
                                        'The number of trusted signers for this cache behavior.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                            'description' =>
                                'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                            'type' => 'string',
                            'enum' => ['allow-all', 'https-only'],
                        ],
                        'MinTTL' => [
                            'required' => true,
                            'description' =>
                                'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'CacheBehaviors' => [
                    'required' => true,
                    'description' =>
                        'A complex type that contains zero or more CacheBehavior elements.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'description' =>
                                'The number of cache behaviors for this distribution.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'Optional: A complex type that contains cache behaviors for this distribution. If Quantity is 0, you can omit Items.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'CacheBehavior',
                                'description' =>
                                    'A complex type that describes how CloudFront processes requests. You can create up to 10 cache behaviors.You must create at least as many cache behaviors (including the default cache behavior) as you have origins if you want CloudFront to distribute objects from all of the origins. Each cache behavior specifies the one origin from which you want CloudFront to get objects. If you have two origins and only the default cache behavior, the default cache behavior will cause CloudFront to get objects from one of the origins, but the other origin will never be used. If you don\'t want to specify any cache behaviors, include only an empty CacheBehaviors element. Don\'t include an empty CacheBehavior element, or CloudFront returns a MalformedXML error. To delete all cache behaviors in an existing distribution, update the distribution configuration and include only an empty CacheBehaviors element. To add, change, or remove one or more cache behaviors, update the distribution configuration and specify all of the cache behaviors that you want to include in the updated distribution.',
                                'type' => 'object',
                                'properties' => [
                                    'PathPattern' => [
                                        'required' => true,
                                        'description' =>
                                            'The pattern (for example, images/*.jpg) that specifies which requests you want this cache behavior to apply to. When CloudFront receives an end-user request, the requested path is compared with path patterns in the order in which cache behaviors are listed in the distribution. The path pattern for the default cache behavior is * and cannot be changed. If the request for an object does not match the path pattern for any cache behaviors, CloudFront applies the behavior in the default cache behavior.',
                                        'type' => 'string',
                                    ],
                                    'TargetOriginId' => [
                                        'required' => true,
                                        'description' =>
                                            'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                                        'type' => 'string',
                                    ],
                                    'ForwardedValues' => [
                                        'required' => true,
                                        'description' =>
                                            'A complex type that specifies how CloudFront handles query strings.',
                                        'type' => 'object',
                                        'properties' => [
                                            'QueryString' => [
                                                'required' => true,
                                                'description' =>
                                                    'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                                'type' => 'boolean',
                                                'format' => 'boolean-string',
                                            ],
                                        ],
                                    ],
                                    'TrustedSigners' => [
                                        'required' => true,
                                        'description' =>
                                            'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                                        'type' => 'object',
                                        'properties' => [
                                            'Enabled' => [
                                                'required' => true,
                                                'description' =>
                                                    'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                                'type' => 'boolean',
                                                'format' => 'boolean-string',
                                            ],
                                            'Quantity' => [
                                                'required' => true,
                                                'description' =>
                                                    'The number of trusted signers for this cache behavior.',
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'description' =>
                                                    'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                                        'description' =>
                                            'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                                        'type' => 'string',
                                        'enum' => ['allow-all', 'https-only'],
                                    ],
                                    'MinTTL' => [
                                        'required' => true,
                                        'description' =>
                                            'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Comment' => [
                    'required' => true,
                    'description' =>
                        'Any comments you want to include about the distribution.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Logging' => [
                    'required' => true,
                    'description' =>
                        'A complex type that controls whether access logs are written for the distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'required' => true,
                            'description' =>
                                'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a distribution or if you want to disable logging for an existing distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket and Prefix, the values are automatically deleted.',
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'Bucket' => [
                            'required' => true,
                            'description' =>
                                'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
                            'type' => 'string',
                        ],
                        'Prefix' => [
                            'required' => true,
                            'description' =>
                                'An optional string that you want CloudFront to prefix to the access log filenames for this distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'Enabled' => [
                    'required' => true,
                    'description' =>
                        'Whether the distribution is enabled to accept end user requests for content.',
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'xml',
                ],
                'Id' => [
                    'required' => true,
                    'description' => 'The distribution\'s id.',
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'description' =>
                        'The value of the ETag header you received when retrieving the distribution\'s configuration. For example: E2QWRUHAPOMQZL.',
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
                    'class' => 'AccessDeniedException',
                ],
                [
                    'class' => 'CNAMEAlreadyExistsException',
                ],
                [
                    'class' => 'IllegalUpdateException',
                ],
                [
                    'class' => 'InvalidIfMatchVersionException',
                ],
                [
                    'class' => 'MissingBodyException',
                ],
                [
                    'class' => 'NoSuchDistributionException',
                ],
                [
                    'class' => 'PreconditionFailedException',
                ],
                [
                    'class' => 'TooManyDistributionCNAMEsException',
                ],
                [
                    'class' => 'InvalidDefaultRootObjectException',
                ],
                [
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'class' => 'InvalidOriginAccessIdentityException',
                ],
                [
                    'class' => 'TooManyTrustedSignersException',
                ],
                [
                    'class' => 'TrustedSignerDoesNotExistException',
                ],
                [
                    'class' => 'InvalidRequiredProtocolException',
                ],
                [
                    'class' => 'NoSuchOriginException',
                ],
                [
                    'class' => 'TooManyOriginsException',
                ],
                [
                    'class' => 'TooManyCacheBehaviorsException',
                ],
                [
                    'class' => 'InconsistentQuantitiesException',
                ],
            ],
        ],
        'UpdateStreamingDistribution' => [
            'httpMethod' => 'PUT',
            'uri' => '/2012-05-05/streaming-distribution/{Id}/config',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UpdateStreamingDistributionResult',
            'responseType' => 'model',
            'summary' => 'Update a streaming distribution.',
            'data' => [
                'xmlRoot' => [
                    'name' => 'StreamingDistributionConfig',
                    'namespaces' => [
                        'http://cloudfront.amazonaws.com/doc/2012-05-05/',
                    ],
                ],
            ],
            'parameters' => [
                'CallerReference' => [
                    'required' => true,
                    'description' =>
                        'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the StreamingDistributionConfig object), a new streaming distribution is created. If the CallerReference is a value you already sent in a previous request to create a streaming distribution, and the content of the StreamingDistributionConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a streaming distribution but the content of the StreamingDistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'S3Origin' => [
                    'required' => true,
                    'description' =>
                        'A complex type that contains information about the Amazon S3 bucket from which you want CloudFront to get your media files for distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DomainName' => [
                            'required' => true,
                            'description' => 'The DNS name of the S3 origin.',
                            'type' => 'string',
                        ],
                        'OriginAccessIdentity' => [
                            'required' => true,
                            'description' =>
                                'Your S3 origin\'s origin access identity.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'Aliases' => [
                    'required' => true,
                    'description' =>
                        'A complex type that contains information about CNAMEs (alternate domain names), if any, for this streaming distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'required' => true,
                            'description' =>
                                'The number of CNAMEs, if any, for this distribution.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
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
                    'description' =>
                        'Any comments you want to include about the streaming distribution.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Logging' => [
                    'required' => true,
                    'description' =>
                        'A complex type that controls whether access logs are written for the streaming distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'required' => true,
                            'description' =>
                                'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a distribution or if you want to disable logging for an existing distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket and Prefix, the values are automatically deleted.',
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'Bucket' => [
                            'required' => true,
                            'description' =>
                                'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
                            'type' => 'string',
                        ],
                        'Prefix' => [
                            'required' => true,
                            'description' =>
                                'An optional string that you want CloudFront to prefix to the access log filenames for this distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'TrustedSigners' => [
                    'required' => true,
                    'description' =>
                        'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'required' => true,
                            'description' =>
                                'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'Quantity' => [
                            'required' => true,
                            'description' =>
                                'The number of trusted signers for this cache behavior.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'AwsAccountNumber',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Enabled' => [
                    'required' => true,
                    'description' =>
                        'Whether the streaming distribution is enabled to accept end user requests for content.',
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'xml',
                ],
                'Id' => [
                    'required' => true,
                    'description' => 'The streaming distribution\'s id.',
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'description' =>
                        'The value of the ETag header you received when retrieving the streaming distribution\'s configuration. For example: E2QWRUHAPOMQZL.',
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
                    'class' => 'AccessDeniedException',
                ],
                [
                    'class' => 'CNAMEAlreadyExistsException',
                ],
                [
                    'class' => 'IllegalUpdateException',
                ],
                [
                    'class' => 'InvalidIfMatchVersionException',
                ],
                [
                    'class' => 'MissingBodyException',
                ],
                [
                    'class' => 'NoSuchStreamingDistributionException',
                ],
                [
                    'class' => 'PreconditionFailedException',
                ],
                [
                    'class' => 'TooManyStreamingDistributionCNAMEsException',
                ],
                [
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'class' => 'InvalidOriginAccessIdentityException',
                ],
                [
                    'class' => 'TooManyTrustedSignersException',
                ],
                [
                    'class' => 'TrustedSignerDoesNotExistException',
                ],
                [
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
                    'description' =>
                        'The ID for the origin access identity. For example: E74FTE3AJFJ256A.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'S3CanonicalUserId' => [
                    'description' =>
                        'The Amazon S3 canonical user ID for the origin access identity, which you use when giving the origin access identity read permission to an object in Amazon S3.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CloudFrontOriginAccessIdentityConfig' => [
                    'description' =>
                        'The current configuration information for the identity.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'description' =>
                                'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the CloudFrontOriginAccessIdentityConfig object), a new origin access identity is created. If the CallerReference is a value you already sent in a previous request to create an identity, and the content of the CloudFrontOriginAccessIdentityConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create an identity but the content of the CloudFrontOriginAccessIdentityConfig is different from the original request, CloudFront returns a CloudFrontOriginAccessIdentityAlreadyExists error.',
                            'type' => 'string',
                        ],
                        'Comment' => [
                            'description' =>
                                'Any comments you want to include about the origin access identity.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'Location' => [
                    'description' =>
                        'The fully qualified URI of the new origin access identity just created. For example: https://cloudfront.amazonaws.com/2010-11-01/origin-access-identity/cloudfront/E74FTE3AJFJ256A.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'ETag' => [
                    'description' =>
                        'The current version of the origin access identity created.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The identifier for the distribution. For example: EDFDVBD632BHDS5.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'description' =>
                        'This response element indicates the current status of the distribution. When the status is Deployed, the distribution\'s information is fully propagated throughout the Amazon CloudFront system.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModifiedTime' => [
                    'description' =>
                        'The date and time the distribution was last modified.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'InProgressInvalidationBatches' => [
                    'description' =>
                        'The number of invalidation batches currently in progress.',
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'DomainName' => [
                    'description' =>
                        'The domain name corresponding to the distribution. For example: d604721fxaaqy9.cloudfront.net.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ActiveTrustedSigners' => [
                    'description' =>
                        'CloudFront automatically adds this element to the response only if you\'ve set up the distribution to serve private content with signed URLs. The element lists the key pair IDs that CloudFront is aware of for each trusted signer. The Signer child element lists the AWS account number of the trusted signer (or an empty Self element if the signer is you). The Signer element also includes the IDs of any active key pairs associated with the trusted signer\'s AWS account. If no KeyPairId element appears for a Signer, that signer can\'t create working signed URLs.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'description' => 'Each active trusted signer.',
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'description' =>
                                'The number of unique trusted signers included in all cache behaviors. For example, if three cache behaviors all list the same three AWS accounts, the value of Quantity for ActiveTrustedSigners will be 3.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'A complex type that contains one Signer complex type for each unique trusted signer that is specified in the TrustedSigners complex type, including trusted signers in the default cache behavior and in all of the other cache behaviors.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'Signer',
                                'description' =>
                                    'A complex type that lists the AWS accounts that were included in the TrustedSigners complex type, as well as their active CloudFront key pair IDs, if any.',
                                'type' => 'object',
                                'sentAs' => 'Signer',
                                'properties' => [
                                    'AwsAccountNumber' => [
                                        'description' =>
                                            'Specifies an AWS account that can create signed URLs. Values: self, which indicates that the AWS account that was used to create the distribution can created signed URLs, or an AWS account number. Omit the dashes in the account number.',
                                        'type' => 'string',
                                    ],
                                    'KeyPairIds' => [
                                        'description' =>
                                            'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'description' =>
                                                    'The number of active CloudFront key pairs for AwsAccountNumber.',
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'description' =>
                                                    'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
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
                    'description' =>
                        'The current configuration information for the distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'description' =>
                                'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the DistributionConfig object), a new distribution is created. If the CallerReference is a value you already sent in a previous request to create a distribution, and the content of the DistributionConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a distribution but the content of the DistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
                            'type' => 'string',
                        ],
                        'Aliases' => [
                            'description' =>
                                'A complex type that contains information about CNAMEs (alternate domain names), if any, for this distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of CNAMEs, if any, for this distribution.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
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
                            'description' =>
                                'The object that you want CloudFront to return (for example, index.html) when an end user requests the root URL for your distribution (http://www.example.com) instead of an object in your distribution (http://www.example.com/index.html). Specifying a default root object avoids exposing the contents of your distribution. If you don\'t want to specify a default root object when you create a distribution, include an empty DefaultRootObject element. To delete the default root object from an existing distribution, update the distribution configuration and include an empty DefaultRootObject element. To replace the default root object, update the distribution configuration and specify the new object.',
                            'type' => 'string',
                        ],
                        'Origins' => [
                            'description' =>
                                'A complex type that contains information about origins for this distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of origins for this distribution.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'A complex type that contains origins for this distribution.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Origin',
                                        'description' =>
                                            'A complex type that describes the Amazon S3 bucket or the HTTP server (for example, a web server) from which CloudFront gets your files.You must create at least one origin.',
                                        'type' => 'object',
                                        'sentAs' => 'Origin',
                                        'properties' => [
                                            'Id' => [
                                                'description' =>
                                                    'A unique identifier for the origin. The value of Id must be unique within the distribution. You use the value of Id when you create a cache behavior. The Id identifies the origin that CloudFront routes a request to when the request matches the path pattern for that cache behavior.',
                                                'type' => 'string',
                                            ],
                                            'DomainName' => [
                                                'description' =>
                                                    'Amazon S3 origins: The DNS name of the Amazon S3 bucket from which you want CloudFront to get objects for this origin, for example, myawsbucket.s3.amazonaws.com. Custom origins: The DNS domain name for the HTTP server from which you want CloudFront to get objects for this origin, for example, www.example.com.',
                                                'type' => 'string',
                                            ],
                                            'S3OriginConfig' => [
                                                'description' =>
                                                    'A complex type that contains information about the Amazon S3 origin. If the origin is a custom origin, use the CustomOriginConfig element instead.',
                                                'type' => 'object',
                                                'properties' => [
                                                    'OriginAccessIdentity' => [
                                                        'description' =>
                                                            'The CloudFront origin access identity to associate with the origin. Use an origin access identity to configure the origin so that end users can only access objects in an Amazon S3 bucket through CloudFront. If you want end users to be able to access objects using either the CloudFront URL or the Amazon S3 URL, specify an empty OriginAccessIdentity element. To delete the origin access identity from an existing distribution, update the distribution configuration and include an empty OriginAccessIdentity element. To replace the origin access identity, update the distribution configuration and specify the new origin access identity.',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'CustomOriginConfig' => [
                                                'description' =>
                                                    'A complex type that contains information about a custom origin. If the origin is an Amazon S3 bucket, use the S3OriginConfig element instead.',
                                                'type' => 'object',
                                                'properties' => [
                                                    'HTTPPort' => [
                                                        'description' =>
                                                            'The HTTP port the custom origin listens on.',
                                                        'type' => 'numeric',
                                                    ],
                                                    'HTTPSPort' => [
                                                        'description' =>
                                                            'The HTTPS port the custom origin listens on.',
                                                        'type' => 'numeric',
                                                    ],
                                                    'OriginProtocolPolicy' => [
                                                        'description' =>
                                                            'The origin protocol policy to apply to your origin.',
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
                            'description' =>
                                'A complex type that describes the default cache behavior if you do not specify a CacheBehavior element or if files don\'t match any of the values of PathPattern in CacheBehavior elements.You must create exactly one default cache behavior.',
                            'type' => 'object',
                            'properties' => [
                                'TargetOriginId' => [
                                    'description' =>
                                        'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                                    'type' => 'string',
                                ],
                                'ForwardedValues' => [
                                    'description' =>
                                        'A complex type that specifies how CloudFront handles query strings.',
                                    'type' => 'object',
                                    'properties' => [
                                        'QueryString' => [
                                            'description' =>
                                                'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'TrustedSigners' => [
                                    'description' =>
                                        'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                                    'type' => 'object',
                                    'properties' => [
                                        'Enabled' => [
                                            'description' =>
                                                'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                            'type' => 'boolean',
                                        ],
                                        'Quantity' => [
                                            'description' =>
                                                'The number of trusted signers for this cache behavior.',
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'description' =>
                                                'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                                    'description' =>
                                        'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                                    'type' => 'string',
                                ],
                                'MinTTL' => [
                                    'description' =>
                                        'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'CacheBehaviors' => [
                            'description' =>
                                'A complex type that contains zero or more CacheBehavior elements.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of cache behaviors for this distribution.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains cache behaviors for this distribution. If Quantity is 0, you can omit Items.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CacheBehavior',
                                        'description' =>
                                            'A complex type that describes how CloudFront processes requests. You can create up to 10 cache behaviors.You must create at least as many cache behaviors (including the default cache behavior) as you have origins if you want CloudFront to distribute objects from all of the origins. Each cache behavior specifies the one origin from which you want CloudFront to get objects. If you have two origins and only the default cache behavior, the default cache behavior will cause CloudFront to get objects from one of the origins, but the other origin will never be used. If you don\'t want to specify any cache behaviors, include only an empty CacheBehaviors element. Don\'t include an empty CacheBehavior element, or CloudFront returns a MalformedXML error. To delete all cache behaviors in an existing distribution, update the distribution configuration and include only an empty CacheBehaviors element. To add, change, or remove one or more cache behaviors, update the distribution configuration and specify all of the cache behaviors that you want to include in the updated distribution.',
                                        'type' => 'object',
                                        'sentAs' => 'CacheBehavior',
                                        'properties' => [
                                            'PathPattern' => [
                                                'description' =>
                                                    'The pattern (for example, images/*.jpg) that specifies which requests you want this cache behavior to apply to. When CloudFront receives an end-user request, the requested path is compared with path patterns in the order in which cache behaviors are listed in the distribution. The path pattern for the default cache behavior is * and cannot be changed. If the request for an object does not match the path pattern for any cache behaviors, CloudFront applies the behavior in the default cache behavior.',
                                                'type' => 'string',
                                            ],
                                            'TargetOriginId' => [
                                                'description' =>
                                                    'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                                                'type' => 'string',
                                            ],
                                            'ForwardedValues' => [
                                                'description' =>
                                                    'A complex type that specifies how CloudFront handles query strings.',
                                                'type' => 'object',
                                                'properties' => [
                                                    'QueryString' => [
                                                        'description' =>
                                                            'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                                        'type' => 'boolean',
                                                    ],
                                                ],
                                            ],
                                            'TrustedSigners' => [
                                                'description' =>
                                                    'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Enabled' => [
                                                        'description' =>
                                                            'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                                        'type' => 'boolean',
                                                    ],
                                                    'Quantity' => [
                                                        'description' =>
                                                            'The number of trusted signers for this cache behavior.',
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'description' =>
                                                            'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                                                'description' =>
                                                    'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                                                'type' => 'string',
                                            ],
                                            'MinTTL' => [
                                                'description' =>
                                                    'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Comment' => [
                            'description' =>
                                'Any comments you want to include about the distribution.',
                            'type' => 'string',
                        ],
                        'Logging' => [
                            'description' =>
                                'A complex type that controls whether access logs are written for the distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'description' =>
                                        'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a distribution or if you want to disable logging for an existing distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket and Prefix, the values are automatically deleted.',
                                    'type' => 'boolean',
                                ],
                                'Bucket' => [
                                    'description' =>
                                        'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'description' =>
                                        'An optional string that you want CloudFront to prefix to the access log filenames for this distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Enabled' => [
                            'description' =>
                                'Whether the distribution is enabled to accept end user requests for content.',
                            'type' => 'boolean',
                        ],
                    ],
                ],
                'Location' => [
                    'description' =>
                        'The fully qualified URI of the new distribution resource just created. For example: https://cloudfront.amazonaws.com/2010-11-01/distribution/EDFDVBD632BHDS5.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'ETag' => [
                    'description' =>
                        'The current version of the distribution created.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The fully qualified URI of the distribution and invalidation batch request, including the Invalidation ID.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'Id' => [
                    'description' =>
                        'The identifier for the invalidation request. For example: IDFDVBD632BHDS5.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'description' =>
                        'The status of the invalidation request. When the invalidation batch is finished, the status is Completed.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CreateTime' => [
                    'description' =>
                        'The date and time the invalidation request was first made.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'InvalidationBatch' => [
                    'description' =>
                        'The current invalidation information for the batch request.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Paths' => [
                            'description' =>
                                'The path of the object to invalidate. The path is relative to the distribution and must begin with a slash (/). You must enclose each invalidation object with the Path element tags. If the path includes non-ASCII characters or unsafe characters as defined in RFC 1783 (http://www.ietf.org/rfc/rfc1738.txt), URL encode those characters. Do not URL encode any other characters in the path, or CloudFront will not invalidate the old version of the updated object.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of objects that you want to invalidate.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'A complex type that contains a list of the objects that you want to invalidate.',
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
                            'description' =>
                                'A unique name that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the Path object), a new distribution is created. If the CallerReference is a value you already sent in a previous request to create an invalidation batch, and the content of each Path element is identical to the original request, the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a distribution but the content of any Path is different from the original request, CloudFront returns an InvalidationBatchAlreadyExists error.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The identifier for the streaming distribution. For example: EGTXBD79H29TRA8.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'description' =>
                        'The current status of the streaming distribution. When the status is Deployed, the distribution\'s information is fully propagated throughout the Amazon CloudFront system.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModifiedTime' => [
                    'description' =>
                        'The date and time the distribution was last modified.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DomainName' => [
                    'description' =>
                        'The domain name corresponding to the streaming distribution. For example: s5c39gqb8ow64r.cloudfront.net.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ActiveTrustedSigners' => [
                    'description' =>
                        'CloudFront automatically adds this element to the response only if you\'ve set up the distribution to serve private content with signed URLs. The element lists the key pair IDs that CloudFront is aware of for each trusted signer. The Signer child element lists the AWS account number of the trusted signer (or an empty Self element if the signer is you). The Signer element also includes the IDs of any active key pairs associated with the trusted signer\'s AWS account. If no KeyPairId element appears for a Signer, that signer can\'t create working signed URLs.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'description' => 'Each active trusted signer.',
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'description' =>
                                'The number of unique trusted signers included in all cache behaviors. For example, if three cache behaviors all list the same three AWS accounts, the value of Quantity for ActiveTrustedSigners will be 3.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'A complex type that contains one Signer complex type for each unique trusted signer that is specified in the TrustedSigners complex type, including trusted signers in the default cache behavior and in all of the other cache behaviors.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'Signer',
                                'description' =>
                                    'A complex type that lists the AWS accounts that were included in the TrustedSigners complex type, as well as their active CloudFront key pair IDs, if any.',
                                'type' => 'object',
                                'sentAs' => 'Signer',
                                'properties' => [
                                    'AwsAccountNumber' => [
                                        'description' =>
                                            'Specifies an AWS account that can create signed URLs. Values: self, which indicates that the AWS account that was used to create the distribution can created signed URLs, or an AWS account number. Omit the dashes in the account number.',
                                        'type' => 'string',
                                    ],
                                    'KeyPairIds' => [
                                        'description' =>
                                            'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'description' =>
                                                    'The number of active CloudFront key pairs for AwsAccountNumber.',
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'description' =>
                                                    'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
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
                    'description' =>
                        'The current configuration information for the streaming distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'description' =>
                                'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the StreamingDistributionConfig object), a new streaming distribution is created. If the CallerReference is a value you already sent in a previous request to create a streaming distribution, and the content of the StreamingDistributionConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a streaming distribution but the content of the StreamingDistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
                            'type' => 'string',
                        ],
                        'S3Origin' => [
                            'description' =>
                                'A complex type that contains information about the Amazon S3 bucket from which you want CloudFront to get your media files for distribution.',
                            'type' => 'object',
                            'properties' => [
                                'DomainName' => [
                                    'description' =>
                                        'The DNS name of the S3 origin.',
                                    'type' => 'string',
                                ],
                                'OriginAccessIdentity' => [
                                    'description' =>
                                        'Your S3 origin\'s origin access identity.',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Aliases' => [
                            'description' =>
                                'A complex type that contains information about CNAMEs (alternate domain names), if any, for this streaming distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of CNAMEs, if any, for this distribution.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
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
                            'description' =>
                                'Any comments you want to include about the streaming distribution.',
                            'type' => 'string',
                        ],
                        'Logging' => [
                            'description' =>
                                'A complex type that controls whether access logs are written for the streaming distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'description' =>
                                        'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a distribution or if you want to disable logging for an existing distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket and Prefix, the values are automatically deleted.',
                                    'type' => 'boolean',
                                ],
                                'Bucket' => [
                                    'description' =>
                                        'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'description' =>
                                        'An optional string that you want CloudFront to prefix to the access log filenames for this distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'TrustedSigners' => [
                            'description' =>
                                'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'description' =>
                                        'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                    'type' => 'boolean',
                                ],
                                'Quantity' => [
                                    'description' =>
                                        'The number of trusted signers for this cache behavior.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'AwsAccountNumber',
                                        'type' => 'string',
                                        'sentAs' => 'AwsAccountNumber',
                                    ],
                                ],
                            ],
                        ],
                        'Enabled' => [
                            'description' =>
                                'Whether the streaming distribution is enabled to accept end user requests for content.',
                            'type' => 'boolean',
                        ],
                    ],
                ],
                'Location' => [
                    'description' =>
                        'The fully qualified URI of the new streaming distribution resource just created. For example: https://cloudfront.amazonaws.com/2010-11-01/streaming-distribution/EGTXBD79H29TRA8.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'ETag' => [
                    'description' =>
                        'The current version of the streaming distribution created.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteCloudFrontOriginAccessIdentity2012_05_05Output' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'description' => 'Request ID of the operation',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteDistribution2012_05_05Output' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'description' => 'Request ID of the operation',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteStreamingDistribution2012_05_05Output' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The ID for the origin access identity. For example: E74FTE3AJFJ256A.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'S3CanonicalUserId' => [
                    'description' =>
                        'The Amazon S3 canonical user ID for the origin access identity, which you use when giving the origin access identity read permission to an object in Amazon S3.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CloudFrontOriginAccessIdentityConfig' => [
                    'description' =>
                        'The current configuration information for the identity.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'description' =>
                                'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the CloudFrontOriginAccessIdentityConfig object), a new origin access identity is created. If the CallerReference is a value you already sent in a previous request to create an identity, and the content of the CloudFrontOriginAccessIdentityConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create an identity but the content of the CloudFrontOriginAccessIdentityConfig is different from the original request, CloudFront returns a CloudFrontOriginAccessIdentityAlreadyExists error.',
                            'type' => 'string',
                        ],
                        'Comment' => [
                            'description' =>
                                'Any comments you want to include about the origin access identity.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'ETag' => [
                    'description' =>
                        'The current version of the origin access identity\'s information. For example: E2QWRUHAPOMQZL.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the CloudFrontOriginAccessIdentityConfig object), a new origin access identity is created. If the CallerReference is a value you already sent in a previous request to create an identity, and the content of the CloudFrontOriginAccessIdentityConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create an identity but the content of the CloudFrontOriginAccessIdentityConfig is different from the original request, CloudFront returns a CloudFrontOriginAccessIdentityAlreadyExists error.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Comment' => [
                    'description' =>
                        'Any comments you want to include about the origin access identity.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ETag' => [
                    'description' =>
                        'The current version of the configuration. For example: E2QWRUHAPOMQZL.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The identifier for the distribution. For example: EDFDVBD632BHDS5.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'description' =>
                        'This response element indicates the current status of the distribution. When the status is Deployed, the distribution\'s information is fully propagated throughout the Amazon CloudFront system.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModifiedTime' => [
                    'description' =>
                        'The date and time the distribution was last modified.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'InProgressInvalidationBatches' => [
                    'description' =>
                        'The number of invalidation batches currently in progress.',
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'DomainName' => [
                    'description' =>
                        'The domain name corresponding to the distribution. For example: d604721fxaaqy9.cloudfront.net.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ActiveTrustedSigners' => [
                    'description' =>
                        'CloudFront automatically adds this element to the response only if you\'ve set up the distribution to serve private content with signed URLs. The element lists the key pair IDs that CloudFront is aware of for each trusted signer. The Signer child element lists the AWS account number of the trusted signer (or an empty Self element if the signer is you). The Signer element also includes the IDs of any active key pairs associated with the trusted signer\'s AWS account. If no KeyPairId element appears for a Signer, that signer can\'t create working signed URLs.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'description' => 'Each active trusted signer.',
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'description' =>
                                'The number of unique trusted signers included in all cache behaviors. For example, if three cache behaviors all list the same three AWS accounts, the value of Quantity for ActiveTrustedSigners will be 3.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'A complex type that contains one Signer complex type for each unique trusted signer that is specified in the TrustedSigners complex type, including trusted signers in the default cache behavior and in all of the other cache behaviors.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'Signer',
                                'description' =>
                                    'A complex type that lists the AWS accounts that were included in the TrustedSigners complex type, as well as their active CloudFront key pair IDs, if any.',
                                'type' => 'object',
                                'sentAs' => 'Signer',
                                'properties' => [
                                    'AwsAccountNumber' => [
                                        'description' =>
                                            'Specifies an AWS account that can create signed URLs. Values: self, which indicates that the AWS account that was used to create the distribution can created signed URLs, or an AWS account number. Omit the dashes in the account number.',
                                        'type' => 'string',
                                    ],
                                    'KeyPairIds' => [
                                        'description' =>
                                            'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'description' =>
                                                    'The number of active CloudFront key pairs for AwsAccountNumber.',
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'description' =>
                                                    'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
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
                    'description' =>
                        'The current configuration information for the distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'description' =>
                                'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the DistributionConfig object), a new distribution is created. If the CallerReference is a value you already sent in a previous request to create a distribution, and the content of the DistributionConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a distribution but the content of the DistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
                            'type' => 'string',
                        ],
                        'Aliases' => [
                            'description' =>
                                'A complex type that contains information about CNAMEs (alternate domain names), if any, for this distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of CNAMEs, if any, for this distribution.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
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
                            'description' =>
                                'The object that you want CloudFront to return (for example, index.html) when an end user requests the root URL for your distribution (http://www.example.com) instead of an object in your distribution (http://www.example.com/index.html). Specifying a default root object avoids exposing the contents of your distribution. If you don\'t want to specify a default root object when you create a distribution, include an empty DefaultRootObject element. To delete the default root object from an existing distribution, update the distribution configuration and include an empty DefaultRootObject element. To replace the default root object, update the distribution configuration and specify the new object.',
                            'type' => 'string',
                        ],
                        'Origins' => [
                            'description' =>
                                'A complex type that contains information about origins for this distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of origins for this distribution.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'A complex type that contains origins for this distribution.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Origin',
                                        'description' =>
                                            'A complex type that describes the Amazon S3 bucket or the HTTP server (for example, a web server) from which CloudFront gets your files.You must create at least one origin.',
                                        'type' => 'object',
                                        'sentAs' => 'Origin',
                                        'properties' => [
                                            'Id' => [
                                                'description' =>
                                                    'A unique identifier for the origin. The value of Id must be unique within the distribution. You use the value of Id when you create a cache behavior. The Id identifies the origin that CloudFront routes a request to when the request matches the path pattern for that cache behavior.',
                                                'type' => 'string',
                                            ],
                                            'DomainName' => [
                                                'description' =>
                                                    'Amazon S3 origins: The DNS name of the Amazon S3 bucket from which you want CloudFront to get objects for this origin, for example, myawsbucket.s3.amazonaws.com. Custom origins: The DNS domain name for the HTTP server from which you want CloudFront to get objects for this origin, for example, www.example.com.',
                                                'type' => 'string',
                                            ],
                                            'S3OriginConfig' => [
                                                'description' =>
                                                    'A complex type that contains information about the Amazon S3 origin. If the origin is a custom origin, use the CustomOriginConfig element instead.',
                                                'type' => 'object',
                                                'properties' => [
                                                    'OriginAccessIdentity' => [
                                                        'description' =>
                                                            'The CloudFront origin access identity to associate with the origin. Use an origin access identity to configure the origin so that end users can only access objects in an Amazon S3 bucket through CloudFront. If you want end users to be able to access objects using either the CloudFront URL or the Amazon S3 URL, specify an empty OriginAccessIdentity element. To delete the origin access identity from an existing distribution, update the distribution configuration and include an empty OriginAccessIdentity element. To replace the origin access identity, update the distribution configuration and specify the new origin access identity.',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'CustomOriginConfig' => [
                                                'description' =>
                                                    'A complex type that contains information about a custom origin. If the origin is an Amazon S3 bucket, use the S3OriginConfig element instead.',
                                                'type' => 'object',
                                                'properties' => [
                                                    'HTTPPort' => [
                                                        'description' =>
                                                            'The HTTP port the custom origin listens on.',
                                                        'type' => 'numeric',
                                                    ],
                                                    'HTTPSPort' => [
                                                        'description' =>
                                                            'The HTTPS port the custom origin listens on.',
                                                        'type' => 'numeric',
                                                    ],
                                                    'OriginProtocolPolicy' => [
                                                        'description' =>
                                                            'The origin protocol policy to apply to your origin.',
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
                            'description' =>
                                'A complex type that describes the default cache behavior if you do not specify a CacheBehavior element or if files don\'t match any of the values of PathPattern in CacheBehavior elements.You must create exactly one default cache behavior.',
                            'type' => 'object',
                            'properties' => [
                                'TargetOriginId' => [
                                    'description' =>
                                        'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                                    'type' => 'string',
                                ],
                                'ForwardedValues' => [
                                    'description' =>
                                        'A complex type that specifies how CloudFront handles query strings.',
                                    'type' => 'object',
                                    'properties' => [
                                        'QueryString' => [
                                            'description' =>
                                                'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'TrustedSigners' => [
                                    'description' =>
                                        'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                                    'type' => 'object',
                                    'properties' => [
                                        'Enabled' => [
                                            'description' =>
                                                'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                            'type' => 'boolean',
                                        ],
                                        'Quantity' => [
                                            'description' =>
                                                'The number of trusted signers for this cache behavior.',
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'description' =>
                                                'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                                    'description' =>
                                        'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                                    'type' => 'string',
                                ],
                                'MinTTL' => [
                                    'description' =>
                                        'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'CacheBehaviors' => [
                            'description' =>
                                'A complex type that contains zero or more CacheBehavior elements.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of cache behaviors for this distribution.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains cache behaviors for this distribution. If Quantity is 0, you can omit Items.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CacheBehavior',
                                        'description' =>
                                            'A complex type that describes how CloudFront processes requests. You can create up to 10 cache behaviors.You must create at least as many cache behaviors (including the default cache behavior) as you have origins if you want CloudFront to distribute objects from all of the origins. Each cache behavior specifies the one origin from which you want CloudFront to get objects. If you have two origins and only the default cache behavior, the default cache behavior will cause CloudFront to get objects from one of the origins, but the other origin will never be used. If you don\'t want to specify any cache behaviors, include only an empty CacheBehaviors element. Don\'t include an empty CacheBehavior element, or CloudFront returns a MalformedXML error. To delete all cache behaviors in an existing distribution, update the distribution configuration and include only an empty CacheBehaviors element. To add, change, or remove one or more cache behaviors, update the distribution configuration and specify all of the cache behaviors that you want to include in the updated distribution.',
                                        'type' => 'object',
                                        'sentAs' => 'CacheBehavior',
                                        'properties' => [
                                            'PathPattern' => [
                                                'description' =>
                                                    'The pattern (for example, images/*.jpg) that specifies which requests you want this cache behavior to apply to. When CloudFront receives an end-user request, the requested path is compared with path patterns in the order in which cache behaviors are listed in the distribution. The path pattern for the default cache behavior is * and cannot be changed. If the request for an object does not match the path pattern for any cache behaviors, CloudFront applies the behavior in the default cache behavior.',
                                                'type' => 'string',
                                            ],
                                            'TargetOriginId' => [
                                                'description' =>
                                                    'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                                                'type' => 'string',
                                            ],
                                            'ForwardedValues' => [
                                                'description' =>
                                                    'A complex type that specifies how CloudFront handles query strings.',
                                                'type' => 'object',
                                                'properties' => [
                                                    'QueryString' => [
                                                        'description' =>
                                                            'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                                        'type' => 'boolean',
                                                    ],
                                                ],
                                            ],
                                            'TrustedSigners' => [
                                                'description' =>
                                                    'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Enabled' => [
                                                        'description' =>
                                                            'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                                        'type' => 'boolean',
                                                    ],
                                                    'Quantity' => [
                                                        'description' =>
                                                            'The number of trusted signers for this cache behavior.',
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'description' =>
                                                            'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                                                'description' =>
                                                    'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                                                'type' => 'string',
                                            ],
                                            'MinTTL' => [
                                                'description' =>
                                                    'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Comment' => [
                            'description' =>
                                'Any comments you want to include about the distribution.',
                            'type' => 'string',
                        ],
                        'Logging' => [
                            'description' =>
                                'A complex type that controls whether access logs are written for the distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'description' =>
                                        'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a distribution or if you want to disable logging for an existing distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket and Prefix, the values are automatically deleted.',
                                    'type' => 'boolean',
                                ],
                                'Bucket' => [
                                    'description' =>
                                        'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'description' =>
                                        'An optional string that you want CloudFront to prefix to the access log filenames for this distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Enabled' => [
                            'description' =>
                                'Whether the distribution is enabled to accept end user requests for content.',
                            'type' => 'boolean',
                        ],
                    ],
                ],
                'ETag' => [
                    'description' =>
                        'The current version of the distribution\'s information. For example: E2QWRUHAPOMQZL.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the DistributionConfig object), a new distribution is created. If the CallerReference is a value you already sent in a previous request to create a distribution, and the content of the DistributionConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a distribution but the content of the DistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Aliases' => [
                    'description' =>
                        'A complex type that contains information about CNAMEs (alternate domain names), if any, for this distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'description' =>
                                'The number of CNAMEs, if any, for this distribution.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
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
                    'description' =>
                        'The object that you want CloudFront to return (for example, index.html) when an end user requests the root URL for your distribution (http://www.example.com) instead of an object in your distribution (http://www.example.com/index.html). Specifying a default root object avoids exposing the contents of your distribution. If you don\'t want to specify a default root object when you create a distribution, include an empty DefaultRootObject element. To delete the default root object from an existing distribution, update the distribution configuration and include an empty DefaultRootObject element. To replace the default root object, update the distribution configuration and specify the new object.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Origins' => [
                    'description' =>
                        'A complex type that contains information about origins for this distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'description' =>
                                'The number of origins for this distribution.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'A complex type that contains origins for this distribution.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'Origin',
                                'description' =>
                                    'A complex type that describes the Amazon S3 bucket or the HTTP server (for example, a web server) from which CloudFront gets your files.You must create at least one origin.',
                                'type' => 'object',
                                'sentAs' => 'Origin',
                                'properties' => [
                                    'Id' => [
                                        'description' =>
                                            'A unique identifier for the origin. The value of Id must be unique within the distribution. You use the value of Id when you create a cache behavior. The Id identifies the origin that CloudFront routes a request to when the request matches the path pattern for that cache behavior.',
                                        'type' => 'string',
                                    ],
                                    'DomainName' => [
                                        'description' =>
                                            'Amazon S3 origins: The DNS name of the Amazon S3 bucket from which you want CloudFront to get objects for this origin, for example, myawsbucket.s3.amazonaws.com. Custom origins: The DNS domain name for the HTTP server from which you want CloudFront to get objects for this origin, for example, www.example.com.',
                                        'type' => 'string',
                                    ],
                                    'S3OriginConfig' => [
                                        'description' =>
                                            'A complex type that contains information about the Amazon S3 origin. If the origin is a custom origin, use the CustomOriginConfig element instead.',
                                        'type' => 'object',
                                        'properties' => [
                                            'OriginAccessIdentity' => [
                                                'description' =>
                                                    'The CloudFront origin access identity to associate with the origin. Use an origin access identity to configure the origin so that end users can only access objects in an Amazon S3 bucket through CloudFront. If you want end users to be able to access objects using either the CloudFront URL or the Amazon S3 URL, specify an empty OriginAccessIdentity element. To delete the origin access identity from an existing distribution, update the distribution configuration and include an empty OriginAccessIdentity element. To replace the origin access identity, update the distribution configuration and specify the new origin access identity.',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'CustomOriginConfig' => [
                                        'description' =>
                                            'A complex type that contains information about a custom origin. If the origin is an Amazon S3 bucket, use the S3OriginConfig element instead.',
                                        'type' => 'object',
                                        'properties' => [
                                            'HTTPPort' => [
                                                'description' =>
                                                    'The HTTP port the custom origin listens on.',
                                                'type' => 'numeric',
                                            ],
                                            'HTTPSPort' => [
                                                'description' =>
                                                    'The HTTPS port the custom origin listens on.',
                                                'type' => 'numeric',
                                            ],
                                            'OriginProtocolPolicy' => [
                                                'description' =>
                                                    'The origin protocol policy to apply to your origin.',
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
                    'description' =>
                        'A complex type that describes the default cache behavior if you do not specify a CacheBehavior element or if files don\'t match any of the values of PathPattern in CacheBehavior elements.You must create exactly one default cache behavior.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'TargetOriginId' => [
                            'description' =>
                                'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                            'type' => 'string',
                        ],
                        'ForwardedValues' => [
                            'description' =>
                                'A complex type that specifies how CloudFront handles query strings.',
                            'type' => 'object',
                            'properties' => [
                                'QueryString' => [
                                    'description' =>
                                        'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                        'TrustedSigners' => [
                            'description' =>
                                'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'description' =>
                                        'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                    'type' => 'boolean',
                                ],
                                'Quantity' => [
                                    'description' =>
                                        'The number of trusted signers for this cache behavior.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                            'description' =>
                                'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                            'type' => 'string',
                        ],
                        'MinTTL' => [
                            'description' =>
                                'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'CacheBehaviors' => [
                    'description' =>
                        'A complex type that contains zero or more CacheBehavior elements.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'description' =>
                                'The number of cache behaviors for this distribution.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'Optional: A complex type that contains cache behaviors for this distribution. If Quantity is 0, you can omit Items.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'CacheBehavior',
                                'description' =>
                                    'A complex type that describes how CloudFront processes requests. You can create up to 10 cache behaviors.You must create at least as many cache behaviors (including the default cache behavior) as you have origins if you want CloudFront to distribute objects from all of the origins. Each cache behavior specifies the one origin from which you want CloudFront to get objects. If you have two origins and only the default cache behavior, the default cache behavior will cause CloudFront to get objects from one of the origins, but the other origin will never be used. If you don\'t want to specify any cache behaviors, include only an empty CacheBehaviors element. Don\'t include an empty CacheBehavior element, or CloudFront returns a MalformedXML error. To delete all cache behaviors in an existing distribution, update the distribution configuration and include only an empty CacheBehaviors element. To add, change, or remove one or more cache behaviors, update the distribution configuration and specify all of the cache behaviors that you want to include in the updated distribution.',
                                'type' => 'object',
                                'sentAs' => 'CacheBehavior',
                                'properties' => [
                                    'PathPattern' => [
                                        'description' =>
                                            'The pattern (for example, images/*.jpg) that specifies which requests you want this cache behavior to apply to. When CloudFront receives an end-user request, the requested path is compared with path patterns in the order in which cache behaviors are listed in the distribution. The path pattern for the default cache behavior is * and cannot be changed. If the request for an object does not match the path pattern for any cache behaviors, CloudFront applies the behavior in the default cache behavior.',
                                        'type' => 'string',
                                    ],
                                    'TargetOriginId' => [
                                        'description' =>
                                            'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                                        'type' => 'string',
                                    ],
                                    'ForwardedValues' => [
                                        'description' =>
                                            'A complex type that specifies how CloudFront handles query strings.',
                                        'type' => 'object',
                                        'properties' => [
                                            'QueryString' => [
                                                'description' =>
                                                    'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'TrustedSigners' => [
                                        'description' =>
                                            'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                                        'type' => 'object',
                                        'properties' => [
                                            'Enabled' => [
                                                'description' =>
                                                    'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                                'type' => 'boolean',
                                            ],
                                            'Quantity' => [
                                                'description' =>
                                                    'The number of trusted signers for this cache behavior.',
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'description' =>
                                                    'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                                        'description' =>
                                            'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                                        'type' => 'string',
                                    ],
                                    'MinTTL' => [
                                        'description' =>
                                            'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Comment' => [
                    'description' =>
                        'Any comments you want to include about the distribution.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Logging' => [
                    'description' =>
                        'A complex type that controls whether access logs are written for the distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'description' =>
                                'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a distribution or if you want to disable logging for an existing distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket and Prefix, the values are automatically deleted.',
                            'type' => 'boolean',
                        ],
                        'Bucket' => [
                            'description' =>
                                'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
                            'type' => 'string',
                        ],
                        'Prefix' => [
                            'description' =>
                                'An optional string that you want CloudFront to prefix to the access log filenames for this distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'Enabled' => [
                    'description' =>
                        'Whether the distribution is enabled to accept end user requests for content.',
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'ETag' => [
                    'description' =>
                        'The current version of the configuration. For example: E2QWRUHAPOMQZL.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The identifier for the invalidation request. For example: IDFDVBD632BHDS5.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'description' =>
                        'The status of the invalidation request. When the invalidation batch is finished, the status is Completed.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CreateTime' => [
                    'description' =>
                        'The date and time the invalidation request was first made.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'InvalidationBatch' => [
                    'description' =>
                        'The current invalidation information for the batch request.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Paths' => [
                            'description' =>
                                'The path of the object to invalidate. The path is relative to the distribution and must begin with a slash (/). You must enclose each invalidation object with the Path element tags. If the path includes non-ASCII characters or unsafe characters as defined in RFC 1783 (http://www.ietf.org/rfc/rfc1738.txt), URL encode those characters. Do not URL encode any other characters in the path, or CloudFront will not invalidate the old version of the updated object.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of objects that you want to invalidate.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'A complex type that contains a list of the objects that you want to invalidate.',
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
                            'description' =>
                                'A unique name that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the Path object), a new distribution is created. If the CallerReference is a value you already sent in a previous request to create an invalidation batch, and the content of each Path element is identical to the original request, the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a distribution but the content of any Path is different from the original request, CloudFront returns an InvalidationBatchAlreadyExists error.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The identifier for the streaming distribution. For example: EGTXBD79H29TRA8.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'description' =>
                        'The current status of the streaming distribution. When the status is Deployed, the distribution\'s information is fully propagated throughout the Amazon CloudFront system.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModifiedTime' => [
                    'description' =>
                        'The date and time the distribution was last modified.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DomainName' => [
                    'description' =>
                        'The domain name corresponding to the streaming distribution. For example: s5c39gqb8ow64r.cloudfront.net.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ActiveTrustedSigners' => [
                    'description' =>
                        'CloudFront automatically adds this element to the response only if you\'ve set up the distribution to serve private content with signed URLs. The element lists the key pair IDs that CloudFront is aware of for each trusted signer. The Signer child element lists the AWS account number of the trusted signer (or an empty Self element if the signer is you). The Signer element also includes the IDs of any active key pairs associated with the trusted signer\'s AWS account. If no KeyPairId element appears for a Signer, that signer can\'t create working signed URLs.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'description' => 'Each active trusted signer.',
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'description' =>
                                'The number of unique trusted signers included in all cache behaviors. For example, if three cache behaviors all list the same three AWS accounts, the value of Quantity for ActiveTrustedSigners will be 3.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'A complex type that contains one Signer complex type for each unique trusted signer that is specified in the TrustedSigners complex type, including trusted signers in the default cache behavior and in all of the other cache behaviors.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'Signer',
                                'description' =>
                                    'A complex type that lists the AWS accounts that were included in the TrustedSigners complex type, as well as their active CloudFront key pair IDs, if any.',
                                'type' => 'object',
                                'sentAs' => 'Signer',
                                'properties' => [
                                    'AwsAccountNumber' => [
                                        'description' =>
                                            'Specifies an AWS account that can create signed URLs. Values: self, which indicates that the AWS account that was used to create the distribution can created signed URLs, or an AWS account number. Omit the dashes in the account number.',
                                        'type' => 'string',
                                    ],
                                    'KeyPairIds' => [
                                        'description' =>
                                            'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'description' =>
                                                    'The number of active CloudFront key pairs for AwsAccountNumber.',
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'description' =>
                                                    'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
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
                    'description' =>
                        'The current configuration information for the streaming distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'description' =>
                                'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the StreamingDistributionConfig object), a new streaming distribution is created. If the CallerReference is a value you already sent in a previous request to create a streaming distribution, and the content of the StreamingDistributionConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a streaming distribution but the content of the StreamingDistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
                            'type' => 'string',
                        ],
                        'S3Origin' => [
                            'description' =>
                                'A complex type that contains information about the Amazon S3 bucket from which you want CloudFront to get your media files for distribution.',
                            'type' => 'object',
                            'properties' => [
                                'DomainName' => [
                                    'description' =>
                                        'The DNS name of the S3 origin.',
                                    'type' => 'string',
                                ],
                                'OriginAccessIdentity' => [
                                    'description' =>
                                        'Your S3 origin\'s origin access identity.',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Aliases' => [
                            'description' =>
                                'A complex type that contains information about CNAMEs (alternate domain names), if any, for this streaming distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of CNAMEs, if any, for this distribution.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
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
                            'description' =>
                                'Any comments you want to include about the streaming distribution.',
                            'type' => 'string',
                        ],
                        'Logging' => [
                            'description' =>
                                'A complex type that controls whether access logs are written for the streaming distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'description' =>
                                        'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a distribution or if you want to disable logging for an existing distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket and Prefix, the values are automatically deleted.',
                                    'type' => 'boolean',
                                ],
                                'Bucket' => [
                                    'description' =>
                                        'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'description' =>
                                        'An optional string that you want CloudFront to prefix to the access log filenames for this distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'TrustedSigners' => [
                            'description' =>
                                'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'description' =>
                                        'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                    'type' => 'boolean',
                                ],
                                'Quantity' => [
                                    'description' =>
                                        'The number of trusted signers for this cache behavior.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'AwsAccountNumber',
                                        'type' => 'string',
                                        'sentAs' => 'AwsAccountNumber',
                                    ],
                                ],
                            ],
                        ],
                        'Enabled' => [
                            'description' =>
                                'Whether the streaming distribution is enabled to accept end user requests for content.',
                            'type' => 'boolean',
                        ],
                    ],
                ],
                'ETag' => [
                    'description' =>
                        'The current version of the streaming distribution\'s information. For example: E2QWRUHAPOMQZL.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the StreamingDistributionConfig object), a new streaming distribution is created. If the CallerReference is a value you already sent in a previous request to create a streaming distribution, and the content of the StreamingDistributionConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a streaming distribution but the content of the StreamingDistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'S3Origin' => [
                    'description' =>
                        'A complex type that contains information about the Amazon S3 bucket from which you want CloudFront to get your media files for distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DomainName' => [
                            'description' => 'The DNS name of the S3 origin.',
                            'type' => 'string',
                        ],
                        'OriginAccessIdentity' => [
                            'description' =>
                                'Your S3 origin\'s origin access identity.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'Aliases' => [
                    'description' =>
                        'A complex type that contains information about CNAMEs (alternate domain names), if any, for this streaming distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Quantity' => [
                            'description' =>
                                'The number of CNAMEs, if any, for this distribution.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
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
                    'description' =>
                        'Any comments you want to include about the streaming distribution.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Logging' => [
                    'description' =>
                        'A complex type that controls whether access logs are written for the streaming distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'description' =>
                                'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a distribution or if you want to disable logging for an existing distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket and Prefix, the values are automatically deleted.',
                            'type' => 'boolean',
                        ],
                        'Bucket' => [
                            'description' =>
                                'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
                            'type' => 'string',
                        ],
                        'Prefix' => [
                            'description' =>
                                'An optional string that you want CloudFront to prefix to the access log filenames for this distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'TrustedSigners' => [
                    'description' =>
                        'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'description' =>
                                'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'description' =>
                                'The number of trusted signers for this cache behavior.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'AwsAccountNumber',
                                'type' => 'string',
                                'sentAs' => 'AwsAccountNumber',
                            ],
                        ],
                    ],
                ],
                'Enabled' => [
                    'description' =>
                        'Whether the streaming distribution is enabled to accept end user requests for content.',
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'ETag' => [
                    'description' =>
                        'The current version of the configuration. For example: E2QWRUHAPOMQZL.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The value you provided for the Marker request parameter.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextMarker' => [
                    'description' =>
                        'If IsTruncated is true, this element is present and contains the value you can use for the Marker request parameter to continue listing your origin access identities where they left off.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'description' =>
                        'The value you provided for the MaxItems request parameter.',
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'description' =>
                        'A flag that indicates whether more origin access identities remain to be listed. If your results were truncated, you can make a follow-up pagination request using the Marker request parameter to retrieve more items in the list.',
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Quantity' => [
                    'description' =>
                        'The number of CloudFront origin access identities that were created by the current AWS account.',
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'Items' => [
                    'description' =>
                        'A complex type that contains one CloudFrontOriginAccessIdentitySummary element for each origin access identity that was created by the current AWS account.',
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'CloudFrontOriginAccessIdentitySummary',
                        'description' =>
                            'Summary of the information about a CloudFront origin access identity.',
                        'type' => 'object',
                        'sentAs' => 'CloudFrontOriginAccessIdentitySummary',
                        'properties' => [
                            'Id' => [
                                'description' =>
                                    'The ID for the origin access identity. For example: E74FTE3AJFJ256A.',
                                'type' => 'string',
                            ],
                            'S3CanonicalUserId' => [
                                'description' =>
                                    'The Amazon S3 canonical user ID for the origin access identity, which you use when giving the origin access identity read permission to an object in Amazon S3.',
                                'type' => 'string',
                            ],
                            'Comment' => [
                                'description' =>
                                    'The comment for this origin access identity, as originally specified when created.',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The value you provided for the Marker request parameter.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextMarker' => [
                    'description' =>
                        'If IsTruncated is true, this element is present and contains the value you can use for the Marker request parameter to continue listing your distributions where they left off.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'description' =>
                        'The value you provided for the MaxItems request parameter.',
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'description' =>
                        'A flag that indicates whether more distributions remain to be listed. If your results were truncated, you can make a follow-up pagination request using the Marker request parameter to retrieve more distributions in the list.',
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Quantity' => [
                    'description' =>
                        'The number of distributions that were created by the current AWS account.',
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'Items' => [
                    'description' =>
                        'A complex type that contains one DistributionSummary element for each distribution that was created by the current AWS account.',
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DistributionSummary',
                        'description' =>
                            'A summary of the information for an Amazon CloudFront distribution.',
                        'type' => 'object',
                        'sentAs' => 'DistributionSummary',
                        'properties' => [
                            'Id' => [
                                'description' =>
                                    'The identifier for the distribution. For example: EDFDVBD632BHDS5.',
                                'type' => 'string',
                            ],
                            'Status' => [
                                'description' =>
                                    'This response element indicates the current status of the distribution. When the status is Deployed, the distribution\'s information is fully propagated throughout the Amazon CloudFront system.',
                                'type' => 'string',
                            ],
                            'LastModifiedTime' => [
                                'description' =>
                                    'The date and time the distribution was last modified.',
                                'type' => 'string',
                            ],
                            'DomainName' => [
                                'description' =>
                                    'The domain name corresponding to the distribution. For example: d604721fxaaqy9.cloudfront.net.',
                                'type' => 'string',
                            ],
                            'Aliases' => [
                                'description' =>
                                    'A complex type that contains information about CNAMEs (alternate domain names), if any, for this distribution.',
                                'type' => 'object',
                                'properties' => [
                                    'Quantity' => [
                                        'description' =>
                                            'The number of CNAMEs, if any, for this distribution.',
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'description' =>
                                            'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
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
                                'description' =>
                                    'A complex type that contains information about origins for this distribution.',
                                'type' => 'object',
                                'properties' => [
                                    'Quantity' => [
                                        'description' =>
                                            'The number of origins for this distribution.',
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'description' =>
                                            'A complex type that contains origins for this distribution.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Origin',
                                            'description' =>
                                                'A complex type that describes the Amazon S3 bucket or the HTTP server (for example, a web server) from which CloudFront gets your files.You must create at least one origin.',
                                            'type' => 'object',
                                            'sentAs' => 'Origin',
                                            'properties' => [
                                                'Id' => [
                                                    'description' =>
                                                        'A unique identifier for the origin. The value of Id must be unique within the distribution. You use the value of Id when you create a cache behavior. The Id identifies the origin that CloudFront routes a request to when the request matches the path pattern for that cache behavior.',
                                                    'type' => 'string',
                                                ],
                                                'DomainName' => [
                                                    'description' =>
                                                        'Amazon S3 origins: The DNS name of the Amazon S3 bucket from which you want CloudFront to get objects for this origin, for example, myawsbucket.s3.amazonaws.com. Custom origins: The DNS domain name for the HTTP server from which you want CloudFront to get objects for this origin, for example, www.example.com.',
                                                    'type' => 'string',
                                                ],
                                                'S3OriginConfig' => [
                                                    'description' =>
                                                        'A complex type that contains information about the Amazon S3 origin. If the origin is a custom origin, use the CustomOriginConfig element instead.',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'OriginAccessIdentity' => [
                                                            'description' =>
                                                                'The CloudFront origin access identity to associate with the origin. Use an origin access identity to configure the origin so that end users can only access objects in an Amazon S3 bucket through CloudFront. If you want end users to be able to access objects using either the CloudFront URL or the Amazon S3 URL, specify an empty OriginAccessIdentity element. To delete the origin access identity from an existing distribution, update the distribution configuration and include an empty OriginAccessIdentity element. To replace the origin access identity, update the distribution configuration and specify the new origin access identity.',
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                                'CustomOriginConfig' => [
                                                    'description' =>
                                                        'A complex type that contains information about a custom origin. If the origin is an Amazon S3 bucket, use the S3OriginConfig element instead.',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'HTTPPort' => [
                                                            'description' =>
                                                                'The HTTP port the custom origin listens on.',
                                                            'type' => 'numeric',
                                                        ],
                                                        'HTTPSPort' => [
                                                            'description' =>
                                                                'The HTTPS port the custom origin listens on.',
                                                            'type' => 'numeric',
                                                        ],
                                                        'OriginProtocolPolicy' => [
                                                            'description' =>
                                                                'The origin protocol policy to apply to your origin.',
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
                                'description' =>
                                    'A complex type that describes the default cache behavior if you do not specify a CacheBehavior element or if files don\'t match any of the values of PathPattern in CacheBehavior elements.You must create exactly one default cache behavior.',
                                'type' => 'object',
                                'properties' => [
                                    'TargetOriginId' => [
                                        'description' =>
                                            'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                                        'type' => 'string',
                                    ],
                                    'ForwardedValues' => [
                                        'description' =>
                                            'A complex type that specifies how CloudFront handles query strings.',
                                        'type' => 'object',
                                        'properties' => [
                                            'QueryString' => [
                                                'description' =>
                                                    'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'TrustedSigners' => [
                                        'description' =>
                                            'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                                        'type' => 'object',
                                        'properties' => [
                                            'Enabled' => [
                                                'description' =>
                                                    'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                                'type' => 'boolean',
                                            ],
                                            'Quantity' => [
                                                'description' =>
                                                    'The number of trusted signers for this cache behavior.',
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'description' =>
                                                    'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                                        'description' =>
                                            'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                                        'type' => 'string',
                                    ],
                                    'MinTTL' => [
                                        'description' =>
                                            'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'CacheBehaviors' => [
                                'description' =>
                                    'A complex type that contains zero or more CacheBehavior elements.',
                                'type' => 'object',
                                'properties' => [
                                    'Quantity' => [
                                        'description' =>
                                            'The number of cache behaviors for this distribution.',
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'description' =>
                                            'Optional: A complex type that contains cache behaviors for this distribution. If Quantity is 0, you can omit Items.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'CacheBehavior',
                                            'description' =>
                                                'A complex type that describes how CloudFront processes requests. You can create up to 10 cache behaviors.You must create at least as many cache behaviors (including the default cache behavior) as you have origins if you want CloudFront to distribute objects from all of the origins. Each cache behavior specifies the one origin from which you want CloudFront to get objects. If you have two origins and only the default cache behavior, the default cache behavior will cause CloudFront to get objects from one of the origins, but the other origin will never be used. If you don\'t want to specify any cache behaviors, include only an empty CacheBehaviors element. Don\'t include an empty CacheBehavior element, or CloudFront returns a MalformedXML error. To delete all cache behaviors in an existing distribution, update the distribution configuration and include only an empty CacheBehaviors element. To add, change, or remove one or more cache behaviors, update the distribution configuration and specify all of the cache behaviors that you want to include in the updated distribution.',
                                            'type' => 'object',
                                            'sentAs' => 'CacheBehavior',
                                            'properties' => [
                                                'PathPattern' => [
                                                    'description' =>
                                                        'The pattern (for example, images/*.jpg) that specifies which requests you want this cache behavior to apply to. When CloudFront receives an end-user request, the requested path is compared with path patterns in the order in which cache behaviors are listed in the distribution. The path pattern for the default cache behavior is * and cannot be changed. If the request for an object does not match the path pattern for any cache behaviors, CloudFront applies the behavior in the default cache behavior.',
                                                    'type' => 'string',
                                                ],
                                                'TargetOriginId' => [
                                                    'description' =>
                                                        'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                                                    'type' => 'string',
                                                ],
                                                'ForwardedValues' => [
                                                    'description' =>
                                                        'A complex type that specifies how CloudFront handles query strings.',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'QueryString' => [
                                                            'description' =>
                                                                'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                                            'type' => 'boolean',
                                                        ],
                                                    ],
                                                ],
                                                'TrustedSigners' => [
                                                    'description' =>
                                                        'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Enabled' => [
                                                            'description' =>
                                                                'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                                            'type' => 'boolean',
                                                        ],
                                                        'Quantity' => [
                                                            'description' =>
                                                                'The number of trusted signers for this cache behavior.',
                                                            'type' => 'numeric',
                                                        ],
                                                        'Items' => [
                                                            'description' =>
                                                                'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                                                    'description' =>
                                                        'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                                                    'type' => 'string',
                                                ],
                                                'MinTTL' => [
                                                    'description' =>
                                                        'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                                                    'type' => 'numeric',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Comment' => [
                                'description' =>
                                    'The comment originally specified when this distribution was created.',
                                'type' => 'string',
                            ],
                            'Enabled' => [
                                'description' =>
                                    'Whether the distribution is enabled to accept end user requests for content.',
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The value you provided for the Marker request parameter.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextMarker' => [
                    'description' =>
                        'If IsTruncated is true, this element is present and contains the value you can use for the Marker request parameter to continue listing your invalidation batches where they left off.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'description' =>
                        'The value you provided for the MaxItems request parameter.',
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'description' =>
                        'A flag that indicates whether more invalidation batch requests remain to be listed. If your results were truncated, you can make a follow-up pagination request using the Marker request parameter to retrieve more invalidation batches in the list.',
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Quantity' => [
                    'description' =>
                        'The number of invalidation batches that were created by the current AWS account.',
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'Items' => [
                    'description' =>
                        'A complex type that contains one InvalidationSummary element for each invalidation batch that was created by the current AWS account.',
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'InvalidationSummary',
                        'description' => 'Summary of an invalidation request.',
                        'type' => 'object',
                        'sentAs' => 'InvalidationSummary',
                        'properties' => [
                            'Id' => [
                                'description' =>
                                    'The unique ID for an invalidation request.',
                                'type' => 'string',
                            ],
                            'Status' => [
                                'description' =>
                                    'The status of an invalidation request.',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The value you provided for the Marker request parameter.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextMarker' => [
                    'description' =>
                        'If IsTruncated is true, this element is present and contains the value you can use for the Marker request parameter to continue listing your streaming distributions where they left off.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxItems' => [
                    'description' =>
                        'The value you provided for the MaxItems request parameter.',
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'description' =>
                        'A flag that indicates whether more streaming distributions remain to be listed. If your results were truncated, you can make a follow-up pagination request using the Marker request parameter to retrieve more distributions in the list.',
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Quantity' => [
                    'description' =>
                        'The number of streaming distributions that were created by the current AWS account.',
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'Items' => [
                    'description' =>
                        'A complex type that contains one StreamingDistributionSummary element for each distribution that was created by the current AWS account.',
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'StreamingDistributionSummary',
                        'description' =>
                            'A summary of the information for an Amazon CloudFront streaming distribution.',
                        'type' => 'object',
                        'sentAs' => 'StreamingDistributionSummary',
                        'properties' => [
                            'Id' => [
                                'description' =>
                                    'The identifier for the distribution. For example: EDFDVBD632BHDS5.',
                                'type' => 'string',
                            ],
                            'Status' => [
                                'description' =>
                                    'Indicates the current status of the distribution. When the status is Deployed, the distribution\'s information is fully propagated throughout the Amazon CloudFront system.',
                                'type' => 'string',
                            ],
                            'LastModifiedTime' => [
                                'description' =>
                                    'The date and time the distribution was last modified.',
                                'type' => 'string',
                            ],
                            'DomainName' => [
                                'description' =>
                                    'The domain name corresponding to the distribution. For example: d604721fxaaqy9.cloudfront.net.',
                                'type' => 'string',
                            ],
                            'S3Origin' => [
                                'description' =>
                                    'A complex type that contains information about the Amazon S3 bucket from which you want CloudFront to get your media files for distribution.',
                                'type' => 'object',
                                'properties' => [
                                    'DomainName' => [
                                        'description' =>
                                            'The DNS name of the S3 origin.',
                                        'type' => 'string',
                                    ],
                                    'OriginAccessIdentity' => [
                                        'description' =>
                                            'Your S3 origin\'s origin access identity.',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Aliases' => [
                                'description' =>
                                    'A complex type that contains information about CNAMEs (alternate domain names), if any, for this streaming distribution.',
                                'type' => 'object',
                                'properties' => [
                                    'Quantity' => [
                                        'description' =>
                                            'The number of CNAMEs, if any, for this distribution.',
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'description' =>
                                            'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
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
                                'description' =>
                                    'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                                'type' => 'object',
                                'properties' => [
                                    'Enabled' => [
                                        'description' =>
                                            'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                        'type' => 'boolean',
                                    ],
                                    'Quantity' => [
                                        'description' =>
                                            'The number of trusted signers for this cache behavior.',
                                        'type' => 'numeric',
                                    ],
                                    'Items' => [
                                        'description' =>
                                            'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                                'description' =>
                                    'The comment originally specified when this distribution was created.',
                                'type' => 'string',
                            ],
                            'Enabled' => [
                                'description' =>
                                    'Whether the distribution is enabled to accept end user requests for content.',
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The ID for the origin access identity. For example: E74FTE3AJFJ256A.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'S3CanonicalUserId' => [
                    'description' =>
                        'The Amazon S3 canonical user ID for the origin access identity, which you use when giving the origin access identity read permission to an object in Amazon S3.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CloudFrontOriginAccessIdentityConfig' => [
                    'description' =>
                        'The current configuration information for the identity.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'description' =>
                                'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the CloudFrontOriginAccessIdentityConfig object), a new origin access identity is created. If the CallerReference is a value you already sent in a previous request to create an identity, and the content of the CloudFrontOriginAccessIdentityConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create an identity but the content of the CloudFrontOriginAccessIdentityConfig is different from the original request, CloudFront returns a CloudFrontOriginAccessIdentityAlreadyExists error.',
                            'type' => 'string',
                        ],
                        'Comment' => [
                            'description' =>
                                'Any comments you want to include about the origin access identity.',
                            'type' => 'string',
                        ],
                    ],
                ],
                'ETag' => [
                    'description' =>
                        'The current version of the configuration. For example: E2QWRUHAPOMQZL.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The identifier for the distribution. For example: EDFDVBD632BHDS5.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'description' =>
                        'This response element indicates the current status of the distribution. When the status is Deployed, the distribution\'s information is fully propagated throughout the Amazon CloudFront system.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModifiedTime' => [
                    'description' =>
                        'The date and time the distribution was last modified.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'InProgressInvalidationBatches' => [
                    'description' =>
                        'The number of invalidation batches currently in progress.',
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'DomainName' => [
                    'description' =>
                        'The domain name corresponding to the distribution. For example: d604721fxaaqy9.cloudfront.net.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ActiveTrustedSigners' => [
                    'description' =>
                        'CloudFront automatically adds this element to the response only if you\'ve set up the distribution to serve private content with signed URLs. The element lists the key pair IDs that CloudFront is aware of for each trusted signer. The Signer child element lists the AWS account number of the trusted signer (or an empty Self element if the signer is you). The Signer element also includes the IDs of any active key pairs associated with the trusted signer\'s AWS account. If no KeyPairId element appears for a Signer, that signer can\'t create working signed URLs.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'description' => 'Each active trusted signer.',
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'description' =>
                                'The number of unique trusted signers included in all cache behaviors. For example, if three cache behaviors all list the same three AWS accounts, the value of Quantity for ActiveTrustedSigners will be 3.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'A complex type that contains one Signer complex type for each unique trusted signer that is specified in the TrustedSigners complex type, including trusted signers in the default cache behavior and in all of the other cache behaviors.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'Signer',
                                'description' =>
                                    'A complex type that lists the AWS accounts that were included in the TrustedSigners complex type, as well as their active CloudFront key pair IDs, if any.',
                                'type' => 'object',
                                'sentAs' => 'Signer',
                                'properties' => [
                                    'AwsAccountNumber' => [
                                        'description' =>
                                            'Specifies an AWS account that can create signed URLs. Values: self, which indicates that the AWS account that was used to create the distribution can created signed URLs, or an AWS account number. Omit the dashes in the account number.',
                                        'type' => 'string',
                                    ],
                                    'KeyPairIds' => [
                                        'description' =>
                                            'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'description' =>
                                                    'The number of active CloudFront key pairs for AwsAccountNumber.',
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'description' =>
                                                    'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
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
                    'description' =>
                        'The current configuration information for the distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'description' =>
                                'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the DistributionConfig object), a new distribution is created. If the CallerReference is a value you already sent in a previous request to create a distribution, and the content of the DistributionConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a distribution but the content of the DistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
                            'type' => 'string',
                        ],
                        'Aliases' => [
                            'description' =>
                                'A complex type that contains information about CNAMEs (alternate domain names), if any, for this distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of CNAMEs, if any, for this distribution.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
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
                            'description' =>
                                'The object that you want CloudFront to return (for example, index.html) when an end user requests the root URL for your distribution (http://www.example.com) instead of an object in your distribution (http://www.example.com/index.html). Specifying a default root object avoids exposing the contents of your distribution. If you don\'t want to specify a default root object when you create a distribution, include an empty DefaultRootObject element. To delete the default root object from an existing distribution, update the distribution configuration and include an empty DefaultRootObject element. To replace the default root object, update the distribution configuration and specify the new object.',
                            'type' => 'string',
                        ],
                        'Origins' => [
                            'description' =>
                                'A complex type that contains information about origins for this distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of origins for this distribution.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'A complex type that contains origins for this distribution.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Origin',
                                        'description' =>
                                            'A complex type that describes the Amazon S3 bucket or the HTTP server (for example, a web server) from which CloudFront gets your files.You must create at least one origin.',
                                        'type' => 'object',
                                        'sentAs' => 'Origin',
                                        'properties' => [
                                            'Id' => [
                                                'description' =>
                                                    'A unique identifier for the origin. The value of Id must be unique within the distribution. You use the value of Id when you create a cache behavior. The Id identifies the origin that CloudFront routes a request to when the request matches the path pattern for that cache behavior.',
                                                'type' => 'string',
                                            ],
                                            'DomainName' => [
                                                'description' =>
                                                    'Amazon S3 origins: The DNS name of the Amazon S3 bucket from which you want CloudFront to get objects for this origin, for example, myawsbucket.s3.amazonaws.com. Custom origins: The DNS domain name for the HTTP server from which you want CloudFront to get objects for this origin, for example, www.example.com.',
                                                'type' => 'string',
                                            ],
                                            'S3OriginConfig' => [
                                                'description' =>
                                                    'A complex type that contains information about the Amazon S3 origin. If the origin is a custom origin, use the CustomOriginConfig element instead.',
                                                'type' => 'object',
                                                'properties' => [
                                                    'OriginAccessIdentity' => [
                                                        'description' =>
                                                            'The CloudFront origin access identity to associate with the origin. Use an origin access identity to configure the origin so that end users can only access objects in an Amazon S3 bucket through CloudFront. If you want end users to be able to access objects using either the CloudFront URL or the Amazon S3 URL, specify an empty OriginAccessIdentity element. To delete the origin access identity from an existing distribution, update the distribution configuration and include an empty OriginAccessIdentity element. To replace the origin access identity, update the distribution configuration and specify the new origin access identity.',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'CustomOriginConfig' => [
                                                'description' =>
                                                    'A complex type that contains information about a custom origin. If the origin is an Amazon S3 bucket, use the S3OriginConfig element instead.',
                                                'type' => 'object',
                                                'properties' => [
                                                    'HTTPPort' => [
                                                        'description' =>
                                                            'The HTTP port the custom origin listens on.',
                                                        'type' => 'numeric',
                                                    ],
                                                    'HTTPSPort' => [
                                                        'description' =>
                                                            'The HTTPS port the custom origin listens on.',
                                                        'type' => 'numeric',
                                                    ],
                                                    'OriginProtocolPolicy' => [
                                                        'description' =>
                                                            'The origin protocol policy to apply to your origin.',
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
                            'description' =>
                                'A complex type that describes the default cache behavior if you do not specify a CacheBehavior element or if files don\'t match any of the values of PathPattern in CacheBehavior elements.You must create exactly one default cache behavior.',
                            'type' => 'object',
                            'properties' => [
                                'TargetOriginId' => [
                                    'description' =>
                                        'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                                    'type' => 'string',
                                ],
                                'ForwardedValues' => [
                                    'description' =>
                                        'A complex type that specifies how CloudFront handles query strings.',
                                    'type' => 'object',
                                    'properties' => [
                                        'QueryString' => [
                                            'description' =>
                                                'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                                'TrustedSigners' => [
                                    'description' =>
                                        'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                                    'type' => 'object',
                                    'properties' => [
                                        'Enabled' => [
                                            'description' =>
                                                'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                            'type' => 'boolean',
                                        ],
                                        'Quantity' => [
                                            'description' =>
                                                'The number of trusted signers for this cache behavior.',
                                            'type' => 'numeric',
                                        ],
                                        'Items' => [
                                            'description' =>
                                                'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                                    'description' =>
                                        'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                                    'type' => 'string',
                                ],
                                'MinTTL' => [
                                    'description' =>
                                        'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'CacheBehaviors' => [
                            'description' =>
                                'A complex type that contains zero or more CacheBehavior elements.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of cache behaviors for this distribution.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains cache behaviors for this distribution. If Quantity is 0, you can omit Items.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CacheBehavior',
                                        'description' =>
                                            'A complex type that describes how CloudFront processes requests. You can create up to 10 cache behaviors.You must create at least as many cache behaviors (including the default cache behavior) as you have origins if you want CloudFront to distribute objects from all of the origins. Each cache behavior specifies the one origin from which you want CloudFront to get objects. If you have two origins and only the default cache behavior, the default cache behavior will cause CloudFront to get objects from one of the origins, but the other origin will never be used. If you don\'t want to specify any cache behaviors, include only an empty CacheBehaviors element. Don\'t include an empty CacheBehavior element, or CloudFront returns a MalformedXML error. To delete all cache behaviors in an existing distribution, update the distribution configuration and include only an empty CacheBehaviors element. To add, change, or remove one or more cache behaviors, update the distribution configuration and specify all of the cache behaviors that you want to include in the updated distribution.',
                                        'type' => 'object',
                                        'sentAs' => 'CacheBehavior',
                                        'properties' => [
                                            'PathPattern' => [
                                                'description' =>
                                                    'The pattern (for example, images/*.jpg) that specifies which requests you want this cache behavior to apply to. When CloudFront receives an end-user request, the requested path is compared with path patterns in the order in which cache behaviors are listed in the distribution. The path pattern for the default cache behavior is * and cannot be changed. If the request for an object does not match the path pattern for any cache behaviors, CloudFront applies the behavior in the default cache behavior.',
                                                'type' => 'string',
                                            ],
                                            'TargetOriginId' => [
                                                'description' =>
                                                    'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
                                                'type' => 'string',
                                            ],
                                            'ForwardedValues' => [
                                                'description' =>
                                                    'A complex type that specifies how CloudFront handles query strings.',
                                                'type' => 'object',
                                                'properties' => [
                                                    'QueryString' => [
                                                        'description' =>
                                                            'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
                                                        'type' => 'boolean',
                                                    ],
                                                ],
                                            ],
                                            'TrustedSigners' => [
                                                'description' =>
                                                    'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Enabled' => [
                                                        'description' =>
                                                            'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                                        'type' => 'boolean',
                                                    ],
                                                    'Quantity' => [
                                                        'description' =>
                                                            'The number of trusted signers for this cache behavior.',
                                                        'type' => 'numeric',
                                                    ],
                                                    'Items' => [
                                                        'description' =>
                                                            'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
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
                                                'description' =>
                                                    'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https.',
                                                'type' => 'string',
                                            ],
                                            'MinTTL' => [
                                                'description' =>
                                                    'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years).',
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Comment' => [
                            'description' =>
                                'Any comments you want to include about the distribution.',
                            'type' => 'string',
                        ],
                        'Logging' => [
                            'description' =>
                                'A complex type that controls whether access logs are written for the distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'description' =>
                                        'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a distribution or if you want to disable logging for an existing distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket and Prefix, the values are automatically deleted.',
                                    'type' => 'boolean',
                                ],
                                'Bucket' => [
                                    'description' =>
                                        'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'description' =>
                                        'An optional string that you want CloudFront to prefix to the access log filenames for this distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Enabled' => [
                            'description' =>
                                'Whether the distribution is enabled to accept end user requests for content.',
                            'type' => 'boolean',
                        ],
                    ],
                ],
                'ETag' => [
                    'description' =>
                        'The current version of the configuration. For example: E2QWRUHAPOMQZL.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
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
                    'description' =>
                        'The identifier for the streaming distribution. For example: EGTXBD79H29TRA8.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'description' =>
                        'The current status of the streaming distribution. When the status is Deployed, the distribution\'s information is fully propagated throughout the Amazon CloudFront system.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModifiedTime' => [
                    'description' =>
                        'The date and time the distribution was last modified.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DomainName' => [
                    'description' =>
                        'The domain name corresponding to the streaming distribution. For example: s5c39gqb8ow64r.cloudfront.net.',
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ActiveTrustedSigners' => [
                    'description' =>
                        'CloudFront automatically adds this element to the response only if you\'ve set up the distribution to serve private content with signed URLs. The element lists the key pair IDs that CloudFront is aware of for each trusted signer. The Signer child element lists the AWS account number of the trusted signer (or an empty Self element if the signer is you). The Signer element also includes the IDs of any active key pairs associated with the trusted signer\'s AWS account. If no KeyPairId element appears for a Signer, that signer can\'t create working signed URLs.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Enabled' => [
                            'description' => 'Each active trusted signer.',
                            'type' => 'boolean',
                        ],
                        'Quantity' => [
                            'description' =>
                                'The number of unique trusted signers included in all cache behaviors. For example, if three cache behaviors all list the same three AWS accounts, the value of Quantity for ActiveTrustedSigners will be 3.',
                            'type' => 'numeric',
                        ],
                        'Items' => [
                            'description' =>
                                'A complex type that contains one Signer complex type for each unique trusted signer that is specified in the TrustedSigners complex type, including trusted signers in the default cache behavior and in all of the other cache behaviors.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'Signer',
                                'description' =>
                                    'A complex type that lists the AWS accounts that were included in the TrustedSigners complex type, as well as their active CloudFront key pair IDs, if any.',
                                'type' => 'object',
                                'sentAs' => 'Signer',
                                'properties' => [
                                    'AwsAccountNumber' => [
                                        'description' =>
                                            'Specifies an AWS account that can create signed URLs. Values: self, which indicates that the AWS account that was used to create the distribution can created signed URLs, or an AWS account number. Omit the dashes in the account number.',
                                        'type' => 'string',
                                    ],
                                    'KeyPairIds' => [
                                        'description' =>
                                            'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'description' =>
                                                    'The number of active CloudFront key pairs for AwsAccountNumber.',
                                                'type' => 'numeric',
                                            ],
                                            'Items' => [
                                                'description' =>
                                                    'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
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
                    'description' =>
                        'The current configuration information for the streaming distribution.',
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'CallerReference' => [
                            'description' =>
                                'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the StreamingDistributionConfig object), a new streaming distribution is created. If the CallerReference is a value you already sent in a previous request to create a streaming distribution, and the content of the StreamingDistributionConfig is identical to the original request (ignoring white space), the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a streaming distribution but the content of the StreamingDistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
                            'type' => 'string',
                        ],
                        'S3Origin' => [
                            'description' =>
                                'A complex type that contains information about the Amazon S3 bucket from which you want CloudFront to get your media files for distribution.',
                            'type' => 'object',
                            'properties' => [
                                'DomainName' => [
                                    'description' =>
                                        'The DNS name of the S3 origin.',
                                    'type' => 'string',
                                ],
                                'OriginAccessIdentity' => [
                                    'description' =>
                                        'Your S3 origin\'s origin access identity.',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Aliases' => [
                            'description' =>
                                'A complex type that contains information about CNAMEs (alternate domain names), if any, for this streaming distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Quantity' => [
                                    'description' =>
                                        'The number of CNAMEs, if any, for this distribution.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
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
                            'description' =>
                                'Any comments you want to include about the streaming distribution.',
                            'type' => 'string',
                        ],
                        'Logging' => [
                            'description' =>
                                'A complex type that controls whether access logs are written for the streaming distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'description' =>
                                        'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a distribution or if you want to disable logging for an existing distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket and Prefix, the values are automatically deleted.',
                                    'type' => 'boolean',
                                ],
                                'Bucket' => [
                                    'description' =>
                                        'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'description' =>
                                        'An optional string that you want CloudFront to prefix to the access log filenames for this distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'TrustedSigners' => [
                            'description' =>
                                'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false), change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
                            'type' => 'object',
                            'properties' => [
                                'Enabled' => [
                                    'description' =>
                                        'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
                                    'type' => 'boolean',
                                ],
                                'Quantity' => [
                                    'description' =>
                                        'The number of trusted signers for this cache behavior.',
                                    'type' => 'numeric',
                                ],
                                'Items' => [
                                    'description' =>
                                        'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'AwsAccountNumber',
                                        'type' => 'string',
                                        'sentAs' => 'AwsAccountNumber',
                                    ],
                                ],
                            ],
                        ],
                        'Enabled' => [
                            'description' =>
                                'Whether the streaming distribution is enabled to accept end user requests for content.',
                            'type' => 'boolean',
                        ],
                    ],
                ],
                'ETag' => [
                    'description' =>
                        'The current version of the configuration. For example: E2QWRUHAPOMQZL.',
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'description' => 'Request ID of the operation',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListCloudFrontOriginAccessIdentities' => [
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'more_results' => 'IsTruncated',
            'result_key' => 'Items',
        ],
        'ListDistributions' => [
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'more_results' => 'IsTruncated',
            'result_key' => 'Items',
        ],
        'ListInvalidations' => [
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'more_results' => 'IsTruncated',
            'result_key' => 'Items',
        ],
        'ListStreamingDistributions' => [
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'more_results' => 'IsTruncated',
            'result_key' => 'Items',
        ],
    ],
    'waiters' => [
        '__default__' => [
            'success.type' => 'output',
            'success.path' => 'Status',
        ],
        'StreamingDistributionDeployed' => [
            'operation' => 'GetStreamingDistribution',
            'description' => 'Wait until a streaming distribution is deployed.',
            'interval' => 60,
            'max_attempts' => 25,
            'success.value' => 'Deployed',
        ],
        'DistributionDeployed' => [
            'operation' => 'GetDistribution',
            'description' => 'Wait until a distribution is deployed.',
            'interval' => 60,
            'max_attempts' => 25,
            'success.value' => 'Deployed',
        ],
        'InvalidationCompleted' => [
            'operation' => 'GetInvalidation',
            'description' => 'Wait until an invalidation has completed.',
            'interval' => 20,
            'max_attempts' => 30,
            'success.value' => 'Completed',
        ],
    ],
];
