<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arResult
 */

use Bitrix\Main\Localization\Loc;

?>

<form class="feedback-form form js-ajax-form" action="<?= $arResult["FORM_ACTION"] ?>" method="post">
	<? echo bitrix_sessid_post(); ?>

    <div class="feedback-form__row">
        <div class="feedback-form__field form__field feedback-form__field--wide">
            <div class="input">
                <div class="input__wrapper">
                    <input id="CODE" type="text" name="CONFIRM_CODE"
                           value="<? echo $arResult["REQUEST"]["CONFIRM_CODE"]; ?>" required/>
                    <span class="feedback-form__field-invalid"><?= Loc::getMessage("FILL_FIELD") ?></span>
                    <label for="CODE"><?= Loc::getMessage("LABEL_CODE") ?></label>
                </div>
            </div>
        </div>
    </div>

    <div class="feedback-form__row">
        <a title="<? echo GetMessage("adm_send_code") ?>"
           href="<? echo $arResult["FORM_ACTION"] ?>?ID=<? echo $arResult["ID"] ?>&amp;action=sendcode&amp;<? echo bitrix_sessid_get() ?>"><?= Loc::getMessage("LABEL_RETRY_SEND") ?></a>
    </div>

    <input type="hidden" name="ID" value="<? echo $arResult["ID"]; ?>"/>

    <input class="feedback-form__subscribe-button" type="submit" name="confirm"
           value="Подтвердить"/>
</form>

