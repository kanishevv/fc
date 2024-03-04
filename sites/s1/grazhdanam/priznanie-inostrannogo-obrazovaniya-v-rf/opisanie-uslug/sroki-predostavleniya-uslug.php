<?
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Сроки предоставления услуг, связанных с признанием документов об образовании");
$APPLICATION->SetPageProperty("description", "Сроки предоставления услуг, связанных с признанием документов об образовании");
$APPLICATION->SetTitle("Сроки предоставления услуг, связанных с признанием документов об образовании");
?><p>
 <b>Сроки оказания услуг, связанных с признанием документов об образовании и (или) квалификации:</b>
</p>
<p>
 <b><br>
 </b>
</p>
<p style="text-align: justify;">
</p>
 <span style="font-size: 13px; text-align: justify;">- предварительная экспертная оценка документов об образовании и (или) квалификации в Федеральном центре образовательного законодательства – 1-2 рабочих дня со дня поступления оплаты;<br>
 </span><span style="font-size: 13px; text-align: justify;">- получение официального Свидетельства о признании в ФГБУ «Главэкспертцентр» в среднем составляет 30 дней&nbsp;с момента подачи документов;</span><br>
 <span style="font-size: 13px; text-align: justify;">-&nbsp;</span><span style="font-size: 13px; text-align: justify;">получение Заключения о признании иностранного образования и (или) иностранной квалификации в силу закона в среднем составляет 14 дней&nbsp;с момента подачи документов.<br>
 </span><br>
<span style="font-size: 13px; text-align: justify;"><br>
 </span><span style="font-size: 13px; text-align: justify;">По вопросам признания&nbsp;иностранного образования в сокращенные сроки и по другим вопросам Вы можете проконсультироваться <br>
 </span><span style="font-size: 13px; text-align: justify;">по&nbsp;телефону&nbsp;8 (499) 753-50-50.<br>
 </span><span style="font-size: 13px; text-align: justify;"><br>
 </span><span style="font-size: 13px; text-align: justify;">Адрес электронной почты для направления документов на предварительную экспертизу:&nbsp;<a href="mailto:celmo@mail.ru">celmo@mail.ru</a><br>
 </span>
<p style="text-align: justify;">
</p>
<p style="text-align: justify;">
 <span style="font-size: 13px;"><i><br>
 </i></span>
</p>
<p style="text-align: justify;">
 <span style="font-size: 13px;"><i><br>
 </i></span>
</p>
<p style="text-align: justify;">
 <span style="font-size: 13px;"><b><a href="/grazhdanam/priznanie-inostrannogo-obrazovaniya-v-rf/opisanie-uslug/">Назад к меню</a></b><br>
 </span>
</p>
<p style="text-align: justify;">
 <span style="font-size: 13px;"><br>
 </span>
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
		"MAP_WIDTH" => "960",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>