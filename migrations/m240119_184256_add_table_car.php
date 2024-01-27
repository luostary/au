<?php

use yii\db\Migration;

/**
 * Class m240119_184256_add_table_car
 */
class m240119_184256_add_table_car extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('
            CREATE TABLE IF NOT EXISTS `car` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `id_car_mark` int(11) DEFAULT NULL,
              `id_car_model` int(11) DEFAULT NULL,
              `id_car_generation` int(11) DEFAULT NULL,
              `id_car_modification` int(11) DEFAULT NULL,
              `id_car_serie` int(11) DEFAULT NULL,
              `price` decimal(15,2) DEFAULT NULL,
              `id_user` int(11) NOT NULL,
              `is_active` int(11) DEFAULT NULL,
              `dt_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

        ');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('car');
    }
}
