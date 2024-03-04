export const Filter = () => {
    $('.filter__checkbox').on('change', function () {
        if ($(this).is(':checked')) {
            $('#' + $(this).attr('id') + '_hidden').prop('disabled', true);
        } else {
            $('#' + $(this).attr('id') + '_hidden').prop('disabled', false);
        }
    });

    $('.del_filter').on('click', function () {
        let form = $('#' + $(this).data('form-id'));

        form.find('.filter__field').attr('value', '');
        form.find('.filter__checkbox').prop('checked', false);
        form.find('.form__date').val('');

        let sAction = form.attr('action').replace('search.php', '');
        form.attr('action', sAction);

        form.submit();
    });

    $('.js-tab-select').on('click', function () {
        $('.js-tab--active[data-tabs-id="tabs"]:first').find('input[autofocus]:first').focus();
    });
}