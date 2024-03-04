<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arTemplateParameters['DETAIL_LINK'] = array(
	'NAME' => 'Ссылка на страницу с результатами',
	'TYPE' => 'TEXT',
	'DEFAULT' => ''
);

$arTemplateParameters['NO_TITLE'] = array(
    'NAME' => 'Убрать заголовок',
    'TYPE' => 'CHECKBOX',
    'DEFAULT' => 'N'
);

$arTemplateParameters['NO_NUMBER_NAME'] = array(
    'NAME' => 'Убрать "№" перед названием',
    'TYPE' => 'CHECKBOX',
    'DEFAULT' => 'N'
);

$arTemplateParameters['NO_PREVIEW_TEXT_IN_HEADER'] = array(
    'NAME' => 'Убрать текст превью из заголовка',
    'TYPE' => 'CHECKBOX',
    'DEFAULT' => 'N'
);

$arTemplateParameters['PREVIEW_FIRST'] = array(
	'NAME' => 'Выводить текст анонса в самом начале',
	'TYPE' => 'CHECKBOX',
	'DEFAULT' => 'N'
);
