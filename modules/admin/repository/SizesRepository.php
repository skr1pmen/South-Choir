<?php

namespace app\modules\admin\repository;

use app\entity\ProductsSizes;
use app\entity\Sizes;

class SizesRepository
{
    public static function getSizes()
    {
        return Sizes::find()->all();
    }
}