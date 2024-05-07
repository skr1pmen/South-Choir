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

    public function actionProducts()
    {
        $this->view->title = 'Товары';
        $products = ProductRepository::getProducts();
        return $this->render('products', ['products' => $products]);
    }

    public function actionCreateProduct()
    {
        $this->view->title = 'Добавление нового продукта';
        $model = new CreateProductForm();
        return $this->render('create-product', ['model' => $model]);
    }
}