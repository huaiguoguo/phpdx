<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //"css/bootstrap.min.css",
        //"font-awesome/css/font-awesome.css",
        //"css/plugins/summernote/summernote.css",
        //"css/plugins/summernote/summernote-bs3.css",
        //"css/animate.css",
        //"css/style.css",
        //"css/plugins/footable/footable.core.css",
        //"css/plugins/iCheck/custom.css",
        //"css/plugins/sweetalert/sweetalert.css"
        //"css/hub1.css",
        "css/hub2.css"
    ];

    public $js = [
//        "js/jquery-2.1.1.js",
        "js/jquery-1.11.1.js",
        //"js/bootstrap.min.js",
        //"js/plugins/metisMenu/jquery.metisMenu.js",
        //"js/plugins/slimscroll/jquery.slimscroll.min.js",
        //"js/inspinia.js",
        //"js/plugins/pace/pace.min.js",
        //"js/plugins/summernote/summernote.min.js",
        //"js/plugins/ueditor/1.4.3.3-utf8/ueditor.config.js",
        //"js/plugins/ueditor/1.4.3.3-utf8/ueditor.all.min.js",
        //"js/plugins/ueditor/1.4.3.3-utf8/lang/zh-cn/zh-cn.js",
        //"js/plugins/iCheck/icheck.min.js",
        //"js/plugins/sweetalert/sweetalert.min.js",
        "js/common.js"
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD
    ];

    public $depends = [
//        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];


    //定义按需加载JS方法，注意加载顺序在最后
    public static function addScript(View $view, $jsfile)
    {
        $view->registerJsFile($jsfile, [AppAsset::className(), 'depends' => 'frontend\assets\AppAsset', 'position' => View::POS_HEAD]);
    }

    //定义按需加载css方法，注意加载顺序在最后
    public static function addCss(View $view, $cssfile)
    {
        $view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'frontend\assets\AppAsset', 'position' => View::POS_HEAD]);
    }


}
