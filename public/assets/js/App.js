BASE_URL = 'http://127.0.0.1:8000/';

function performLogout() {
    $.ajax({
        type: 'GET',
        url: BASE_URL + 'dashboard/logout',
        dataType: 'json',
        success: function(response) {
            window.location.href = BASE_URL;
        },
        error: function(error) {
            console.log(error);
        }
    });
}
