<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

setlocale(LC_ALL, 'ru_RU');

if ($arResult["PROPERTIES"]['STATUS']['VALUE'])
	ShowError('Документ утратил силу<br /><br />');

if ($arResult["PROPERTIES"]['DATE_PRIN']['VALUE'])
	$date = ' от '.EditData($arResult["PROPERTIES"]['DATE_PRIN']['VALUE']).' г. ';

$APPLICATION->SetTitle($arResult["PROPERTIES"]['DOCTYPE']['VALUE'].' '.$arResult["PROPERTIES"]['ACCEPTOR']['VALUE'].$date.'№'. $arResult["NAME"].' '.$arResult['FIELDS']["PREVIEW_TEXT"]);


$search_text = trim($_REQUEST['q']);

	function my_replace($matches)
	{
		return $matches[0]{0}.'<span style="background-color: #FFFF77; font-weight: bolder;">'.substr($matches[0],1).'</span>';
	}
	function my_replace2($matches)
	{
		return '<span style="background-color: #FFFF77; font-weight: bolder;">'.$matches[0].'</span>';
	}
	function mu_replace($matches)
	{
		return $matches[0]{0}.'<span style="background-color: #FFFF77; font-weight: bolder;">'.substr($matches[0], 1, -1).'</span>'.substr($matches[0], -1).'';
	}
	function mu_replace2($matches)
	{
		return '<span style="background-color: #FFFF77; font-weight: bolder;">'.substr($matches[0], 0, -1).'</span>'.substr($matches[0], -1).'';
	}
	function my_replace3($matches)
	{
		return '\\'.$matches[0];
	}
	function my_replace4($matches)
	{
		//if($_GET['qwe3']==2)
	//	{
		//	echo '<pre>';
		//	var_dump($matches);
	//	}
		return $matches[0]{0}.'<span style="background-color: #FFFF77; font-weight: bolder;">'.substr($matches[0],1).'</span>';
	}
	$search_keywords = preg_split("/[\s,]+/", $search_text);
	if($_GET['qwe3']==2)
		{
			echo '<pre>';
			var_dump($search_keywords);
		}
	foreach($search_keywords as $key=>$val)
	{
		if(strlen($val)>=6)
			$search_keywords[$key] = substr($val, 0, -2);
		else if(strlen($val)>=4)
			$search_keywords[$key] = substr($val, 0, -1);
		$search_keywords[$key] = preg_replace_callback("/(\/)/","my_replace3",$search_keywords[$key]);
	}
	if($_GET['qwe3']==2)
		{
			echo '<pre>';
			var_dump($search_keywords);
		}
	foreach($search_keywords as $key=>$val)
	{
		foreach($search_keywords as $k=>$v)
		{
			if(stripos($val,$v)!==false && $k!=$key && strlen($v)>=3)
			{
				unset($search_keywords[$key]);
				break;
			}
		}
	}
	if($_GET['qwe3']==2)
		{
			echo '<pre>';
			var_dump($search_keywords);
			//die();
		}
if($_REQUEST['q'])
{
	foreach($search_keywords as $val)
	{
		if(strlen($val)>=2)
		{
			$continue_word = '([а-яёa-z0-9]*)';
			$replace_func = "my_replace";
		}
		else
		{
			$continue_word = '([^а-яёa-z0-9])';
			$replace_func = "mu_replace";
		}
		if(is_numeric($val))
				$pattern = "/(^)".$val."/iu";
			else
				$pattern = "/(^)".$val.$continue_word."/iu";
		$arResult['FIELDS']["PREVIEW_TEXT"] = preg_replace_callback($pattern,$replace_func."2",$arResult['FIELDS']["PREVIEW_TEXT"]);
		$arResult["DETAIL_TEXT"] = preg_replace_callback($pattern,$replace_func."2",$arResult["DETAIL_TEXT"]);
		$arResult["PROPERTIES"]['DOCTYPE']['VALUE'] = preg_replace_callback($pattern,$replace_func."2",$arResult["PROPERTIES"]['DOCTYPE']['VALUE']);
		$arResult["PROPERTIES"]['ACCEPTOR']['VALUE'] = preg_replace_callback($pattern,$replace_func."2",$arResult["PROPERTIES"]['ACCEPTOR']['VALUE']);
		$arResult["NAME"] = preg_replace_callback($pattern,"my_replace2",$arResult["NAME"]);
		if(is_numeric($val))
				$pattern = "/([^а-яёa-z0-9])".$val."/iu";
			else
				$pattern = "/([^а-яёa-z0-9])".$val.$continue_word."/iu";
		$arResult['FIELDS']["PREVIEW_TEXT"] = preg_replace_callback($pattern,$replace_func,$arResult['FIELDS']["PREVIEW_TEXT"]);
		$arResult["DETAIL_TEXT"] = preg_replace_callback($pattern,$replace_func,$arResult["DETAIL_TEXT"]);
		if($_GET['qwe3']==2)
		{
			echo $val;
			echo '<pre>';
			var_dump($arResult["DETAIL_TEXT"]);
		}
		$arResult["PROPERTIES"]['DOCTYPE']['VALUE'] = preg_replace_callback($pattern,$replace_func,$arResult["PROPERTIES"]['DOCTYPE']['VALUE']);
		$arResult["PROPERTIES"]['ACCEPTOR']['VALUE'] = preg_replace_callback($pattern,$replace_func,$arResult["PROPERTIES"]['ACCEPTOR']['VALUE']);
		$arResult["NAME"] = preg_replace_callback($pattern,"my_replace",$arResult["NAME"]);
	}
}

