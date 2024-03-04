<?php

namespace Sprint\Migration;

use Bitrix\Main\Application;

class docname_fts_table_20221207010101 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.30.1";

    public function up()
    {
        $connection = Application::getConnection();
        $query = "
        CREATE TABLE docname_fts (
            ID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
            UF_NAME TEXT(500),
            UF_ELEMENT_ID INT UNSIGNED NOT NULL,
            FULLTEXT idx (UF_NAME)
        ) ENGINE=InnoDB;
        ";
        $connection->query($query);
    }

    public function down()
    {
    }
}
