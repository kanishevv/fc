<?

use Local\Base\Helper;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
$APPLICATION->SetPageProperty("page_type", "main");

global $arFaqFilter;
$arFaqFilter = array(
    "PROPERTY" => array('SHOW_ON_MAIN' => 1)
);
?>

<div class="main-page">
    <div class="main-page__row">
        <div class="main-page__col">
            <?php $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main-news", 
	array(
		"TITLE" => "Актуальное",
		"LIST_PAGE_URL" => "/grazhdanam/novosti/aktualnoe/",
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "main-news",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "/grazhdanam/novosti/aktualnoe/detail.php?ELEMENT_ID=#ID#",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "",
		),
		"FILTER_NAME" => "arFaqFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"IBLOCK_ID" => "16",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "URL",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "",
		"STRICT_SECTION_CHECK" => "N",
		"DATA_TYPE" => "DOC"
	),
	false
); ?>
            <?php $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "main-news",
                array(
                    "TITLE" => "Новости и события",
                    "LIST_PAGE_URL" => "/grazhdanam/novosti/novosti-i-sobytiya/",
                    "ACTIVE_DATE_FORMAT" => "j F Y",    // Формат показа даты
                    "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                    "AJAX_MODE" => "N",    // Включить режим AJAX
                    "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                    "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                    "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                    "CACHE_FILTER" => "Y",    // Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                    "CACHE_TYPE" => "A",    // Тип кеширования
                    "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                    "COMPONENT_TEMPLATE" => "newsweeklist",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "DETAIL_URL" => "/grazhdanam/novosti/novosti-i-sobytiya/detail.php?ELEMENT_ID=#ID#",
                    "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                    "DISPLAY_DATE" => "N",    // Выводить дату элемента
                    "DISPLAY_NAME" => "N",    // Выводить название элемента
                    "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
                    "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                    "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                    "FIELD_CODE" => array(    // Поля
                        0 => "PREVIEW_TEXT",
                        1 => "",
                    ),
                    "FILTER_NAME" => "arFaqFilter",    // Фильтр
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",    // Скрывать ссылку, если нет детального описания
                    "IBLOCK_ID" => "20",    // Код информационного блока
                    "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                    "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                    "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                    "NEWS_COUNT" => "6",    // Количество новостей на странице
                    "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                    "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                    "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                    "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                    "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                    "PAGER_TITLE" => "Новости",    // Название категорий
                    "PARENT_SECTION" => "",    // ID раздела
                    "PARENT_SECTION_CODE" => "",    // Код раздела
                    "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                    "PROPERTY_CODE" => array(    // Свойства
                        0 => "",
                    ),
                    "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                    "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                    "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                    "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                    "SET_STATUS_404" => "N",    // Устанавливать статус 404
                    "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                    "SHOW_404" => "N",    // Показ специальной страницы
                    "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                    "SORT_BY2" => "",    // Поле для второй сортировки новостей
                    "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                    "SORT_ORDER2" => "",    // Направление для второй сортировки новостей
                    "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                    "DATA_TYPE" => "DOC"
                ),
                false
            ); ?>
            <?php $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "main-news",
                array(
                    "TITLE" => "Мероприятия",
                    "LIST_PAGE_URL" => "/grazhdanam/novosti/meropriyatiya/",
                    "ACTIVE_DATE_FORMAT" => "j F Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "N",
                    "COMPONENT_TEMPLATE" => "main-news",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "DETAIL_URL" => "/grazhdanam/novosti/meropriyatiya/detail.php?ELEMENT_ID=#ID#",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "N",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "PREVIEW_TEXT",
                        1 => "",
                    ),
                    "FILTER_NAME" => "arFaqFilter",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "IBLOCK_ID" => "36",
                    "IBLOCK_TYPE" => "calend",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "6",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "",
                    "STRICT_SECTION_CHECK" => "N",
                    "DATA_TYPE" => "DOC"
                ),
                false
            ); ?>
        </div>
        <div class="main-page__col">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "main-faq",
                array(
                    "TITLE" => "Вопросы и ответы",
                    "LIST_PAGE_URL" => "/search/index.php?where=&q=&iblockCode=content_faq",
                    "ACTIVE_DATE_FORMAT" => "j F Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "main-faq",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    // "DETAIL_URL" => "/search/detail.php?ELEMENT_ID=#ID#",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "N",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "PREVIEW_TEXT",
                        1 => "",
                    ),
                    "FILTER_NAME" => "arFaqFilter",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "IBLOCK_ID" => "44",
                    "IBLOCK_TYPE" => "content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "30",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "RUBRIC",
                        1 => "PROPERTY_RUBRIC",
                        2 => "SHOW_ON_MAIN",
                    ),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "",
                    "STRICT_SECTION_CHECK" => "N"
                ),
                false
            ); ?>
        </div>
        <div class="main-page__col">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "card",
                array(
                    "TITLE" => "Документы недели",
                    "LIST_PAGE_URL" => "/extended-search/",
                    "ACTIVE_DATE_FORMAT" => "j F Y",    // Формат показа даты
                    "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                    "AJAX_MODE" => "N",    // Включить режим AJAX
                    "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                    "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                    "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                    "CACHE_FILTER" => "Y",    // Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                    "CACHE_TYPE" => "A",    // Тип кеширования
                    "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                    "COMPONENT_TEMPLATE" => "newsweeklist",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "DETAIL_URL" => "/search/detail.php?ELEMENT_ID=#ID#",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                    "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                    "DISPLAY_DATE" => "N",    // Выводить дату элемента
                    "DISPLAY_NAME" => "N",    // Выводить название элемента
                    "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
                    "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                    "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                    "FIELD_CODE" => array(    // Поля
                        0 => "PREVIEW_TEXT",
                        1 => "",
                    ),
                    "FILTER_NAME" => "",    // Фильтр
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",    // Скрывать ссылку, если нет детального описания
                    "IBLOCK_ID" => Helper::getIblockId("content_documents"),    // Код информационного блока
                    "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                    "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                    "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                    "NEWS_COUNT" => "30",    // Количество новостей на странице
                    "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                    "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                    "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                    "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                    "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                    "PAGER_TITLE" => "Новости",    // Название категорий
                    "PARENT_SECTION" => "",    // ID раздела
                    "PARENT_SECTION_CODE" => "",    // Код раздела
                    "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                    "PROPERTY_CODE" => array(    // Свойства
                        0 => "DOCUMENT_TYPE",
                        1 => "CREATOR",
                        2 => "DATE_NUM_DOC"
                    ),
                    "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                    "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                    "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                    "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                    "SET_STATUS_404" => "N",    // Устанавливать статус 404
                    "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                    "SHOW_404" => "N",    // Показ специальной страницы
                    "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                    "SORT_BY2" => "",    // Поле для второй сортировки новостей
                    "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                    "SORT_ORDER2" => "",    // Направление для второй сортировки новостей
                    "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                    "DATA_TYPE" => "DOC",
                    "CARD_TITLE_HREF" => "/zakonodatelstvo-ob-obrazovanii/documents-of-week.php"
                ),
                false
            ); ?>
        </div>
    </div>
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

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>