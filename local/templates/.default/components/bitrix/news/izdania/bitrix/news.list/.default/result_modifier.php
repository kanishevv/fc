<?
foreach ($arResult['ITEMS'] as &$arItem) {
$arItem['PHOTO'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>110, 'height'=>1500), BX_RESIZE_IMAGE_PROPORTIONAL, true, Array("name" => "sharpen", "precision" => 15));
}
?>