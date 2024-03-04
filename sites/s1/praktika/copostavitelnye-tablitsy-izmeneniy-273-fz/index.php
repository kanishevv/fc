<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Cопоставительные таблицы изменений 273-ФЗ");
?>
    <div>
		<?php
		$APPLICATION->IncludeComponent(
			"bitrix:news",
			"zo_st_fz",
			array(
				"DISPLAY_DATE" => "N",
				"DISPLAY_PICTURE" => "N",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"USE_SHARE" => "N",
				"SEF_MODE" => "N",
				"AJAX_MODE" => "N",
				"IBLOCK_TYPE" => "law_about_education",
				"IBLOCK_ID" => "4",
				"NEWS_COUNT" => "40",
				"USE_SEARCH" => "N",
				"USE_RSS" => "N",
				"USE_RATING" => "N",
				"USE_CATEGORIES" => "N",
				"USE_REVIEW" => "N",
				"USE_FILTER" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_ORDER1" => "DESC",
				"SORT_BY2" => "SORT",
				"SORT_ORDER2" => "DESC",
				"CHECK_DATES" => "Y",
				"PREVIEW_TRUNCATE_LEN" => "",
				"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
				"LIST_FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"LIST_PROPERTY_CODE" => array(
					0 => "",
					1 => "",
				),
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"DISPLAY_NAME" => "N",
				"META_KEYWORDS" => "-",
				"META_DESCRIPTION" => "-",
				"BROWSER_TITLE" => "-",
				"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
				"DETAIL_FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"DETAIL_PROPERTY_CODE" => array(
					0 => "",
					1 => "",
				),
				"DETAIL_DISPLAY_TOP_PAGER" => "N",
				"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
				"DETAIL_PAGER_TITLE" => "Страница",
				"DETAIL_PAGER_TEMPLATE" => "",
				"DETAIL_PAGER_SHOW_ALL" => "N",
				"SET_TITLE" => "N",
				"SET_STATUS_404" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "Y",
				"USE_PERMISSIONS" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"PAGER_TEMPLATE" => ".default",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Новости",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"COMPONENT_TEMPLATE" => "zo_st_fz",
				"AJAX_OPTION_ADDITIONAL" => "",
				"SET_LAST_MODIFIED" => "N",
				"ADD_ELEMENT_CHAIN" => "N",
				"DETAIL_SET_CANONICAL_URL" => "N",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"SHOW_404" => "N",
				"MESSAGE_404" => "",
				"STRICT_SECTION_CHECK" => "N",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"VARIABLE_ALIASES" => array(
					"SECTION_ID" => "SECTION_ID",
					"ELEMENT_ID" => "ELEMENT_ID",
				),
                "NEWS_LIST_TEMPLATE" => "analiticalist"
			),
			false
		);
		?>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>