<?php

namespace app\modules\admin\repository;

use app\entity\Colors;
use app\entity\ProductsColors;

class ColorsRepository
{
    public static function getColors()
    {
        return Colors::find()->all();
    }

}