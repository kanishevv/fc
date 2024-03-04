export const FeedbackForm = () => {
    const feedbackForm = $(".js-form");

    const initFeedbackForm = (event) => {
        event.preventDefault();

        var form = $(event.target);
        var formData = new FormData(event.target)
        var url = form.attr('action');

        $.ajax({
            contentType: false,
            processData: false,
            type: "POST",
            url: url,
            data: formData,
            statusCode: {
                500: function (data) {
                    let response = $.parseJSON(data.responseText);
                    form.empty();
                    $($('.modal__footer')[0]).empty();
                    form.append(
                        '<p>' + response.message + '</p>'
                    )
                },
                400: function (data) {
                    let response = $.parseJSON(data.responseText);
                    let errorCont = $(form.find('.feedback-form__errors')[0]);
                    if (errorCont) {
                        errorCont.empty();
                        $.each(response.errors, function (index, item) {
                            errorCont.append(item);
                        });
                    }
                }
            },
            success: function (data) {
                form.empty();
                $($('.modal__footer')[0]).empty();
                form.append(
                    '<p>' + data.message + '</p>'
                )
            }
        });
    }

    feedbackForm.on('submit', (event) => initFeedbackForm(event));
}