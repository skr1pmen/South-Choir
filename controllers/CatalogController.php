<?php

namespace app\controllers;

use yii\base\Controller;

class CatalogController extends Controller
{
    public $layout = 'catalog';

    public function actionIndex()
    {
        $this->view->title = 'South Choir';

        return $this->render('index');
    }

    public function actionForMen()
    {
        $this->view->title = 'Мужские ждинсы';
        return $this->render('men');
    }
}