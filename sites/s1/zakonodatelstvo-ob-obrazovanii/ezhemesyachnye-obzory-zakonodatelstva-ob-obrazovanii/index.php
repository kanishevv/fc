<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ежемесячные обзоры законодательства об образовании");
?>
<?php
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"tree2", 
	array(
		"IBLOCK_TYPE" => "law_about_education",
		"IBLOCK_ID" => "22",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_URL" => "/zakonodatelstvo-ob-obrazovanii/ezhemesyachnye-obzory-zakonodatelstva-ob-obrazovanii/list.php?SECTION_ID=#SECTION_ID#",
		"COUNT_ELEMENTS" => "N",
		"TOP_DEPTH" => "1",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_TYPE" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y"
	),
	false
);?> 
<p>
  <br />
</p>
 
<p></p>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>