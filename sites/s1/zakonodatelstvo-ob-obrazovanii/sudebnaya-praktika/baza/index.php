<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("БАЗА СУДЕБНОЙ ПРАКТИКИ");
?><?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "tree2", Array(
	"IBLOCK_TYPE" => "practice",	// Тип инфоблока
	"IBLOCK_ID" => "13",	// Инфоблок
	"SECTION_ID" => "",	// ID раздела
	"SECTION_CODE" => "",	// Код раздела
	"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
	"TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
	"SECTION_FIELDS" => array(	// Поля разделов
		0 => "",
		1 => "",
	),
	"SECTION_USER_FIELDS" => array(	// Свойства разделов
		0 => "",
		1 => "",
	),
	"SECTION_URL" => "/zakonodatelstvo-ob-obrazovanii/sudebnaya-praktika/baza/list.php?SECTION_ID=#SECTION_ID#",	// URL, ведущий на страницу с содержимым раздела
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>