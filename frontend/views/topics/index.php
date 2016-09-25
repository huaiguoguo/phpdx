<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/9/4
 * Time: 8:04
 */
?>

<script>
    Config = {
        'cdnDomain': 'https://dn-phphub.qbox.me/',
        'user_id': 1427,
        'user_avatar': "https://dn-phphub.qbox.me/uploads/avatars/1427_1436517055.jpeg?imageView2/1/w/100/h/100",
        'user_link': "/users/1427",
        'routes': {
//            'notificationsCount': '/notifications/count',
            'upload_image': '/upload_image'
        },
        'token': 'K7sMA0lwNF91wxuJnByQtf5zMUyksrYaIOn1BpGB',
        'environment': 'production',
        'following_users': []
    };

    var ShowCrxHint = 'no';
</script>


<div class="container main-container">


    <div class="col-md-9 topics-index main-col">
        <div class="panel panel-default">

            <div class="panel-heading">
                <ul class="list-inline topic-filter">
                    <li class="popover-with-html" data-content="最后回复排序"><a
                            href="#filter=default" class="active">活跃</a></li>
                    <li class="popover-with-html" data-content="只看加精的话题"><a
                            href="#filter=excellent">精华</a></li>
                    <li class="popover-with-html" data-content="点赞数排序">
                        <a href="#filter=vote">投票</a>
                    </li>
                    <li class="popover-with-html" data-content="发布时间排序"><a
                            href="#filter=recent">最近</a></li>
                    <li class="popover-with-html" data-content="无人问津的话题"><a
                            href="#filter=noreply">零回复</a></li>
                </ul>

                <div class="clearfix"></div>
            </div>


            <div class="panel-body remove-padding-horizontal">
                <ul class="list-group row topic-list">

                    <?php foreach ($list as $key => $value): ?>
                        <li class="list-group-item media" style="margin-top: 0px;">

                            <a class="reply_last_time hidden-xs" href="<?=\yii\helpers\Url::toRoute(['topics/detail', 'id'=>$value->id]);?>">
                                <img class="user_small_avatar avatar-circle"
                                     src="https://dn-phphub.qbox.me/uploads/avatars/5662_1472806137.jpeg?imageView2/1/w/100/h/100">

                                <span class="timeago"><?=date("Y-m-d H:i:s", $value->created_at);?></span>
                            </a>

                            <div class="avatar pull-left">
                                <a href="<?=\yii\helpers\Url::toRoute(['user/index', 'id'=>$value->created_by]);?>">
                                    <img class="media-object img-thumbnail avatar avatar-middle" alt="<?=$value->user->realname;?>"
                                         src="<?=$value->user->avatar;?>" onerror="this.src='http://tc.sinaimg.cn/maxwidth.800/tc.service.weibo.com/i_guancha_cn/6d98c59df1f820c3b826b2d6b2e8917f.jpg'"/>
                                </a>
                            </div>

                            <div class="reply_count_area hidden-xs">
                                <div class="count_of_votes" title="投票数">
                                    <?php echo count($value->votes);?>
                                </div>
                                <div class="count_set">
                                <span class="count_of_replies" title="回复数">
                                    <?php echo count($value->comments);?>
                                </span>
                                    <span class="count_seperator">/</span>
                                    <span class="count_of_visits" title="查看数"> 0 </span>
                                </div>
                            </div>

                            <div class="infos">
                                <div class="media-heading">
                                    <span class="hidden-xs label label-success">分享</span>
                                    <a href="<?=\yii\helpers\Url::toRoute(['topics/detail', 'id'=>$value->id]);?>" title="<?=$value->title;?>">
                                        <?=$value->title;?>
                                    </a>
                                </div>
                            </div>

                        </li>
                    <?php endforeach; ?>

                </ul>

            </div>

            <div class="panel-footer text-right remove-padding-horizontal pager-footer">
                <!-- Pager -->
                <ul class="pagination">
                    <li class="disabled"><span>&laquo;</span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="/topics?page=2">2</a></li>
                    <li><a href="/topics?page=3">3</a></li>
                    <li><a href="/topics?page=4">4</a></li>
                    <li><a href="/topics?page=5">5</a></li>
                    <li><a href="/topics?page=6">6</a></li>
                    <li><a href="/topics?page=7">7</a></li>
                    <li><a href="/topics?page=8">8</a></li>
                    <li class="disabled"><span>...</span></li>
                    <li><a href="/topics?page=12">12</a></li>
                    <li><a href="/topics?page=13">13</a></li>
                    <li><a href="/topics?page=2" rel="next">&raquo;</a></li>
                </ul>
            </div>


        </div>

        <!-- Nodes Listing -->

    </div>

    <div class="col-md-3 side-bar">


        <div class="panel panel-default corner-radius">
            <div class="panel-body text-center">
                <div class="btn-group">
                    <a href="<?=\yii\helpers\Url::toRoute(['topics/create']);?>" class="btn btn-primary btn-lg btn-inverted">
                        <i class="fa fa-paint-brush" aria-hidden="true"></i> 新 建 话 题
                    </a>
                </div>
            </div>
        </div>

        <div class="panel panel-default corner-radius panel-active-users">
            <div class="panel-heading text-center">
                <h3 class="panel-title">活跃用户（<a href="/hall_of_fames"><i class="fa fa-star"
                                                                                           aria-hidden="true"></i>
                        名人堂</a>）</h3>
            </div>
            <div class="panel-body">
                <div class="users-label">

