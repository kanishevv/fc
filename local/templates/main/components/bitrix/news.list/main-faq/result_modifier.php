<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult array
 */

$assetManager = new Local\Util\Assets();

$arParams['ASSETS'] = $assetManager->getEntry("icons/sprite.svg");

foreach ($arResult["ITEMS"] as &$aItem) {
    if ($sDate = $aItem["TIMESTAMP_X"]) {
        $aItem["DATE_CHANGE"] = FormatDate("d F Y", MakeTimeStamp($sDate));
    }

	if ($aItem["PREVIEW_TEXT"]) {
		$aItem["PREVIEW_TEXT"] = strip_tags($aItem["~PREVIEW_TEXT"]);
	}

	if ($aItem["DETAIL_TEXT"]) {
		$aItem["DETAIL_TEXT"] = strip_tags($aItem["~DETAIL_TEXT"]);
	}

    unset($aItem);
}