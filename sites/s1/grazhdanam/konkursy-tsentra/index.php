<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Конкурсы Центра");
?>

<div class="research">
    <div class="research__list">
        <div class="research__item">
            <a href="/grazhdanam/konkursy-tsentra/zakupki-dlya-nuzhd-tsentra/" target="_parent" class="research__link">
                <svg class="research__icon icon">
                    <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#doc_icon"></use>
                </svg>
                <span>Закупки для нужд Центра</span>
            </a>
        </div>
        <div class="research__item">
            <a href="/grazhdanam/konkursy-tsentra/konkurs-na-zameshchenie-dolzhnostey-nauchnykh-rabotnikov/" class="research__link">
                <svg class="research__icon icon">
                    <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#doc_icon"></use>
                </svg>
                <span>Конкурс на замещение должностей научных работников</span>
            </a>
        </div>
    </div>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>