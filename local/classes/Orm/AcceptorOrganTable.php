<?php
namespace Local\Orm;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\TextField;

/**
 * Class OrganTable
 * 
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> UF_SORT text optional
 * <li> UF_NAME text optional
 * <li> UF_XML_ID text optional
 * <li> UF_ALT_NAME text optional
 * <li> UF_DESCRIPTION text optional
 * <li> UF_FULL_DESCRIPTION text optional
 * </ul>
 *
 * @package Local\Orm
 **/

class AcceptorOrganTable extends DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
    */
    public static function getTableName()
    {
        return 'acceptor_organ';
    }

    /**
     * Returns entity map definition.
     *
     * @return array
    */
    public static function getMap()
    {
        return [
            new IntegerField(
                'ID',
                [
                    'primary' => true,
                    'autocomplete' => true,
                    'title' => 'ID',
                ]
            ),
            new TextField(
                'UF_SORT',
                [
                    'title' => 'UF_SORT',
                ]
            ),
            new TextField(
                'UF_NAME',
                [
                    'title' => 'UF_NAME',
                ]
            ),
            new TextField(
                'UF_XML_ID',
                [
                    'title' => 'UF_XML_ID',
                ]
            ),
            new TextField(
                'UF_ALT_NAME',
                [
                    'title' => 'UF_ALT_NAME',
                ]
            ),
            new TextField(
                'UF_DESCRIPTION',
                [
                    'title' => 'UF_DESCRIPTION',
                ]
            ),
            new TextField(
                'UF_FULL_DESCRIPTION',
                [
                    'title' => 'UF_FULL_DESCRIPTION',
                ]
            ),
        ];
    }
}
