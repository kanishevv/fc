<?php

namespace Sprint\Migration;


class ContentFaqNoDefaultRubric20211111093231 extends Version
{
    protected $description = "Убирает рубрику по дефолту у content_faq";

    protected $moduleVersion = "3.29.3";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('content_faq', 'content');
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Рубрика',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'RUBRIC',
  'DEFAULT_VALUE' => '',
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
  'VERSION' => '2',
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
