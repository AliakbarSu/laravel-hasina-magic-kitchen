<?php
return [
    'version' => 2,
    'endpoints' => [
        '*/*' => [
            'endpoint' => '{service}.{region}.amazonaws.com',
        ],
        'cn-north-1/*' => [
            'endpoint' => '{service}.{region}.amazonaws.com.cn',
            'signatureVersion' => 'v4',
        ],
        'us-gov-west-1/iam' => [
            'endpoint' => 'iam.us-gov.amazonaws.com',
        ],
        'us-gov-west-1/sts' => [
            'endpoint' => 'sts.us-gov-west-1.amazonaws.com',
        ],
        'us-gov-west-1/s3' => [
            'endpoint' => 's3-{region}.amazonaws.com',
        ],
        '*/cloudfront' => [
            'endpoint' => 'cloudfront.amazonaws.com',
            'credentialScope' => [
                'region' => 'us-east-1',
            ],
        ],
        '*/iam' => [
            'endpoint' => 'iam.amazonaws.com',
            'credentialScope' => [
                'region' => 'us-east-1',
            ],
        ],
        '*/importexport' => [
            'endpoint' => 'importexport.amazonaws.com',
            'credentialScope' => [
                'region' => 'us-east-1',
            ],
        ],
        '*/route53' => [
            'endpoint' => 'route53.amazonaws.com',
            'credentialScope' => [
                'region' => 'us-east-1',
            ],
        ],
        '*/sts' => [
            'endpoint' => 'sts.amazonaws.com',
            'credentialScope' => [
                'region' => 'us-east-1',
            ],
        ],
        'us-east-1/sdb' => [
            'endpoint' => 'sdb.amazonaws.com',
        ],
        'us-east-1/s3' => [
            'endpoint' => 's3.amazonaws.com',
        ],
        'us-west-1/s3' => [
            'endpoint' => 's3-{region}.amazonaws.com',
        ],
        'us-west-2/s3' => [
            'endpoint' => 's3-{region}.amazonaws.com',
        ],
        'eu-west-1/s3' => [
            'endpoint' => 's3-{region}.amazonaws.com',
        ],
        'ap-southeast-1/s3' => [
            'endpoint' => 's3-{region}.amazonaws.com',
        ],
        'ap-southeast-2/s3' => [
            'endpoint' => 's3-{region}.amazonaws.com',
        ],
        'ap-northeast-1/s3' => [
            'endpoint' => 's3-{region}.amazonaws.com',
        ],
        'sa-east-1/s3' => [
            'endpoint' => 's3-{region}.amazonaws.com',
        ],
    ],
];
