<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="cont">

<?foreach($arResult["ITEMS"] as $arItem):?>

	<div class="newss bb1" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

		<p> <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=htmlspecialcharsBack($arItem["PROPERTIES"]["WEEK_DOC_TEXT"]["VALUE"]["TEXT"])?></a></p>

	</div>
<div class="grhr"></div>
<?endforeach;?>
<div class="fr"><a href="/search/">Перейти в базу нормативных актов</a></div>
</div>
