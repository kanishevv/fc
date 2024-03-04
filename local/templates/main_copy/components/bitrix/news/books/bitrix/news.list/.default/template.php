<?php
/**
 * @var array $arResult
 */
?>

<div class="books">
	<?php foreach ($arResult["ITEMS"] as $aItem) { ?>
        <div class="books__book">
            <a href="<?= $aItem["DETAIL_PAGE_URL"] ?>" class="books__book-title"><b><?= $aItem["~NAME"] ?></b></a>
            <div class="books__book-text"><?= $aItem["PREVIEW_TEXT"] ?></div>
        </div>
        <hr>
	<?php } ?>
</div>
