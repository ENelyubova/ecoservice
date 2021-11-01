<?php

class m181218_121819_store_category_icon extends yupe\components\DbMigration
{
    public function safeUp()
    {
        $this->addColumn('{{store_category}}', 'icon', 'varchar(250)');
    }

    public function safeDown()
    {
        $this->dropColumn('{{store_category}}', 'icon');
    }
}