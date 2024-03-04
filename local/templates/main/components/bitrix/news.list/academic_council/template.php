<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="news-list-employee">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

  <div class="custom-wrapper-container">
      <?if ($arItem["PROPERTIES"]["HIDE_PHOTO"]["VALUE"] != "Да" && !empty($arItem["PREVIEW_PICTURE"]["SRC"]) ) { ?>
        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"/>
      <? } ?>
      <div class="container-title"><?=$arItem["NAME"]?></div>
      <div class="container-position"><?=$arItem["PROPERTIES"]["POSITION"]['VALUE']?></div>
      <div class="container-academic-degree"><?=$arItem["PROPERTIES"]["ACADEMIC_DEGREE"]['VALUE']?></div>
    </div>
<?endforeach;?>
</div>
