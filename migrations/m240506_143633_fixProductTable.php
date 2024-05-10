<?php

use yii\db\Migration;

class m240506_143633_fixProductTable extends Migration
{
    public function safeUp()
    {
        $this->addColumn('products', 'type', $this->string());
        $this->insert('colors', [
            'name' => 'Черный',
            'color' => '#000'
        ]);
        $this->insert('colors', [
            'name' => 'Белый',
            'color' => '#fff'
        ]);
        $this->insert('colors', [
            'name' => 'Синий',
            'color' => '#1560bd'
        ]);
        $this->insert('colors', [
            'name' => 'Бежевый',
            'color' => '#f5f5dc'
        ]);
    }

    public function safeDown()
    {
        $this->dropColumn('products', 'type');
    }
}
