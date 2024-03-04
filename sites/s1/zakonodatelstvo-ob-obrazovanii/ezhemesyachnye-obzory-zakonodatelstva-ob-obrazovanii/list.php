<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?>
    <div class="monthly-reviews-list">
		<?php
		$APPLICATION->IncludeComponent(
			"bitrix:catalog.section.list",
			"tree_EOZ",
			array(
				"IBLOCK_TYPE" => "law_about_education",
				"IBLOCK_ID" => "22",
				"SECTION_ID" => $_REQUEST["SECTION_ID"],
				"SECTION_CODE" => "",
				"SECTION_URL" => "",
				"COUNT_ELEMENTS" => "N",
				"TOP_DEPTH" => "1",
				"SECTION_FIELDS" => array(
					0 => "SORT",
					1 => "",
				),
				"SECTION_USER_FIELDS" => array(
					0 => "",
					1 => "",
				),
				"ADD_SECTIONS_CHAIN" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
				"CACHE_NOTES" => "",
				"CACHE_GROUPS" => "Y"
			),
			false
		);
		?>
		<?php
		$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"templateEOZ",
			array(
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "N",
				"DISPLAY_PREVIEW_TEXT" => "N",
				"AJAX_MODE" => "N",
				"IBLOCK_TYPE" => "law_about_education",
				"IBLOCK_ID" => "22",
				"NEWS_COUNT" => "50",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_ORDER1" => "ASC",
				"SORT_BY2" => "ID",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"PROPERTY_CODE" => array(
					0 => "ANONS_MON",
					1 => "",
				),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "detail.php?ELEMENT_ID=#ELEMENT_ID#",
				"PREVIEW_TRUNCATE_LEN" => "",
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "Y",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "Y",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => $_REQUEST["SECTION_ID"],
				"PARENT_SECTION_CODE" => "",
				"INCLUDE_SUBSECTIONS" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"PAGER_TEMPLATE" => "modern",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"PAGER_TITLE" => "Новости",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"COMPONENT_TEMPLATE" => "templateEOZ",
				"SET_BROWSER_TITLE" => "Y",
				"SET_META_KEYWORDS" => "Y",
				"SET_META_DESCRIPTION" => "Y",
				"SET_LAST_MODIFIED" => "N",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"SHOW_404" => "N",
				"MESSAGE_404" => ""
			),
			false
		);
		?>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>