<?php

namespace Local\Validation\Rule;

use Rakit\Validation\Rule;

/**
 * Проверка чек бокса соглашения
 */
class Privacy extends Rule
{
	public function check($value): bool
	{
		return $value == true;
	}
}