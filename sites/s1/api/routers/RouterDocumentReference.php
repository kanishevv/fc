<?php

use Local\Interfaces\IRouter;
use Local\Search\DocumentReference;

class RouterDocumentReference extends IRouter
{
	public function run()
	{
		$oDocumentReference = new DocumentReference();
		$aResult = $oDocumentReference->getDocumentReference();

		$this->sendResponse($aResult);
	}
}