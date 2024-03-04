<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

$assetManager = new Local\Util\Assets();

//delayed function must return a string
if (empty($arResult))
	return "";

$strReturn = '';

$strReturn .= '<section class="breadcrumb"><div class="breadcrumb__container container">';

$itemSize = count($arResult);

for ($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0 ? '
		<svg class="breadcrumb__icon icon">
			<use xlink:href="' . $assetManager->getEntry('icons/sprite.svg') . '#arrow_right"></use>
		</svg>	
	' : '');
	$home = ($index == 0 ? '
		<svg class="breadcrumb__icon icon">
			<use xlink:href="' . $assetManager->getEntry('icons/sprite.svg') . '#home"></use>
		</svg>	
	' : '');

	if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
		if ($index > 0) {
			$strReturn .= '
			<div class="breadcrumb__item">
				' . $home . '
				' . $arrow . '
				<a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '" class="breadcrumb__link">
					' . $title . '
				</a>
			</div>';
		} else {
			$strReturn .= '
			<div class="breadcrumb__item">
				<a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '" class="breadcrumb__link">
					Главная страница
				</a>
			</div>';
		}
	} else {
		$strReturn .= '
			<div class="breadcrumb__item">
				' . $arrow . '
				<span>' . $title . '</span>
			</div>';
	}
}

$strReturn .= '</div></section>';

return $strReturn;
