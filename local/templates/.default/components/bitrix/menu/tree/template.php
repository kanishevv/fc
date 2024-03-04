<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div class="menu-sitemap-tree">
<ul>
<?
$previousLevel = 0;
foreach($arResult as $arItem):
?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
			<li<?if($arItem["CHILD_SELECTED"] !== true) { ?> class="wrapper-container-level menu-close"<? } else { ?> class="wrapper-container-level menu-open"<? } ?>>
				<div class="folder" onClick="OpenMenuNode(this)"></div>
				<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<ul>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>
        <div class="wrapper-container-level">
				<li class="menu-tree-item">
					<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				</li>
                <div class="item-border"></div>
        </div>
		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
</div>
<?endif?>