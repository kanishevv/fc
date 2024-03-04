<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск по сайту");
?> <?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"clear", 
	array(
		"RESTART" => "Y",
		"NO_WORD_LOGIC" => "Y",
		"CHECK_DATES" => "Y",
		"USE_TITLE_RANK" => "Y",
		"DEFAULT_SORT" => "rank",
		"FILTER_NAME" => "",
		"arrFILTER" => array(
			0 => "main",
			1 => "iblock_about",
			2 => "iblock_law_about_education",
			3 => "iblock_obraz_pravo",
			4 => "iblock_practice",
			5 => "iblock_faq",
			6 => "iblock_co",
		),
		"SHOW_WHERE" => "N",
		"arrWHERE" => array(
			0 => "iblock_about",
			1 => "iblock_obraz_pravo",
			2 => "iblock_practice",
			3 => "iblock_faq",
			4 => "iblock_co",
		),
		"SHOW_WHEN" => "N",
		"PAGE_RESULT_COUNT" => "40",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "13600",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "Y",
		"SHOW_ITEM_TAGS" => "N",
		"TAGS_INHERIT" => "Y",
		"SHOW_ITEM_DATE_CHANGE" => "N",
		"SHOW_ORDER_BY" => "Y",
		"SHOW_TAGS_CLOUD" => "N",
		"SHOW_RATING" => "",
		"RATING_TYPE" => "",
		"PATH_TO_USER_PROFILE" => "",
		"AJAX_OPTION_ADDITIONAL" => "",
		"arrFILTER_iblock_about" => array(
			0 => "all",
		),
		"arrFILTER_iblock_obraz_pravo" => array(
			0 => "all",
		),
		"arrFILTER_iblock_practice" => array(
			0 => "all",
		),
		"arrFILTER_iblock_faq" => array(
			0 => "all",
		),
		"COMPONENT_TEMPLATE" => "clear",
		"arrFILTER_main" => array(
			0 => "book",
			1 => "",
		),
		"arrFILTER_iblock_co" => array(
			0 => "20",
		),
		"arrFILTER_iblock_law_about_education" => array(
			0 => "4",
			1 => "6",
			2 => "7",
			3 => "21",
			4 => "22",
		),
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>