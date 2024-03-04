<?php

namespace Local\Validation\Rule;

use Rakit\Validation\Rule;

/**
 * Проверка капчи
 */
class Captсha extends Rule
{
	public function __construct($sid)
	{
		$this->sid = $sid;
	}

	public function check($value): bool
	{
		global $USER;
		if ($USER->IsAdmin()) {
			return true;
		}

		global $APPLICATION;
		return $APPLICATION->CaptchaCheckCode($value, $this->sid);
	}
}