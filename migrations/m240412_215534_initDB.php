<?php

use yii\db\Migration;

class m240412_215534_initDB extends Migration
{
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'login' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'surname' => $this->string()->notNull(),
            'patronymic' => $this->string(),
            'address_id' => $this->integer(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'discount' => $this->integer()->defaultValue(0)->notNull(),
        ]);
        $this->insert('users', [
            'login' => 'main',
            'password' => password_hash('main', PASSWORD_DEFAULT),
            'name' => 'Админ',
            'surname' => 'Админов',
            'patronymic' => 'Админович',
            'address_id' => 1,
            'phone' => '89012345678',
            'email' => 'main@gmail.com',
        ]);

        $this->createTable('addresses', [
            'id' => $this->primaryKey(),
            'city' => $this->string()->notNull(),
            'street' => $this->string()->notNull(),
            'house' => $this->string()->notNull(),
            'approach' => $this->string(),
            'floor' => $this->string(),
            'flat' => $this->string(),
        ]);
        $this->insert('addresses', [
            'city' => 'Элиста',
            'street' => 'Консомольская',
            'house' => '15',
            'approach' => '1',
            'floor' => '2',
            'flat' => '32',
        ]);
        $this->addForeignKey(
            'users_to_addresses_fk',
            'users',
            'address_id',
            'addresses',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'size_id' => $this->integer(),
            'color_id' => $this->integer(),
            'form_factor' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),
            'discount' => $this->integer()->notNull(),
        ]);
        $this->createTable('products_sizes', [
            'id' => $this->primaryKey(),
            'size_id' => $this->integer()->notNull(),
        ]);
        $this->createTable('sizes', [
            'id' => $this->primaryKey(),
            'size' => $this->string()->notNull(),
        ]);
        $this->createTable('products_colors', [
            'id' => $this->primaryKey(),
            'color_id' => $this->integer()->notNull(),
        ]);
        $this->createTable('colors', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'color' => $this->string()->notNull(),
        ]);
        $this->addForeignKey(
            'products_to_products_sizes_fk',
            'products',
            'size_id',
            'products_sizes',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'products_sizes_to_sizes_fk',
            'products_sizes',
            'size_id',
            'sizes',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'products_to_products_colors_fk',
            'products',
            'color_id',
            'products_colors',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'products_colors_to_sizes_fk',
            'products_colors',
            'color_id',
            'colors',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->createTable('orders', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull()->defaultValue(0),
            'price' => $this->integer()->notNull(),
        ]);
        $this->createTable('orders_items', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull(),
            'product_id' => $this->integer()->notNull(),
            'quantity' => $this->integer()->notNull(),
            'price' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey(
            'orders_item_to_orders_fk',
            'orders_items',
            'order_id',
            'orders',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->createTable('bank_cards', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'number' => $this->string()->notNull(),
            'mount' => $this->integer()->notNull(),
            'year' => $this->integer()->notNull(),
            'svc' => $this->string()->notNull(),
        ]);
        $this->addForeignKey(
            'bank_card_to_users_fk',
            'bank_cards',
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropTable('bank_cards');
        $this->dropTable('orders_items');
        $this->dropTable('orders');
        $this->dropTable('colors');
        $this->dropTable('products_colors');
        $this->dropTable('sizes');
        $this->dropTable('products_sizes');
        $this->dropTable('products');
        $this->dropTable('addresses');
        $this->dropTable('users');
    }
}
