<?php

namespace Sprint\Migration;


class sudebnayaPraktika20211214135541 extends Version
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
  'IBLOCK_TYPE_ID' => 'practice',
  'LID' => 
  array (
    0 => 's1',
  ),
  'CODE' => 'sudebnaya-praktika',
  'API_CODE' => 'sudebnayaPraktika',
  'NAME' => 'Судебная практика',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'LIST_PAGE_URL' => '#SITE_DIR#/zakonodatelstvo-ob-obrazovanii/sudebnaya-praktika/baza/',
  'DETAIL_PAGE_URL' => '#SITE_DIR#/zakonodatelstvo-ob-obrazovanii/sudebnaya-praktika/baza/detail.php?ELEMENT_ID=#ELEMENT_ID#',
  'SECTION_PAGE_URL' => '#SITE_DIR#/zakonodatelstvo-ob-obrazovanii/sudebnaya-praktika/baza/list.php?SECTION_ID=#SECTION_ID#',
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
  'ELEMENTS_NAME' => 'Решения',
  'ELEMENT_NAME' => 'Решение',
  'PROPERTY_INDEX' => 'Y',
  'CANONICAL_PAGE_URL' => '',
  'REST_ON' => 'N',
  'EXTERNAL_ID' => NULL,
  'LANG_DIR' => '/',
  'SERVER_NAME' => 'xn--g1anri.xn--p1ai',
  'ELEMENT_ADD' => 'Добавить решение',
  'ELEMENT_EDIT' => 'Изменить решение',
  'ELEMENT_DELETE' => 'Удалить решение',
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
    $helper->Iblock()->saveGroupPermissions($iblockId, array (
  'administrators' => 'X',
  'everyone' => 'R',
  'CONTROL_PANEL_USERS' => 'W',
));
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Вид документа',
  'ACTIVE' => 'Y',
  'SORT' => '499',
  'CODE' => 'DOCTYPE',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => '37',
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
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
      'XML_ID' => 'a00ceafd273b0ea7196be2bbf32921cb',
    ),
    1 => 
    array (
      'VALUE' => 'ПРИКАЗ',
      'DEF' => 'N',
      'SORT' => '2',
      'XML_ID' => '2283637bdcd91184672adfcf2ef2dcf4',
    ),
    2 => 
    array (
      'VALUE' => 'РАСПОРЯЖЕНИЕ',
      'DEF' => 'N',
      'SORT' => '3',
      'XML_ID' => '4b8836371d6417814cdb3ac8cdbbefc5',
    ),
    3 => 
    array (
      'VALUE' => 'УКАЗ',
      'DEF' => 'N',
      'SORT' => '4',
      'XML_ID' => '434f19d256c8533c165919c9dd238808',
    ),
    4 => 
    array (
      'VALUE' => 'ВЕДОМСТВЕННЫЙ ПЕРЕЧЕНЬ',
      'DEF' => 'N',
      'SORT' => '21',
      'XML_ID' => '3663d025d7928e11221b9548c6846e1e',
    ),
    5 => 
    array (
      'VALUE' => 'ДЕКЛАРАЦИЯ',
      'DEF' => 'N',
      'SORT' => '22',
      'XML_ID' => '856e83ce076f2144688e49267b45db65',
    ),
    6 => 
    array (
      'VALUE' => 'ДИРЕКТИВА',
      'DEF' => 'N',
      'SORT' => '23',
      'XML_ID' => 'feeb3305f534dbffcd55e0b26bbf6067',
    ),
    7 => 
    array (
      'VALUE' => 'ДОГОВОР',
      'DEF' => 'N',
      'SORT' => '24',
      'XML_ID' => '0aec8d363201fbd88ab58ee54a3936ef',
    ),
    8 => 
    array (
      'VALUE' => 'ДОКЛАД',
      'DEF' => 'N',
      'SORT' => '25',
      'XML_ID' => 'c684a07da94d21ee75508eab9c89d4bc',
    ),
    9 => 
    array (
      'VALUE' => 'ДОРОЖНАЯ КАРТА',
      'DEF' => 'N',
      'SORT' => '26',
      'XML_ID' => '26a78ce5d59fc9c0aa9dc7a29864bdaf',
    ),
    10 => 
    array (
      'VALUE' => 'ЕВРОПЕЙСКОЕ СОГЛАШЕНИЕ',
      'DEF' => 'N',
      'SORT' => '27',
      'XML_ID' => '5597eb689c17c83998a79026d65cbdcc',
    ),
    11 => 
    array (
      'VALUE' => 'ЗАКОН РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '28',
      'XML_ID' => 'fea34cad0c425e276a10eec5e0a898c8',
    ),
    12 => 
    array (
      'VALUE' => 'ЗАЯВЛЕНИЕ',
      'DEF' => 'N',
      'SORT' => '29',
      'XML_ID' => 'b2914a5337e4e5c75a74918f2d128cf7',
    ),
    13 => 
    array (
      'VALUE' => 'ИНСТРУКТИВНОЕ ПИСЬМО',
      'DEF' => 'N',
      'SORT' => '30',
      'XML_ID' => '0edb6acaa797b0f55b050471acdca4ac',
    ),
    14 => 
    array (
      'VALUE' => 'ИНСТРУКЦИЯ',
      'DEF' => 'N',
      'SORT' => '31',
      'XML_ID' => 'f674f8467dfd00275371b07258f96486',
    ),
    15 => 
    array (
      'VALUE' => 'ИНФОРМАЦИОННОЕ ПИСЬМО',
      'DEF' => 'N',
      'SORT' => '32',
      'XML_ID' => '2b5d01c9c37fe9bee491f63e3e2c5ce7',
    ),
    16 => 
    array (
      'VALUE' => 'КОДЕКС',
      'DEF' => 'N',
      'SORT' => '33',
      'XML_ID' => '07bae179d6c693a2ec6d44923a7ab38f',
    ),
    17 => 
    array (
      'VALUE' => 'КОММЮНИКЕ',
      'DEF' => 'N',
      'SORT' => '34',
      'XML_ID' => 'b19f5d86753873ba830e59cc2adede75',
    ),
    18 => 
    array (
      'VALUE' => 'КОНВЕНЦИЯ',
      'DEF' => 'N',
      'SORT' => '35',
      'XML_ID' => 'cd1c5810668d58af6b449d78c5b854dd',
    ),
    19 => 
    array (
      'VALUE' => 'КОНСТИТУЦИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '36',
      'XML_ID' => 'fd1b47f23b1c3175dbe7c41d895b27b6',
    ),
    20 => 
    array (
      'VALUE' => 'КОРРЕКТИРУЮЩИЕ КОЭФФИЦИЕНТЫ',
      'DEF' => 'N',
      'SORT' => '36',
      'XML_ID' => '57fd84c1b810817c99ed65aa4fe51552',
    ),
    21 => 
    array (
      'VALUE' => 'КОНЦЕПЦИЯ',
      'DEF' => 'N',
      'SORT' => '37',
      'XML_ID' => 'c9ac29a6abae186b4ac91fddb6fdd523',
    ),
    22 => 
    array (
      'VALUE' => 'МЕМОРАНДУМ',
      'DEF' => 'N',
      'SORT' => '38',
      'XML_ID' => 'ba07ff6ded7f7e47c051384ac6a70ac4',
    ),
    23 => 
    array (
      'VALUE' => 'МЕМОРАНДУМ О ВЗАИМОПОНИМАНИИ',
      'DEF' => 'N',
      'SORT' => '39',
      'XML_ID' => '52c8a125fa7bba757cedca17a2aa4bfa',
    ),
    24 => 
    array (
      'VALUE' => 'МЕТОДИЧЕСКИЕ РЕКОМЕНДАЦИИ',
      'DEF' => 'N',
      'SORT' => '40',
      'XML_ID' => '9b4f9ab7c2dd97667c35e05f23fea8ed',
    ),
    25 => 
    array (
      'VALUE' => 'МЕТОДИЧЕСКОЕ ПИСЬМО',
      'DEF' => 'N',
      'SORT' => '41',
      'XML_ID' => '81293a9b197ae5c4861bb85873c2d995',
    ),
    26 => 
    array (
      'VALUE' => 'МОДЕЛЬНЫЙ ЗАКОН',
      'DEF' => 'N',
      'SORT' => '42',
      'XML_ID' => '940e6f81b4e4552996a2fe191d0edd16',
    ),
    27 => 
    array (
      'VALUE' => 'ОСНОВЫ ЗАКОНОДАТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '43',
      'XML_ID' => '4328531a923d02abf744b1b9bf99c689',
    ),
    28 => 
    array (
      'VALUE' => 'ОТРАСЛЕВОЕ СОГЛАШЕНИЕ',
      'DEF' => 'N',
      'SORT' => '44',
      'XML_ID' => '129ee4a04e829e1e4a817659a3f55dd4',
    ),
    29 => 
    array (
      'VALUE' => 'ПАКТ',
      'DEF' => 'N',
      'SORT' => '45',
      'XML_ID' => 'd16c9f5c45f117d9be01fa99ef71a616',
    ),
    30 => 
    array (
      'VALUE' => 'ПЕРЕГОВОРЫ',
      'DEF' => 'N',
      'SORT' => '46',
      'XML_ID' => 'ee0e1641e360f2c9d408a037e265433d',
    ),
    31 => 
    array (
      'VALUE' => 'ПИСЬМО',
      'DEF' => 'N',
      'SORT' => '47',
      'XML_ID' => 'f1ded5710e1c73619dcabaf19ffffd71',
    ),
    32 => 
    array (
      'VALUE' => 'ПОЛОЖЕНИЕ',
      'DEF' => 'N',
      'SORT' => '48',
      'XML_ID' => 'a4a3c3bbf82f00f63436e5215f1cca43',
    ),
    33 => 
    array (
      'VALUE' => 'ПОРЯДОК',
      'DEF' => 'N',
      'SORT' => '49',
      'XML_ID' => '2f83a32132a59da2d3c944b18179305d',
    ),
    34 => 
    array (
      'VALUE' => 'ПОЯСНИТЕЛЬНЫЙ ДОКЛАД',
      'DEF' => 'N',
      'SORT' => '51',
      'XML_ID' => '0aa39ced0685b42565e74e0349b2c2e0',
    ),
    35 => 
    array (
      'VALUE' => 'ПРАВИЛА',
      'DEF' => 'N',
      'SORT' => '52',
      'XML_ID' => '14bb50bc8109253794aa00c15f219638',
    ),
    36 => 
    array (
      'VALUE' => 'ПРИНЦИПЫ',
      'DEF' => 'N',
      'SORT' => '54',
      'XML_ID' => '9d2d2b0fbaa93dae6ea7073aa9c832d6',
    ),
    37 => 
    array (
      'VALUE' => 'ПРОГРАММА',
      'DEF' => 'N',
      'SORT' => '55',
      'XML_ID' => '912365d15872c5560bd8c1ec2659a243',
    ),
    38 => 
    array (
      'VALUE' => 'ПРОЕКТ ФЕДЕРАЛЬНОГО ЗАКОНА',
      'DEF' => 'N',
      'SORT' => '56',
      'XML_ID' => 'c1b4093f6b850eee458b629e885348c4',
    ),
    39 => 
    array (
      'VALUE' => 'ПРОТОКОЛ',
      'DEF' => 'N',
      'SORT' => '58',
      'XML_ID' => 'c74ce136f36004550e49d720b04db0cf',
    ),
    40 => 
    array (
      'VALUE' => 'РЕЗОЛЮЦИЯ',
      'DEF' => 'N',
      'SORT' => '60',
      'XML_ID' => 'ebacfe2d3cd1ec4f7e41ae347edf0dfb',
    ),
    41 => 
    array (
      'VALUE' => 'РЕКОМЕНДАЦИЯ',
      'DEF' => 'N',
      'SORT' => '61',
      'XML_ID' => '7428baf72eca9f2813eae29ee6147583',
    ),
    42 => 
    array (
      'VALUE' => 'РЕШЕНИЕ',
      'DEF' => 'N',
      'SORT' => '62',
      'XML_ID' => 'f94535cb746fb52b81d262dbf3d03305',
    ),
    43 => 
    array (
      'VALUE' => 'РУКОВОДСТВО',
      'DEF' => 'N',
      'SORT' => '63',
      'XML_ID' => '08ff95298d7e205fa9d9181230f1b6d4',
    ),
    44 => 
    array (
      'VALUE' => 'СОВМЕСТНОЕ ЗАЯВЛЕНИЕ',
      'DEF' => 'N',
      'SORT' => '64',
      'XML_ID' => 'b8ba12432bf83be2d8b50353e6f28650',
    ),
    45 => 
    array (
      'VALUE' => 'СОГЛАШЕНИЕ',
      'DEF' => 'N',
      'SORT' => '65',
      'XML_ID' => '79e7a693d103564f6662e1d49855588c',
    ),
    46 => 
    array (
      'VALUE' => 'УСТАВ',
      'DEF' => 'N',
      'SORT' => '67',
      'XML_ID' => '97a4c79a3ca6c6b51c67d3232ae96dab',
    ),
    47 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНЫЙ ЗАКОН',
      'DEF' => 'N',
      'SORT' => '68',
      'XML_ID' => '162f9605e987e2c16bb8cff3c6878e49',
    ),
    48 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНЫЙ КОНСТИТУЦИОННЫЙ ЗАКОН',
      'DEF' => 'N',
      'SORT' => '69',
      'XML_ID' => 'df6d2b2a134062b8a247f9abfd44fbec',
    ),
    49 => 
    array (
      'VALUE' => 'ХАРТИЯ',
      'DEF' => 'N',
      'SORT' => '70',
      'XML_ID' => 'cefa715cc003c4cd8df59a0c14606941',
    ),
    50 => 
    array (
      'VALUE' => 'ИНФОРМАЦИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6c042844f8aa6e7fc02ae04ec75f5b85',
    ),
    51 => 
    array (
      'VALUE' => 'МЕТОДИЧЕСКИЕ РЕКОМЕНДАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd152d26c904d51758bf11b4e93c78179',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Суд',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'SYD',
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
  'IS_REQUIRED' => 'Y',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'Решения арбитражных судов ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SYD4',
    ),
    1 => 
    array (
      'VALUE' => 'Решения арбитражных судов (c 2013 г.)',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SYD4NEW',
    ),
    2 => 
    array (
      'VALUE' => 'Решения Конституционного суда РФ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SYD1',
    ),
    3 => 
    array (
      'VALUE' => 'Решения Конституционного суда РФ (c 2013 г.)',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SYD1NEW',
    ),
    4 => 
    array (
      'VALUE' => 'Решения конституционных (уставных) судов субъектов РФ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SYD2',
    ),
    5 => 
    array (
      'VALUE' => 'Решения конституционных (уставных) судов субъектов РФ (c 2013 г.)',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SYD2NEW',
    ),
    6 => 
    array (
      'VALUE' => 'Решения судов общей юрисдикции',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SYD3',
    ),
    7 => 
    array (
      'VALUE' => 'Решения судов общей юрисдикции (c 2013 г.)',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SYD3NEW',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Суть решения',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'SYT',
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
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'На главной',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'MAIN_PAGE2',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'C',
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
      'VALUE' => 'Да',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '611fd0e82e835091a96d07c6f1da0323',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Принявший орган',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'ACCEPTOR',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '10',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => '18',
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
      'XML_ID' => 'd4b03da62ec83a831cca371522a75069',
    ),
    1 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ПРОСВЕЩЕНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '1',
      'XML_ID' => 'b5325e126166c00c124bd22083d484ec',
    ),
    2 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '1',
      'XML_ID' => '08077a23a936958186beef6ba9c3a83b',
    ),
    3 => 
    array (
      'VALUE' => 'ПРЕЗИДЕНТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '2',
      'XML_ID' => 'e391e83d16b63f1345a2be53098b7e16',
    ),
    4 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБРАЗОВАНИЯ И НАУКИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '5',
      'XML_ID' => 'e684a657b098a59fad5cda04246280ad',
    ),
    5 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБОРОНЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '6',
      'XML_ID' => 'a45b326bf439a85943219f0a158a1e77',
    ),
    6 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ВНУТРЕННИХ ДЕЛ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '7',
      'XML_ID' => '2c102515bb6852106cceaf3d3b639868',
    ),
    7 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ЗДРАВООХРАНЕНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '8',
      'XML_ID' => '76e37d10c3b7c6acfbc0747f4558db11',
    ),
    8 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО НАДЗОРУ В СФЕРЕ ОБРАЗОВАНИЯ И НАУКИ',
      'DEF' => 'N',
      'SORT' => '10',
      'XML_ID' => 'c6c6a793f6d1b91afd0666bffbfc384c',
    ),
    9 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ПРОСВЕЩЕНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО НАДЗОРУ В СФЕРЕ ОБРАЗОВАНИЯ И НАУКИ',
      'DEF' => 'N',
      'SORT' => '15',
      'XML_ID' => 'bc54f88b17683c87d68807dfcc457c56',
    ),
    10 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО ВЫСШЕМУ ОБРАЗОВАНИЮ',
      'DEF' => 'N',
      'SORT' => '25',
      'XML_ID' => '1d492b4ce7776074fbab02f7f3a10ab9',
    ),
    11 => 
    array (
      'VALUE' => 'ГЕНЕРАЛЬНОЙ ПРОКУРАТУРЫ РОССИЙСКОЙ ФЕДЕРАЦИИ ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f5766afd6c1bdb2bb5e5801279eac665',
    ),
    12 => 
    array (
      'VALUE' => 'ГЛАВНОГО ГОСУДАРТСВЕННОГО САНИТАРНОГО ВРАЧА РФ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1169bc9fe76af166156c9c8cff505a79',
    ),
    13 => 
    array (
      'VALUE' => 'ГЛАВНОГО УПРАВЛЕНИЯ СПЕЦИАЛЬНЫХ ПРОГРАММ ПРЕЗИДЕНТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6930e92c979399a22d1b7ee191f73d89',
    ),
    14 => 
    array (
      'VALUE' => 'ГОСУДАРСТВ-УЧАСТНИКОВ СОДРУЖЕСТВА НЕЗАВИСИМЫХ ГОСУДАРСТВ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5f32951fa2b5d0ff78075db5bdf5eb2f',
    ),
    15 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИИ ПО ВЫСШЕМУ ОБРАЗОВАНИЮ И МИНИСТЕРСТВА НАУКИ И ТЕХНОЛОГИЙ РЕСПУБЛИКИ СЛОВЕНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3176eeaa8173fe0689e0e249ec1cfa25',
    ),
    16 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО ВЫСШЕМУ ОБРАЗОВАНИЮ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ РЕСПУБЛИКИ КАЗАХСТАН ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9f7e24ee3132820767a934075706cf69',
    ),
    17 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО ВЫСШЕМУ ОБРАЗОВАНИЮ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ РЕСПУБЛИКИ КАЗАХСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3f3b6098a43a7b5e1f00f2bfafcac7f5',
    ),
    18 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО СТАТИСТИКЕ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '55d0127cf89b0fdd14bc878572e3f827',
    ),
    19 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО СТРОИТЕЛЬНОЙ, АРХИТЕКТУРНОЙ И ЖИЛИЩНОЙ ПОЛИТИКЕ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd3c351fadd63bb260704e1ec9cc4814b',
    ),
    20 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО УПРАВЛЕНИЮ ГОСУДАРСТВЕННЫМ ИМУЩЕСТВОМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3153da9ddd72ecca0ce11f712af5337f',
    ),
    21 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО ФИЗИЧЕСКОЙ КУЛЬТУРЕ И СПОРТУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c20f44056721907b87e017fea6aeee99',
    ),
    22 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО КОМИТЕТА СССР И ГОСУДАРСТВЕННОГО КОМИТЕТА КНР ПО ДЕЛАМ ОБРАЗОВАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '78614ed126a45e92285f52ddb485eba0',
    ),
    23 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО ТАМОЖЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '373624a08ba500c347e0f3ede83a8bb7',
    ),
    24 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОГО ТАМОЖЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ И ГОСУДАРСТВЕННОГО ТАМОЖЕННОГО КОМИТЕТА РЕСПУБЛИКИ УЗБЕКИСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c822554e55f45785dad1991211804e71',
    ),
    25 => 
    array (
      'VALUE' => 'ГОСУДАРСТВЕННОЙ ДУМОЙ ФС РФ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '2bb15a9685453107dcf3224f99f73bae',
    ),
    26 => 
    array (
      'VALUE' => 'ЕВРОПЕЙСКОГО ПАРЛАМЕНТА И ЕВРОПЕЙСКОГО СОВЕТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '81164baf77ace45c67a046466130cdc1',
    ),
    27 => 
    array (
      'VALUE' => 'ЕВРОПЕЙСКОГО СОВЕТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1f1110f9385fa8fce3dbfd3f3772eae9',
    ),
    28 => 
    array (
      'VALUE' => 'ЕВРОПЕЙСКОГО СОЮЗА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7c56da67596242211ab33a4433591102',
    ),
    29 => 
    array (
      'VALUE' => 'КОМИССИИ ЕВРОПЕЙСКОГО СОВЕТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'fa9f61a85a643267fa24cb576c1d5ce9',
    ),
    30 => 
    array (
      'VALUE' => 'КОМИТЕТА КОНВЕНЦИИ О ПРИЗНАНИИ КВАЛИФИКАЦИЙ, ОТНОСЯЩИХСЯ К ВЫСШЕМУ ОБРАЗОВАНИЮ В ЕВРОПЕЙСКОМ РЕГИОНЕ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b6985da0289ba51fb68b3cfe8cad52cb',
    ),
    31 => 
    array (
      'VALUE' => 'КОМИТЕТА МИНИСТРОВ СОВЕТА ЕВРОПЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4ec2e8cb76cdeb7bcd410492ad023421',
    ),
    32 => 
    array (
      'VALUE' => 'КОМИТЕТА СЕКРЕТАРЕЙ СОВЕТОВ БЕЗОПАСНОСТИ ОРГАНИЗАЦИИ ДОГОВОРА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'df4c92aaa26e7514ce9f20e47d30d266',
    ),
    33 => 
    array (
      'VALUE' => 'МЕЖГОСУДАРСТВЕННОГО СОВЕТА ЕВРАЗИЙСКОГО ЭКОНОМИЧЕСКОГО СООБЩЕСТВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5bd17ab0878e9322f84701f410e3c261',
    ),
    34 => 
    array (
      'VALUE' => 'МЕЖДУНАРОДНОЙ ОРГАНИЗАЦИИ ТРУДА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7d3caa4548c2879616cfcaebfe46c548',
    ),
    35 => 
    array (
      'VALUE' => 'МЕЖПАРЛАМЕНТСКОЙ АССАМБЛЕИ СНГ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '85fec1b9461676543efbe07655a2f492',
    ),
    36 => 
    array (
      'VALUE' => 'МИНЗДРАВСОЦРАЗВИТИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНЗДРАВООХРАНЕНИЯ РЕСПУБЛИКИ МОЛДОВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4a3630e66073df992dc5daf26db2e044',
    ),
    37 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ЗДРАВООХРАНЕНИЯ И МЕДИЦИНСКОЙ ПРОМЫШЛЕННОСТИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c4c7d6a0a4d6c850922c680d0d49611f',
    ),
    38 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ЗДРАВООХРАНЕНИЯ И СОЦИАЛЬНОГО РАЗВИТИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7360effce0aff585d6b85ad79279ed28',
    ),
    39 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ИНОСТРАННЫХ ДЕЛ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f1086d80a76f35dccc4500395465725b',
    ),
    40 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ И СВЯЗИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'dd06e9b5a9d215f35688913659f45187',
    ),
    41 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА КУЛЬТУРЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd75514790aa22d7fe0ca8a595be2d05a',
    ),
    42 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА НАРОДНОГО ОБРАЗОВАНИЯ РЕСПУБЛИКИ КЫРГЫЗСТАН, МИНОБРАЗОВАНИЯ РОССИИ И КОМИТЕТА ПО ВЫСШЕЙ ШКОЛЕ МИНИСТЕРСТВА НАУКИ, ВЫСШЕЙ ШКОЛЫ И ТЕХНИЧЕСКОЙ ПОЛИТИКИ РОССИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3f0a1c6b5d00a61c6e766973721e0716',
    ),
    43 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ПРОСВЕЩЕНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e09005b4aa33029ddaa541d275794ebb',
    ),
    44 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА НАУКИ И ТЕХНИЧЕСКОЙ ПОЛИТИКИ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ИССЛЕДОВАНИЙ И ТЕХНОЛОГИИ РУМЫНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '978cfcaf2bbe88c3a8a459c6849ba4c1',
    ),
    45 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА НАУКИ И ТЕХНИЧЕСКОЙ ПОЛИТИКИ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ И НАУКИ СЛОВАЦКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7d0f14ed08fc1d9beed61656edfc2f6f',
    ),
    46 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА НАУКИ И ТЕХНИЧЕСКОЙ ПОЛИТИКИ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ, НАУКИ И ТЕХНОЛОГИЙ РЕСПУБЛИКИ БОЛГАРИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '638252971a42dfdc71da02514c2809a2',
    ),
    47 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd5409010161fcf3cc2747bcd409c5a0f',
    ),
    48 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ АЗЕРБАЙДЖАНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'fcacbf681458686c290cea225141a2c1',
    ),
    49 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ ЮЖНО-АФРИКАНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '17e71bb2afa9e30762c0b718b2202ced',
    ),
    50 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБРАЗОВАНИЯ РСФСР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '03029d1c4b1c9ca2bf0342d2d501f5a6',
    ),
    51 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБЩЕГО И ПРОФЕССИОНАЛЬНОГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a09a18919f64f5dc273a4f84333cb022',
    ),
    52 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБЩЕГО И ПРОФЕССИОНАЛЬНОГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ВЫСШЕГО ОБРАЗОВАНИЯ, ПРОФЕССИОНАЛЬНОГО ОБУЧЕНИЯ, НАУКИ И ТЕХНОЛОГИЙ РЕСПУБЛИКИ НАМИБИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4c643043e654127bb1573ed12704cc3b',
    ),
    53 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ОБЩЕГО И ПРОФЕССИОНАЛЬНОГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ РЕСПУБЛИКИ МОЛДОВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '03eb4ecea83777380223f9526c5fb602',
    ),
    54 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ПРИРОДНЫХ РЕСУРСОВ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0b405a071444475b79fccd5ed97dbe46',
    ),
    55 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ПРОМЫШЛЕННОСТИ И ТОРГОВЛИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '332dd3bb786ee3d9bdd1e92aa235d6f7',
    ),
    56 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ПРОМЫШЛЕННОСТИ, НАУКИ И ТЕХНОЛОГИЙ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'cab4208363dbf0e05775e4a7758e5285',
    ),
    57 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ПРОСВЕЩЕНИЯ РСФСР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '495915e453d4c167077bb9c806c26bf6',
    ),
    58 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА РЕГИОНАЛЬНОГО РАЗВИТИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5fc309883721f3ef10607b1d4c191c22',
    ),
    59 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ ПО СВЯЗИ И ИНФОРМАТИЗАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c64468be4d66fa8c9315f7ff815075c2',
    ),
    60 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА СВЯЗИ И МАССОВЫХ КОММУНИКАЦИЙ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'ca402cd8a5fb2e91b0858a59d70e03a6',
    ),
    61 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА СЕЛЬСКОГО ХОЗЯЙСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5bbd56cb20e0016283b93237068bb1a1',
    ),
    62 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА СОЦИАЛЬНОЙ ЗАЩИТЫ НАСЕЛЕНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9c2a23c8424e9ca524ec3c5bab3f88cc',
    ),
    63 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА СПОРТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8ea6e337f16c0b06d77627c8d4e3cead',
    ),
    64 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ТРАНСПОРТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9f94b5d4ba78826f5e0808f9186d326b',
    ),
    65 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ТРУДА И СОЦИАЛЬНОЙ ЗАЩИТЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a1232955e7bf0b8b085a056d1fa81791',
    ),
    66 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ТРУДА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'ddbcd0a83e7af34a8a85465bec8c83b9',
    ),
    67 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ФИНАНСОВ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '2c4432e0ceba4cc1538455f60e7430e4',
    ),
    68 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ЭКОНОМИЧЕСКОГО РАЗВИТИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'be70b945feabfa2eb8ef3b2ce29447b8',
    ),
    69 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ЭНЕРГЕТИКИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c357cec58cb7e3376c8fc3ec685c7622',
    ),
    70 => 
    array (
      'VALUE' => 'МИНИСТЕРСТВА ЮСТИЦИИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '29756651b3def722b42daa92c0f5e631',
    ),
    71 => 
    array (
      'VALUE' => 'МИНИСТЕРТСВА ЭКОНОМИЧЕСКОГО РАЗВИТИЯ И ТОРГОВЛИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0bd3eb04b092353858574d20798a99dd',
    ),
    72 => 
    array (
      'VALUE' => 'МИНОБОРОНЫ РОССИИ И МИНОБРНАУКИ РОССИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd5fac839fd4438008ee32dfda45717e3',
    ),
    73 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И АМЕРИКАНСКОГО ФОНДА ГРАЖДАНСКИХ ИССЛЕДОВАНИЙ И РАЗВИТИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5f644d9bbea80e61d13ca80dc7f4d140',
    ),
    74 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И ГОСУДАРСТВЕННОГО СЕКРЕТАРИАТА ПО ВЫСШЕМУ ОБРАЗОВАНИЮ РЕСПУБЛИКИ АНГОЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '13a9b562d8d86e4613efd6c243935ee0',
    ),
    75 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И ДЕПАРТАМЕНТА ОБРАЗОВАНИЯ МИНИСТЕРСТВА ФЛАМАНДСКОГО СООБЩЕСТВА КОРОЛЕВСТВА БЕЛЬГИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '73fff4351de2aa3688efff80e26b1dbc',
    ),
    76 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ВЫСШЕГО ОБРАЗОВАНИЯ И НАУЧНЫХ ИССЛЕДОВАНИЙ АРАБСКОЙ РЕСПУБЛИКИ ЕГИПЕТ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b4db6425b6ea9b6a9f9c1808001cfcac',
    ),
    77 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ВЫСШЕГО ОБРАЗОВАНИЯ РЕСПУБЛИКИ КУБА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5111585900ec0e7d024ffdc711198217',
    ),
    78 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ ВЕНГЕРСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '63b87532294a4f951eeeedf5e0372a33',
    ),
    79 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ И ПОДГОТОВКИ КАДРОВ СОЦИАЛИСТИЧЕСКОЙ РЕСПУБЛИКИ ВЬЕТНАМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '91d77e4fe40c690004c662c23a7bf404',
    ),
    80 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ И СПОРТА РЕСПУБЛИКИ НИКАРАГУА, НАЦИОНАЛЬНОГО СОВЕТА УНИВЕРСИТЕТОВ РЕСПУБЛИКИ НИКАРАГУА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '83ef1359ab1c9ddeb5a6375366730713',
    ),
    81 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ОБРАЗОВАНИЯ КИТАЙСКОЙ НАРОДНОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '707bc49d561b1bd35beb741c459399f5',
    ),
    82 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ПО ВОПРОСАМ ЗНАНИЙ КОРОЛЕВСТВА НОРВЕГИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '2c254121beecff438196ea5e88e29d14',
    ),
    83 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА СВЯЗИ И МАССОВЫХ КОММУНИКАЦИЙ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3cc5958a0ef79448b45652a547c0f9aa',
    ),
    84 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНИСТЕРСТВА ТОРГОВЛИ СОЕДИНЕННЫХ ШТАТОВ АМЕРИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5f8e71683fe1d5b6b7cc1cf09a7d6d8e',
    ),
    85 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНОБРАЗОВАНИЯ КОРОЛЕВСТВА ТАИЛАНД',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '74219a8b3750e4e146279a48bd30dac3',
    ),
    86 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНОБРАЗОВАНИЯ РЕСПУБЛИКИ НАМИБИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '10340ed7c75d5dc3541877a7d04050af',
    ),
    87 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНОБРАЗОВАНИЯ СЛОВАЦКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4926b7cc16e3a8586cc9219d4ddeed28',
    ),
    88 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНОБРАЗОВАНИЯ СОЕДИНЕННЫХ ШТАТОВ АМЕРИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1b14d117a5d91fb10bc6cf5754acb849',
    ),
    89 => 
    array (
      'VALUE' => 'МИНОБРНАУКИ РОССИИ И МИНОБРАЗОВАНИЯ ТУРКМЕНИСТАНА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '029b14a988fd2171c5c8faea60a72ccc',
    ),
    90 => 
    array (
      'VALUE' => 'МОТ И ЮНЕСКО',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a920838def35003ccf31c2fdc75b5c34',
    ),
    91 => 
    array (
      'VALUE' => 'МЧС РОССИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '96b20a697c6a35d11ae547b09616f67f',
    ),
    92 => 
    array (
      'VALUE' => 'ОРГАНИЗАЦИИ ОБЪЕДИНЕННЫХ НАЦИЙ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0aa8eeaf7b9d64ce6a98c6a04ae02a23',
    ),
    93 => 
    array (
      'VALUE' => 'ОРГАНИЗАЦИИ ОБЪЕДИНЕННЫХ НАЦИЙ ПО ВОПРОСАМ ОБРАЗОВАНИЯ, НАУКИ И КУЛЬТУРЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1b906b487b0788074d28e4823b8f92e0',
    ),
    94 => 
    array (
      'VALUE' => 'ПЕНСИОННОГО ФОНДА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5d998f3a5640fd5e4222308d37a55811',
    ),
    95 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВ ГОСУДАРСТВ - УЧАСТНИКОВ СОДРУЖЕСТВА НЕЗАВИСИМЫХ ГОСУДАРСТВ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '37084aa024fbfe53312f7f62d258ab56',
    ),
    96 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА АЗЕРБАЙДЖАНСКОЙ РЕСПУБЛИКИ, РЕСПУБЛИКИ БЕЛАРУСЬ, РЕСПУБЛИКИ КАЗАХСТАН, РЕСПУБЛИКИ КЫРГЫЗСТАН, РЕСПУБЛИКИ МОЛДОВА, РОССИЙСКОЙ ФЕДЕРАЦИИ, ТУРКМЕНИСТАНА, РЕСПУБЛИКИ УЗБЕКИСТАН, УКРАИНЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '111ea914e1d64241d1d2647fd63ea126',
    ),
    97 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ БЕЛАРУСЬ, РЕСПУБЛИКИ КАЗАХСТАН, КЫРГЫЗСКОЙ РЕСПУБЛИКИ И ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '249dd0e39878578a93c9d190cc679bb0',
    ),
    98 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ БЕЛАРУСЬ, РЕСПУБЛИКИ КАЗАХСТАН, КЫРГЫЗСКОЙ РЕСПУБЛИКИ, РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ТАДЖИКИСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f5b26d7083c40dc0449991c9252abf0e',
    ),
    99 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И КАБИНЕТА МИНИСТРОВ УКРАИНЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '341af634e5771e389de720695e3c380a',
    ),
    100 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ОРГАНИЗАЦИИ ОБЪЕДИНЕННЫХ НАЦИЙ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c5b597c781b9f22aada2a8b775cdafdb',
    ),
    101 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА АВСТРИЙСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '672439921a3f9cd0c662613f3820154c',
    ),
    102 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА АЗЕРБАЙДЖАНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '55e6d5b89bf84c07881824564040ec11',
    ),
    103 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА АЛЖИРСКОЙ НАРОДНОЙ ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9ad290aeb2a5dc95d260103f9de2623d',
    ),
    104 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА АРАБСКОЙ РЕСПУБЛИКИ ЕГИПЕТ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7840b2e85103f8183a04d34b9979d87d',
    ),
    105 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА АРГЕНТИНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c090492327a6d90f214def510f48fa3d',
    ),
    106 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА БОЛИВАРИАНСКОЙ РЕСПУБЛИКИ ВЕНЕСУЭЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1e5866f0da2b72c3fc19273c7c8e6f16',
    ),
    107 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ВЕЛИКОГО ГЕРЦОГСТВА ЛЮКСЕМБУРГ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd2924fa9453976aaaafb36835b9116a6',
    ),
    108 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ВЕНГЕРСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '80d37a73d7614e2ca539b99c803775a6',
    ),
    109 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ГОСУДАРСТВА ИЗРАИЛЬ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1896c0c876d9b21d5215d4623a1e875d',
    ),
    110 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ГРЕЧЕСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '02785716a93ed0ca182601262df5d99d',
    ),
    111 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ИСЛАМСКОЙ РЕСПУБЛИКИ ИРАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9803b2bd27082ce586b45ffcafbca86a',
    ),
    112 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ИТАЛЬЯНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '98073f05d9a223b862b3f2aaf554a9d3',
    ),
    113 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА КИРГИЗСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4546848f36476359e8ee268a988fff8d',
    ),
    114 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА КИТАЙСКОЙ НАРОДНОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '495c78d09644bc8cd8a698558e1cba9e',
    ),
    115 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА КОРОЛЕВСТВА ДАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b3627b50254ad8c38dfbca591996675d',
    ),
    116 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА КОРОЛЕВСТВА ИСПАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e964f469d71cdc00ed8dc47a5f67f8e4',
    ),
    117 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА КОРОЛЕВСТВА КАМБОДЖА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '18dde0bc31ed8dd34ca47411dc9d1df6',
    ),
    118 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА КОРОЛЕВСТВА НОРВЕГИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3d737e65b3100d89d935d490f5886ec5',
    ),
    119 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ЛИВАНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6298711471cbd1bbe7ced3e7b33b51c4',
    ),
    120 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА МЕКСИКАНСКИХ СОЕДИНЕННЫХ ШТАТОВ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'af48026564b1eb2aa479c4cf74f5c6f2',
    ),
    121 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА МОНГОЛИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6f9e64ea474bcd3d06fb030bd02b8a6e',
    ),
    122 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ АБХАЗИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '93eff6418d3d20230e0de9d30cd2e2a9',
    ),
    123 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ АЛБАНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd7c992ca7c79f2cc69de4d403d3e55c2',
    ),
    124 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ АНГОЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '17eac24e230823da7976cb4836b03c03',
    ),
    125 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ АРМЕНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'ea1cc916e9acedca947171f7ef18dbf1',
    ),
    126 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ БЕЛАРУСЬ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd69e389128abd48e06ed00e7de20be62',
    ),
    127 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ БОТСВАНА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0b4e448b34e472ea9b29dafe096e57b1',
    ),
    128 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ГВАТЕМАЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'fbdbb0a456c7030b5093925584d3bf8a',
    ),
    129 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ГРУЗИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f98855321543077026e36c92d19cf519',
    ),
    130 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ИНДИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '91e08c50adfa72fc495f7f2fdfdd4b7e',
    ),
    131 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ КАЗАХСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '08acd1ceda345eaeea8766dc8c5ee33c',
    ),
    132 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ КИПР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'cd0f85bd76a5ffb95f4a19298e009552',
    ),
    133 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ КУБА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '335e6d298382c28985a830a82fdbb215',
    ),
    134 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ МАКЕДОНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'debc16d26dd2ca56721f2509283577bb',
    ),
    135 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ МОЛДОВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '56dafa53f0f29b69f167e04e7dfd9c52',
    ),
    136 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ НАМИБИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6eefed1da601969a1e8c68b708c7c5ea',
    ),
    137 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ПАРАГВАЙ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b9485aab9e0078fc585ed394f4fb2858',
    ),
    138 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ПЕРУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '89b47122606c944ebf7f81616c03c544',
    ),
    139 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ПОЛЬША',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8975fe7929b2c2c3c535574b78760c73',
    ),
    140 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ САН-МАРИНО',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '151d332796205a49dbbda02c6d4034e7',
    ),
    141 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ СЕРБИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a21b906f28f1df404e2d9becac99b0c4',
    ),
    142 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ СЛОВЕНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3a0ca17f3545089f9c0af2f09aa0ecf2',
    ),
    143 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ТАДЖИКИСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1b73b57cf26daa51982481ae9a16aa76',
    ),
    144 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ УЗБЕКИСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4138510ee6e7091a025d97acd1501e0b',
    ),
    145 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ХОРВАТИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '959999924e6136c2bd993e8040f81cc8',
    ),
    146 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ЧАД',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0d54396b96877b5adc62c2711035f229',
    ),
    147 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ЮЖНАЯ ОСЕТИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a7d80fa55ce92d45139067487d9cd500',
    ),
    148 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА РУМЫНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '46948d88f5960f0d343138f7be6de65f',
    ),
    149 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА СИРИЙСКОЙ АРАБСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4510c926fd5f6a541287f5bbe454ab7e',
    ),
    150 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА СЛОВАЦКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a2b20d22afdc03788f59ea555e137b3c',
    ),
    151 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА СОЕДИНЕННОГО КОРОЛЕВСТВА ВЕЛИКОБРИТАНИИ И СЕВЕРНОЙ ИРЛАНДИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9fabb88422557cfe9fc1ab3c891842a7',
    ),
    152 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА СОЕДИНЕННЫХ ШТАТОВ АМЕРИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '652d9e8152c77be6c38cc6a515c42854',
    ),
    153 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА СОЦИАЛИСТИЧЕСКОЙ РЕСПУБЛИКИ ВЬЕТНАМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8a6df7f6c897c46932123cc056826717',
    ),
    154 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА СУЛТАНАТА ОМАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '2bb744b80dda5663b6cc15f8e0277465',
    ),
    155 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ТУРЕЦКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '925565d56ca2d3358c6637f4b0215550',
    ),
    156 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ТУРКМЕНИСТАНА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5284b173b98a65d6060f7a3bb2c69b99',
    ),
    157 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА УКРАИНЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b565bb1e0729f9c2b14a1819e7a5fb2d',
    ),
    158 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ФЕДЕРАТИВНОЙ РЕСПУБЛИКИ БРАЗИЛИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '45cf711468e3a25155c053c9e65c4e60',
    ),
    159 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ФЕДЕРАТИВНОЙ РЕСПУБЛИКИ ГЕРМАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b5eb7cf6ebed97e31ea0a6fdc545cb2b',
    ),
    160 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ФИНЛЯНДСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6a7ceaeb4c2f4e8b474ceffe2034b077',
    ),
    161 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ФРАНЦУЗСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0dea134fd5823d595b9c49c0c4af6df1',
    ),
    162 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ЧЕШСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f72d517401dec3af9fc82776eec03ddd',
    ),
    163 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ЭСТОНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4e7b876644894fe653c932a5e10c5f23',
    ),
    164 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВА ЯПОНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0c8dc0522f29ffd9a0efa9b3a986e9f1',
    ),
    165 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И КОРОЛЕВСКОГО ПРАВИТЕЛЬСТВА НЕПАЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '95e314810aa81dcfddc65fc11c364ac3',
    ),
    166 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА АЛЖИРСКОЙ НАРОДНОЙ ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКОЙ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1984ff218b64becb15f2faf0bbbc3d8a',
    ),
    167 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ВЕНГЕРСКОЙ НАРОДНОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '39d7a5a5e655757d3b8c828e00911f9c',
    ),
    168 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ГВИНЕЙСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd9572e3c973218b5d8e7263ac7095258',
    ),
    169 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКИ АФГАНИСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '480f7d496def2f396b0a4dd1142072fa',
    ),
    170 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКОЙ САН-ТОМЕ И ПРИНСИПИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c07f65ddcc980f89706908dc4852f97d',
    ),
    171 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКОЙ ШРИ-ЛАНКА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b53e0ec70f18585bbb94e146da192283',
    ),
    172 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ИРАКСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4407537cc7e3a6cfeeb02c15cd7003aa',
    ),
    173 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ИСЛАМСКОЙ РЕСПУБЛИКИ МАВРИТАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'abbac97eb7b423e0bb8053f0465c584c',
    ),
    174 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ИСЛАМСКОЙ РЕСПУБЛИКИ ПАКИСТАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '56501ed719c0a8d0afca00cc32e2251b',
    ),
    175 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ИСПАНИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd58bcb0f7f43f07aa7aa2c0a1a4b18eb',
    ),
    176 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ЛАОССКОЙ НАРОДНО-ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd73a5ee6f3af279613534c9158e4e062',
    ),
    177 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА МАВРИКИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '785c1d1ee0406ab0419117f8ac605d3c',
    ),
    178 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА МАЛАГАСИЙСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f0c5d7b2bfecedca03b5f27e6ada8735',
    ),
    179 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА МОНГОЛЬСКОЙ НАРОДНОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '76602e7df3edc6075b98841559a604fa',
    ),
    180 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ ДЕМОКРАТИЧЕСКОЙ РЕСПУБЛИКИ ЙЕМЕН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '24d88e64d30c48360c631fa31de0c8ac',
    ),
    181 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ РЕСПУБЛИКИ АНГОЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '21f38de9ac169b878eb397ac93050b6c',
    ),
    182 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ РЕСПУБЛИКИ БАНГЛАДЕШ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5efeacbf6f14e6f3a77b7f6673dca50a',
    ),
    183 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ РЕСПУБЛИКИ БОЛГАРИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4adef469cac758cf330e61f91f59fd3f',
    ),
    184 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ РЕСПУБЛИКИ КАМПУЧИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6db7697db31959802bac135c0df2dc43',
    ),
    185 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ РЕСПУБЛИКИ КОНГО',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '350936cc68497ace1fc573bf8ddb3ac8',
    ),
    186 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА НАРОДНОЙ РЕСПУБЛИКИ МОЗАМБИК',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '664e115997b1ef8b35d766acd70a9525',
    ),
    187 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ОБЪЕДИНЕННОЙ АРАБСКОЙ РЕСПУБЛИКИ ЕГИПЕТ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '73ac8fbe9b041ea711fa930f64c50a01',
    ),
    188 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ПОЛЬСКОЙ НАРОДНОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5793b9fb463baaba30d6588835605ecf',
    ),
    189 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ БОЛИВИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8f1c7b2e988de26373eec124ccb25b92',
    ),
    190 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ БУРУНДИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '2e89ff7410a015e5d56b1d2c20eee8fc',
    ),
    191 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ВЕРХНЯЯ ВОЛЬТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '33c84d97fab5fc1ea00df7f099ef104e',
    ),
    192 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ГАНА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '64e76cceba1c4d4951a63b49d8712060',
    ),
    193 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ГВИНЕЯ-БИСАУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7d067de2c4ec578bd8ced3a91210dd85',
    ),
    194 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ЗАМБИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4f361baad1e30ad12d4f18bc61fc6437',
    ),
    195 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ИНДИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '56a9575043d380c0ae223f929525d766',
    ),
    196 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ КАМЕРУН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'cc1c06b18fdfd988fef2749642ec3dfa',
    ),
    197 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ КОЛУМБИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'bbbee459d40ad4fbe2ec61367df01118',
    ),
    198 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ КУБА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'c3a413563d2f74e3424cf745442b08ea',
    ),
    199 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ МАЛИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6515684a9ec6e1a17f9fec8e7ad4b0dd',
    ),
    200 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ НИГЕР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd225c781f665de8e4bfb9a25f13be54d',
    ),
    201 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ НИКАРАГУА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '301c73a50f8a081bfc5306d44c277107',
    ),
    202 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ОСТРОВА ЗЕЛЕНОГО МЫСА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'cc2a293b2474cb781975c9b6d41bcd7a',
    ),
    203 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ПЕРУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e05f22725916fc24469a5d37dd4f491c',
    ),
    204 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ СУДАН',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '31ed08b58a92e79f846817f63bcca351',
    ),
    205 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ СУРИНАМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b274947851aec56752141c888f3b7936',
    ),
    206 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ СЬЕРРА ЛЕОНЕ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '50954c4e7d3c567429e2194eb79dcf08',
    ),
    207 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РЕСПУБЛИКИ ЭКВАТОРИАЛЬНАЯ ГВИНЕЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'bfddb5439006feb9571237ad91109cec',
    ),
    208 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА РУАНДИЙСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9f889fbdb706f6f1a149e30c1d121f97',
    ),
    209 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА СИРИЙСКОЙ АРАБСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a0f66aafc74d5b295f491b8a632fc0db',
    ),
    210 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА СОМАЛИЙСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7dcfc9b7fe37a40046612fd63a27b26a',
    ),
    211 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА СОЦИАЛИСТИЧЕСКОЙ РЕСПУБЛИКИ ВЬЕТНАМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5298893e8bcdbe9127ddbea6dbdbae41',
    ),
    212 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ФЕДЕРАТИВНОЙ РЕСПУБЛИКИ ГЕРМАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '91a9a0368c9e33c7ecd422997defa390',
    ),
    213 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ФИНЛЯНДСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '210067b48a20fdc957d2426acb28f6ac',
    ),
    214 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ЦЕНТРАЛЬНОАФРИКАНСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8fd0d9830d57d847cd40d61ae8ec1bb8',
    ),
    215 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВА ЧЕХОСЛОВАЦКОЙ СОЦИАЛИСТИЧЕСКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a1766ba10e59653a78f574b890b4cee7',
    ),
    216 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ПРАВИТЕЛЬСТВОМ НАРОДНОЙ РЕСПУБЛИКИ БОЛГАРИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '64d74d9e0c9986e197a6427262d9a35a',
    ),
    217 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И СОЮЗНОГО ИСПОЛНИТЕЛЬНОГО ВЕЧЕ СКУПЩИНЫ СОЦИАЛИСТИЧЕСКОЙ ФЕДЕРАТИВНОЙ РЕСПУБЛИКИ ЮГОСЛАВИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '96895741b6c843bb7b109258b9f32fc5',
    ),
    218 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВА СССР И ФЕДЕРАЛЬНОГО ВОЕННОГО ПРАВИТЕЛЬСТВА ФЕДЕРАТИВНОЙ РЕСПУБЛИКИ НИГЕРИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '14ee9853cdb3c810c5527d752fd14b57',
    ),
    219 => 
    array (
      'VALUE' => 'ПРАВИТЕЛЬСТВОМ РОССИЙСКОЙ ФЕДЕРАЦИИ И ПРАВИТЕЛЬСТВОМ РЕСПУБЛИКИ АНГОЛА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd68d5fd0cfde2803fa73c0291702e947',
    ),
    220 => 
    array (
      'VALUE' => 'ПРЕЗИДЕНТ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'ac6b6823b3b130ae6b6da9b417476236',
    ),
    221 => 
    array (
      'VALUE' => 'ПРЕЗИДЕНТА РСФСР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9f2bbe46ed061c3f44a49fc33450a29a',
    ),
    222 => 
    array (
      'VALUE' => 'ПРЕЗИДИУМА ВЫСШЕЙ АТТЕСТАЦИОННОЙ КОМИССИИ ПРИ МИНИСТЕРСТВЕ ОБРАЗОВАНИЯ И НАУКИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '03b171044bf79c8515b426fc176c6de7',
    ),
    223 => 
    array (
      'VALUE' => 'РОСМОРРЕЧФЛОТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1ebd8625d2de8a8ff34ffbb16d3e17fa',
    ),
    224 => 
    array (
      'VALUE' => 'РОСПОТРЕБНАДЗОРА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3647874b434ea4cfaba00c442566fa7b',
    ),
    225 => 
    array (
      'VALUE' => 'РОССИЙСКОЙ ФЕДЕРАЦИИ И ТУРЕЦКОЙ РЕСПУБЛИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '95d8cb8acf9109d0e378d62ea50842a0',
    ),
    226 => 
    array (
      'VALUE' => 'СЕКРЕТАРИАТА ВЦСПС',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '938f856bc7586afaefcf109eb3be5297',
    ),
    227 => 
    array (
      'VALUE' => 'СЛЕДСТВЕННОГО КОМИТЕТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e52639c61e6b5308c136b6844e13967c',
    ),
    228 => 
    array (
      'VALUE' => 'СОВЕТА ГЛАВ ПРАВИТЕЛЬСТВ СОДРУЖЕСТВА НЕЗАВИСИМЫХ ГОСУДАРСТВ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'afcf0030fa77138271383e9b0c51a854',
    ),
    229 => 
    array (
      'VALUE' => 'СОВЕТА ЕВРОПЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'ecafabdbe47499744611b1840adf3d5a',
    ),
    230 => 
    array (
      'VALUE' => 'СОВЕТА КОЛЛЕКТИВНОЙ БЕЗОПАСНОСТИ ОРГАНИЗАЦИИ ДОГОВОРА О КОЛЛЕКТИВНОЙ БЕЗОПАСНОСТИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9edb80fc0994a996970b8d010cdeebf1',
    ),
    231 => 
    array (
      'VALUE' => 'СОВЕТА МИНИСТРОВ ИНОСТРАННЫХ ДЕЛ ГОСУДАРСТВ-ЧЛЕНОВ СОДРУЖЕСТВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '89218464791aa6dc40244435eb5e3d72',
    ),
    232 => 
    array (
      'VALUE' => 'СОВЕТА МИНИСТРОВ ОБОРОНЫ ОРГАНИЗАЦИИ ДОГОВОРА О КОЛЛЕКТИВНОЙ БЕЗОПАСНОСТИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6d9567693121b664275da2d56f904333',
    ),
    233 => 
    array (
      'VALUE' => 'СОВЕТА МИНИСТРОВ РСФСР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'daa2f1452c49aca0999c600a462cd271',
    ),
    234 => 
    array (
      'VALUE' => 'СОВЕТА МИНИСТРОВ СОЮЗНОГО ГОСУДАРСТВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd610e339e784f9a09b82a75ae91ee629',
    ),
    235 => 
    array (
      'VALUE' => 'СОВЕТА МИНИСТРОВ СССР',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6eff36f35a96ba737731fffd78457c8f',
    ),
    236 => 
    array (
      'VALUE' => 'СОЮЗА СОВЕТСКИХ СОЦИАЛИСТИЧЕСКИХ РЕСПУБЛИК И СОЦИАЛИСТИЧЕСКОЙ ЭФИОПИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e7eef1a8fd1d1335b07a2bc9f54b28cd',
    ),
    237 => 
    array (
      'VALUE' => 'СУДЕБНОГО ДЕПАРТАМЕНТА ПРИ ВЕРХОВНОМ СУДЕ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8ec254fb16cb128259de261fb7e6e2bd',
    ),
    238 => 
    array (
      'VALUE' => 'УПРАВЛЕНИЯ ДЕЛАМИ ПРЕЗИДЕНТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '39a7f79534a596ac16d0659c8b1d8a06',
    ),
    239 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ВОЗДУШНОГО ТРАНСПОРТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6f1bc7430d4d04fa56d77ebaaade4633',
    ),
    240 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ЖЕЛЕЗНОДОРОЖНОГО ТРАНСПОРТА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '58adf2e20204f4a4fd50d36db33c44ee',
    ),
    241 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ЛЕСНОГО ХОЗЯЙСТВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b08fa114b0bdee378f569d5553991548',
    ),
    242 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА НАУЧНЫХ ОРГАНИЗАЦИЙ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '2ec16f2f01abe20447f4c2700e33bfac',
    ),
    243 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО НАУКЕ И ИННОВАЦИЯМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'f6ac12542653a8dc0e67236e8ca026cd',
    ),
    244 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО ОБРАЗОВАНИЮ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '53ced08a0c220d3dc9a9fae8e4830172',
    ),
    245 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО ПЕЧАТИ И МАССОВЫМ КОММУНИКАЦИЯМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'ab6523b668c901019fec68689940a824',
    ),
    246 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО РЫБОЛОВСТВУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '61bbe3bd7d3b73ce0a46d9f8d1055b8c',
    ),
    247 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО СПОРТУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '12b00c29de9c51285587c5693267ac4e',
    ),
    248 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО СТРОИТЕЛЬСТВУ И ЖИЛИЩНО-КОММУНАЛЬНОМУ ХОЗЯЙСТВУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'ff9e4640856034d6b57138a01550ae43',
    ),
    249 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО ТЕХНИЧЕСКОМУ РЕГУЛИРОВАНИЮ И МЕТРОЛОГИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '695a8cf53bbdd8ba7aebc67384beb61f',
    ),
    250 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА ПО УПРАВЛЕНИЮ ГОСУДАРСТВЕННЫМ ИМУЩЕСТВОМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'dd046a9caffeb7582cae59b020c728ee',
    ),
    251 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА СВЯЗИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '20b76530bdf9ab52b12b948c5499cd0d',
    ),
    252 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО АГЕНТСТВА СПЕЦИАЛЬНОГО СТРОИТЕЛЬСТВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '470af104b1bbb69641d0efd549dcea02',
    ),
    253 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО КАЗНАЧЕЙСТВА МИНИСТЕРСТВА ФИНАНСОВ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'dd436fb8b189868a74e1f60c69ece427',
    ),
    254 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОГО ФОНДА ОБЯЗАТЕЛЬНОГО МЕДИЦИНСКОГО СТРАХОВАНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '529af255e3cb0d6989f00238fe666927',
    ),
    255 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ МИГРАЦИОННОЙ СЛУЖБЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '265c7ac7d140803018192c36fd8b9a08',
    ),
    256 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ МИГРАЦИОННОЙ СЛУЖБЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '75daef9ccd90f284fe59fefba6f644db',
    ),
    257 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ НАЛОГОВОЙ СЛУЖБЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'cbb19b6c5a9ea46ccc5c572dda285051',
    ),
    258 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ ПОГРАНИЧНОЙ СЛУЖБЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'b883b6d007c508d1ecbcdd660f6c8f67',
    ),
    259 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ БЕЗОПАСНОСТИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6094cd0ada303f83d2d892c3906b1f44',
    ),
    260 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ВОЙСК НАЦИОНАЛЬНОЙ ГВАРДИИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3127ec8ff926d468fe640e3c2578d872',
    ),
    261 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ГОСУДАРСТВЕННОЙ СТАТИСТИКИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '00d9f2f67b3ab7900430c215f4ac4ede',
    ),
    262 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ИСПОЛНЕНИЯ НАКАЗАНИЙ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'da9f7f29a9dc601d107241b5ee38d9bc',
    ),
    263 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ НАЛОГОВОЙ ПОЛИЦИИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e94cc7b77b666f66435d379d530be660',
    ),
    264 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ОХРАНЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '52a73019e1f23680ebcbb9503e156d1e',
    ),
    265 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО ВЕТЕРИНАРНОМУ И ФИТОСАНИТАРНОМУ НАДЗОРУ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e4b16e73e176867e5c7a67bc016a3f5d',
    ),
    266 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО ИНТЕЛЛЕКТУАЛЬНОЙ СОБСТВЕННОСТИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '43ec17e8aca372eabbc27b1272f353b1',
    ),
    267 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО НАДЗОРУ В СФЕРЕ ЗДРАВООХРАНЕНИЯ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'cf27edaa9e85fb9d79fddbf7223cb913',
    ),
    268 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО ТРУДУ И ЗАНЯТОСТИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'd058c87bce02a9651c77ca9610425c3d',
    ),
    269 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ ПО ФИНАНСОВЫМ РЫНКАМ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'e51c3ea01c0851f5d431a45bdf86cf9d',
    ),
    270 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ СЛУЖБЫ РОССИЙСКОЙ ФЕДЕРАЦИИ ПО КОНТРОЛЮ ЗА ОБОРОТОМ НАРКОТИКОВ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '88d278f3e6ba37b53d4592554281ef92',
    ),
    271 => 
    array (
      'VALUE' => 'ФЕДЕРАЛЬНОЙ ТАМОЖЕННОЙ СЛУЖБЫ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'cd0ab666b2c8c9f8a49cf4bb4995dfb4',
    ),
    272 => 
    array (
      'VALUE' => 'ЦЕНТРАЛЬНОГО БАНКА РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'bfde0638004b3f27742e00ba1045bbe1',
    ),
    273 => 
    array (
      'VALUE' => 'ЦЕНТРАЛЬНОЙ ИЗБИРАТЕЛЬНОЙ КОМИССИИ РОССИЙСКОЙ ФЕДЕРАЦИИ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7a54342da8d50f220f5256f282717b2d',
    ),
    274 => 
    array (
      'VALUE' => 'ШАНХАЙСКОЙ ОРГАНИЗАЦИИ СОТРУДНИЧЕСТВА',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '85e3163f1258151e5382c1444c0ee919',
    ),
    275 => 
    array (
      'VALUE' => 'ЭКОНОМИЧЕСКОГО СОВЕТА СОДРУЖЕСТВА НЕЗАВИСИМЫХ ГОСУДАРСТВ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'a854aa62f52dbe6e3fb861629290b2c1',
    ),
    276 => 
    array (
      'VALUE' => 'ЮНЕСКО И СОВЕТА ЕВРОПЫ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1e9f7d6d933eece44b844325911c77e1',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Дата принятия ',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'DATE_PRIN',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => '19',
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
  'NAME' => 'Рубрика',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'RUBRIC',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
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
  'FILTRABLE' => 'Y',
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
            $helper->UserOptions()->saveElementForm($iblockId, array (
  'Решение|edit1' => 
  array (
    'PROPERTY_SYD' => 'Суд',
    'NAME' => 'Название',
    'PROPERTY_DATE_PRIN' => 'Дата принятия',
    'PROPERTY_MAIN_PAGE2' => 'На главной',
    'PROPERTY_SYT' => 'Суть решения',
    'ACTIVE_FROM' => 'Начало активности',
    'PREVIEW_TEXT' => 'Описание для анонса',
    'DETAIL_TEXT' => 'Детальное описание',
    'PROPERTY_RUBRIC' => 'Рубрика',
  ),
));
        $helper->UserOptions()->saveSectionForm($iblockId, array (
  'Раздел|edit1' => 
  array (
    'ID' => 'ID',
    'DATE_CREATE' => 'Создана',
    'TIMESTAMP_X' => 'Изменена',
    'IBLOCK_SECTION_ID' => 'Родительский раздел',
    'NAME' => 'Название',
    'SORT' => 'Сортировка',
  ),
));
        $helper->UserOptions()->saveElementList($iblockId, array (
  'page_size' => '50',
  'order' => 'desc',
  'by' => 'date_active_from',
  'columns' => 
  array (
    0 => 'NAME',
    1 => 'DATE_ACTIVE_FROM',
    2 => 'PROPERTY_SYD',
    3 => 'ID',
  ),
));
    $helper->UserOptions()->saveElementGrid($iblockId, array (
  'views' => 
  array (
    'default' => 
    array (
      'columns' => 
      array (
        0 => '',
      ),
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
      'page_size' => 200,
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
