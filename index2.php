<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>BMHC-MIS</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link href="assets2/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets2/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets2/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="assets2/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="assets2/css/material/style.min.css" rel="stylesheet" />
	<link href="assets2/css/material/style-responsive.min.css" rel="stylesheet" />
	<link href="assets2/css/material/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets2/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>

<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<div class="material-loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
			</svg>
			<div class="message">Loading...</div>
		</div>
	</div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(assets2/img/login-bg/login-bg-11.jpg)"></div>
				<div class="news-caption">
					<h4 class="caption-title">Barangay Mansilingan Health Center - MIS</h4>
					<p>
						Management Information System of Barangay Mansilingan to help and protect the human lives.
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand">
						BMHC-MIS
						<small>Brgy. Mansilingan Health Center</small>
					</div>
					<div class="icon">
						<i class="fa fa-sign-in"></i>
					</div>
				</div>
				<!-- end login-header -->
				<!-- begin login-content -->
				<div class="login-content">
					<form action="action/login" method="POST" class="margin-bottom-0">
						<div class="form-group m-b-15">
							<div id="uname_response"></div>
							<input type="text" class="form-control form-control-lg" placeholder="Username" id="username" name="username" required />
						</div>
						<div class="form-group m-b-15">
							<input type="password" class="form-control form-control-lg" placeholder="Password" name="password" required />
						</div>
						<div class="checkbox checkbox-css m-b-30">
							<input type="checkbox" id="remember_me_checkbox" value="" />
							<label for="remember_me_checkbox">
								Remember Me
							</label>
						</div>
						<div class="login-buttons">
							<button type="submit" class="btn btn-pink btn-block btn-lg" id="login" name="login">Sign me in</button>
						</div>
						<div class="m-t-20 m-b-40 p-b-40 text-inverse">
<!--							Not a member yet? Click <a href="signup" class="text-pink">here</a> to register.-->
						</div>
						<hr />
						<p class="text-center text-grey-darker">
							<span class="helper-text"><i class="fa fa-code"></i> <a href="page-lockscreen" class="text-pink">Developed by Three-Eyed Ravens</a></span>
						</p>
					</form>
				</div>
				<!-- end login-content -->
			</div>
			<!-- end right-container -->
		</div>
		<!-- end login -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets2/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="functions/checklogin.js"></script>
	<script src="assets2/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets2/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
	<script src="assets2/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets2/plugins/js-cookie/js.cookie.js"></script>
	<script src="assets2/js/theme/material.min.js"></script>
	<script src="assets2/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>

</html>