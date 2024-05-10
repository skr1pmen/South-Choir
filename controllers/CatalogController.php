<?php

namespace app\controllers;

use app\repository\CatalogRepository;
use yii\base\Controller;

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
        $this->view->title = 'Мужские ждинсы';
        return $this->render('men');
    }
}