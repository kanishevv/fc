<?

$arResult['PHOTO'] = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE']['ID'], array('width'=>300, 'height'=>300), BX_RESIZE_IMAGE_PROPORTIONAL, true, Array("name" => "sharpen", "precision" => 15));

?>