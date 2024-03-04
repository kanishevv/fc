<? use Bitrix\Main\Context;
use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder() . '/themes/' . $arParams['TEMPLATE_THEME'] . '/colors.css',
	'TEMPLATE_CLASS' => 'bx-' . $arParams['TEMPLATE_THEME']
);

if (isset($templateData['TEMPLATE_THEME'])) {
	$this->addExternalCss($templateData['TEMPLATE_THEME']);
}
$this->addExternalCss("/bitrix/css/main/bootstrap.css");
$this->addExternalCss("/bitrix/css/main/font-awesome.css");
$request = Context::getCurrent()->getRequest();
$sName = $arParams["FILTER_NAME"] . "_NAME";
$sDocNumber = $arParams["FILTER_NAME"] . "_DOC";
$sOnlyName = $arParams["FILTER_NAME"] . "_ONLY_NAME";

$assetManager = new Local\Util\Assets();
?>

<div class="search-smart-filter">
    <form id="<? echo $arParams["FILTER_NAME"] . "_form" ?>"
          name="<? echo $arParams["FILTER_NAME"] . "_form" ?>"
          action="<?= "search.php" ?>"
          method="get"
          class="search-smart-filter__rows form search-form search-form--documents search-form--documents--no-wrap">

        <input type="hidden" name="LAST_FILTER" id="<?= $arResult["FILTER_NAME"] ?>_LAST_FILTER"
               value="<?= $arParams["FILTER_NAME"] ?>"/>

        <div class="search-smart-filter__row">
            <div class="form__field">
                <div class="input">
                    <div class="input__wrapper">
                        <input
                                class="filter__field"
                                type="text"
                                name="<?= $sName ?>"
                                id="<?= $sName ?>"
                                value="<?= $request[$sName] ?: "" ?>"
                                placeholder='<?= $arParams["SEARCH_PLACEHOLDER"] ?: "Поиск по названию, по тексту" ?>'
                                size="5"
                                <?= $arParams["SEARCH_NAME"] !== "Y" ? "autofocus" : "" ?>
                        />
                    </div>
                </div>
            </div>
        </div>

		<?php if ($arParams["SEARCH_NAME"] === "Y") { ?>
            <div class="search-smart-filter__row">
                <div class="form__field">
                    <div class="input">
                        <div class="input__wrapper">
                            <input
                                    class="filter__field"
                                    id="<?= $sDocNumber ?>"
                                    type="text"
                                    name="<?= $sDocNumber ?>"
                                    value="<?= htmlspecialchars($request->get($sDocNumber)) ?>"
                                    placeholder="Номер документа"
                                    autofocus
                            />
                        </div>
                    </div>
                </div>
            </div>
		<?php } ?>

		<?php
		foreach ($arResult["ITEMS"] as $key => $arItem) {
			$arCur = current($arItem["VALUES"]);
			switch ($arItem["DISPLAY_TYPE"]) {
				case "P": //DROPDOWN
					$checkedItemExist = false;
					?>
                    <div class="search-smart-filter__row">
                        <div class="form__field">
							<?php
							$controlNameAlt = current($arItem["VALUES"])["CONTROL_NAME_ALT"] ?: "DOCTYPE";
							?>
                            <select name="<?= $controlNameAlt ?>" data-is-search="true">
                                <option value=""><?= $arItem["NAME"] ?></option>
								<?php foreach ($arItem["VALUES"] as $aValue) { ?>
                                    <option value="<?= $aValue["HTML_VALUE_ALT"] ?>"
                                            name="<?= $aValue["CONTROL_NAME_ALT"] ?>"
                                            id="<?= $aValue["CONTROL_ID"] ?>"
										<?= $aValue["CHECKED"] ? " selected " : "" ?>>
										<?= $aValue['VALUE'] ?>
                                    </option>
								<?php } ?>
                            </select>
                        </div>
                    </div>
					<?
					break;
				case "U"://CALENDAR
					?>
                    <div class="search-smart-filter__row">
                        <div class="form__field form__field--small">
                            <div class="input">
                                <div class="input__wrapper">
                                    <input id="<?= $arItem["CODE"] ?>"
                                           type="text"
                                           name="<?= $arItem["CODE"] ?>"
                                           class="form__date"
                                           value="<?= $request[$arItem["CODE"]] ?>"
                                           placeholder="<?= Loc::getMessage("DATE_PLACEHOLDER") ?>"/>
                                    <style>

                                        .input__wrapper {
                                            position: relative;
                                        }

                                        .calendar-icon {
                                            position: absolute !important;
                                            right: 10px;
                                            top: 10px;
                                        }
                                    </style>
                                    <script>
                                        $('.form__date').on('click', function () {
                                            $(this).children('.calendar-icon').click();
                                        });
                                    </script>
				                    <?php $APPLICATION->IncludeComponent(
					                    'bitrix:main.calendar',
					                    'calendar',
					                    array(
						                    'FORM_NAME' => $arResult["FILTER_NAME"] . "_form",
						                    'SHOW_INPUT' => 'N',
						                    'INPUT_ADDITIONAL_ATTR' => 'onkeyup="smartFilter.keyup(this)" onchange="smartFilter.keyup(this)"',
						                    'INPUT_NAME' => $arItem["CODE"],
						                    'INPUT_VALUE' => $request[$arItem["CODE"]],
						                    'SHOW_TIME' => 'N',
						                    'HIDE_TIMEBAR' => 'Y',
					                    ),
					                    null,
					                    array('HIDE_ICONS' => 'Y')
				                    ); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form__field form__field--small">
                            <div class="input">
                                <div class="input__wrapper">
                                    <input id="<?= $arItem["VALUES"]["MIN"]["CONTROL_ID"] ?>"
                                           type="text"
                                           name="<?= $arItem["VALUES"]["MIN"]["CONTROL_NAME"] ?>"
                                           class="form__date"
                                           value="<?= $arItem["VALUES"]["MIN"]["HTML_VALUE"] ?>"
                                           placeholder="<?= Loc::getMessage("DATE_FROM") ?>"/>
                                    <style>

                                        .input__wrapper {
                                            position: relative;
                                        }

                                        .calendar-icon {
                                            position: absolute !important;
                                            right: 10px;
                                            top: 10px;
                                        }
                                    </style>
                                    <script>
                                        $('.form__date').on('click', function () {
                                            $(this).children('.calendar-icon').click();
                                        })
                                    </script>
									<?php $APPLICATION->IncludeComponent(
										'bitrix:main.calendar',
										'calendar',
										array(
											'FORM_NAME' => $arResult["FILTER_NAME"] . "_form",
											'SHOW_INPUT' => 'N',
											'INPUT_ADDITIONAL_ATTR' => 'onkeyup="smartFilter.keyup(this)" onchange="smartFilter.keyup(this)"',
											'INPUT_NAME' => $arItem["VALUES"]["MIN"]["CONTROL_NAME"],
											'INPUT_VALUE' => $arItem["VALUES"]["MIN"]["HTML_VALUE"],
											'SHOW_TIME' => 'N',
											'HIDE_TIMEBAR' => 'Y',
										),
										null,
										array('HIDE_ICONS' => 'Y')
									); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form__field form__field--small">
                            <div class="input">
                                <div class="input__wrapper">
                                    <input id="<?= $arItem["VALUES"]["MAX"]["CONTROL_ID"] ?>"
                                           type="text"
                                           name="<?= $arItem["VALUES"]["MAX"]["CONTROL_NAME"] ?>"
                                           class="form__date"
                                           value="<?= $arItem["VALUES"]["MAX"]["HTML_VALUE"] ?>"
                                           placeholder="<?= Loc::getMessage("DATE_TO") ?>"/>
									<?php $APPLICATION->IncludeComponent(
										'bitrix:main.calendar',
										'calendar',
										array(
											'FORM_NAME' => $arResult["FILTER_NAME"] . "_form",
											'SHOW_INPUT' => 'N',
											'INPUT_ADDITIONAL_ATTR' => 'onkeyup="smartFilter.keyup(this)" onchange="smartFilter.keyup(this)"',
											'INPUT_NAME' => $arItem["VALUES"]["MAX"]["CONTROL_NAME"],
											'INPUT_VALUE' => $arItem["VALUES"]["MAX"]["HTML_VALUE"],
											'SHOW_TIME' => 'N',
											'HIDE_TIMEBAR' => 'Y',
										),
										null,
										array('HIDE_ICONS' => 'Y')
									); ?>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
					break;
			}
		}
		?>

        <div class="search-smart-filter__row search-smart-filter__row--space-between search-smart-filter__row--no-margin-bottom">
            <input
                    class="search-form__btn-submit button--middle"
                    type="submit"
                    id="set_filter"
                    name="set_filter"
                    value="<?= GetMessage("CT_BCSF_SET_FILTER") ?>"
            />
            <input
                    class="button button--middle button--white del_filter"
                    type="button"
                    id="del_filter"
                    name="del_filter"
                    value="<?= GetMessage("CT_BCSF_DEL_FILTER") ?>"
                    data-form-id="<? echo $arParams["FILTER_NAME"] . "_form" ?>"
            />
        </div>
        <div class="clb"></div>
    </form>
</div>
<script type="text/javascript">
    var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
</script>
