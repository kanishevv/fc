<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

$arResult["LOC"]["RETURN"] = Loc::getMessage("LOC_RETURN");

$arResult["LOC"]["TITLE"] = $arResult["SECTION"]["UF_TITLE"] ?: Loc::getMessage("LOC_TITLE_WHEN");

