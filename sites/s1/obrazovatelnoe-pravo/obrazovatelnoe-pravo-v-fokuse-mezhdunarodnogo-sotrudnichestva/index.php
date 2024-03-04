<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Образовательное право в фокусе международного сотрудничества");
?> 
<div style="text-align: justify;">Источником материалов для данного раздела является блог <a href="http://edlaw-international.blogspot.ru" >&quot;Право на образование в фокусе международного сотрудничества</a>&quot;, который ведет специалист Центра Смирнова Мария Владимировна, кандидат юридических наук, магистр права (LLM) Университета г. Эксетера (Великобритания) по специальности Международные стандарты прав человека. В 2013 году Смирнова М. В. прошла стажировку в Совете по правам человека ООН в Женеве, где принимала участие в организации проведения и в подготовке отчета о 23-й сессии Совета, а также в Департаменте образования Совета Европы в Страсбурге. В своем блоге Смирнова М. В. рассказывает об актуальных тенденциях международного сотрудничества в сфере образования, о деятельности Совета Европы и уставных и договорных органов ООН, специализированных агентств, иных межгосударственных организаций, а также неправительственных организаций по вопросам правового регулирования и реализации права на образование в мире и в России.</div>
 
<div style="text-align: justify;"> 
  <br />
 </div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"analiticalist",
	Array(
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "obraz_pravo",
		"IBLOCK_ID" => "27",
		"NEWS_COUNT" => "50",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE" => array(0=>"DATE_TEXT",1=>"AUTHOR",2=>"",),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "detail.php?ELEMENT_ID=#ELEMENT_ID#",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => $_REQUEST["SECTION_ID"],
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => "modern",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?>  <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>