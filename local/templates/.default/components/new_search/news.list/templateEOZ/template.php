<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
      <div class="cont"> 

<?foreach ($arResult['ITEMS'] as $arItem): ?>

        <p> <a href="<?=$arItem['DETAIL_PAGE_URL']?>" ><?echo $arItem["DISPLAY_PROPERTIES"]['ANONS_MON']['DISPLAY_VALUE']?></a></p><br/>
<?echo $arItem["PREVIEW_TEXT"]?>

<div class="grhr"></div>
		  <br/>
<? endforeach; ?>


