export const Tree = () => {
    $.each($('.tree__item-link'), function (index, item) {
        if ($(item).parent().children('.tree__list').length !== 0) {
            $(this).closest('li').children('ul').slideUp();
            $(this).removeAttr('href');
        }
    });


    document.querySelectorAll('.tree__item-link').forEach(el => {
        el.addEventListener('click', ev => {
            ev.stopPropagation();
            let currentParent = ev.target.parentElement;
            const rootItem = document.querySelector('.tree__list_lvl-1');
            for ( ; currentParent && currentParent !== rootItem; currentParent = currentParent.parentElement) {
                if (currentParent.classList.contains('tree__item')) {
                    const currentWrap = currentParent.parentElement;
                    if (currentWrap.matches('ul')) {
                        currentWrap.querySelectorAll(':scope > li').forEach(li => {
                            if (li !== currentParent) {
                                li.querySelectorAll(':scope ul').forEach(siblingsChild => {
                                    $(siblingsChild).slideUp();
                                });
                            }
                        });
                    }
                }
            }
        });
    });
    $('.tree__item-link').on("click", function () {
        if ($(this).closest('li').children('ul').is(':visible')) {
            $(this).closest('li').children('ul').slideUp();
        } else {
            $(this).closest('li').children('ul').slideDown();
        }
        if ($(this).closest('li').children('ul').attr('class') == 'myul') {
            return false;
        }
    });
}
