<?php

namespace Sprint\Migration;


class regionalBase_ib_20221227000639 extends Version
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
        $iblockId = $helper->Iblock()->saveIblock(array (
  'IBLOCK_TYPE_ID' => 'law_about_education',
  'LID' => 
  array (
    0 => 's1',
  ),
  'CODE' => 'regional_base',
  'API_CODE' => 'regionalBase',
  'NAME' => 'Региональная база',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'LIST_PAGE_URL' => '#SITE_DIR#/regionalnaya-baza/index.php?ID=#IBLOCK_ID#',
  'DETAIL_PAGE_URL' => '#SITE_DIR#/regionalnaya-baza/detail.php?ELEMENT_ID=#ELEMENT_ID#',
  'SECTION_PAGE_URL' => '#SITE_DIR#/regionalnaya-baza/list.php?SECTION_ID=#SECTION_ID#',
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
  'PROPERTY_INDEX' => 'I',
  'CANONICAL_PAGE_URL' => '',
  'REST_ON' => 'Y',
  'EXTERNAL_ID' => NULL,
  'LANG_DIR' => '/',
  'SERVER_NAME' => 'xn--g1anri.xn--p1ai',
  'IPROPERTY_TEMPLATES' => 
  array (
  ),
  'ELEMENT_ADD' => 'Добавить элемент',
  'ELEMENT_EDIT' => 'Изменить элемент',
  'ELEMENT_DELETE' => 'Удалить элемент',
  'SECTION_ADD' => 'Добавить раздел',
  'SECTION_EDIT' => 'Изменить раздел',
  'SECTION_DELETE' => 'Удалить раздел',
));
        $helper->Iblock()->saveIblockFields($iblockId, array (
  'IBLOCK_SECTION' => 
  array (
    'NAME' => 'Привязка к разделам',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'KEEP_IBLOCK_SECTION_ID' => 'N',
    ),
  ),
  'ACTIVE' => 
  array (
    'NAME' => 'Активность',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => 'Y',
  ),
  'ACTIVE_FROM' => 
  array (
    'NAME' => 'Начало активности',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'ACTIVE_TO' => 
  array (
    'NAME' => 'Окончание активности',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'SORT' => 
  array (
    'NAME' => 'Сортировка',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '0',
  ),
  'NAME' => 
  array (
    'NAME' => 'Название',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => '',
  ),
  'PREVIEW_PICTURE' => 
  array (
    'NAME' => 'Картинка для анонса',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'FROM_DETAIL' => 'N',
      'SCALE' => 'N',
      'WIDTH' => '',
      'HEIGHT' => '',
      'IGNORE_ERRORS' => 'N',
      'METHOD' => 'resample',
      'COMPRESSION' => 95,
      'DELETE_WITH_DETAIL' => 'N',
      'UPDATE_WITH_DETAIL' => 'N',
      'USE_WATERMARK_TEXT' => 'N',
      'WATERMARK_TEXT' => '',
      'WATERMARK_TEXT_FONT' => '',
      'WATERMARK_TEXT_COLOR' => '',
      'WATERMARK_TEXT_SIZE' => '',
      'WATERMARK_TEXT_POSITION' => 'tl',
      'USE_WATERMARK_FILE' => 'N',
      'WATERMARK_FILE' => '',
      'WATERMARK_FILE_ALPHA' => '',
      'WATERMARK_FILE_POSITION' => 'tl',
      'WATERMARK_FILE_ORDER' => NULL,
    ),
  ),
  'PREVIEW_TEXT_TYPE' => 
  array (
    'NAME' => 'Тип описания для анонса',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => 'text',
  ),
  'PREVIEW_TEXT' => 
  array (
    'NAME' => 'Описание для анонса',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'DETAIL_PICTURE' => 
  array (
    'NAME' => 'Детальная картинка',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'SCALE' => 'N',
      'WIDTH' => '',
      'HEIGHT' => '',
      'IGNORE_ERRORS' => 'N',
      'METHOD' => 'resample',
      'COMPRESSION' => 95,
      'USE_WATERMARK_TEXT' => 'N',
      'WATERMARK_TEXT' => '',
      'WATERMARK_TEXT_FONT' => '',
      'WATERMARK_TEXT_COLOR' => '',
      'WATERMARK_TEXT_SIZE' => '',
      'WATERMARK_TEXT_POSITION' => 'tl',
      'USE_WATERMARK_FILE' => 'N',
      'WATERMARK_FILE' => '',
      'WATERMARK_FILE_ALPHA' => '',
      'WATERMARK_FILE_POSITION' => 'tl',
      'WATERMARK_FILE_ORDER' => NULL,
    ),
  ),
  'DETAIL_TEXT_TYPE' => 
  array (
    'NAME' => 'Тип детального описания',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => 'text',
  ),
  'DETAIL_TEXT' => 
  array (
    'NAME' => 'Детальное описание',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'XML_ID' => 
  array (
    'NAME' => 'Внешний код',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => '',
  ),
  'CODE' => 
  array (
    'NAME' => 'Символьный код',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'UNIQUE' => 'N',
      'TRANSLITERATION' => 'N',
      'TRANS_LEN' => 100,
      'TRANS_CASE' => 'L',
      'TRANS_SPACE' => '-',
      'TRANS_OTHER' => '-',
      'TRANS_EAT' => 'Y',
      'USE_GOOGLE' => 'N',
    ),
  ),
  'TAGS' => 
  array (
    'NAME' => 'Теги',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'SECTION_NAME' => 
  array (
    'NAME' => 'Название',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => '',
  ),
  'SECTION_PICTURE' => 
  array (
    'NAME' => 'Картинка для анонса',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'FROM_DETAIL' => 'N',
      'SCALE' => 'N',
      'WIDTH' => '',
      'HEIGHT' => '',
      'IGNORE_ERRORS' => 'N',
      'METHOD' => 'resample',
      'COMPRESSION' => 95,
      'DELETE_WITH_DETAIL' => 'N',
      'UPDATE_WITH_DETAIL' => 'N',
      'USE_WATERMARK_TEXT' => 'N',
      'WATERMARK_TEXT' => '',
      'WATERMARK_TEXT_FONT' => '',
      'WATERMARK_TEXT_COLOR' => '',
      'WATERMARK_TEXT_SIZE' => '',
      'WATERMARK_TEXT_POSITION' => 'tl',
      'USE_WATERMARK_FILE' => 'N',
      'WATERMARK_FILE' => '',
      'WATERMARK_FILE_ALPHA' => '',
      'WATERMARK_FILE_POSITION' => 'tl',
      'WATERMARK_FILE_ORDER' => NULL,
    ),
  ),
  'SECTION_DESCRIPTION_TYPE' => 
  array (
    'NAME' => 'Тип описания',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => 'text',
  ),
  'SECTION_DESCRIPTION' => 
  array (
    'NAME' => 'Описание',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'SECTION_DETAIL_PICTURE' => 
  array (
    'NAME' => 'Детальная картинка',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'SCALE' => 'N',
      'WIDTH' => '',
      'HEIGHT' => '',
      'IGNORE_ERRORS' => 'N',
      'METHOD' => 'resample',
      'COMPRESSION' => 95,
      'USE_WATERMARK_TEXT' => 'N',
      'WATERMARK_TEXT' => '',
      'WATERMARK_TEXT_FONT' => '',
      'WATERMARK_TEXT_COLOR' => '',
      'WATERMARK_TEXT_SIZE' => '',
      'WATERMARK_TEXT_POSITION' => 'tl',
      'USE_WATERMARK_FILE' => 'N',
      'WATERMARK_FILE' => '',
      'WATERMARK_FILE_ALPHA' => '',
      'WATERMARK_FILE_POSITION' => 'tl',
      'WATERMARK_FILE_ORDER' => NULL,
    ),
  ),
  'SECTION_XML_ID' => 
  array (
    'NAME' => 'Внешний код',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'SECTION_CODE' => 
  array (
    'NAME' => 'Символьный код',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'UNIQUE' => 'N',
      'TRANSLITERATION' => 'N',
      'TRANS_LEN' => 100,
      'TRANS_CASE' => 'L',
      'TRANS_SPACE' => '-',
      'TRANS_OTHER' => '-',
      'TRANS_EAT' => 'Y',
      'USE_GOOGLE' => 'N',
    ),
  ),
));
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Регион',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'REGION',
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
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => 'directory',
  'USER_TYPE_SETTINGS' => 
  array (
    'size' => 1,
    'width' => 0,
    'group' => 'N',
    'multiple' => 'N',
    'TABLE_NAME' => 'region_base',
  ),
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Номер документа',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'DOC_NUMBER',
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
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
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
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Вид документа',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'DOCTYPE',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
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
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'ПОСТАНОВЛЕНИЕ',
      'DEF' => 'N',
      'SORT' => '1',
      'XML_ID' => '166261bcc6c7130363107f51bd1d7af3',
    ),
    1 => 
    array (
      'VALUE' => 'ПРИКАЗ',
      'DEF' => 'N',
      'SORT' => '2',
      'XML_ID' => '795bd74d02643659ea58d671720c2bfc',
    ),
    2 => 
    array (
      'VALUE' => 'РАСПОРЯЖЕНИЕ',
      'DEF' => 'N',
      'SORT' => '3',
      'XML_ID' => 'ac51935c9576f3ced78f34679795ac1a',
    ),
    3 => 
    array (
      'VALUE' => 'УКАЗ',
      'DEF' => 'N',
      'SORT' => '4',
      'XML_ID' => '113c045c787f3d7ce329fdda13b9fe3f',
    ),
    4 => 
    array (
      'VALUE' => 'ВЕДОМСТВЕННЫЙ ПЕРЕЧЕНЬ',
      'DEF' => 'N',
      'SORT' => '21',
      'XML_ID' => '277db696fb501f63c024bd368fd93aa6',
    ),
    5 => 
    array (
      'VALUE' => 'ДЕКЛАРАЦИЯ',
      'DEF' => 'N',
      'SORT' => '22',
      'XML_ID' => 'c964b6b68033aba12ca3fdeb7f412e9d',
    ),
    6 => 
    array (
      'VALUE' => 'ДИРЕКТИВА',
      'DEF' => 'N',
      'SORT' => '23',
      'XML_ID' => '0ff0a34bed3f7706f443febe525f69b4',
    ),
    7 => 
    array (
      'VALUE' => 'ДОГОВОР',
      'DEF' => 'N',
      'SORT' => '24',
      'XML_ID' => '96f8a9aa72d7e0ce66a7585edaaf92d8',
    ),
    8 => 
    array (
      'VALUE' => 'ДОКЛАД',
      'DEF' => 'N',
      'SORT' => '25',
      'XML_ID' => '2f3b7fa71f5bd012bf26b1f0ef24a364',
    ),
    9 => 
    array (
      'VALUE' => 'ДОРОЖНАЯ КАРТА',
      'DEF' => 'N',
      'SORT' => '26',
      'XML_ID' => '3807cadd169051edbd9d4373b1879067',
    ),
    10 => 
    array (
      'VALUE' => 'ЕВРОПЕЙСКОЕ СОГЛАШЕНИЕ',
      'DEF' => 'N',
      'SORT' => '27',
      'XML_ID' => '2879816a8aec2a0e6737b600da2fa458',
    ),
    11 => 
    array (
      'VALUE' => 'ЗАКОН РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '28',
      'XML_ID' => 'b94ce5f88590f0fc4650ced032efdd55',
    ),
    12 => 
    array (
      'VALUE' => 'ЗАЯВЛЕНИЕ',
      'DEF' => 'N',
      'SORT' => '29',
      'XML_ID' => '970072c37dea2696fb33c6684449cbda',
    ),
    13 => 
    array (
      'VALUE' => 'ИНСТРУКТИВНОЕ ПИСЬМО',
      'DEF' => 'N',
      'SORT' => '30',
      'XML_ID' => '20503ef02cfc113ac80a582d7eb4a93d',
    ),
    14 => 
    array (
      'VALUE' => 'ИНСТРУКЦИЯ',
      'DEF' => 'N',
      'SORT' => '31',
      'XML_ID' => '02327e28b9e7fe756924c6a5f5449b80',
    ),
    15 => 
    array (
      'VALUE' => 'ИНФОРМАЦИОННОЕ ПИСЬМО',
      'DEF' => 'N',
      'SORT' => '32',
      'XML_ID' => '20f654ea3cab89c6834d0131ec472c7b',
    ),
    16 => 
    array (
      'VALUE' => 'КОДЕКС',
      'DEF' => 'N',
      'SORT' => '33',
      'XML_ID' => 'ce60f2b8e2ec3f176b1bf7a5b6f7ada1',
    ),
    17 => 
    array (
      'VALUE' => 'КОММЮНИКЕ',
      'DEF' => 'N',
      'SORT' => '34',
      'XML_ID' => '063952c859f2f1ac16c8d9036126aa36',
    ),
    18 => 
    array (
      'VALUE' => 'КОНВЕНЦИЯ',
      'DEF' => 'N',
      'SORT' => '35',
      'XML_ID' => '7b8331fc606263220907c1147d94f79e',
    ),
    19 => 
    array (
      'VALUE' => 'КОНСТИТУЦИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '36',
      'XML_ID' => 'ddb8c240b754ae019b58a7b8a90359eb',
    ),
    20 => 
    array (
      'VALUE' => 'КОРРЕКТИРУЮЩИЕ КОЭФФИЦИЕНТЫ',
      'DEF' => 'N',
      'SORT' => '36',
      'XML_ID' => 'bee34ee3ab4448d8e7deab8b0ae653ab',
    ),
    21 => 
    array (
      'VALUE' => 'КОНЦЕПЦИЯ',
      'DEF' => 'N',
      'SORT' => '37',
      'XML_ID' => 'a801a109f84f9ad80d225dc4f034b2b0',
    ),
    22 => 
    array (
      'VALUE' => 'МЕМОРАНДУМ',
      'DEF' => 'N',
      'SORT' => '38',
      'XML_ID' => '7af3178f06f85ca8925914472ff0dc13',
    ),
    23 => 
    array (
      'VALUE' => 'МЕМОРАНДУМ О ВЗАИМОПОНИМАНИИ',
      'DEF' => 'N',
      'SORT' => '39',
      'XML_ID' => 'dfd5aa38e6847aca02524b1c3318cecb',
    ),
    24 => 
    array (
      'VALUE' => 'МЕТОДИЧЕСКИЕ РЕКОМЕНДАЦИИ',
      'DEF' => 'N',
      'SORT' => '40',
      'XML_ID' => 'bb6a33244b90b736f26489977320138b',
    ),
    25 => 
    array (
      'VALUE' => 'МЕТОДИЧЕСКОЕ ПИСЬМО',
      'DEF' => 'N',
      'SORT' => '41',
      'XML_ID' => '2e5531950be88463b8f9877a77d97fe8',
    ),
    26 => 
    array (
      'VALUE' => 'МОДЕЛЬНЫЙ ЗАКОН',
      'DEF' => 'N',
      'SORT' => '42',
      'XML_ID' => '8c5868725b926d0150879b862bd41039',
    ),
    27 => 
    array (
      'VALUE' => 'ОСНОВЫ ЗАКОНОДАТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '43',
      'XML_ID' => '1d8f63f8e193a3e573fe8d376aeb834d',
    ),
    28 => 
    array (
      'VALUE' => 'ОТРАСЛЕВОЕ СОГЛАШЕНИЕ',
      'DEF' => 'N',
      'SORT' => '44',
      'XML_ID' => 'e9396edd3178e4bcbe636093c0459672',
    ),
    29 => 
    array (
      'VALUE' => 'ПАКТ',
      'DEF' => 'N',
      'SORT' => '45',
      'XML_ID' => 'abdd93cc13e8e9975f4e7200a606dc11',
    ),
    30 => 
    array (
      'VALUE' => 'ПЕРЕГОВОРЫ',
      'DEF' => 'N',
      'SORT' => '46',
      'XML_ID' => '1631009e075ed9c7e11a0e3017d8578f',
    ),
    31 => 
    array (
      'VALUE' => 'ПИСЬМО',
      'DEF' => 'N',
      'SORT' => '47',
      'XML_ID' => '9e4b7c4e236b8c82c6d65a613a2f73da',
    ),
    32 => 
    array (
      'VALUE' => 'ПОЛОЖЕНИЕ',
      'DEF' => 'N',
      'SORT' => '48',
      'XML_ID' => '19d368de02d314a1cefd94fbe87e8e63',
    ),
    33 => 
    array (
      'VALUE' => 'ПОРЯДОК',
      'DEF' => 'N',
      'SORT' => '49',
      'XML_ID' => '350d1b23ec92699259845809d117d4a2',
    ),
    34 => 
    array (
      'VALUE' => 'ПОЯСНИТЕЛЬНЫЙ ДОКЛАД',
      'DEF' => 'N',
      'SORT' => '51',
      'XML_ID' => 'dd9da80745537c053e0e905c97740fe7',
    ),
    35 => 
    array (
      'VALUE' => 'ПРАВИЛА',
      'DEF' => 'N',
      'SORT' => '52',
      'XML_ID' => '56e5c31798f90a0c669d4b589e1b916a',
    ),
    36 => 
    array (
      'VALUE' => 'ПРИНЦИПЫ',
      'DEF' => 'N',
      'SORT' => '54',
      'XML_ID' => '6a372596c08167f2f1695174c241fe1d',
    ),
    37 => 
    array (
      'VALUE' => 'ПРОГРАММА',
      'DEF' => 'N',
      'SORT' => '55',
      'XML_ID' => 'bb389c27d1e94526d9f1189a76e90501',
    ),
    38 => 
    array (
      'VALUE' => 'ПРОЕКТ ФЕДЕРАЛЬНОГО ЗАКОНА',
      'DEF' => 'N',
      'SORT' => '56',
      'XML_ID' => 'd684563f479fc8911ece6f4079e05afd',
    ),
    39 => 
    array (
      'VALUE' => 'ПРОТОКОЛ',
      'DEF' => 'N',
      'SORT' => '58',
      'XML_ID' => '798c5b699acecfda7578cbf03ecd52c0',
    ),
    40 => 
    array (
      'VALUE' => 'РЕЗОЛЮЦИЯ',
      'DEF' => 'N',
      'SORT' => '60',
      'XML_ID' => '74c9597cd82a228961b3532eb66391fb',
    ),
    41 => 
    array (
      'VALUE' => 'РЕКОМЕНДАЦИЯ',
      'DEF' => 'N',
      'SORT' => '61',
      'XML_ID' => '622dbc3ec30d2550ea65168e6ccf8cc2',
    ),
    42 => 
    array (
      'VALUE' => 'РЕШЕНИЕ',
      'DEF' => 'N',
      'SORT' => '62',
      'XML_ID' => '7fca867f14322a84a27c2e01e1688062',
    ),
    43 => 
    array (
      'VALUE' => 'РУКОВОДСТВО',
      'DEF' => 'N',
      'SORT' => '63',
      'XML_ID' => '6fc1818b114d2a1cc47ae8aac5bb8751',
    ),
    44 => 
    array (
      'VALUE' => 'СОВМЕСТНОЕ ЗАЯВЛЕНИЕ',
      'DEF' => 'N',
      'SORT' => '64',
      'XML_ID' => '667eb680d58d6ed46864c692aac03131',
    ),
    45 => 
    array (
      'VALUE' => 'СОГЛАШЕНИЕ',
      'DEF' => 'N',
      'SORT' => '65',
      'XML_ID' => '92cced61ace840f8135a2269a2b96cf1',
    ),
    46 => 
    array (
      'VALUE' => 'УСТАВ',
      'DEF' => 'N',
      'SORT' => '67',
      'XML_ID' => 'e72121e55713137a9e413818d2d5f129',
    ),
    47 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНЫЙ ЗАКОН',
      'DEF' => 'N',
      'SORT' => '68',
      'XML_ID' => 'd1959be231fa713f53ab5437bbf5bbf2',
    ),
    48 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНЫЙ КОНСТИТУЦИОННЫЙ ЗАКОН',
      'DEF' => 'N',
      'SORT' => '69',
      'XML_ID' => '01ab0569f1a7b67c67557d9d6415571d',
    ),
    49 => 
    array (
      'VALUE' => 'ХАРТИЯ',
      'DEF' => 'N',
      'SORT' => '70',
      'XML_ID' => '362d906200ccefcf3f9b8e378c04248e',
    ),
    50 => 
    array (
      'VALUE' => 'ИНФОРМАЦИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6e506d248919debc8d66647a1e4c2373',
    ),
    51 => 
    array (
      'VALUE' => 'МЕТОДИЧЕСКИЕ РЕКОМЕНДАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f8cca99219dcef43c08d6dd7781b9374',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Дата принятия',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'DATE_PRIN',
  'DEFAULT_VALUE' => NULL,
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
  'USER_TYPE' => 'DateTime',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Принявший орган',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'ACCEPTOR',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
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
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '1',
      'XML_ID' => '50858b4abfaf8e2de195fa0b9ad09d9d',
    ),
    1 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ПРОСВЕЩЕНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '1',
      'XML_ID' => '0507f17b97b43d109a309d8f0afc502a',
    ),
    2 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '1',
      'XML_ID' => 'c4d27ca15d24994abe1c846d264da8a4',
    ),
    3 => 
    array (
      'VALUE' => 'ПРЕЗИДЕНТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '2',
      'XML_ID' => 'e7361402071b8d3b199bf5b35f188570',
    ),
    4 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБРАЗОВАНИЯ И НАУКИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '5',
      'XML_ID' => '88a7c4b4de213032a297a4a9cdb628c8',
    ),
    5 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБОРОНЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '6',
      'XML_ID' => '4470182950e8fdae67de2d3829ec6458',
    ),
    6 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ВНУТРЕННИХ ДЕЛ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '7',
      'XML_ID' => '0b8f4163cfbcc8f9e89deac3e49f4219',
    ),
    7 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ЗДРАВООХРАНЕНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '8',
      'XML_ID' => 'b37c89a194499000d1f8731901fb1120',
    ),
    8 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО НАДЗОРУ В СФЕРЕ ОБРАЗОВАНИЯ И НАУКИ',
      'DEF' => 'N',
      'SORT' => '10',
      'XML_ID' => 'fdaf01806a0dcb3f1279a560c1b88335',
    ),
    9 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ПРОСВЕЩЕНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО НАДЗОРУ В СФЕРЕ ОБРАЗОВАНИЯ И НАУКИ',
      'DEF' => 'N',
      'SORT' => '15',
      'XML_ID' => '718b79ac08aee852043259631aafecdf',
    ),
    10 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО ВЫСШЕМУ ОБРАЗОВАНИЮ',
      'DEF' => 'N',
      'SORT' => '25',
      'XML_ID' => '4904aa6b63f1c5445ca18055daea2537',
    ),
    11 => 
    array (
      'VALUE' => 'ГЕНЕРАЛЬНОЙ ПРОКУРАТУРЫ РОССИЙСКОЙ ФЕДЕРАЦИИ ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '680cf7a6e5258705524a3c474e454f36',
    ),
    12 => 
    array (
      'VALUE' => 'ГЛАВНОГО ГОСУДАРТСВЕННОГО САНИТАРНОГО ВРАЧА РФ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b7fa8959ddb191ef26e7d4252c516766',
    ),
    13 => 
    array (
      'VALUE' => 'ГЛАВНОГО УПРАВЛЕНИЯ СПЕЦИАЛЬНЫХ ПРОГРАММ ПРЕЗИДЕНТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a6a3e0ece9ecd370b2306203b8c53c61',
    ),
    14 => 
    array (
      'VALUE' => 'ГОСУДАРСТВ-УЧАСТНИКОВ СОДРУЖЕСТВА НЕЗАВИСИМЫХ ГОСУДАРСТВ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '88f3a142706045bf08a9715290edb099',
    ),
    15 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИИ ПО ВЫСШЕМУ ОБРАЗОВАНИЮ И МИНИСТЕРСТВА НАУКИ И ТЕХНОЛОГИЙ РЕСПУБЛИКИ СЛОВЕНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '75aef88ff55bb55397799cfea181ddf3',
    ),
    16 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО ВЫСШЕМУ ОБРАЗОВАНИЮ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ РЕСПУБЛИКИ КАЗАХСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '18b759830be19c2d33737a8b95605944',
    ),
    17 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО ВЫСШЕМУ ОБРАЗОВАНИЮ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ РЕСПУБЛИКИ КАЗАХСТАН ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e875b099f8d06ef6983b1e5064a083a0',
    ),
    18 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО СТАТИСТИКЕ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd4d181d1942cb99114ef84fa6fd34a06',
    ),
    19 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО СТРОИТЕЛЬНОЙ, АРХИТЕКТУРНОЙ И ЖИЛИЩНОЙ ПОЛИТИКЕ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6f23d7e3b49c9a875f048eb0a7603923',
    ),
    20 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО УПРАВЛЕНИЮ ГОСУДАРСТВЕННЫМ ИМУЩЕСТВОМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '30d29c30457d2e41d01fa1fe3d6a9a92',
    ),
    21 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО ФИЗИЧЕСКОЙ КУЛЬТУРЕ И СПОРТУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7294efb1a402262b1bd247fb77be92aa',
    ),
    22 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА СССР И ГОСУДАРСТВЕННОГО КОМИТЕТА КНР ПО ДЕЛАМ ОБРАЗОВАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5dcd5272e5b36f302e66bb7886883734',
    ),
    23 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО ТАМОЖЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3051176fa838e2d726e2f146176ec468',
    ),
    24 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО ТАМОЖЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ И ГОСУДАРСТВЕННОГО ТАМОЖЕННОГО КОМИТЕТА РЕСПУБЛИКИ УЗБЕКИСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a0a8deac713b89d58ecabea1ccfaf244',
    ),
    25 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОЙ ДУМОЙ ФС РФ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '2f5a6a3b25c8b04577f8d5afe532693b',
    ),
    26 => 
    array (
      'VALUE' => 'ЕВРОПЕЙСКОГО ПАРЛАМЕНТА И ЕВРОПЕЙСКОГО СОВЕТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f3096f4187b827449afdcaff2904c40d',
    ),
    27 => 
    array (
      'VALUE' => 'ЕВРОПЕЙСКОГО СОВЕТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0b5419ccbf661859c843281b14797787',
    ),
    28 => 
    array (
      'VALUE' => 'ЕВРОПЕЙСКОГО СОЮЗА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c11feef95f19e2fa775522cb0c1b379f',
    ),
    29 => 
    array (
      'VALUE' => 'КОМИССИИ ЕВРОПЕЙСКОГО СОВЕТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c524f02522e3f7f5d3cec285cbd15eef',
    ),
    30 => 
    array (
      'VALUE' => 'КОМИТЕТА КОНВЕНЦИИ О ПРИЗНАНИИ КВАЛИФИКАЦИЙ, ОТНОСЯЩИХСЯ К ВЫСШЕМУ ОБРАЗОВАНИЮ В ЕВРОПЕЙСКОМ РЕГИОНЕ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e943ca85bd31eb25720ab6fd259a479c',
    ),
    31 => 
    array (
      'VALUE' => 'КОМИТЕТА МИНИСТРОВ СОВЕТА ЕВРОПЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '67ba65de34c17a919de272046041d9b9',
    ),
    32 => 
    array (
      'VALUE' => 'КОМИТЕТА СЕКРЕТАРЕЙ СОВЕТОВ БЕЗОПАСНОСТИ ОРГАНИЗАЦИИ ДОГОВОРА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '608d955e95c1e873219b244cff7661fe',
    ),
    33 => 
    array (
      'VALUE' => 'МЕЖГОСУДАРСТВЕННОГО СОВЕТА ЕВРАЗИЙСКОГО ЭКОНОМИЧЕСКОГО СООБЩЕСТВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '00640919907a9a89b67937a7264373dc',
    ),
    34 => 
    array (
      'VALUE' => 'МЕЖДУНАРОДНОЙ ОРГАНИЗАЦИИ ТРУДА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'da13409e659ca3ec3f78b9fbfa932fbe',
    ),
    35 => 
    array (
      'VALUE' => 'МЕЖПАРЛАМЕНТСКОЙ АССАМБЛЕИ СНГ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3c3a3780d916d2ab1567493133190b3f',
    ),
    36 => 
    array (
      'VALUE' => 'МИНЗДРАВСОЦРАЗВИТИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНЗДРАВООХРАНЕНИЯ РЕСПУБЛИКИ МОЛДОВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '98a999de6475d4267a0c5a55d02f253b',
    ),
    37 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ЗДРАВООХРАНЕНИЯ И МЕДИЦИНСКОЙ ПРОМЫШЛЕННОСТИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0044af2cf8ee3a53547e74f504f05358',
    ),
    38 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ЗДРАВООХРАНЕНИЯ И СОЦИАЛЬНОГО РАЗВИТИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '2132df49a3ef3d5596726626d457f1e8',
    ),
    39 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ИНОСТРАННЫХ ДЕЛ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '042290731226d97cffe755765bf44ea9',
    ),
    40 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ И СВЯЗИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9adcb33bf7d2a30a383f3339135d6814',
    ),
    41 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА КУЛЬТУРЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd4fbbf559891827ad3ff52c00ba19af8',
    ),
    42 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА НАРОДНОГО ОБРАЗОВАНИЯ РЕСПУБЛИКИ КЫРГЫЗСТАН, МИНОБРАЗОВАНИЯ РОССИИ И КОМИТЕТА ПО ВЫСШЕЙ ШКОЛЕ МИНИСТЕРСТВА НАУКИ, ВЫСШЕЙ ШКОЛЫ И ТЕХНИЧЕСКОЙ ПОЛИТИКИ РОССИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c9b4b696c26c6647057c58a0286863a0',
    ),
    43 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ПРОСВЕЩЕНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'df06b3f6c6dd99c703af79a3a42d4c50',
    ),
    44 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА НАУКИ И ТЕХНИЧЕСКОЙ ПОЛИТИКИ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ИССЛЕДОВАНИЙ И ТЕХНОЛОГИИ РУМЫНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '689252b0b6bf58e2458e43ea4188bcd0',
    ),
    45 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА НАУКИ И ТЕХНИЧЕСКОЙ ПОЛИТИКИ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ И НАУКИ СЛОВАЦКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3d9b214f3278f6ccc1d06edb9d8b8eea',
    ),
    46 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА НАУКИ И ТЕХНИЧЕСКОЙ ПОЛИТИКИ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ, НАУКИ И ТЕХНОЛОГИЙ РЕСПУБЛИКИ БОЛГАРИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '705c3097ab7adf0a418f283db7796e26',
    ),
    47 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3d03890f186a73c3bca59348c2b749b3',
    ),
    48 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ АЗЕРБАЙДЖАНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '826e1ad8e6db79435f649a37a624a824',
    ),
    49 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ ЮЖНО-АФРИКАНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8eea7a27ec28a4f9a631e70024c6c339',
    ),
    50 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБРАЗОВАНИЯ РСФСР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '19561dc0b70b22d516b08ca5e9d72de5',
    ),
    51 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБЩЕГО И ПРОФЕССИОНАЛЬНОГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0c6ca8ace107b1e805afb655c07f0a15',
    ),
    52 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБЩЕГО И ПРОФЕССИОНАЛЬНОГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ВЫСШЕГО ОБРАЗОВАНИЯ, ПРОФЕССИОНАЛЬНОГО ОБУЧЕНИЯ, НАУКИ И ТЕХНОЛОГИЙ РЕСПУБЛИКИ НАМИБИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1a8c82b2b90fb630c3eced681a5c7fae',
    ),
    53 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБЩЕГО И ПРОФЕССИОНАЛЬНОГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ РЕСПУБЛИКИ МОЛДОВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6ee9c70fe0fd58c1454fb0d209c8a2b8',
    ),
    54 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ПРИРОДНЫХ РЕСУРСОВ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0fc54b410e7034c81cf8d7413a8c24b3',
    ),
    55 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ПРОМЫШЛЕННОСТИ И ТОРГОВЛИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0faf7cb4b97e0059347ae2f43dd6e56d',
    ),
    56 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ПРОМЫШЛЕННОСТИ, НАУКИ И ТЕХНОЛОГИЙ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f8e9a71c9ccb69ef41ac0b1a1335b7ae',
    ),
    57 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ПРОСВЕЩЕНИЯ РСФСР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3b0e70c40aa8d81729affc50a7b6f8fb',
    ),
    58 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА РЕГИОНАЛЬНОГО РАЗВИТИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '238a5c3432ee1f2e94d91384d77991f7',
    ),
    59 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО СВЯЗИ И ИНФОРМАТИЗАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'da30deabaded9e61b6675d40536aa4ad',
    ),
    60 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА СВЯЗИ И МАССОВЫХ КОММУНИКАЦИЙ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5bcc428260a775dce8a38da008c3bff6',
    ),
    61 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА СЕЛЬСКОГО ХОЗЯЙСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '65e73ef0dc2a3f32d68cbb8d93a37fc4',
    ),
    62 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА СОЦИАЛЬНОЙ ЗАЩИТЫ НАСЕЛЕНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4fa01324a3f9e284f768f14cf476e27b',
    ),
    63 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА СПОРТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '611202de8eda297d1b12de0803a2469e',
    ),
    64 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ТРАНСПОРТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '35da12272c5905267460f8a417320262',
    ),
    65 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ТРУДА И СОЦИАЛЬНОЙ ЗАЩИТЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f979f8ac67ed6922605e8ce0b450be36',
    ),
    66 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ТРУДА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '635fcb4f12d2f30eae6eb221ee1b48b3',
    ),
    67 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ФИНАНСОВ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'dc37f93370a457b5e5593908859cb028',
    ),
    68 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ЭКОНОМИЧЕСКОГО РАЗВИТИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6440ec8c0f6f2b4c119fd810c9d1a46d',
    ),
    69 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ЭНЕРГЕТИКИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6df658c713f69d9ae7cbfdba8685682a',
    ),
    70 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ЮСТИЦИИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f174c5a474e5a7c2536dffa394972b6a',
    ),
    71 => 
    array (
      'VALUE' => 'МИНИСТЕРТСВА ЭКОНОМИЧЕСКОГО РАЗВИТИЯ И ТОРГОВЛИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f4d4afd476dae4c7c485c83eb13d52d0',
    ),
    72 => 
    array (
      'VALUE' => 'МИНОБОРОНЫ РОССИИ И МИНОБРНАУКИ РОССИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5f0c0ff94b5b821e298f98e798c3d2b8',
    ),
    73 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И АМЕРИКАНСКОГО ФОНДА ГРАЖДАНСКИХ ИССЛЕДОВАНИЙ И РАЗВИТИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c4c15ef7838aeace44c984b6914c29f6',
    ),
    74 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И ГОСУДАРСТВЕННОГО СЕКРЕТАРИАТА ПО ВЫСШЕМУ ОБРАЗОВАНИЮ РЕСПУБЛИКИ АНГОЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5a9395187c0f02a88e10ca7ee4c4be13',
    ),
    75 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И ДЕПАРТАМЕНТА ОБРАЗОВАНИЯ МИНИСТЕРСТВА ФЛАМАНДСКОГО СООБЩЕСТВА КОРОЛЕВСТВА БЕЛЬГИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e2298070d5ec1f338ec88ea01f690895',
    ),
    76 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ВЫСШЕГО ОБРАЗОВАНИЯ И НАУЧНЫХ ИССЛЕДОВАНИЙ АРАБСКОЙ РЕСПУБЛИКИ ЕГИПЕТ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd2f342980874c56f7eb32ab9250b5587',
    ),
    77 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ВЫСШЕГО ОБРАЗОВАНИЯ РЕСПУБЛИКИ КУБА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '01fddb911f63eabd246ba73507c06a0f',
    ),
    78 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ ВЕНГЕРСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e1dc48432f2815b9cfb5000b9505c0a5',
    ),
    79 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ И ПОДГОТОВКИ КАДРОВ СОЦИАЛИСТИЧЕСКОЙ РЕСПУБЛИКИ ВЬЕТНАМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7b2884f7398978d530ae618641094f0f',
    ),
    80 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ И СПОРТА РЕСПУБЛИКИ НИКАРАГУА, НАЦИОНАЛЬНОГО СОВЕТА УНИВЕРСИТЕТОВ РЕСПУБЛИКИ НИКАРАГУА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '79ae06c05a83fe1e4325f66f93b48a4a',
    ),
    81 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ КИТАЙСКОЙ НАРОДНОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '222ffb7184a44b2595e2d99dac1ec904',
    ),
    82 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ПО ВОПРОСАМ ЗНАНИЙ КОРОЛЕВСТВА НОРВЕГИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f9b67580f0dfe4715531cafb07761095',
    ),
    83 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА СВЯЗИ И МАССОВЫХ КОММУНИКАЦИЙ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'dbaedc6e3548f044b551d1480ccd3b4a',
    ),
    84 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ТОРГОВЛИ СОЕДИНЕННЫХ ШТАТОВ АМЕРИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f96c033ed464c95056a64f8a6031f985',
    ),
    85 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНОБРАЗОВАНИЯ КОРОЛЕВСТВА ТАИЛАНД',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6033d25c96af0aabc5c71f12807d3724',
    ),
    86 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНОБРАЗОВАНИЯ РЕСПУБЛИКИ НАМИБИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'df4e174958a85e79c7dcd763ec9d1cc9',
    ),
    87 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНОБРАЗОВАНИЯ СЛОВАЦКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '55b86522d919a7ac2a49dc29043d535c',
    ),
    88 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНОБРАЗОВАНИЯ СОЕДИНЕННЫХ ШТАТОВ АМЕРИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e2d368c7195b19678ea9ecc54cfa8d3f',
    ),
    89 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНОБРАЗОВАНИЯ ТУРКМЕНИСТАНА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9ec7ee859b8c341e7310b88753bfb8c4',
    ),
    90 => 
    array (
      'VALUE' => 'МОТ И ЮНЕСКО',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '577cdaf0e752b3e0e14c1ad9c4c0a58f',
    ),
    91 => 
    array (
      'VALUE' => 'МЧС РОССИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '450a86ce20180d66db628563b36d7041',
    ),
    92 => 
    array (
      'VALUE' => 'ОРГАНИЗАЦИИ ОБЪЕДИНЕННЫХ НАЦИЙ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '84038a3d7e5353a3f00f4d64174d9d8c',
    ),
    93 => 
    array (
      'VALUE' => 'ОРГАНИЗАЦИИ ОБЪЕДИНЕННЫХ НАЦИЙ ПО ВОПРОСАМ ОБРАЗОВАНИЯ, НАУКИ И КУЛЬТУРЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0cd1e5b30810293bc6349aa6f032875b',
    ),
    94 => 
    array (
      'VALUE' => 'ПЕНСИОННОГО ФОНДА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '571fcdf77ab916f5166ca56443f7f1c6',
    ),
    95 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВ ГОСУДАРСТВ - УЧАСТНИКОВ СОДРУЖЕСТВА НЕЗАВИСИМЫХ ГОСУДАРСТВ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '70c30eb1b75677bbe319af783ef14c35',
    ),
    96 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА АЗЕРБАЙДЖАНСКОЙ РЕСПУБЛИКИ, РЕСПУБЛИКИ БЕЛАРУСЬ, РЕСПУБЛИКИ КАЗАХСТАН, РЕСПУБЛИКИ КЫРГЫЗСТАН, РЕСПУБЛИКИ МОЛДОВА, РОССИЙСКОЙ ФЕДЕРАЦИИ, ТУРКМЕНИСТАНА, РЕСПУБЛИКИ УЗБЕКИСТАН, УКРАИНЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '54c266b053218f41f0e42de92e6768af',
    ),
    97 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ БЕЛАРУСЬ, РЕСПУБЛИКИ КАЗАХСТАН, КЫРГЫЗСКОЙ РЕСПУБЛИКИ И ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'bccb1150682d500bef28137bbee8e417',
    ),
    98 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ БЕЛАРУСЬ, РЕСПУБЛИКИ КАЗАХСТАН, КЫРГЫЗСКОЙ РЕСПУБЛИКИ, РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ТАДЖИКИСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '69564f2ac96d240acd76e6124772c00c',
    ),
    99 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И КАБИНЕТА МИНИСТРОВ УКРАИНЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b3c9cef6d583fdf4a3025a5cecd3223e',
    ),
    100 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ОРГАНИЗАЦИИ ОБЪЕДИНЕННЫХ НАЦИЙ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c4dbb1fb9454702c2c78b6dff91e1f8b',
    ),
    101 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА АВСТРИЙСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5eaac71db40dfae4d4edff599770f03a',
    ),
    102 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА АЗЕРБАЙДЖАНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0dbddf78bfac8e7bd0a07570bc3f6f20',
    ),
    103 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА АЛЖИРСКОЙ НАРОДНОЙ ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '462245edff6235dcdfc2011c3b2c5c24',
    ),
    104 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА АРАБСКОЙ РЕСПУБЛИКИ ЕГИПЕТ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7cbba1580590c06dd738fb7ba4583c71',
    ),
    105 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА АРГЕНТИНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9ce395d3eb2bbd356d6167d7f8e811ca',
    ),
    106 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА БОЛИВАРИАНСКОЙ РЕСПУБЛИКИ ВЕНЕСУЭЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'abaa70fe24bf6ebb24571b3cb6d83969',
    ),
    107 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ВЕЛИКОГО ГЕРЦОГСТВА ЛЮКСЕМБУРГ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7fe4162db548eabbece01d7bcf173462',
    ),
    108 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ВЕНГЕРСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '39d5738b2a411bbb029742525722ef13',
    ),
    109 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ГОСУДАРСТВА ИЗРАИЛЬ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'adc6324620ac6b3333c3d5b683e0d64b',
    ),
    110 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ГРЕЧЕСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7db38034456326b4a2dba7fd237a84f7',
    ),
    111 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ИСЛАМСКОЙ РЕСПУБЛИКИ ИРАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9b15237534976e5176fd388ef57818f3',
    ),
    112 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ИТАЛЬЯНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1748dfa8918af456adffe017e13374d0',
    ),
    113 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА КИРГИЗСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7de1e113965bcbe5601ea71a8e3c5379',
    ),
    114 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА КИТАЙСКОЙ НАРОДНОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '35bc0e8884ca2fd94873b873565eeef0',
    ),
    115 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА КОРОЛЕВСТВА ДАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'acc7b8e836b3b41b6a74f2fde60276dd',
    ),
    116 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА КОРОЛЕВСТВА ИСПАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '734283a82593eb42851a70152460eca9',
    ),
    117 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА КОРОЛЕВСТВА КАМБОДЖА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '733832141fcc713270dba462dbac7b47',
    ),
    118 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА КОРОЛЕВСТВА НОРВЕГИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '10542143ef265d68a333822cd8efd9fa',
    ),
    119 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ЛИВАНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'ee14cfed4f9d93e9dc4f1f05b8d53c10',
    ),
    120 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА МЕКСИКАНСКИХ СОЕДИНЕННЫХ ШТАТОВ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'db7921678d1a3b3e9b230462768ff0c2',
    ),
    121 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА МОНГОЛИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'ab63d45d0ca0fdbff201d976a5f6e0d1',
    ),
    122 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ АБХАЗИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '13b960577f598ef8be2b4a25d7e59b09',
    ),
    123 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ АЛБАНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6a1885c7e534854ccaf0b1273852ddb3',
    ),
    124 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ АНГОЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '848cc2d29904c17224f55f06d991d0f7',
    ),
    125 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ АРМЕНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'ab7befa8ac5f5a486b04382f581f91c9',
    ),
    126 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ БЕЛАРУСЬ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c4d76bbccb04355301053d893b0c3a0f',
    ),
    127 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ БОТСВАНА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '10291fa1b3882ad7d12ce0383d8f9032',
    ),
    128 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ГВАТЕМАЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '512a8ebdf33b9cdd88853144d6aa3103',
    ),
    129 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ГРУЗИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3133cd19852fc08eb794168b59483f94',
    ),
    130 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ИНДИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '377a9dd2ef4e904790b00c84fa65772d',
    ),
    131 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ КАЗАХСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1f15b3e7cdb62d03d5bb83de9846525f',
    ),
    132 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ КИПР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '622ec405a035ce92890caf8b4841b31a',
    ),
    133 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ КУБА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '056aa19df34c25ebf3850e074bcd6cef',
    ),
    134 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ МАКЕДОНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '39e19bc645b94d02bb94ca2e4178bde7',
    ),
    135 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ МОЛДОВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e0a3a2bd6a93f1bbd4f5ac54f5f88f99',
    ),
    136 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ НАМИБИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f22ff63a01483890d0e0649783f3c7aa',
    ),
    137 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ПАРАГВАЙ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6be3e98d7ab49726d31348fd3c06e639',
    ),
    138 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ПЕРУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7f18f71f642cf303980507aeb799c1a9',
    ),
    139 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ПОЛЬША',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '315e5c15e77bf6bb1e6ce9769c25a564',
    ),
    140 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ САН-МАРИНО',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd8dc9250d462e71f78ac0b2f1fb0503f',
    ),
    141 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ СЕРБИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1bcad84e99c6485152e66ab195e875f2',
    ),
    142 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ СЛОВЕНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7d0b6b365bd2f6a29d6fb94cb636a07b',
    ),
    143 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ТАДЖИКИСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f8b0072d13d7e502eb9617e5af0e2023',
    ),
    144 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ УЗБЕКИСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1bfee5410d8b1d39a003f85318510f76',
    ),
    145 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ХОРВАТИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6fba098fc91c4e9ce522068fd63ab821',
    ),
    146 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ЧАД',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e0208e9ab697064e5a878871e91697a6',
    ),
    147 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ЮЖНАЯ ОСЕТИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'fe3a9d99cab00620211de72547afba3a',
    ),
    148 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РУМЫНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '575d45fe44f815297b73c4c2182d528f',
    ),
    149 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА СИРИЙСКОЙ АРАБСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '667b60ea4cefd1a31f80c502fc1179d7',
    ),
    150 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА СЛОВАЦКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9267c82e501a3e983d2ab670a7bb00af',
    ),
    151 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА СОЕДИНЕННОГО КОРОЛЕВСТВА ВЕЛИКОБРИТАНИИ И СЕВЕРНОЙ ИРЛАНДИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '637d25ef137e294e6d736d080c88e3ca',
    ),
    152 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА СОЕДИНЕННЫХ ШТАТОВ АМЕРИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b13cbf06fd255508352995d7f8840b67',
    ),
    153 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА СОЦИАЛИСТИЧЕСКОЙ РЕСПУБЛИКИ ВЬЕТНАМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f1db239549932b2c1d649651391d28ae',
    ),
    154 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА СУЛТАНАТА ОМАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1ec2761f80462a9c2e21df2aca8c97e3',
    ),
    155 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ТУРЕЦКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '2b2ef9c3126a62f713ce789c79ff6959',
    ),
    156 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ТУРКМЕНИСТАНА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e781aabbc2b2b918af7011287794d6a8',
    ),
    157 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА УКРАИНЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a8b19dec277b101c3681c81944584a8c',
    ),
    158 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ФЕДЕРАТИВНОЙ РЕСПУБЛИКИ БРАЗИЛИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '166621c4c812e2c602eff6fffb4871bb',
    ),
    159 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ФЕДЕРАТИВНОЙ РЕСПУБЛИКИ ГЕРМАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '2c0055461c6eae7e601562224b1c2148',
    ),
    160 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ФИНЛЯНДСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '262a3f0d439d604a18a584ebccf75861',
    ),
    161 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ФРАНЦУЗСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5391ce4a49befc2638c65d151ac24c7a',
    ),
    162 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ЧЕШСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c87f905209510a91b1f73a46816d2f60',
    ),
    163 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ЭСТОНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '09611d3953b3fc02055a10233b2546ee',
    ),
    164 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ЯПОНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'fa2947675b88e2780ece85482faf0ba4',
    ),
    165 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И КОРОЛЕВСКОГО ПРАВИТЕЛЬСТВА НЕПАЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a277b07556b18c4925716bff1ab0b46c',
    ),
    166 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА АЛЖИРСКОЙ НАРОДНОЙ ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКОЙ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c8596865344e39dce801b86ec112e05f',
    ),
    167 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ВЕНГЕРСКОЙ НАРОДНОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6f29e4e0efb4f0904420f626e2aa8a32',
    ),
    168 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ГВИНЕЙСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '76937560f9a993e8baeae863805a771e',
    ),
    169 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКИ АФГАНИСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '325b166b8a3af98ab91053470ed5dda8',
    ),
    170 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКОЙ САН-ТОМЕ И ПРИНСИПИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd59304c53dc62d3659cf72996664953b',
    ),
    171 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКОЙ ШРИ-ЛАНКА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '436e5ba182f98ec86f883c6473b674e7',
    ),
    172 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ИРАКСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e382bab88960f9afb36e5039c95fb543',
    ),
    173 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ИСЛАМСКОЙ РЕСПУБЛИКИ МАВРИТАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4d5ad00a8f8dd3b48052ac988fa1a0c0',
    ),
    174 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ИСЛАМСКОЙ РЕСПУБЛИКИ ПАКИСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0d0ef01bcc028b7c7001cf357bfbdf76',
    ),
    175 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ИСПАНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7ecca78b2b9bbe4f0c4e719bda863382',
    ),
    176 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ЛАОССКОЙ НАРОДНО-ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '938983a299e1c5dec0bd290c29fe34e4',
    ),
    177 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА МАВРИКИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'fd1a679ec4501c7bf17d9d05a72211c5',
    ),
    178 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА МАЛАГАСИЙСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8a75fdbb7e37bd615a576188bef8138b',
    ),
    179 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА МОНГОЛЬСКОЙ НАРОДНОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c4a7a92b5e2715ca5ae1bb8ad232a38e',
    ),
    180 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКИ ЙЕМЕН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '704923916787bf22a4111b280054241b',
    ),
    181 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ РЕСПУБЛИКИ АНГОЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3e90e7006ed87664089d1b76202c7832',
    ),
    182 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ РЕСПУБЛИКИ БАНГЛАДЕШ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'ee7ad575a78b45f348829f9b08ddedae',
    ),
    183 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ РЕСПУБЛИКИ БОЛГАРИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'fbfcaff83db0bacb1e97e50c94685a0b',
    ),
    184 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ РЕСПУБЛИКИ КАМПУЧИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '023756d93a4db326bc034b45408737b2',
    ),
    185 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ РЕСПУБЛИКИ КОНГО',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f8fa3b5940f51072640dae95258cf42b',
    ),
    186 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ РЕСПУБЛИКИ МОЗАМБИК',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '61b5d80413a5e2e514b6cd33f70dfe07',
    ),
    187 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ОБЪЕДИНЕННОЙ АРАБСКОЙ РЕСПУБЛИКИ ЕГИПЕТ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '222369451d1cd1b63f7891b5429964f0',
    ),
    188 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ПОЛЬСКОЙ НАРОДНОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4d78d2db6aab627d457e595308c95f98',
    ),
    189 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ БОЛИВИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '58252aa051743ab57ff5cd126a374acf',
    ),
    190 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ БУРУНДИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4a23e455636bfccd61fa102c468d68b7',
    ),
    191 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ВЕРХНЯЯ ВОЛЬТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '627bfe54dee65d444a8f721786cf607b',
    ),
    192 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ГАНА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '68a62aea9730c624eac6a4a76e614ff1',
    ),
    193 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ГВИНЕЯ-БИСАУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e6fa90feaea870d5abe8ccef359b2cf2',
    ),
    194 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ЗАМБИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '53afd825f0b132ab007f9ef25fb43d71',
    ),
    195 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ИНДИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b9ea7d34758b3597de3e3f0519dae80c',
    ),
    196 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ КАМЕРУН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'fde45e2a4dfb18efdfb7d5d141f4f5e5',
    ),
    197 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ КОЛУМБИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '01cd4bd6187671e115cfb014227537f4',
    ),
    198 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ КУБА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3f6d770e7d318a03d026a62580289c6e',
    ),
    199 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ МАЛИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1e0e5366bb2e8d93f787182e813eda40',
    ),
    200 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ НИГЕР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '72bc8d90ef7aa9444556366db8d1792b',
    ),
    201 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ НИКАРАГУА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c33071d86bb25d060534ec1bcbd208a0',
    ),
    202 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ОСТРОВА ЗЕЛЕНОГО МЫСА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8fd0597455330248d61c1e99b0843219',
    ),
    203 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ПЕРУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8343cbef6ea339eb1e5cad45f9edd28d',
    ),
    204 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ СУДАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a180fa088f6079000f7a7ee993cef605',
    ),
    205 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ СУРИНАМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '86e3c6fe4fb1a6353720f50988bc9343',
    ),
    206 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ СЬЕРРА ЛЕОНЕ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0c218d92bace7a5b245d513cdf185937',
    ),
    207 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ЭКВАТОРИАЛЬНАЯ ГВИНЕЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a013bc4563849be8aa2025151defdc63',
    ),
    208 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РУАНДИЙСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7f3d44b089db346cbfb35f23be41e30a',
    ),
    209 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА СИРИЙСКОЙ АРАБСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '77453a7dd7a5659abf48d079c3d0618a',
    ),
    210 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА СОМАЛИЙСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '47af645f6eaae4b95a29a59dec4fea27',
    ),
    211 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА СОЦИАЛИСТИЧЕСКОЙ РЕСПУБЛИКИ ВЬЕТНАМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a6391bd4088e07de3f764046bdb4030b',
    ),
    212 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ФЕДЕРАТИВНОЙ РЕСПУБЛИКИ ГЕРМАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1245df758ece41b627985fca52d94ee5',
    ),
    213 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ФИНЛЯНДСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7bd268a361e4951ad25330890bfa7e67',
    ),
    214 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ЦЕНТРАЛЬНОАФРИКАНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'dceaafa353e826aeec4d5ac8558e66c1',
    ),
    215 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ЧЕХОСЛОВАЦКОЙ СОЦИАЛИСТИЧЕСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'bf4ad1a72efca06e671eb1c7cf7a3f4b',
    ),
    216 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВОМ НАРОДНОЙ РЕСПУБЛИКИ БОЛГАРИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1e5b8e09da08ef79dcd7d4ea6d1341e0',
    ),
    217 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И СОЮЗНОГО ИСПОЛНИТЕЛЬНОГО ВЕЧЕ СКУПЩИНЫ СОЦИАЛИСТИЧЕСКОЙ ФЕДЕРАТИВНОЙ РЕСПУБЛИКИ ЮГОСЛАВИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3c49b6248288b11b7c59f534988f7215',
    ),
    218 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ФЕДЕРАЛЬНОГО ВОЕННОГО ПРАВИТЕЛЬСТВА ФЕДЕРАТИВНОЙ РЕСПУБЛИКИ НИГЕРИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '59d4444f80e31f1fb6b268a385ca64fc',
    ),
    219 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВОМ РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВОМ РЕСПУБЛИКИ АНГОЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd2260417aec05d5f15d60f605095fca9',
    ),
    220 => 
    array (
      'VALUE' => 'ПРЕЗИДЕНТ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '45eed545ec6ceb3cbfc28f9943daa34e',
    ),
    221 => 
    array (
      'VALUE' => 'ПРЕЗИДЕНТА РСФСР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '80dfe6ab5d5148ce128dc22b5bee8072',
    ),
    222 => 
    array (
      'VALUE' => 'ПРЕЗИДИУМА ВЫСШЕЙ АТТЕСТАЦИОННОЙ КОМИССИИ ПРИ МИНИСТЕРСТВЕ ОБРАЗОВАНИЯ И НАУКИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1c23d2185f1309cc166f1a454ce9f031',
    ),
    223 => 
    array (
      'VALUE' => 'РОСМОРРЕЧФЛОТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e10ee80e9296289ad3413571e27cbcc7',
    ),
    224 => 
    array (
      'VALUE' => 'РОСПОТРЕБНАДЗОРА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'be734bc37f4ef4cd3dfee6a8446241a5',
    ),
    225 => 
    array (
      'VALUE' => 'РОССИЙСКОЙ ФЕДЕРАЦИИ И ТУРЕЦКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'cbb3e9d82679096f7e9e42e94b5d7524',
    ),
    226 => 
    array (
      'VALUE' => 'СЕКРЕТАРИАТА ВЦСПС',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd38bbe62db7a8b96770a8f305302c5c8',
    ),
    227 => 
    array (
      'VALUE' => 'СЛЕДСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '262a73edff9f461e7343077efcb65c09',
    ),
    228 => 
    array (
      'VALUE' => 'СОВЕТА ГЛАВ ПРАВИТЕЛЬСТВ СОДРУЖЕСТВА НЕЗАВИСИМЫХ ГОСУДАРСТВ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8e7c53ef850e0d43f11804bf23448dd9',
    ),
    229 => 
    array (
      'VALUE' => 'СОВЕТА ЕВРОПЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b8f590a65c7a8650661f8b153846ab3d',
    ),
    230 => 
    array (
      'VALUE' => 'СОВЕТА КОЛЛЕКТИВНОЙ БЕЗОПАСНОСТИ ОРГАНИЗАЦИИ ДОГОВОРА О КОЛЛЕКТИВНОЙ БЕЗОПАСНОСТИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'efbfa9cb28a8c9e7465d9de28ecd86ba',
    ),
    231 => 
    array (
      'VALUE' => 'СОВЕТА МИНИСТРОВ ИНОСТРАННЫХ ДЕЛ ГОСУДАРСТВ-ЧЛЕНОВ СОДРУЖЕСТВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '92e185800941cfcf539b66d4bf1f5154',
    ),
    232 => 
    array (
      'VALUE' => 'СОВЕТА МИНИСТРОВ ОБОРОНЫ ОРГАНИЗАЦИИ ДОГОВОРА О КОЛЛЕКТИВНОЙ БЕЗОПАСНОСТИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a5ebe98b38ac4639c71c79029667c2ec',
    ),
    233 => 
    array (
      'VALUE' => 'СОВЕТА МИНИСТРОВ РСФСР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '87a33cb6ab335c1ada4a02779d05e616',
    ),
    234 => 
    array (
      'VALUE' => 'СОВЕТА МИНИСТРОВ СОЮЗНОГО ГОСУДАРСТВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8da941ebdcb060a6b7493d7634be03c5',
    ),
    235 => 
    array (
      'VALUE' => 'СОВЕТА МИНИСТРОВ СССР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '190294f4de2f668ca09324300ba99316',
    ),
    236 => 
    array (
      'VALUE' => 'СОЮЗА СОВЕТСКИХ СОЦИАЛИСТИЧЕСКИХ РЕСПУБЛИК И СОЦИАЛИСТИЧЕСКОЙ ЭФИОПИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e7295a645ad124939ab64c91891043e9',
    ),
    237 => 
    array (
      'VALUE' => 'СУДЕБНОГО ДЕПАРТАМЕНТА ПРИ ВЕРХОВНОМ СУДЕ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '198ee8af42850056de95ba20dc9e2a98',
    ),
    238 => 
    array (
      'VALUE' => 'УПРАВЛЕНИЯ ДЕЛАМИ ПРЕЗИДЕНТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'db5d147d004bab491f48418664f8bf6d',
    ),
    239 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ВОЗДУШНОГО ТРАНСПОРТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '077075c6d52eec71836df213990fea71',
    ),
    240 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ЖЕЛЕЗНОДОРОЖНОГО ТРАНСПОРТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f99dde4a230de3fb95adfa1e086e4e23',
    ),
    241 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ЛЕСНОГО ХОЗЯЙСТВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'ed1136a2c5700e4a53ad685326bf8f18',
    ),
    242 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА НАУЧНЫХ ОРГАНИЗАЦИЙ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7e54f6556544c5d4525dc42c383cf423',
    ),
    243 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО НАУКЕ И ИННОВАЦИЯМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4258adfed362bac47dd22f3e5fad11da',
    ),
    244 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО ОБРАЗОВАНИЮ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '17e6fbe109958dd2d659d3f97577dd71',
    ),
    245 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО ПЕЧАТИ И МАССОВЫМ КОММУНИКАЦИЯМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1da93851c30939676c663c49ca434e9d',
    ),
    246 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО РЫБОЛОВСТВУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '359364e6b808272f8b09bcf297667f94',
    ),
    247 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО СПОРТУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c457567bc7bc4b9a1ce58d23f97c73a3',
    ),
    248 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО СТРОИТЕЛЬСТВУ И ЖИЛИЩНО-КОММУНАЛЬНОМУ ХОЗЯЙСТВУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9096a6061c5a4cc8b663af6941197441',
    ),
    249 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО ТЕХНИЧЕСКОМУ РЕГУЛИРОВАНИЮ И МЕТРОЛОГИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9c40c011628fea8e077830352f36d8a7',
    ),
    250 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО УПРАВЛЕНИЮ ГОСУДАРСТВЕННЫМ ИМУЩЕСТВОМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'fdcb0ce93e3300d53d04181b0368a948',
    ),
    251 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА СВЯЗИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '30d425dc2b98621059f226cea5754cd1',
    ),
    252 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА СПЕЦИАЛЬНОГО СТРОИТЕЛЬСТВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd29bb437692e801406bf4987e163bd92',
    ),
    253 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО КАЗНАЧЕЙСТВА МИНИСТЕРСТВА ФИНАНСОВ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '600f680977b695b89c60ee2baab63ac4',
    ),
    254 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО ФОНДА ОБЯЗАТЕЛЬНОГО МЕДИЦИНСКОГО СТРАХОВАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a58bd253646fa808b57d15ceda4c8617',
    ),
    255 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ МИГРАЦИОННОЙ СЛУЖБЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '555218d95af7233971255b56274c5c44',
    ),
    256 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ МИГРАЦИОННОЙ СЛУЖБЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'bcd7d9e06d3cb2aabd65a4030d7fc306',
    ),
    257 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ НАЛОГОВОЙ СЛУЖБЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '08a1b26f655f750a307174872571a218',
    ),
    258 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ ПОГРАНИЧНОЙ СЛУЖБЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '149080015ffc5595c594f2561b39532b',
    ),
    259 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ БЕЗОПАСНОСТИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b0774550fd33816911dc939be1083e90',
    ),
    260 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ВОЙСК НАЦИОНАЛЬНОЙ ГВАРДИИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '234db33fd26fce0ef4532a4ab7d903dc',
    ),
    261 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ГОСУДАРСТВЕННОЙ СТАТИСТИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '731b103f852166f827bc19f904a40f3b',
    ),
    262 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ИСПОЛНЕНИЯ НАКАЗАНИЙ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '2b6bb1d049e8aeff4f4bd26d99cc6147',
    ),
    263 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ НАЛОГОВОЙ ПОЛИЦИИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f9727381732c5f0609e1bf1bddc21a47',
    ),
    264 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ОХРАНЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6fbff5463ff7f3488f366dd6dceab7ae',
    ),
    265 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО ВЕТЕРИНАРНОМУ И ФИТОСАНИТАРНОМУ НАДЗОРУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6acf496e88e0b4501c662a379598fd5b',
    ),
    266 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО ИНТЕЛЛЕКТУАЛЬНОЙ СОБСТВЕННОСТИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f241d83eb8048b7da9e8a94e5037c4d2',
    ),
    267 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО НАДЗОРУ В СФЕРЕ ЗДРАВООХРАНЕНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '191a2ad533c59faa1d4fb9e01262beb0',
    ),
    268 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО ТРУДУ И ЗАНЯТОСТИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6932490f2a2cce9ac77eecb2b109811d',
    ),
    269 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО ФИНАНСОВЫМ РЫНКАМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '221720c8a6a988e186dfaced2f7ce76c',
    ),
    270 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ РОССИЙСКОЙ ФЕДЕРАЦИИ ПО КОНТРОЛЮ ЗА ОБОРОТОМ НАРКОТИКОВ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0dfa17f5472d6537a5823a43ac5f7cca',
    ),
    271 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ ТАМОЖЕННОЙ СЛУЖБЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '02017b6c8579d3f02686b69ff7b7bbc7',
    ),
    272 => 
    array (
      'VALUE' => 'ЦЕНТРАЛЬНОГО БАНКА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5033a762270917d035bc70100b4b3ed0',
    ),
    273 => 
    array (
      'VALUE' => 'ЦЕНТРАЛЬНОЙ ИЗБИРАТЕЛЬНОЙ КОМИССИИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1f362426cf0b0951419078b495a8d798',
    ),
    274 => 
    array (
      'VALUE' => 'ШАНХАЙСКОЙ ОРГАНИЗАЦИИ СОТРУДНИЧЕСТВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd1dcd4b77cca9f4a178b7b16b3b68e76',
    ),
    275 => 
    array (
      'VALUE' => 'ЭКОНОМИЧЕСКОГО СОВЕТА СОДРУЖЕСТВА НЕЗАВИСИМЫХ ГОСУДАРСТВ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'ef2227fa39fbbba5f65186abbbf2d38a',
    ),
    276 => 
    array (
      'VALUE' => 'ЮНЕСКО И СОВЕТА ЕВРОПЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd05b39eb39fa287f3a5429ce3fb9c794',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Прикрепить Word',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'WORD',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'F',
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
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Прикрепить PDF',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'PDF',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'F',
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
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
    
    }

    public function down()
    {
        //your code ...
    }
}
