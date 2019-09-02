$(document).ready(function () {
    //check username duplicates
    $("#username").keyup(function () {
        var username = $("#username").val().trim();
        if (username != '') {
            $("#uname_response").show();

            $.ajax({
                url: 'action/checkusername.php',
                type: 'post',
                data: {
                    username: username
                },
                success: function (response) {
                    if (response > 0) {
                        $("#uname_response").html("");
                        $("#login").attr("disabled", false);

                    } else {
                        $("#uname_response").html("<span class='label label-danger'>Username does not exist in database</span>");
                        $("#login").attr("disabled", true);
                    }
                }
            });
        } else {
            $("#uname_response").hide();
        }
    });

    $("#password").keyup(function () {
        if (password != '') {
            $("#uname_response").show();

        var password = $("#password").val().trim();
            $.ajax({
                url: 'action/checkpassword.php',
                type: 'post',
                data: {
                    password: password
                },
                success: function (response) {
                    if (response > 0) {
                        $("#login").attr("disabled", false);

                    } else {
                        $('#loginlabel').slideDown();
                        $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> Invalid account. <br> Please check your username and password.');
                        setTimeout(function () {
                            $('#loginlabel').fadeOut('slow');
                        }, 1500);
                        $("#login").attr("disabled", true);
                    }
                }
            });
        } else {
            $("#loginlabel").hide();
        }
    });

    $(document).on('click', '#login', function () {
        if ($('#username').val() == "" || $('#password').val() == "") {
            $('#loginlabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#loginlabel').fadeOut('slow');
            }, 3500);
        }

    });

});