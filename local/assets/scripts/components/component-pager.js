export const ComponentPager = () => {
    $('.js-page-num').keydown(function(e) {
        if(e.keyCode === 13) {
            $(".js-pager-go-button:first").click();
        }
    });

    $(".js-pager-go-button").on("click", function () {
        let pageNum = $(".js-page-num:first");
        let value = pageNum.val();
        let maxValue = pageNum.attr("max");
        let url = pageNum.data("url");

        if (!$.isNumeric(value)) {
            alert("Введите число!");
            return false;
        }

        if (+value <= 0) {
            alert("Страницы начинаются с 1");
            return false;
        }

        if (+value > +maxValue) {
            alert("Максимальная страница: " + maxValue);
            return false;
        }

        window.location.href = url + value;
    });
}