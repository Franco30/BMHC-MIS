<?php require_once 'require/logincheck.php'?>
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
                <li><mark><strong>Referral Record</strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <div id="alert" class="alert alert-info" style="display:none;">
                            <center><span id="alerttext"></span></center>
                        </div>
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Referral Record</a></li>
                                <li><a href="#tab-second" role="tab" data-toggle="tab">Prenatal Referral Record</a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-first">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="btn-group pull-right">
                                                        <div class="pull-left">
                                                            <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#addreferral">Add Referral</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body list-group list-group-contacts scroll" style="height: 400px;">
                                                    <div class="panel-body">
                                                        <div id="referralpatientTable"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab-second">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="btn-group pull-right">
                                                        <div class="pull-left">
                                                            <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#prenatalreferral">Add Referral</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body list-group list-group-contacts scroll" style="height: 400px;">
                                                    <div class="panel-body">
                                                        <div id="prenatalreferralpatientTable"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->
    <?php require 'modals/addreferral.php'?>
    <?php require 'modals/addprenatalreferral.php'?>
    <!-- START PRELOADS -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type="text/javascript" src="functions/referral.js"></script>
    <script type="text/javascript" src="functions/prenatalreferral.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <!-- END THIS PAGE PLUGINS-->
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
    <!-- START TEMPLATE -->
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#patientcategory').change(function() {
                var patientcategory = $('#patientcategory').val();

                switch (patientcategory) {

                    case 'Registered':
                        document.getElementById("category1").style.display = "none";
                        document.getElementById("category2").style.display = "block";
                        break;

                    case 'Unregistered':
                        document.getElementById("category2").style.display = "none";
                        document.getElementById("category1").style.display = "block";
                        break;

                    default:
                        document.getElementById("category2").style.display = "none";
                }
            });
        });

    </script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#patientcategory2').change(function() {
                var patientcategory2 = $('#patientcategory2').val();

                switch (patientcategory2) {

                    case 'Registered2':
                        document.getElementById("category3").style.display = "none";
                        document.getElementById("category4").style.display = "block";
                        break;

                    case 'Unregistered2':
                        document.getElementById("category4").style.display = "none";
                        document.getElementById("category3").style.display = "block";
                        break;

                    default:
                        document.getElementById("category4").style.display = "none";
                }
            });
        });

    </script>
    <!--
    <script>
        $.ajaxPrefilter(function(options, originalOptions, jqXHR) {
            options.async = true;
        });

    </script>
-->
</body>

</html>
