<?
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Образовательное право, обзоры");
?>
<div class="news-container">
  <?$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "analitica",
    array(
      "DISPLAY_DATE" => "N",
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "USE_SHARE" => "N",
      "AJAX_MODE" => "N",
      "IBLOCK_TYPE" => "obraz_pravo",
      "IBLOCK_ID" => "8",
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
      "SET_TITLE" => "Y",
      "SET_BROWSER_TITLE" => "Y",
      "BROWSER_TITLE" => "NAME",
      "SET_META_KEYWORDS" => "Y",
      "META_KEYWORDS" => "-",
      "SET_META_DESCRIPTION" => "Y",
      "META_DESCRIPTION" => "-",
      "SET_STATUS_404" => "N",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "ADD_SECTIONS_CHAIN" => "N",
      "ADD_ELEMENT_CHAIN" => "N",
      "ACTIVE_DATE_FORMAT" => "d.m.Y",
      "USE_PERMISSIONS" => "N",
      "CACHE_TYPE" => "A",
      "CACHE_TIME" => "36000000",
      "CACHE_NOTES" => "",
      "CACHE_GROUPS" => "Y",
      "PAGER_TEMPLATE" => ".default",
      "DISPLAY_TOP_PAGER" => "N",
      "DISPLAY_BOTTOM_PAGER" => "Y",
      "PAGER_TITLE" => "Страница",
      "PAGER_SHOW_ALL" => "Y",
      "AJAX_OPTION_JUMP" => "N",
      "AJAX_OPTION_STYLE" => "Y",
      "AJAX_OPTION_HISTORY" => "N",
      "AJAX_OPTION_ADDITIONAL" => "",
      "COMPONENT_TEMPLATE" => "analitica",
      "DETAIL_URL" => "",
      "SET_CANONICAL_URL" => "N",
      "SET_LAST_MODIFIED" => "N",
      "STRICT_SECTION_CHECK" => "N",
      "PAGER_BASE_LINK_ENABLE" => "N",
      "SHOW_404" => "N",
      "MESSAGE_404" => ""
    ),
    false
  );?>
  <p></p>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>