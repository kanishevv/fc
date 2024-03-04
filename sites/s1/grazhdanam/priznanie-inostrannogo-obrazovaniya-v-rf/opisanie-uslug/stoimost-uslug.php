<?
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "стоимость");
$APPLICATION->SetPageProperty("description", "стоимость");
$APPLICATION->SetTitle("Стоимость услуг, связанных с признанием документов об образовании");
?><p>
 <b>Стоимость услуг, связанных с признанием документов об образовании и (или) квалификации, выданных учебными заведениями иностранных государств:</b>
</p>
<p>
 <br>
</p>
<p>
</p>
<div class="textjust">
	<p>
 <span style="font-size: 13px;">стоимость услуг по получению </span><span style="font-size: 13px;">Свидетельства о признании </span>иностранного образования и (или) иностранной квалификации – 5000 руб.;
	</p>
	<p>
 <br>
	</p>
	<p>
		 стоимость услуг по получению Заключения о признании иностранного образования и (или) иностранной квалификации в силу закона – 4000 руб.;
	</p>
</div>
<p>
 <u><br>
 </u>
</p>
<p>
 <u>Дополнительно оплачиваются: </u>
</p>
<p>
 <br>
</p>
<p>
	 госпошлина <span style="font-size: 13px;">за выдачу Свидетельства о признании иностранного образования и (или) иностранной квалификации -</span><span style="font-size: 13px;"> <span style="font-size: 10pt;">6500</span> руб.</span>
</p>
<p>
 <span style="font-size: 13px;"><i>(</i></span><i>подпункт 49 пункта 1 статьи 333.33 Налогового кодекса Российской Федерации</i><i>)</i>
</p>
<p>
 <br>
</p>
<p>
	 госпошлина за оформление Заключения о признании иностранного образования и (или) иностранной квалификации в силу закона не взимается.
</p>
<p>
</p>
<p>
</p>
<p>
</p>
<p>
 <i><br>
 </i>
</p>
<p>
</p>
 <b><a href="/upload/Vlad/Квитанция%20для%20оплаты(2).docx">Квитанция для оплаты услуг по договору</a></b><br>
   <br>
 По вопросам признания иностранного образования Вы можете проконсультироваться по телефону 8 (499) 753-50-50<br>
 <br>
 <br>
 <b><a href="/grazhdanam/priznanie-inostrannogo-obrazovaniya-v-rf/opisanie-uslug/">Назад к меню</a><br>
 </b><br>
 К<span style="font-size: 13px;">ак к нам добраться:</span>
<p>
 <br>
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
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>