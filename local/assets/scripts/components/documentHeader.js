import { Tabs } from '../components/tabs';

export const DocumentHeader = () => {
    let winScrollTop = '';
    if ($('.js-document-header:first').length > 0) {
        let data = [];

        $('.js-button-scroll-document-header:first').addClass('button-scroll__document-header--active');

        $('.js-button-scroll-document-header:first').on('click', function () {
            $('.document-header:first').addClass('document-header--active');
            if ($(window).width() < 577) {
                winScrollTop = $(window).scrollTop();
                $('.document-header:first').removeClass('document-header--mobile-hide');
                $('body, html').addClass('no-scroll');
                $('body, html').animate({
                    scrollTop: winScrollTop
                }, 0);
            }
        });

        $('.search-result__col--left:first').append('<div class="document-header document-header--standard">' +
            '<div class="document-header__header">' +
            '<div class="document-header__title">Оглавление</div>' +
            '<div class="document-header__close"><svg>' +
            '<use xlink:href="/local/build/icons/sprite.svg#close_gray"></use>' +
            '</svg></div>' +
            '</div>' +
            '<div class="document-header__content"></div>' +
            '</div>');

        $('.document-header__close').on('click', function () {
            $('.document-header:first').removeClass('document-header--active');
            if ($(window).width() < 577) {
                $('body, html').removeClass('no-scroll');
                $('body, html').animate({
                    scrollTop: winScrollTop
                }, 0);
            }
        });

        $('.js-document-header').each(function (index, item) {
            let text = $(item).text().replace(/\s{2,}/g, ' ').trim();
            let url = $(item).attr('href');
            let chapter = $(item).data('chapter');
            let article = $(item).data('article');

            if (!article) {
                data.push({
                    text: text,
                    url: url,
                    chapter: chapter,
                    article: article,
                    articles: []
                });
            } else {
                data[chapter - 1]['articles'].push({
                    text: text,
                    url: url,
                    chapter: chapter,
                    article: article
                });
            }
        });

        for (let key in data) {
            let chapter = data[key];

            $('.document-header__content:first').append(
                '<div class="document-header__accordion js-tab-select js-tab-select-scroll" data-content="chapter-' + chapter.chapter + '" ' +
                'data-tabs-id="accordions">' + chapter.text + '</div>'
            );

            $('.document-header__content:first').append(
                '<div id="chapter-' + chapter.chapter + '" class="document-header__accordion-content js-tab" ' +
                'data-tabs-id="accordions">'
            );

            for (let key in chapter.articles) {
                let article = chapter.articles[key];

                $('#chapter-' + chapter.chapter).append(
                    '<a class="document-header__accordion-article" href="' + article.url + '">' + article.text + '</a>'
                );
            }
        }

        $('.document-header__accordion-article').on('click', function () {
            $('.document-header:first').removeClass('document-header--active');
            if ($(window).width() < 577) {
                $('body, html').removeClass('no-scroll');
            }
        });

        Tabs();
    }
}