<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

$arResult["LOC"]["RETURN"] = Loc::getMessage("LOC_RETURN");

switch ($arParams["IS_NEED"]) {
	case true:
		$arResult["LOC"]["TITLE"] = Loc::getMessage("LOC_TITLE_NEED");
		$arResult["TEXT"] = $_SESSION["DIPLOMA"]["NEED_TEXT"];
		break;
	case false:
		$arResult["LOC"]["TITLE"] = Loc::getMessage("LOC_TITLE_NOT_NEED");
		$arResult["TEXT"] = $_SESSION["DIPLOMA"]["NOT_NEED_TEXT"];
		break;
	default:
		$arResult["LOC"]["TITLE"] = Loc::getMessage("LOC_TITLE_ERROR");
		break;
}
