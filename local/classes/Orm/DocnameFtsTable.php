<?php
namespace Local\Orm;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\TextField;

class DocnameFtsTable extends DataManager
{
    public static function getTableName()
    {
        return 'docname_fts';
    }

    public static function getMap()
    {
        return [
            new IntegerField(
                'ID',
                [
                    'primary' => true,
                    'autocomplete' => true,
                    'title' => 'ID',
                ],
            ),
            new TextField(
                'UF_NAME',
                [
                    'title' => 'UF_NAME',
                ],
            ),
            new IntegerField(
                'UF_ELEMENT_ID',
                [
                    'title' => 'UF_ELEMENT_ID',
                ],
            ),
        ];
    }
}
