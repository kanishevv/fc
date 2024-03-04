export const ButtonScroll = () => {
    let main = $('main');
    let page = $('.page__container:first');

    checkPosition();

    window.addEventListener('scroll', checkPosition);

    $(".js-button-scroll-top").on("click", function() {
        if ($(window).width() < 577) {
            $('body, html').removeClass('no-scroll');
            $('.document-header:first').addClass('document-header--mobile-hide');
        }
        $([document.documentElement, document.body]).animate({
            scrollTop: page.offset().top + 5
        }, 0);
    });

    $(".js-button-scroll-bottom").on("click", function() {
        if ($(window).width() < 577) {
            $('body, html').removeClass('no-scroll');
            $('.document-header:first').addClass('document-header--mobile-hide');
        }
        $([document.documentElement, document.body]).animate({
            scrollTop: main.offset().top + main.height() - $(window).height()
        }, 0);
    });

    function checkPosition() {
        if ($(window).scrollTop() + $(window).height() >= page.offset().top + $(window).height()) {
            $(".button-scroll__row--bottom.js-button-scroll-hide").removeClass("js-button-scroll-hide");
        } else {
            $(".button-scroll__row--bottom").addClass("js-button-scroll-hide");
        }

        if ($(window).scrollTop() + $(window).height() >= main.offset().top + main.height() - $(window).height()) {
            $(".button-scroll__row--top").addClass("js-button-scroll-hide");
        } else {
            $(".button-scroll__row--top.js-button-scroll-hide").removeClass("js-button-scroll-hide");
        }
    }
}