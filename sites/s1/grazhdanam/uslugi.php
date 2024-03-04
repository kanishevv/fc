<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Платные юридические услуги, образовательное законадательство");
$APPLICATION->SetPageProperty("description", "юридические услуги для ВУЗа или учебного центра");
$APPLICATION->SetTitle("Консультационные и экспертные услуги");
?><div>
	<p>
		Федеральный центр образовательного законодательства оказывает консультационные и экспертные услуги по вопросам применения законодательства в сфере образования, в том числе по вопросам:
	</p>
	<ul class="page-ul-list page-ul-list--no-padding page-ul-list--dash">
		<li>реализации прав и обязанностей обучающихся и их родителей (законных представителей);</li>
		<li>реализации прав и обязанностей педагогических, руководящих и иных работников организаций, осуществляющих образовательную деятельность;</li>
		<li>создания, реорганизации, ликвидации образовательных организаций;</li>
		<li>соответствия учредительных документов, локальных нормативных актов образовательных организаций действующему законодательству;</li>
		<li>компетенции, прав, обязанностей и ответственности образовательных организаций;</li>
		<li>особенностей реализации некоторых видов образовательных программ и получения образования отдельными категориями обучающихся, определенных ФЗ «Об образовании в Российской Федерации»;</li>
		<li>лицензирования и государственной аккредитации образовательной деятельности;</li>
		<li>образовательной деятельности за счет физических и юридических лиц.</li>
	</ul>
	<p>
		По вопросам признания иностранного образования <br>
		 Вы можете проконсультироваться по тел.: 8 (495) 955-07-61
	</p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(0=>"ZOOM",1=>"MINIMAP",2=>"TYPECONTROL",3=>"SCALELINE",),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.710523291941605;s:10:\"yandex_lon\";d:37.602252780426014;s:12:\"yandex_scale\";i:17;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.601810699861;s:3:\"LAT\";d:55.710474643919;s:4:\"TEXT\";s:99:\"Федеральный центр образовательного законодательства\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);?>
</div><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>