<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/9/8
 * Time: 19:45
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

            <ol class="breadcrumb">
                <li><a href="<?=Url::toRoute(['user/index', 'id'=>$userinfo->id]);?>">个人中心</a></li>
                <li class="active">Ta 赞过的话题</li>
            </ol>
            <div class="panel panel-default">

                <div class="panel-body remove-padding-vertically remove-padding-horizontal">

                    <ul class="list-group">
                        <?php foreach ($list as $key=>$value):?>
                        <li class="list-group-item">

                            <a href="<?=Url::toRoute(['topics/detail', 'id'=>$value->id]);?>" title="<?=$value->topic->title;?>">
                                <?=$value->topic->title;?>
                            </a>

                            <span class="meta">

        <a href="javascript:void()" title="招聘"> 招聘  </a>
        <span> ⋅ </span> <?=count($value->topic->votes);?> 点赞
        <span> ⋅ </span> <?=count($value->topic->comments);?> 回复
        <span> ⋅ </span>
        <span class="timeago popover-with-html" data-content="<?=$value->created_at;?>" data-original-title="" title="">5小时前</span>

      </span>

                        </li>
                        <?php endforeach;?>

                    </ul>
                    <div class="pull-right add-padding-vertically"> <ul class="pagination">
                            <li class="disabled"><span>«</span></li> <li class="active"><span>1</span></li>
                            <li><a href="https://abc.org/users/1/votes?page=2">2</a></li>
                            <li><a href="https://abc.org/users/1/votes?page=3">3</a></li>
                            <li><a href="https://abc.org/users/1/votes?page=4">4</a></li>
                            <li><a href="https://abc.org/users/1/votes?page=5">5</a></li>
                            <li><a href="https://abc.org/users/1/votes?page=6">6</a></li>
                            <li><a href="https://abc.org/users/1/votes?page=7">7</a></li>
                            <li><a href="https://abc.org/users/1/votes?page=8">8</a></li>
                            <li class="disabled"><span>...</span></li>
                            <li><a href="https://abc.org/users/1/votes?page=18">18</a></li>
                            <li><a href="https://abc.org/users/1/votes?page=19">19</a></li> <li><a href="https://abc.org/users/1/votes?page=2" rel="next">»</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

