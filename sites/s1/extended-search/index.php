<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

/**
 * @global $APPLICATION
 */

use Bitrix\Main\Context;
use Bitrix\Main\Localization\Loc;
use \Local\Base\Helper;

$APPLICATION->SetTitle("Расширенный поиск");
$APPLICATION->SetPageProperty("title", 'Расширенный поиск');
$APPLICATION->AddChainItem("Расширенный поиск");
$APPLICATION->SetPageProperty("page_content_modify_class", "page__content--extended-search");
$assetManager = new Local\Util\Assets();
$request = Context::getCurrent()->getRequest();

$sTabs = "tab-prav-base";
$sTabPrav = "tab-prav-base-req";
$sTabRegion = "tab-region-base-req";
$sTabSud = "tab-sudebnaya-praktika-req";
$sTabFaq = "tab-content-faq-req";

if ($request->get("LAST_FILTER")) {
	switch ($request->get("LAST_FILTER")) {
        case "aFilterPrav":
            $sTabs = "tab-prav-base";
            break;
        case "aFilterFaq":
            $sTabs = "tab-3";
            break;
        case "aFilterSud":
            $sTabs = "sudebnaya-praktika";
            break;
    }
}

if ($request->get("LAST_FILTER")) {
	$sName = $request->get("LAST_FILTER") . "_NAME";
	$sNum = $request->get("LAST_FILTER") . "_DOC";
}
?>

