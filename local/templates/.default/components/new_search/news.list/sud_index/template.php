<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
      <div class="cont"> 
<? foreach ($arResult['ITEMS'] as $arItem): ?>		 


        <p> <a href="<?=$arItem['DETAIL_PAGE_URL']?>" ><?echo $arItem["PROPERTIES"]['SYT']['VALUE']?></a></p>
<div class="grhr"></div>
<? endforeach; ?>
<div align="right"> <a href="/zakonodatelstvo-ob-obrazovanii/sudebnaya-praktika/baza/" >Все документы</a></div>
     </div>
