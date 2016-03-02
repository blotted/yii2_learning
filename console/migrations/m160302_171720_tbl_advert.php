<?php

use yii\db\Migration;

class m160302_171720_tbl_advert extends Migration
{
    public function up()
    {
    $this->execute("
        CREATE TABLE `advert` (
          `idadvert` int(11) NOT NULL,
          `price` mediumint(11) DEFAULT NULL,
          `address` varchar(255) DEFAULT NULL,
          `fk_agent` mediumint(11) DEFAULT NULL,
          `bedroom` smallint(1) DEFAULT NULL,
          `livingroom` smallint(1) DEFAULT NULL,
          `parking` smallint(1) DEFAULT NULL,
          `kitchen` smallint(1) DEFAULT NULL,
          `general_image` varchar(200) DEFAULT NULL,
          `description` text,
          `location` varchar(30) DEFAULT NULL,
          `hot` smallint(1) DEFAULT NULL,
          `sold` smallint(1) DEFAULT NULL,
          `type` varchar(50) DEFAULT NULL,
          `recommend` smallint(1) DEFAULT NULL,
          `created_at` int(11) NOT NULL,
          `updated_at` int(11) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");
    }

    public function down()
    {
        $this->dropTable("advert");
        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
