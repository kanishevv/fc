<?php

use Bitrix\Main\Loader;

Loader::IncludeModule("iblock");
Loader::includeModule("highloadblock"); 

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

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
    while($arData = $rsData->Fetch()){
        $arResult["RUBRICS"][] = [
            "ID" => $arData["ID"],
            "NAME" => $arData["UF_NAME"],
            "ICON" => CFile::GetPath($arData["UF_FILE"]),
        ];
     }
    // $arResult["RUBRICS"] = $resData->fetchAll();
}

// $activeElements = CIBlockSection::GetSectionElementsCount($SECTION_ID, Array("CNT_ACTIVE"=>"Y"));
// echo $activeElements;