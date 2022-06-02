<?php

use yii\db\Migration;

/**
 * Class m220601_230632_create_table_place
 */
class m220601_230632_create_table_place extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('place', [
            'id' => $this->primaryKey()->unsigned(),
            'place_id' => $this->string(45)->notNull(),
            'lat' => $this->string(45)->notNull(),
            'lng' => $this->string(45)->notNull(),
            'country_code' => $this->string(2)->notNull(),
            'is_country' => $this->boolean()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('place');
    }
}
