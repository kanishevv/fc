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
        "IBLOCK_TYPE" => "practice",
        "IBLOCK_ID" => Helper::getIblockId('sudebnaya-praktika'),
        "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
        "ELEMENT_CODE" => "",
        "CHECK_DATES" => "Y",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
        ),
        "IBLOCK_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_GROUPS" => "Y",
        "META_KEYWORDS" => "-",
        "META_DESCRIPTION" => "-",
        "BROWSER_TITLE" => "-",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "ADD_ELEMENT_CHAIN" => "N",
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
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "USE_SHARE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "DETAIL_LINK" => "/extended-search/search.php",
        "NO_TITLE" => "Y",
        "NO_NUMBER_NAME" => "Y",
        "NO_PREVIEW_TEXT_IN_HEADER" => "Y",
        "ASSETS" => $assetManager->getEntry('icons/sprite.svg'),
        "PREVIEW_FIRST" => "Y",
        "SHORT_PREVIEW_TEXT" => "Y",
    ),
    false
);
?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
