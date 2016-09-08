<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/7/10
 * Time: 8:35
 */

namespace backend\controllers;

use yii;
use yii\web\Controller;

class CommentController extends Controller
{
    public function actionIndex()
    {
        $data = [];

        return $this->render('index', $data);
    }

}