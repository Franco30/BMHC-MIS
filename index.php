<html>

<head>
    <meta charset="utf-8" />
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
                <h1 style="color:#000000">Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="POST" id="login-form">
                <div class="image-container">
                    <img src="login3/bmhclogo.png" alt="" width="120">
                </div> <br>
                <h1 style="color:#000000">BMHC-MIS</h1>
                <br>
                <div id="error"></div>
                <div id="success"></div>
                <div id="uname_response"></div>
                <input type="text" placeholder="Username" id="username" name="username" required />
                <input type="password" placeholder="Password" name="password" id="password" required />
                <span toggle="#password" class="fa fa-eye field-icon toggle-password"></span>
                <br>
                <button type="submit" id="login" name="login">Sign in</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
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
</body>

</html>