<?php

namespace app\entity;

use yii\db\ActiveRecord;

/**
 * @property integer id
 * @property integer order_id
 * @property integer product_id
 * @property integer quantity
 * @property integer price
 */
class OrdersItems extends ActiveRecord
{

}