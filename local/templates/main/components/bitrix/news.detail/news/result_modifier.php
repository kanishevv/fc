<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var $arResult array
 */

$arResult["NEWS_TEXT"] = $arResult["DETAIL_TEXT"] ?: $arResult["PREVIEW_TEXT"];

if ($sUrl = $arResult["PROPERTIES"]["SOURCE"]["VALUE"]) {
	$aUrl = parse_url($sUrl);

	$arResult["SOURCE"] = [
		"NAME" => $aUrl["host"],
		"HREF" => $sUrl
	];
}

$arResult["LOC"]["SOURCE"] = Loc::getMessage("LOC_SOURCE");
