<?php

namespace app\modules\admin\controllers;

use app\modules\admin\repository\ProductRepository;
use app\modules\admin\repository\UserRepository;
use yii\web\Controller;

class PanelController extends Controller
{
    public $layout = 'admin';

    public function actionIndex()
    {
        $this->view->title = 'Админ панель';
        $userCount = UserRepository::getCountUsers();
        $productCount = ProductRepository::getCountProduct();
        return $this->render('index', ['users' => $userCount, 'products' => $productCount]);
    }

    public function actionUsers()
    {
        $this->view->title = 'Пользователи';
        $users = UserRepository::getUsers();
        return $this->render('users', ['users' => $users]);
    }
}