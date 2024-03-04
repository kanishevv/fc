<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("календарь событий");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.calendar",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "calend",
		"IBLOCK_ID" => "36",
		"MONTH_VAR_NAME" => "month",
		"YEAR_VAR_NAME" => "year",
		"WEEK_START" => "1",
		"SHOW_YEAR" => "N",
		"SHOW_TIME" => "N",
		"TITLE_LEN" => "0",
		"SHOW_CURRENT_DATE" => "Y",
		"SHOW_MONTH_LIST" => "N",
		"NEWS_COUNT" => "0",
		"DETAIL_URL" => "detail-calend.php?ELEMENT_ID=#ELEMENT_ID#",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"DATE_FIELD" => "DATE_ACTIVE_FROM",
		"TYPE" => "NEWS",
		"SET_TITLE" => "Y"
	)
);?>
<br />

<br />
<?$APPLICATION->IncludeComponent(
	"dieraru:events.calendar",
	"",
	Array(
		"IBLOCK_TYPE" => "calend",
		"IBLOCK_ID" => "36",
		"DATE_START" => "DATE_ACTIVE_FROM",
		"DATE_END" => "DATE_ACTIVE_TO",
		"DETAIL_URL" => "detail-calend.php?ELEMENT_ID=#ELEMENT_ID#",
		"CHECK_PERMISSIONS" => "N",
		"DATE_FILTER" => "ALL",
		"TOOLTIP_PLACE" => "RIGHT",
		"WHEEL_SCROLL" => "Y",
		"USE_RANGE" => "Y",
		"COLOR" => "blueGradient",
		"SHOW_LEGEND" => "Y",
		"PERIODIC_VALUE" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	),
false
);?>
<br />
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>