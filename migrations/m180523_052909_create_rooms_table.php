<?php

use yii\db\Migration;

/**
 * Handles the creation of table `rooms`.
 */
class m180523_052909_create_rooms_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rooms', [
            'id' => $this->primaryKey(),
            'description' => $this->string(191)->notNull(),
            'capacity' => $this->string(191)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('rooms');
    }
}