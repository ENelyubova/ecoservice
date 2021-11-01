<?php

class m181218_121816_store_category_short_title extends yupe\components\DbMigration
{
    public function safeUp()
    {
        $this->addColumn('{{store_category}}', 'name_short', 'varchar(250) default null');
    }

    public function safeDown()
    {
        $this->dropColumn('{{store_category}}', 'name_short');
    }
}