<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/7/10
 * Time: 9:51
 */

namespace backend\controllers;


use common\models\Order;
use yii\web\Controller;

use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class OrderController extends Controller
{



    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow'   => true,
                        'roles'   => ['@'],
                    ]
                ],
            ],
            'verbs'  => [
                'class'   => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ]
        ];
    }

    public function actionIndex()
    {
        $data = [];

        $data['order'] = Order::find()->all();

        return $this->render('index', $data);
    }

}