<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title                   = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="loginColumns middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <h3>注册</h3>
        <!--        <form class="m-t" role="form" action="--><? //=Url::toRoute(['/site/signup']);?><!--">-->
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => '用户名'])->label(""); ?>
        <?= $form->field($model, 'mobile')->textInput(['placeholder' => '手机', 'type' => 'number'])->label(""); ?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => '邮箱', 'type' => 'email'])->label(""); ?>
        <?= $form->field($model, 'password')->textInput(['placeholder' => '密码', 'type' => 'password'])->label(""); ?>

        <!--
        <div class="form-group">
            <div class="checkbox i-checks">
                <label> <input type="radio" name="SignupForm[level]" checked value="1"><i></i> 金主 </label>
                <label> <input type="radio" name="SignupForm[level]" value="2"><i></i> 作手 </label>
                <label> <input type="radio" name="SignupForm[level]" value="3"><i></i> 主理师 </label>
            </div>
        </div>
        -->

        <div class="form-group">
            <?= Html::submitButton('注册', ['class' => 'btn btn-primary block full-width m-b', 'name' => 'login-button']) ?>
        </div>

        <p class="text-muted text-center">
            <small>已经有账号?</small>
        </p>
        <?= Html::a('登录', Url::toRoute(['/site/login']), ['class' => 'btn btn-sm btn-white btn-block', 'name' => 'login-button']) ?>


        <!--

            <div class="form-group has-error">
                <input type="text" class="form-control" name="username" placeholder="用户名" required="">
            </div>
            <div class="form-group">
                <input type="number" minlength="11" maxlength="11" class="form-control" name="mobile" placeholder="手机" required="">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="邮箱" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="密码" required="">
            </div>
            <div class="form-group">
                <div class="checkbox i-checks">
                    <label> <input type="radio" name="level[]"><i></i> 金主 </label>
                    <label> <input type="radio" name="level[]"><i></i> 作手 </label>
                    <label> <input type="radio" name="level[]"><i></i> 主理师 </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary block full-width m-b">注册</button>

            <p class="text-muted text-center">
                <small>已经有账号?</small>
            </p>
            <a class="btn btn-sm btn-white btn-block" href="<?= Url::toRoute(['/site/login']); ?>">登录</a>
            -->
        <?php ActiveForm::end(); ?>
        <!--        </form>-->
    </div>
</div>


<?php $this->beginBlock('icheck'); ?>

<!--<script>-->
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
//</script>

<?php
$this->endBlock();
$this->registerJs($this->blocks['icheck'], \yii\web\View::POS_END);
?>

