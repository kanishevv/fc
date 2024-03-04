<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Iblock\SectionTable;
use Bitrix\Main\Loader;

/**
 * @var $arResult array
 * @var $arParams array
 */

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

if ($sDate = $arResult["TIMESTAMP_X"]) {
    $arResult["DATE_CHANGE"] = FormatDate("d F Y", MakeTimeStamp($sDate)) . " г.";
}

$cp = $this->__component;

if (is_object($cp)) {
	if ($arResult["PREVIEW_TEXT"]) {
		$cp->arResult["PREVIEW_TEXT"] = strip_tags($arResult["~PREVIEW_TEXT"]);
	}

	if ($arResult["DETAIL_TEXT"]) {
		$cp->arResult["DETAIL_TEXT"] = strip_tags($arResult["~DETAIL_TEXT"]);
	}

	$cp->SetResultCacheKeys(["PREVIEW_TEXT", "DETAIL_TEXT"]);
}
