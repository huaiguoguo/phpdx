<!--
  --------------------------------------------------------
  Yii: v2.0.9
-->

<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= $this->title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="keywords" content="php,Yii2,php论坛,Yii2论坛,php社区,Yii2社区,Yii2教程,php教程,Yii2视频,php开源,php新手,php7,Yii2"/>
    <meta name="author" content="huochai2016"/>
    <meta name="description" content=" PHPdx 是 PHP 和 Yii2 的中文社区，致力于推动 Yii2，PHP7、php-fig 等 PHP 新技术，新理念在中国的发展，是国内最靠谱的 PHP 论坛。 "/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title);?>tttt</title>
    <script>
        Config = {
//            'cdnDomain': 'https://dn-phphub.qbox.me/',
//            'user_id': 0,
//            'user_avatar': "",
//            'user_link': "",
//            'routes': {
//                'notificationsCount': 'https://abc.org/notifications/count',
//                'upload_image': 'https://abc.org/upload_image'
//            },
//            'token': 'K7sMA0lwNF91wxuJnByQtf5zMUyksrYaIOn1BpGB',
//            'environment': 'production',
//            'following_users': []
        };

        var ShowCrxHint = 'no';
    </script>
<!--    <link rel="stylesheet" href="https://dn-phphub.qbox.me//build/assets/css/styles-8c293f5c1d.css">-->
    <?php $this->head() ?>


</head>
<body id="body">

<?php $this->beginBody() ?>

<div id="wrap">

    <div role="navigation" class="navbar navbar-default navbar-static-top topnav">
        <div class="container">
            <div class="navbar-header hidden-xs">
                <a href="/" class="navbar-brand"> <img src="/img/logo.png" > </a>
            </div>
            <div id="top-navbar-collapse" class="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="/">首页</a></li>
                    <li class=""><a href="<?=Url::toRoute(['topics/index']);?>">社区</a></li>
<!--                    <li class=""><a href="/categories/6?filter=recent">教程</a></li>-->
<!--                    <li class=""><a href="/categories/1">招聘</a></li>-->
<!--                    <li class=""><a href="/categories/4">问答</a></li>-->
<!--                    <li class=""><a href="/sites">酷站</a></li>-->
<!--                    <li class=""><a href="/topics/2541">Wiki</a></li>-->
                </ul>

                <div class="navbar-right">
                    <forms method="GET" action="" accept-charset="UTF-8"
                          class="navbar-form navbar-left" target="_blank">
                        <div class="form-group">
                            <input class="form-control search-input mac-style" placeholder="搜索" name="q" type="text">
                        </div>
                    </forms>


                    <ul class="nav navbar-nav github-login">

                        <?php if (Yii::$app->user->isGuest): ?>
                            <a href="<?=Url::toRoute(['site/login']);?>"
                               class="btn btn-success login-btn weichat-login-btn">
                                <i class="fa fa-weixin"></i>
                                登 录
                            </a>

                            <a href="<?=Url::toRoute(['site/signup']);?>" class="btn btn-info login-btn">
                                <i class="fa fa-github-alt"></i>
                                注 册
                            </a>

                        <?php else: ?>
                            <li>
                                <a href="<?=Url::toRoute(['/topics/create'])?>" data-placement="bottom"
                                   class="popover-with-html" data-content="添加主题" style="margin-top: 3px;">
                                    <i class="fa fa-plus text-md"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void()" class="text-warning">
                                    <span class="badge badge-fade popover-with-html" data-content="消息提醒"
                                          id="notification-count">  0 </span>
                                </a>
                            </li>

                            <li>
                                <a href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dLabel">
                                    <img class="avatar-topnav" alt="Summer" src="https://dn-phphub.qbox.me/uploads/avatars/1427_1436517055.jpeg?imageView2/1/w/100/h/100"/>
                                    <?=Yii::$app->user->identity->username;?>
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class="button" href="<?=Url::toRoute(['/user/index', 'id'=>Yii::$app->user->identity->getId()]);?>" data-lang-loginout="你确定要退出吗?">
                                            <i class="fa fa-user text-md"></i> 个人中心
                                        </a>
                                    </li>
                                    <li>
                                        <a class="button" href="<?=Url::toRoute(['/user/edit', 'id'=>Yii::$app->user->identity->getId()]);?>">
                                            <i class="fa fa-cog text-md"></i> 编辑资料
                                        </a>
                                    </li>
                                    <li>
                                        <a id="login-out" class="button" href="<?=Url::toRoute(['site/logout']);?>" data-lang-loginout="你确定要退出吗?">
                                            <i class="fa fa-sign-out text-md"></i> 退出
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>


                    </ul>
                </div>
            </div>

        </div>
    </div>

    <?= $content; ?>

    <footer class="footer">
        <div class="container">
            <div class="row footer-top">

                <div class="col-sm-5 col-lg-5">
                    <h4>
                        <img src="/img/logo.png" alt="" width="50"/>
                        <span class="pull-right text-md padding-top-lg" style="padding-top: 18px;">
                      <a class="popover-with-html" data-content="查看源代码" target="_blank" style="padding-right:8px"
                         href="javascript:void()"><i class="fa fa-github-alt"
                                                                         aria-hidden="true"></i></a>
                            <!--
                      <a class="popover-with-html" data-content="关注 PHPdx 微博账号" target="_blank"
                         style="padding-right:8px" href="http://weibo.com/huaiguoguo"><i class="fa fa-weibo"
                                                                                     aria-hidden="true"></i></a>
                                                                                     -->
                      <a class="popover-with-html" data-content="扫码关注微信订阅号：huochai2015" target="_blank"
                         style="padding-right:8px"
                         href="/img/qrcode2.jpg"><i
                              class="fa fa-weixin" aria-hidden="true"></i></a>
                      <a class="popover-with-html" data-content="下载 Chrome 消息通知插件" target="_blank"
                         style="padding-right:8px"
                         href="https://chrome.google.com/webstore/detail/phphub-notifier/fcopfkdgikhodlcjkjdppdfkbhmehdon"><i
                              class="fa fa-chrome" aria-hidden="true"></i></a>
                  </span>
                    </h4>
                    <p class="padding-top-xsm">我们是中国最靠谱的 PHP &amp; Yii2 开发者社区，致力于打造一个 PHPer 分享创造、结识伙伴、协同互助的平台。</p>
                    <span style="font-size:0.9em">♥ Do what you love, love what you do. - <a
                            href="javascript:void()">The EST Group</a></span>
                </div>

                <div class="col-sm-6 col-lg-6 col-lg-offset-1">

                    <div class="row">
                        <!--
                        <div class="col-sm-3">
                            <h4>赞助商</h4>
                            <ul class="list-unstyled">
                                <a href="http://www.ucloud.cn/?utm_source=zanzhu&amp;utm_campaign=phphub&amp;utm_medium=display&amp;utm_content=yejiao&amp;ytag=phphubyejiao"
                                   target="_blank"><img
                                        src="https://dn-phphub.qbox.me/uploads/banners/bQawWl3vT5dc2lYx5JZ7.png"
                                        class="popover-with-html footer-sponsor-link" width="98" data-placement="top"
                                        data-content="本站服务器由 UCloud 赞助"></a>
                                <a href="http://www.qiniu.com/?utm_source=phphub" target="_blank"><img
                                        src="https://dn-phphub.qbox.me/uploads/banners/yGLIR0idW7zsInjsNmzr.png"
                                        class="popover-with-html footer-sponsor-link" width="98" data-placement="top"
                                        data-content="本站 CDN 服务由七牛赞助"></a>
                            </ul>
                        </div>
