<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

$aCenter = explode(",", $arParams["CENTER"]);

if (!empty($aCenter)) {
	$arResult["CENTER"] = json_encode($aCenter);
}

$aPlaces = [];
$aPlaces[] = [
	"cor" =>  explode(",", $arParams["PLACES_COR"]),
	"header" => $arParams["PLACES_HEADER"],
	"body" => $arParams["PLACES_BODY"]
];

if (!empty($aPlaces)) {
	$arResult["PLACES"] = json_encode($aPlaces);
}