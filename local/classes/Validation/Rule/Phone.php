<?php

namespace Local\Validation\Rule;

use Rakit\Validation\Rule;

/**
 * Проверка поля с номером телефона
 */
class Phone extends Rule
{
	public function check($value): bool
	{
		return preg_match("/^[\+\(\)\-\d\s]+$/", $value);
	}
}