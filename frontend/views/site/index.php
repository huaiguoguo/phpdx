<?php

/* @var $this yii\web\View */

use yii\web\View;
use frontend\assets\AppAsset;
use \yii\helpers\Url;

$this->title = 'phpdx';
?>


<div class="container main-container">
    <div class="box text-center site-intro rm-link-color">
        PHPHub 是积极向上的 PHP & Laravel 开发者社区
        <a href="https://github.com/summerblue/phphub5" target="_blank">
            <i class="fa fa-github-alt" style="font-size:17px"></i> 源代码
        </a>、
        <a href="http://weibo.com/u/5963322692" target="_blank">
            <i class="fa fa-weibo" style="font-size:17px"></i>
        </a>
            微博账号</a>、QQ群：579866868
    </div>

    <div class="banner-container rbs row">
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            <div class="item">
                <a href="http://laravel-china.org/docs/5.1" target="_blank">
                    <p class="img"><span
                            style="background-image:url(https://dn-phphub.qbox.me/uploads/banners/qCpz5a1iBETEfnNEAkGe.png?imageView2/1/w/424/h/212)"></span>
                    </p>
                    <p class="caption">Laravel 5.1 中文文档</p>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            <div class="item">
                <a href="https://phphub.org/categories/1" target="_self">
                    <p class="img"><span
                            style="background-image:url(https://dn-phphub.qbox.me/uploads/banners/0wgbAVabZB9GA2yaU8AY.png?imageView2/1/w/424/h/212)"></span>
                    </p>
                    <p class="caption">酷工作</p>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            <div class="item">
                <a href="http://lumen.laravel-china.org/" target="_blank">
                    <p class="img"><span
                            style="background-image:url(https://dn-phphub.qbox.me/uploads/banners/v7iXEpnnYauMEBegJb4Q.png?imageView2/1/w/424/h/212)"></span>
                    </p>
                    <p class="caption">Lumen 5.1 中文文档</p>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            <div class="item">
                <a href="https://cs.phphub.org/" target="_blank">
                    <p class="img"><span
                            style="background-image:url(https://dn-phphub.qbox.me/uploads/banners/YCkIqPrz6v8MV0keu4pW.png?imageView2/1/w/424/h/212)"></span>
                    </p>
                    <p class="caption">Laravel 速查表</p>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            <div class="item">
                <a href="https://psr.phphub.org/" target="_blank">
                    <p class="img"><span
                            style="background-image:url(https://dn-phphub.qbox.me/uploads/banners/0pyH7UgXhF7PTBkLZRak.png?imageView2/1/w/424/h/212)"></span>
                    </p>
                    <p class="caption">PSR PHP 标准规范</p>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            <div class="item">
                <a href="http://laravel-china.org/api/5.1/" target="_blank">
                    <p class="img"><span
                            style="background-image:url(https://dn-phphub.qbox.me/uploads/banners/EptWCkT1qDDvtn5nV2id.png?imageView2/1/w/424/h/212)"></span>
                    </p>
                    <p class="caption">Laravel API 文档</p>
                </a>
            </div>
        </div>
    </div>

    <div class="panel panel-default list-panel home-topic-list">
        <div class="panel-heading">
            <h3 class="panel-title text-center">
                社区精华帖 &nbsp;
                <a href="https://phphub.org/feed" style="color: #E5974E; font-size: 14px;" target="_blank">
                    <i class="fa fa-rss"></i>
                </a>
            </h3>

        </div>

        <div class="panel-body ">
            <ul class="list-group row topic-list">
                <?php foreach($topiclist as $key=>$value):?>
                <li class="list-group-item media col-md-6" style="margin-top: 0px;">

                    <a class="reply_last_time hidden-xs meta" href="https://phphub.org/topics/2741">
                        <?=count($value->votes);?> 点赞
                        <span> ⋅ </span>
                        <?=count($value->comments);?> 回复
                    </a>

                    <div class="avatar pull-left">
                        <a href="https://phphub.org/users/5662">
                            <img class="media-object img-thumbnail avatar avatar-middle" alt="<?=$value->user->realname;?>"
                                 src="<?=$value->user->avatar;?>"/>
                        </a>
                    </div>

                    <div class="infos">
                        <div class="media-heading">
                            <span class="hidden-xs label label-default">分享</span>
                            <a href="<?=Url::toRoute(['/topics/detail', 'id'=>$value->id]);?>" title="<?=$value->title;?>"><?=$value->title;?></a>
                        </div>
                    </div>

                </li>
                <?php endforeach;?>
            </ul>

        </div>

        <div class="panel-footer text-right">

            <a href="topics?filter=excellent" class="more-excellent-topic-link">
                查看更多精华帖 <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>


</div>

<?php
//AppAsset::addScript($this, "js/plugins/footable/footable.all.min.js");
$this->beginBlock('footable');
?>


<?php
$this->endBlock();
$this->registerJs($this->blocks['footable'], View::POS_END);
?>


