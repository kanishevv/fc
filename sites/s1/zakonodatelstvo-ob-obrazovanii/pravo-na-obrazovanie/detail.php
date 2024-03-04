<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Право на образование");
$APPLICATION->SetPageProperty("description", "Право на образование в фокусе международного сотрудничества");
$APPLICATION->SetTitle("Право на образование в фокусе международного сотрудничества");
?><div>
  <?$APPLICATION->IncludeComponent(
	  "bitrix:news.detail",
    "obraz_pravo_fokus1",
    array(
      "DISPLAY_DATE" => "N",
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "Y",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "USE_SHARE" => "N",
      "AJAX_MODE" => "N",
      "IBLOCK_TYPE" => "practice",
      "IBLOCK_ID" => "15",
      "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
      "ELEMENT_CODE" => "",
      "CHECK_DATES" => "Y",
      "FIELD_CODE" => array(
        0 => "",
        1 => "",
      ),
      "PROPERTY_CODE" => array(
        0 => "DATE_TEXT",
        1 => "",
      ),
      "IBLOCK_URL" => "index.php",
      "SET_TITLE" => "Y",
      "SET_BROWSER_TITLE" => "Y",
      "BROWSER_TITLE" => "-",
      "SET_META_KEYWORDS" => "Y",
      "META_KEYWORDS" => "-",
      "SET_META_DESCRIPTION" => "Y",
      "META_DESCRIPTION" => "-",
      "SET_STATUS_404" => "N",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "ADD_SECTIONS_CHAIN" => "N",
      "ADD_ELEMENT_CHAIN" => "Y",
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
      "AJAX_OPTION_ADDITIONAL" => "",
      "COMPONENT_TEMPLATE" => "obraz_pravo_fokus1",
      "DETAIL_URL" => "",
      "SET_CANONICAL_URL" => "N",
      "SET_LAST_MODIFIED" => "N",
      "STRICT_SECTION_CHECK" => "N",
      "COMPOSITE_FRAME_MODE" => "A",
      "COMPOSITE_FRAME_TYPE" => "AUTO",
      "PAGER_BASE_LINK_ENABLE" => "N",
      "SHOW_404" => "N",
      "MESSAGE_404" => ""
    ),
    false
  );?>
<p></p>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>