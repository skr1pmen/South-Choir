<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\CreateProductForm;
use app\modules\admin\repository\ColorsRepository;
use app\modules\admin\repository\ProductRepository;
use app\modules\admin\repository\SizesRepository;
use app\modules\admin\repository\UserRepository;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

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
//        var_dump($products);
//        foreach ($products as $product) {
//            var_dump($product->productColor);
//        }
        return $this->render('products', ['products' => $products]);
    }

    public function actionCreateProduct()
    {
        $this->view->title = 'Добавление нового продукта';
        $sizes = [];
        foreach (SizesRepository::getSizes() as $size) {
            $sizes[$size['id']] = $size['size'];
        }
        $colors = [];
        foreach (ColorsRepository::getColors() as $color) {
            $colors[$color['id']] = $color['name'];
        }
        $type = ['1' => 'Мужские', '2' => 'Женские', '3' => 'Детские'];
        $model = new CreateProductForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->photo = UploadedFile::getInstance($model, 'photo');
            var_dump(true);
            $productId = ProductRepository::createProduct(
                $model->name,
                $model->description,
                $model->form_factor,
                $model->price,
                $model->type,
                $model->discount,
                $model->color_id,
                $model->size_id,
            );
            var_dump($productId);
            if (!empty($model->photo)) {
                $file = $productId . '.' . $model->photo->extension;
                $model->photo->saveAs("images/jeans/$file");
            }
            return $this->redirect('/admin/panel/products');

        }
        return $this->render('create-product', ['model' => $model, 'sizes' => $sizes, 'colors' => $colors, 'type' => $type]);
    }
}