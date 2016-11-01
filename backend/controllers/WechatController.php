<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/11/1
 * Time: 18:27
 */

namespace backend\controllers;

use yii;

class WechatController extends yii\web\Controller
{
    public function actionIndex()
    {
        $data = [];

        $timestamp = Yii::$app->request->get('timestamp');
        $nonce     = Yii::$app->request->get('nonce');
        $token     = "haowai";
        $signature = Yii::$app->request->get('signature');
        $tmparray  = [$timestamp, $nonce, $token];
        sort($tmparray);
        $tmpstr = implode("", $tmparray);
        $tmpstr = sha1($tmpstr);
        if ($tmpstr == $signature) {
            echo Yii::$app->request->get('echostr');
        }
        return $this->render('index', $data);
    }
}