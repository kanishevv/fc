<?php
namespace Local\Orm;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\TextField;


/**
 * Class BaseTable
 * 
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> UF_NAME text optional
 * <li> UF_XML_ID text optional
 * </ul>
 *
 * @package Local\Orm
 **/

class RegionBaseTable extends DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'region_base';
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
		];
	}
}
