<?php

namespace Local\Search;

use CModule;
use Bitrix\Main\Context;
use Local\Base\Helper;

class Detail
{
	/**
	 * @var $iId int id элемента
	 */
	private $iId;

	public function __construct()
	{
		CModule::IncludeModule("iblock");

		$this->prepareParams();
	}

	/**
	 * Подготовка параметров
	 */
	private function prepareParams()
	{
		$request = Context::getCurrent()->getRequest();

		$this->iId = $request->getQuery("id");
	}

	/**
	 * Возвращает массив элемента со всеми полями и свойствами
	 * @return array
	 */
	public function getElement()
	{
		if (!$this->iId) {
			return [
				"message" => "Object identifier not passed."
			];
		}

		$aElement = current(Helper::getIblockElements(
			28800,
			"element_" . $this->iId,
			[],
			["ID" => $this->iId]
		));

		if ($aElement) {
			return $aElement;
		}

		return [];
	}
}