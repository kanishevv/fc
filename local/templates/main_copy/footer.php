</div>
</div>
<? if (defined('SHOW_CAROUSEL')) { ?>

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
        </div>
        <div class="footer__row">
            <div class="footer__copyright">
                © 2021 ФГБНУ Федеральный центр образовательного законодательства. Все права защищены

                <div class="footer__ya">
                    <!-- Yandex.Metrika informer -->
                    <a href="https://metrika.yandex.ru/stat/?id=76366864&amp;from=informer" target="_blank"
                       rel="nofollow">
                        <img src="https://informer.yandex.ru/informer/76366864/1_0_FFFFFFFF_E5EEF5FF_0_uniques"
                             style="width:80px; height:15px; border:0;"
                             alt="Яндекс.Метрика"
                             title="Яндекс.Метрика: данные за сегодня (уникальные посетители)"
                             class="ym-advanced-informer"
                             data-cid="76366864"
                             data-lang="ru"/>
                    </a>
                    <!-- /Yandex.Metrika informer -->
                    <!-- Yandex.Metrika counter -->
                    <script type="text/javascript">
                        (function (m, e, t, r, i, k, a) {
                            m[i] = m[i] || function () {
                                (m[i].a = m[i].a || []).push(arguments)
                            };
                            m[i].l = 1 * new Date();
                            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
                        })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
                        ym(76366864, "init", {
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true,
                            webvisor: true
                        });
                    </script>
                    <noscript>
                        <div>
                            <img src="https://mc.yandex.ru/watch/76366864" style="position:absolute; left:-9999px;"
                                 alt=""/>
                        </div>
                    </noscript>
                    <!-- /Yandex.Metrika counter -->
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
	array(
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

<script src="<?= $assetManager->getEntry('main.js') ?>"></script>
</body>

</html>