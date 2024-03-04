<?php

namespace Local\Events;

use Bitrix\Main\Loader;
use CSubscription;

class SubscribeHandlers
{
	function BeforePostingSendMailHandler($arFields)
	{
		Loader::includeModule("subscribe");

		$rsSub = CSubscription::GetByEmail($arFields["EMAIL"]);
		$arSub = $rsSub->Fetch();

		$arFields["BODY"] = str_replace("#MAIL_ID#", $arSub["ID"], $arFields["BODY"]);

		return $arFields;
	}
}