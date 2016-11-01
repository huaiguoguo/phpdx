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

//    public function beforeAction($action)
//    {
//        $currentaction  = $action->id;
//        $novalidactions = ['dologin'];
//        if (in_array($currentaction, $novalidactions)) {
//            $action->controller->enableCsrfValidation = false;
//        }
//        return parent::beforeAction($action);
//    }

    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        $echoStr = Yii::$app->request->get('echostr');
        if ($this->checkSignature() && Yii::$app->request->get('echostr')) {
            return $echoStr;
        } else {
            return $this->responseMsg();
        }
    }


    public function responseMsg()
    {
        $postAtr = $GLOBALS['HTTP_RAW_POST_DATA'];
        // 2.处理消息类型
        $postObj = simplexml_load_string($postAtr);
//        $postObj->ToUserName = '';
//        $postObj->FromUserName = '';
//        $postObj->CreateTime = '';
//        $postObj->MsgType = '';
//        $postObj->Event = '';
        if (strtolower($postObj->MsgType) == 'event') {
            //如果是关注事件 ：subscribe
            if ($postObj->Event == 'subscribe') {
                //回复用户消信息
                $toUser   = $postObj->FromUserName;
                $fromUser = $postObj->ToUserName;
                $time     = time();
                $MsgType  = 'text';
                $Content  = "公众账号:".$postObj->ToUserName."\n微信用户:".$postObj->FromUserName;
                $template = "
                                <xml>
                                <ToUserName><![CDATA[%s]]></ToUserName>
                                <FromUserName><![CDATA[%s]]></FromUserName>
                                <CreateTime>%s</CreateTime>
                                <MsgType><![CDATA[%s]]></MsgType>
                                <Content><![CDATA[%s]]></Content>
                                </xml>
                            ";
                $info = sprintf($template, $toUser, $fromUser, $time, $MsgType, $Content);
                return $info;
            }
        }

        if (strtolower($postObj->MsgType) == 'text') {

            if($postObj->Content == 'imooc'){
                $toUser   = $postObj->FromUserName;
                $fromUser = $postObj->ToUserName;
                $time     = time();
                $MsgType  = 'text';
                $Content  = "you are very good";
                $template = "
                                <xml>
                                <ToUserName><![CDATA[%s]]></ToUserName>
                                <FromUserName><![CDATA[%s]]></FromUserName>
                                <CreateTime>%s</CreateTime>
                                <MsgType><![CDATA[%s]]></MsgType>
                                <Content><![CDATA[%s]]></Content>
                                </xml>
                            ";
                return sprintf($template, $toUser, $fromUser, $time, $MsgType, $Content);
            }

        }



    }


    public function checkSignature()
    {
        $signature = Yii::$app->request->get('signature');
        $timestamp = Yii::$app->request->get('timestamp');
        $nonce     = Yii::$app->request->get('nonce');
        $token     = "haowai";
        $tmparray  = array($timestamp, $nonce, $token);
        sort($tmparray);
        $tmpstr = implode("", $tmparray);
        $tmpstr = sha1($tmpstr);
        if ($tmpstr == $signature) {
            return true;
        } else {
            return false;
        }
    }


}