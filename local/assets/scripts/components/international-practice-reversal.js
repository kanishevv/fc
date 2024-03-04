export const InternationalPracticeReversal = () => {
    var hover_flag = 0;
    var current_menu_item;
    var timeoutOver;
    $('.bx_hma_one_lvl').hover(
        function () {
            hover_flag = 1;
            current_menu_item = $(this);
            timeoutOver = setTimeout(function () {
                if (hover_flag == 1)
                    current_menu_item.find('.bx_children_container').show();
            }, 500);
        },
        function () {
            hover_flag = 0;
            clearTimeout(timeoutOver)
            $(this).find('.bx_children_container').hide();
            $(this).removeClass("hover");
        }
    );
    $('.bx_hma_one_lvl').click(function () {
        $(this).find('.bx_children_container').show();
    });
    $('.open_block .title').click(function () {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $(this).next('.text').slideUp(300);
        } else {
            $(this).addClass('open');
            $(this).next('.text').slideDown(300);
        }
    });
}