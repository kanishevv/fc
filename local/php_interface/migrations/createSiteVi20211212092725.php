<?php

namespace Sprint\Migration;


use Bitrix\Main\SiteTable;
use Bitrix\Main\SiteTemplateTable;

class createSiteVi20211212092725 extends Version
{
	protected $description = "Создаёт сайт для слабовидящих";

	protected $moduleVersion = "3.29.3";

	public function up()
	{
		$aS3 = SiteTable::getList(["filter" => ["LID" => "s3"]])->fetch();
		if ($aS3) {
			echo "Сайт s3 уже существует!";
			return false;
		}

		SiteTable::add([
			"LID" => "s3",
			"SORT" => "3",
			"DEF" => "N",
			"ACTIVE" => "Y",
			"NAME" => "Версия для слабовидящих",
			"DIR" => "/vi",
			"LANGUAGE_ID" => "ru",
			"DOC_ROOT" => "",
			"DOMAIN_LIMITED" => "N",
			"SERVER_NAME" => "fcoz.ru",
			"SITE_NAME" => "Федеральный центр образовательного законодательства",
			"EMAIL" => "service@fcoz.ru",
			"CULTURE_ID" => "1",
		]);

		$aSiteTemplate = SiteTemplateTable::getList(["filter" => ["TEMPLATE" => "main_copy"]])->fetch();
		if ($aSiteTemplate) {
			$aSiteTemplate["SITE_ID"] = "s3";
			SiteTemplateTable::update($aSiteTemplate["ID"], $aSiteTemplate);
		} else {
			SiteTemplateTable::add([
				"SITE_ID" => "s3",
				"CONDITION" => "",
				"SORT" => "1",
				"TEMPLATE" => "main_copy",
			]);
		}

		return true;
	}

	public function down()
	{
		//your code ...
	}
}
