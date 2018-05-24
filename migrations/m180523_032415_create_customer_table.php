<?php

use yii\db\Migration;

/**
 * Handles the creation of table `customer`.
 */
class m180523_032415_create_customer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('customer', [
            'id' => $this->primaryKey(),
            'name' => $this->string(191)->notNull(),
            'address' => $this->string(225)->notNull(),
            'phone' => $this->string(11),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('customer');
    }
}

