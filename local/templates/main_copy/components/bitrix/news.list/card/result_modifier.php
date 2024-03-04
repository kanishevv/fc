<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var $arResult array
 */

foreach ($arResult["ITEMS"] as &$aItem) {
    // Дата изменения
    if ($sDate = $aItem["PROPERTIES"]["PUBLICATION_DATE"]["VALUE"]) {
        $aItem["PUBLICATION_DATE"] = FormatDate("d F Y", MakeTimeStamp($sDate));
    }

    if ($sDateNum = $aItem["PROPERTIES"]["DATE_NUM_DOC"]["VALUE"]) {
        $aStr = explode("№", $sDateNum);
        if (count($aStr) === 2) {
            $aItem["DATE_NUM_DOC"] = "<span>" . $aStr[0] . "</span>№" . $aStr[1];
        } else {
            $aItem["DATE_NUM_DOC"] = $aItem["PROPERTIES"]["DATE_NUM_DOC"]["VALUE"];
        }
    }

    unset($aItem);
}
