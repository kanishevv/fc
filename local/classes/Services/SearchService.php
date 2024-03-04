<?php

namespace Local\Services;

use Bitrix\Main\Loader;
use Bitrix\Iblock\Iblock;
use Bitrix\Iblock\IblockTable;

class SearchService
{
    public static function createFtsIndex(): void
    {
        Loader::includeModule('iblock');
        $iblockCodes = ['sudebnaya-praktika', 'prav_base', 'regional_base'];
        $res = IblockTable::getList([
            'select' => ['ID'],
            'filter' => ['CODE' => $iblockCodes],
        ])->fetchAll();
        $iblockIds = array_column($res, 'ID');
        print_r($iblockIds);
    }
}
