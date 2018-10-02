<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        // 'user' => [
        //     'identityClass' => 'common\models\User',
        //     'enableAutoLogin' => true,
        //     'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        // ],
        // 'session' => [
        //     // this is the name of the session cookie used for login on the frontend
        //     'name' => 'advanced-frontend',
        // ],
    'user' => [
        'identityCookie' => [
            'name'     => '_frontendIdentity',
            'path'     => '/',
            'httpOnly' => true,
        ],
    ],
    'session' => [
        'name' => 'FRONTENDSESSID',
        'cookieParams' => [
            'httpOnly' => true,
            'path'     => '/',
        ],
    ],  
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    'authClientCollection' => [
        'class'   => \yii\authclient\Collection::className(),
        'clients' => [
            'vkontakte' => [
                'class'        => 'dektrium\user\clients\VKontakte',
                'clientId'     => 'CLIENT_ID',
                'clientSecret' => 'CLIENT_SECRET',
            ]
        ],
    ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'modules' => [
    'user' => [
        // following line will restrict access to admin controller from frontend application
        'as frontend' => 'dektrium\user\filters\FrontendFilter',
    ],
],
    'params' => $params,
];
