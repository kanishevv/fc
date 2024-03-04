<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "поиск");
$APPLICATION->SetPageProperty("keywords", "поиск");
$APPLICATION->SetPageProperty("description", "поиск2");
$APPLICATION->SetTitle("поиск2");
?>поиск по заголовкам<br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:search.title",
	".default",
	Array(
		"CATEGORY_0" => array(0=>"iblock_law_about_education",),
		"CATEGORY_0_TITLE" => "поиск по разделам",
		"CATEGORY_0_iblock_law_about_education" => array(0=>"17",),
		"CATEGORY_0_iblock_obraz_pravo" => array(0=>"all",),
		"CATEGORY_0_main" => "",
		"CATEGORY_1" => array(0=>"iblock_law_about_education",),
		"CATEGORY_1_TITLE" => "поиск по базе ",
		"CATEGORY_1_iblock_co" => array(0=>"20",),
		"CATEGORY_1_iblock_law_about_education" => array(0=>"17",),
		"CATEGORY_OTHERS_TITLE" => "Прочие файлы",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONTAINER_ID" => "title-search",
		"INPUT_ID" => "title-search-input",
		"NUM_CATEGORIES" => "2",
		"ORDER" => "rank",
		"PAGE" => "#SITE_DIR#full-search/poisk2.php?q=",
		"SHOW_INPUT" => "Y",
		"SHOW_OTHERS" => "Y",
		"TOP_COUNT" => "10",
		"USE_LANGUAGE_GUESS" => "Y"
	)
);?><br>
 <br>
 страница поиска<br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:search.page",
	"search2",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "search2",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_NAME" => "",
		"NO_WORD_LOGIC" => "N",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "10",
		"RESTART" => "N",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "N",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "Y",
		"USE_TITLE_RANK" => "Y",
		"arrFILTER" => array(0=>"iblock_law_about_education",),
		"arrFILTER_iblock_law_about_education" => array(0=>"17",),
		"arrFILTER_iblock_obraz_pravo" => array(0=>"all",),
		"arrWHERE" => array(0=>"iblock_about",1=>"iblock_altasib_feedback",)
	)
);?><br>
 <br>
<br>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>