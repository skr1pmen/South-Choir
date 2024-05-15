<?php

namespace app\repository;

use app\entity\Products;

class CatalogRepository
{
    public static function getProductForMen()
    {
        return Products::find()
            ->where(['type' => 1])
            ->limit(4)
            ->all();

    }

    public static function getProductForWomen()
    {
        return Products::find()
            ->where(['type' => 2])
            ->limit(4)
            ->all();
    }

    public static function getProductForChildren()
    {
        return Products::find()
            ->where(['type' => 3])
            ->limit(4)
            ->all();
    }

    public static function getProductMen()
    {
        return Products::findAll(['type' => 1]);
    }

    public static function getProductWoman()
    {
        return Products::findAll(['type' => 2]);
    }

    public static function getProductChildren()
    {
        return Products::findAll(['type' => 3]);
    }

    public static function getProduct($id)
    {
        return Products::findOne(['id' => $id]);
    }
}