<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var array $arResult
 */

foreach ($arResult["ITEMS"] as &$aItem) {
	\Local\Base\Helper::addElementEditButtons($this->getComponent(), $aItem, $aItem["EDIT"]);

	if ($v = $aItem["PROPERTIES"]["PHONE"]["VALUE"]) {
		$aItem["PROPERTIES"]["PHONE"]["FORMATTED"] = preg_replace("/[^+0-9]/", '', $v);
	}

	unset($aItem);
}