<!doctype html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
    <title><?php $APPLICATION->ShowTitle() ?></title>

	<?php $APPLICATION->ShowHead() ?>

	<?php CJSCore::Init('jquery') ?>

	<?php $assetManager = new Local\Util\Assets(); ?>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= $assetManager->getEntry('images/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $assetManager->getEntry('images/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $assetManager->getEntry('images/favicon-16x16.png') ?>">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#safari-pinned-tab" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

    <link rel="preconnect" href="//api-maps.yandex.ru">
    <link rel="dns-prefetch" href="//api-maps.yandex.ru">

    <link rel="stylesheet" href="<?= $assetManager->getEntry('global.css') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

</head>

<body class="page page_<?= LANGUAGE_ID ?> page_<?php $APPLICATION->ShowProperty('page_type', 'secondary') ?>">
<?php $APPLICATION->ShowPanel() ?>
<header class="header">
    <div class="header__top-line">
        <div class="header__container container">
            <a href="https://edu.gov.ru" class="header__gerb" target="_blank">
                <svg class="header__gerb-icon icon">
                    <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#gerb"></use>
                </svg>
                <div class="header__gerb-text">Министерство просвещения
                    <span class="d-none d-md-block"> РФ</span>
                    <span class="d-block d-md-none"> Российской Федерации</span>
                </div>
            </a>
            <div class="flex-spacer"></div>
            <div class="header__links">
				<?php
				$APPLICATION->IncludeComponent(
					"vision:vision.special",
					"special",
					[]
				)
				?>
                <a href="/" class="header__blind-mode">
                    <svg class="header__blind-mode-icon">
                        <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#show_dark"></use>
                    </svg>
                    <span class="header__blind-mode-text">Обычная версия</span>
                </a>
                <div class="header__lang">
                    <div class="lang">
                        <div class="lang-wrapper">
                            <a href="/en/" class="lang__link">
                                <svg class="lang__link-icon icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="20" height="20" fill="url(#pattern0)"/>
                                    <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                                 height="1">
                                            <use xlink:href="#image0_2421:24193" transform="scale(0.00416667)"/>
                                        </pattern>
                                        <image id="image0_2421:24193" width="240" height="240"
                                               xlink:href="data:image/png;base64,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"/>
                                    </defs>
                                </svg>
                                <span>English</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__main-line">
        <div class="header__container container">
            <div class="header__logo">
				<?php $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "file",
						"EDIT_TEMPLATE" => "",
						"PATH" => SITE_DIR . "/__include__/logo.php"
					)
				); ?>
            </div>
            <button class="top-nav__menu js-menu-toggle-mobile d-none d-sm-block">
                <svg class="top-nav__menu-icon icon">
                    <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#menu"></use>
                </svg>
            </button>
            <div class="header__nav">
				<?php $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"top",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "inner",
						"DELAY" => "N",
						"MAX_LEVEL" => "3",
						"MENU_CACHE_GET_VARS" => array(),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "N",
						"ASSETS" => $assetManager->getEntry("icons/sprite.svg"),
					),
					false
				); ?>
            </div>
            <picture class="header__cover">
                <img src="<?= $assetManager->getEntry('images/header-bg.png') ?>" class="header__cover-img" alt=""/>
            </picture>
        </div>
    </div>
</header>

<main class="page__middle main">
	<?php if (
		$APPLICATION->GetCurPage(false) != SITE_DIR &&
		$APPLICATION->GetCurPage(false) != "/search/" &&
		$APPLICATION->GetCurPage(false) != "/search/detail.php" &&
		$APPLICATION->GetCurPage(false) != "/extended-search/" &&
		$APPLICATION->GetCurPage(false) != "/extended-search/search.php" &&
		$APPLICATION->GetCurPage(false) != "/zakonodatelstvo-ob-obrazovanii/sudebnaya-praktika/baza/detail.php" &&
		$APPLICATION->GetCurPage(false) != "/grazhdanam/faq/detail.php"
	) { ?>
		<?php $APPLICATION->IncludeComponent(
			"bitrix:breadcrumb",
			"",
			array(
				"PATH" => "",
				"SITE_ID" => "s1",
				"START_FROM" => "0"
			)
		); ?>
	<?php } ?>

    <div class="page__container container <?= defined("CONTAINER_DOC") ? "container--doc" : "" ?>">
        <div class="button-scroll">
            <div class="button-scroll__row button-scroll__row--top">
                <div class="button-scroll__down js-button-scroll-bottom">
                    <svg viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="56" height="56" rx="28" fill="#E5EEF5"/>
                        <rect x="0.5" y="0.5" width="55" height="55" rx="27.5" stroke="#B9C1D3" stroke-opacity="0.8"/>
                        <path d="M36 36L28 27.6278L20 36" stroke="#3E4A5B" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M36 26.3721L28 17.9998L20 26.3721" stroke="#3E4A5B" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="button-scroll__row button-scroll__row--bottom js-button-scroll-hide">
                <div class="button-scroll__document-header js-button-scroll-document-header">
                    Оглавление
                </div>
                <div class="button-scroll__top js-button-scroll-top">
                    <svg viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="56" height="56" rx="28" fill="#E5EEF5"/>
                        <rect x="0.5" y="0.5" width="55" height="55" rx="27.5" stroke="#B9C1D3" stroke-opacity="0.8"/>
                        <path d="M36 36L28 27.6278L20 36" stroke="#3E4A5B" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M36 26.3721L28 17.9998L20 26.3721" stroke="#3E4A5B" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
		<?php if (
		$APPLICATION->GetCurPage(false) != SITE_DIR &&
		$APPLICATION->GetCurPage(false) != "/search/" &&
		$APPLICATION->GetCurPage(false) != "/extended-search/search.php" &&
		$APPLICATION->GetCurPage(false) != "/extended-search/" &&
		$APPLICATION->GetCurPage(false) != "/grazhdanam/faq/" &&
		$APPLICATION->GetCurPage(false) != "/search/detail.php" &&
		$APPLICATION->GetCurPage(false) != "/zakonodatelstvo-ob-obrazovanii/sudebnaya-praktika/baza/detail.php" &&
		$APPLICATION->GetCurPage(false) != "/grazhdanam/faq/detail.php"
		) { ?>
        <div class="section-wrapper-container">
			<? if (!defined('HIDE_MENU')) { ?>
				<? $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"tree",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "3",
						"MENU_CACHE_GET_VARS" => array(),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_THEME" => "site",
						"ROOT_MENU_TYPE" => "left",
						"USE_EXT" => "N",
						"COMPONENT_TEMPLATE" => "tree"
					),
					false
				); ?>
			<? } ?>
            <div class="section-wrapper-container-content">
				<?php if (!defined("NO_TITLE")) { ?>
                    <div class="content-title <?= defined("TITLE_CENTER") ? "content-title--center" : "" ?> <?= defined("TITLE_MARGIN_BOTTOM_32") ? "content-title--mb-32" : "" ?>">
						<?php $APPLICATION->ShowTitle(false) ?>
                    </div>
				<?php } ?>
				<? } else { ?>
                <div class="page__content <?php $APPLICATION->ShowProperty("page_content_modify_class") ?>">
                    <div>
<? } ?>