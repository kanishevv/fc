<?php

namespace Sprint\Migration;


use Bitrix\Main\Loader;

class createEvLexedDailySubscribe20211201121216 extends Version
{
	protected $description = "";

	protected $moduleVersion = "3.29.3";

	public function up()
	{
		if (Loader::includeModule('subscribe')) {
			$oRubric = new \CRubric();

			if (empty(\CRubric::GetList([], ["CODE" => "ev_lexed_daily"])->Fetch())) {
				if ($oRubric->Add([
						"NAME" => "Мероприятия",
						"CODE" => "ev_lexed_daily",
						"SORT" => "600",
						"LID" => "s1",
						"ACTIVE" => "Y",
						"DESCRIPTION" => "Новые мероприятия за день",
						"AUTO" => "Y",
						"VISIBLE" => "Y",
						"LAST_EXECUTED" => ConvertTimeStamp(),
						"FROM_FIELD" => "service@fcoz.ru",
						"DAYS_OF_WEEK" => "1,2,3,4,5,6,7",
						"TIMES_OF_DAY" => "23:00",
						"TEMPLATE" => "local/php_interface/subscribe/templates/evLexedDaily",
						"SITE_ID" => "s1"
					]) === false) {
					echo $oRubric->LAST_ERROR . PHP_EOL;
				};
			} else {
				echo "Уже существует" . PHP_EOL;
			}
		}
	}

	public function down()
	{
		//your code ...
	}
}