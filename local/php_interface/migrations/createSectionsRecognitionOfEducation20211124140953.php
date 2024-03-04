<?php

namespace Sprint\Migration;


class createSectionsRecognitionOfEducation20211124140953 extends Version
{
    protected $description = "Разделы RecognitionOfEducation";

    protected $moduleVersion = "3.29.3";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'recognition_of_education',
            'law_about_education'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'Англия',
    'CODE' => '',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_DOCUMENT_LIST' => 
    array (
    ),
    'UF_TITLE' => 'Когда документ был получен?',
    'UF_NOTE' => '<a href="http://fcoz.ru/search/detail.php?ELEMENT_ID=7844&amp;q=" target="_blank">Распоряжение</a>&nbsp;Правительства Российской Федерации&nbsp;от 22 апреля 2019 г. № 799-р&nbsp;"Об утверждении перечня иностранных научных организаций и образовательных организаций, которые выдают документы об ученых степенях и ученых званиях, признаваемых в Российской Федерации"',
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'После 21 мая 2012 г.',
        'CODE' => '',
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_DOCUMENT_LIST' => 
        array (
          0 => 'Кампинасский Государственный Университет (Universidade Estadual de Campinas. State University of Campinas)',
          1 => 'Университет Сан-Паулу (Universidade de Sao Paulo. University of Sao Paulo) ',
        ),
        'UF_TITLE' => 'Какое название у документа?',
        'UF_NOTE' => NULL,
        'CHILDS' => 
        array (
          0 => 
          array (
            'NAME' => 'Одно из нижеперечисленных',
            'CODE' => '',
            'SORT' => '500',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_DOCUMENT_LIST' => 
            array (
            ),
            'UF_TITLE' => NULL,
            'UF_NOTE' => NULL,
          ),
          1 => 
          array (
            'NAME' => 'Не требуют прохождения процедуры признания',
            'CODE' => '',
            'SORT' => '500',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_DOCUMENT_LIST' => 
            array (
            ),
            'UF_TITLE' => NULL,
            'UF_NOTE' => NULL,
          ),
        ),
      ),
      1 => 
      array (
        'NAME' => 'До 21 мая 2012 г.',
        'CODE' => '',
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_DOCUMENT_LIST' => false,
        'UF_TITLE' => NULL,
        'UF_NOTE' => NULL,
      ),
    ),
  ),
  1 => 
  array (
    'NAME' => 'Япония',
    'CODE' => '',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_DOCUMENT_LIST' => 
    array (
    ),
    'UF_TITLE' => NULL,
    'UF_NOTE' => NULL,
  ),
)        );
    }

    public function down()
    {
        //your code ...
    }
}
