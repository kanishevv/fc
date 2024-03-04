<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$assetManager = new Local\Util\Assets();

$arParams['ASSETS'] = $assetManager->getEntry("icons/sprite.svg");
