<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>BMHC-MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="theme-color" content="#E91E63" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="assets/images/bmhc.png" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
    <link rel="stylesheet" type="text/css" href="assets3/vendor/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="js/sweetalertjs/sweetalert2.min.css" />
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container page-navigation-top-fixed">
        <!-- START PAGE SIDEBAR -->
        <?php require 'require/adminsidebar.php' ?>
        <!-- END PAGE SIDEBAR -->
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <?php require 'require/adminheader.php' ?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li>Transactions</li>
                <li><mark><strong>Immunization Service Registration</strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <div id="alert" class="alert alert-info" style="display:none;">
                            <center><span id="alerttext"></span></center>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Immunization Registration</strong></h3>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#add_immunization">Add</button>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="immunizationpatientTable"></div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <?php require 'modals/addchildpatient.php'?>
    <?php require 'modals/add_immunization.php'?>
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="functions/immunizationtable.js"></script>
    <script type="text/javascript" src="functions/crudchildpatient_immunization.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>

    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type='text/javascript' src='js/sweetalertjs/sweetalert2.min.js'></script>

    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>

    <!-- END THIS PAGE PLUGINS -->

    <!--
    <script>
        $.ajaxPrefilter(function(options, originalOptions, jqXHR) {
            options.async = true;
        });

    </script>
-->
    <script>
        var date = new Date();
        $('#birthdate2').datepicker({
            format: 'yyyy-mm-dd',
            language: 'en',
            startDate: new Date('1900-01-01'),
            endDate: date
        });

    </script>
    <script>
        function myFunction(textboxid) {

            var input = document.getElementById(textboxid);
            var word = input.value.split(" ");
            for (var i = 0; i < word.length; i++) {
                word[i] = word[i].charAt(0).toUpperCase() + word[i].slice(1).toLowerCase();
            }
            input.value = word.join(" ");
        }

    </script>
</body>

</html>
