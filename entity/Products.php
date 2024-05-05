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
 */
class Products extends ActiveRecord
{

}