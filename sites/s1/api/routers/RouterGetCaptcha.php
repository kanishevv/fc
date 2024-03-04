<?php

use Local\Interfaces\IRouter;

class RouterGetCaptcha extends IRouter
{
    public function run()
    {
		global $APPLICATION;
		$sCapthaSid = $APPLICATION->CaptchaGetCode();

		$this->sendResponse([
			"captcha_sid" => $sCapthaSid,
			"img_src" => "/bitrix/tools/captcha.php?captcha_sid=$sCapthaSid",
		]);
    }
}
