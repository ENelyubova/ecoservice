<?php

class m181218_121818_store_category_subtitle extends yupe\components\DbMigration
{
    public function safeUp()
    {
        $this->addColumn('{{store_category}}', 'subtitle', 'text');
    }

    public function safeDown()
    {
        $this->dropColumn('{{store_category}}', 'subtitle');
    }
}