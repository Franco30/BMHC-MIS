<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>BMHC-MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="assets/images/bmhc.png" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
    <link rel="stylesheet" type="text/css" href="assets3/vendor/font-awesome/css/font-awesome.min.css" />
    <link href="assets3/css/invoice-print.min.css" rel="stylesheet" />
    <style type="text/css">
        @media print {
            @page {
                margin: -40px 10px 10px 50px;
                size: letter;
            }

            .print {
                display: none !important;
            }

            .hidden-header {
                display: inline !important;
                margin: 0px 0px 0px 200px;
            }
        }

    </style>
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
            <ul class="breadcrumb print">
                <li>Data Entry</li>
                <li><mark><strong>Patient Master File</strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <label class="hidden-header" style="display:none;">
                        <br>
                        <center><img src="assets/images/bmhclogo.png" style="width:131px;height:100px; padding: 10px; margin:0px 0px 0px -10px;" alt="drrmopicture" /></center>
                        <!--                        <img src="assets/images/bmhc.png" style="width:131px;height:100px; padding: -10px; margin:0px 0px 0px -10px;" alt="drrmopicture" />-->
                        <h3 style="margin: 0px 0px 0px 10px">
                            <center>Barangay Mansilingan Health Center</center>
                        </h3>
                        <h4 style="margin: 0px 0px 0px 10px">
                            <center>2nd Floor, Old City Hall, Luzuriaga St., Bacolod City 6100, Negros Occidental</center>
                        </h4>
                        <h4 style="margin: 0px 0px 0px 10px">
                            <center>432-3879</center>
                        </h4>
                        <br>
                    </label>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="alert" class="alert alert-info" style="display:none;">
                            <center><span id="alerttext"></span></center>
                        </div>
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs print" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Patient Record</a></li>
                                <li><a href="#tab-second" role="tab" data-toggle="tab">Child Patient Record</a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-first">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <!-- style="height: 470px;"-->
                                                <div class="panel-body list-group list-group-contacts scroll">
                                                    <div class="panel-body">
                                                        <div id="patientmasterfileTable"></div>
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
                                                <div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
                                                    <div class="panel-body">
                                                        <div id="childpatientmasterfileTable"></div>
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
    <script type="text/javascript" src="functions/patientmasterfile.js"></script>
    <script type="text/javascript" src="functions/childpatientmasterfile.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
    <!-- END THIS PAGE PLUGINS-->
    <!-- START TEMPLATE -->
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->
    <script>
        $.ajaxPrefilter(function(options, originalOptions, jqXHR) {
            options.async = true;
        });

    </script>
    <!-- END SCRIPTS -->
</body>

</html>
