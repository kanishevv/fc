<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Все документы");

CModule::IncludeModule('iblock');

$db_enum_list = CIBlockProperty::GetPropertyEnum("DOCTYPE", array('VALUE' => 'ASC'), array('IBLOCK_ID' => 17));
while ($ar_enum_list = $db_enum_list->GetNext())
	$arDocType[] = $ar_enum_list;


$db_enum_list = CIBlockProperty::GetPropertyEnum("ACCEPTOR", array('VALUE' => 'ASC'), array('IBLOCK_ID' => 17));
while ($ar_enum_list = $db_enum_list->GetNext())
	$arAccType[] = $ar_enum_list;



if (trim($_REQUEST['q'])) {
	$start_time = microtime();

	$search_text = trim($_REQUEST['q']);

	$search_keywords = preg_split("/[\s,]+/", $search_text);
	foreach ($search_keywords as $key => $val) {
		if (strlen($val) >= 6 && !is_numeric($val))
			$search_keywords[$key] = mb_substr($val, 0, -2);
		else if (strlen($val) >= 4 && !is_numeric($val))
			$search_keywords[$key] = mb_substr($val, 0, -1);
	}
	if ($_GET['qwe'] == 3) {
		//echo '<pre>'; var_dump($search_keywords); die();
	}
	$new_search_arr["LOGIC"] = "OR";
	for ($i = 0; $i < 3; $i++) {
		switch ($i) {
			case 0:
				$cur_sep = ' ';
				break;
			case 1:
				$cur_sep = '(';
				break;
			case 2:
				$cur_sep = '"';
				break;
				/*case 3:
				$cur_sep = '\'';
			break;
			case 4:
				$cur_sep = '-';
			break;
			/*case 5:
				$cur_sep = '.';
			break;
			case 6:
				$cur_sep = ',';
				break;
			case 7:
			$cur_sep = '{';
				break;
			case 8:
				$cur_sep = '!';
			break;
			case 9:
				$cur_sep = '?';
			break;
			case 10:
				$cur_sep = ':';
			break;
			case 11:
				$cur_sep = ';';
			break;*/
		}
		$cur_search_str .= '%' . $cur_sep;
		foreach ($search_keywords as $key => $val) {

			$percent = '%';
			if ($key == 0)
				$cur_search_str .= $val . $percent;
			else
				$cur_search_str .= ' ' . $val . $percent;
		}
		if ($_REQUEST['in_name'])
			$new_search_arr[] = array("PREVIEW_TEXT" => $cur_search_str);
		else
			$new_search_arr[] = array("DETAIL_TEXT" => $cur_search_str);
		unset($cur_search_str);
	}
	if ($_GET['short_form'] == 1) {
		$new_search_arr[] = array("NAME" => '' . trim($_REQUEST['q']) . '');
		$new_search_arr[] = array("NAME" => '' . trim($_REQUEST['q']) . '-фз');
	}
	$GLOBALS['arrFilter'][] = $new_search_arr;
	/*if ($_REQUEST['in_name'])
		$GLOBALS['arrFilter']['PREVIEW_TEXT'] = '% '.trim($_REQUEST['q']).'%';
	else
		$GLOBALS['arrFilter']['SEARCHABLE_CONTENT'] = '% '.trim($_REQUEST['q']).'%';
		//$GLOBALS['arrFilter']['?SEARCHABLE_CONTENT'] = '%"'.trim($_REQUEST['q']).'% || % '.trim($_REQUEST['q']).'% || %('.trim($_REQUEST['q']).'% || %\''.trim($_REQUEST['q']).'% || %-'.trim($_REQUEST['q']).'% || %.'.trim($_REQUEST['q']).'% || %,'.trim($_REQUEST['q']).'% || %:'.trim($_REQUEST['q']).'% || %;'.trim($_REQUEST['q']).'% || %?'.trim($_REQUEST['q']).'% || %!'.trim($_REQUEST['q']).'%';
	*/
	if ($_GET['zxc'] == 1) {
		echo '<pre>';
		var_dump($new_search_arr);
		die();
	}
}

if (intval($_REQUEST['DOCTYPE'])) {
	$GLOBALS['arrFilter']['PROPERTY_DOCTYPE'] = intval($_REQUEST['DOCTYPE']);
}

if (intval($_REQUEST['ACCEPTOR'])) {
	$GLOBALS['arrFilter']['PROPERTY_ACCEPTOR'] = intval($_REQUEST['ACCEPTOR']);
}

if (trim($_REQUEST['REGN'])) {
	$GLOBALS['arrFilter'][] = array(
		"LOGIC" => "OR",
		array("NAME" => '%' . trim($_REQUEST['REGN']) . '%'),
		array("NAME" => '' . trim($_REQUEST['REGN']) . '-фз'),
	);
}

if (trim($_REQUEST['NOMER_MIN'])) {
	$GLOBALS['arrFilter']['PROPERTY_NOMER_MIN'] = '%' . trim($_REQUEST['NOMER_MIN']) . '%';
}

if (trim($_REQUEST['DATE'])) {
	$GLOBALS['arrFilter']['PROPERTY_DATE_PRIN'] = ConvertDateTime($_REQUEST['DATE'], "YYYY-MM-DD", "ru") . '%';
}

if (trim($_REQUEST['DATE_FROM'])) {
	$GLOBALS['arrFilter']['>=PROPERTY_DATE_PRIN'] = ConvertDateTime($_REQUEST['DATE_FROM'], "YYYY-MM-DD", "ru") . '%';
}

if (trim($_REQUEST['DATE_TO'])) {
	$GLOBALS['arrFilter']['<=PROPERTY_DATE_PRIN'] = ConvertDateTime($_REQUEST['DATE_TO'], "YYYY-MM-DD", "ru") . '%';
}

//print_r($GLOBALS['arrFilter']);


if (!empty($_GET)) :

?>


<? if ($_GET['qwe4'] == 1) {
		echo microtime() - $start_time . '<br/>';
	} ?>
<? $start_time2 = time(); ?>
<? $APPLICATION->IncludeComponent(
		"new_search:news.list",
		"docs",
		array(
			"IBLOCK_TYPE" => "law_about_education",
			"IBLOCK_ID" => "17",
			"NEWS_COUNT" => "25",
			"SORT_BY1" => "PROPERTY_DATE_PRIN",
			"SORT_ORDER1" => "DESC",
			"SORT_BY2" => "NAME",
			"SORT_ORDER2" => "DESC",
			"FILTER_NAME" => "arrFilter",
			"FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "DOCTYPE",
				2 => "",
			),
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"PREVIEW_TRUNCATE_LEN" => "",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "Y",
			// "PAGER_TEMPLATE" => "forsearch",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"PAGER_TITLE" => "Документы",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "Y",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"AJAX_OPTION_ADDITIONAL" => "",
			"COMPONENT_TEMPLATE" => "docs",
			"COMPOSITE_FRAME_MODE" => "A",
			"COMPOSITE_FRAME_TYPE" => "AUTO"
		),
		false
	); ?> 
<? if ($_GET['qwe4'] == 1) {
		echo time() - $start_time2 . '<br/>';
		die();
	} ?>
<?

endif;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>