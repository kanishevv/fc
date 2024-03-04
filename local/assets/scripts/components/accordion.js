export const Accordion = () => {
    $('.js-accordion-trigger').on('click', function () {
       let accordionId = $(this).data('accordion');
       if (!accordionId) return false;

       let data = $(`.js-accordion-data[data-accordion=${accordionId}]:first`);
       if (data.length <= 0) return false;

       data.toggleClass('js-accordion-data-open');
       $(this).toggleClass('js-accordion-trigger-open');
    });

    // Захлапываем аккордионы на мобилке
    if (window.screen.width <= 768) {
        $('.js-accordion-trigger').each(function () {
            $(this).removeClass('js-accordion-trigger-open');
        });

        $('.js-accordion-data').each(function () {
            $(this).removeClass('js-accordion-data-open');
        });
    }
}