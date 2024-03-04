<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var array $arResult
 */
?>
<div class="cont">
	<?php foreach ($arResult['ITEMS'] as $arItem) { ?>
        <p>
            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
                <?= $arItem["DISPLAY_PROPERTIES"]['ANONS_MON']['DISPLAY_VALUE'] ?>
            </a>
        </p>
        <br/>
		<?= $arItem["PREVIEW_TEXT"] ?>
        <div class="grhr"></div>
        <hr>
	<?php } ?>
</div>
