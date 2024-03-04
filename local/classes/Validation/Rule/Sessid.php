<?php

namespace Local\Validation\Rule;

use Rakit\Validation\Rule;

/**
 * Проврка bitrix_sessid
 */
class Sessid extends Rule
{
	public function check($value): bool
	{
		return $value === bitrix_sessid();
	}
}