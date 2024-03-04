<?php


use Bitrix\Main\Context;
use Bitrix\Main\Web\Uri;

class CKanishevComponentSearchResult extends \CBitrixComponent
{
	public function executeComponent()
	{
		$oSearch = new Local\Search\Search();
		$this->arResult["ITEMS"] = $oSearch->getElements();
		$this->setNav();
		$this->setUrl();
		$this->arResult["COUNTS"] = $oSearch->getElementsCountByIblock(
			$this->arParams["IBLOCKS"]
		);

		$this->includeComponentTemplate();
	}

	/**
	 * Установить объект навигации
	 */
	private function setNav()
	{
		if ($this->arResult["ITEMS"]["NAV_RESULT"]) {
			$this->arResult["NAV_RESULT"] = $this->arResult["ITEMS"]["NAV_RESULT"];

			$nPageWindow = 5;
			if (
				$this->arResult["NAV_RESULT"]->NavPageNomer > floor($nPageWindow / 2) + 1
				&& $this->arResult["NAV_RESULT"]->NavPageCount > $nPageWindow
			) {
				$nStartPage = $this->arResult["NAV_RESULT"]->NavPageNomer - floor($nPageWindow / 2);
			} else {
				$nStartPage = 1;
			}

			if (
				$this->arResult["NAV_RESULT"]->NavPageNomer <= $this->arResult["NAV_RESULT"]->NavPageCount - floor($nPageWindow / 2)
				&& $nStartPage + $nPageWindow - 1 <= $this->arResult["NAV_RESULT"]->NavPageCount
			) {
				$nEndPage = $nStartPage + $nPageWindow - 1;
			} else {
				$nEndPage = $this->arResult["NAV_RESULT"]->NavPageCount;
				if ($nEndPage - $nPageWindow + 1 >= 1) {
					$nStartPage = $nEndPage - $nPageWindow + 1;
				}
			}

			$this->arResult["NAV_RESULT"]->nStartPage = $nStartPage;
			$this->arResult["NAV_RESULT"]->nEndPage = $nEndPage;

			unset($this->arResult["ITEMS"]["NAV_RESULT"]);

			$this->arResult["NAV_STRING"] = $this->arResult["NAV_RESULT"]->GetPageNavString(
				$this->arParams["PAGER_TITLE"] ?: "Страницы",
				$this->arParams["PAGER_TEMPLATE"] ?: "",
				false,
				$this
			);
		}
	}

	private function setUrl()
	{
		$request = Context::getCurrent()->getRequest();

		$sUri = $request->getRequestUri();
		$oUri = new Uri($sUri);

		$this->arResult["URL"] = $oUri->getUri();
	}
}