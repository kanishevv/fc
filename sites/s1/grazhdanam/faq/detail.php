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
    "faq",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_CODE" => "",
        "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
        "FIELD_CODE" => array("", ""),
        "IBLOCK_ID" => Helper::getIblockId('content_faq'),
        "IBLOCK_TYPE" => "content",
        "IBLOCK_URL" => "/grazhdanam/faq/",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "",
        "META_KEYWORDS" => "",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array("RUBRIC", ""),
        "SET_BROWSER_TITLE" => "Y",
        "SET_CANONICAL_URL" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_SHARE" => "N",
        "ASSETS" => $assetManager->getEntry('icons/sprite.svg'),
        "DETAIL_LINK" => "/extended-search/search.php",
    )
);
?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
