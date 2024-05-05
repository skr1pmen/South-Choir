<?php

namespace app\repository;

use app\entity\Users;

class UserRepository
{

    public static function getUserById($id)
    {
        return Users::find()->where(['id' => $id])->one();
    }

    public static function getUserByLogin($login)
    {
        return Users::findOne(['login' => $login]);
    }

    public static function createUser($login, $password, $name, $surname, $patronymic)
    {
        $user = new Users();
        $user->login = $login;
        $user->password = password_hash($password, PASSWORD_DEFAULT);
        $user->name = $name;
        $user->surname = $surname;
        if ($patronymic) {
            $user->patronymic = $patronymic;
        }
        $user->save();
        return $user->id;
    }
}