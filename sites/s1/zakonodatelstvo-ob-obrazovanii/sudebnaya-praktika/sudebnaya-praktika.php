<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("База");
?>
<div> СУДЕБНАЯ ПРАКТИКА ПО СПОРАМ В СФЕРЕ ОБРАЗОВАНИЯ 
  <br />
 <?$APPLICATION->IncludeComponent(
	"bitrix:support.faq",
	".default",
	Array(
		"IBLOCK_TYPE" => "practice",
		"IBLOCK_ID" => "13",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_GROUPS" => "Y",
		"AJAX_MODE" => "N",
		"SEF_MODE" => "Y",
		"SHOW_RATING" => "N",
		"PATH_TO_USER" => "",
		"SECTION" => "14",
		"EXPAND_LIST" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"SEF_FOLDER" => "/zakonodatelstvo-ob-obrazovanii/sudebnaya-praktika/",
		"SEF_URL_TEMPLATES" => Array(
			"section" => "#SECTION_ID#/",
			"detail" => "#SECTION_ID#/#ELEMENT_ID#.html"
		),
		"VARIABLE_ALIASES" => Array(
			"section" => Array(),
			"detail" => Array(),
		)
	)
);?> </div>
 
<div> 
  <br />
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>