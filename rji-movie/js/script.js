$("#search-button").on("click", function () {
  $.ajax({
    url: "http://www.omdbapi.com",
    type: "get",
    dataType: "json",
    data: {
      apikey: "61d415c8",
      s: $("#search-input").val(),
    },
    success: function (result) {
      console.log(result);
    },
  });
});
