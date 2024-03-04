<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters["GROUPS"]["MAP"] = [
	"NAME" => "Настройки карты"
];

$arComponentParameters["PARAMETERS"]["CENTER"] = [
	"PARENT" => "MAP",
	"NAME" => "Координаты центра",
	"TYPE" => "STRING",
	"DEFAULT" => "55.710523291941605, 37.602252780426014"
];

$arComponentParameters["PARAMETERS"]["PLACES_COR"] = [
	"PARENT" => "MAP",
	"NAME" => "Координаты точки",
	"TYPE" => "STRING",
	"DEFAULT" => "55.710474643919, 37.601810699861"
];

$arComponentParameters["PARAMETERS"]["PLACES_HEADER"] = [
	"PARENT" => "MAP",
	"NAME" => "Заголовок точки",
	"TYPE" => "STRING",
	"DEFAULT" => ""
];

$arComponentParameters["PARAMETERS"]["PLACES_BODY"] = [
	"PARENT" => "MAP",
	"NAME" => "Текст точки",
	"TYPE" => "STRING",
	"DEFAULT" => ""
];