<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/9/19
 * Time: 10:27
 */

namespace backend\controllers;


use common\extend\EController;
use common\models\Topic;

class PostController extends EController
{


    public function actionIndex()
    {
        $data = [];

        $data['post'] = Topic::find()->with('user')->with('looks')->all();

        return $this->render('index', $data);
    }

}