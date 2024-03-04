<?php
/**
 * @var CMain $APPLICATION
 */
define("CONTAINER_DOC", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

use Local\Base\Helper;

$APPLICATION->SetTitle("Поиск по сайту");

$APPLICATION->SetPageProperty("page_type", "search");

$assetManager = new Local\Util\Assets();

$arFilter = [];
$aItemIds = [];
if ($aFilterKeys = array_keys($_GET["search_filter"])) {
	$sCacheId = implode("", $aFilterKeys)
		. implode("", $_GET["content"])
		. implode("", $_GET["law_about_education"]);

	$aItemIds = Helper::getIblockElements(
		3600,
		$sCacheId,
		[],
		[
			"IBLOCK_ID" => Helper::getIblockId('content_faq'),
			"PROPERTY_RUBRIC" => $aFilterKeys
		],
		false,
		false,
		["ID"]
	);

	$aItemIds2 = Helper::getIblockElements(
		3600,
		$sCacheId . "2",
		[],
		[
			"IBLOCK_ID" => [Helper::getIblockId('prav_base'), Helper::getIblockId('sudebnaya-praktika')],
			"PROPERTY_RUBRIC" => $aFilterKeys,
		],
		false,
		false,
		["ID"]
	);

	$aItemIdsResult = array_merge($aItemIds, $aItemIds2);

	$arFilter["ITEM_ID"] = array_column($aItemIdsResult, "ID");
}

if ($_GET["content"]) {
	$filter["iBlockTypes"][] = "iblock_content";

	foreach ($_GET["content"] as $iblockContentKey => $iblockContentItem) {
		$filter["iBlockIds"]["arrFILTER_iblock_content"][] = $iblockContentItem;
	}
}

if ($_GET["law_about_education"]) {
	$filter["iBlockTypes"][] = "iblock_law_about_education";

	foreach ($_GET["law_about_education"] as $iblockContentKey => $iblockContentItem) {
		$filter["iBlockIds"]["arrFILTER_iblock_law_about_education"][] = $iblockContentItem;
	}
}

if ($_GET["practice"]) {
	$filter["iBlockTypes"][] = "iblock_practice";

	foreach ($_GET["practice"] as $iblockContentKey => $iblockContentItem) {
		$filter["iBlockIds"]["arrFILTER_iblock_practice"][] = $iblockContentItem;
	}
}

if (empty($filter)) {
	$filter = [
		"iBlockTypes" => [
			0 => "iblock_content",
			1 => "iblock_law_about_education",
			2 => "iblock_practice",
		],
		"iBlockIds" => [
			"arrFILTER_iblock_content" => [
				0 => Helper::getIblockId('content_faq'),
			],
			"arrFILTER_iblock_law_about_education" => [
				0 => Helper::getIblockId('prav_base'),
			],
			"arrFILTER_iblock_practice" => [
				0 => Helper::getIblockId('sudebnaya-praktika'),
				1 => Helper::getIblockId('regional_base'),
			]
		]
	];
}
?>
    <div class="search-result-custom-wrapper">
		<?php
		$APPLICATION->IncludeComponent(
			"kanishev:main.search.page",
			"",
			array(
				"CACHE_TIME" => "3600",
				"CACHE_TYPE" => "A",
				"PAGE_RESULT_COUNT" => "10",
				"arrFILTER" => $filter["iBlockTypes"],
				"arrWHERE" => $filter["iBlockTypes"],
				"ASSETS" => $assetManager->getEntry("icons/sprite.svg"),
				"arrFILTER_iblock_content" => $filter["iBlockIds"]["arrFILTER_iblock_content"],
				"arrFILTER_iblock_law_about_education" => $filter["iBlockIds"]["arrFILTER_iblock_law_about_education"],
				"arrFILTER_iblock_practice" => $filter["iBlockIds"]["arrFILTER_iblock_practice"],
                "IBLOCKS" => [
					"content_faq" => Helper::getIblockId("content_faq"),
					"prav_base" => Helper::getIblockId("prav_base"),
					"sudebnaya-praktika" => Helper::getIblockId("sudebnaya-praktika"),
					"regional_base" => Helper::getIblockId("regional_base"),
				],
				"PAGER_TEMPLATE" => "border"
			),
			false
		);
		?>
    </div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
