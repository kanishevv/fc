                    </div>
                </div>
                <? if(defined('SHOW_CAROUSEL')) { ?>
                    <div class="section-wrapper-container-carousel">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "main-page-categories",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "categories",
                                "USE_EXT" => "N",
                            ),
                            false
                        ); ?>
                    </div>
                <? } ?>
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
                        <div class="footer__col-title js-menu-toggle-footer">Карта сайта</div>
                        <div class="footer__col-wrap">
                            <?php $APPLICATION->IncludeComponent(
                                "wl:main.map",
                                "",
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
                        <a href="/o-tsentre/svedeniya.php#map">
                            <div class="footer__col-title">Контактная информация</div>
                        </a>
                        <div class="footer__col-wrap">
                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/__include__/contact.php"
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
                            <button class="footer__button footer__subscribe-button js-modal-open" data-modal-selector="#modal-subscribe">
                                <svg>
                                    <use xlink:href="/local/build/icons/sprite.svg#news-paper"></use>
                                </svg>
                                <span>Подписаться</span>
                            </button>

                            <a href="/upload/content/application.apk" class="footer__button">
                                <svg>
                                    <use xlink:href="/local/build/icons/sprite.svg#android"></use>
                                </svg>
                                <span>Скачать APK</span>
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
                    <div class="footer__copyright">
                        © 1999-2023 ФГБНУ Федеральный центр образовательного законодательства. Все права защищены

                        <div class="footer__ya">

							<!-- Yandex.Metrika counter -->
                            <script type="text/javascript" >
                                (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(76366864, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true });
                            </script>
                            <noscript>
                                <div>
                                    <img src="https://mc.yandex.ru/watch/76366864" style="position:absolute; left:-9999px;" alt="" />
                                </div>
                            </noscript>
                            <!-- /Yandex.Metrika counter -->
<span id="sputnik-informer"></span>
                        </div>
                    </div>
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

        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:subscribe.edit",
            "modal",
            [
                "COMPONENT_TEMPLATE" => "modal",
                "SHOW_HIDDEN" => "N",
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "ALLOW_ANONYMOUS" => "Y",
                "SHOW_AUTH_LINKS" => "N",
                "SET_TITLE" => "N"
            ]
        );
        ?>

        <script type="text/javascript"> 
            (function(d, t, p) { 
                var j = d.createElement(t); j.async = true; j.type = "text/javascript"; 
                j.src = ("https:" == p ? "https:" : "http:") + "//stat.sputnik.ru/cnt.js"; 
                var s = d.getElementsByTagName(t)[0]; s.parentNode.insertBefore(j, s); 
            })(document, "script", document.location.protocol); 
        </script>

        <script src="<?= $assetManager->getEntry('main.js') ?>"></script>
    </body>

</html>
