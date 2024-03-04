<?php

namespace Sprint\Migration;


class pravBasestatusProp20211125101048 extends Version
{
	protected $description = "Миграция свойства Документ утратил силу prav_base";

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
			'NAME' => 'Документ утратил силу',
			'ACTIVE' => 'Y',
			'SORT' => '500',
			'CODE' => 'STATUS',
			'DEFAULT_VALUE' => '',
			'PROPERTY_TYPE' => 'L',
			'ROW_COUNT' => '1',
			'COL_COUNT' => '30',
			'LIST_TYPE' => 'C',
			'MULTIPLE' => 'N',
			'XML_ID' => '22',
			'FILE_TYPE' => '',
			'MULTIPLE_CNT' => '5',
			'LINK_IBLOCK_ID' => '0',
			'WITH_DESCRIPTION' => 'N',
			'SEARCHABLE' => 'Y',
			'FILTRABLE' => 'Y',
			'IS_REQUIRED' => 'N',
			'VERSION' => '1',
			'USER_TYPE' => NULL,
			'USER_TYPE_SETTINGS' => NULL,
			'HINT' => 'Документ утратил силу',
			'VALUES' =>
				array(
					0 =>
						array(
							'VALUE' => 'Документ утратил силу (смотрите справку документа)',
							'DEF' => 'N',
							'SORT' => '500',
							'XML_ID' => 'ba003d4e67f08f637657bd6d4e8a6ec3',
						),
				),
		));

	}

	public function down()
	{
		//your code ...
	}
}
