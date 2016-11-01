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

        $signature = Yii::$app->request->get('signature');
        $timestamp = Yii::$app->request->get('timestamp');
        $nonce     = Yii::$app->request->get('nonce');
        $token     = "haowai";
        $tmparray  = array($timestamp, $nonce, $token);
        sort($tmparray);
        $tmpstr = implode("", $tmparray);
        $tmpstr = sha1($tmpstr);
        if ($tmpstr == $signature) {
            $echostr = Yii::$app->request->get('echostr');
            $myfile = fopen("newfile1.txt", "w") or die("Unable to open file!");
            $txt = $signature."++".$timestamp."++".$nonce. "+++".$tmpstr."++++".$echostr;
            fwrite($myfile, $txt);
            fclose($myfile);
            echo $echostr;
            exit;
        }else{
            $myfile = fopen("newfile2.txt", "w") or die("Unable to open file!");
            $txt = $signature."++".$timestamp."++".$nonce. "+++".$tmpstr."++++";
            fwrite($myfile, $txt);
            fclose($myfile);
            exit;
        }
        return $this->render('index', $data);
    }
}