<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?//display sections?>
<table cellspacing="0" cellpadding="0" class="data-table" width="100%"> 	
	<tr> 		
		<td class="border-gray-body">
		<?foreach ($arResult['SECTIONS'] as $val):?>
		<?if($arParams["SECTION_ID"]==$val["ID"]) $SELECTED_ITEM = $val?>
			
				<div style="padding: 2px 2px 2px <?=17*$val['REAL_DEPTH'].'px'?>;">
					<div class="<?=($arParams["SECTION_ID"]==$val["ID"])?'':'un'?>selected-arrow-faq"></div>
					<?='<a href="'.$val['SECTION_PAGE_URL'].'" class="'.($arParams["SECTION_ID"]==$val["ID"]?'':'un').'selected-faq-item">'.$val['NAME'].'</a> ('.$val['ELEMENT_CNT'].')'?>
					<br clear="all">
				</div>
			
		<?endforeach;?>
		</td>
	</tr>
</table>
<?if(isset($SELECTED_ITEM)):?>
<h2><?=$SELECTED_ITEM["NAME"]?></h2>
<?endif;?>