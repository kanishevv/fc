<?php

namespace Sprint\Migration;


use Bitrix\Main\Loader;

class subscribeNewsAndEventsDailyUpdate20211203113025 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.29.3";

    public function up()
    {
	    if (Loader::includeModule('subscribe')) {
		    $oRubric = new \CRubric();
		    $aRubric = \CRubric::GetList([], ["CODE" => "news_and_events_daily"])->Fetch();
			$iId = $aRubric["ID"];

		    if ($iId > 0) {
				$aRubric["TIMES_OF_DAY"] = "15:45";
			    $oRubric->Update($iId, $aRubric);
		    }
	    }
    }

    public function down()
    {
        //your code ...
    }
}
