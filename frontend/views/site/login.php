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
        <div class="col-md-5 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">登录</div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin(
                        [
                            'options'            => ['id'             => 'new_user',
                                                     'class'          => "simple_form ",
                                                     'accept-charset' => "UTF-8",
                                                     'data-remote'    => "true",
                                                     'novalidate'     => "novalidate"
                            ],
                            'enableClientScript' => true
                        ]
                    );
                    ?>
                    <input name="utf8" type="hidden" value="✓">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'id'=>"user_login", 'class'=>'form-control input-lg'])->label('用户名'); ?>
                    <?= $form->field($model, 'password')->passwordInput(['autofocus' => true, 'id'=>"user_password", 'class'=>'form-control input-lg'])->label('密 码'); ?>


                    <?= $form->field($model, 'rememberMe')->checkbox(['id'=>"user_remember_me"])->label(''); ?>

                    <div class="form-actions">
                        <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'commit', 'data-disable-with' => "正在登录"]) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#new_user').on('ajax:error', function (event, xhr, status, error) {
            App.alert(xhr.responseText, '#main');
        })
    </script>

</div>

<!--

<div class="loginColumns animated fadeInDown">
    <div class="row">

            <div class="ibox-content">

                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?php $form->field($model, 'username')->textInput(['autofocus' => true])->label('用户名'); ?>

                <?php $form->field($model, 'password')->passwordInput()->label('密码'); ?>

                <?php $form->field($model, 'rememberMe')->checkbox(); ?>

                <div class="form-group">
                    <?php Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

<p class="m-t">
    <small>php大学 &copy; 2016</small>
</p>
</div>
</div>


</div>
-->