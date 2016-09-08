<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $mobile;
    public $rememberMe;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username','email','mobile'], 'trim'],
            [['username','mobile','email','password'], 'required', 'message'=>'{attribute}不能为空'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => '此用户名已被占用'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => '此邮箱已被占用'],

            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->mobile = $this->mobile;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }


    public function attributeLabels()
    {
        return [
            'username'   => '用户名',
            'mobile'     => '手机',
            'email'      => '邮箱',
            'password'   => '密码',
            'rememberMe' => '记住',
        ];
    }


}
