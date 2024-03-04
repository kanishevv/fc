<?php

namespace Local\Search;

use Bitrix\Main\Context;
use Bitrix\Main\Diag\Debug;
use Bitrix\Main\Request;
use CIBlockResult;
use CModule;
use CSearch;
use Local\Base\Helper;
use CIBlockElement;
use Bitrix\Main\Application;
use Bitrix\Main\Data\Cache;

class Search
{
	/**
	 * @var string Текст запроса
	 */
	private $sQueryText = "";

	/**
	 * @var string Символьный код инфоблока для выборки
	 */
	private $sIblockCode = "";

	/**
	 * @var int Кол-во элементов на странице
	 */
	private $iPageElementCount = 5;

	/**
	 * @var array Фильтр для поиска
	 */
	private $aSearchFilter = [];

	/**
	 * @var string Имя элемента
	 */
	private $sElementName;

	/**
	 * @var string Вид документа
	 */
	private $sElementType;

	/**
	 * @var string Принявший орган
	 */
	private $sElementAcceptor;

	/**
	 * @var int Дата от (timestamp)
	 */
	private $iElementTimestampFrom;

	/**
	 * @var int Дата до (timestamp)
	 */
	private $iElementTimestampTo;

	/**
	 * @var array XML_ID рубрики
	 */
	private $aElementRubric;

	/**
	 * @var int id раздела
	 */
	private $iElementSectionId;

	/**
	 * @var array Фильтр для элементов
	 */
	private $aElementFilter = [];

	/**
	 * @var string ID кэша элементов
	 */
	private $sCacheId;

	/**
	 * @var CSearch|CIBlockResult Объект поиска
	 */
	private $oSearch;

	/**
	 * @var int Номер страницы
	 */
	private $iPageNum;

	/**
	 * @var bool Активность
	 */
    private $bActive;

	/**
	 * @var string Направление сортировки asc/desc
	 */
    private $sSortDirection = 'asc';

	/**
	 * @var string Поле для сортировки
	 */
    private $sSortField;

    /**
     * @var bool Поиск по названию документа
     */
    private $bSearchByName = false;

    /**
     * @var Cache Экземпляр битрикс кеша
     */
    private $cacheInstance;

	public function __construct()
	{
		CModule::IncludeModule("search");
		CModule::IncludeModule("iblock");

		$this->prepareParams();
	}

	/**
	 * Подготовка параметров
	 */
	private function prepareParams()
	{
		$request = Context::getCurrent()->getRequest();

		$this->sQueryText = $request->getQuery("q");
		$this->sIblockCode = $request->getQuery("iblockCode");
		$this->iElementSectionId = $request->getQuery("section");
		$this->sElementName = $request->getQuery("name");
		$this->sElementType = $request->getQuery("type");
		$this->sElementAcceptor = $request->getQuery("acceptor");
		$this->aElementRubric = $request->getQuery("rubric");
		$this->iElementTimestampFrom = (int)$request->getQuery("timeFrom");
		$this->iElementTimestampTo = (int)$request->getQuery("timeTo");
		$this->iPageNum = (int)$request->getQuery("PAGEN_1") ?: 1;
        $this->bActive = $request->getQuery("active");
        $this->sSortField = $request->getQuery("sortField");
        $this->sSortDirection = $request->getQuery("sortDirection");
        $this->bSearchByName = $request->getQuery('searchByName') ? true : false;

		if ((int)$request->getQuery("elementCount") > 0) {
			$this->iPageElementCount = (int)$request->getQuery("elementCount");
		}

		$this->setCacheId($request);
	}

	private function setCacheId(Request $request) {
		if (
			!$request->getQuery("q")
			&& !$request->getQuery("name")
			&& !$request->getQuery("timeFrom")
			&& !$request->getQuery("timeTo")
		) {
			$this->sCacheId = $request->getRequestUri();
		}
	}

