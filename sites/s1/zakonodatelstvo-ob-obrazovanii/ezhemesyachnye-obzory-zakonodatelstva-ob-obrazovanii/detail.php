<?php
/**
 * @var CMain $APPLICATION
 */
define("NO_TITLE", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
    <div class="monthly-reviews-list">
		<?php
		$APPLICATION->IncludeComponent(
			"bitrix:news.detail",
			"suddetail",
			array(
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "N",
				"DISPLAY_PICTURE" => "N",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"USE_SHARE" => "N",
				"AJAX_MODE" => "N",
				"IBLOCK_TYPE" => "law_about_education",
				"IBLOCK_ID" => "22",
				"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
				"ELEMENT_CODE" => "",
				"CHECK_DATES" => "Y",
				"FIELD_CODE" => array(),
				"PROPERTY_CODE" => array(),
				"IBLOCK_URL" => "",
				"META_KEYWORDS" => "-",
				"META_DESCRIPTION" => "-",
				"BROWSER_TITLE" => "-",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "Y",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "Y",
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
				"AJAX_OPTION_HISTORY" => "N"
			)
		);
		?>
    </div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
