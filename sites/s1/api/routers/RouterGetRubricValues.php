<?php

use Local\Base\Helper;
use Local\Interfaces\IRouter;

class RouterGetRubricValues extends IRouter
{

	public function run()
	{
		$aRubrics = Helper::getElementHighloadBlock("b_hlbd_rubric");

		$this->sendResponse($aRubrics);
	}
}