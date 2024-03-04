<?php
/**
 * @var array $arResult
 */

foreach ($arResult["MESSAGE"] as $itemID => $itemValue) {
	echo ShowMessage(array("MESSAGE" => $itemValue, "TYPE" => "OK"));
}