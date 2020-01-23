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
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
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
                <li>Reports</li>
                <li class="active"><strong><mark>Patient Report</mark></strong></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <?php $date = date("Y", strtotime("+ 8 HOURS"));
			$year = date('Y');
								?>
                            <h3 class="panel-title"> <strong>Patient Reports</strong></h3>
                            <div class="btn-group pull-right">
                                <div class="pull-left">

                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-3">
                                <div class="widget widget-primary widget-item-icon" onclick="location.href='patient';" style="cursor:pointer;">
                                    <div class="widget-item-left">
                                        <span class="fa fa-users"></span>
                                    </div>
                                    <div class="widget-data">
                                        <div class="widget-int num-count">
                                            BMHC
                                        </div>
                                        <div class="widget-subtitle">Reports by</div>
                                        <div class="widget-title">Patient</div>
                                        <div class="widget-controls">
                                            <a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="View Detailed Reports"><span class="fa fa-info"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-primary widget-item-icon" onclick="location.href='child';" style="cursor:pointer;">
                                    <div class="widget-item-left">
                                        <span class="fa fa-users"></span>
                                    </div>
                                    <div class="widget-data">
                                        <div class="widget-int num-count">
                                            BMHC
                                        </div>
                                        <div class="widget-subtitle">Reports By</div>
                                        <div class="widget-title">Child Patient</div>
                                        <div class="widget-controls">
                                            <a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="View Detailed Reports"><span class="fa fa-info"></span></a>
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
    <script>
        $(document).ready(function() {
            $("#pyear").on('change', function() {
                var year = $(this).val();
                window.location = 'sample_report?year=' + year;
            });
        });

    </script>
    <!-- START PRELOADS -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- END THIS PAGE PLUGINS-->
    <!-- START TEMPLATE -->
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->

    <!-- END SCRIPTS -->
</body>

</html>
