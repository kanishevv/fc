<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arResult
 */

use Bitrix\Main\Context;
use Bitrix\Main\Localization\Loc;

$request = Context::getCurrent()->getRequest();

$sVisible = "";
if ($request->getQuery('AJAX_CALL') === "Y") {
	$sVisible = "modal--visible";
} elseif ($arResult["ERROR"]) {
	$sVisible = "modal--visible";
} elseif ($arResult["MESSAGE"]) {
	$sVisible = "modal--visible";
}
?>
<div class="subscribe-edit">
    <div id="modal-subscribe" class="modal <?= $sVisible ?>">
        <div class="modal__mask">
            <div class="modal__wrapper">
                <div class="modal__container modal__container--subscribe-padding">
                    <button class="modal__close" data-modal-selector="#modal-subscribe" onclick="
                        let selector = $(this).data('modal-selector');
                        $(selector).removeClass('modal--visible');
                        $('.page:first').css('overflow', 'auto');"
                    >
						<?php $assetManager = new Local\Util\Assets(); ?>
                        <svg class="modal__close-icon icon">
                            <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#clear"></use>
                        </svg>
                    </button>

                    <?php if (empty($arResult["MESSAGE"]["UNSUBSCR"])) { ?>
                        <div class="modal__header"><?= Loc::getMessage("TITLE") ?></div>
                    <?php } ?>

                    <div class="modal__body modal__body--no-margin-bottom">
						<?php
						if ($arResult["MESSAGE"]["CONF"]) {
							include("success.php");
						} elseif ($arResult["MESSAGE"]["UNSUBSCR"]) {
                            include("unsubscribe.php");
                        } else {
							foreach ($arResult["MESSAGE"] as $itemID => $itemValue) {
								echo ShowMessage(array("MESSAGE" => $itemValue, "TYPE" => "OK"));
							}

							foreach ($arResult["ERROR"] as $itemID => $itemValue) {
								echo ShowMessage(array("MESSAGE" => $itemValue, "TYPE" => "ERROR"));
							}

							//whether to show the forms
							if ($arResult["ID"] == 0 && empty($_REQUEST["action"]) || CSubscription::IsAuthorized($arResult["ID"])) {
								//show confirmation form
								if ($arResult["ID"] > 0 && $arResult["SUBSCRIPTION"]["CONFIRMED"] <> "Y") {
									include("confirmation.php");
								} else {
									include("setting.php");
								}
							}
						}
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
