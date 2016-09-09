<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/7/16
 * Time: 22:31
 */

use kucha\ueditor\UEditor;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

$request = Yii::$app->request;
?>

<div class="container main-container">

    <div class="topic_create">

        <div class="col-md-8 main-col">

            <div class="reply-box form box-block">

                <div class="alert alert-warning">
                    我们希望 PHPdx 能够成为技术氛围最好的 PHP 社区，而实现这个目标，需要我们所有人的共同努力：友善，公平，尊重知识和事实。
                </div>

                <?php $activeform = ActiveForm::begin([
                                                          'options'            => ['accept-charset' => "UTF-8", 'id' => 'topic-create-form'],
                                                          'enableClientScript' => true
                                                      ]);
                ?>

                <input type="hidden" name="<?= $request->csrfParam; ?>" value="<?= $request->csrfToken; ?>">

                <?= $activeform->field($Topic, 'category_id')->dropDownList(ArrayHelper::map($CateList,'id','category_name'), ['prompt' => '请选择分类', 'id' => "category-select"])->label(''); ?>

                <div class="category-hint alert alert-warning category-1 " style="display:none">
                    PHPHub 是国内最大的 PHP & Laravel 社区，招聘、求职、外包等相关的话题，都可以在此主题下发布。<br>请遵照 <a
                        href="https://abc.org/topics/817">PHPHub 招聘贴发布规范</a>，不遵循规范，会被视为对用户的不尊重，管理员会做沉贴操作，沉贴后用户基本上看不到帖子。符合规范，我们会为话题加精并推荐到网站首页、手机端首页、精华帖周报邮件、<a
                        href="http://weibo.com/phphub">微博官方账号</a>。
                </div>
                <div class="category-hint alert alert-warning category-3 " style="display:none">
                    社区公告，小朋友不要做坏事哦。
                </div>
                <div class="category-hint alert alert-warning category-4 " style="display:none">
                    新手问答，请仔细阅读 <a href="https://abc.org/topics/535">关于《提问的智慧》</a>，质量太低的问题，不遵循规范，会被视为对用户的不尊重，管理员会做沉贴操作，沉贴后用户基本上看不到帖子。排版清晰，信息完整的，我们会为话题加精，加精后的帖子将会被推荐到网站首页、手机端首页、精华帖周报邮件、<a
                        href="http://weibo.com/phphub">微博官方账号</a>。
                </div>
                <div class="category-hint alert alert-warning category-5 " style="display:none">
                    分享创造，分享知识，分享灵感，分享创意，分享美好的东西。排版清晰，内容精良的话，我们会为话题加精，加精后的帖子将会被推荐到网站首页、手机端首页、精华帖周报邮件、<a
                        href="http://weibo.com/phphub">微博官方账号</a>。
                </div>
                <div class="category-hint alert alert-warning category-6 " style="display:none">
                    教程文章请存放在此分类下，转载请在文章中注明「转载于xxx」。
                </div>


                <?= $activeform->field($Topic, 'title')->textInput(['placeholder' => "请填写标题", 'id' => "topic-title"])->label(''); ?>

                <div id="reply_notice" class="box">
                    <ul class="helpblock list">
                        <li>请注意单词拼写，以及中英文排版，<a
                                href="https://github.com/sparanoid/chinese-copywriting-guidelines">参考此页</a>
                        </li>
                        <li>支持 Markdown 格式, <strong>**粗体**</strong>、~~删除线~~、<code>`单行代码`</code>, 更多语法请见这里 <a
                                href="https://github.com/riku/Markdown-Syntax-CN/blob/master/syntax.md">Markdown
                                语法</a></li>
                        <li>支持表情，使用方法请见 <a href="https://abc.org/topics/45" target="_blank">Emoji 自动补全来咯</a>，可用的
                            Emoji 请见 :metal: :point_right: <a href="https://abc.org/ecc/index.html"
                                                              target="_blank" rel="nofollow"> Emoji 列表 </a> :star:
                            :sparkles:
                        </li>
                        <li>上传图片, 支持拖拽和剪切板黏贴上传, 格式限制 - jpg, png, gif</li>
                        <li>发布框支持本地存储功能，会在内容变更时保存，「提交」按钮点击时清空</li>
                    </ul>
                </div>

                <?php  //$activeform->field($Topic, 'content')->widget([  'cebe\markdown\Markdown',  ]);?>

                <?= $activeform->field($Topic, 'content')->textarea(['placeholder' => "请使用 Markdown 格式书写 ;-)", 'id' => "reply_content", 'rows' => 20])->label(''); ?>

                <div class="form-group status-post-submit">
                    <?= Html::submitButton('发 布', ['class' => 'btn btn-primary', 'id' => 'topic-create-submit', 'name' => 'submit-button']) ?>
                </div>


                <div class="box preview markdown-body" id="preview-box" style="display:none;"></div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

        <div class="col-md-4 side-bar">

            <div class="panel panel-default corner-radius help-box">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">以下类型的信息会污染我们的社区</h3>
                </div>
                <div class="panel-body">
                    <ul class="list">
                        <li>请传播美好的事物，这里拒绝低俗、诋毁、谩骂等相关信息</li>
                        <li>请尽量分享技术相关的话题，谢绝发布社会, 政治等相关新闻</li>
                        <li>这里绝对不讨论任何有关盗版软件、音乐、电影如何获得的问题</li>
                </div>
            </div>

            <div class="panel panel-default corner-radius help-box">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">在高质量优秀社区的我们</h3>
                </div>
                <div class="panel-body">
                    <ul class="list">
                        <li>分享生活见闻, 分享知识</li>
                        <li>接触新技术, 讨论技术解决方案</li>
                        <li>为自己的创业项目找合伙人, 遇见志同道合的人</li>
                        <li>自发线下聚会, 加强社交</li>
                        <li>发现更好工作机会</li>
                        <li>甚至是开始另一个神奇的开源项目</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


</div>

<?php $this->beginBlock('summernote'); ?>
$(document).ready(function()
{
$('#category-select').on('change', function() {
var current_cid = $(this).val();
$('.category-hint').hide();
$('.category-'+current_cid).fadeIn();
});
});
<?php $this->endBlock(); ?>
<?php $this->registerJs($this->blocks['summernote'], \yii\web\View::POS_END); ?>

