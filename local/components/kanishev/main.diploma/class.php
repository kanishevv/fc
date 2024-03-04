<?php

use Bitrix\Iblock\Model\Section;
use Bitrix\Main\Loader;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class NewComponent extends \CBitrixComponent
{
	public function onPrepareComponentParams($params)
	{
		if ($s = $params["NEED_TEXT"]) {
			$_SESSION["DIPLOMA"]["NEED_TEXT"] = $s;
		}

		if ($s = $params["NOT_NEED_TEXT"]) {
			$_SESSION["DIPLOMA"]["NOT_NEED_TEXT"] = $s;
		}

		return $params;
	}

	public function executeComponent()
	{
		Loader::includeModule('iblock');

		if ($this->StartResultCache()) {
			$assetManager = new Local\Util\Assets();
			$this->arResult["ASSETS"] = $assetManager->getEntry("icons/sprite.svg");

			$aSections = $this->getAllSection();
			$aElements = $this->getAllElements();

			$this->arResult["COUNTRIES"] = $this->getCountries($aSections, $aElements);

			if ($this->arParams["COUNTRY_ID"] && $this->arResult["COUNTRIES"]) {
				$this->arResult["COUNTRY"] = $this->arResult["COUNTRIES"][$this->arParams["COUNTRY_ID"]];
				if ($iPicture = $this->arResult["COUNTRY"]["PICTURE"]) {
					$this->arResult["COUNTRY"]["PICTURE_SRC"] = CFile::GetPath($iPicture);
				}
			}

			if ($this->arParams["SECTION_ID"]) {
				$this->arResult["ELEMENT"] = $this->getElement($aElements);
				$this->arResult["SECTION"] = $this->getSection($aSections);

				if (empty($this->arResult["ELEMENT"])) {
					$this->arResult["SECTIONS"] = $this->getSections($aSections, $aElements);
				}
			}

			$this->includeComponentTemplate();
		}
	}

	/**
	 * Возвращает разделы первого уровня (Страны)
	 * @param array $aSections Все разделы инфоблока
	 * @param array $aElements Все элементы инфоблока
	 * @return array
	 */
	private function getCountries(array $aSections, array $aElements)
	{
		$aResult = [];

		foreach ($aSections as $iSectionId => $aSection) {
			if ((int)$aSection["DEPTH_LEVEL"] === 1) {
				$aResult[$iSectionId] = $aSection;

				foreach ($aElements as $aElement) {
					if ((int)$aElement["IBLOCK_SECTION_ID"] === (int)$iSectionId) {
						$aResult[$iSectionId]["ELEMENT"] = $aElement;
						break;
					}
				}

				$sUrl =& $aResult[$iSectionId]["URL"];
				$sUrl = "ajax.php?SECTION={$aSection["ID"]}&COUNTRY={$aSection["ID"]}";

				if ($iPropId = $aResult[$iSectionId]["ELEMENT"]["PROPERTY_NEED_ENUM_ID"]) {
					$sXmlId = $this->getXmkIdEnumPropById($iPropId);
					$sUrl .= $sXmlId === "Y" ? "&RESULT=1" : "&RESULT=0";
				}

				unset($sUrl);
			}
		}

		return $aResult;
	}

	/**
	 * Возвращает дочерние разделы текущего раздела
	 * @param array $aSections Все разделы инфоблока
	 * @param array $aElements Все элементы инфоблока
	 * @return array
	 */
	private function getSections(array $aSections, array $aElements)
	{
		$aReturn = [];

		foreach ($aSections as $iSectionId => $aSection) {
			if ($aSection["IBLOCK_SECTION_ID"] === $this->arParams["SECTION_ID"]) {
				$aReturn[$iSectionId] = $aSection;

				foreach ($aElements as $aElement) {
					if ((int)$aElement["IBLOCK_SECTION_ID"] === (int)$iSectionId) {
						$aReturn[$iSectionId]["ELEMENT"] = $aElement;
						break;
					}
				}

				$iCountryId = $this->arResult["COUNTRY"]["ID"];
				$sUrl =& $aReturn[$iSectionId]["URL"];
				$sUrl = "ajax.php?SECTION={$aSection["ID"]}&COUNTRY={$iCountryId}";

				if ($iPropId = $aReturn[$iSectionId]["ELEMENT"]["PROPERTY_NEED_ENUM_ID"]) {
					$sXmlId = $this->getXmkIdEnumPropById($iPropId);
					$sUrl .= $sXmlId === "Y" ? "&RESULT=1" : "&RESULT=0";
				}

				unset($sUrl);
			}
		}

		return $aReturn;
	}

	/**
	 * Возвращает текущий раздел инфоблока
	 * @param array $aSections Все разделы инфоблока
	 */
	private function getSection(array $aSections)
	{
		foreach ($aSections as $aSection) {
			if ($aSection["ID"] === $this->arParams["SECTION_ID"]) {
				return $aSection;
			}
		}

		return [];
	}

	/**
	 * Возвращает элемент текущего раздела
	 * @param array $aElements Все элементы инфоблока
	 */
	private function getElement(array $aElements)
	{
		foreach ($aElements as $aElement) {
			if ($aElement["IBLOCK_SECTION_ID"] === $this->arParams["SECTION_ID"]) {
				return $aElement;
			}
		}

		return [];
	}

	/**
	 * Возвращает все разделы инфоблока
	 * @return array
	 * @throws \Bitrix\Main\ArgumentException
	 * @throws \Bitrix\Main\ObjectPropertyException
	 * @throws \Bitrix\Main\SystemException
	 */
	private function getAllSection()
	{
		$aReturn = [];

		$oEntity = Section::compileEntityByIblock($this->arParams["IBLOCK_ID"]);
		$oResult = $oEntity::getList([
			"filter" => [
				"=IBLOCK_ID" => $this->arParams["IBLOCK_ID"]
			],
			"select" => [
				"ID",
				"IBLOCK_SECTION_ID",
				"NAME",
				"PICTURE",
				"UF_DOCUMENT_LIST",
				"UF_TITLE",
				"UF_NOTE",
				"DEPTH_LEVEL"
			],
			"order" => [
				"SORT" => "ASC",
				"ID" => "ASC"
			]
		]);

		while ($aSection = $oResult->fetch()) {
			$aReturn[$aSection["ID"]] = $aSection;
		}

		return $aReturn;
	}

	/**
	 * Возвращает все элементы инфоблока
	 * @return array
	 */
	private function getAllElements()
	{
		$aReturn = [];

		$oResult = CIBlockElement::GetList(
			[],
			[
				"=IBLOCK_ID" => $this->arParams["IBLOCK_ID"]
			],
			false,
			false,
			[
				"ID",
				"IBLOCK_SECTION_ID",
				"PROPERTY_NEED",
			]
		);

		while ($aElement = $oResult->Fetch()) {
			$aReturn[$aElement["ID"]] = $aElement;
		}

		return $aReturn;
	}


	/**
	 * Возвращает XML_ID для значения списка инфоблока
	 * @param $iId
	 * @return mixed
	 */
	private function getXmkIdEnumPropById($iId)
	{
		return Bitrix\Iblock\PropertyEnumerationTable::getList(
			[
				"filter" => ["ID" => $iId],
				"cache" => ["ttl" => 604800]
			]
		)->fetch()["XML_ID"];
	}
}