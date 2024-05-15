<?php

namespace app\controllers;

use app\repository\CatalogRepository;
use yii\web\Controller;

class CatalogController extends Controller
{
    public $layout = 'catalog';

    public function actionIndex()
    {
        $this->view->title = 'South Choir';
        $men = CatalogRepository::getProductForMen();
        $women = CatalogRepository::getProductForWomen();
        $child = CatalogRepository::getProductForChildren();
        return $this->render('index', ['men' => $men, 'women' => $women, 'child' => $child]);
    }

    public function actionForMen()
    {
        $this->view->title = 'Мужские джинсы';
        $products = CatalogRepository::getProductMen();
        return $this->render('men', ['products' => $products]);
    }

    public function actionForWoman()
    {
        $this->view->title = 'Женские джинсы';
        $products = CatalogRepository::getProductWoman();
        return $this->render('woman', ['products' => $products]);
    }

    public function actionForChildren()
    {
        $this->view->title = 'Детские джинсы';
        $products = CatalogRepository::getProductChildren();
        return $this->render('children', ['products' => $products]);
    }

    public function actionItem($id)
    {
        $item = CatalogRepository::getProduct($id);
        $this->view->title = $item->name;

        return $this->render('item', ['item' => $item]);
    }
}