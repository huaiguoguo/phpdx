<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title                   = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>




<div id="main" class="main-container container">



    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">注册新用户</div>
                <div class="panel-body">

                        <?php $form = ActiveForm::begin(
    [
        'options'            => [
            'id'             => 'new_user',
            'class'          => "simple_form ",
            'accept-charset' => "UTF-8",
            'data-remote'    => "true",
            'novalidate'     => "novalidate",
        ],
        'enableClientScript' => true,
    ]
);
?>
                        <input name="utf8" type="hidden" value="✓">

                    <?=$form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => '用户名', 'id' => "user_login", 'class' => 'form-control input-lg'])->label('');?>
                    <?=$form->field($model, 'email')->textInput(['autofocus' => true, 'type' => 'email', 'placeholder' => 'Email', 'id' => "user_email", 'class' => 'form-control input-lg'])->label('');?>
                    <?=$form->field($model, 'email_public')->checkbox(['autofocus' => true, 'value' => 1, 'id' => "user_email_public"])->label('公开 Email');?>
                    <?=$form->field($model, 'password')->passwordInput(['autofocus' => true, 'placeholder' => '密码', 'id' => "user_password", 'class' => 'form-control input-lg'])->label('');?>
                    <?=$form->field($model, 'password_confirmation')->passwordInput(['autofocus' => true, 'placeholder' => '确认密码', 'id' => "user_password_confirmation", 'class' => 'form-control input-lg'])->label('');?>

<!--                         <div class="form-group">
                            <div class="input-group">
                                <input class="form-control input-lg" placeholder="验证码" name="_rucaptcha" type="text" autocorrect="off" autocapitalize="off" pattern="[0-9a-z]*" maxlength="4" autocomplete="off">
                                <span class="input-group-addon input-group-captcha"><a class="rucaptcha-image-box" href="#"><img class="rucaptcha-image" src="https://ruby-china.org/rucaptcha/" alt="Rucaptcha"></a></span>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <?=Html::submitButton('提交注册信息', ['class' => 'btn btn-lg btn-primary', 'name' => 'login-button', 'data-disable-with' => "正在提交"]);?>
                            / <?=Html::a('登录', \yii\helpers\Url::toRoute(['site/login']), ['class' => 'btn btn-lg btn-default']);?>
                        </div>
                    <?php ActiveForm::end();?>
                </div>
            </div>
        </div>
    </div>

</div>






<?php $this->beginBlock('icheck');?>


<?php
$this->endBlock();
$this->registerJs($this->blocks['icheck'], \yii\web\View::POS_END);
?>

