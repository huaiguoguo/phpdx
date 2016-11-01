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

        $signature = $_GET['signature'];
        $timestamp = $_GET['timestamp'];
        $nonce     = $_GET['nonce'];
        $token     = "haowai";
        $tmparray  = array($timestamp, $nonce, $token);
        sort($tmparray);
        $tmpstr = implode("", $tmparray);
        $tmpstr = sha1($tmpstr);

        $echostr = Yii::$app->request->get('echostr');
        $myfile = fopen("newfile3.txt", "w") or die("Unable to open file!");
        $txt = $signature."++".$timestamp."++".$nonce. "+++".$tmpstr."++++".$echostr;
        fwrite($myfile, $txt);
        fclose($myfile);

        if ($tmpstr == $signature) {
            $echostr = Yii::$app->request->get('echostr');
            $myfile = fopen("newfile1.txt", "w") or die("Unable to open file!");
            $txt = $signature."++".$timestamp."++".$nonce. "+++".$tmpstr."++++".$echostr;
            fwrite($myfile, $txt);
            fclose($myfile);
            exit;
        }else{
            $myfile = fopen("newfile2.txt", "w") or die("Unable to open file!");
            $txt = $signature."++".$timestamp."++".$nonce. "+++".$tmpstr."++++";
            fwrite($myfile, $txt);
            fclose($myfile);
        }
        return $this->render('index', $data);
    }
}