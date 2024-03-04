<?php
/**
 * @var $APPLICATION
 */

use Bitrix\Main\Context;
use Local\Base\Helper;

require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php";

$oRequest = Context::getCurrent()->getRequest();

$sTemplate = "section";
if ($oRequest->getQuery("RESULT") === "1" || $oRequest->getQuery("RESULT") === "0") {
	$sTemplate = "result";
}
?>

<?php
$APPLICATION->IncludeComponent(
	"kanishev:main.diploma",
	$sTemplate,
	[
		"IBLOCK_ID" => Helper::getIblockId("recognition_of_education"),
		"SECTION_ID" => $oRequest->getQuery("SECTION"),
		"COUNTRY_ID" => $oRequest->getQuery("COUNTRY"),
		"IS_NEED" => $oRequest->getQuery("RESULT") === "1",
		"CACHE_TIME" => 604800
	]
);
?>

<?php
require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php";