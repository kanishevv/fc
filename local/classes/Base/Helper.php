<?php

namespace Local\Base;

use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Data\Cache;
use Bitrix\Main\Loader;
use Bitrix\Iblock\PropertyTable;
use CBitrixComponent;
use CIBlock;
use CIBlockElement;
use CModule;

class Helper
{
	/**
	 * Get IblockID by code
	 *
	 * @param $sCode
	 *
	 * @return int
	 *
	 * @throws \Bitrix\Main\LoaderException
	 */
	public static function getIblockId($sCode = '')
	{
		\Bitrix\Main\Loader::includeModule("iblock");
		$iID = null;
		$oCache = Cache::createInstance();
		if ($oCache->initCache(86400, 'iblock_id_g' . $sCode, 'iblock_id')) {
			$iID = $oCache->getVars();
		} elseif ($oCache->startDataCache()) {
			$res = \CIBlock::GetList([], ['CODE' => $sCode, 'CHECK_PERMISSIONS' => 'N'], false);
			$ob = $res->GetNext();
			if ($ob) {
				$iID = (int)$ob['ID'];
			}

			$oCache->endDataCache($iID);
		}

		return (int)$iID;
	}

	/**
	 *  Эрмитаж для элементов
	 *
	 * @param CBitrixComponent $component
	 * @param array $element
	 * @param string $attribute
	 * @param array $actions
	 *
	 * @return bool
	 */
	public static function addElementEditButtons(
		$component,
		&$element,
		&$attribute = null,
		$actions = ['edit' => true, 'delete' => true]
	)
	{
		if (empty($element))
			return false;
		if (!$component instanceof CBitrixComponent)
			return false;
		if (!$GLOBALS['APPLICATION']->GetShowIncludeAreas())
			return false;
		$uniqueId = $element['ID'] . $component->randString();
		if (
			(empty($element['EDIT_LINK']) || empty($element['DELETE_LINK'])) &&
			(!empty($actions['edit']) || !empty($actions['delete']))
		) {
			$arButtons = CIBlock::GetPanelButtons(
				$element['IBLOCK_ID'], $element['ID'], 0, ['SESSID' => false, 'CATALOG' => true]
			);

			$element['EDIT_LINK'] = $arButtons['edit']['edit_element']['ACTION_URL'];
			$element['DELETE_LINK'] = $arButtons['edit']['delete_element']['ACTION_URL'];
		}

		if (!empty($actions['edit'])) {
			$component->AddEditAction(
				$uniqueId,
				$element['EDIT_LINK'],
				CIBlock::GetArrayByID($element['IBLOCK_ID'], 'ELEMENT_EDIT')
			);
		}

		if (!empty($actions['delete'])) {
			$component->AddDeleteAction(
				$uniqueId,
				$element['DELETE_LINK'],
				CIBlock::GetArrayByID($element['IBLOCK_ID'], 'ELEMENT_DELETE'),
				['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]
			);
		}

		$attribute = " id=\"" . $component->GetEditAreaId($uniqueId) . "\" ";

		return true;
	}

	/**
	 * Возвращает массив элементов highload блока
	 * @param $tableName
	 * @return array
	 * @throws \Bitrix\Main\ArgumentException
	 * @throws \Bitrix\Main\ObjectPropertyException
	 * @throws \Bitrix\Main\SystemException
	 */
	public static function getElementHighloadBlock($tableName): array
	{
		Loader::includeModule("highloadblock");

		$aRubrics = [];

		$oCache = Cache::createInstance();
		if ($oCache->initCache(86400, 'highload_block_' . $tableName, 'highload')) {
			$aRubrics = $oCache->getVars();
		} elseif ($oCache->startDataCache()) {
			$hlblock = HighloadBlockTable::getList(
				[
					"filter" => [
						"TABLE_NAME" => $tableName
					]
				]
			)->fetch();

			if (isset($hlblock["ID"])) {
				$entity = HighloadBlockTable::compileEntity($hlblock);
				$entityClass = $entity->getDataClass();
				$rsData = $entityClass::getList(array("filter" => []));

				while ($arData = $rsData->Fetch()) {
					$aRubrics[$arData["UF_XML_ID"]] = [
						"ID" => $arData["ID"],
						"NAME" => $arData["UF_NAME"],
						"XML_ID" => $arData["UF_XML_ID"],
						"ICON" => \CFile::GetPath($arData["UF_FILE"]),
					];
				}
			}

			$oCache->endDataCache($aRubrics);
		}

		return $aRubrics;
	}

    /**
     * Возвращает массив элементов инфоблока
     * @param $iCacheTime int время кэширования
     * @param $sCacheId string код кэша
     * @param string[] $aOrder
     * @param array $aFilter
     * @param false $aGroupBy
     * @param false $aNavStartParams
     * @param array $aSelectFields
     * @return array|void
     */
	public static function getIblockElements(
	    $iCacheTime,
	    $sCacheId,
	    $aOrder = ["SORT" => "ASC"],
        $aFilter = [],
        $aGroupBy = false,
        $aNavStartParams = false,
        $aSelectFields = []
    ) {
        $aElements = [];

        $oCache = Cache::createInstance();
        if ($oCache->initCache($iCacheTime, $sCacheId, 'iblock_elements')) {
            $aElements = $oCache->getVars();
        } elseif ($oCache->startDataCache()) {
            $oElements = CIBlockElement::GetList(
                $aOrder,
                $aFilter,
                $aGroupBy,
                $aNavStartParams,
                $aSelectFields
            );

            while ($oItem = $oElements->GetNextElement()) {
                $aFields = $oItem->GetFields();
                $aProperties = $oItem->GetProperties();
                $aElements[$aFields["ID"]] = array_merge($aFields, $aProperties);
            }

			if ($aNavStartParams) {
				$aElements["NAV_RESULT"] = $oElements;
			}

            $oCache->endDataCache($aElements);
        }

        return $aElements;
    }

    /**
     * Возвращает строку расширений файлов из модуля Управление структурой (медиабиблиотека)
     * @param $aTypes
     * @return string
     */
    public static function getFileTypes($aTypes)
    {
        $sFileTypes = "";

        if (CModule::IncludeModule("fileman")) {
            $aFileTypes = \CMedialib::GetTypes($aTypes);
            foreach ($aFileTypes as $aFileType) {
                if ($sFileTypes !== "") {
                    $sFileTypes .= ",";
                }
                $sFileTypes .= $aFileType["ext"];
            }
        }

        return $sFileTypes;
    }

	/**
	 * Возвращает информацию о инфоблоке
	 * @param $iIblockId id инфоблока
	 * @return array|false|void
	 */
	public static function getIblockInfo($iIblockId)
	{
		if (!$iIblockId) {
			return [];
		}

		$aIblockInfo = [];
		$sCacheId = "iblock_" . $iIblockId;
		$oCache = Cache::createInstance();
		if ($oCache->initCache(86400, $sCacheId, 'iblock_info')) {
			$aIblockInfo = $oCache->getVars();
		} elseif ($oCache->startDataCache()) {
			$aIblockInfo = CIBlock::GetList(
				[],
				["ID" => $iIblockId]
			)->Fetch();

			$oCache->endDataCache($aIblockInfo);
		}

		if (is_array($aIblockInfo)) {
			return $aIblockInfo;
		}

		return [];
	}

    /**
     * @throws ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getPropertyId(int $iblockId, string $propertyCode): ?int
    {
        $iblockId = trim($iblockId);
        $propertyCode = trim($propertyCode);

        if (!$iblockId) {
            throw new ArgumentException('Invalid iblock ID');
        }

        if (!$propertyCode) {
            throw new ArgumentException('Invalid property code');
        }

        $arResult = PropertyTable::getList(
            [
                'filter' => [
                    'CODE' => $propertyCode,
                    'IBLOCK.ID' => $iblockId
                ],
                'select' => [
                    'ID'
                ],
                'cache' => [
                    'ttl' => 36000
                ]
            ]
        )->fetch();

        return $arResult['ID'] ?? null;
    }
}
