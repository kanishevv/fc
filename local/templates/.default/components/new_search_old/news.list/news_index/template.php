<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="infobl"> 
  <div class="cont"> 	 
<?foreach($arResult["ITEMS"] as $arItem):?>
   
    <div class="newss"> 
      <div align="left"><b><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></b> 
        <br />
        <div align="justify">
<?=$arItem['PREVIEW_TEXT']?>
</div>
       </div>
     </div>
   
<? endforeach; ?>
<a href="/news/" class="fr">Все новости</a>
 </div>

</div>