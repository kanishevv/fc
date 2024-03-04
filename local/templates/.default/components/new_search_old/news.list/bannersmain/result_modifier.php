<?
foreach ($arResult['ITEMS'] as &$arItem) {
$arItem['PHOTO'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>512, 'height'=>300), BX_RESIZE_IMAGE_EXACT, true, Array("name" => "sharpen", "precision" => 15));
}
?>