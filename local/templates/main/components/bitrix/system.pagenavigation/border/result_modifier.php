<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Local\Base\Helper;

/**
 * @var $arResult array
 * @var $arParams array
 * @global $APPLICATION
 */

$assetManager = new Local\Util\Assets();
$arResult["ASSETS"] = $assetManager->getEntry("icons/sprite.svg");

$oComponent = $this->getComponent();
$sNavQueryString = $arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "";
$sParams = $arResult["sUrlPath"] . "?" . $sNavQueryString . "PAGEN_" . $arResult["NavNum"] . "=";
$arResult["URL_PARAMS"] = $sParams;

if ($arResult["NavPageNomer"] > 1) {
	$arResult["PAGES"][] = [
		"URL" => $sParams . ($arResult["NavPageNomer"] - 1),
		"ICON" => [
			"NAME" => "arrow_left"
		]
	];
} else {
	$arResult["PAGES"][] = [
		"URL" => false,
		"ICON" => [
			"NAME" => "arrow_left"
		]
	];
}

if ($arResult["nStartPage"] >= 2) {
	$arResult["PAGES"][] = [
		"CLASS" => "component-pager__page-button-ex",
		"URL" => $sParams . 1,
		"TEXT" => "1"
	];
}

if ($arResult["nStartPage"] > 2) {
	$arResult["PAGES"][] = [
		"CLASS" => "component-pager__page-button-ex",
		"URL" => $sParams . 2,
		"TEXT" => "2"
	];
}

if ($arResult["nStartPage"] > 2) {
	$arResult["PAGES"][] = [
		"CLASS" => "component-pager__page-button-ex",
		"URL" => false,
		"TEXT" => "..."
	];
}

$iCurPage = $arResult["nStartPage"];
while ($iCurPage <= $arResult["nEndPage"]) {
	$arResult["PAGES"][] = [
		"URL" => $sParams . $iCurPage,
		"TEXT" => $iCurPage
	];

	$iCurPage++;
}

if ($arResult["nEndPage"] < $arResult["NavPageCount"] - 2) {
	$arResult["PAGES"][] = [
		"CLASS" => "component-pager__page-button-ex",
		"URL" => false,
		"TEXT" => "..."
	];
}

if ($arResult["nEndPage"] < $arResult["NavPageCount"] - 1) {
	$arResult["PAGES"][] = [
		"CLASS" => "component-pager__page-button-ex",
		"URL" => $sParams . (int)($arResult["NavPageCount"] - 1),
		"TEXT" => (int)($arResult["NavPageCount"] - 1)
	];
}

if ($arResult["nEndPage"] <= $arResult["NavPageCount"] - 1) {
	$arResult["PAGES"][] = [
		"CLASS" => "component-pager__page-button-ex",
		"URL" => $sParams . (int)$arResult["NavPageCount"],
		"TEXT" => (int)$arResult["NavPageCount"]
	];
}

if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]) {
	$arResult["PAGES"][] = [
		"URL" => $sParams . ($arResult["NavPageNomer"] + 1),
		"ICON" => [
			"NAME" => "arrow_right"
		]
	];
} else {
	$arResult["PAGES"][] = [
		"URL" => false,
		"ICON" => [
			"NAME" => "arrow_right"
		]
	];
}

$arResult["LOC_PAGE_NUM"] = Loc::getMessage("LOC_PAGE_NUM");
