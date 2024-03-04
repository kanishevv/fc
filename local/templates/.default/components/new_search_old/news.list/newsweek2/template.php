<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="blue"><h2>Документы недели</h2></div>
<div class="cont">

<?foreach($arResult["ITEMS"] as $arItem):?>

	<div class="newss bb1" id="<?=$this->GetEditAreaId($arItem['ID']);?>">


			<?echo $arItem["PREVIEW_TEXT"];?>



	</div>
<div class="grhr"></div>
<?endforeach;?>
<div class="fr"><a href="/docs-of-the-week/">Все документы</a></div>
</div>
