<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?//elements list?>
<a name="top"></a>
<?foreach ($arResult['ITEMS'] as $key=>$val):?>
	<li class="point-faq"><a href="#<?=$val["ID"]?>"><?=$val['NAME']?></a><br/></li>
<?endforeach;?>
<br/>
<?foreach ($arResult['ITEMS'] as $key=>$val):
$date_ac = CIBlockElement::GetProperty($val['IBLOCK_ID'], $val['ID'], array("sort" => "asc"), Array("CODE"=>"FAQ_DATE"))->Fetch();
$ac_ex = explode(' ', $date_ac['VALUE']);

?>
<?
	$this->AddEditAction($val['ID'],$val['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($val['ID'],$val['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BSFE_ELEMENT_DELETE_CONFIRM')));
?>
<a name="<?=$val["ID"]?>"></a>
<table cellpadding="0" cellspacing="0" class="data-table" width="100%"  id="<?=$this->GetEditAreaId($val['ID']);?>">
	<tr>
		<th>
		<h1 span style="font-size:13px!important;"><?=$val['NAME']?></h1>
		</th>
	</tr>
	<tr>
		<td>
		<?=$val['PREVIEW_TEXT']?>
		<?=$val['DETAIL_TEXT']?>
		
			<!--<b>Ответ дан по состоянию законодательства на <?=$ac_ex[0]?></b>
		<br/><br/>--!>
		<div style="float: left"><a href="#top"><?=GetMessage("SUPPORT_FAQ_GO_UP")?></a></div>
		<?if ($arParams["SHOW_RATING"] == "Y"):?>
			<div class="faq-rating" style="float: right">
			<?
			$GLOBALS["APPLICATION"]->IncludeComponent(
				"bitrix:rating.vote", $arParams["RATING_TYPE"],
				Array(
					"ENTITY_TYPE_ID" => "IBLOCK_ELEMENT",
					"ENTITY_ID" => $val['ID'],
					"OWNER_ID" => $val['CREATED_BY'],
					"USER_VOTE" => $arResult['RATING'][$val['ID']]["USER_VOTE"],
					"USER_HAS_VOTED" => $arResult['RATING'][$val['ID']]["USER_HAS_VOTED"],
					"TOTAL_VOTES" => $arResult['RATING'][$val['ID']]["TOTAL_VOTES"],
					"TOTAL_POSITIVE_VOTES" => $arResult['RATING'][$val['ID']]["TOTAL_POSITIVE_VOTES"],
					"TOTAL_NEGATIVE_VOTES" => $arResult['RATING'][$val['ID']]["TOTAL_NEGATIVE_VOTES"],
					"TOTAL_VALUE" => $arResult['RATING'][$val['ID']]["TOTAL_VALUE"],
					"PATH_TO_USER_PROFILE" => $arParams["PATH_TO_USER"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);?>
			</div>
		<?endif;?>		
		</td>
	</tr>
</table>
<br/>
<?endforeach;?>
<p class="under"><a href="/grazhdanam/faq/">Возврат к разделу</a></p>