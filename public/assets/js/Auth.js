function loginUser() {
    var formData = $('#login').serialize();

    $.ajax({
        url: BASE_URL,
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
            window.location.href = BASE_URL + response.redirect;
        },
        error: function(xhr, status, error) {
            console.log(error);
        }
    });
}