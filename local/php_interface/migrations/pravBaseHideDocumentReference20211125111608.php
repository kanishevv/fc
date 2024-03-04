<?php

namespace Sprint\Migration;


class pravBaseHideDocumentReference20211125111608 extends Version
{
    protected $description = "Свойство Скрыть справку документа";

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
  'NAME' => 'Скрыть справку документа',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'HIDE_DOCUMENT_REFERENCE',
  'DEFAULT_VALUE' => 0,
  'PROPERTY_TYPE' => 'N',
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
  'USER_TYPE' => 'SASDCheckboxNum',
  'USER_TYPE_SETTINGS' => 
  array (
    'VIEW' => 
    array (
      0 => 'Нет',
      1 => 'Да',
    ),
  ),
  'HINT' => '',
));
            $helper->UserOptions()->saveElementForm($iblockId, array (
  'Элемент|edit1' => 
  array (
    'DATE_CREATE' => 'Создан',
    'PREVIEW_TEXT' => 'Название документа',
    'PROPERTY_RUBRIC' => 'Рубрика',
    'PROPERTY_17' => 'Вид документа',
    'PROPERTY_ACCEPTOR' => 'Принявший орган',
    'PROPERTY_DATE_PRIN' => 'Дата принятия',
    'PROPERTY_DATE_REG' => 'Дата регистрации в Минюсте',
    'PROPERTY_DATE_PUB' => 'Дата опубликования',
    'PROPERTY_DATE_REVISION' => 'Документ в редакции от',
    'NAME' => 'Регистрационный номер',
    'PROPERTY_NOMER_MIN' => 'Номер регистрации в Минюсте',
    'PROPERTY_DOCTYPE' => 'Вид документа',
    'PROPERTY_27' => 'Документ недели',
    'PROPERTY_IST' => 'Источник публикации',
    'PROPERTY_24' => 'Примечание',
    'PROPERTY_NOTE' => 'Примечание',
    'PROPERTY_26' => 'Скачать документ в PDF',
    'PROPERTY_PDF' => 'Прикрепить PDF',
    'PROPERTY_25' => 'Скачать документ в Word',
    'PROPERTY_WORD' => 'Прикрепить Word',
    'edit1_csection1' => 'Дополнительно',
    'CODE' => 'Символьный код',
    'PROPERTY_PR_ZAKONA' => 'Проекты законов',
    'PROPERTY_STATUS' => 'Статус документа',
    'PROPERTY_HIDE_DOCUMENT_REFERENCE' => 'Скрыть справку документа',
    'SORT' => 'Сортировка',
  ),
  'Текст документа|edit6' => 
  array (
    'DETAIL_TEXT' => 'Детальное описание',
  ),
  'Разделы|edit2' => 
  array (
    'SECTIONS' => 'Разделы',
  ),
));
        $helper->UserOptions()->saveElementList($iblockId, array (
  'page_size' => '20',
  'order' => 'desc',
  'by' => 'timestamp_x',
  'columns' => 
  array (
    0 => 'NAME',
    1 => 'PREVIEW_TEXT',
    2 => 'ACTIVE',
    3 => 'SORT',
    4 => 'TIMESTAMP_X',
    5 => 'ID',
    6 => 'PROPERTY_26',
    7 => 'PROPERTY_25',
  ),
));
    $helper->UserOptions()->saveElementGrid($iblockId, array (
  'views' => 
  array (
    'default' => 
    array (
      'name' => NULL,
      'columns' => 
      array (
        0 => 'PROPERTY_DATE_PRIN',
        1 => 'NAME',
        2 => 'PREVIEW_TEXT',
        3 => 'ACTIVE',
        4 => 'SORT',
        5 => 'TIMESTAMP_X',
        6 => 'ID',
      ),
      'sort_by' => NULL,
      'sort_order' => NULL,
      'page_size' => 20,
      'saved_filter' => NULL,
      'custom_names' => 
      array (
        'PROPERTY_19' => 'Дата принятия',
      ),
      'last_sort_by' => 'PROPERTY_19',
      'last_sort_order' => 'desc',
      'columns_sizes' => 
      array (
        'expand' => 1,
        'columns' => 
        array (
        ),
      ),
      'sticked_columns' => 
      array (
      ),
    ),
  ),
  'filters' => 
  array (
  ),
  'current_view' => 'default',
));

    }

    public function down()
    {
        //your code ...
    }
}
