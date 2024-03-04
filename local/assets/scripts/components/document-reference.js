export const DocumentReference = () => {
    // Захлопываем справку для мобилки
    if (window.screen.width <= 768) {
        close_info_rows();
        $(".search-result__info-caption").each(function () {
            $(this).parent().removeClass("info-rows-open");
        });
    }

    $(".search-result__info-caption").on("click", function () {
        if ($(this).parent().attr('class') == "search-result__info info-rows-open") {
            close_info_rows();
            $(this).parent().removeClass("info-rows-open");
        } else {
            if ($(this).parent().attr('class') == "search-result__info") {
                $(this).parent().addClass("info-rows-open");
                open_info_rows();
            }
        }
    });

    function open_info_rows() {
        $(".search-result__info").find(".search-result__info-row").css("display", "block");
    }

    function close_info_rows() {
        $(".search-result__info.info-rows-open").find(".search-result__info-row").css("display", "none");
    }
}