<?php

namespace app\entity;

use yii\db\ActiveRecord;

/**
 * @property integer id
 * @property string name
 * @property string description
 * @property integer size_id
 * @property integer color_id
 * @property string form_factor
 * @property integer price
 * @property integer discount
 * @property string type
 */
class Products extends ActiveRecord
{
    public function getColor()
    {
        return $this->hasOne(Colors::class, ['id' => 'color_id']);
    }

    public function getSize()
    {
        return $this->hasOne(Sizes::class, ['id' => 'size_id']);
    }
}