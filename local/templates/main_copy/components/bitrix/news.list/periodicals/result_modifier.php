<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var array $arResult
 */

foreach ($arResult["ITEMS"] as &$aItem) {
	if ($iFileId = $aItem["PROPERTIES"]["FILE"]["VALUE"]) {
		$aItem["URL"] = CFile::GetPath($iFileId);

		unset($aItem["DISPLAY_PROPERTIES"]["FILE"]);
	}

	unset($aItem);
}
