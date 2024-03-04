<?php

use Bitrix\Main\Localization\Loc;
use Local\Base\Helper;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

$assetManager = new Local\Util\Assets();
$sFileTypes = Helper::getFileTypes(["image", "docs"]);
?>

<div class="modal modal--feedback">
    <div class="modal__mask">
        <div class="modal__wrapper">
            <div class="modal__container modal__container--middle-padding">
                <button class="modal__close js-modal-feedback-close">
                    <?php $assetManager = new Local\Util\Assets(); ?>
                    <svg class="modal__close-icon icon">
                        <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#clear"></use>
                    </svg>
                </button>
                <div class="modal__header">
                    <?= Loc::getMessage("MFT_FEEDBACK_FORM_NAME") ?>
                </div>
                <div class="modal__body">
                    <?php if (!empty($arResult["ERROR_MESSAGE"])) {
                        foreach ($arResult["ERROR_MESSAGE"] as $v)
                            ShowError($v);
                    } ?>

                    <?php if ($arResult["OK_MESSAGE"] <> '') { ?>
                        <div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div>
                    <?php } ?>

                    <form id="feedback-form-modal" action="<?= SITE_DIR ?>?formAction=feedback" method="POST"
                          class="feedback-form form js-form" enctype="multipart/form-data">
                        <?= bitrix_sessid_post() ?>
                        <div class="feedback-form__row">
                            <div class="feedback-form__field form__field">
                                <div class="input">
                                    <div class="input__wrapper">
                                        <input id="lastname" type="text"
                                               placeholder=""
                                               name="user_last_name"
                                               value="<?= $arResult["AUTHOR_LAST_NAME"] ?>" required/>
                                        <span class="feedback-form__field-invalid" style="display: none;"><?= Loc::getMessage("FILL_FIELD") ?></span>
                                        <label for="lastname"><?= Loc::getMessage("MFT_LAST_NAME") ?> <?php if (empty($arParams["REQUIRED_FIELDS"]) || in_array("LAST_NAME", $arParams["REQUIRED_FIELDS"])) : ?>
                                                <span>*</span><?php endif ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-form__field form__field">
                                <div class="input">
                                    <div class="input__wrapper">
                                        <input id="firstname" type="text"
                                               placeholder=""
                                               name="user_first_name"
                                               value="<?= $arResult["AUTHOR_FIRST_NAME"] ?>" required/>
                                        <span class="feedback-form__field-invalid" style="display: none;"><?= Loc::getMessage("FILL_FIELD") ?></span>
                                        <label for="firstname"><?= Loc::getMessage("MFT_FIRST_NAME") ?> <?php if (empty($arParams["REQUIRED_FIELDS"]) || in_array("FIRST_NAME", $arParams["REQUIRED_FIELDS"])) : ?>
                                                <span>*</span><?php endif ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-form__field form__field">
                                <div class="input">
                                    <div class="input__wrapper">
                                        <input id="othername" type="text" name="user_other_name"
                                               value="<?= $arResult["AUTHOR_OTHER_NAME"] ?>"/>
                                        <label for="othername"><?= Loc::getMessage("MFT_MIDDLE_NAME") ?> <?php if (empty($arParams["REQUIRED_FIELDS"]) || in_array("OTHER_NAME", $arParams["REQUIRED_FIELDS"])) : ?>
                                                <span>*</span><?php endif ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-form__row">
                            <div class="feedback-form__field form__field">
                                <div class="input">
                                    <div class="input__wrapper">
                                        <input id="phone" type="tel" placeholder="" name="user_phone"
                                               value="<?= $arResult["AUTHOR_PHONE"] ?>"
                                               pattern="^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$"/>
                                        <span class="feedback-form__field-invalid" style="display: none;"><?= Loc::getMessage("INVALID_FORMAT") ?></span>
                                        <label for="phone"><?= Loc::getMessage("MFT_PHONE") ?> <?php if (empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])) : ?>
                                                <span>*</span><?php endif ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-form__field form__field">
                                <div class="input">
                                    <div class="input__wrapper">
                                        <input id="address" type="text" name="user_post_address"
                                               value="<?= $arResult["AUTHOR_POST_ADDRESS"] ?>"/>
                                        <label for="address"><?= Loc::getMessage("MFT_POST_ADDRESS") ?> <?php if (empty($arParams["REQUIRED_FIELDS"]) || in_array("POST_ADDRESS", $arParams["REQUIRED_FIELDS"])) : ?>
                                                <span>*</span><?php endif ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-form__field form__field">
                                <div class="input">
                                    <div class="input__wrapper">
                                        <input id="email" type="email" placeholder="" name="user_email"
                                               value="<?= $arResult["AUTHOR_EMAIL"] ?>"
                                               pattern="^.*@.*\..*$"
                                               required/>
                                        <span class="feedback-form__field-invalid" style="display: none;"><?= Loc::getMessage("INVALID_FORMAT") ?></span>
                                        <label for="email">Email <?php if (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])) : ?>
                                                <span>*</span><?php endif ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-form__row">
                            <div class="feedback-form__field form__field feedback-form__field--textarea">
                                <div class="input">
                                    <div class="input__wrapper">
                                        <textarea id="comment" rows="4" cols="45" name="text" maxlength="3500"
                                                  required><?= $arResult["MESSAGE"] ?></textarea>
                                        <span class="feedback-form__field-invalid" style="display: none;"><?= Loc::getMessage("FILL_FIELD") ?></span>
                                        <label for="comment"><?= Loc::getMessage("MFT_TEXT_MESSAGE") ?> <?php if (empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])) : ?>
                                                <span>*</span><?php endif ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="feedback-form__row">
                            <div class="feedback-form__field feedback-form__field--padding-left">
                                <div class="input__file-wrapper">
                                    <input name="file[]" type="file" multiple
                                           accept="<?= '.' . str_replace(',', ', .', $sFileTypes) ?>"
                                           class="input__file"
                                           id="form-file">
                                    <label for="form-file" class="input__file-label">
                                        <a class="input__file-button">
                                            <svg class="input__file-button-icon icon">
                                                <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') . "#iblock_law_about_education_selected" ?>"></use>
                                            </svg>
                                            <span class="input__file-button-text"><?= Loc::getMessage("FORM_FILE") ?></span>
                                        </a>
                                    </label>
                                    <div class="input__file-list"></div>
                                </div>
                            </div>
                        </div>

                        <?php if ($arParams["USE_CAPTCHA"] == "Y") { ?>
                            <div class="feedback-form__field feedback-form__field--padding-left">
                                <div class="captcha">
                                    <div class="captcha__info"><?= GetMessage("MFT_CAPTCHA") ?></div>
                                    <div class="captcha__inner">
                                        <input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>"
                                               id="captchaSid">
                                        <div class="captcha__left captcha__left--column">
                                            <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>"
                                                 class="captcha__img" width="180" height="40" alt="CAPTCHA" id="captchaImg">
                                            <a id="captchaLink"
                                               href="javascript:void(0);"><?= Loc::getMessage("CAPTCHA_REFRESH") ?></a>
                                        </div>
                                        <div class="captcha__right">
                                            <div class="captcha__input--wrapper">
                                                <input type="text" class="captcha__input" name="captcha_word" size="30"
                                                       maxlength="50" value=""
                                                       placeholder="<?= GetMessage("MFT_CAPTCHA_CODE") ?> *" required>
                                                <span class="feedback-form__field-invalid" style="display: none;"><?= Loc::getMessage("MFT_CAPTCHA_CODE") ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="feedback-form__row feedback-form__row--last">
                            <div class="feedback-form__field feedback-form__field--small-padding form__field feedback-form__field--privacy">
                                <input id="privacy" type="checkbox" name="privacy" class="checkbox" required>
                                <label for="privacy"><?= Loc::getMessage("MFT_PRIVACY") ?></label>
                            </div>
                            <div class="feedback-form__field feedback-form__field--small-padding form__field feedback-form__field--privacy">
                                <?= Loc::getMessage('MFT_REQUIRED') ?>
                            </div>
                        </div>

                        <div class="feedback-form__errors" style="color: red;"></div>
                    </form>
                </div>
                <div class="modal__footer">
                    <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
                    <button type="submit" form="feedback-form-modal" class="button button--large modal__submit">
                        <?= Loc::getMessage("MFT_SUBMIT") ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function clickDel(elem) {
        let dt = new DataTransfer();
        let input = document.getElementById($(elem).data('input-id'));
        let curFileName = $($(elem).parent()).find('.input__file-view-text:first').text();
        $.each(input.files, function (index, value) {
            if (value.name !== curFileName) {
                dt.items.add(value);
            }
        });

        input.files = dt.files;

        $(elem).parent().remove();
    }

    $(document).ready(function () {
        $('#captchaLink').click(function () {
            $.getJSON('<?=$this->__folder?>/reload_captcha.php', function (data) {
                $('#captchaImg').attr('src', '/bitrix/tools/captcha.php?captcha_sid=' + data);
                $('#captchaSid').val(data);
            });
            return false;
        });

        $('#form-file').on('change', function () {
            if (this.files.length >= 1) {
                let cont = $($(this).parent()).find('.input__file-list:first');
                cont.empty();

                $.each(this.files, function (index, value) {
                    cont.append(
                        `<a class="input__file-view">
                            <span class="input__file-view-text">` + value.name + `</span>
                            <svg class="input__file-view-icon icon" data-input-id="form-file" onclick="clickDel(this)">
                                <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') . "#close_dark" ?>"></use>
                            </svg>
                        </a>`
                    );
                });
            }
        });
    });
</script>
