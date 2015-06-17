<?php

Yii::setAlias('backend', dirname(__DIR__));

return [
    'id' => 'app-backend',
    'name' => 'Yii2-test',
    'basePath' => dirname(__DIR__),
    'defaultRoute' => 'admin/default/index',
    'modules' => [
        'admin' => [
            'class' => 'core\admin\Module'
        ],
        'users' => [
            'controllerNamespace' => 'core\users\controllers\backend'
        ],
        'rbac' => [
            'class' => 'core\rbac\Module',
            'isBackend' => true
        ]
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => '7fdsf%dbYd&djsb#sn0mlsfo(kj^kf98dfh',
            'baseUrl' => '/backend'
        ],
        'urlManager' => [
            'rules' => [
                '' => 'admin/default/index',
                '<_m>/<_c>/<_a>' => '<_m>/<_c>/<_a>'
            ]
        ],
        'view' => [
            'theme' => 'core\themes\admin\Theme'
        ],
        'errorHandler' => [
            'errorAction' => 'admin/default/error'
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
            'class' => 'yii2-authclient\Collection',
            'clients' => [
                'facebook' => [
                    'class' => 'yii2-authclient\clients\Facebook',
                    'clientId' => 'facebook_client_id',
                    'clientSecret' => 'facebook_client_secret',
                ],
            ],
        ]
    ],
    'params' => require(__DIR__ . '/params.php')
];
