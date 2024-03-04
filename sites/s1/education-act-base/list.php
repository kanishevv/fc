<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("СПИСОК ДОКУМЕНТОВ");
?><div>

  <div class="titlesign"> <?$APPLICATION->IncludeComponent(
    "bitrix:catalog.section.list",
    "tree",
    Array(
      "IBLOCK_TYPE" => "law_about_education",
      "IBLOCK_ID" => "17",
      "SECTION_ID" => $_REQUEST["SECTION_ID"],
      "SECTION_CODE" => "",
      "SECTION_URL" => "/education-act-base/list.php?SECTION_ID=#SECTION_ID#",
      "COUNT_ELEMENTS" => "Y",
      "TOP_DEPTH" => "1",
      "SECTION_FIELDS" => array(),
      "SECTION_USER_FIELDS" => array(),
      "ADD_SECTIONS_CHAIN" => "Y",
      "CACHE_TYPE" => "A",
      "CACHE_TIME" => "36000000",
      "CACHE_GROUPS" => "Y"
    )
  );?> <?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "docs",
    array(
      "IBLOCK_TYPE" => "law_about_education",
      "IBLOCK_ID" => "17",
      "NEWS_COUNT" => "20",
      "SORT_BY1" => "PROPERTY_DATE_PRIN",
      "SORT_ORDER1" => "DESC",
      "SORT_BY2" => "NAME",
      "SORT_ORDER2" => "DESC",
      "FILTER_NAME" => "",
      "FIELD_CODE" => array(
        0 => "",
        1 => "",
      ),
      "PROPERTY_CODE" => array(
        0 => "",
        1 => "IST",
        2 => "",
      ),
      "CHECK_DATES" => "Y",
      "DETAIL_URL" => "",
      "AJAX_MODE" => "N",
      "AJAX_OPTION_JUMP" => "N",
      "AJAX_OPTION_STYLE" => "Y",
      "AJAX_OPTION_HISTORY" => "N",
      "CACHE_TYPE" => "A",
      "CACHE_TIME" => "36000000",
      "CACHE_FILTER" => "N",
      "CACHE_GROUPS" => "Y",
      "PREVIEW_TRUNCATE_LEN" => "",
      "ACTIVE_DATE_FORMAT" => "j F Y",
      "SET_STATUS_404" => "N",
      "SET_TITLE" => "N",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "ADD_SECTIONS_CHAIN" => "N",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "PARENT_SECTION" => $_REQUEST["SECTION_ID"],
      "PARENT_SECTION_CODE" => "",
      "INCLUDE_SUBSECTIONS" => "N",
      "PAGER_TEMPLATE" => "modern",
      "DISPLAY_TOP_PAGER" => "N",
      "DISPLAY_BOTTOM_PAGER" => "Y",
      "PAGER_TITLE" => "Новости",
      "PAGER_SHOW_ALWAYS" => "N",
      "PAGER_DESC_NUMBERING" => "N",
      "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
      "PAGER_SHOW_ALL" => "N",
      "DISPLAY_DATE" => "Y",
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "AJAX_OPTION_ADDITIONAL" => "",
      "COMPONENT_TEMPLATE" => "docs",
      "SET_BROWSER_TITLE" => "Y",
      "SET_META_KEYWORDS" => "Y",
      "SET_META_DESCRIPTION" => "Y",
      "SET_LAST_MODIFIED" => "N",
      "PAGER_BASE_LINK_ENABLE" => "N",
      "SHOW_404" => "N",
      "MESSAGE_404" => ""
    ),
    false
  );?> </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>