<div class="row">
	<div class="col-xs-12 col-md-4">
		<div class="tabs tabs--vertical">
			<a href="#0" class="tabs__item js-tab-select <?= $sTabs === "tab-prav-base" ? "tabs__item_selected" : "" ?>"
				data-content="tab-prav-base"
				data-tabs-id="tabs">
				<svg class="tabs__icon icon">
					<use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') . "#search-f" ?>"></use>
				</svg>
				<span class="tabs-item__text">Нормативные правовые акты</span>
			</a>

			<a href="#0" class="tabs__item js-tab-select <?= $sTabs === "tab-3" ? "tabs__item_selected" : "" ?>"
				data-content="tab-3"
				data-tabs-id="tabs">
				<svg class="tabs__icon icon">
					<use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') . "#search-q" ?>"></use>
				</svg>
				<span class="tabs-item__text">Вопросы и ответы</span>
			</a>

			<!-- <a href="#0" class="tabs__item js-tab-select <?= $sTabs === "tab-region-base" ? "tabs__item_selected" : "" ?>"
				data-content="tab-region-base"
				data-tabs-id="tabs">
				<svg class="tabs__icon icon">
					<use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') . "#search-n" ?>"></use>
				</svg>
				<span class="tabs-item__text">Региональная база</span>
			</a> -->

			<a href="#0" class="tabs__item js-tab-select <?= $sTabs === "sudebnaya-praktika" ? "tabs__item_selected" : "" ?>"
				data-content="sudebnaya-praktika"
				data-tabs-id="tabs">
				<svg class="tabs__icon icon">
					<use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') . "#search-l" ?>"></use>
				</svg>
				<span class="tabs-item__text">Судебные акты</span>
			</a>
		</div>
	</div>
	<div class="col-xs-12 col-md-8">
		<!-- Правовая база -->
		<div id="tab-prav-base" class="tabs--normal-style js-tab <?= $sTabs === "tab-prav-base" ? "js-tab--active" : "" ?>" data-tabs-id="tabs">

			<div class="tabs tabs--margin-bottom-16">
				<div class="tabs__cont">
					<a href="#0" class="tabs__item js-tab-select <?= $sTabPrav === "tab-prav-base-req" ? "tabs__item_selected" : "" ?>"
					data-content="tab-prav-base-req"
					data-tabs-id="tab-prav-base">
						<span class="tabs-item__text"><?= Loc::getMessage("TITLE_SEARCH_REC") ?></span>
					</a>

					<a href="#0" class="tabs__item js-tab-select <?= $sTabPrav === "tab-prav-base-theme" ? "tabs__item_selected" : "" ?>"
					data-content="tab-prav-base-theme"
					data-tabs-id="tab-prav-base">
						<span class="tabs-item__text"><?= Loc::getMessage("TITLE_SEARCH_THEME") ?></span>
					</a>

					<a href="#0" class="tabs__item js-tab-select <?= $sTabPrav === "tab-prav-base-rubric" ? "tabs__item_selected" : "" ?>"
					data-content="tab-prav-base-rubric"
					data-tabs-id="tab-prav-base">
						<span class="tabs-item__text"><?= Loc::getMessage("TITLE_SEARCH_RUBRIC") ?></span>
					</a>
				</div>
			</div>

			<!-- Реквизиты -->
			<div id="tab-prav-base-req" class="tabs__tab tabs__tab--min-height js-tab <?= $sTabPrav === "tab-prav-base-req" ? "js-tab--active" : "" ?>" data-tabs-id="tab-prav-base">
				<?php
				$APPLICATION->IncludeComponent(
					"bitrix:catalog.smart.filter",
					"extended-search",
					array(
						"COMPONENT_TEMPLATE" => "extended-search",
						"IBLOCK_TYPE" => "",
						"IBLOCK_ID" => Helper::getIblockId('prav_base'),
						"SECTION_ID" => "",
						"SECTION_CODE" => "",
						"PREFILTER_NAME" => "preFilterPrav",
						"FILTER_NAME" => "aFilterPrav",
						"TEMPLATE_THEME" => "",
						"FILTER_VIEW_MODE" => "",
						"DISPLAY_ELEMENT_COUNT" => "Y",
						"SEF_MODE" => "N",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => 36000000,
						"CACHE_GROUPS" => "Y",
						"SAVE_IN_SESSION" => "N",
						"PAGER_PARAMS_NAME" => "arrPager",
						"XML_EXPORT" => "N",
						"SECTION_TITLE" => "-",
						"SECTION_DESCRIPTION" => "-",
						"SEARCH_NAME" => "Y",
						"EXACT_SEARCH_CHECKBOX" => "Y",
					),
					false
				);
				?>
			</div>

			<!-- Тематика -->
			<div id="tab-prav-base-theme" class="tabs__tab tabs__tab--min-height js-tab <?= $sTabPrav === "tab-prav-base-theme" ? "js-tab--active" : "" ?>" data-tabs-id="tab-prav-base">
				<?php
				$APPLICATION->IncludeComponent(
					"bitrix:catalog.section.list",
					"tree",
					array(
						"IBLOCK_TYPE" => "",
						"IBLOCK_ID" => Helper::getIblockId('prav_base'),
						"SECTION_ID" => "",
						"SECTION_CODE" => "",
						"COUNT_ELEMENTS" => "Y",
						"TOP_DEPTH" => "100",
						"SECTION_FIELDS" => array(
							0 => "",
							1 => "",
						),
						"SECTION_USER_FIELDS" => array(
							0 => "",
							1 => "",
						),
						"SECTION_URL" => "search.php?IBLOCK_ID=#IBLOCK_ID#&SECTION_ID=#SECTION_ID#",
						"CACHE_TYPE" => "Y",
						"CACHE_TIME" => "36000",
						"CACHE_GROUPS" => "Y",
						"ADD_SECTIONS_CHAIN" => "N"
					),
					false
				);
				?>
			</div>

			<!-- Рубрика -->
			<div id="tab-prav-base-rubric" class="tabs__tab tabs__tab--min-height js-tab <?= $sTabPrav === "tab-prav-base-rubric" ? "js-tab--active" : "" ?>" data-tabs-id="tab-prav-base">
				<?php
				$APPLICATION->IncludeComponent(
					"kanishev:main.rubrics",
					"",
					[
						"DETAIL_LINK" => "search.php",
						"TABLE_NAME" => "",
						"IBLOCK_ID" => Helper::getIblockId('prav_base'),
						"CACHE_TIME" => 86400
					]
				)
				?>
			</div>

		</div>

		<!-- Судебная база -->
		<div id="sudebnaya-praktika" class="tabs--normal-style js-tab <?= $sTabs === "sudebnaya-praktika" ? "js-tab--active" : "" ?>" data-tabs-id="tabs">

			<div class="tabs tabs--margin-bottom-16">
				<div class="tabs__cont">
					<a href="#0" class="tabs__item js-tab-select <?= $sTabSud === "tab-sudebnaya-praktika-req" ? "tabs__item_selected" : "" ?>"
					data-content="tab-sudebnaya-praktika-req"
					data-tabs-id="tab-sudebnaya-praktika">
						<span class="tabs-item__text"><?= Loc::getMessage("TITLE_SEARCH_REC") ?></span>
					</a>

					<a href="#0" class="tabs__item js-tab-select <?= $sTabSud === "tab-sudebnaya-praktika-theme" ? "tabs__item_selected" : "" ?>"
					data-content="tab-sudebnaya-praktika-theme"
					data-tabs-id="tab-sudebnaya-praktika">
						<span class="tabs-item__text"><?= Loc::getMessage("TITLE_SEARCH_THEME") ?></span>
					</a>

					<a href="#0" class="tabs__item js-tab-select <?= $sTabSud === "tab-sudebnaya-praktika-rubric" ? "tabs__item_selected" : "" ?>"
					data-content="tab-sudebnaya-praktika-rubric"
					data-tabs-id="tab-sudebnaya-praktika">
						<span class="tabs-item__text"><?= Loc::getMessage("TITLE_SEARCH_RUBRIC") ?></span>
					</a>
				</div>
			</div>

			<!-- Реквизиты -->
			<div id="tab-sudebnaya-praktika-req" class="tabs__tab tabs__tab--min-height js-tab <?= $sTabSud === "tab-sudebnaya-praktika-req" ? "js-tab--active" : "" ?>" data-tabs-id="tab-sudebnaya-praktika">
				<?php
				$APPLICATION->IncludeComponent(
					"bitrix:catalog.smart.filter",
					"extended-search",
					array(
						"COMPONENT_TEMPLATE" => "extended-search",
						"IBLOCK_TYPE" => "",
						"IBLOCK_ID" => Helper::getIblockId('sudebnaya-praktika'),
						"SECTION_ID" => "",
						"SECTION_CODE" => "",
						"PREFILTER_NAME" => "preFilterSud",
						"FILTER_NAME" => "aFilterSud",
						"TEMPLATE_THEME" => "",
						"FILTER_VIEW_MODE" => "",
						"DISPLAY_ELEMENT_COUNT" => "Y",
						"SEF_MODE" => "N",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => 36000000,
						"CACHE_GROUPS" => "Y",
						"SAVE_IN_SESSION" => "N",
						"PAGER_PARAMS_NAME" => "arrPager",
						"XML_EXPORT" => "N",
						"SECTION_TITLE" => "-",
						"SECTION_DESCRIPTION" => "-",
						"SEARCH_NAME" => "Y",
						"EXACT_SEARCH_CHECKBOX" => "Y",
					),
					false
				);
				?>
			</div>

			<!-- Тематика -->
			<div id="tab-sudebnaya-praktika-theme" class="tabs__tab tabs__tab--min-height js-tab <?= $sTabSud === "tab-sudebnaya-praktika-theme" ? "js-tab--active" : "" ?>" data-tabs-id="tab-sudebnaya-praktika">
				<?php
				$APPLICATION->IncludeComponent(
					"bitrix:catalog.section.list",
					"tree",
					array(
						"IBLOCK_TYPE" => "",
						"IBLOCK_ID" => Helper::getIblockId('sudebnaya-praktika'),
						"SECTION_ID" => "",
						"SECTION_CODE" => "",
						"COUNT_ELEMENTS" => "Y",
						"TOP_DEPTH" => "100",
						"SECTION_FIELDS" => array(
							0 => "",
							1 => "",
						),
						"SECTION_USER_FIELDS" => array(
							0 => "",
							1 => "",
						),
						"SECTION_URL" => "search.php?IBLOCK_ID=#IBLOCK_ID#&SECTION_ID=#SECTION_ID#",
						"CACHE_TYPE" => "Y",
						"CACHE_TIME" => "36000",
						"CACHE_GROUPS" => "Y",
						"ADD_SECTIONS_CHAIN" => "Y"
					),
					false
				);
				?>
			</div>

			<!-- Рубрика -->
			<div id="tab-sudebnaya-praktika-rubric" class="tabs__tab tabs__tab--min-height js-tab <?= $sTabSud === "tab-sudebnaya-praktika-rubric" ? "js-tab--active" : "" ?>" data-tabs-id="tab-sudebnaya-praktika">
				<?php
				$APPLICATION->IncludeComponent(
					"kanishev:main.rubrics",
					"",
					[
						"DETAIL_LINK" => "search.php",
						"TABLE_NAME" => "",
						"IBLOCK_ID" => Helper::getIblockId('sudebnaya-praktika'),
						"CACHE_TIME" => 86400
					]
				)
				?>
			</div>

		</div>

		<!-- Вопросы и ответы -->
		<div id="tab-3" class="tabs--normal-style js-tab <?= $sTabs === "tab-3" ? "js-tab--active" : "" ?>" data-tabs-id="tabs">

			<div class="tabs tabs--margin-bottom-16">
				<div class="tabs__cont">
					<a href="#0" class="tabs__item js-tab-select <?= $sTabFaq === "tab-content-faq-req" ? "tabs__item_selected" : "" ?>"
					data-content="tab-content-faq-req"
					data-tabs-id="tab-content-faq">
						<span class="tabs-item__text"><?= Loc::getMessage("SEARCH_TITLE_TAB") ?></span>
					</a>

					<a href="#0" class="tabs__item js-tab-select <?= $sTabFaq === "tab-content-faq-rubric" ? "tabs__item_selected" : "" ?>"
					data-content="tab-content-faq-rubric"
					data-tabs-id="tab-content-faq">
						<span class="tabs-item__text"><?= Loc::getMessage("TITLE_SEARCH_RUBRIC") ?></span>
					</a>
				</div>
			</div>

			<!-- Реквизиты -->
			<div id="tab-content-faq-req" class="tabs__tab tabs__tab--min-height js-tab <?= $sTabFaq === "tab-content-faq-req" ? "js-tab--active" : "" ?>" data-tabs-id="tab-content-faq">
				<?php
				$APPLICATION->IncludeComponent(
					"bitrix:catalog.smart.filter",
					"extended-search",
					array(
						"COMPONENT_TEMPLATE" => "extended-search",
						"IBLOCK_TYPE" => "",
						"IBLOCK_ID" => Helper::getIblockId('content_faq'),
						"SECTION_ID" => "",
						"SECTION_CODE" => "",
						"PREFILTER_NAME" => "preFilterFaq",
						"FILTER_NAME" => "aFilterFaq",
						"TEMPLATE_THEME" => "",
						"FILTER_VIEW_MODE" => "",
						"DISPLAY_ELEMENT_COUNT" => "Y",
						"SEF_MODE" => "N",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => 36000000,
						"CACHE_GROUPS" => "Y",
						"SAVE_IN_SESSION" => "N",
						"PAGER_PARAMS_NAME" => "arrPager",
						"XML_EXPORT" => "N",
						"SECTION_TITLE" => "-",
						"SECTION_DESCRIPTION" => "-",
						"SEARCH_PLACEHOLDER" => "ЕГЭ, поступление, горячее питание"
					),
					false
				);
				?>
			</div>

			<!-- Рубрика -->
			<div id="tab-content-faq-rubric" class="tabs__tab tabs__tab--min-height js-tab <?= $sTabFaq === "tab-content-faq-rubric" ? "js-tab--active" : "" ?>" data-tabs-id="tab-content-faq">
				<?php
				$APPLICATION->IncludeComponent(
					"kanishev:main.rubrics",
					"",
					[
						"DETAIL_LINK" => "search.php",
						"TABLE_NAME" => "",
						"IBLOCK_ID" => Helper::getIblockId('content_faq'),
						"CACHE_TIME" => 86400
					]
				)
				?>
			</div>

		</div>

		<!-- Региональная база -->
		<div id="tab-region-base" class="tabs--normal-style js-tab <?= $sTabs === "tab-region-base" ? "js-tab--active" : "" ?>" data-tabs-id="tabs">

			<div class="tabs tabs--margin-bottom-16">
				<div class="tabs__cont">
					<a href="#0" class="tabs__item js-tab-select <?= $sTabRegion === "tab-region-base-req" ? "tabs__item_selected" : "" ?>"
					data-content="tab-region-base-req"
					data-tabs-id="tab-region-base">
						<span class="tabs-item__text"><?= Loc::getMessage("TITLE_SEARCH_REC") ?></span>
					</a>

					<a href="#0" class="tabs__item js-tab-select <?= $sTabFaq === "tab-region-base-rubric" ? "tabs__item_selected" : "" ?>"
					data-content="tab-region-base-rubric"
					data-tabs-id="tab-region-base">
						<span class="tabs-item__text"><?= Loc::getMessage("TITLE_SEARCH_RUBRIC") ?></span>
					</a>

				</div>
			</div>

			<!-- Реквизиты -->
			<div id="tab-region-base-req" class="tabs__tab tabs__tab--min-height js-tab <?= $sTabRegion === "tab-region-base-req" ? "js-tab--active" : "" ?>" data-tabs-id="tab-region-base">
				<?php
				$APPLICATION->IncludeComponent(
					"bitrix:catalog.smart.filter",
					"extended-search",
					array(
						"COMPONENT_TEMPLATE" => "extended-search",
						"IBLOCK_TYPE" => "",
						"IBLOCK_ID" => Helper::getIblockId('regional_base'),
						"SECTION_ID" => "",
						"SECTION_CODE" => "",
						"PREFILTER_NAME" => "preFilterRegion",
						"FILTER_NAME" => "aFilterRegion",
						"TEMPLATE_THEME" => "",
						"FILTER_VIEW_MODE" => "",
						"DISPLAY_ELEMENT_COUNT" => "Y",
						"SEF_MODE" => "N",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => 36000000,
						"CACHE_GROUPS" => "Y",
						"SAVE_IN_SESSION" => "N",
						"PAGER_PARAMS_NAME" => "arrPager",
						"XML_EXPORT" => "N",
						"SECTION_TITLE" => "-",
						"SECTION_DESCRIPTION" => "-",
						"SEARCH_NAME" => "Y",
					),
					false
				);
				?>
			</div>

			<!-- Рубрика -->
			<div id="tab-region-base-rubric" class="tabs__tab tabs__tab--min-height js-tab <?= $sTabRegion === "tab-region-base-rubric" ? "js-tab--active" : "" ?>" data-tabs-id="tab-region-base">
				<?php
				$APPLICATION->IncludeComponent(
					"kanishev:main.rubrics",
					"",
					[
						"DETAIL_LINK" => "search.php",
						"TABLE_NAME" => "",
						"IBLOCK_ID" => Helper::getIblockId('regional_base'),
						"CACHE_TIME" => 86400
					]
				)
				?>
			</div>

		</div>
	</div>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
