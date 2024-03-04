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
<div class="io_page">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<div class="io_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <h2 id="<?=$arItem["CODE"]?>"><?=$arItem["NAME"]?></h2>
    <? if ($arItem["PROPERTIES"]["TEXT_0"]["VALUE"]["TEXT"]) { echo '<div class="io_text">'.htmlspecialchars_decode($arItem["PROPERTIES"]["TEXT_0"]["VALUE"]["TEXT"]).'</div>';}?>
    <? if ($arItem["PROPERTIES"]["TEXT_1"]["VALUE"]["TEXT"]) {?>
	<div class="open_block gray_block">
	    <div class="title">Подробнее</div>
	    <div class="text" style="display: none">
		<?=htmlspecialchars_decode($arItem["PROPERTIES"]["TEXT_1"]["VALUE"]["TEXT"])?>
	    </div>
	</div>
    <?}?>
    <? if ($arItem["PROPERTIES"]["TEXT_2"]["VALUE"]["TEXT"]) {?>
	<div class="open_block">
	    <div class="title">Комментарии</div>
	    <div class="text" style="display: none">
		<?=htmlspecialchars_decode($arItem["PROPERTIES"]["TEXT_2"]["VALUE"]["TEXT"])?>
	    </div>
	</div>
    <?}?>
    <? if ($arItem["PROPERTIES"]["TEXT_3"]["VALUE"]["TEXT"]) {?>
	<div class="open_block">
	    <div class="title">Периодические доклады России</div>
	    <div class="text" style="display: none">
		<?=htmlspecialchars_decode($arItem["PROPERTIES"]["TEXT_3"]["VALUE"]["TEXT"])?>
	    </div>
	</div>
    <?}?>
    <? if ($arItem["PROPERTIES"]["TEXT_4"]["VALUE"]["TEXT"]) {?>
	<div class="open_block">
	    <div class="title">Перечень проблемных тем, заключительные замечания</div>
	    <div class="text" style="display: none">
		<?=htmlspecialchars_decode($arItem["PROPERTIES"]["TEXT_4"]["VALUE"]["TEXT"])?>
	    </div>
	</div>
    <?}?>
    <? if ($arItem["PROPERTIES"]["TEXT_5"]["VALUE"]["TEXT"]) {?>
	<div class="open_block">
	    <div class="title">Информация об исполнении</div>
	    <div class="text" style="display: none">
		<?=htmlspecialchars_decode($arItem["PROPERTIES"]["TEXT_5"]["VALUE"]["TEXT"])?>
	    </div>
	</div>
    <?}?>
</div>
<?endforeach;?>
</div>