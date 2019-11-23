<?php

use yii\db\Migration;

/**
 * Class m191122_045341_rename_column_data_rojdenya
 */
class m191122_045341_rename_column_data_rojdenya extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> renameColumn ( 'Lichnost', 'Data rojdenya', 'Data_rojdenya' );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191122_045341_rename_column_data_rojdenya cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191122_045341_rename_column_data_rojdenya cannot be reverted.\n";

        return false;
    }
    */
}
