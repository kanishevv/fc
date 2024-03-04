import { Select } from '../components/select';

export const Diploma = () => {
    function updateLinks() {
        $(".js-diploma-link").on("click", function (e) {
            e.preventDefault();

            let target = $(e.target);

            $.ajax({
                url: target.attr("href"),
                method: "get",
                success: function (data) {
                    let pageData = $(data).find('.diploma__content:first').html();
                    let content = $(".diploma__content:first");

                    content.empty();
                    content.append(pageData);

                    updateSelect();
                    updateLinks();

                    $([document.documentElement, document.body]).animate({
                        scrollTop: $('.section-wrapper-container-content:first').offset().top
                    }, 600);
                }
            });
        });
    }

    function updateSelect() {
        Select();

        $(".js-diploma-select").on("change", function (e) {
            let target = $(e.target);

            if (!target.val()) {
                return false;
            }

            $.ajax({
                url: target.val(),
                method: "get",
                success: function (data) {
                    let pageData = $(data).find('.diploma__content:first').html();
                    let content = $(".diploma__content:first");

                    content.empty();
                    content.append(pageData);

                    updateLinks();

                    $([document.documentElement, document.body]).animate({
                        scrollTop: $('.section-wrapper-container-content:first').offset().top
                    }, 600);
                }
            });
        });
    }

    updateSelect();
}