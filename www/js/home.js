$(document).ready(function () {
    $('#submit').click(function () {
        var email = $('#email').val();
        var password = $('#password').val();
        var s = 'http://' + server + '/api/authenticateUser.php?email=' + email + "&password=" + password;
        var $defer = $.ajax({
            url: 'http://' + server + '/api/authenticateUser.php?email=' + email + "&password=" + password,
            type: 'POST',
            dataType: 'jsonp',
            success: function (data) {
                var dVal = data[0];
                if (dVal.success == "true") {
                    window.location.href = "main.html?id=" + dVal.id;
                } else {
                    $('#loginError').text("Wrong email and/or password");
                }
            },
            error: function (data) {
                //console.log('error');
            }

        });
    });
});