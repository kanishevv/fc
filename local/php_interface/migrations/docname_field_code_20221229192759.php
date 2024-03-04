<?php

namespace Sprint\Migration;


class docname_field_code_20221229192759 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.30.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('prav_base', 'law_about_education');
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Название документа',
  'ACTIVE' => 'Y',
  'SORT' => '498',
  'CODE' => 'DOC_NAME',
  'DEFAULT_VALUE' => 
  array (
    'TYPE' => 'HTML',
    'TEXT' => '',
  ),
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => '16',
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => 'HTML',
  'USER_TYPE_SETTINGS' => 
  array (
    'height' => 30,
  ),
  'HINT' => '',
));
    
    }

    public function down()
    {
        //your code ...
    }
}
