<?php

namespace Local\Search;

use Bitrix\Iblock\SectionTable;
use Bitrix\Main\Context;
use CModule;
use Local\Base\Helper;

class DocumentReference
{
	/**
	 * @var int ID элемента инфоблока
	 */
	private $iElementId;

	public function __construct()
	{
		CModule::IncludeModule("iblock");
		CModule::IncludeModule("highloadblock");

		$this->prepareParams();
	}

	private function prepareParams()
	{
		$request = Context::getCurrent()->getRequest();

		$this->iElementId = $request->getQuery("id");
	}

	/**
	 * Возвращает массив свойств элемента для справки документа
	 */
	public function getDocumentReference()
	{
		if (!$this->iElementId) {
			return ["message" => "No ID."];
		}

		// Получаем рубрики
		$aRubrics = Helper::getElementHighloadBlock('b_hlbd_rubric');

		$aElement = current(
			Helper::getIblockElements(
				86400,
				"document_reference_" . $this->iElementId,
				[],
				["ID" => $this->iElementId],
				false,
				["nTopCount" => 1],
				[
					"ID",
					"IBLOCK_SECTION_ID",
					"IBLOCK_ID",
				]
			)
		);

		$aSection = SectionTable::getList(
			[
				"select" => ["NAME"],
				"filter" => [
					"IBLOCK_ID" => $aElement["IBLOCK_ID"],
					"ID" => $aElement["IBLOCK_SECTION_ID"]
				],
				"cache" => [
					"ttl" => 86400
				],
			]
		)->fetch();

		$aElement["CATEGORY_NAME"] = $aSection["NAME"];

		if ($aElement) {
			// Собираем массив файлов
			foreach ($aElement["WORD"]["VALUE"] as $iFileId) {
				$aFile = \CFile::GetFileArray($iFileId);

				$aElement["FILES"][] = [
					"ID" => $iFileId,
					"SRC" =>  $_SERVER['HTTP_HOST'] . $aFile["SRC"],
					"NAME" => $aFile["ORIGINAL_NAME"],
					"FILE_SIZE" => $aFile["FILE_SIZE"]
				];
			}

			foreach ($aElement["PDF"]["VALUE"] as $iFileId) {
				$aFile = \CFile::GetFileArray($iFileId);

				$aElement["FILES"][] = [
					"ID" => $iFileId,
					"SRC" =>  $_SERVER['HTTP_HOST'] . $aFile["SRC"],
					"NAME" => $aFile["ORIGINAL_NAME"],
					"FILE_SIZE" => $aFile["FILE_SIZE"]
				];
			}

			// Добавляем информацию о рубриках
			if (is_array($aElement["RUBRIC"]["VALUE"])) {
				foreach ($aElement["RUBRIC"]["VALUE"] as $sRubricId) {
					$aElement["RUBRIC"]["DATA"][] = $aRubrics[$sRubricId];
				}
			} else {
				$aElement["RUBRIC"]["DATA"][] = $aRubrics[$aElement["RUBRIC"]["VALUE"]];
			}

			return $aElement;
		}

		return [];
	}
}