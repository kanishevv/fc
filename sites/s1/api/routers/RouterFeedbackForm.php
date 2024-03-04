<?php

use Local\Api\FormHandlers;
use Local\Interfaces\IRouter;

class RouterFeedbackForm extends IRouter
{
    public function run()
    {
		$this->sendResponse(FormHandlers::feedbackFormHandler($_POST, $_FILES, true));
    }
}
