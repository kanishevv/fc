<?php

namespace Sprint\Migration;


class RubricProp20211022104822 extends Version
{
	protected $description = "Миграция свойства Рубрика инфоблок prav_base, content_faq, sudebnaya-praktika";

	protected $moduleVersion = "3.29.3";

	/**
	 * @return bool|void
	 * @throws Exceptions\HelperException
	 */
	public function up()
	{
		$this->createRubricProp();
		$this->createRubricProp('content_faq', 'content');
		$this->createRubricProp('sudebnaya-praktika', 'practice');
	}

	public function down()
	{
		//your code ...
	}

	private function createRubricProp($iblockCode = 'prav_base', $iblockType = 'law_about_education')
	{
		$helper = $this->getHelperManager();
		$iblockId = $helper->Iblock()->getIblockIdIfExists($iblockCode, $iblockType);
		$helper->Iblock()->saveProperty($iblockId, array(
			'NAME' => 'Рубрика',
			'ACTIVE' => 'Y',
			'SORT' => '500',
			'CODE' => 'RUBRIC',
			'DEFAULT_VALUE' => 'uncategorized',
			'PROPERTY_TYPE' => 'S',
			'ROW_COUNT' => '1',
			'COL_COUNT' => '30',
			'LIST_TYPE' => 'L',
			'MULTIPLE' => 'N',
			'XML_ID' => NULL,
			'FILE_TYPE' => '',
			'MULTIPLE_CNT' => '5',
			'LINK_IBLOCK_ID' => '0',
			'WITH_DESCRIPTION' => 'N',
			'SEARCHABLE' => 'N',
			'FILTRABLE' => 'Y',
			'IS_REQUIRED' => 'N',
			'VERSION' => '1',
			'USER_TYPE' => 'directory',
			'USER_TYPE_SETTINGS' =>
				array(
					'size' => 1,
					'width' => 0,
					'group' => 'N',
					'multiple' => 'N',
					'TABLE_NAME' => 'b_hlbd_rubric',
				),
			'HINT' => '',
		));
	}
}