<!--                    -->
<!--                    <a class="popover-with-html users-label-item" href="/users/1"-->
<!--                       data-content="Summer - Life-long learner">-->
<!--                        <img class="avatar-small inline-block"-->
<!--                             src="https://dn-phphub.qbox.me/uploads/avatars/1_1471136343.jpg?imageView2/1/w/100/h/100">-->
<!--                        Summer-->
<!--                    </a>-->

                </div>
            </div>
        </div>

        <div class="panel panel-default corner-radius panel-hot-topics">
            <div class="panel-heading text-center">
                <h3 class="panel-title">热门话题</h3>
            </div>
            <div class="panel-body">
                <ul class="list">

                    <li>
                        <a href="/topics/2776" class="popover-with-html"
                           data-content="今天看了一篇文章 大家一起讨论下">
                            今天看了一篇文章 大家一起讨论下
                        </a>
                    </li>
                    <li>
                        <a href="/topics/2712" class="popover-with-html"
                           data-content="把 if-else 的代码风格改成表格驱动法的意义">
                            把 if-else 的代码风格改成表格驱动法的意义
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="panel panel-default corner-radius">
            <div class="panel-body text-center sidebar-sponsor-box">
                <a class="sidebar-sponsor-link"
                   href="http://www.ucloud.cn/site/seo.html?utm_source=zanzhu&amp;utm_campaign=phphub&amp;utm_medium=display&amp;utm_content=shengji&amp;ytag=phphubshenji"
                   target="_blank">
                    <img src="https://dn-phphub.qbox.me/uploads/banners/IHfTLiWaKJ4CmUL4Tfbc.jpg"
                         class="popover-with-html" data-content="UCloud" width="100%">
                </a>
                <a class="sidebar-sponsor-link"
                   href="http://www.qiniu.com/products/live?utm_campaign=zhiboyunproduct&amp;utm_source=phphub&amp;utm_medium=advposition&amp;utm_content=png"
                   target="_blank">
                    <img src="https://dn-phphub.qbox.me/uploads/banners/VttpFstRPJH2FE4HECqy.png"
                         class="popover-with-html" data-content="七牛" width="100%">
                </a>
            </div>
        </div>

        <div class="panel panel-default corner-radius">
            <div class="panel-heading text-center">
                <h3 class="panel-title">友情社区</h3>
            </div>
            <div class="panel-body text-center" style="padding-top: 5px;">
                <a href="https://ruby-china.org" target="_blank" rel="nofollow" title="Ruby China"
                   style="padding: 3px;">
                    <img src="https://dn-phphub.qbox.me/assets/images/friends/ruby-china.png"
                         style="width:150px; margin: 3px 0;">
                </a>
                <a href="http://golangtc.com/" target="_blank" rel="nofollow" title="Golang 中国" style="padding: 3px;">
                    <img src="https://dn-phphub.qbox.me/assets/images/friends/golangcn.png"
                         style="width:150px; margin: 3px 0;">
                </a>
                <a href="http://cnodejs.org/" target="_blank" rel="nofollow" title="CNode：Node.js 中文社区"
                   style="padding: 3px;">
                    <img src="https://dn-phphub.qbox.me/assets/images/friends/cnodejs.png"
                         style="width:150px; margin: 3px 0;">
                </a>
                <a href="https://testerhome.com" target="_blank" rel="nofollow" title="Tester Home"
                   style="padding: 3px;">
                    <img src="https://dn-phphub.qbox.me/testerhome-logo.png" style="width:150px; margin: 3px 0;">
                </a>
                <a href="http://laravel.so/" target="_blank" rel="nofollow" title="Laravel So" style="padding: 3px;">
                    <img src="https://dn-phphub.qbox.me/uploads/images/201608/13/1/qEgPEq6wft.png"
                         style="width:150px; margin: 3px 0;">
                </a>
                <a href="https://easywechat.org/" target="_blank" rel="nofollow" title="Easy We Chat"
                   style="padding: 3px;">
                    <img src="https://easywechat.org/logo.svg" style="width:150px; margin: 3px 0;">
                </a>
            </div>
        </div>


        <div class="panel panel-default corner-radius">
            <div class="panel-heading text-center">
                <h3 class="panel-title">App 下载</h3>
            </div>
            <div class="panel-body text-center" style="padding: 7px;">
                <a href="/topics/1531" target="_blank" rel="nofollow" title="">
                    <img src="https://dn-phphub.qbox.me/uploads/images/201512/08/1/cziZFHqkm8.png" style="width:240px;">
                </a>
            </div>
        </div>


        <div class="panel panel-default corner-radius" style="color:#a5a5a5">
            <div class="panel-body text-center">
                ♥ Do what you love, love what you do. <br>
                by <a href="http://estgroupe.com/" style="color:#a5a5a5">The EST Group</a>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>
<!--
    <div class="banner-container rbs row">
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            <div class="item">
                <a href="http://laravel-china.org/docs/5.1" target="_blank">
                    <p class="img"><span
                            style="background-image:url(https://dn-phphub.qbox.me/uploads/banners/qCpz5a1iBETEfnNEAkGe.png?imageView2/1/w/424/h/212)"></span>
                    </p>
                    <p class="caption">Laravel 中文文档</p>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            <div class="item">
                <a href="/categories/1" target="_self">
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
                    <p class="caption">Lumen 中文文档</p>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            <div class="item">
                <a href="https://cs.abc.org/" target="_blank">
                    <p class="img"><span
                            style="background-image:url(https://dn-phphub.qbox.me/uploads/banners/YCkIqPrz6v8MV0keu4pW.png?imageView2/1/w/424/h/212)"></span>
                    </p>
                    <p class="caption">Laravel 速查表</p>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            <div class="item">
                <a href="https://psr.abc.org/" target="_blank">
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
    -->
    <div class="banner-container rbs row">
    </div>

</div>



