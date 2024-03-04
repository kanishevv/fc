<?php

use Local\Api\EnumProperty;
use Local\Interfaces\IRouter;

class RouterGetListValues extends IRouter
{
	public function run()
	{
		$oEnumProperty = new EnumProperty();
		$aValues = $oEnumProperty->getResponseArray();

		$this->sendResponse($aValues);
	}
}