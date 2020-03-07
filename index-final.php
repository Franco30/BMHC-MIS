<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Sign in Form like Google</title>
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
        width: 100px;
        margin-bottom: 20px;
    }
    .login-form .form-control, .login-form .btn {
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
    <form action="/examples/actions/confirmation.php" method="post">
        <div class="text-center">
            <img src="/assets/images/bmhclogo.png" class="img-circle avatar" alt="Avatar">
        </div>        
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" required="required">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
</div>
</body>
</html>                            