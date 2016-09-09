<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/9/4
 * Time: 7:37
 */
use yii\helpers\Url;

?>

<script>
    Config = {
        'cdnDomain': 'https://dn-phphub.qbox.me/',
        'user_id': 1427,
        'user_avatar': "https://dn-phphub.qbox.me/uploads/avatars/1427_1436517055.jpeg?imageView2/1/w/100/h/100",
        'user_link': "https://abc.org/users/1427",
        'routes': {
            'notificationsCount': 'https://abc.org/notifications/count',
            'upload_image': 'https://abc.org/upload_image'
        },
        'token': 'K7sMA0lwNF91wxuJnByQtf5zMUyksrYaIOn1BpGB',
        'environment': 'production',
        'following_users': []
    };

    var ShowCrxHint = 'no';
</script>


<div class="container main-container">
    <div class="users-show  row">
        <?php echo $this->render('ucenter_left_menu', ['userinfo'=>$userinfo]);?>
        <div class="main-col col-md-9 left-col">

            <div class="panel panel-default">
                <div class="panel-heading">
                    最近话题
                </div>
                <div class="panel-body">
                    <?php if (count($userinfo->topics)): ?>
                        <ul class="list-group">

                            <?php $topics=$userinfo->topics;
                            foreach($topics as $key=>$value):?>
                            <li class="list-group-item">
                                <a href="<?=Url::toRoute(['topics/detail', 'id'=>$value->id]);?>" title="<?=$value->title;?>"> <?=$value->title;?></a>
                                <span class="meta">
                                   <a href="<?=Url::toRoute(['/categoy/index']);?>" title="<?=$value->category->category_name;?>"> <?=$value->category->category_name;?> </a>
                                   <span> ⋅ </span> <?=count($value->votes);?> 点赞
                                    <span> ⋅ </span> <?=count($value->comments);?> 回复 <span> ⋅ </span>
                                   <span class="timeago"><?=date("Y-m-d H:i:s", $value->created_at);?></span>
                                </span>
                            </li>
                            <?php endforeach;?>

                        </ul>
                    <?php else: ?>
                        <div class="empty-block">没有任何数据~~</div>
                    <?php endif; ?>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    最新评论
                </div>

                <div class="panel-body">
                    <ul class="list-group">

                        <?php $comments=$userinfo->comments;
                        foreach($comments as $key=>$value):?>
                        <li class="list-group-item">
                            <a href="<?=Url::toRoute(['topics/detail', 'id'=>$value->topic->id]);?>" title="<?=$value->topic->title;?>" class="remove-padding-left">
                                <?=$value->topic->title;?>
                            </a>
                            <span class="meta"> at <span class="timeago" title="<?=date("Y-m-d H:i:s", $value->created_at);?>"><?=date("Y-m-d H:i:s", $value->created_at);?></span></span>
                            <div class="reply-body markdown-reply content-body">
                                <p><?=$value->content;?></p>
                            </div>
                        </li>
                        <?php endforeach;?>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

