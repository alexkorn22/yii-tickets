<?php

namespace app\models\User;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property string $name
 * @property string $second_name
 * @property int $is_admin
 * @property string $guid
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_admin'], 'integer'],
            [['login', 'password', 'name', 'second_name', 'guid'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'name' => 'Name',
            'second_name' => 'Second Name',
            'is_admin' => 'Is Admin',
            'guid' => 'Guid',
        ];
    }

    public function load($data, $formName = null){
        $curPass = $this->password;
        if (parent::load($data, $formName)) {
            if ($curPass !=  $this->password) {
                $this->setPassword($this->password);
            }
            return true;
        }
        return false;
    }

    public static function findIdentity($id)
    {
        return User::findOne(['id' => $id]);
    }


    public static function findIdentityByAccessToken($token, $type = null)
    {

    }


    public function getId()
    {
        return $this->id;
    }


    public function getAuthKey()
    {

    }

    public function validateAuthKey($authKey)
    {

    }

    public function validatePassword($password) {

        return password_verify($password,$this->password);

    }

    public static function findByLogin($login) {

        return User::findOne(['login' => $login]);

    }

    public function isAdmin(){
        return $this->is_admin != 0;
    }

    public function setPassword($password) {
        $this->password = Yii::$app->getSecurity()->generatePasswordHash($password);
    }

}
