<?php

namespace app\modules\admin\models;

use yii\base\Model;

class CreateProductForm extends Model
{
    public $name;
    public $description;
    public $form_factor;
    public $price;
    public $discount;
    public $type; // 1-man | 2-woman | 3-child
    public $size_id;
    public $color_id;
    public $photo;

    public function rules()
    {
        return [
            [['name', 'description', 'form_factor', 'price', 'discount', 'type', 'size_id', 'color_id'], 'required'],
            ['photo', 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Название',
            'description' => 'Описание',
            'form_factor' => 'Форм фактор',
            'price' => 'Цена',
            'discount' => 'Скидка',
            'type' => 'Тип',
            'size_id' => 'Размер',
            'color_id' => 'Цвет',
            'photo' => 'Обложка'
        ];
    }
}