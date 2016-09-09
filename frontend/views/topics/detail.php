<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/9/3
 * Time: 17:01
 */


use yii\helpers\Markdown;

?>


<script>
    Config = {
        'cdnDomain': 'https://dn-phphub.qbox.me/',
        'user_id': 1427,
        'user_avatar': "https://dn-phphub.qbox.me/uploads/avatars/1427_1436517055.jpeg?imageView2/1/w/100/h/100",
        'user_link': "https://phphub.org/users/1427",
        'routes': {
            'notificationsCount': 'https://phphub.org/notifications/count',
            'upload_image': 'https://phphub.org/upload_image'
        },
        'token': 'K7sMA0lwNF91wxuJnByQtf5zMUyksrYaIOn1BpGB',
        'environment': 'production',
        'following_users': []
    };

    var ShowCrxHint = 'no';
</script>


<div class="container main-container">


    <div class="col-md-9 topics-show main-col">
        <!-- Topic Detial -->
        <div class="topic panel panel-default padding-md">
            <div class="infos panel-heading">

                <h1 class="panel-title topic-title"><?= $detail->title; ?></h1>

                <div class="meta inline-block">

                    <a href="https://phphub.org/categories/5" class="remove-padding-left">
                        <i class="fa fa-folder text-md" aria-hidden="true"></i> 分享
                    </a>
                    ⋅
                    <a href="https://phphub.org/users/2447"> M1racle </a>
                    ⋅
                    于 <abbr title="2016-08-27 11:54:01"
                            class="timeago"><?= date("Y-m-d H:i:s", $detail->created_at); ?></abbr>
                    ⋅

                    最后回复由
                    <a href="https://phphub.org/users/2447"> M1racle </a>
                    于 <abbr title="2016-09-02 20:14:10" class="timeago">2016-09-02 20:14:10</abbr>
                    ⋅

                    711 阅读

                </div>
                <div class="clearfix"></div>
            </div>

            <div class="content-body entry-content panel-body ">

                <div class="markdown-body" id="emojify">
                    <p> <?= Markdown::processParagraph($detail->content, 'extra'); ?> </p>
                </div>

                <div data-lang-excellent="本帖已被设为精华帖！" data-lang-wiki="本帖已被设为社区 Wiki！" class="ribbon-container">
                    <div class="ribbon">
                        <div class="ribbon-excellent">
                            <i class="fa fa-trophy"></i> 本帖已被设为精华帖！
                        </div>

                    </div>
                </div>
            </div>

            <div class="appends-container" data-lang-append="附言">
            </div>

            <div class="panel-footer operate">

                <div class="pull-left hidden-xs">
                    <div class="social-share-cs "></div>
                </div>

                <div class="pull-right actions">


                </div>
                <div class="clearfix"></div>
            </div>


            <div class="modal fade" id="exampleModal" tabindex="-1" role="" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">添加附言</h4>
                        </div>

                        <form method="POST" action="https://phphub.org/topics/2694/append" accept-charset="UTF-8">
                            <input type="hidden" name="_token" value="K7sMA0lwNF91wxuJnByQtf5zMUyksrYaIOn1BpGB">
                            <div class="modal-body">

                                <div class="alert alert-warning">
                                    附加内容, 使用此功能的话, 会给所有参加过讨论的人发送提醒.
                                </div>

                                <div class="form-group">
                                        <textarea class="form-control" style="min-height:20px"
                                                  placeholder="请使用 Markdown 格式书写 ;-)" name="content" cols="50"
                                                  rows="10"></textarea>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>


        <div class="votes-container panel panel-default padding-md">

            <div class="panel-body vote-box text-center">

                <div class="btn-group">

                    <a data-ajax="post" href="javascript:void(0);"
                       data-url="<?= \yii\helpers\Url::toRoute(['topics/upvote']); ?>"
                       title="Up Vote"
                       data-csrf_param= <?= Yii::$app->request->csrfParam; ?>
                       data-csrf_token = <?= Yii::$app->request->csrfToken; ?>
                    data-content="点赞相当于收藏，可以在个人页面的「赞过的话题」导航里查看"
                    id="up-vote"
                    class="vote btn btn-primary btn-inverted popover-with-html ">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    点赞
                    </a>

                </div>

                <div class="voted-users">

                    <div class="user-lists">
                        <a href="https://phphub.org/users/438" data-userId="438">
                            <img class="img-thumbnail avatar avatar-middle"
                                 src="https://dn-phphub.qbox.me/uploads/avatars/438_1468372885.jpeg?imageView2/1/w/100/h/100"
                                 style="width:48px;height:48px;">
                        </a>
                        <a href="https://phphub.org/users/5632" data-userId="5632">
                            <img class="img-thumbnail avatar avatar-middle"
                                 src="https://dn-phphub.qbox.me/uploads/avatars/5632_1472688495.png?imageView2/1/w/100/h/100"
                                 style="width:48px;height:48px;">
                        </a>
                        <a href="https://phphub.org/users/5502" data-userId="5502">
                            <img class="img-thumbnail avatar avatar-middle"
                                 src="https://dn-phphub.qbox.me/uploads/avatars/5502_1471884784.png?imageView2/1/w/100/h/100"
                                 style="width:48px;height:48px;">
                        </a>
                        <a href="https://phphub.org/users/4103" data-userId="4103">
                            <img class="img-thumbnail avatar avatar-middle"
                                 src="https://dn-phphub.qbox.me/uploads/avatars/4103_1460337320.png?imageView2/1/w/100/h/100"
                                 style="width:48px;height:48px;">
                        </a>
                        <a href="https://phphub.org/users/5306" data-userId="5306">
                            <img class="img-thumbnail avatar avatar-middle"
                                 src="https://dn-phphub.qbox.me/uploads/avatars/5306_1470714129.jpeg?imageView2/1/w/100/h/100"
                                 style="width:48px;height:48px;">
                        </a>
                        <a href="https://phphub.org/users/1035" data-userId="1035">
                            <img class="img-thumbnail avatar avatar-middle"
                                 src="https://dn-phphub.qbox.me/uploads/avatars/1035_1427371042.jpeg?imageView2/1/w/100/h/100"
                                 style="width:48px;height:48px;">
                        </a>
                        <a href="https://phphub.org/users/1" data-userId="1">
                            <img class="img-thumbnail avatar avatar-middle"
                                 src="https://dn-phphub.qbox.me/uploads/avatars/1_1471136343.jpg?imageView2/1/w/100/h/100"
                                 style="width:48px;height:48px;">
                        </a>
                    </div>

                    <a class="voted-template" href="" data-userId="" style="display:none">
                        <img class="img-thumbnail avatar avatar-middle" src="" style="width:48px;height:48px;">
                    </a>
                </div>

            </div>
        </div>

        <!-- Reply List -->
        <div class="replies panel panel-default list-panel replies-index padding-md">
            <div class="panel-heading">
                <div class="total">回复数量: <b>6</b></div>
            </div>

            <div class="panel-body">

                <ul class="list-group row">
                    <?php $list = $detail->comments;
                    foreach ($list as $key => $value): ?>
                        <li class="list-group-item media" style="margin-top: 0px;">

                            <div class="avatar pull-left">
                                <a href="https://phphub.org/users/2447">
                                    <img class="media-object img-thumbnail avatar avatar-middle" alt="M1racle"
                                         src="https://dn-phphub.qbox.me/uploads/avatars/2447_1443275733.jpeg?imageView2/1/w/100/h/100"
                                         style="width:48px;height:48px;"/>
                                </a>
                            </div>

                            <div class="infos">
                                <div class="media-heading">
                                    <a href="<?=\yii\helpers\Url::toRoute(['user/index', 'id'=>$value->created_by]);?>" title="<?=$value->user->username;?>"
                                       class="remove-padding-left author">
                                        <?=$value->user->username;?>
                                    </a>
                                    <span class="introduction"><?=$value->user->introduction;?></span>
                                    <span class="operate pull-right">
                                      <a class="comment-vote" data-ajax="post" id="reply-up-vote-12827" href="javascript:void(0);" data-url="https://phphub.org/replies/12827/vote" title="Vote Up">
                                         <i class="fa fa-thumbs-o-up" style="font-size:14px;"></i>
                                         <span class="vote-count"></span>
                                      </a>
                                      <span> ⋅  </span>
                                      <a class="fa fa-reply" href="javascript:void(0)" onclick="replyOne('<?=$value->user->username;?>');" title="回复 <?=$value->user->username;?>"></a>
                                    </span>
                                    <div class="meta">
                                        <a name="reply<?=$key;?>" class="anchor" href="#reply<?=$key;?>" aria-hidden="true">#<?=$key;?></a>
                                        <span> ⋅  </span>
                                        <abbr class="timeago" title="<?=date("Y-m-d H:i:s", $value->created_at);?>"><?=date("Y-m-d H:i:s", $value->created_at);?></abbr>
                                    </div>
                                </div>

                                <div class="media-body markdown-reply content-body">
                                    <p>

                                        <?=$value->content;?>
                                    </p>
                                </div>
                            </div>
                        </li>

                    <?php endforeach; ?>
                    <a name="last-reply" class="anchor" href="#last-reply" aria-hidden="true"></a>
                </ul>


                <div id="replies-empty-block" class="empty-block hide">暂无评论~~</div>

                <!-- Pager -->
                <div class="pull-right" style="padding-right:20px">

                </div>
            </div>
        </div>

        <!-- Reply Box -->
        <div class="reply-box form box-block">


            <form method="POST" action="<?=\yii\helpers\Url::toRoute(['topics/replies']);?>" accept-charset="UTF-8" id="reply-form">
                <input type="hidden" name="_token" value="K7sMA0lwNF91wxuJnByQtf5zMUyksrYaIOn1BpGB">
                <input type="hidden" name="topic_id" value="2694"/>

                <div id="reply_notice" class="box">
                    <ul class="helpblock list">
                        <li>请注意单词拼写，以及中英文排版，<a
                                href="https://github.com/sparanoid/chinese-copywriting-guidelines">参考此页</a>
                        </li>
                        <li>支持 Markdown 格式, <strong>**粗体**</strong>、~~删除线~~、<code>`单行代码`</code>, 更多语法请见这里 <a
                                href="https://github.com/riku/Markdown-Syntax-CN/blob/master/syntax.md">Markdown
                                语法</a></li>
                        <li>支持表情，使用方法请见 <a href="https://phphub.org/topics/45" target="_blank">Emoji 自动补全来咯</a>，可用的
                            Emoji 请见 :metal: :point_right: <a href="https://phphub.org/ecc/index.html"
                                                              target="_blank" rel="nofollow"> Emoji 列表 </a> :star:
                            :sparkles:
                        </li>
                        <li>上传图片, 支持拖拽和剪切板黏贴上传, 格式限制 - jpg, png, gif</li>
                        <li>发布框支持本地存储功能，会在内容变更时保存，「提交」按钮点击时清空</li>
                    </ul>
                </div>

                <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="请使用 Markdown 格式书写 ;-)"
                                  style="overflow:hidden" id="reply_content" name="body" cols="50"></textarea>
                </div>

                <div class="form-group reply-post-submit">
                    <input class="btn btn-primary " id="reply-create-submit" type="submit" value="回复">
                    <span class="help-inline" title="Or Command + Enter">Ctrl+Enter</span>
                </div>

                <div class="box preview markdown-reply" id="preview-box" style="display:none;"></div>

            </form>
        </div>


    </div>


    <div class="col-md-3 side-bar">

        <div class="panel panel-default corner-radius">

            <div class="panel-heading text-center">
                <h3 class="panel-title">作者：<?= $detail->user->username; ?></h3>
            </div>

            <div class="panel-body text-center topic-author-box">
                <a href="https://phphub.org/users/2447">
                    <img src="<?= $detail->user->avatar; ?>" style="width:80px; height:80px;margin:5px;"
                         class="img-thumbnail avatar"/>
                </a>

                <div class="media-body padding-top-sm">
                    <div class="media-heading">

    <span class="introduction">
         <?= $detail->user->introduction; ?>
    </span>

                    </div>

                    <ul class="list-inline">

                        <li>
                            <a href="https://github.com/<?= $detail->user->github_name; ?>" target="_blank">
                                <i class="fa fa-github-alt"></i> GitHub
                            </a>
                        </li>
                        <li>
                            <a href="<?= $detail->user->personal_website; ?>" rel="nofollow" target="_blank"
                               class="url">
                                <i class="fa fa-globe"></i> Website
                            </a>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <div class="panel panel-default corner-radius">
            <div class="panel-heading text-center">
                <h3 class="panel-title">M1racle 的其他话题</h3>
            </div>
            <div class="panel-body">
                <ul class="list">
                    <?php
                    $topics = $detail->user->topics;
                    foreach ($topics as $key => $value):?>
                        <li>
                            <a href="https://phphub.org/topics/2702" class="popover-with-html"
                               data-content="<?= $value->title; ?>">
                                <?= $value->title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>


        <div class="panel panel-default corner-radius">
            <div class="panel-heading text-center">
                <h3 class="panel-title">分类下其他主题</h3>
            </div>
            <div class="panel-body">
                <ul class="list">
                    <?php $list = [];
                    foreach ($list as $key => $value): ?>
                        <li>
                            <a href="https://phphub.org/topics/2622" class="popover-with-html"
                               data-content="Laravel-china.org 现支持查看英文文档">
                                Laravel-china.org 现支持查看英文文档
                            </a>
                        </li>
                    <?php endforeach; ?>
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


        <div class="panel panel-default corner-radius panel-hot-topics">
            <div class="panel-heading text-center">
                <h3 class="panel-title">随机推荐话题</h3>
            </div>
            <div class="panel-body">
                <ul class="list">
                    <?php $list = [];
                    foreach ($list as $key => $value): ?>
                        <li>
                            <a href="https://phphub.org/topics/2622" class="popover-with-html"
                               data-content="Laravel-china.org 现支持查看英文文档">
                                Laravel-china.org 现支持查看英文文档
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>


        <div class="panel panel-default corner-radius">
            <div class="panel-body text-center" style="color:#a5a5a5">
                Power by <a href="javascript:alert('以后有链接了加上')" target="_blank"
                            style="color:inherit">火柴</a>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>

    <div class="banner-container rbs row">
    </div>


</div>


<script type="text/javascript">

    $(document).ready(function () {
        var $config = {
            title: '自己撸的 blog from PHPdx - PHP，Yii2的中文社区 #laravel# @phphub  @李桂龙_CJ ',
            wechatQrcodeTitle: "微信扫一扫：分享", // 微信二维码提示文字
            wechatQrcodeHelper: '<p>微信里点“发现”，扫一下</p><p>二维码便可将本文分享至朋友圈。</p>',
            sites: ['weibo', 'wechat', 'facebook', 'twitter', 'google', 'qzone', 'qq', 'douban'],
        };

        socialShare('.social-share-cs', $config);

        Config.following_users = [];
        PHPHub.initAutocompleteAtUser();
    });

</script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-53903425-6', 'auto');
    ga('send', 'pageview');

</script>


