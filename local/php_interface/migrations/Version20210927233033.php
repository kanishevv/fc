<?php

namespace Sprint\Migration;


class Version20210927233033 extends Version
{
    protected $description = "Судебная практика";

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
            'NAME' => 'Судебная практика',
            'CODE' => 'content_arbitrage_practice',
            'LID' => ['s1'],
            'IBLOCK_TYPE_ID' => 'content',
            'LIST_PAGE_URL' => '#SITE_DIR#/arbitrage-practice/',
            'SECTION_PAGE_URL' => '#SITE_DIR#/arbitrage-practice/#SECTION_CODE#/',
            'DETAIL_PAGE_URL' => '#SITE_DIR#/arbitrage-practice/#SECTION_CODE#/#ELEMENT_CODE#/',
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

        $helper->Iblock()->saveProperty($iArbitragePractice, [
            'NAME' => 'Документ органа', // Справочник
            'CODE' => 'DOCUMENT_SOURCE',
            'PROPERTY_TYPE' => 'E',
            'USER_TYPE' => 'EList'
        ]);

        $helper->Iblock()->saveProperty($iArbitragePractice, [
            'NAME' => 'Дата принятия',
            'CODE' => 'APPROVAL_DATE',
            'PROPERTY_TYPE' => 'S',
            'USER_TYPE' => 'DateTime'
        ]);

        $helper->Iblock()->saveProperty($iArbitragePractice, [
            'NAME' => 'Дата публикации', // Дата
            'CODE' => 'PUBLICATION_DATE',
            'PROPERTY_TYPE' => 'S',
            'USER_TYPE' => 'DateTime'
        ]);

        $helper->Iblock()->saveProperty($iArbitragePractice, [
            'NAME' => 'Номер документа',
            'CODE' => 'DOCUMENT_NUM',
        ]);

        $helper->Iblock()->saveProperty($iArbitragePractice, [
            'NAME' => 'Вид документа',
            'CODE' => 'DOCUMENT_TYPE',
            'PROPERTY_TYPE' => 'E',
            'USER_TYPE' => 'EList'
        ]);

        $helper->Iblock()->saveProperty($iArbitragePractice, [
            'NAME' => 'Номер регистрации в Минюсте',
            'CODE' => 'REGISTRATION_NUM',
        ]);

        $helper->Iblock()->saveProperty($iArbitragePractice, [
            'NAME' => 'Источник публикации',
            'CODE' => 'PUBLICATION_SOURCE',
        ]);

        $helper->Iblock()->saveProperty($iArbitragePractice, [
            'NAME' => 'Приложения',
            'CODE' => 'ATTACHED',
            'PROPERTY_TYPE' => 'S',
            'USER_TYPE' => 'FileMan'
        ]);

        $helper->Iblock()->saveProperty($iArbitragePractice, [
            'NAME' => 'Ссылка на документ',
            'CODE' => 'LINK',
        ]);

        $this->outSuccess('Инфоблок создан');
    }

    public function down()
    {
        $helper = $this->getHelperManager();
        $ok = $helper->Iblock()->deleteIblockIfExists('content_arbitrage_practice');

        if ($ok) {
            $this->outSuccess('Инфоблок удален');
        } else {
            $this->outError('Ошибка удаления инфоблока');
        }
    }
}
