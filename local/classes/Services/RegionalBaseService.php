<?php

namespace Local\Services;

use Local\Orm\AcceptorOrganTable;
use Bitrix\Iblock\Iblock;
use Bitrix\Main\Entity\ReferenceField;
use Local\Base\Helper;
use Bitrix\Main\Loader;

class RegionalBaseService
{
    public const IBLOCK_NAME = 'regional_base';

    public static function getProvider(): string
    {
        Loader::includeModule('iblock');
        return Iblock::wakeUp(
            Helper::getIblockId(self::IBLOCK_NAME)
        )->getEntityDataClass();
    }

    public static function getFullName(int $id, $lineBreak = false): string
    {
        $provider = self::getProvider();
        $obj = $provider::getList([
            'select' => [
                'ACCEPTOR.ITEM.VALUE',
                'DOCTYPE.ITEM.VALUE',
                'DATE_PRIN.VALUE',
                'NAME',
            ],
            'filter' => [
                'ID' => $id,
            ],
            'cache' => [
                'ttl' => 60 * 60 * 24,
            ],
        ])->fetchObject();
        $res = '';
        if ($obj) {
            $doctype = $obj->get('DOCTYPE') && $obj->get('DOCTYPE')->getItem()
                ? $obj->get('DOCTYPE')->getItem()->getValue()
                : '';
            $acceptor = $obj->get('ACCEPTOR') && $obj->get('ACCEPTOR')->getItem()
                ? $obj->get('ACCEPTOR')->getItem()->getValue()
                : '';
            $date = $obj->get('DATE_PRIN') ? $obj->get('DATE_PRIN')->getValue() : '';
            $res = '';
            if ($doctype) {
                $res .= $doctype;
                if ($lineBreak) {
                    $res .= '</br>';
                }
            }
            if ($acceptor) {
                $res .= ' ' . $acceptor;
            }
            if ($date) {
                $res .= ' от ' . mb_strtolower(FormatDate('d F Y', strtotime($date))) . ' г.';
            }
            $res .= ' №' . $obj->getName();
            $res = trim($res);
        }
        return $res;
    }
}
