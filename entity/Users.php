<?php

namespace app\entity;

use app\repository\UserRepository;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * @property integer id
 * @property string login
 * @property string password
 * @property string name
 * @property string surname
 * @property string patronymic
 * @property integer address_id
 * @property string phone
 * @property string email
 * @property integer discount
 */
class Users extends ActiveRecord implements IdentityInterface
{
    public static function findIdentity($id)
    {
        return new static(UserRepository::getUserById($id));
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function validatePassword($password)
    {
        return password_verify($password, $this->password);
    }

    public function findUserByLogin($login)
    {
        return new static(UserRepository::getUserByLogin($login));
    }

    public function getAuthKey()
    {
    }

    public function validateAuthKey($authKey)
    {
    }
}