<?php

namespace Sprint\Migration;


class PravBaseRubricMultiple20211029145807 extends Version
{
    protected $description = "Делает свойство рубрики множественным, инфоблок Правовая база нормативных актов";

    protected $moduleVersion = "3.29.3";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('prav_base', 'law_about_education');
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Рубрика',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'RUBRIC',
  'DEFAULT_VALUE' => 'uncategorized',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
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
  array (
    'size' => 1,
    'width' => 0,
    'group' => 'N',
    'multiple' => 'N',
    'TABLE_NAME' => 'b_hlbd_rubric',
  ),
  'HINT' => '',
));
    
    }

    public function down()
    {
        //your code ...
    }
}
