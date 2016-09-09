<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/9/8
 * Time: 18:24
 */

use yii\helpers\Url;

?>


<div class="col-md-3">
    <div class="box">

        <div class="padding-sm user-basic-info">
            <div style="">

                <div class="media">
                    <div class="media-left">
                        <div class="image">
                            <a href="javascript:void()" class="popover-with-html" data-content="修改头像">
                                <img class="media-object avatar-112 avatar img-thumbnail" src="">
                            </a>
                        </div>
                    </div>

                    <div class="media-body">
                        <h3 class="media-heading">
                            <?= $userinfo->username; ?>
                        </h3>
                        <div class="item">

                        </div>
                        <div class="item">
                            第 <?= $userinfo->getId(); ?> 位会员
                        </div>
                        <div class="item number">
                            注册于<span
                                class="timeago"><?= date("Y-m-d H:i:s", $userinfo->created_at); ?></span>
                        </div>

                        <div class="item number">
                            活跃于 <span class="timeago">2016-09-03 21:55:44</span>
                        </div>

                    </div>
                </div>

            </div>

            <hr>

            <div class="follow-info row">
                <div class="col-xs-4">
                    <a class="counter"
                       href="<?= Url::toRoute(['user/follower', 'id' => $userinfo->id]); ?>"><?= count($userinfo->followers); ?></a>
                    <a class="text" href="https://abc.org/users/1427/followers">关注者</a>
                </div>
                <div class="col-xs-4">
                    <a class="counter"
                       href="<?= Url::toRoute(['user/replies', 'id' => $userinfo->id]); ?>"><?= count($userinfo->comments); ?></a>
                    <a class="text" href="<?= Url::toRoute(['user/replies', 'id' => $userinfo->id]); ?>">评论</a>
                </div>
                <div class="col-xs-4">
                    <a class="counter"
                       href="<?= Url::toRoute(['user/topics', 'id' => $userinfo->id]); ?>"><?= count($userinfo->topics); ?></a>
                    <a class="text" href="<?= Url::toRoute(['user/topics', 'id' => $userinfo->id]); ?>">话题</a>
                </div>
            </div>
            <hr>
            <div class="topic-author-box text-center">
                <ul class="list-inline">
                    <li class="popover-with-html" data-content="<?= $userinfo->github_name; ?>">
                        <a href="https://github.com/<?= $userinfo->github_name; ?>"
                           target="_blank">
                            <i class="fa fa-github-alt"></i> GitHub
                        </a>
                    </li>
                </ul>
            </div>

            <hr>


            <?php if (!Yii::$app->user->isGuest): ?>
                <?php if ($userinfo->getId() == Yii::$app->user->identity->getId()): ?>
                    <a class="btn btn-primary btn-block"
                       href="<?= Url::toRoute(['/user/edit', 'id' => $userinfo->getId()]); ?>"
                       id="user-edit-button">
                        <i class="fa fa-edit"></i> 编辑个人资料
                    </a>
                <?php else: ?>
                    <?php
                    $follower    = Yii::$app->user->identity->followings;

                    $newFollower = [];
                    foreach ($follower as $key => $value) {
                        $newFollower[] = $value->id;
                    }
                    if (!in_array($userinfo->getId(), $newFollower)):
                        ?>
                        <a data-method="post" class="btn btn-warning btn-block" href="javascript:void(0);"
                           data-url="https://abc.org/users/follow/1" id="user-edit-button" style="cursor:pointer;">
                            <i class="fa fa-plus"></i> 关注
                            <form action="https://abc.org/users/follow/1" method="POST" style="display:none">
                                <input type="hidden" name="_method" value="post">
                                <input type="hidden" name="_token" value="K7sMA0lwNF91wxuJnByQtf5zMUyksrYaIOn1BpGB">
                            </form>
                        </a>
                    <?php else: ?>

                        <a data-method="post" class="btn btn-danger btn-block" href="javascript:void(0);"
                           data-url="https://abc.org/users/follow/1" id="user-edit-button" style="cursor:pointer;">
                            <i class="fa fa-minus"></i> 取消关注

                            <form action="https://abc.org/users/follow/1" method="POST" style="display:none">
                                <input type="hidden" name="_method" value="post">
                                <input type="hidden" name="_token" value="K7sMA0lwNF91wxuJnByQtf5zMUyksrYaIOn1BpGB">
                            </form>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>


        </div>

    </div>
    <div class="box text-center">

        <div class="padding-sm user-basic-nav">
            <ul class="list-group">
                <a href="<?= Url::toRoute(['user/topics', 'id' => $userinfo->id]); ?>" class="">
                    <li class="list-group-item"><i class="text-md fa fa-list-ul"></i> Ta 发布的话题</li>
                </a>

                <a href="<?= Url::toRoute(['user/replies', 'id' => $userinfo->id]); ?>" class="">
                    <li class="list-group-item"><i class="text-md fa fa-comment"></i> Ta 发表的回复</li>
                </a>

                <a href="<?= Url::toRoute(['user/following', 'id' => $userinfo->id]); ?>" class="">
                    <li class="list-group-item"><i class="text-md fa fa-eye"></i> Ta 关注的用户</li>
                </a>

                <a href="<?= Url::toRoute(['user/votes', 'id' => $userinfo->id]); ?>" class="">
                    <li class="list-group-item"><i class="text-md fa fa-thumbs-up"></i> Ta 赞过的话题</li>
                </a>

            </ul>
        </div>

    </div>
</div>
