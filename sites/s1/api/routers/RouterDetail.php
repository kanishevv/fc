<?php

use Local\Interfaces\IRouter;
use Local\Search\Detail;

class RouterDetail extends IRouter
{
    public function run()
    {
        $oDetail = new Detail();
		$aElement = $oDetail->getElement();

		$this->sendResponse($aElement);
    }
}
