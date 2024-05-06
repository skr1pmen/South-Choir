<?php

namespace app\modules\admin\repository;

use app\entity\Users;

class UserRepository
{
    public static function getCountUsers()
    {
        return Users::find()->count();
    }

    public static function getUsers()
    {
        return Users::find()->all();
    }
}