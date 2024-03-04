export const TopNav = () => {
    let hoverTimeout;

    $('.top-nav__list_lvl-1 > .top-nav__item').hover(
        function () {
            var _this = $(this);

            hoverTimeout = setTimeout(function () {
                _this.find('.top-nav__dropdown:first').addClass('top-nav__dropdown--hover');
            }, 1000);
        },
        function () {
            //Скрываем меню
            let dropDown = $(this).find('.top-nav__dropdown:first');

            setTimeout(function () {
                dropDown.removeClass('top-nav__dropdown--hover');
            }, 100);

            clearTimeout(hoverTimeout);
        }
    );
}