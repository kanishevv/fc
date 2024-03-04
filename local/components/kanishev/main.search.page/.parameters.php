<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters["GROUPS"]["PAGER"] = [
	"NAME" => "Настройки пагинации"
];

$arComponentParameters["PARAMETERS"]["PAGER_TITLE"] = [
	"PARENT" => "PAGER",
	"NAME" => "Заголовок пагинации",
	"TYPE" => "STRING",
	"DEFAULT" => "Страницы"
];

$arComponentParameters["PARAMETERS"]["PAGER_TEMPLATE"] = [
	"PARENT" => "PAGER",
	"NAME" => "Шаблон пагинации",
	"TYPE" => "STRING",
	"DEFAULT" => ""
];