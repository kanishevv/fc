<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters["GROUPS"]["RESULT_TEXT"] = [
	"NAME" => "Итоговый текст"
];

$arComponentParameters["PARAMETERS"]["NEED_TEXT"] = [
	"NAME" => "Нужно",
	"TYPE" => "STRING",
	"COLS" => 46,
	"ROWS" => 8,
	"DEFAULT" => "",
	"PARENT" => "RESULT_TEXT",
];

$arComponentParameters["PARAMETERS"]["NOT_NEED_TEXT"] = [
	"NAME" => "Не нужно",
	"TYPE" => "STRING",
	"COLS" => 46,
	"ROWS" => 8,
	"DEFAULT" => "",
	"PARENT" => "RESULT_TEXT",
];
?>