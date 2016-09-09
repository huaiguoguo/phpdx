<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/9/4
 * Time: 7:29
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

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


    <?php if($successMsg = Yii::$app->session->getFlash('success')):?>
    <div class="alert alert-success">
        <button type="button"
                class="close"
                data-dismiss="alert"
                aria-hidden="true">&times;</button>
<?php echo $successMsg;?>
        成功登录，Chrome 用户可使用 <a target="_blank"
                             href="https://chrome.google.com/webstore/detail/fcopfkdgikhodlcjkjdppdfkbhmehdon">PHPHub
            插件</a> 实时接收消息提醒。
    </div>
    <?php else:?>
    <?php endif;?>


    <div class="users-show">

        <div class="col-md-3 box" style="padding: 15px 15px;">
            <?= $this->render('left_menu'); ?>
        </div>

        <div class="main-col col-md-9 left-col">

            <div class="panel panel-default padding-md">

                <div class="panel-body ">
                    <h2><i class="fa fa-cog" aria-hidden="true"></i> 编辑个人资料</h2>
                    <hr>
                    <?php
                    $activeform = ActiveForm::begin([
                                                        'options'            => ['accept-charset' => "UTF-8", 'enctype' => "multipart/form-data", 'class' => "form-horizontal"],
                                                        'enableClientScript' => true,
                                                        'fieldConfig'        => [
                                                            'template'     => '{label} <div class="col-sm-6">{input}</div>  {hint}  {error} ',
                                                            'labelOptions' => ['class' => 'col-sm-2 control-label'], //修改label的样式
                                                            'hintOptions'  => ['class' => 'col-sm-4 hint-block'], //修改label的样式
                                                            'errorOptions' => ['class' => 'col-sm-4 help-block'] //修改label的样式
                                                        ]
                                                    ]);
                    echo $activeform->field($User, 'github_name')->textInput()->label('GitHub Name')->hint('请跟 GitHub 上保持一致');
                    echo $activeform->field($User, 'email')->textInput()->label('邮 箱')->hint('如：name@website.com');
                    echo $activeform->field($User, 'realname')->textInput()->label('真实姓名')->hint('如：李小明');

                    echo $activeform->field($User, 'city')->textInput()->label('城市')->hint('如：北京、广州');
                    echo $activeform->field($User, 'company')->textInput()->label('公司')->hint('如：腾讯');
                    echo $activeform->field($User, 'weibo_name')->textInput()->label('微博用户名')->hint('如：PHPHub');
                    echo $activeform->field($User, 'weibo_link')->textInput()->label('微博个人页面')->hint('如：http://weibo.com/phphub');
                    echo $activeform->field($User, 'twitter_account')->textInput()->label('Twitter 帐号')->hint('如：summer_charlie');
                    echo $activeform->field($User, 'linkedin')->textInput()->label('LinkedIn')->hint('如：https://cn.linkedin.com/in/summerblue');
                    echo $activeform->field($User, 'personal_website')->textInput()->label('个人网站')->hint('如：example.com，不需要加前缀 https://');
//                    echo $activeform->field($User, 'wechat_qrcode')->textInput()->label('微信账号二维码')->hint('你的微信个人账号，或者订阅号');
//                    echo $activeform->field($User, 'payment_qrcode')->textInput()->label('支付二维码')->hint('文章打赏时使用，微信支付二维码');
                    echo $activeform->field($User, 'introduction')->textarea(['rows' => 5, 'cols' => 50])->label('个人简介')->hint('请一句话介绍你自己，大部分情况下会在你的头像和名字旁边显示');

                    ?>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-6">
                            <?= Html::submitButton('应用修改', ['class' => 'btn btn-primary', 'id' => 'user-edit-submit']) ?>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>

            </div>
        </div>


    </div>


</div>



