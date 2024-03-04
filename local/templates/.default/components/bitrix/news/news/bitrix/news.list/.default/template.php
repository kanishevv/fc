<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="infobl"> 
  <div class="cont"> 	 
<?foreach($arResult["ITEMS"] as $arItem):?>
   
    <div class="newss"> 
      <div align="left"><b><?=$arItem['NAME']?></b> 
        <br />
        <div align="justify">
<?=$arItem['PREVIEW_TEXT']?>
</div>
       </div>
     </div>
   
<? endforeach; ?>

<?=$arResult["NAV_STRING"]?><br />

 </div>

</div>