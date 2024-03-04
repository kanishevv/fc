<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$strTitle = "";
?>
<div class="catalog-section-list">
	<?
	$TOP_DEPTH = $arResult["SECTION"]["DEPTH_LEVEL"];
	$CURRENT_DEPTH = $TOP_DEPTH;

	foreach($arResult["SECTIONS"] as $arSection)
	{
		$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
		if($CURRENT_DEPTH < $arSection["DEPTH_LEVEL"])
		{
			$cud = ($arSection['DEPTH_LEVEL'] == 1) ? '<ul class="myul">' : '<ul class="myul" style="display:none;">';
			echo "\n",str_repeat("\t", $arSection["DEPTH_LEVEL"]-$TOP_DEPTH),$cud;
		}
		elseif($CURRENT_DEPTH == $arSection["DEPTH_LEVEL"])
		{
			echo "</li>";
		}
		else
		{
			while($CURRENT_DEPTH > $arSection["DEPTH_LEVEL"])
			{
				echo "</li>";
				echo "\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH),"</ul>","\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH-1);
				$CURRENT_DEPTH--;
			}
			echo "\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH),"</li>";
		}

		$count = $arParams["COUNT_ELEMENTS"] && $arSection["ELEMENT_CNT"] ? "&nbsp;(".$arSection["ELEMENT_CNT"].")" : "";

		if ($_REQUEST['SECTION_ID']==$arSection['ID'])
		{
			$link = '<b>'.$arSection["NAME"].$count.'</b>';
			$strTitle = $arSection["NAME"];
		}
		else
		{
			$link = '<a href="'.$arSection["SECTION_PAGE_URL"].'" onClick="if ($(this).closest(\'li\').children(\'ul\').is(\':visible\')) { $(this).closest(\'li\').children(\'ul\').slideUp(); } else { $(this).closest(\'li\').children(\'ul\').slideDown(); } if ($(this).closest(\'li\').children(\'ul\').attr(\'class\') == \'myul\') {return false;}">'.$arSection["NAME"].$count.'</a>';
		}

		echo "\n",str_repeat("\t", $arSection["DEPTH_LEVEL"]-$TOP_DEPTH);
		?><li id="<?=$this->GetEditAreaId($arSection['ID']);?>" ><span class="plus"></span><?=$link?><?

		$CURRENT_DEPTH = $arSection["DEPTH_LEVEL"];
	}

	while($CURRENT_DEPTH > $TOP_DEPTH)
	{
		echo "</li>";
		echo "\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH),"</ul>","\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH-1);
		$CURRENT_DEPTH--;
	}
	?>
</div>
<?=($strTitle?'<br/><h2>'.$strTitle.'</h2>':'')?>
