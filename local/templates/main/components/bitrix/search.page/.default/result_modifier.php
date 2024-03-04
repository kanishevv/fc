<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}

ini_set('max_execution_time', '300');

/**
 * @var $arParams array
 * @var $arResult array
 */

use Local\Base\Helper;
use Bitrix\Main\Loader;
use Bitrix\Main\Context;

Loader::IncludeModule("iblock");
Loader::includeModule("highloadblock");

// Получаем рубрики
$arResult["RUBRICS"] = Helper::getElementHighloadBlock('b_hlbd_rubric');

$request = \Bitrix\Main\Context::getCurrent()->getRequest();
$aRubrics = array_keys($request->get("search_filter"));
foreach ($arResult["RUBRICS"] as &$aRubric) {
	if ($aRubrics && array_search($aRubric["XML_ID"], $aRubrics) !== false) {
		$aRubric["CHECKED"] = true;
	}

	unset($aRubric);
}

// Получаем фильтр
$aIblocks = [];

if ($arParams["arrFILTER_iblock_content"]) {
	$aIblocks = array_merge($aIblocks, $arParams["arrFILTER_iblock_content"]);
}

if ($arParams["arrFILTER_iblock_law_about_education"]) {
	$aIblocks = array_merge($aIblocks, $arParams["arrFILTER_iblock_law_about_education"]);
}

if ($arParams["arrFILTER_iblock_practice"]) {
	$aIblocks = array_merge($aIblocks, $arParams["arrFILTER_iblock_practice"]);
}

$aFilter = ["IBLOCK_ID" => $aIblocks];
if ($aFilterKeys = array_keys($_GET["search_filter"])) {
	$aFilter["PROPERTY_RUBRIC"] = $aFilterKeys;
}

// Получаем кол-во элементов по инфоблоку
$aCounts = [];
$aCurFilter = $aFilter;
if ($q = $arResult["REQUEST"]["QUERY"]) {
	$aCurFilter[] = [
		"SEARCHABLE_CONTENT" => "%$q%"
	];
}

foreach ($arParams["IBLOCKS"] as $iIblockId) {
	$aCurFilter["IBLOCK_ID"] = $iIblockId;

	$sCacheId = "elements_count_" . $iIblockId . implode("", $aFilterKeys);

	if ($arResult["REQUEST"]["QUERY"]) {
		$arParams["CACHE_TIME"] = 0;
		$sCacheId = "";
	}

	$aCounts = array_merge(
		$aCounts,
		Helper::getIblockElements(
			$arParams["CACHE_TIME"] ?: 0,
			$sCacheId,
			[],
			$aCurFilter,
			["IBLOCK_ID"]
		)
	);

	foreach ($aCounts as $aCount) {
		$arResult["COUNTS"][$aCount["IBLOCK_ID"]] = $aCount["CNT"];
	}
}

$arResult["COUNTS"]["ALL"] = array_sum($arResult["COUNTS"]);

$arIds = array_column($arResult["SEARCH"], 'ITEM_ID');
$arIblocks = array_unique(array_column($arResult["SEARCH"], 'PARAM2'));

// Получаем все элементы со свойствами
$aElements = [];
if ($arResult["SEARCH"]) {
	$aElements = Helper::getIblockElements(
		$arParams["CACHE_TIME"] ?: 0,
		"elements_" . implode("", $arIds),
		[],
		[
			"ID" => $arIds,
			"IBLOCK_ID" => $arIblocks
		]
	);
} elseif ($arResult["REQUEST"]["QUERY"] === "") {
	// Если поисковый запрос пустой получаем все элементы
	$aElements = Helper::getIblockElements(
		$arParams["CACHE_TIME"] ?: 0,
		"elements_iblock_" . implode("", $aIblocks) . implode("", $aFilterKeys),
		[],
		$aFilter,
		false,
		["nPageSize" => $arParams["PAGE_RESULT_COUNT"] ?: 10]
	);

	if ($aElements["NAV_RESULT"]) {
		$arResult["NAV_RESULT"] = $aElements["NAV_RESULT"];

		$nPageWindow = 5;
		if (
			$arResult["NAV_RESULT"]->NavPageNomer > floor($nPageWindow / 2) + 1
			&& $arResult["NAV_RESULT"]->NavPageCount > $nPageWindow
		) {
			$nStartPage = $arResult["NAV_RESULT"]->NavPageNomer - floor($nPageWindow / 2);
		} else {
			$nStartPage = 1;
		}

		if (
			$arResult["NAV_RESULT"]->NavPageNomer <= $arResult["NAV_RESULT"]->NavPageCount - floor($nPageWindow / 2)
			&& $nStartPage + $nPageWindow - 1 <= $arResult["NAV_RESULT"]->NavPageCount
		) {
			$nEndPage = $nStartPage + $nPageWindow - 1;
		} else {
			$nEndPage = $arResult["NAV_RESULT"]->NavPageCount;
			if ($nEndPage - $nPageWindow + 1 >= 1) {
				$nStartPage = $nEndPage - $nPageWindow + 1;
			}
		}

		$arResult["NAV_RESULT"]->nStartPage = $nStartPage;
		$arResult["NAV_RESULT"]->nEndPage = $nEndPage;

		unset($aElements["NAV_RESULT"]);
	}

	foreach ($aElements as $aElement) {
		$arResult["SEARCH"][] = [
			"ITEM_ID" => $aElement["ID"],
			"PARAM2" => $aElement["IBLOCK_ID"],
			"TITLE" => $aElement["NAME"],
			"BODY" => strip_tags($aElement["PREVIEW_TEXT"]),
			"URL" => $aElement["DETAIL_PAGE_URL"]
		];
	}
}

