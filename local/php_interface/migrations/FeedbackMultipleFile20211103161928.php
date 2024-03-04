<?php

namespace Sprint\Migration;


class FeedbackMultipleFile20211103161928 extends Version
{
    protected $description = "Множественное свойство Загрузить файл для инфоблока Обращения граждан ";

    protected $moduleVersion = "3.29.3";

    /**
     * @return bool|void
     * @throws Exceptions\HelperException
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('feedback', 'altasib_feedback');
        $helper->Iblock()->saveProperty($iblockId, array(
            'NAME' => 'Загрузить файл',
            'ACTIVE' => 'Y',
            'SORT' => '120',
            'CODE' => 'FILE',
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
