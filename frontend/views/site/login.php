<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/7/11
 * Time: 21:33
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;


?>





<div id="main" class="main-container container">



    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">注册新用户</div>
                <div class="panel-body">
                    <form class="simple_form " novalidate="novalidate" id="new_user" action="/account" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓">
                        <div class="form-group">
                            <input type="email" class="form-control input-lg" placeholder="用户名" hint="谨慎填写，以后不可修改，建议用 Twitter ID。" name="user[login]" id="user_login">
                        </div>
                        <div class="form-group">
                            <input class="form-control input-lg" placeholder="名字" type="text" name="user[name]" id="user_name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-lg" placeholder="Email" name="user[email]" id="user_email">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label for="user_email_public" class="checkbox"><input name="user[email_public]" type="hidden" value="0"><input type="checkbox" value="1" checked="checked" name="user[email_public]" id="user_email_public"> 公开 Email</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control input-lg" placeholder="密码" type="password" name="user[password]" id="user_password">
                        </div>
                        <div class="form-group">
                            <input class="form-control input-lg" placeholder="确认密码" type="password" name="user[password_confirmation]" id="user_password_confirmation">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control input-lg" placeholder="验证码" name="_rucaptcha" type="text" autocorrect="off" autocapitalize="off" pattern="[0-9a-z]*" maxlength="4" autocomplete="off">
                                <span class="input-group-addon input-group-captcha"><a class="rucaptcha-image-box" href="#"><img class="rucaptcha-image" src="https://ruby-china.org/rucaptcha/" alt="Rucaptcha"></a></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="commit" value="提交注册信息" class="btn btn-lg btn-primary" data-disable-with="正在提交">
                            / <a class="btn btn-lg btn-default" href="/account/sign_in">登录</a>
                        </div>
                    </form>      </div>
            </div>
        </div>
    </div>

</div>



<!--

<div class="loginColumns animated fadeInDown">
    <div class="row">

            <div class="ibox-content">

                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('用户名'); ?>

                <?= $form->field($model, 'password')->passwordInput()->label('密码'); ?>

                <?= $form->field($model, 'rememberMe')->checkbox(); ?>

                <div class="form-group">
                    <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

<p class="m-t">
    <small>php大学 &copy; 2016</small>
</p>
</div>
</div>


</div>
-->