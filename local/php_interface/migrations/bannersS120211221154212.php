<?php

namespace Sprint\Migration;


class bannersS120211221154212 extends Version
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
  'IBLOCK_TYPE_ID' => 'co',
  'LID' => 
  array (
    0 => 's1',
    1 => 's3',
  ),
  'CODE' => 'banners_s1',
  'API_CODE' => 'bannersS1',
  'NAME' => 'Актуальное',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'LIST_PAGE_URL' => '',
  'DETAIL_PAGE_URL' => '',
  'SECTION_PAGE_URL' => '',
  'PICTURE' => NULL,
  'DESCRIPTION' => '',
  'DESCRIPTION_TYPE' => 'text',
  'RSS_TTL' => '24',
  'RSS_ACTIVE' => 'Y',
  'RSS_FILE_ACTIVE' => 'N',
  'RSS_FILE_LIMIT' => NULL,
  'RSS_FILE_DAYS' => NULL,
  'RSS_YANDEX_ACTIVE' => 'N',
  'XML_ID' => '1',
  'INDEX_ELEMENT' => 'N',
  'INDEX_SECTION' => 'N',
  'WORKFLOW' => 'N',
  'BIZPROC' => 'N',
  'SECTION_CHOOSER' => 'L',
  'LIST_MODE' => '',
  'RIGHTS_MODE' => 'S',
  'SECTION_PROPERTY' => 'N',
  'VERSION' => '1',
  'LAST_CONV_ELEMENT' => '0',
  'SOCNET_GROUP_ID' => NULL,
  'EDIT_FILE_BEFORE' => '',
  'EDIT_FILE_AFTER' => '',
  'SECTIONS_NAME' => 'Разделы',
  'SECTION_NAME' => 'Раздел',
  'ELEMENTS_NAME' => 'Баннеры',
  'ELEMENT_NAME' => 'Баннер',
  'PROPERTY_INDEX' => 'N',
  'CANONICAL_PAGE_URL' => '',
  'REST_ON' => 'N',
  'EXTERNAL_ID' => '1',
  'LANG_DIR' => '/vi',
  'SERVER_NAME' => 'fcoz.ru',
  'ELEMENT_ADD' => 'Добавить баннер',
  'ELEMENT_EDIT' => 'Изменить баннер',
  'ELEMENT_DELETE' => 'Удалить баннер',
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
