<?php

use yii\db\Migration;

/**
 * Class m240301_203749_add_company_table
 */
class m240301_203749_add_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `company` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `name` varchar(255) DEFAULT NULL,
              `address` text,
              `is_active` int(11) NOT NULL DEFAULT '0',
              `dt_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `dt_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('company');
    }
}
