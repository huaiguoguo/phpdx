<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/7/10
 * Time: 9:52
 */

namespace backend\controllers;


use yii\web\Controller;

class StaffController extends Controller
{

    public function actionIndex()
    {
        $data = [];

        return $this->render('index', $data);
    }

}