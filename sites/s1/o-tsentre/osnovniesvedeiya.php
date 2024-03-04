<?
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class="list"><b>Почтовый адрес:</b> <br>
 Россия, 115419, г. Москва, <br>
 ул. Орджоникидзе д. 3, каб. 132<br>
 <b><br>
 </b><b>Местонахождение:</b> <br>
 Россия, Москва, <br>
 ул. Орджоникидзе, д.3, подъезд 2, этаж 1. <br>
 <b><br>
 </b><b>Телефоны:</b> <br>
 тел: (495) 221-04-47 <br>
 тел: (495) 955-07-61
<p>
	 E-mail: <a href="mailto:info@fcoz.ru">info@fcoz.ru</a><br>
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
);?><br>
    <br></div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>