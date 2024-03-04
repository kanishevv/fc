<?php

use Local\Api\Category;
use Local\Interfaces\IRouter;

class RouterGetCategoryList extends IRouter
{

	public function run()
	{
		$oCategory = new Category();
		$this->sendResponse($oCategory->getResponseArray());
	}
}