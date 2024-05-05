<?php

namespace app\models;

use app\repository\UserRepository;
use yii\base\Model;

class RegistrationForm extends Model
{
    public $login;
    public $password;
    public $repeatPassword;
    public $name;
    public $surname;
    public $patronymic;
    public $photo;
    public $acceptRules;

    public function rules()
    {
        return [
            [['login', 'password', 'name', 'surname', 'acceptRules'], 'required'],
            ['photo', 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            ['login', 'validateLogin'],
            ['password', 'string', 'length' => [8, 24]],
            ['repeatPassword', 'compare', 'compareAttribute' => 'password'],
            ['acceptRules', 'boolean'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'login' => 'Ваш логин',
            'password' => 'Ваш пароль',
            'repeatPassword' => 'Подтвердите пароль',
            'name' => 'Ваше имя',
            'surname' => 'Ваша фамилия',
            'patronymic' => 'Ваше отчество',
            'photo' => 'Ваша аватарка',
            'acceptRules' => ''
        ];
    }

    public function validateLogin($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = UserRepository::getUserByLogin($this->login);
            if ($user) {
                $this->addError($attribute, 'Пользователь с таким логином уже существует');
            }
        }
    }
}