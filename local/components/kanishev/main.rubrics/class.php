<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Loader;


/**
 * Компонент для вывода рубрик
 */
class CKanishevComponentMainRubrics extends \CBitrixComponent
{
	public function executeComponent()
	{
		if ($this->StartResultCache()) {
			$this->arResult["RUBRICS"] = $this->getRubricElement();

			$this->IncludeComponentTemplate();
		}
	}

	public function onPrepareComponentParams($arParams)
	{
		if (!$arParams["SORT_FIELD"]) {
			$arParams["SORT_FIELD"] = "NAME";
		}

		if (!$arParams["SORT_ORDER"]) {
			$arParams["SORT_ORDER"] = "ASC";
		}

		return $arParams;
	}

	/**
	 * Получает элементы таблицы рубрик
	 * @param string $tableName
	 * @return array
	 * @throws \Bitrix\Main\ArgumentException
	 * @throws \Bitrix\Main\ObjectPropertyException
	 * @throws \Bitrix\Main\SystemException
	 */
	public function getRubricElement($tableName = 'b_hlbd_rubric')
	{
		Loader::includeModule("highloadblock");

		$aCounts = $this->getRubricElementsCount();

		if ($tb = $this->arParams["TABLE_NAME"]) {
			$tableName = $tb;
		}

		$hlblock = HighloadBlockTable::getList(
			[
				"filter" => [
					"TABLE_NAME" => $tableName
				],
				"order" => [
					$this->arParams["SORT_FIELD"] => $this->arParams["SORT_ORDER"]
				]
			]
		)->fetch();

		$aRubrics = [];
		if (isset($hlblock["ID"])) {
			$entity = HighloadBlockTable::compileEntity($hlblock);
			$entityClass = $entity->getDataClass();
			$rsData = $entityClass::getList();

			while ($arData = $rsData->Fetch()) {
				$aRubrics[] = [
					"ID" => $arData["ID"],
					"NAME" => $arData["UF_NAME"],
					"XML_ID" => $arData["UF_XML_ID"],
					"ICON" => CFile::GetPath($arData["UF_FILE"]),
					"COUNT" => $aCounts[$arData["UF_XML_ID"]] ?: 0,
				];
			}
		}

		return $aRubrics;
	}

	/**
	 * Получает кол-во элементов по рубрикам
	 * @return array
	 */
	private function getRubricElementsCount()
	{
		$aCounts = [];

		if ($iIblockId = $this->arParams["IBLOCK_ID"]) {
			$oCounts = \CIBlockElement::GetList(
				[],
				["IBLOCK_ID" => $iIblockId],
				["PROPERTY_RUBRIC"]
			);

			while ($aCount = $oCounts->Fetch()) {
				$aCounts[$aCount["PROPERTY_RUBRIC_VALUE"]] = $aCount["CNT"];
			}
		}

		return $aCounts;
	}
}