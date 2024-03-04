<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="news-detail">

<?=htmlspecialcharsBack($arResult["PROPERTIES"]["DESCRPOD"]["VALUE"]["TEXT"])?>

	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img class="detail_picture" border="0" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>"  title="<?=$arResult["NAME"]?>" />
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
<div class="textjust">
<?if ($arResult["DISPLAY_PROPERTIES"]['DOI']){?> 
	<p><b><?=$arResult['DISPLAY_PROPERTIES']['DOI']['NAME']?>:</b> 
<?echo $arResult['DISPLAY_PROPERTIES']['DOI']['DISPLAY_VALUE'];?>
		</br></br></p><?}?> 

<?if ($arResult["DISPLAY_PROPERTIES"]['DESCR_PODR']){?> 
	<p><b><?=$arResult['DISPLAY_PROPERTIES']['DESCR_PODR']['NAME']?>:</b> 
<?echo $arResult['DISPLAY_PROPERTIES']['DESCR_PODR']['DISPLAY_VALUE'];?>
		</br></br></p><?}?> 


<?if ($arResult["DISPLAY_PROPERTIES"]['AUTORS']){?> 
	<p><b><?=$arResult['DISPLAY_PROPERTIES']['AUTORS']['NAME']?>:</b> 
<?echo $arResult['DISPLAY_PROPERTIES']['AUTORS']['DISPLAY_VALUE'];?>
		</br></br></p><?}?>
</div> 

<?
CModule::IncludeModule('iblock');
$dbSect = CIBlockSection::GetList(Array("SORT"=>"ASC"), Array("ID"=>$arResult["VARIABLES"]["SECTION_ID"], "<=LEFT_BORDER" => $arResult["LEFT_MARGIN"], ">=RIGHT_BORDER" => $arResult["RIGHT_MARGIN"]), true); 
if($arSect = $dbSect->GetNext()) {echo $arSect["DESCRIPTION"];}
?>

<?
$res = CIBlockSection::GetByID($arResult["ID"]);
if($ar_res = $res->GetNext())
 if ($ar_res['DESCRIPTION']<>null)
  echo $ar_res['DESCRIPTION'];
?>

	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>