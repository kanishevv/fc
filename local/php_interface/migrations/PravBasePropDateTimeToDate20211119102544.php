<?php

namespace Sprint\Migration;


class PravBasePropDateTimeToDate20211119102544 extends Version
{
	protected $description = "Свойства с типом Дата/Время в тип Дата, инфоблок prav_base";

	protected $moduleVersion = "3.29.3";

	/**
	 * @return bool|void
	 * @throws Exceptions\HelperException
	 */
	public function up()
	{
		$helper = $this->getHelperManager();
		$iblockId = $helper->Iblock()->getIblockIdIfExists('prav_base', 'law_about_education');
		$helper->Iblock()->saveProperty($iblockId, array(
			'NAME' => 'Дата регистрации в Минюсте',
			'ACTIVE' => 'Y',
			'SORT' => '500',
			'CODE' => 'DATE_REG',
			'DEFAULT_VALUE' => NULL,
			'PROPERTY_TYPE' => 'S',
			'ROW_COUNT' => '1',
			'COL_COUNT' => '30',
			'LIST_TYPE' => 'L',
			'MULTIPLE' => 'N',
			'XML_ID' => '20',
			'FILE_TYPE' => '',
			'MULTIPLE_CNT' => '5',
			'LINK_IBLOCK_ID' => '0',
			'WITH_DESCRIPTION' => 'N',
			'SEARCHABLE' => 'N',
			'FILTRABLE' => 'N',
			'IS_REQUIRED' => 'N',
			'VERSION' => '1',
			'USER_TYPE' => 'Date',
			'USER_TYPE_SETTINGS' => NULL,
			'HINT' => '',
		));
		$helper->Iblock()->saveProperty($iblockId, array(
			'NAME' => 'Дата опубликования',
			'ACTIVE' => 'Y',
			'SORT' => '500',
			'CODE' => 'DATE_PUB',
			'DEFAULT_VALUE' => NULL,
			'PROPERTY_TYPE' => 'S',
			'ROW_COUNT' => '1',
			'COL_COUNT' => '30',
			'LIST_TYPE' => 'L',
			'MULTIPLE' => 'N',
			'XML_ID' => '21',
			'FILE_TYPE' => '',
			'MULTIPLE_CNT' => '5',
			'LINK_IBLOCK_ID' => '0',
			'WITH_DESCRIPTION' => 'N',
			'SEARCHABLE' => 'N',
			'FILTRABLE' => 'N',
			'IS_REQUIRED' => 'N',
			'VERSION' => '1',
			'USER_TYPE' => 'Date',
			'USER_TYPE_SETTINGS' => NULL,
			'HINT' => '',
		));

	}

	public function down()
	{
		//your code ...
	}
}
