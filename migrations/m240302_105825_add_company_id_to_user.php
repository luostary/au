<?php

use yii\db\Migration;

/**
 * Class m240302_105825_add_company_id_to_user
 */
class m240302_105825_add_company_id_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(\app\models\User::tableName(), 'company_id',
            $this->integer(11)->comment('Компания')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240302_105825_add_company_id_to_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240302_105825_add_company_id_to_user cannot be reverted.\n";

        return false;
    }
    */
}
