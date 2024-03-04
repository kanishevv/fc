<?php

use Local\Interfaces\IRouter;
use Local\Search\Search;

class RouterSearch extends IRouter
{
	public function run()
	{
		$oSearch = new Search();
		$arResult = $oSearch->getElementArray();

		$this->sendResponse($arResult);
	}
}
