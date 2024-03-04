
<?
$date_edit = explode(' ', $arResult["PROPERTIES"]['DATE_PUB']['VALUE']);
$pdf = CFile::GetPath($arResult["PROPERTIES"]['PDF']['VALUE'][0]);
$word = CFile::GetPath($arResult["PROPERTIES"]['WORD']['VALUE'][0]);
$this->SetViewTarget("right_column");?>
<div class="right_detail">
<? if ($date_edit[0]): ?>
	<b>Дата публикации:</b> <?=$date_edit[0]?><br /><br />
<? endif; ?>

<? if ($arResult["PROPERTIES"]['IST']['VALUE']): ?>
	<b>Источник публикации:</b> <?=$arResult["PROPERTIES"]['IST']['VALUE']?><br /><br />
<? endif; ?>

<? if ($arResult["PROPERTIES"]['ADD']['VALUE']): ?>
	<b>Примечание:</b> <?=$arResult["PROPERTIES"]['ADD']['VALUE']['TEXT']?><br /><br />
<? endif; ?>

	<b>Ссылка на документ:</b> <a href="http://<?=$_SERVER['HTTP_HOST']?><?=$APPLICATION->GetCurURI()?>">http://<?=$_SERVER['HTTP_HOST']?><?=$APPLICATION->GetCurURI()?></a><br /><br />

<? if ($pdf || $word): ?>
	<b>Скачать документ:</b> 
	<? if ($pdf): ?>
		<a href="<?=$pdf?>" target="_blank"><img src="/images/icons/pdf.png" alt="Скачать в PDF" title="Скачать в PDF"></a> 
	<? endif; ?>
	<? if ($word): ?>
		<a href="<?=$word?>"  target="_blank"><img src="/images/icons/word.png" alt="Скачать в Word" title="Скачать в Word"></a><br /><br />
	<? endif; ?>
<? endif; ?>
</div>
<?$this->EndViewTarget();?>

<div class="sud-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>

	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
<?echo $arResult["PREVIEW_TEXT"];?>
<br />
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
<?
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