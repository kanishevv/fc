<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}

ini_set('max_execution_time', '300');

/**
 * @var $arParams array
 * @var $arResult array
 */

use Bitrix\Main\Web\Uri;
use Local\Base\Helper;
use Bitrix\Main\Loader;
use Bitrix\Main\Context;
use Local\Services\CourtPracticeService;
use Local\Services\PravBaseService;
use Local\Services\RegionalBaseService;

Loader::IncludeModule("iblock");
Loader::includeModule("highloadblock");
$request = Context::getCurrent()->getRequest();

// Получаем рубрики
$arResult["RUBRICS"] = Helper::getElementHighloadBlock('b_hlbd_rubric');

$aIblockIdsNoShowPreviewText = [];
foreach ($arParams["IBLOCK_NOT_SHOW_PREVIEW_TEXT"] as $sIblockCode) {
	$aIblockIdsNoShowPreviewText[$sIblockCode] = Helper::getIblockId($sIblockCode);
}

$request = \Bitrix\Main\Context::getCurrent()->getRequest();
$aRubrics = $request->get("rubric");
foreach ($arResult["RUBRICS"] as &$aRubric) {
	if ($aRubrics && array_search($aRubric["XML_ID"], $aRubrics) !== false) {
		$aRubric["CHECKED"] = true;
	}

	unset($aRubric);
}

