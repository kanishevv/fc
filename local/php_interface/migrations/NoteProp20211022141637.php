<?php

namespace Sprint\Migration;


class NoteProp20211022141637 extends Version
{
    protected $description = "Миграция свойства Примечание инфоблок prav_base (law_about_education)";

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
  'NAME' => 'Примечание',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'NOTE',
  'DEFAULT_VALUE' => 
  array (
    'TEXT' => '',
    'TYPE' => 'HTML',
  ),
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
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => 'HTML',
  'USER_TYPE_SETTINGS' => 
  array (
    'height' => 200,
  ),
  'HINT' => '',
));
    
    }

    public function down()
    {
        //your code ...
    }
}
