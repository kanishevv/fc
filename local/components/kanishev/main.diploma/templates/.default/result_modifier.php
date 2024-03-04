<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

$arResult["LOC"]["SELECT_COUNTRY"] = Loc::getMessage("LOC_SELECT_COUNTRY");
$arResult["LOC"]["TITLE"] = Loc::getMessage("LOC_TITLE");