$iPosElem = ($arResult["NAV_RESULT"]->NavPageNomer - 1) * $arParams["PAGE_RESULT_COUNT"] + 1;
foreach ($arResult["SEARCH"] as &$arItem) {
	$aElementRubrics = [];
	$aProperties = $aElements[$arItem["ITEM_ID"]];

	$attr = "";
	Helper::addElementEditButtons($this->getComponent(), $aProperties, $attr);

	// Подготавливаем заголовок
	$sItemTitle = "";

	if ($sDocType = $aProperties["DOCTYPE"]["VALUE"]) {
		$sItemTitle .= $sDocType . "<br>";
	}

	if ($sAcceptor = $aProperties["ACCEPTOR"]["VALUE"]) {
		$sItemTitle .= $sAcceptor;
	}

	if ($sDatePrin = $aProperties["DATE_PRIN"]["VALUE"]) {
		$sDatePrin = mb_strtolower(FormatDate("d F Y", MakeTimeStamp($sDatePrin)));
		$sItemTitle .= " от {$sDatePrin} г.";
	}

	if ($aProperties["NAME"] && $aProperties["IBLOCK_ID"] == $arParams["IBLOCKS"]["prav_base"]) {
		$sItemTitle .= " №{$aProperties["NAME"]}";
	} elseif ($sName = $aProperties["NAME"]) {
		$sItemTitle .= " {$sName}";
	}

	if ($sItemTitle) {
		$arItem["TITLE"] = trim($sItemTitle);
	}

	// Добавляем рубрики
	$aElementRubrics = [];

	if (is_array($aProperties["RUBRIC"]["VALUE"])) {
		foreach ($aProperties["RUBRIC"]["VALUE"] as $sValue) {
			$aElementRubrics[] = [
				"VALUE" => $sValue,
				"NAME" => $arResult["RUBRICS"][$sValue]["NAME"]
			];
		}
	} elseif ($sValue = $aProperties["RUBRIC"]["VALUE"]) {
		$aElementRubrics[] = [
			"VALUE" => $sValue,
			"NAME" => $arResult["RUBRICS"][$sValue]["NAME"]
		];
	}

	// Форматируем дату публикации
	$sDatePublication = "";
	if ($sValueDate = $aProperties["DATE_PUB"]["VALUE"]) {
		$sDatePublication = FormatDate(
			"d F Y",
			MakeTimeStamp($sValueDate)
		);
	} elseif (
		$sValueDate = $aProperties["TIMESTAMP_X"]
			&& $aProperties["IBLOCK_ID"] == $arParams["IBLOCKS"]["content_faq"]
	) {
		// Для вопросов и ответов
		$sDatePublication = "Ответ дан по состоянию на " . FormatDate(
				"d F Y",
				MakeTimeStamp($sValueDate)
			);
	}

	$arResult["ITEMS"][] = [
		"TITLE" => $arItem["TITLE"],
		"DESCRIPTION" => $arItem["BODY"],
		"URL" => $arItem["URL"],
		"DATE_PUBLICATION" => $sDatePublication,
		"RUBRICS" => $aElementRubrics,
		"EDIT_ELEMENT_ATTR" => $attr,
		"POS" => $iPosElem
	];

	$iPosElem++;
	unset($arItem);
}

/* Получаем список рубрик из HL. */

// Чистим запрос
$request = Context::getCurrent()->getRequest();
$queryListValues = $request->getQueryList();

$arResult["URL_TAB"] = $arResult["URL"];
foreach ($queryListValues as $queryListValueKey => $queryListValue) {
	if (
		$queryListValueKey == "content" ||
		$queryListValueKey == "law_about_education" ||
		$queryListValueKey == "practice"
	) {
		foreach ($queryListValue as $iblock) {
			$arResult["URL"] .= "&{$queryListValueKey}[]={$iblock}";
			$arResult["NOT_MAIN_TAB"] = true;
		}
		continue;
	}

	if ($queryListValueKey == "search_filter") {
		foreach ($queryListValue as $searchFilterKey => $searchFilterValue) {
			$arResult["URL_TAB"] .= "&" . $queryListValueKey . "[$searchFilterKey]=";
			$arResult["URL"] .= "&" . $queryListValueKey . "[$searchFilterKey]=";
		}
	}
}
