<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
    'user' => [
        'class' => 'dektrium\user\Module',
        'class' => 'dektrium\user\Module',
        'enableUnconfirmedLogin' => false,
        'cost' => 12,
        'admins' => ['admin']
        // you will configure your module inside this file
        // or if need different configuration for frontend and backend you may
        // configure in needed configs
    ],
],
];
