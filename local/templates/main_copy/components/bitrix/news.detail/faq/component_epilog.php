<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * @var $arResult array
 */
global $APPLICATION;

if (isset($arResult["PREVIEW_TEXT"])) {
	$APPLICATION->SetPageProperty("title", $arResult["PREVIEW_TEXT"]);
}

if (isset($arResult["DETAIL_TEXT"])) {
	$APPLICATION->SetPageProperty("description", $arResult["DETAIL_TEXT"]);
}