	/**
	 * Устанавливает фильтр для получения элементов инфоблока
	 * @throws \Bitrix\Main\LoaderException
	 */
	private function setElementFilter()
	{
		$this->aElementFilter = [];

		if ($this->sElementName) {
			$this->aElementFilter["NAME"] = "%$this->sElementName%";
		}

		if ($this->sElementType) {
			$this->aElementFilter["=PROPERTY_DOCTYPE_VALUE"] = $this->sElementType;
		}

		if ($this->sElementAcceptor) {
			$this->aElementFilter["=PROPERTY_ACCEPTOR_VALUE"] = $this->sElementAcceptor;
		}

		if ($this->iElementTimestampFrom && $this->iElementTimestampTo) {
			$this->aElementFilter["><PROPERTY_DATE_PRIN"] = [
				ConvertDateTime(
					ConvertTimeStamp($this->iElementTimestampFrom),
					"YYYY-MM-DD"
				),
				ConvertDateTime(
					ConvertTimeStamp($this->iElementTimestampTo),
					"YYYY-MM-DD"
				)
			];
		} elseif ($this->iElementTimestampFrom) {
			$this->aElementFilter[">=PROPERTY_DATE_PRIN"] = ConvertDateTime(
				ConvertTimeStamp($this->iElementTimestampFrom),
				"YYYY-MM-DD"
			);
		} elseif ($this->iElementTimestampTo) {
			$this->aElementFilter["<=PROPERTY_DATE_PRIN"] = ConvertDateTime(
				ConvertTimeStamp($this->iElementTimestampTo),
				"YYYY-MM-DD"
			);
		}

		if ($this->aElementRubric) {
			$this->aElementFilter["PROPERTY_RUBRIC"] = $this->aElementRubric;
		}

		if ($this->iElementSectionId) {
			$this->aElementFilter["IBLOCK_SECTION_ID"] = $this->iElementSectionId;
		}

		if ($this->sIblockCode) {
			$this->aElementFilter["IBLOCK_ID"] = Helper::getIblockId($this->sIblockCode);
		} else {
			$this->aElementFilter["IBLOCK_ID"] = [
				Helper::getIblockId("content_faq"),
				Helper::getIblockId("prav_base"),
				Helper::getIblockId("sudebnaya-praktika")
			];
		}

        if ($this->bActive) {
            $this->aElementFilter["ACTIVE"] = "Y";
        }

		if ($this->sQueryText && !$this->bSearchByName) {
            $this->aElementFilter["SEARCHABLE_CONTENT"] = "%{$this->sQueryText}%";
        } else if ($this->sQueryText && $this->bSearchByName) {
            $this->aElementFilter['ID'] = array_merge(
                $this->aElementFilter['ID'] ?? [],
                $this->preSearch($this->sQueryText)
            );
        }
	}

	/**
	 * Устанавливает объект поиска
	 * @throws \Bitrix\Main\LoaderException
	 */
	private function setSearchObject()
	{
		$this->setElementFilter();

        if ($this->sSortField) {
            $oOrder = [
                $this->sSortField => $this->sSortDirection,
            ];
        } else {
            $oOrder = [
                "PROPERTY_DATE_PRIN" => "DESC",
                "ID" => "DESC"
            ];
        }
		$this->oSearch = CIBlockElement::GetList(
            $oOrder,
			$this->aElementFilter,
			false,
			[
				"nPageSize" => $this->iPageElementCount,
				"iNumPage" => $this->iPageNum,
			]
		);
	}

