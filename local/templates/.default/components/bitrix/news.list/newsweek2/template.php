<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="blue"><h2>Документы недели</h2></div>
<div class="cont">

<?foreach($arResult["ITEMS"] as $arItem):?>

	<div class="newss bb1" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

		<p> <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=htmlspecialcharsBack($arItem["DATE_MAIN_PAGE"]["WEEK_DOC_TEXT"]["VALUE"]["TEXT"])?><?=htmlspecialcharsBack($arItem["PROPERTIES"]["WEEK_DOC_TEXT"]["VALUE"]["TEXT"])?></a></p>

	</div>
<div class="grhr"></div>
<?endforeach;?>
<div class="fr"><a href="/docs-of-the-week/">Все документы</a></div>
</div>
