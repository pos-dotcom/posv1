$(document).ready(function () {
    $("#CompraEnc").on("submit", function (e) {
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        $.ajax({
            url: formURL,
            type: "POST",
            data: postData,
            success: function (data, textStatus, jqXHR) {
                //    $('#myModal .modal-header .modal-title').html("Result");
                $('#myModal .modal-body').html(data);
                //    $("#submitForm").remove();
            },
            error: function (jqXHR, status, error) {
                console.log(status + ": " + error);
            }
        });
        e.preventDefault();
    });

    $("#submitForm").on('click', function () {
        $("#CompraEnc").submit();
    });

    



});