$this->SetViewTarget("title_detail");?>
<h1><?=$arResult["PROPERTIES"]['DOCTYPE']['VALUE'].'<br />'.$arResult["PROPERTIES"]['ACCEPTOR']['VALUE'].'<br />'.$date.'№ '. $arResult["NAME"].'<br />'.$arResult['FIELDS']["PREVIEW_TEXT"]?></h1>
<?$this->EndViewTarget();?>

<?
$date_edit = explode(' ', $arResult["PROPERTIES"]['DATE_PUB']['VALUE']);
$pdf = CFile::GetPath($arResult["PROPERTIES"]['PDF']['VALUE'][0]);
$word = CFile::GetPath($arResult["PROPERTIES"]['WORD']['VALUE'][0]);
$this->SetViewTarget("right_column");?>
<div class="right_detail">
<div align="center"><h1>СПРАВКА ДОКУМЕНТА</h1></div><br />

<? if ($arResult["PROPERTIES"]['DATE_REG']['VALUE']): ?>
	<b>Регистрация в Минюсте России:</b><br /> <?=$arResult["PROPERTIES"]['DATE_REG']['VALUE']?> г. № <?=$arResult["PROPERTIES"]['NOMER_MIN']['VALUE']?><br />
<div class="grhr"></div>
<? endif; ?>

<? if ($arResult["PROPERTIES"]['IST']['VALUE']): ?>
	<b>Источник публикации:</b><br /> <?=$arResult["PROPERTIES"]['IST']['VALUE']?><br />
<div class="grhr"></div>
<? endif; ?>
<? if ($arResult["PROPERTIES"]['ADD']['VALUE']): ?>
	<b>Примечание:</b><br /> <?=htmlspecialchars_decode($arResult["PROPERTIES"]['ADD']['VALUE']['TEXT'])?>
<div class="grhr"></div>
<? endif; ?>

<? if ($pdf || $word): ?>
	<b>Приложение:</b><br />
	<? if ($pdf):
?>
		<a href="<?=$pdf?>" target="_blank"><img src="/images/icons/pdf.png" alt="Скачать в PDF" title="Скачать в PDF"></a>
&nbsp;<a href="<?=$pdf?>" target="_blank"><?=basename($pdf, ".pdf")?></a><br />
	<? endif; ?>
	<? if ($word): ?>
		<a href="<?=$word?>"  target="_blank"><img src="/images/icons/word.png" alt="Скачать в Word" title="Скачать в Word"></a>&nbsp;&nbsp;<a href="<?=$word?>"  target="_blank"><?=str_replace('.doc', '', basename($word, ".docx"))?></a><br />
	<? endif; ?>
<div class="grhr"></div>
<? endif; ?>

	<b>Ссылка на документ:</b> <a href="http://<?=$_SERVER['HTTP_HOST']?><?=$APPLICATION->GetCurURI()?>">http://<?=$_SERVER['HTTP_HOST']?><?=$APPLICATION->GetCurURI()?></a>
<?$this->EndViewTarget();?>

<div class="news-detail">
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