-->
                        <div class="col-sm-4">
                            <h4>统计信息</h4>
                            <ul class="list-unstyled">
                                <li>社区会员: <?=\common\models\User::find()->count();?></li>
                                <li>主题数: <?=\common\models\Topic::find()->count();?></li>
                                <li>评论数: <?=\common\models\Comment::find()->count();?></li>

                            </ul>
                        </div>

                        <div class="col-sm-5">
                            <h4>其他信息</h4>
                            <ul class="list-unstyled">
<!--                                <li><a href="/about">关于我们</a></li>-->
<!--                                <li><a href="https://abc.org/hall_of_fames">-->
<!--                                        <i class="fa fa-star"  aria-hidden="true"></i> 名人堂</a>-->
<!--                                </li>-->
                                <li class="popover-with-html" data-content="求职群">求职群: 302373687</li>
                                <li class="popover-with-html" data-content="Yii框架群">Yii2群 : 70324424</li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h4>微信订阅号</h4>
                            <img class="image-border popover-with-html" data-content="扫码，或者搜索微信订阅号：huochai2015"
                                 src="/img/qrcode2.jpg"
                                 style="width:100px;height:100px;">
                        </div>

                    </div>

                </div>
            </div>
            <br>
            <br>
        </div>
    </footer>

</div>


<?php $this->endBody() ?>

<!--<script src="https://dn-phphub.qbox.me//build/assets/js/scripts-b7d580e6f4.js"></script>-->

<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1257015623'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/stat.php%3Fid%3D1257015623%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
<script>
//    (function (i, s, o, g, r, a, m) {
//        i['GoogleAnalyticsObject'] = r;
//        i[r] = i[r] || function () {
//                (i[r].q = i[r].q || []).push(arguments)
//            }, i[r].l = 1 * new Date();
//        a = s.createElement(o),
//            m = s.getElementsByTagName(o)[0];
//        a.async = 1;
//        a.src = g;
//        m.parentNode.insertBefore(a, m)
//    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
//
//    ga('create', 'UA-53903425-6', 'auto');
//    ga('send', 'pageview');

</script>

</body>
</html>
<?php $this->endPage() ?>