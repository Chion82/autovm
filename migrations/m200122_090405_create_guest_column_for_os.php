<?php

use yii\db\Migration;

/**
 * Class m200122_090405_create_guest_column_for_os
 */
class m200122_090405_create_guest_column_for_os extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('os', 'guest', $this->string()->null()->after('adapter'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200122_090405_create_guest_column_for_os cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200122_090405_create_guest_column_for_os cannot be reverted.\n";

        return false;
    }
    */
}
