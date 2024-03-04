<?php

namespace Sprint\Migration;


class apiCodeForMontlyReviews20211201134253 extends Version
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
  ),
  'CODE' => 'ezhemesyachnye-obzory-zakonodatelstva-ob-obrazovan',
  'API_CODE' => 'montlyReviews',
  'NAME' => ' Ежемесячные обзоры законодательства об образовании',
  'ACTIVE' => 'Y',
  'SORT' => '9',
  'LIST_PAGE_URL' => '#SITE_DIR#/praktika/ezhemesyachnye-obzory-zakonodatelstva-ob-obrazovanii/index.php?ID=#IBLOCK_ID#',
  'DETAIL_PAGE_URL' => '#SITE_DIR#/praktika/ezhemesyachnye-obzory-zakonodatelstva-ob-obrazovanii/detail.php?ELEMENT_ID=#ELEMENT_ID#',
  'SECTION_PAGE_URL' => '#SITE_DIR#/praktika/ezhemesyachnye-obzory-zakonodatelstva-ob-obrazovanii/list.php?SECTION_ID=#SECTION_ID#',
  'PICTURE' => NULL,
  'DESCRIPTION' => '',
  'DESCRIPTION_TYPE' => 'text',
  'RSS_TTL' => '24',
  'RSS_ACTIVE' => 'Y',
  'RSS_FILE_ACTIVE' => 'N',
  'RSS_FILE_LIMIT' => NULL,
  'RSS_FILE_DAYS' => NULL,
  'RSS_YANDEX_ACTIVE' => 'N',
  'XML_ID' => NULL,
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
  'ELEMENTS_NAME' => 'Элементы',
  'ELEMENT_NAME' => 'Элемент',
  'PROPERTY_INDEX' => 'Y',
  'CANONICAL_PAGE_URL' => '',
  'REST_ON' => 'N',
  'EXTERNAL_ID' => NULL,
  'LANG_DIR' => '/',
  'SERVER_NAME' => 'xn--g1anri.xn--p1ai',
  'ELEMENT_ADD' => 'Добавить элемент',
  'ELEMENT_EDIT' => 'Изменить элемент',
  'ELEMENT_DELETE' => 'Удалить элемент',
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
