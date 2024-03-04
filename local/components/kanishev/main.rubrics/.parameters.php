<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"PARAMETERS" => array(
		"TABLE_NAME" => Array(
			"NAME" => "Название таблицы",
			"TYPE" => "TEXT",
			"DEFAULT" => "",
			"PARENT" => "BASE",
		),
		"IBLOCK_ID" => Array(
			"NAME" => "ID инфоблока",
			"TYPE" => "TEXT",
			"DEFAULT" => "",
			"PARENT" => "BASE",
		),
		"DETAIL_LINK" => Array(
			"NAME" => "Ссылка до детальной страницы",
			"TYPE" => "TEXT",
			"DEFAULT" => "",
			"PARENT" => "BASE",
		),
		"SORT_FIELD" => Array(
			"NAME" => "Поле для сортировки",
			"TYPE" => "TEXT",
			"DEFAULT" => "NAME",
			"PARENT" => "BASE",
		),
		"SORT_ORDER" => Array(
			"NAME" => "Порядок сортировки",
			"TYPE" => "LIST",
			"VALUES" => [
				"ASC" => "По возрастанию",
				"DESC" => "По убыванию"
			],
			"DEFAULT" => "ASC",
			"PARENT" => "BASE",
		),
		"CACHE_TIME" => array("DEFAULT" => "3600"),
	)
);
?>