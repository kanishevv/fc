<?php

namespace Sprint\Migration;


class Version20211006180532 extends Version
{
    protected $description = "Добавляет инфоблок \"Документы\"";

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

        $iDocuments = $helper->Iblock()->saveIblock([
            'NAME' => 'Документы',
            'CODE' => 'content_documents',
            'LID' => ['s1'],
            'IBLOCK_TYPE_ID' => 'content',
            'LIST_PAGE_URL' => '#SITE_DIR#/documents/',
            'SECTION_PAGE_URL' => '#SITE_DIR#/documents/#SECTION_CODE#/',
            'DETAIL_PAGE_URL' => '#SITE_DIR#/documents/#SECTION_CODE#/#ELEMENT_CODE#/',
        ]);

        $helper->Iblock()->saveIblockFields($iDocuments, [
            'CODE' => [
                'DEFAULT_VALUE' => [
                    'TRANSLITERATION' => 'Y',
                    'UNIQUE' => 'Y',
                ],
            ],
        ]);

        $helper->Iblock()->saveProperty($iDocuments, [
            'NAME' => 'Вид документа',
            'CODE' => 'DOCUMENT_TYPE',
        ]);

        $helper->Iblock()->saveProperty($iDocuments, [
            'NAME' => 'Орган выпустивший',
            'CODE' => 'CREATOR',
        ]);

        $helper->Iblock()->saveProperty($iDocuments, [
            'NAME' => 'Дата и номер документа',
            'CODE' => 'DATE_NUM_DOC',
        ]);

        $helper->Iblock()->saveProperty($iDocuments, [
            'NAME' => 'Дата публикации',
            'CODE' => 'PUBLICATION_DATE',
            'PROPERTY_TYPE' => 'S',
            'USER_TYPE' => 'DateTime'
        ]);

        $helper->Iblock()->saveProperty($iDocuments, [
            'NAME' => 'Ссылка на документ',
            'CODE' => 'LINK',
        ]);

        $this->outSuccess('Инфоблок создан');
    }

    public function down()
    {
        $helper = $this->getHelperManager();
        $ok = $helper->Iblock()->deleteIblockIfExists('content_documents');

        if ($ok) {
            $this->outSuccess('Инфоблок удален');
        } else {
            $this->outError('Ошибка удаления инфоблока');
        }
    }
}
