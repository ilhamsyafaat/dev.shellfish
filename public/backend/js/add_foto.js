$(".add-more").on("click", function () {
    var card =
        '<div class="row mb-3 justify-content-between">' +
        '<div class="col">' +
        '<div class="custom-file">'+
        '<input type="file" accept="image/png, image/jpeg" class="form-control-file" required name="foto_detail[]" id="foto_detail">' +
        "</div>" +
        "</div>" +
        '<div class="co">' +
        '<button class="btn btn-danger delete"> Delete </button>' +
        "</div>" +
        "</div>";
    $(".add-more-data").append(card);
});

$(".add-more-data").delegate(".delete", "click", function () {
    $(this).parent().parent().remove();
});
