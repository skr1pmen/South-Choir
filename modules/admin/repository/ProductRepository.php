<?php

namespace app\modules\admin\repository;

use app\entity\Products;

class ProductRepository
{
    public static function getCountProduct()
    {
        return Products::find()->count();
    }
}