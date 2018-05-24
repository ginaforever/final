<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bookings`.
 */
class m180523_053129_create_bookings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bookings', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer(),
            'room_id' => $this->integer(),
            'arrive' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'leave' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'people' => $this->string(191)->notNull(),

        ]);
        $this->createIndex(
            'idx-bookings-customer_id',
            'bookings', 'customer_id');
        $this->addForeignKey(
            'fk-bookings-customer',
            'bookings','customer_id',
            'customer','id'
        );

         $this->createIndex(
            'idx-bookings-room_id',
            'bookings', 'room_id');
          $this->addForeignKey(
            'fk-bookings-rooms',
            'bookings','room_id',
            'rooms','id'
            );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-bookings-customer','bookings');
        $this->dropForeignKey('fk-bookings-rooms','bookings');
        $this->dropIndex('idx-bookings-customer_id','bookings');
        $this->dropIndex('idx-bookings-room_id','bookings');
        $this->dropTable('bookings');
    }
}
