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
    // Дата изменения
    if ($sDate = $aItem["ACTIVE_FROM"]) {
        $aItem["DATE_ACTIVE_FROM"] = FormatDate("d F Y", MakeTimeStamp($sDate));
    }

    unset($aItem);
}
