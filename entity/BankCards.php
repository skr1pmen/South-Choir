<?php

namespace app\entity;

use yii\db\ActiveRecord;

/**
 * @property integer id
 * @property integer user_id
 * @property string name
 * @property string number
 * @property integer mount
 * @property integer year
 * @property string svc
 */
class BankCards extends ActiveRecord
{

}