<?php

namespace Sprint\Migration;


class Version20210930002052 extends Version
{
    protected $description = "Вопросы и ответы";

    protected $moduleVersion = "3.29.3";

    public function up()
    {
        $helper = $this->getHelperManager();

        $helper->Iblock()->saveIblockType([
            'ID' => 'content',
            'SECTIONS' => 'Y',
            'LANG' => [
                'en' => [
                    'NAME' => 'Контент',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements',
                ],
                'ru' => [
                    'NAME' => 'Контент',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы',
                ],
            ],
        ]);

        $iArbitragePractice = $helper->Iblock()->saveIblock([
            'NAME' => 'Вопросы и ответы',
            'CODE' => 'content_faq',
            'LID' => ['s1'],
            'IBLOCK_TYPE_ID' => 'content',
            'LIST_PAGE_URL' => '#SITE_DIR#/faq/',
            'SECTION_PAGE_URL' => '#SITE_DIR#/faq/#SECTION_CODE#/',
            'DETAIL_PAGE_URL' => '#SITE_DIR#/faq/#SECTION_CODE#/#ELEMENT_CODE#/',
        ]);

        $helper->Iblock()->saveIblockFields($iArbitragePractice, [
            'CODE' => [
                'DEFAULT_VALUE' => [
                    'TRANSLITERATION' => 'Y',
                    'UNIQUE' => 'Y',
                ],
            ],
        ]);

        $helper->Iblock()->saveProperty($iArbitragePractice, [
            'NAME' => 'Рубрика',
            'CODE' => 'RUBRIC',
            'PROPERTY_TYPE' => 'E',
            'USER_TYPE' => 'EList'
        ]);
    }

    public function down()
    {
        $helper = $this->getHelperManager();
        $ok = $helper->Iblock()->deleteIblockIfExists('content_faq');

        if ($ok) {
            $this->outSuccess('Инфоблок удален');
        } else {
            $this->outError('Ошибка удаления инфоблока');
        }
    }
}
