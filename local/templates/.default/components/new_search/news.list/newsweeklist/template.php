<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>


<?foreach($arResult["ITEMS"] as $arItem):?>
<br/>
	<div class="news-list1" id="<?=$this->GetEditAreaId($arItem['ID']);?>">


			<?echo $arItem["PREVIEW_TEXT"];?>




<div class="grhr"></div>
<?endforeach;?>
</div>
