<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arResult
 */
?>

<form class="feedback-form form js-ajax-form" action="<?= $arResult["FORM_ACTION"] ?>" method="post">
	<? echo bitrix_sessid_post(); ?>

    <div class="feedback-form__row">
        <div class="feedback-form__field form__field feedback-form__field--wide">
            <div class="input">
                <div class="input__wrapper">
                    <input id="email" type="text" name="EMAIL"
                           value="<?= $arResult["SUBSCRIPTION"]["EMAIL"] != "" ? $arResult["SUBSCRIPTION"]["EMAIL"] : $arResult["REQUEST"]["EMAIL"]; ?>"
                           size="30" maxlength="255" required/>
                    <span class="feedback-form__field-invalid"><?= Loc::getMessage("FILL_FIELD") ?></span>
                    <label for="email"><?= Loc::getMessage("EMAIL_TITLE") ?></label>
                </div>
            </div>
        </div>
    </div>

    <div class="feedback-form__row feedback-form__row--last">
        <?php foreach ($arResult["RUBRICS"] as $itemID => $itemValue) { ?>
            <div class="feedback-form__field feedback-form__field--small-padding form__field feedback-form__field--privacy mb-8">
                <input id="RUB-<?= $itemValue["ID"] ?>" type="checkbox" name="RUB_ID[]" class="checkbox"
                       value="<?= $itemValue["ID"] ?>"<?php if ($itemValue["CHECKED"]) echo " checked" ?>>
                <label for="RUB-<?= $itemValue["ID"] ?>"><?= $itemValue["NAME"] ?></label>
            </div>
        <?php } ?>
    </div>

    <input type="hidden" name="FORMAT" value="html"/>

	<?php
    if($arResult["SUBSCRIPTION"]["CONFIRMED"] === "Y" && $arResult["SUBSCRIPTION"]["ACTIVE"] === "N") { ?>
        <input type="hidden" name="action" value="activate" />
	<?php } else { ?>
        <input type="hidden" name="PostAction"
               value="<?php echo($arResult["ID"] > 0 ? "Update" : "Add") ?>"/>
    <?php } ?>

    <input type="hidden" name="ID" value="<?php echo $arResult["SUBSCRIPTION"]["ID"]; ?>"/>

	<? if ($_REQUEST["register"] == "YES"): ?>
        <input type="hidden" name="register" value="YES"/>
	<? endif; ?>
	<? if ($_REQUEST["authorize"] == "YES"): ?>
        <input type="hidden" name="authorize" value="YES"/>
	<? endif; ?>

    <div class="modal__right-cont">
        <input class="feedback-form__subscribe-button" type="submit" name="Save"
               value="<?= Loc::getMessage("BUTTON_SUBSCRIBE") ?>"/>
    </div>
</form>

