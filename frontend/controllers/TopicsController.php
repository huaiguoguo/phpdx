<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/9/4
 * Time: 8:02
 */

namespace frontend\controllers;

use common\models\Category;
use yii;
use yii\web\Response;
use common\models\Comment;
use common\models\Topic;
use yii\web\Controller;

class TopicsController extends Controller
{
    public function actionIndex($id = 0)
    {

        $data = [];

        if (intval($id) > 0) {
            return $this->render('index');
        }

        $data['list'] = Topic::find()->all();

        return $this->render('index', $data);
    }


    public function actionCreate()
    {

        if (Yii::$app->user->isGuest) {
            return $this->redirect('/');
        }

        $data       = [];
        $TopicModel = new Topic;
        if ($TopicModel->load(Yii::$app->request->post()) && $TopicModel->validate()) {
            $TopicModel->created_by = Yii::$app->user->identity->getId();
            if ($TopicModel->save()) {
                Yii::$app->session->setFlash('success', '添加成功');
                return $this->redirect('/');
            }
        }


        $data['CateList'] = Category::find()->select(['id','category_name'])->asArray()->all();
        $data['Topic'] = $TopicModel;
        return $this->render('create', $data);
    }


    public function actionDetail()
    {
        $data           = [];
        $data['error']  = '';
        $data['detail'] = Topic::findOne(Yii::$app->request->get('id'));


        $comment                         = new Comment();
        $postData                        = Yii::$app->request->post();
        $postData['Comment']['user_id']  = Yii::$app->user->getId();
        $postData['Comment']['topic_id'] = Yii::$app->request->get('id');
        if (Yii::$app->request->post()) {
            if ($comment->load($postData) && $comment->validate()) {
                if (!$comment->save()) {
                    $data['error'] = $comment->getFirstError();
                }
            }
        }


        $data['comment'] = $comment;

        return $this->render('detail', $data);
    }




    public function actionUpvote()
    {
        if (Yii::$app->request->isAjax && Yii::$app->request->isPost) {
            $response         = Yii::$app->response;
            $response->format = Response::FORMAT_JSON;
            $response->setStatusCode(200);
            $response->data = array('tes' => 'ttt');
            $response->send();
        }
    }


}