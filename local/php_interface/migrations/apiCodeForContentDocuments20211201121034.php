<?php

namespace Sprint\Migration;


class apiCodeForContentDocuments20211201121034 extends Version
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
  'IBLOCK_TYPE_ID' => 'content',
  'LID' => 
  array (
    0 => 's1',
  ),
  'CODE' => 'content_documents',
  'API_CODE' => 'contentDocuments',
  'NAME' => 'Документы недели',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'LIST_PAGE_URL' => '#SITE_DIR#/documents/',
  'DETAIL_PAGE_URL' => '#SITE_DIR#/documents/#SECTION_CODE#/#ELEMENT_CODE#/',
  'SECTION_PAGE_URL' => '#SITE_DIR#/documents/#SECTION_CODE#/',
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
  'INDEX_ELEMENT' => 'N',
  'INDEX_SECTION' => 'N',
  'WORKFLOW' => 'N',
  'BIZPROC' => 'N',
  'SECTION_CHOOSER' => 'L',
  'LIST_MODE' => '',
  'RIGHTS_MODE' => 'S',
  'SECTION_PROPERTY' => 'N',
  'VERSION' => '2',
  'LAST_CONV_ELEMENT' => '0',
  'SOCNET_GROUP_ID' => NULL,
  'EDIT_FILE_BEFORE' => '',
  'EDIT_FILE_AFTER' => '',
  'SECTIONS_NAME' => 'Разделы',
  'SECTION_NAME' => 'Раздел',
  'ELEMENTS_NAME' => 'Элементы',
  'ELEMENT_NAME' => 'Элемент',
  'PROPERTY_INDEX' => 'N',
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
