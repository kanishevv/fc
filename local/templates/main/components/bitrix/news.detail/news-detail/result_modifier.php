<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Data\Cache;
use Bitrix\Main\Loader;

/**
 * @var $arResult array
 * @var $arParams array
 */

$cp = $this->__component;

if (is_object($cp)) {
	$sTitle = "<p align='center'>";

	if ($sValue = $arResult["PROPERTIES"]["DOCTYPE"]["~VALUE"]) {
		$sTitle .= $sValue . '<br>';
	}

	if ($sValue = $arResult["PROPERTIES"]["ACCEPTOR"]["~VALUE"]) {
		$sTitle .= $sValue . '<br>';
	}

	if ($arResult["PROPERTIES"]["DATE_PRIN"]["VALUE"] || $arResult["~NAME"]) {
		if ($arResult["PROPERTIES"]["DATE_PRIN"]["VALUE"]) {
			$sDate = FormatDate(
				"d F Y",
				MakeTimeStamp($arResult["PROPERTIES"]["DATE_PRIN"]["VALUE"])
			);

			$sTitle .= "от $sDate г.";
		}

		if ($arResult["~NAME"]) {
			$sTitle .= ($arParams["NO_NUMBER_NAME"] !== "Y" ? ' № ' : ' ') . $arResult["~NAME"];
		}

		$sTitle .= '<br>';
	}

	if ($arResult["~PREVIEW_TEXT"] && $arParams["NO_PREVIEW_TEXT_IN_HEADER"] !== "Y") {
		$sTitle .= $arResult["~PREVIEW_TEXT"] . '<br>';
	}

	$sTitle .= '</p>';

	if ($sTitle) {
		$cp->arResult["TITLE"] = trim($sTitle);
	}
}

// Текст превью
if ($arResult["PREVIEW_TEXT"]) {
	$cp->arResult["TEXT"] = trim($arResult["PREVIEW_TEXT"]);
}

// Подготавливаем файлы
$documents = [];

if (is_array($arResult["PROPERTIES"]["WORD"]["VALUE"])) {
	$documents = array_merge(
		$documents,
		array_map(function ($id) {
			$aFile = CFile::GetFileArray($id);
			return [
				"NAME" => $aFile["FILE_NAME"],
				"SRC" => $aFile["SRC"]
			];
		}, $arResult["PROPERTIES"]["WORD"]["VALUE"])
	);
}

if (is_array($arResult["PROPERTIES"]["PDF"]["VALUE"])) {
	$documents = array_merge(
		$documents,
		array_map(function ($id) {
			$aFile = CFile::GetFileArray($id);
			return [
				"NAME" => $aFile["FILE_NAME"],
				"SRC" => $aFile["SRC"]
			];
		}, $arResult["PROPERTIES"]["PDF"]["VALUE"])
	);
}

$arResult["FILES"] = $documents;

// Рубрики
if (Loader::IncludeModule('highloadblock')) {
	$aRubric =& $arResult["PROPERTIES"]["RUBRIC"];

	$hlblock = HighloadBlockTable::getRow([
		'filter' => [
			'=TABLE_NAME' => 'b_hlbd_rubric'
		],
	]);

	if ($hlblock) {
		$entity = HighloadBlockTable::compileEntity($hlblock);
		$entityClass = $entity->getDataClass();

		$aRecords = $entityClass::getList([
			'filter' => [
				'UF_XML_ID' => $aRubric["VALUE"]
			],
		]);

		foreach ($aRecords as $aRecord) {
			$arResult["RUBRIC"][] = [
				"NAME" => $aRecord["UF_NAME"],
				"HREF" => $arParams["DETAIL_LINK"] . "?IBLOCK_ID=" . $arResult["IBLOCK_ID"] . "&RUBRIC=" . $aRecord["UF_XML_ID"],
			];
		}
	}

	unset($aRubric);
}

// Дата регистрации в Минюсте
if ($aDateReg =& $arResult["PROPERTIES"]["DATE_REG"]["VALUE"]) {
	$aDateReg = ConvertDateTime($aDateReg, CSite::GetDateFormat("SHORT")) . " г.";

	unset($aDateReg);
}

// Примечание
if ($sNote = $arResult["PROPERTIES"]["NOTE"]["~VALUE"]["TEXT"]) {
	$arResult["NOTE"] = $sNote;
}

// Тематика
if ($arResult["IBLOCK_SECTION_ID"]) {
	$oCache = Cache::createInstance();
	$aSections = [];
	if ($oCache->initCache(86400, 'element_sections_' . $arResult["ID"], 'element_sections')) {
		$aSections = $oCache->getVars();
	} elseif ($oCache->startDataCache()) {
		$oSections = CIBlockElement::GetElementGroups(
			$arResult["ID"],
			false,
			["ID", "NAME"]
		);

		while ($aSection = $oSections->Fetch()) {
			if ($aSection["NAME"]) {
				$sName = trim($aSection["NAME"]);
				$sHref = $arParams["DETAIL_LINK"] . "?IBLOCK_ID=" . $arResult["IBLOCK_ID"] . "&SECTION_ID=" . $aSection["ID"];
				$aSections[] = "<a class='search-result__info-link' href='$sHref' target='_blank'>$sName</a>";
			}
		}

		$oCache->endDataCache($aSections);
	}

	$arResult["SECTION_LINK"] = $aSections;
}

//Ответ дан по состоянию на
if ($sDate = $arResult["PROPERTIES"]["ANSWER_GIVEN"]["VALUE"]) {
    $arResult["DATE_CHANGE"] = FormatDate("d F Y", MakeTimeStamp($sDate)) . " г.";
}

if (mb_strlen(strip_tags($arResult['PREVIEW_TEXT'])) > 350 && $arParams['SHORT_PREVIEW_TEXT'] === 'Y') {
    $arResult['SHORT_PREVIEW_TEXT'] = 'Y';
}

$cp->SetResultCacheKeys(["TITLE", "TEXT"]);
