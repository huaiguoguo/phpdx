<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/9/4
 * Time: 7:50
 */

use yii\helpers\Url;

?>

<div class="padding-md">
    <div class="list-group text-center">
        <a href="<?=Url::toRoute(['/user/edit', 'id'=>Yii::$app->user->identity->getId()]);?>" class="list-group-item active">
            <i class="text-md fa fa-list-alt" aria-hidden="true"></i>
            &nbsp;个人信息
        </a>
        <!--
        <a href="<?=Url::toRoute(['/user/edit_avatar', 'id'=>Yii::$app->user->identity->getId()]);?>" class="list-group-item ">
            <i class="text-md fa fa-picture-o" aria-hidden="true"></i>
            &nbsp;修改头像
        </a>
        <a href="<?=Url::toRoute(['/user/edit_email_notify', 'id'=>Yii::$app->user->identity->getId()]);?>" class="list-group-item ">
            <i class="text-md fa fa-bell" aria-hidden="true"></i>
            &nbsp;消息通知
        </a>
        <a href="<?=Url::toRoute(['/user/edit_social_binding', 'id'=>Yii::$app->user->identity->getId()]);?>" class="list-group-item ">
            <i class="text-md fa fa-flask" aria-hidden="true"></i>
            &nbsp;账号绑定
        </a>
        -->
    </div>
</div>
