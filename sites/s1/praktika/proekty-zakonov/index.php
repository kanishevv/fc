<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Проекты законов");
$GLOBALS['arrPR_ZAKDA']['!PROPERTY_PR_ZAKONA'] = false;
?>
    <div>
        <div class="titlesign">
			<?php $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"search-results",
				array(
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "N",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"AJAX_MODE" => "N",
					"IBLOCK_TYPE" => "law_about_education",
					"IBLOCK_ID" => "17",
					"NEWS_COUNT" => "50",
					"SORT_BY1" => "PROPERTY_DATE_PRIN", //"ACTIVE_FROM",
					"SORT_ORDER1" => "DESC",
					"SORT_BY2" => "SORT",
					"SORT_ORDER2" => "ASC",
					"FILTER_NAME" => "arrPR_ZAKDA",
					"FIELD_CODE" => array(),
					"PROPERTY_CODE" => array("DOCTYPE", "DATE_PUB", "DATE_PRIN", "DATE_REG", "WEEK_DOC", "IST", "NOMER_MIN", "ADD", "ACCEPTOR", "PR_ZAKONA", "STATUS"),
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"SET_TITLE" => "N",
					"SET_BROWSER_TITLE" => "Y",
					"SET_META_KEYWORDS" => "Y",
					"SET_META_DESCRIPTION" => "Y",
					"SET_STATUS_404" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"ADD_SECTIONS_CHAIN" => "N",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"PARENT_SECTION" => $_REQUEST["SECTION_ID"],
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "N",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"PAGER_TEMPLATE" => "",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Проекты законов",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"PAGER_TEMPLATE" => "border"
				)
			);
			?>
        </div>
    </div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");