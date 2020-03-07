<html>

<head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#E91E63" />
    <title>BMHC-MIS</title>
    <link rel="icon" href="assets/images/bmhc.png" type="image/x-icon" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets2/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets2/plugins/font-awesome/5.0/css/fontawesome-all.min2.css" rel="stylesheet" />
    <link href="assets2/css/material/style.min2.css" rel="stylesheet" />
    <link rel="stylesheet" href="login3/login.css">

    <style>
        /*
        .field-icon {
			float: right;
			margin-right: 9px;
			margin-top: -29px;
			position: relative;
			z-index: 2;
		}
*/

        .container {
            padding-top: 50px;
            margin: auto;
        }

    </style>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1 style="color:#000000">THREE-EYED RAVENS</h1>
                <!--
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
-->
                <br>
                <div class="form-row shit">
                    <div class="col-md-4">
                        <!-- CONTACT ITEM -->
                        <div class="panel panel-default" style="border-radius: 20px;">
                            <div class="panel-body profile">
                                <div class="profile-image" style="height: 157px;border-radius: 20px;border: none;">
                                    <img src="assets/images/users/ANDREW.png" alt="Daniel Andrew Go" />
                                </div>
                                <div class="profile-data">
                                    <h1 style="color:#000000;font-size: 12px;">Daniel Andrew Go</h1>
                                    <span>Document Specialist</span>
                                </div>
                            </div>
                            <div class="panel-body" style="background-color: #E91E63;color: white;">
                                <div class="contact-info">
                                    <span><small>Email</small><br />andrewsgo98@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTACT ITEM -->
                    </div>

                    <div class="col-md-4">
                        <!-- CONTACT ITEM -->
                        <div class="panel panel-default" style="border-radius: 20px;">
                            <div class="panel-body profile">
                                <div class="profile-image" style="height: 157px;border-radius: 20px;border: none;">
                                    <img src="assets/images/users/FRANCO.png" alt="Jesse Franco Latosa" />
                                </div>
                                <div class="profile-data">
                                    <h1 style="color:#000000;font-size: 12px;">Jesse Franco Latosa</h1>
                                    <span>Lead Programmer</span>
                                </div>
                            </div>
                            <div class="panel-body" style="background-color: #E91E63;color: white;">
                                <div class="contact-info">
                                    <span><small>Email</small><br />francolatosa12@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTACT ITEM -->
                    </div>

                    <div class="col-md-4">
                        <!-- CONTACT ITEM -->
                        <div class="panel panel-default" style="border-radius: 20px;">
                            <div class="panel-body profile">
                                <div class="profile-image" style="height: 157px;border-radius: 20px;border: none;">
                                    <img src="assets/images/users/JP.png" alt="John Phillip Dela Cruz" />
                                </div>
                                <div class="profile-data">
                                    <h1 style="color:#000000;font-size: 12px;">John Phillip Dela Cruz</h1>
                                    <span>System Analyst</span>
                                </div>
                            </div>
                            <div class="panel-body" style="background-color: #E91E63;color: white;">
                                <div class="contact-info">
                                    <span><small>Email</small><br />jheypdlcrz@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTACT ITEM -->
                    </div>
                </div>
                <hr style="margin:-24px 0 5px 0;">
                <hr>
                <span style="color: #000000;">
                    <center><strong>University of Negros Occidental Recoletos</strong></center>
                </span>
                <span style="color: #000000;">
                    <center><strong>Department of Information Technology © 2020</strong></center>
                </span>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <div class="login-form">
                <form method="POST" id="login-form">
                    <div id="success"></div>
                    <div class="image-container" style="margin-top: -150px;">
                        <img src="login3/bmhclogo.png" alt="" width="120">
                    </div> <br>
                    <h1 style="color:#000000">BMHC-MIS</h1>
                    <br>
<!--                    form-group has-error-->
                    <input type="text" placeholder="Username" id="username" name="username" required />
                    <div id="uname_response" style="text-align: left;"></div>
                    <div id="error" style="text-align: left;"></div>
                    <input type="password" placeholder="Password" name="password" id="password" required />
                    <span toggle="#password" class="fa fa-eye field-icon toggle-password"></span>
                    <br>
                    <button type="submit" id="login" name="login" onclick="document.body.style.cursor='progress'; return true;">Sign in</button>
                </form>
            </div>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 style="font-size: 30px;">Barangay Mansilingan Health Center</h1>
                    <p>Management Information System</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 style="font-size: 30px;">Barangay Mansilingan Health Center</h1>
                    <p>Management Information System</p>
                    <button class="ghost" id="signUp">Three-Eyed Ravens</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>
            All Rights Reserved | <a target="_blank" href="https://florin-pop.com"></a>Three-Eyed Ravens
        </p>
    </footer>
    <script src="assets2/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="functions/checklogin.js"></script>
    <script src="js/validation.min.js"></script>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });

    </script>

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

    <script>
    $('#login').click(function() {
    $('#login-form').css({
        'opacity': '0.5'
    });
});
    </script>
</body>

</html>
