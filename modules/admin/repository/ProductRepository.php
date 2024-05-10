<?php

namespace app\modules\admin\repository;

use app\entity\Products;

class ProductRepository
{
    public static function getCountProduct()
    {
        return Products::find()->count();
    }

    public static function getProducts()
    {
        return Products::find()->all();
    }

    public static function createProduct($name, $description, $form_factor, $price, $type, $discount, $color, $size)
    {
        $product = new Products();
        $product->name = $name;
        $product->description = $description;
        $product->form_factor = $form_factor;
        $product->price = $price;
        $product->type = $type;
        $product->discount = $discount;
        $product->color_id = $color;
        $product->size_id = $size;
        $product->save();
        return $product->id;
    }

    public static function addedParams($product_id, $size, $color)
    {
        $product = Products::findOne($product_id);
        $product->updateAttributes(['color_id' => $color, 'size_id' => $size]);

    }
}