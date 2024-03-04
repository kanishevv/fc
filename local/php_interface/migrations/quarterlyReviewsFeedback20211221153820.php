<?php

namespace Sprint\Migration;


class quarterlyReviewsFeedback20211221153820 extends Version
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
  'IBLOCK_TYPE_ID' => 'altasib_feedback',
  'LID' => 
  array (
    0 => 's1',
    1 => 's3',
  ),
  'CODE' => 'quarterly_reviews_feedback',
  'API_CODE' => 'quarterlyReviewsFeedback',
  'NAME' => 'Ежеквартальные обзоры обращений граждан',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'LIST_PAGE_URL' => '#SITE_DIR#/grazhdanam/reception/ezhekvartalnie-obzori-obrasheniy-grazhdan/',
  'DETAIL_PAGE_URL' => '',
  'SECTION_PAGE_URL' => '#SITE_DIR#/grazhdanam/reception/ezhekvartalnie-obzori-obrasheniy-grazhdan/?SECTION_ID=#SECTION_ID#',
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
  'SECTION_PROPERTY' => 'N',
  'VERSION' => '1',
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
  'LANG_DIR' => '/vi',
  'SERVER_NAME' => 'fcoz.ru',
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
