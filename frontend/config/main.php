<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id'                  => 'app-frontend',
    'basePath'            => dirname(__DIR__),
    'bootstrap'           => ['log'],
    'language'           => 'zh-CN',
    'controllerNamespace' => 'frontend\controllers',
    'modules'=>[
        'v1'=>[
            'class'=>'app\modules\v1\Module'
        ]
    ],
    'components'          => [
        'request'      => [
            'csrfParam' => 'csrf_frontend',
        ],
        'cache'=>[ ],
        'user'         => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie'  => ['name' => '_identity-frontend', 'httpOnly' => true],
            'loginUrl'        => ['site/login'],
//            'authTimeout'     => 0
        ],
        'session'      => [
            // this is the name of the session cookie used for login on the frontend
            'class'    => 'yii\web\DbSession',
            'name'     => 'advanced-frontend',
            'timeout'  => 3600,//超时间
            'savePath' => '@frontend/runtime/session',//手工在backend目录下新建文件夹TMP
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'suffix'          => '.html',
            'rules'           => [
                ['class' => 'yii\rest\UrlRule', 'controller' => 'default']
            ]
        ]
    ],
    'params'              => $params
];
