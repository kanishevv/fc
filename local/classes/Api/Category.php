<?php

namespace Local\Api;

use Bitrix\Iblock\Model\Section;
use Bitrix\Iblock\SectionTable;
use Bitrix\Main\Context;
use Bitrix\Main\Loader;
use Local\Base\Helper;
use Rakit\Validation\Validator;

class Category
{
	/**
	 * Массив парамтеров запроса
	 * @var array
	 */
	private $aRequest;

	/**
	 * @var Validator Объект валидации
	 */
	private $oValidation;

	public function __construct()
	{
		Loader::includeModule("iblock");
		$this->aRequest = Context::getCurrent()->getRequest()->getQueryList()->toArray();
	}

	/**
	 * Получает массив для ответа
	 * @return array
	 */
	public function getResponseArray()
	{
		$aResponse = $this->getCategories();

		return $aResponse;
	}

	/**
	 * Получает массив категорий
	 * @return array
	 * @throws \Bitrix\Main\ArgumentException
	 * @throws \Bitrix\Main\LoaderException
	 * @throws \Bitrix\Main\ObjectPropertyException
	 * @throws \Bitrix\Main\SystemException
	 */
	private function getCategories()
	{
		$aIblockIds = [
			Helper::getIblockId("prav_base") => "prav_base",
			Helper::getIblockId("sudebnaya-praktika") => "sudebnaya-praktika"
		];

		if ($this->aRequest["iblockCode"]) {
			$aIblockIds = [
				Helper::getIblockId($this->aRequest["iblockCode"]) => $this->aRequest["iblockCode"]
			];
		}

		$aSections = [];
		$oSections = SectionTable::getList([
			"filter" => [
				"=IBLOCK_ID" => array_keys($aIblockIds),
			],
			"select" => ["SECTION_ID" => "ID", "NAME", "IBLOCK_ID", "PARENT_SECTION_ID" => "IBLOCK_SECTION_ID"],
			"cache" => ["ttl" => 86400]
		]);

		while ($aSection = $oSections->fetch()) {
			$sIblockCode = $aIblockIds[$aSection["IBLOCK_ID"]];
			$aSections[$sIblockCode][] = $aSection;
		}

		return $aSections;
	}
}