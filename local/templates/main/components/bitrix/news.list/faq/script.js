$(document).ready(function() {
  function sendFilterForm() {
    var form = $(".js-search-form-filter");
    var url = form.attr("action");

    $.ajax({
      type: "GET",
      url: url,
      data: form.serialize(), // serializes the form's elements.
      success: function(response) {
        var formParams = form.serializeArray();

        if (formParams !== undefined && formParams.length > 0) {
            updateQueryStringParam(formParams);
        }

        const searchResultBlock = $(response).find(".search-result");

        $(".search-result")[0].innerHTML = searchResultBlock[0].innerHTML;

        setEvent();
      },
    });
  }

  function updateQueryStringParam(formParams) {
    const params = new URLSearchParams();

    for (let iParam = 0; iParam < formParams.length; iParam++) {
      const formParam = formParams[iParam];

      params.set(formParam.name, formParam.value);
    }

    window.history.replaceState({}, "", `${location.pathname}?${params}`);
  }

  function setEvent() {
    $(".search-form-rubrics__checkbox").on("change", function() {
      sendFilterForm();
    });
  }

  setEvent();
});
