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
                <!--
                <form class="m-t" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                    <a href="login_two_columns.html#">
                        <small>Forgot password?</small>
                    </a>

                    <p class="text-muted text-center">
                        <small>Do not have an account?</small>
                    </p>
                    <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
                </form>
                -->
                <p class="m-t">
                    <small>php大学 &copy; 2016</small>
                </p>
        </div>
    </div>


</div>
