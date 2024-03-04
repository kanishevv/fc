<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Текущие конкурсы");
?><p>
        На текущий момент конкурсов нет
    </p>
    <hr>
    <div class="content-title content-title--center content-title--margin-bottom-32">Прошедшие конкурсы</div>
<?php
// Прошедшие конкурсы
$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	[
		"AREA_FILE_SHOW" => "file",
		"PATH" => "proshedshie-konkursy.php",
		"EDIT_TEMPLATE" => ""
	]
);
?>