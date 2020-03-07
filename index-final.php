<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#E91E63" />
    <title>BMHC-MIS</title>
    <link rel="icon" href="assets/images/bmhc.png" type="image/x-icon" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets3/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <style type="text/css">
        .login-form {
            width: 330px;
            margin: 30px auto;
        }

        .login-form h2 {
            font-size: 19px;
            margin-bottom: 15px;
            text-align: center;
        }

        .login-form form {
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            margin-bottom: 10px;
            padding: 30px;
        }

        .login-form .avatar {
            width: 80px;
            margin-bottom: 20px;
        }

        .login-form .form-control,
        .login-form .btn {
            min-height: 38px;
        }

        .login-form input[type="email"] {
            border-radius: 2px 2px 0 0;
        }

        .login-form input[type="password"] {
            border-radius: 0 0 2px 2px;
            margin-top: -1px;
        }

        .login-form input.form-control:focus {
            position: relative;
            z-index: 2;
        }

        .login-form .btn {
            font-size: 15px;
            font-weight: bold;
            border-radius: 2px;
        }

    </style>
</head>

<body>
    <div class="login-form">
        <h2>Sign in to Your Account</h2>
        <form method="POST" id="login-form">
            <div class="text-center">
                <img src="/assets/images/bmhclogo.png" class="img-circle avatar" alt="Avatar">
            </div>
            <div id="error"></div>
            <div id="success"></div>
            <div id="uname_response"></div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" id="username" name="username" required />
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required />
            </div>
            <div class="form-group">
                <button type="submit" id="login" name="login" class="btn btn-primary btn-block" onclick="document.body.style.cursor='progress'; return true;">Sign in</button>
            </div>
            <!--
            <div class="clearfix">
                <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                <a href="#" class="pull-right">Forgot Password?</a>
            </div>
-->
        </form>
        <!--        <p class="text-center"><a href="#">Create an Account</a></p>-->
    </div>

    <script type="text/javascript" src="functions/checklogin.js"></script>
    <script src="js/validation.min.js"></script>
    <script type="text/javascript">
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

    </script>
    <script type="text/javascript">
        // Set the cursor ASAP to "Wait"
        document.body.style.cursor = 'progress';

        // When the window has finished loading, set it back to default...
        window.onload = function() {
            document.body.style.cursor = 'default';
        }

    </script>
</body>

</html>