$iPosElem = ($arResult["NAV_RESULT"]->NavPageNomer - 1) * $arParams["PAGE_RESULT_COUNT"] + 1;
foreach ($arResult["ITEMS"] as &$aItem) {
	$aElementRubrics = [];

	$attr = "";
	Helper::addElementEditButtons($this->getComponent(), $aItem, $attr);
	$aItem["EDIT_ELEMENT_ATTR"] = $attr;

	// Подготавливаем заголовок
	if ($aItem["IBLOCK_ID"] == Helper::getIblockId("content_faq")) {
		// Для вопросов и ответов
		$aItem["TITLE"] = strip_tags($aItem["PREVIEW_TEXT"]) ?: $aItem["NAME"];
	} else if ((int)$aItem['IBLOCK_ID'] === Helper::getIblockId('prav_base')) {
        $aItem['TITLE'] = PravBaseService::getFullName((int)$aItem['ID'], true);
    } else if ((int)$aItem['IBLOCK_ID'] === Helper::getIblockId('sudebnaya-praktika')) {
        $aItem['TITLE'] = CourtPracticeService::getFullName((int)$aItem['ID']);
    } else if ((int)$aItem['IBLOCK_ID'] === Helper::getIblockId('regional_base')) {
        $aItem['TITLE'] = RegionalBaseService::getFullName((int)$aItem['ID'], true);
	} else {
		// Для остального
		$sItemTitle = "";

		if ($sDocType = $aItem["DOCTYPE"]["VALUE"]) {
			$sItemTitle .= $sDocType . "<br>";
		}

		if ($sAcceptor = $aItem["ACCEPTOR"]["VALUE"]) {
			$sItemTitle .= $sAcceptor;
		}

		if ($sDatePrin = $aItem["DATE_PRIN"]["VALUE"]) {
			$sDatePrin = mb_strtolower(FormatDate("d F Y", MakeTimeStamp($sDatePrin)));
			$sItemTitle .= " <span class='search-result__item-date'>от {$sDatePrin} г.";

			if (!$aItem["NAME"] || $aItem["IBLOCK_ID"] != $arParams["IBLOCKS"]["prav_base"]) {
				$sItemTitle .= "</span>";
			}
		}

		if ($aItem["NAME"] && $aItem["IBLOCK_ID"] == $arParams["IBLOCKS"]["prav_base"]) {
			$sItemTitle .= " №{$aItem["NAME"]}";

			if ($aItem["DATE_PRIN"]["VALUE"]) {
				$sItemTitle .= "</span>";
			}
		} elseif ($sName = $aItem["NAME"]) {
			$sItemTitle .= " {$sName}";

			if ($aItem["DATE_PRIN"]["VALUE"]) {
				$sItemTitle .= "</span>";
			}
		}

		if ($sItemTitle) {
			$aItem["TITLE"] = trim($sItemTitle);
		}
	}

	// Устанавливаем описание
	if (
		$aItem["PREVIEW_TEXT"]
		&& array_search($aItem["IBLOCK_ID"], $aIblockIdsNoShowPreviewText) === false
	) {
		if ($aItem["IBLOCK_ID"] != $arParams["IBLOCKS"]["content_faq"]) {
			$aItem["DESCRIPTION"] = strip_tags($aItem["PREVIEW_TEXT"]);
            if (
                $aItem['IBLOCK_ID'] == $arParams['IBLOCKS']['sudebnaya-praktika']
                && mb_strlen($aItem['DESCRIPTION']) > 350
            ) {
                $aItem['DESCRIPTION'] = mb_substr($aItem['DESCRIPTION'], 0, 350) . '...';
            }
		}
	}

	// Добавляем рубрики
	$aElementRubrics = [];

	if (is_array($aItem["RUBRIC"]["VALUE"])) {
		foreach ($aItem["RUBRIC"]["VALUE"] as $sValue) {
			$aElementRubrics[] = [
				"VALUE" => $sValue,
				"NAME" => $arResult["RUBRICS"][$sValue]["NAME"]
			];
		}
	} elseif ($sValue = $aItem["RUBRIC"]["VALUE"]) {
		$aElementRubrics[] = [
			"VALUE" => $sValue,
			"NAME" => $arResult["RUBRICS"][$sValue]["NAME"]
		];
	}

	$aItem["RUBRICS"] = $aElementRubrics;

	// Форматируем нижнюю дату
	$sDatePublication = "";
	if ($sValueDate = $aItem["DATE_PUB"]["VALUE"] && $aItem["IBLOCK_ID"] != $arParams["IBLOCKS"]["prav_base"]) {
		$sDatePublication = FormatDate(
			"d F Y",
			MakeTimeStamp($sValueDate)
		);
	} elseif (
		$sValueDate = $aItem["TIMESTAMP_X"]
			&& $aItem["IBLOCK_ID"] == $arParams["IBLOCKS"]["content_faq"]
	) {
		// Для вопросов и ответов
		/*$sDatePublication = "Ответ дан по состоянию на " . FormatDate(
				"d F Y",
				MakeTimeStamp($aItem["ANSWER_GIVEN"]["VALUE"])
			);*/
	} elseif ($aItem["IBLOCK_ID"] == $arParams["IBLOCKS"]["prav_base"] && $aItem["DATE_REVISION"]["VALUE"]) {
		// Правовая база
		$sDate = FormatDate(
			"d F Y",
			MakeTimeStamp($aItem["DATE_REVISION"]["VALUE"])
		);
		$sDatePublication = "Документ в редакции от $sDate";
	}

	if ($sDatePublication) {
		$aItem["DATE_PUBLICATION"] = $sDatePublication . " г.";
	}

	// URL
	if ($aItem["DETAIL_PAGE_URL"]) {
		$oUri = new Uri($request->getRequestUri());
		$aItem["DETAIL_PAGE_URL"] .= "&" . $oUri->getQuery();
	}

	// Добавляем позицию элемента
	$aItem["POS"] = $iPosElem;

	$iPosElem++;
	unset($aItem);
}

$queryListValues = $request->getQueryList();

$oUri = new Uri($arResult["URL"]);
$oUri->deleteParams(["iblockCode"]);

$arResult["URL_TAB"] = $oUri->getUri();

if ($request->getQuery("iblockCode")) {
	$arResult["NOT_MAIN_TAB"] = true;
}

$oUri = new Uri($request->getRequestUri());
$oUri->deleteParams(["rubric"]);
$arResult["FORM_ACTION"] = $oUri->getUri();
