<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult["ITEMS"]) && $APPLICATION->GetCurPage() == '/search/search.php')
	ShowError('По заданным реквизитам документов не найдено. Пожалуйста проверьте праивильность запроса, уменьшите количество критериев поиска и попробуйте еще раз' );


?>
<?
	$start_time3 = microtime();
	$search_text = trim($_REQUEST['q']);
	function my_replace($matches)
	{
		return $matches[0]{0}.'<span style="background-color: #FFFF77; font-weight: bolder;">'.mb_substr($matches[0],1).'</span>';
	}
	function my_replace2($matches)
	{
		return '<span style="background-color: #FFFF77; font-weight: bolder;">'.$matches[0].'</span>';
	}
	function my_replace3($matches)
	{
		return '\\'.$matches[0];
	}
	$search_keywords = preg_split("/[\s,]+/", $search_text);
	foreach($search_keywords as $key=>$val)
	{
		if(strlen($val)>=6)
			$search_keywords[$key] = mb_substr($val, 0, -2);
		else if(strlen($val)>=4)
			$search_keywords[$key] = mb_substr($val, 0, -1);
		$search_keywords[$key] = preg_replace_callback("/(\/)/","my_replace3",$search_keywords[$key]); 
	}
	foreach($search_keywords as $key=>$val)
	{
		foreach($search_keywords as $k=>$v)
		{
			if(stripos($val,$v)!==false && $k!=$key)
			{
				unset($search_keywords[$key]);
				break;
			}	
		}
	}
?>
<div class="news-list1">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?$it = $_GET['PAGEN_1'] ? 20*($_GET['PAGEN_1']-1)+1 : 1;?>
<?

foreach($arResult["ITEMS"] as $arItem):

if ($arItem["PROPERTIES"]['DATE_PRIN']['VALUE'])
	$date = ' от '. $arItem["PROPERTIES"]['DATE_PRIN']['VALUE'].' г. ';
else
	$date ='';
	if($_REQUEST['q'])
	{
		foreach($search_keywords as $val)
		{
			if(is_numeric($val))
				$pattern = "/(^)".$val."/iu";
			else
				$pattern = "/(^)".$val."([а-яёa-z0-9]*)/iu";
			$arItem["PREVIEW_TEXT"] = preg_replace_callback($pattern,"my_replace2",$arItem["PREVIEW_TEXT"]);
			$arItem["PROPERTIES"]['DOCTYPE']['VALUE'] = preg_replace_callback($pattern,"my_replace2",$arItem["PROPERTIES"]['DOCTYPE']['VALUE']);
			$arItem["PROPERTIES"]['ACCEPTOR']['VALUE'] = preg_replace_callback($pattern,"my_replace2",$arItem["PROPERTIES"]['ACCEPTOR']['VALUE']);
			$arItem["NAME"] = preg_replace_callback($pattern,"my_replace2",$arItem["NAME"]); 
			if(is_numeric($val))
				$pattern = "/([^а-яёa-z0-9])".$val."/iu";
			else
				$pattern = "/([^а-яёa-z0-9])".$val."([а-яёa-z0-9]*)/iu";
			$arItem["PREVIEW_TEXT"] = preg_replace_callback($pattern,"my_replace",$arItem["PREVIEW_TEXT"]);
			$arItem["PROPERTIES"]['DOCTYPE']['VALUE'] = preg_replace_callback($pattern,"my_replace",$arItem["PROPERTIES"]['DOCTYPE']['VALUE']);
			$arItem["PROPERTIES"]['ACCEPTOR']['VALUE'] = preg_replace_callback($pattern,"my_replace",$arItem["PROPERTIES"]['ACCEPTOR']['VALUE']);
			$arItem["NAME"] = preg_replace_callback($pattern,"my_replace",$arItem["NAME"]); 
		}
		if($_GET['qwe']==1)
		{
			 die();
		}
	}
?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div>
		<div style="display: inline-block; width: auto; height: 100%; padding-right: 10px; vertical-align: middle;"><?=$it?></div>
		<div class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="display: inline-block; width: 910px; vertical-align: middle;">
			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>&q=<?=$_GET['q']?>"><img
							class="preview_picture"
							border="0"
							src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
							width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
							height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
							alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
							title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
							style="float:left"
							/></a>
				<?else:?>
					<img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/>
				<?endif;?>
			<?endif?>
			<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
				<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
			<?endif?>
			<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
				<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>&q=<?=$_GET['q']?>"><b>
	<?echo $arItem["PROPERTIES"]['DOCTYPE']['VALUE']?><br /> <?echo $arItem["PROPERTIES"]['ACCEPTOR']['VALUE']?> <?echo $date?> № <?echo $arItem["NAME"]?></b>
	<br />
	<?echo $arItem["PREVIEW_TEXT"]?>
	</a><br />
				<?else:?>
					<b><?echo $arItem["PREVIEW_TEXT"]?></b><br />
				<?endif;?>
			<?endif;?>
			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<div style="clear:both"></div>
			<?endif?>
		</div>
<div class="grhr"></div>
<br />
</div>
<?$it++; endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>

<?if($_GET['qwe4']==1){echo 'asasas'; echo microtime()-$start_time3; echo '<br>';}?>
