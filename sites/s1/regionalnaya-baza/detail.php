<?php
/**
 * @var CMain $APPLICATION
 */
define("CONTAINER_DOC", true);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

use Local\Base\Helper;

$assetManager = new Local\Util\Assets();
?>

<?php
$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "news-detail",
    array(
        "IBLOCK_TYPE" => "law_about_education",
        "IBLOCK_ID" => Helper::getIblockId('regional_base'),
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"ELEMENT_CODE" => "",
		"CHECK_DATES" => "Y",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "TIMESTAMP_X",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "STATUS",
			2 => "",
		),
		"IBLOCK_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"META_KEYWORDS" => "",
		"META_DESCRIPTION" => "",
		"BROWSER_TITLE" => "",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"USE_PERMISSIONS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Страница",
		"PAGER_SHOW_ALL" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"USE_SHARE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"SET_CANONICAL_URL" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"ASSETS" => $assetManager->getEntry('icons/sprite.svg'),
		"DETAIL_LINK" => "/extended-search/search.php"
    ),
    false
);
?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
