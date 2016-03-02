<?php

use yii\db\Migration;

class m160302_172142_tbl_subscribe extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE `subscribe` (
              `idsubscribe` int(11) NOT NULL,
              `email` varchar(50) DEFAULT NULL,
              `date_subscribe` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ");
    }

    public function down()
    {
        $this->dropTable("subscribe");

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
