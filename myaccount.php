<?php require 'require/logincheck.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>BMHC-MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="theme-color" content="#E91E63" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="assets/images/bmhc.png" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
    <link rel="stylesheet" type="text/css" href="assets3/vendor/font-awesome/css/font-awesome.min.css" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">
        <?php require 'require/adminsidebar.php' ?>
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <?php require 'require/adminheader.php' ?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">System Maintenance</a></li>
                <li class="active"><strong><mark>Update Profile</mark></strong></li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        require 'require/config.php';
                        $id = $_SESSION['user_id'];
                        $q = $conn->query("SELECT * FROM `users` where `user_id` = '$id'") or die(mysqli_error());
                        $f = $q->fetch_array();
                    ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    Account Details
                                </h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" id="user">
                                    <div id="alert" class="alert alert-success" style="display:none;">
                                        <center><span id="alerttext"></span></center>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-8">
                                            <input type="hidden" name="user_id" id="user_id" value="<?php echo $id?>">
                                            <input type="text" id="fullname" class="form-control" value="<?php echo $f['fullname']?>" placeholder="Enter Full Name" />
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-2 col-form-label">Username</label>
                                        <div class="col-md-8">
                                            <input type="text" id="username" class="form-control" value="<?php echo $f['username']?>" placeholder="Enter Userame" />
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-2 col-form-label">New Password</label>
                                        <div class="col-md-8">
                                            <input type="text" id="password" name="password" class="form-control" placeholder="Enter Password" />
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-2 col-form-label">Confirm Password</label>
                                        <div class="col-md-8">
                                            <input type="text" id="cfmpassword" name="cfmpassword" class="form-control" placeholder="Retype Password" />
                                        </div>
                                    </div>
                                    <hr>
                                    <button type="button" id="savechanges" class="btn btn-md btn-info update_account">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
    <!-- END PAGE CONTAINER -->

    <!-- START PRELOADS -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="functions/myaccount.js"></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <!-- END PLUGINS -->

    <!-- THIS PAGE PLUGINS -->
    <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
    <script>
        $("#user").validate({
            ignore: [],
            rules: {
                password: {
                    minlength: 5
                },
                'cfmpassword': {
                    minlength: 5,
                    equalTo: "#password"
                }
            }
        });

    </script>
    <!-- END PAGE PLUGINS -->

    <!-- START TEMPLATE -->
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->

    <!-- END SCRIPTS -->
</body>

</html>
