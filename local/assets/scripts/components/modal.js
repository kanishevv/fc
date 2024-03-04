export const Modal = (event) => {
    $('.js-modal-open').click(function () {
        let selector = $(this).data('modal-selector');
        $(selector).addClass('modal--visible');
        $('.page:first').css('overflow', 'hidden');
    });

    $('.js-modal-close').click(function () {
        let selector = $(this).data('modal-selector');
        $(selector).removeClass('modal--visible');
        $('.page:first').css('overflow', 'auto');
    });
}