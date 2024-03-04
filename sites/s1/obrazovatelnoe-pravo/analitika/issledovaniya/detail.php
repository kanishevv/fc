<?
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("detail");
?><div>
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
      "META_KEYWORDS" => "-",
      "META_DESCRIPTION" => "-",
      "BROWSER_TITLE" => "-",
      "SET_STATUS_404" => "N",
      "SET_TITLE" => "Y",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "ADD_SECTIONS_CHAIN" => "N",
      "ADD_ELEMENT_CHAIN" => "N",
      "ACTIVE_DATE_FORMAT" => "d.m.Y",
      "USE_PERMISSIONS" => "N",
      "CACHE_TYPE" => "A",
      "CACHE_TIME" => "36000000",
      "CACHE_GROUPS" => "Y",
      "PAGER_TEMPLATE" => ".default",
      "DISPLAY_TOP_PAGER" => "N",
      "DISPLAY_BOTTOM_PAGER" => "Y",
      "PAGER_TITLE" => "Страница",
      "PAGER_SHOW_ALL" => "Y",
      "AJAX_OPTION_JUMP" => "N",
      "AJAX_OPTION_STYLE" => "Y",
      "AJAX_OPTION_HISTORY" => "N",
      "SET_BROWSER_TITLE" => "Y",
      "SET_META_KEYWORDS" => "Y",
      "SET_META_DESCRIPTION" => "Y",
      "AJAX_OPTION_ADDITIONAL" => ""
    ),
    false
  );?>
<p></p>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>