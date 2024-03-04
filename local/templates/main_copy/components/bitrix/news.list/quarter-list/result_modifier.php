<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var array $arResult
 */

foreach ($arResult["ITEMS"] as $iKey => $aItem) {
	if ($iFIleId = $aItem["PROPERTIES"]["FILE"]["VALUE"]) {
		$arResult["ITEMS"][$iKey]["URL"] = CFile::GetPath($iFIleId);
	}
}
