<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Обращения граждан");
$APPLICATION->SetPageProperty("title", "Обращения граждан");
$APPLICATION->SetTitle("Обращения граждан");
$assetManager = new Local\Util\Assets();
?>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>