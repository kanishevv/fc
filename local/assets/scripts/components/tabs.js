export const Tabs = () => {
    const tabs = $('.js-tab-select');

    tabs.on('click', function () {
        let idCont = $(this).data('content');
        let iTabsId = $(this).data('tabs-id');

        document.cookie = `BITRIX_SM_${iTabsId}=${idCont}`;

        // Убираем селекты
        $(`.js-tab-select[data-tabs-id=${iTabsId}]`).toggleClass('tabs__item_selected', false);
        $(`.js-tab[data-tabs-id=${iTabsId}]`).toggleClass('js-tab--active', false);

        $(this).toggleClass('tabs__item_selected');
        $('#' + idCont).toggleClass('js-tab--active');
    });
}