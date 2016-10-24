<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/9/4
 * Time: 7:30
 */
namespace frontend\controllers;

use yii;
use common\models\User;
use yii\web\Controller;

class UserController extends Controller
{


    public function actionIndex()
    {
        $data = [];

        $uid = Yii::$app->request->get('id');
        if (!$uid) {
            return $this->redirect('/');
        }

        if (Yii::$app->user->isGuest) {
            $userinfo = User::findOne($uid);
        } else {
            $userinfo = Yii::$app->user->identity;
        }

        if (!$userinfo) {
            return $this->redirect('/');
        }

        $data['userinfo'] = $userinfo;

        return $this->render('index', $data);
    }


    public function actionEdit()
    {
        $uid = Yii::$app->request->get('id');
        if (!$uid || Yii::$app->user->isGuest) {
            return $this->redirect('/');
        }

        $data = [];

        $User = User::findOne(Yii::$app->user->identity->getId());

        if (Yii::$app->request->isPost) {
            if ($User->load(Yii::$app->request->post()) && $User->validate()) {
                if ($User->save()) {
                    Yii::$app->session->setFlash('success', '保存成功');
                } else {
                    Yii::$app->session->setFlash('error', '保存失败');
                }
            }
        }


        $data['User'] = $User;

        return $this->render('edit', $data);
    }


    public function actionTopics()
    {

        $data = [];

        if (Yii::$app->user->isGuest) {
            return $this->redirect('/');
        }

        $uid = Yii::$app->request->get('id');

        if ($uid) {
            $userinfo = User::find()->with('topics')->where(['id' => $uid])->one();
            if (!$userinfo) {
                return $this->redirect('/');
            }
            $data['userinfo'] = $userinfo;
            $data['list']     = $userinfo->topics;
        } else {
            $data['userinfo'] = Yii::$app->user->identity;
            $data['list']     = Yii::$app->user->identity->topics;
        }

        return $this->render('topics', $data);
    }

    public function actionReplies()
    {
        $data = [];
        if (Yii::$app->request->get('id')) {
            $id               = Yii::$app->request->get('id');
            $userinfo         = User::find()->with('comments')->where(['id' => $id])->one();
            $data['userinfo'] = $userinfo;
            $data['list']     = $userinfo->comments;
        } else {
            if (!Yii::$app->user->isGuest) {
                $data['list']     = Yii::$app->user->identity->comments;
                $data['userinfo'] = Yii::$app->user->identity;
            } else {
                return $this->redirect('/');
            }
        }

        return $this->render('replies', $data);
    }


    public function actionFollower()
    {
        $data = [];
        if (Yii::$app->request->get('id')) {
            $id               = Yii::$app->request->get('id');
            $userinfo         = User::find()->with('followers')->where(['id' => $id])->one();
            $data['userinfo'] = $userinfo;
            $data['list']     = $userinfo->followers;
        } else {
            if (!Yii::$app->user->isGuest) {
                $data['list']     = Yii::$app->user->identity->followers;
                $data['userinfo'] = Yii::$app->user->identity;
            } else {
                return $this->redirect('/');
            }
        }

        return $this->render('followers', $data);
    }


    public function actionFollowing()
    {
        $data = [];
        if (Yii::$app->request->get('id')) {
            $id               = Yii::$app->request->get('id');
            $userinfo         = User::find()->with('followings')->where(['id' => $id])->one();
            $data['userinfo'] = $userinfo;
            $data['list']     = $userinfo->followings;
        } else {
            if (!Yii::$app->user->isGuest) {
                $data['list']     = Yii::$app->user->identity->followings;
                $data['userinfo'] = Yii::$app->user->identity;
            } else {
                return $this->redirect('/');
            }
        }

        return $this->render('following', $data);
    }

    public function actionVotes()
    {
        $data = [];

        if (Yii::$app->request->get('id')) {
            $id               = Yii::$app->request->get('id');
            $userinfo         = User::find()->with('votes')->where(['id' => $id])->one();
            $data['userinfo'] = $userinfo;
            $data['list']     = $userinfo->votes;
        } else {
            if (!Yii::$app->user->isGuest) {
                $data['list']     = Yii::$app->user->identity->votes;
                $data['userinfo'] = Yii::$app->user->identity;
            } else {
                return $this->redirect('/');
            }
        }

        return $this->render('votes', $data);
    }


}
