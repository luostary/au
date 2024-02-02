<?php

use yii\db\Migration;

/**
 * Class m240202_072403_add_column_dt_reserve_until
 */
class m240202_072403_add_column_dt_reserve_until extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(\app\models\Car::tableName(), 'dt_reserved_until', $this->dateTime()
            ->comment('Забронировано до'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(\app\models\Car::tableName(), 'dt_reserved_until');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240202_072403_add_column_dt_reserve_until cannot be reverted.\n";

        return false;
    }
    */
}
