<?php

namespace Local\Base;

use Local\Api\Actions;

class Load
{
	/**
	 * Инициирует классы
	 *
	 * @return void
	 */
	public function initClasses()
	{
		$GLOBALS["ACTIONS"] = new Actions();
	}

}