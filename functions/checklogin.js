$(document).ready(function () {
    //check username duplicates
    $("#username").blur(function () {
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
                        $("#uname_response").html("<span style='color:#d93025;'><span class='fa fa-exclamation-circle'></span>   Username does not exist in database</span>");
                        $("#login").attr("disabled", true);
                        $("#username").html('<div class="form-group has-error"><div></div></div>');

                    }
                }
            });
        } else {
            $("#uname_response").hide();
        }
    });

    /* handling form validation */
    $("#login-form").validate({
        rules: {
            password: {
                required: true
            },
            username: {
                required: true
            },
        },
        messages: {
            password: {
                required: "Enter a password"
            },
            username: "Enter a username",
        },
        submitHandler: submitForm,
        // Called when the element is invalid:
        highlight: function (element) {
            //            $(element).css('background', '#ffdddd');
            $(element).css('border', '2px solid #d93025');
            $(element).css('border-radius', '4px');
            //            $(element).css('box-shadow', ' 0 0 3px #d93025');
            //            input { box-shadow: 0 0 3px #CC0000; margin: 10px }
        },

        // Called when the element is valid:
        unhighlight: function (element) {
            //            $(element).css('background', '#eee');
            //            $(element).css('box-shadow', 'none', 'margin', 'none');
            $(element).css('border', 'none');
            $(element).css('border-radius', 'none');
        }
    });
    /* Handling login functionality */
    function submitForm() {
        var data = $("#login-form").serialize();
        $.ajax({
            type: 'POST',
            url: 'action/login.php',
            data: data,
            beforeSend: function () {
                $("#error").fadeOut();
                $('#login-form').css({
                    'opacity': '0.5'
                });
                //                $("#login").html('<img src="action/ajax-loader3.gif" /> &nbsp; Signing In ...');
                $("#success").fadeIn(200, function () {
                    $("#success").html('<div class="bar"><div></div></div>');
                });
                $("#login").html('Signing In ...');
            },
            success: function (response) {
                if (response == "Login Successfully") {
                    console.log("gagana");
                    $("#error").fadeOut();
                    $('#login-form').css({
                        'opacity': '0.5'
                    });
                    //                    $("#success").fadeIn(1000, function () {
                    //                        $("#success").html('<div class="alert alert-green"> <span class="fa fa-check-circle"></span>&nbsp; ' + response + '</div>');
                    //                    });
                    $("#success").fadeIn(200, function () {
                        $("#success").html('<div class="bar"><div></div></div>');
                    });

                    //                    $("#login").html('<img src="action/ajax-loader3.gif" /> &nbsp; Signing In ...');
                    //                    setTimeout(' window.location.href = "admindashboard"; ', 1000);
                    $("#login").html('Signing In ...');
                    setTimeout(' window.location.href = "admindashboard"; ', 1000);
                } else {
                    $("#error").fadeIn(1000, function () {
                        document.body.style.cursor = 'default';
                        $('#login-form').css({
                            'opacity': '1'
                        });
                        //                        $("#error").html('<div class="alert alert-danger"> <span class="fa fa-exclamation-circle"></span> &nbsp; ' + response + '!</div>');
                        $("#error").fadeOut(1000, function () {
                            $("#error").html('<span style="color:#d93025;"> <span class="fa fa-exclamation-circle"></span> &nbsp; ' + response + '!</span>');
                        });
                        $("#login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign me in');
                        $("#success").fadeOut(5, function () {
                            $("#success").html('<div class="bar"><div></div></div>');
                        });
                    });
                }
            }
        });
        return false;
        //        'Invalid Username or Password'
    }

});

$(document).ready(function () {
    $("#login").attr("disabled", true);
    $('#password').keyup(function () {
        if ($(this).val().length != 0)
            $("#login").attr("disabled", false);
        else
            $("#login").attr("disabled", true);
    })
});
