<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var array $arResult
 */

foreach ($arResult["ITEMS"] as &$aItem) {
	if ($sPreviewText =& $aItem["PREVIEW_TEXT"]) {
		$sPreviewText = preg_replace("~<br\s*/?>[^<]*$~", "", $sPreviewText);

		unset($sPreviewText);
		unset($aItem);
	}
}
