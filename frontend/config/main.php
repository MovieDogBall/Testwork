<?php

return [
    'id' => 'app-frontend',
    'name' => 'Yii2-test',
    'basePath' => dirname(__DIR__),
    'defaultRoute' => 'site/default/index',
    'modules' => [
        'site' => [
            'class' => 'core\site\Module'
        ],
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'sdi8s#fnj98jwiqiw;qfh!fjgh0d8f',
            'baseUrl' => ''
        ],
        'urlManager' => [
            'rules' => [
                '' => 'site/default/index',
                '<_a:(about|contacts|captcha)>' => 'site/default/<_a>'
            ]
        ],
        'view' => [
            'theme' => 'core\themes\site\Theme'
        ],
        'errorHandler' => [
            'errorAction' => 'site/default/error'
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning']
                ]
            ]
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'clientId' => 'facebook_client_id',
                    'clientSecret' => 'facebook_client_secret',
                ],
            ],
        ]
    ],
    'params' => require(__DIR__ . '/params.php')
];
