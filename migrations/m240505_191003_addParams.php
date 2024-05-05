<?php

use yii\db\Migration;

class m240505_191003_addParams extends Migration
{
    public function safeUp()
    {
        $this->insert('sizes', ['size' => 'XXS']);
        $this->insert('sizes', ['size' => 'XS']);
        $this->insert('sizes', ['size' => 'S']);
        $this->insert('sizes', ['size' => 'M']);
        $this->insert('sizes', ['size' => 'L']);
        $this->insert('sizes', ['size' => 'XL']);
        $this->insert('sizes', ['size' => 'XXL']);
        $this->insert('sizes', ['size' => 'XXXL']);
    }

    public function safeDown()
    {
        echo "m240505_191003_addParams cannot be reverted.\n";

        return false;
    }
}
