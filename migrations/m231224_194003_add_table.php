<?php

use yii\db\Migration;

/**
 * Class m231224_194003_add_table
 */
class m231224_194003_add_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("
            CREATE TABLE `car_type` (
                `id_car_type` INT NOT NULL AUTO_INCREMENT COMMENT 'ID',
                `name` VARCHAR(255) NOT NULL COMMENT 'Название',
                PRIMARY KEY (`id_car_type`));
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('car_type');
    }
}
