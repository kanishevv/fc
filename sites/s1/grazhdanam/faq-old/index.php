<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("ОТВЕТЫ НА ВОПРОСЫ");
?><? $APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list",
		"tree2",
		array(
			"VIEW_MODE" => "LINE",
			"SHOW_PARENT_NAME" => "Y",
			"IBLOCK_TYPE" => "faq",
			"IBLOCK_ID" => "18",
			"SECTION_ID" => $_REQUEST["SECTION_ID"],
			"SECTION_CODE" => "",
			"SECTION_URL" => "",
			"COUNT_ELEMENTS" => "Y",
			"TOP_DEPTH" => "1",
			"SECTION_FIELDS" => array(
				0 => "",
				1 => "",
			),
			"SECTION_USER_FIELDS" => array(
				0 => "",
				1 => "",
			),
			"ADD_SECTIONS_CHAIN" => "Y",
			"CACHE_TYPE" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_GROUPS" => "Y"
		),
		false
	); ?> <? $APPLICATION->IncludeComponent(
			"bitrix:support.faq",
			"template1",
			array(
				"IBLOCK_TYPE" => "faq",
				"IBLOCK_ID" => "18",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "3600",
				"CACHE_GROUPS" => "Y",
				"AJAX_MODE" => "N",
				"SEF_MODE" => "Y",
				"SHOW_RATING" => "N",
				"PATH_TO_USER" => "",
				"SECTION" => "-",
				"EXPAND_LIST" => "Y",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"SEF_FOLDER" => "/faq/",
				"SEF_URL_TEMPLATES" => array(
					"section" => "#SECTION_ID#/",
					"detail" => "#SECTION_ID#/#ELEMENT_ID#"
				),
				"VARIABLE_ALIASES" => array(
					"section" => array(),
					"detail" => array(),
				)
			),
			false,
			array(
				'ACTIVE_COMPONENT' => 'N'
			)
		); ?>
<p><a href="/grazhdanam/faq/arkhiv-voprosov.php" target="_blank">Перейти в архив</a></p>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>