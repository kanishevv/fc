<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Local\Base\Helper;

/**
 * @var array $arResult
 */

foreach ($arResult["ITEMS"] as &$aItem) {
	// Кнопки редактирования
	$attr = "";
	Helper::addElementEditButtons($this->getComponent(), $aItem, $attr);
	$aItem["EDIT_ELEMENT_ATTR"] = $attr;

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

	// Заголовок
	$aItem["TITLE"] = "";

	if ($v = $aItem["PROPERTIES"]["DOCUMENT_TYPE"]["VALUE"]) {
		$aItem["TITLE"] .= $v . "<br/>";
	}

	if ($v = $aItem["PROPERTIES"]["CREATOR"]["VALUE"]) {
		$aItem["TITLE"] .= $v . "<br/>";
	}

	if ($v = $aItem["DATE_NUM_DOC"]) {
		$aItem["TITLE"] .= $v;
	}

    unset($aItem);
}
