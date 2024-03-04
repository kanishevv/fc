<?php

namespace Sprint\Migration;


class pravBase20211223094857 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.29.3";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->saveIblock(array (
  'IBLOCK_TYPE_ID' => 'law_about_education',
  'LID' => 
  array (
    0 => 's1',
    1 => 's3',
  ),
  'CODE' => 'prav_base',
  'API_CODE' => 'pravBase',
  'NAME' => 'Правовая база нормативных актов',
  'ACTIVE' => 'Y',
  'SORT' => '1',
  'LIST_PAGE_URL' => '#SITE_DIR#/search/index.php?ID=#IBLOCK_ID#',
  'DETAIL_PAGE_URL' => '#SITE_DIR#/search/detail.php?ELEMENT_ID=#ELEMENT_ID#',
  'SECTION_PAGE_URL' => '#SITE_DIR#/search/list.php?SECTION_ID=#SECTION_ID#',
  'PICTURE' => NULL,
  'DESCRIPTION' => '',
  'DESCRIPTION_TYPE' => 'text',
  'RSS_TTL' => '24',
  'RSS_ACTIVE' => 'Y',
  'RSS_FILE_ACTIVE' => 'N',
  'RSS_FILE_LIMIT' => NULL,
  'RSS_FILE_DAYS' => NULL,
  'RSS_YANDEX_ACTIVE' => 'N',
  'XML_ID' => '17',
  'INDEX_ELEMENT' => 'Y',
  'INDEX_SECTION' => 'Y',
  'WORKFLOW' => 'N',
  'BIZPROC' => 'N',
  'SECTION_CHOOSER' => 'L',
  'LIST_MODE' => '',
  'RIGHTS_MODE' => 'S',
  'SECTION_PROPERTY' => 'Y',
  'VERSION' => '1',
  'LAST_CONV_ELEMENT' => '0',
  'SOCNET_GROUP_ID' => NULL,
  'EDIT_FILE_BEFORE' => '',
  'EDIT_FILE_AFTER' => '',
  'SECTIONS_NAME' => 'Разделы',
  'SECTION_NAME' => 'Раздел',
  'ELEMENTS_NAME' => 'Акты',
  'ELEMENT_NAME' => 'Акт',
  'PROPERTY_INDEX' => 'Y',
  'CANONICAL_PAGE_URL' => '',
  'REST_ON' => 'N',
  'EXTERNAL_ID' => '17',
  'LANG_DIR' => '/vi',
  'SERVER_NAME' => 'fcoz.ru',
  'ELEMENT_ADD' => 'Добавить акт',
  'ELEMENT_EDIT' => 'Изменить акт',
  'ELEMENT_DELETE' => 'Удалить акт',
  'SECTION_ADD' => 'Добавить раздел',
  'SECTION_EDIT' => 'Изменить раздел',
  'SECTION_DELETE' => 'Удалить раздел',
));

    }

    public function down()
    {
        //your code ...
    }
}
