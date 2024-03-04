<?php
/**
 * @var CMain $APPLICATION
 */
define("CONTAINER_DOC", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

use Bitrix\Main\Context;
use \Local\Base\Helper;

$request = Context::getCurrent()->getRequest();

$sName = "";
$iIblockId = $request->get("IBLOCK_ID") ?: Helper::getIblockId('prav_base');
$iCacheTime = 36000000;
$sFilterName = "filter";
$sSortBy1 = "PROPERTY_DATE_PRIN";
$assetManager = new Local\Util\Assets();

$APPLICATION->SetPageProperty("title", "Расширенный поиск");
$APPLICATION->SetPageProperty("page_content_modify_class", "page__content--search-result");
$APPLICATION->AddChainItem("Расширенный поиск");

if ($request->get("LAST_FILTER")) {
	$sName = $request->get("LAST_FILTER") . "_NAME";
	$sNum = $request->get("LAST_FILTER") . "_DOC";
	$sOnlyName = $request->get("LAST_FILTER") . "_ONLY_NAME";
    $sDatePrin = $request->get("LAST_FILTER") . "_DATE_PRIN";
	$sFilterName = $request->get("LAST_FILTER");

	if ($request[$sName] || $request[$sNum]) {
		$iCacheTime = 0;
	}

	switch ($sFilterName) {
		case "aFilterSud":
			$iIblockId = Helper::getIblockId('sudebnaya-praktika');
            $sSortBy1 = "PROPERTY_DATE_PRIN";
			break;
		case "aFilterFaq":
			$iIblockId = Helper::getIblockId('content_faq');
            $sSortBy1 = "DATE_CREATE";
			break;
        case "aFilterRegion":
            $iIblockId = Helper::getIblockId('regional_base');
            break;
	}
}

$sLink = $APPLICATION->GetCurPageParam(
	"",
	[
		"RUBRIC",
		"IBLOCK_ID",
		"SECTION_ID",
		"PAGEN_1"
	]
);
?>
    <div class="search-result__row">
        <a href="<?= str_replace("search.php", "", $sLink) ?>" class="search-result__back-link">
            <svg class="search-result__back-icon icon">
                <use xlink:href="/local/build/icons/sprite.svg#arrow_back"></use>
            </svg>
            <span>Расширенный поиск</span>
        </a>
    </div>

<?php
global ${$sFilterName};
${$sFilterName} = [];

if ($rb = $request["RUBRIC"]) {
	${$sFilterName}["PROPERTY_RUBRIC"] = $rb;
}

if ($request->get($sFilterName . "_searchByName") && $sNameValue = $request[$sName]) {
    if ($iIblockId == Helper::getIblockId('prav_base')) {
        ${$sFilterName}['PREVIEW_TEXT'] = str_replace(' ', '%', '%' . $sNameValue. '%');
    } else {
        ${$sFilterName}['NAME'] = str_replace(' ', '%', '%' . $sNameValue. '%');
    }
} else if ($sNameValue = $request[$sName]) {
	$aNameFilter = [
		"LOGIC" => "OR",
		["PROPERTY_ACCEPTOR_VALUE" => "%$sNameValue%"],
		["PROPERTY_DOCTYPE_VALUE" => "%$sNameValue%"],
		["PROPERTY_DATE_PRIN_VALUE" => "%$sNameValue%"],
		["PREVIEW_TEXT" => "%$sNameValue%"],
        ["NAME" => "%$sNameValue%"]
	];

	if ($request[$sOnlyName] !== "Y") {
		$aNameFilter[] = ["DETAIL_TEXT" => "%$sNameValue%"];
	}

	${$sFilterName}[] = $aNameFilter;
}

if ($sDate = $request[$sDatePrin]) {
	${$sFilterName}["><PROPERTY_DATE_PRIN"] = [
		ConvertDateTime($sDate, "YYYY-MM-DD HH:MI:SS"),
		ConvertDateTime($sDate, "YYYY-MM-DD 23:59:59")
    ];
    if ($datePrinId = Helper::getPropertyId((int)$iIblockId, 'DATE_PRIN')) {
        unset($_GET["{$sFilterName}_{$datePrinId}_MIN"]);
        unset($_GET["{$sFilterName}_{$datePrinId}_MAX"]);
    }
}

if ($sNumValue = $request[$sNum]) {
	${$sFilterName}["NAME"] = "%$sNumValue%";
}
?>

    <div style="display: none;">
		<?php
		$APPLICATION->IncludeComponent(
			"bitrix:catalog.smart.filter",
			"extended-search",
			array(
				"COMPONENT_TEMPLATE" => "extended-search",
				"IBLOCK_TYPE" => "",
				"IBLOCK_ID" => $iIblockId,
				"SECTION_ID" => $request->get("SECTION_ID") ?: "",
				"SECTION_CODE" => "",
				"PREFILTER_NAME" => "preFilterFaq",
				"FILTER_NAME" => "{$sFilterName}",
				"TEMPLATE_THEME" => "",
				"FILTER_VIEW_MODE" => "",
				"DISPLAY_ELEMENT_COUNT" => "Y",
				"SEF_MODE" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => 36000000,
				"CACHE_GROUPS" => "Y",
				"SAVE_IN_SESSION" => "N",
				"PAGER_PARAMS_NAME" => "arrPager",
				"XML_EXPORT" => "N",
				"SECTION_TITLE" => "-",
				"SECTION_DESCRIPTION" => "-",
			),
			false
		);
		?>
    </div>

<?php
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"search-results",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "",
		"IBLOCK_ID" => $iIblockId,
		"NEWS_COUNT" => "12",
		"SORT_BY1" => $sSortBy1,
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "{$sFilterName}",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "RUBRIC",
		),
		"ASSETS" => $assetManager->getEntry("icons/sprite.svg"),
		"PAGEN_URL" => "",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => $iCacheTime,
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => $request->get("SECTION_ID") ?: "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
        "DATE_CHANGE" => $sFilterName === "aFilterFaq" ? "Y" : "N",
        "PAGER_TEMPLATE" => "border"
	),
	false
);
?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
