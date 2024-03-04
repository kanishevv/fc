<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Context;
use Bitrix\Main\Web\Uri;
use Local\Base\Helper;
use Bitrix\Highloadblock\HighloadBlockTable;
use Local\Services\CourtPracticeService;
use Local\Services\PravBaseService;
use Local\Services\RegionalBaseService;

/**
 * @var $arResult array
 * @var $arParams array
 * @global $APPLICATION
 */

if ($arResult["ITEMS"]) {
	$aRubrics = Helper::getElementHighloadBlock('b_hlbd_rubric');
	$oRequest = Context::getCurrent()->getRequest();
	$oUri = new Uri($oRequest->getRequestUri());
}

$aIblockIdsNoShowPreviewText = [];
foreach ($arParams["IBLOCK_NOT_SHOW_PREVIEW_TEXT"] as $sIblockCode) {
	$aIblockIdsNoShowPreviewText[$sIblockCode] = Helper::getIblockId($sIblockCode);
}

$iPosCurItem = 1;
foreach ($arResult["ITEMS"] as &$aItem) {
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
		$sItemTitle = "";

		if ($sDocType = $aItem["PROPERTIES"]["DOCTYPE"]["VALUE"]) {
			$sItemTitle .= $sDocType . "<br>";
		}

		if ($sAcceptor = $aItem["PROPERTIES"]["ACCEPTOR"]["VALUE"]) {
			$sItemTitle .= $sAcceptor;
		}

		if ($sDatePrin = $aItem["PROPERTIES"]["DATE_PRIN"]["VALUE"]) {
			$sDatePrin = mb_strtolower(FormatDate("d F Y", MakeTimeStamp($sDatePrin)));
			$sItemTitle .= " <span class='search-result__item-date'>от {$sDatePrin} г.";

			if (!$aItem["NAME"] || $aItem["IBLOCK_ID"] != Helper::getIblockId("prav_base")) {
				$sItemTitle .= "</span>";
			}
		}

		if ($aItem["NAME"] && $aItem["IBLOCK_ID"] == Helper::getIblockId("prav_base")) {
			$sItemTitle .= " №{$aItem["NAME"]}";

			if ($aItem["PROPERTIES"]["DATE_PRIN"]["VALUE"]) {
				$sItemTitle .= "</span>";
			}
		} elseif ($sName = $aItem["NAME"]) {
			$sItemTitle .= " {$sName}";

			if ($aItem["PROPERTIES"]["DATE_PRIN"]["VALUE"]) {
				$sItemTitle .= "</span>";
			}
		}

		if ($sItemTitle) {
			$aItem["TITLE"] = trim($sItemTitle);
		}
	}

	// Дата снизу
	if (($arParams["DATE_CHANGE"] === "Y" || $aItem["IBLOCK_ID"] == Helper::getIblockId("content_faq"))
		&& $aItem["TIMESTAMP_X"]) {
		// Для вопросов и ответов
		/*$aItem["DATE_PUBLICATION"] = "Ответ дан по состоянию на " . FormatDate(
				"d F Y",
				MakeTimeStamp($aItem["PROPERTIES"]["ANSWER_GIVEN"]["VALUE"])
			) . " г.";*/
	} elseif ($aItem["PROPERTIES"]["DATE_PUB"]["VALUE"] && $aItem["IBLOCK_ID"] != Helper::getIblockId("prav_base")) {
		$sDatePublication = $aItem["PROPERTIES"]["DATE_PUB"]["VALUE"];
		$aItem["DATE_PUBLICATION"] = FormatDate("d F Y", MakeTimeStamp($sDatePublication)) . " г.";
	} elseif ($aItem["PROPERTIES"]["DATE_REVISION"]["VALUE"] && $aItem["IBLOCK_ID"] == Helper::getIblockId("prav_base")) {
		// Правовая база
		$sDate = FormatDate(
			"d F Y",
			MakeTimeStamp($aItem["PROPERTIES"]["DATE_REVISION"]["VALUE"])
		);
		$aItem["DATE_PUBLICATION"] = "Документ в редакции от <span class='article-short-preview__time-value'>$sDate</span> г.";
	}

	// Текст описания
	if (
		$aItem["PREVIEW_TEXT"]
		&& array_search($aItem["IBLOCK_ID"], $aIblockIdsNoShowPreviewText) === false
	) {
		if ($aItem["IBLOCK_ID"] != Helper::getIblockId("content_faq")) {
			$aItem["DESCRIPTION"] = strip_tags($aItem["PREVIEW_TEXT"]);
		}
	}

	// URL
	if ($sUrl = $aItem["DETAIL_PAGE_URL"]) {
		$aItem["URL"] = $sUrl . "&" . $oUri->getQuery();
	}

	if ($arParams["LINK_FROM_PROPERTIES"]) {
		$aItem["URL"] = $aItem["PROPERTIES"][$arParams["LINK_FROM_PROPERTIES"]]["VALUE"];
	}

	// Рубрики
	if (is_array($aItem["PROPERTIES"]["RUBRIC"]["VALUE"])) {
		foreach ($aItem["PROPERTIES"]["RUBRIC"]["VALUE"] as $key => $value) {
			if ($key > 1) {
				$aItem["PROPERTIES"]["RUBRIC"]["DISPLAY_ARRAY"][] = [
					"VALUE" => "", // toDo Добавить правильное value
					"NAME" => "Ещё " . (count($aItem["PROPERTIES"]["RUBRIC"]["VALUE"]) - 2),
				];
				break;
			}

			$aItem["PROPERTIES"]["RUBRIC"]["DISPLAY_ARRAY"][] = [
				"VALUE" => $value,
				"NAME" => $aRubrics[$value]["NAME"],
			];
		}
	} elseif ($rb = $aItem["PROPERTIES"]["RUBRIC"]["VALUE"]) {
		$aItem["PROPERTIES"]["RUBRIC"]["DISPLAY_ARRAY"][] = [
			"VALUE" => $rb,
			"NAME" => $aItem["DISPLAY_PROPERTIES"]["RUBRIC"]["DISPLAY_VALUE"]
		];
	}

	$attr = "";
	Helper::addElementEditButtons($this->getComponent(), $aItem, $attr);
	$aItem["EDIT_ELEMENT_ATTR"] = $attr;

	// Порядковый номер в поиске
	$aItem["POS"] = (($arResult["NAV_RESULT"]->NavPageNomer - 1) * $arParams["NEWS_COUNT"]) + $iPosCurItem;

	$iPosCurItem++;
	unset($aItem);
}
