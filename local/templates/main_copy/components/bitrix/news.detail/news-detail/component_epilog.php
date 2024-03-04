<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * @var $arResult array
 */
global $APPLICATION;

if (isset($arResult["TITLE"])) {
	$sTitle = HTMLToTxt($arResult["TITLE"]);
	$APPLICATION->SetTitle($sTitle);
	$APPLICATION->SetPageProperty('title', HTMLToTxt($arResult["TITLE"]));
}

if (isset($arResult["TEXT"])) {
	$APPLICATION->SetPageProperty('description', HTMLToTxt($arResult["TEXT"]));
}
