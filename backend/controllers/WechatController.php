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
        if (strtolower($postObj->MsgType) == 'event') {
            //如果是关注事件 ：subscribe
            if ($postObj->Event == 'subscribe') {
                //回复用户消信息
                $toUser   = $postObj->FromUserName;
                $fromUser = $postObj->ToUserName;
                $time     = time();
                $MsgType  = 'text';
                $Content  = "公众账号:" . $postObj->ToUserName . "\n微信用户:" . $postObj->FromUserName;
                $template = "
                                <xml>
                                <ToUserName><![CDATA[%s]]></ToUserName>
                                <FromUserName><![CDATA[%s]]></FromUserName>
                                <CreateTime>%s</CreateTime>
                                <MsgType><![CDATA[%s]]></MsgType>
                                <Content><![CDATA[%s]]></Content>
                                </xml>
                            ";
                $info     = sprintf($template, $toUser, $fromUser, $time, $MsgType, $Content);

                return $info;
            }
        }

        if (strtolower($postObj->MsgType) == 'text') {

            if ($postObj->Content == 'imooc') {
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
            }elseif ($postObj->Content == 'tuwen1') {
                $toUser   = $postObj->FromUserName;
                $fromUser = $postObj->ToUserName;
                return sprintf($this->TemplatePicText(), $toUser, $fromUser, time(), "news");
            }else if($postObj->Content == '天气'){

            }
        }

    }


    public function actionCreateItem(){

    }


    public function getWxAccessToken(){
    }



    public function actionGetAccessToken(){
//        $appid = "wxa25fb4f0180cfb59";
//        $appsecret = "d020cff1db67b9b7425be30d0c369aa2";
        $appid = "wx14b4165730ea6547";
        $appsecret = "4b8cda25ebc1898e4ec5b3014c64b5ca";
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $access_token = curl_exec($ch);
        if(curl_errno($ch)){
            var_dump(curl_error($ch));
        }
        curl_close($ch);
        $arr = json_decode($access_token,true);
        dump($arr);
    }

    public function actionGetWxServiceIp(){
        $access_token = "WmKwR23DgKVSassakpbHseedCYjAexfSmWsN-_Y53-rfir0LU2Xj8rZJcf_yBZ3-W2R0Nn-AdmANYn4xQTVdf7b6lZVOjVqJDUFo9xRgvW-bKJfLDybn-_bSZd-8Iw9yTKXdAFAPGT";
        $url  = "https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=".$access_token;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $ip = curl_exec($ch);
        if(curl_errno($ch)){
            var_dump(curl_error($ch));
        }
        curl_close($ch);
        $arr = json_decode($ip,true);
        dump($arr);
    }




    public function actionHttpcurl(){
        $ch = curl_init();
        $url = "http://www.qq.com";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        print_r($output);
    }


    public function TemplatePicText()
    {
        $arr = [
            [
                'title'       => '淘宝',
                'description' => '淘宝描述',
                'picUrl'      => 'https://img.alicdn.com/tps/i4/TB1iTkVLFXXXXXNaXXXAF6IGpXX-160-66.png_80x80.jpg',
                'url'         => 'http://www.taobao.com'
            ],
            [
                'title'       => '百度',
                'description' => '百度描述',
                'picUrl'      => 'https://www.baidu.com/img/bd_logo1.png',
                'url'         => 'http://www.baidu.com'
            ],
            [
                'title'       => '腾讯',
                'description' => '腾讯描述',
                'picUrl'      => 'http://mat1.gtimg.com/www/images/qq2012/qqlogo_2x.png',
                'url'         => 'http://www.qq.com'
            ]
        ];

        $template = "
                        <xml>
                        <ToUserName><![CDATA[%s]]></ToUserName>
                        <FromUserName><![CDATA[%s]]></FromUserName>
                        <CreateTime>%s</CreateTime>
                        <MsgType><![CDATA[%s]]></MsgType>
                        <ArticleCount>" . count($arr) . "</ArticleCount>
                        <Articles>";

        foreach ($arr as $key => $value) {
            $template .= "<item>
                        <Title><![CDATA[" . $value['title'] . "]]></Title>
                        <Description><![CDATA[" . $value['description'] . "]]></Description>
                        <PicUrl><![CDATA[" . $value['picUrl'] . "]]></PicUrl>
                        <Url><![CDATA[" . $value['url'] . "]]></Url>
                        </item>";
        }


        $template .= "</Articles>
                        </xml>";

        return $template;

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