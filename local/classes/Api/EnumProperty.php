<?php

namespace Local\Api;

use Bitrix\Iblock\PropertyEnumerationTable;
use Bitrix\Iblock\PropertyTable;
use Bitrix\Main\Context;
use Bitrix\Main\Loader;
use Local\Base\Helper;
use Rakit\Validation\Validator;

class EnumProperty
{
	/**
	 * Формирует массив для ответа
	 * @return array
	 * @throws \Bitrix\Main\LoaderException
	 */
	public function getResponseArray()
	{
		Loader::includeModule("iblock");

		$aRequest = Context::getCurrent()->getRequest()->getQueryList()->toArray();

		$validator = new Validator();
		$validation = $validator->validate($aRequest, [
			"propertyCode" => "required",
			"iblockCode" => "required"
		]);

		if ($validation->fails()) {
			$errors = $validation->errors()->all(':message');

			return [
				'status' => 400,
				'errors' => $errors
			];
		}

		$sPropCode = $aRequest["propertyCode"];
		$sIblockCode = $aRequest["iblockCode"];

		$aProps = $this->getProps($sPropCode, Helper::getIblockId($sIblockCode));
		$aValues = $this->getValues($aProps);

		return $aValues;
	}

	/**
	 * Получает свойства инфоблока
	 * @param string $sCode Символьный код свойства
	 * @param int $iIblockId ID инфоблока
	 * @return array
	 * @throws \Bitrix\Main\ArgumentException
	 * @throws \Bitrix\Main\ObjectPropertyException
	 * @throws \Bitrix\Main\SystemException
	 */
	private function getProps(string $sCode, int $iIblockId)
	{
		$aProps = [];
		$oProps = PropertyTable::getList([
			"filter" => [
				"=IBLOCK_ID" => $iIblockId,
				"=CODE" => $sCode
			],
			"select" => ["ID", "IBLOCK_ID"],
			"cache" => ["ttl" => 259200]
		]);

		while ($aProp = $oProps->fetch()) {
			$aProps[$aProp["ID"]] = $aProp;
		}

		return $aProps;
	}

	/**
	 * Получает массив значений свойств
	 * @param array $aProps массив свойств
	 * @return array
	 */
	private function getValues(array $aProps)
	{
		$aValues = [];
		$oValues = PropertyEnumerationTable::getList([
			"filter" => [
				"=PROPERTY_ID" => array_column($aProps, "ID")
			],
			"order" => ["SORT" => "ASC"],
			"select" => ["ID", "PROPERTY_ID", "VALUE", "XML_ID"],
			"cache" => ["ttl" => 259200]
		]);

		while ($aType = $oValues->fetch()) {
			$aValues[] = $aType;
		}

		return $aValues;
	}
}