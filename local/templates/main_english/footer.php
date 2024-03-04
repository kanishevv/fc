</div>
    </div>
        </div>
            </div>
                <?php if (
                    $APPLICATION->GetCurPage(false) != SITE_DIR &&
                    $APPLICATION->GetCurPage(false) != "/search/"
                ) { ?>
                    </div>
                <?php } ?>
            </div>
        </main>
        <footer class="footer">
            <div class="footer__container container">
                <div class="footer__row footer__row--nav">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "footer",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "footer",
                            "USE_EXT" => "N",
                        ),
                        false
                    ); ?>
                </div>
                <div class="footer__row">
                    <div class="footer__col">
                        <div class="footer__col-title js-menu-toggle-footer">Site map</div>
                        <div class="footer__col-wrap">
                            <?php $APPLICATION->IncludeComponent(
                                "wl:main.map",
                                "en",
                                array(
                                    "CACHE_TIME" => "3600",
                                    "CACHE_TYPE" => "N",
                                    "COL_NUM" => "1",
                                    "LEVEL" => "0",
                                    "SET_TITLE" => "N",
                                    "SHOW_DESCRIPTION" => "N"
                                )
                            ); ?>
                        </div>
                    </div>
                    <div class="footer__col">
                        <div class="footer__col-title">Contacts</div>
                        <div class="footer__col-wrap">
                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/__include__/contact_en.php"
                                )
                            ); ?>
                        </div>
                    </div>
                    <div class="footer__col">
                        <div class="footer__col-wrap">
	                        <?php
                                $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include/footer-app-link.php",
                                        "EDIT_TEMPLATE" => ""
                                    ]
                                );
	                        ?>
                        </div>
                        <div class="footer__col-item-wrap footer__col-item-wrap--flex">
                            <a href="/upload/content/application.apk" class="footer__button">
                                <svg>
                                    <use xlink:href="/local/build/icons/sprite.svg#android"></use>
                                </svg>
                                <span>Download APK</span>
                            </a>

	                        <?php
	                        $APPLICATION->IncludeComponent(
		                        "bitrix:main.include",
		                        "",
		                        [
			                        "AREA_FILE_SHOW" => "file",
			                        "PATH" => SITE_TEMPLATE_PATH."/include/socials.php",
			                        "EDIT_TEMPLATE" => ""
		                        ]
	                        )
	                        ?>
                        </div>
                    </div>
                </div>
                <div class="footer__row">
                    <div class="footer__copyright">© 1999-2023 Federal Center for Educational Legislation. All rights reserved</div>
                </div>
            </div>
        </footer>
        <?php $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "menu",
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
                "LOGO_SRC" => "/local/assets/images/logo_en.svg"
            ),
            false
        ); ?>

        <?php $APPLICATION->IncludeComponent(
            "kanishev:main.feedback",
            "modal",
            Array(
                "EMAIL_TO" => "info@fcoz.ru",
                "EVENT_MESSAGE_ID" => array("7"),
                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                "REQUIRED_FIELDS" => array("FIRST_NAME", "LAST_NAME", "EMAIL", "MESSAGE"),
                "USE_CAPTCHA" => "Y"
            )
        ); ?>

        <script src="<?= $assetManager->getEntry('main.js') ?>"></script>
    </body>

</html>
