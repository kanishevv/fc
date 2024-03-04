<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Комментарии");
?>Комментарии к закону 
<br />
 <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", ".default", array(
	"IBLOCK_TYPE" => "practice",
	"IBLOCK_ID" => "19",
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
	"SECTION_CODE" => "",
	"COUNT_ELEMENTS" => "Y",
	"TOP_DEPTH" => "2",
	"SECTION_FIELDS" => array(
		0 => "",
		1 => "",
	),
	"SECTION_USER_FIELDS" => array(
		0 => "",
		1 => "",
	),
	"SECTION_URL" => "/praktika/realizatsiya-273-fz/kommentarii/list.php?SECTION_ID=#SECTION_ID#",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"ADD_SECTIONS_CHAIN" => "Y",
	"VIEW_MODE" => "LIST",
	"SHOW_PARENT_NAME" => "Y"
	),
	false
);?> 
<br />
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>