    /**
     * Возвращает массив с ID элементов, найденных по строке из индекса
     * @param string $query
     * @return array
     */
    public function preSearch(string $query): array
    {
        $res = [-1];
        $cacheId = base64_encode($query);
        $this->cacheInstance = Cache::createInstance();
        if ($this->cacheInstance->initCache(604800, $cacheId)) {
            return $this->cacheInstance->getVars()[$cacheId];
        } else {
            $connection = Application::getConnection();
            $helper = $connection->getSqlHelper();
            $words = explode(' ', trim($query));
            $ftsQuery = '';
            $likeQuery = '';
            foreach ($words as $word) {
                if (mb_strlen($word) > 3 && !mb_strpos($word, '-')) {
                    $ftsQuery .= '+' . $word . ' ';
                } else {
                    $likeQuery .= '%' . $word;
                }
            }
            $sanitizedFts = $helper->forSql($ftsQuery);
            $sanitizedLike = $helper->forSql($likeQuery . '%');
            $req = "SELECT UF_ELEMENT_ID FROM docname_fts where MATCH(UF_NAME) AGAINST('{$sanitizedFts}' IN BOOLEAN MODE) AND UF_NAME LIKE '{$sanitizedLike}';";
            $search = $connection->query($req);
            while ($item = $search->fetch()) {
                if (is_numeric($item['UF_ELEMENT_ID'])) {
                    $res[] = $item['UF_ELEMENT_ID'];
                }
            }
            $this->cacheInstance->initCache(604800, $cacheId);
            $this->cacheInstance->endDataCache($res);
            return $res;
        }
    }

	/**
	 * Возвращает массив элементов
	 * @return array|void
	 * @throws \Bitrix\Main\LoaderException
	 */
	public function getElementArray()
	{
		$arResult = [];

		if (!$this->oSearch) {
			$this->setSearchObject();
		}

		if ($this->oSearch->errorno != 0) {
			$arResult = ShowError($this->oSearch->error);
		} else {
			while ($oElement = $this->oSearch->GetNextElement()) {
				$arRow = $oElement->GetFields();
				$arRow["PROPERTIES"] = $oElement->GetProperties();

				if ($arRow["IBLOCK_ID"]) {
					$aIblockInfo = Helper::getIblockInfo($arRow["IBLOCK_ID"]);
					$sIblockType = $aIblockInfo["IBLOCK_TYPE_ID"] ?: "null";
				}

				if ($arRow["IBLOCK_ID"] == Helper::getIblockId("content_faq")) {
					$sTitle = $arRow["PREVIEW_TEXT"];
					$sTitleStrip = strip_tags($arRow["~PREVIEW_TEXT"]);
				} else {
					$sTitle = $this->getTitleFromElement($arRow, $aIblockInfo);
					$sTitleStrip = strip_tags($sTitle);
				}

				$arResult[$arRow["PARAM1"] ?? $sIblockType][] = [
					"id" => $arRow["ID"],
					"title" => $sTitle ?: $arRow["NAME"],
					"title_strip" => $sTitleStrip,
					"description" => mb_strimwidth(
						strip_tags($arRow["PREVIEW_TEXT"]),
						0,
						200,
						"..."
					),
					"url" => str_replace(
							"#SITE_DIR#/",
							SITE_DIR,
							str_replace(
								"#ELEMENT_ID#",
								$arRow["ID"],
								$arRow["DETAIL_PAGE_URL"]
							)
						),
					"date_from" => $arRow["ACTIVE_FROM"],
					"date_to" => $arRow["ACTIVE_TO"],
					"full_date_change" => $arRow["TIMESTAMP_X"],
					"date_change" => ConvertTimeStamp(MakeTimeStamp($arRow["TIMESTAMP_X"])),
					"properties" => $arRow["PROPERTIES"]
				];
			}
		}
		$arResult["data"]["count"] = (int)$this->oSearch->NavRecordCount;
		$arResult["data"]["pageCount"] = (int)$this->oSearch->NavPageCount;
		$arResult["data"]["pageNumber"] = (int)$this->oSearch->NavPageNomer;
		$arResult["data"]["pageSize"] = (int)$this->oSearch->NavPageSize;

		return $arResult;
	}

