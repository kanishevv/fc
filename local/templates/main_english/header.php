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
                    <span class="header__gerb-text">The Ministry of Education of the Russian Federation</span>
                </a>
                <div class="flex-spacer"></div>
                <div class="header__links">
                    <a href="http://old.fcoz.ru/" class="header__blind-mode">
                        <svg class="header__blind-mode-icon">
                            <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#show_dark"></use>
                        </svg>
                        <span class="header__blind-mode-text">Version for the visually impaired</span>
                    </a>
                    <div class="header__lang">
                        <div class="lang">
                            <div class="lang-wrapper">
                                <a href="/" class="lang__link">
                                    <svg class="lang__link-icon icon">
                                      <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#lang_ru"></use>
                                    </svg>
                                    <span>Русский</span>
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
                            "PATH" => "/__include__/logo_en.php"
                        )
                    ); ?>
                </div>
                <button class="top-nav__menu js-menu-toggle-mobile d-none d-sm-block">
                    <svg class="top-nav__menu-icon icon">
                      <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#menu"></use>
                    </svg>
                </button>
                <button class="header__add-question button button--large button--icon button--icon-left js-modal-feedback">
                    <svg>
                        <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#chat"></use>
                    </svg>
                    <span>Ask a question</span>
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
                    <img src="<?= $assetManager->getEntry('images/header-bg.png') ?>" class="header__cover-img" alt="" />
                </picture>
            </div>
        </div>
    </header>

    <main class="page__middle main">
        <!-- <section class="search">
            <div class="search__container container">
                <div class="search__title">Поиск документов</div>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "",
                    array(
                        "PAGE" => "#SITE_DIR#search/index.php",
                        "USE_SUGGEST" => "N",
                        "ICONS" => $assetManager->getEntry('icons/sprite.svg')
                    )
                ); ?>
            </div>
        </section> -->

        <?php if (
            $APPLICATION->GetCurPage(false) != SITE_DIR &&
            $APPLICATION->GetCurPage(false) != "/search/"
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

        <div class="page__container container">
            <?php if (
                $APPLICATION->GetCurPage(false) != SITE_DIR &&
                $APPLICATION->GetCurPage(false) != "/search/" &&
                $APPLICATION->GetCurPage(false) != "/grazhdanam/faq/"
            ) { ?>
                <div class="page__content">
                    <div class="section-wrapper-container">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "tree",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "2",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_THEME" => "site",
                                "ROOT_MENU_TYPE" => "left",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => "tree"
                            ),
                            false
                        );?>
                        <div class="section-wrapper-container-content">
                          <div class="content-title"><?$APPLICATION->ShowTitle(false) ?></div>
                          <div class="content-wrapper-description">
                            <div class="content-description">
                <?php } ?>