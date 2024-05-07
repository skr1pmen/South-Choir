<?php

use yii\db\Migration;

class m240506_143633_fixProductTable extends Migration
{
    public function safeUp()
    {
        $this->addColumn('products', 'type', $this->string());
    }

    public function safeDown()
    {
        $this->dropColumn('products', 'type');
    }
}