	/**
	 * Возвращает кол-во элементов для текущего запроса по инфоблокам
	 * @return array
	 * @throws \Bitrix\Main\LoaderException
	 */
	public function getElementsCountByIblock($aIblockIds = [])
	{
		if (!$this->aElementFilter) {
			$this->setElementFilter();
		}

		if ($aIblockIds) {
			$this->aElementFilter["IBLOCK_ID"] = $aIblockIds;
		}

		$oCounts = CIBlockElement::GetList(
			[],
			$this->aElementFilter,
			["IBLOCK_ID"]
		);

		$aCounts = [];
		while ($aCount = $oCounts->Fetch()) {
			$aCounts[$aCount["IBLOCK_ID"]] = $aCount["CNT"];
		}

		$aCounts["ALL"] = array_sum($aCounts);

		return $aCounts;
	}

	/**
	 * Получает элементы
	 * @param int $iElementsCount кол-во элементов
	 * @return array
	 * @throws \Bitrix\Main\LoaderException
	 */
	public function getElements(int $iElementsCount = 10)
	{
		if (!$this->oSearch) {
			$this->iPageElementCount = $iElementsCount;
			$this->setSearchObject();
		}

		$aElements = [];

		while ($oItem = $this->oSearch->GetNextElement()) {
			$aFields = $oItem->GetFields();
			$aProperties = $oItem->GetProperties();
			$aElements[$aFields["ID"]] = array_merge($aFields, $aProperties);
		}

		$aElements["NAV_RESULT"] = $this->oSearch;

		return $aElements;
	}

	/**
	 * Получает заголовок из элемента
	 * @param array $aItem массив элемента, свойства должны находится в $aItem["PROPERTIES"]
	 * @param array $aIblockInfo инфа о инфоблоке элемента, нужен только $aIblockInfo["CODE"]
	 * @return string
	 */
	private function getTitleFromElement(array $aItem, array $aIblockInfo) {
		$sItemTitle = "";

		if ($sDocType = $aItem["PROPERTIES"]["DOCTYPE"]["VALUE"]) {
			$sItemTitle .= $sDocType . "<br>";
		}

		if ($sAcceptor = $aItem["PROPERTIES"]["ACCEPTOR"]["VALUE"]) {
			$sItemTitle .= $sAcceptor;
		}

		if ($sDatePrin = $aItem["PROPERTIES"]["DATE_PRIN"]["VALUE"]) {
			$sDatePrin = mb_strtolower(FormatDate("d F Y", MakeTimeStamp($sDatePrin)));
			$sItemTitle .= " <span class='search-result__item-date'>от {$sDatePrin} г.";

			if (!$aItem["NAME"] || $aIblockInfo["CODE"] !== "prav_base") {
				$sItemTitle .= "</span>";
			}
		}

		if ($aItem["NAME"] && $aIblockInfo["CODE"] === "prav_base") {
			$sItemTitle .= " №{$aItem["NAME"]}";

			if ($aItem["PROPERTIES"]["DATE_PRIN"]["VALUE"]) {
				$sItemTitle .= "</span>";
			}
		} elseif ($sName = $aItem["NAME"]) {
			$sItemTitle .= " {$sName}";

			if ($aItem["PROPERTIES"]["DATE_PRIN"]["VALUE"]) {
				$sItemTitle .= "</span>";
			}
		}

		if ($aItem["PROPERTIES"]["DATE_PUB"]["VALUE"] && $aIblockInfo["CODE"] !== "prav_base") {
			$sDatePublication = $aItem["PROPERTIES"]["DATE_PUB"]["VALUE"];
			$aItem["DATE_PUBLICATION"] = FormatDate("d F Y", MakeTimeStamp($sDatePublication)) . " г.";
		} elseif ($aItem["PROPERTIES"]["DATE_REVISION"]["VALUE"] && $aIblockInfo["CODE"] === "prav_base") {
			// Правовая база
			$sDate = FormatDate(
				"d F Y",
				MakeTimeStamp($aItem["PROPERTIES"]["DATE_REVISION"]["VALUE"])
			);
			$aItem["DATE_PUBLICATION"] = "Документ в редакции от $sDate г.";
		}

		return trim($sItemTitle);
	}
}
