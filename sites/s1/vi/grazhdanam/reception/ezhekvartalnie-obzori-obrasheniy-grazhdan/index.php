<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Ежеквартальные обзоры обращений граждан");
?>

<?php
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"tree_EOZ",
	array(
		"IBLOCK_TYPE" => "",
		"IBLOCK_ID" => \Local\Base\Helper::getIblockId("quarterly_reviews_feedback"),
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
if ($_REQUEST["SECTION_ID"] > 0) {
	?>
	<?php
	$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"quarter-list",
		array(
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"AJAX_MODE" => "N",
			"IBLOCK_TYPE" => "",
			"IBLOCK_ID" => \Local\Base\Helper::getIblockId("quarterly_reviews_feedback"),
			"NEWS_COUNT" => "50",
			"SORT_BY1" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_BY2" => "ID",
			"SORT_ORDER2" => "ASC",
			"FILTER_NAME" => "",
			"FIELD_CODE" => [],
			"PROPERTY_CODE" => ["FILE"],
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "detail.php?ELEMENT_ID=#ELEMENT_ID#",
			"PREVIEW_TRUNCATE_LEN" => "",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => $_REQUEST["SECTION_ID"],
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "N",
			"PAGER_TEMPLATE" => "modern",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "Новости",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "N",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"SET_BROWSER_TITLE" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_LAST_MODIFIED" => "N",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"SHOW_404" => "N",
			"MESSAGE_404" => ""
		),
		false
	);
	?>
<?php } ?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
