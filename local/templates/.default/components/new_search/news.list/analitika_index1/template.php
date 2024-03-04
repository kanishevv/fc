<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
      <div class="cont"> 
<? foreach ($arResult['ITEMS'] as $arItem): ?>		 


        <p> <a href="<?=$arItem['DETAIL_PAGE_URL']?>" ><?=$arItem['NAME']?></a></p>
<div class="grhr"></div>
<? endforeach; ?>
<div align="right"> <a href="/obrazovatelnoe-pravo/analitika/" >Все документы</a></div>
     </div>
