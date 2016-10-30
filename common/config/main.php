<?php

use yii\helpers\ArrayHelper;

$eauth = ArrayHelper::merge(require(__DIR__ . '/eauth.php'), require(__DIR__ . '/eauth-local.php'));
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'eauth' => $eauth,
    ],
];
