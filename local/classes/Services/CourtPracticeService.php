<?php

namespace Local\Services;

use Local\Orm\AcceptorOrganTable;
use Bitrix\Iblock\Iblock;
use Bitrix\Main\Entity\ReferenceField;
use Local\Base\Helper;
use Bitrix\Iblock\ORM\CommonElementTable;
use Bitrix\Main\Loader;

class CourtPracticeService
{
    public const IBLOCK_NAME = 'sudebnaya-praktika';

    public static function getProvider(): string
    {
        Loader::includeModule('iblock');
        return Iblock::wakeUp(
            Helper::getIblockId(self::IBLOCK_NAME)
        )->getEntityDataClass();
    }

    public static function getFullName(int $id): string
    {
        $provider = self::getProvider();
        $obj = $provider::getList([
            'select' => [
                'DOCTYPE.ITEM.VALUE',
                'DATE_PRIN.VALUE',
                // 'ACCEPTOR.ITEM.VALUE',
                'NEW_ACCEPTOR.VALUE',
                'HL_ACCEPTOR.UF_NAME',
                'DOC_NUMBER.VALUE',
                'NAME',
            ],
            'filter' => [
                'ID' => $id,
            ],
            'runtime' => [
                new ReferenceField(
                    'HL_ACCEPTOR',
                    AcceptorOrganTable::class,
                    [
                        '=this.NEW_ACCEPTOR.VALUE' => 'ref.UF_XML_ID',
                    ]
                ),
            ],
            'cache' => [
                'ttl' => 60 * 60 * 24,
            ],
        ])->fetchObject();
        $res = '';
        if ($obj) {
            // $acceptor = $obj->get('ACCEPTOR') && $obj->get('ACCEPTOR')->getItem()
            //     ? $obj->get('ACCEPTOR')->getItem()->getValue()
            //     : '';
            try {
                $newAcceptor = $obj->get('HL_ACCEPTOR') && $obj->get('HL_ACCEPTOR')->get('UF_NAME')
                    ? $obj->get('HL_ACCEPTOR')->get('UF_NAME')
                    : '';
            } catch (\Throwable $err) {}
            $doctype = $obj->get('DOCTYPE') && $obj->get('DOCTYPE')->getItem()
                ? $obj->get('DOCTYPE')->getItem()->getValue()
                : '';
            $date = $obj->get('DATE_PRIN') ? $obj->get('DATE_PRIN')->getValue() : '';
            $docNumber = $obj->get('DOC_NUMBER') ? $obj->get('DOC_NUMBER')->getValue() : '';
            if (
                $doctype
                && ($acceptor || $newAcceptor)
                && $date
                && $docNumber
            ) {
                $res = sprintf(
                    '%s %s от %s г. №%s %s',
                    $doctype,
                    $newAcceptor ?? $acceptor,
                    mb_strtolower(FormatDate('d F Y', strtotime($date))),
                    $docNumber,
                    $obj->getName(),
                );
            } else {
                $res = $obj->getName() ?? '';
            }
        }
        return $res;
    }
}
