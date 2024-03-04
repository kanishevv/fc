<?php

use Bitrix\Main\Loader;

Loader::IncludeModule("iblock");
Loader::includeModule("highloadblock");

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if ($arParams["FILTER"]) {
    $arIds = array_column($arResult["SEARCH"], 'ITEM_ID');
    $arIblocks = array_column($arResult["SEARCH"], 'PARAM2');
    
    /* Костыль на костыле */
    $arFilter = [
        "IBLOCK_ID" => $arIblocks,
        "ID" => $arIds,
        "ACTIVE_DATE" => "Y",
        "ACTIVE" => "Y",
        [
            "LOGIC" => "OR",
            "PROPERTY_RUBRIC" => $arParams["FILTER"] //implode(",", $arParams["FILTER"])
        ]
    ];
    
    $getElements = CIBlockElement::GetList(
        ["SORT" => "ASC"],
        $arFilter,
        false,
        true,
        [
            "ID",
            "NAME",
            "PROPERTY_RUBRIC"
        ]
    );
    
    while ($arElement = $getElements->fetch()) { 
        $arResult["ITEMS"][] = [
            "TITLE" => $arElement["NAME"],
            "DESCRIPTION" => $arElement["PREVIEW_TEXT"],
            "URL" => $arElement["DETAIL_PAGE_URL"],
            "RUBRIC" => $arElement["PROPERTY_RUBRIC_VALUE"],
        ];
    }
} else {
    foreach ($arResult["SEARCH"] as $arItem) {
        $arResult["ITEMS"][] = [
            "TITLE" => $arItem["TITLE"],
            "DESCRIPTION" => $arItem["BODY"],
            "URL" => $arItem["URL"]
        ];
    }
}

$arResult["COUNT_ALL"] = count($arResult["SEARCH"]);

/* Получаем список рубрик из HL. TODO: Вынести в класс */

$tableName = "b_hlbd_rubric";
$hlblock = HL\HighloadBlockTable::getList(
    [
        "filter" => [
            "TABLE_NAME" => $tableName
        ]
    ]
)->fetch();

if (isset($hlblock["ID"])) {
    $entity = HL\HighloadBlockTable::compileEntity($hlblock);
    $entityClass = $entity->getDataClass();
    $rsData = $entityClass::getList(array("filter" => []));

    while ($arData = $rsData->Fetch()) {
        $arResult["RUBRICS"][] = [
            "ID" => $arData["ID"],
            "NAME" => $arData["UF_NAME"],
            "XML_ID" => $arData["UF_XML_ID"],
            "ICON" => CFile::GetPath($arData["UF_FILE"]),
        ];
    }
    // $arResult["RUBRICS"] = $resData->fetchAll();
}

/* Получаем список рубрик из HL. */

