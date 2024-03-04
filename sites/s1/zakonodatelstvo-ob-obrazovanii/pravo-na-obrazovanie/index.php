<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Право на образование в фокусе международного сотрудничества");
$APPLICATION->SetPageProperty("keywords", "Право на образование в фокусе международного сотрудничества");
$APPLICATION->SetPageProperty("description", "Право на образование в фокусе международного сотрудничества");
$APPLICATION->SetTitle("Право на образование в фокусе международного сотрудничества");
?><div>
	<div style="text-align: justify;">
		<p>
			 Источником материалов для данного раздела является блог <a href="http://edlaw-international.blogspot.ru" target="_blank">"Право на образование в фокусе международного сотрудничества</a>", который ведет&nbsp;Смирнова Мария Владимировна, кандидат юридических наук.
		</p>
 <br>
		<p>
			 Смирнова М. В. получила степень&nbsp;магистра права (LLM) Университета г. Эксетера (Великобритания) по специальности Международные стандарты прав человека. В 2013 году прошла стажировку в Совете по правам человека ООН в Женеве, где принимала участие в организации проведения и в подготовке отчета о 23-й сессии Совета, а также в Департаменте образования Совета Европы в Страсбурге. С 2017 года работает в Совете ООН по правам человека.
		</p>
 <br>
		<p>
			 В своем блоге Смирнова М. В. рассказывает об актуальных тенденциях международного сотрудничества в сфере образования, о деятельности Совета Европы и уставных и договорных органов ООН, специализированных агентств, иных межгосударственных организаций, а также неправительственных организаций по вопросам правового регулирования и реализации права на образование в мире и в России.
		</p>
 <br>
 <br>
		<a href="/zakonodatelstvo-ob-obrazovanii/pravo-na-obrazovanie/rezolyutsii/index.php" title="Перейти в список подразделов"><b>Резолюции Совета ООН по правам человека о праве на образование</b><br>
 </a> <br>
 <br>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"analiticalist",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "detail.php?ELEMENT_ID=#ELEMENT_ID#",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => "",
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "practice",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"NEWS_COUNT" => "50",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "modern",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"DATE_TEXT",1=>"AUTHOR",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC"
	)
);?>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>