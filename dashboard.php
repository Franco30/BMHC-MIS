<?php
require 'require/logincheck.php';
?>
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
    <!-- EOF CSS INCLUDE -->
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/jquery.canvasjs.min.js"></script>
    <?php require 'js/loadcharts/dashboard/dashboardgraphs.php'?>
    <script src="functions/loadcalendar.js"></script>
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container page-navigation-top-fixed">
        <?php require 'require/sidebar.php'?>
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <!-- Insert headerhere-->
            <?php require 'require/header.php'?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Dashboard</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <!-- START WIDGETS -->
                <div class="row">
                    <div class="col-md-3">

                        <!-- START WIDGET SLIDER -->
                        <div class="widget widget-primary widget-carousel">
                            <div class="owl-carousel" id="owl-example">
                                <div>
                                    <div class="widget-title">Total Patients</div>
                                    <div class="widget-subtitle">27/08/2014 15:23</div>
                                    <div class="widget-int">3,548</div>
                                </div>
                                <div>
                                    <div class="widget-title">Returned</div>
                                    <div class="widget-subtitle">Visitors</div>
                                    <div class="widget-int">1,695</div>
                                </div>
                                <div>
                                    <div class="widget-title">New</div>
                                    <div class="widget-subtitle">Visitors</div>
                                    <div class="widget-int">1,977</div>
                                </div>
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                    data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET SLIDER -->

                    </div>
                    <div class="col-md-3">

                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-primary widget-item-icon" onclick="location.href='visitors.php';">
                            <div class="widget-item-left">
                                <span class="fa fa-male"></span>
                            </div>
                            <div class="widget-data">
                                <?php
    	               $year = date('Y');
			                 if(isset($_GET['year']))
			                     {
				                $year=$_GET['year'];
			                         }
                    date_default_timezone_set('Asia/Manila');	
	                   $time=date("g:i a");
	                   $date=date("F j, Y");
                $dbconn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
	               $q = $dbconn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year`='$year'") or die(mysqli_error());
										 $fetch = $q->fetch_array();
?>
                                <div class="widget-int num-count counter" data-count="<?php echo $fetch['total']?>">0
                                </div>
                                <div class="widget-title">Total Patients</div>
                                <div class="widget-subtitle">Registered - Year 2019</div>
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                    data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->

                    </div>
                    <div class="col-md-3">

                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-primary widget-item-icon" onclick="location.href='admin.php';">
                            <div class="widget-item-left">
                                <span class="fa fa-user-md"></span>
                            </div>
                            <div class="widget-data">
                                <?php
    	               $year = date('Y');
			                 if(isset($_GET['year']))
			                     {
				                $year=$_GET['year'];
			                         }
                $dbconn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
	               $q = $dbconn->query("SELECT COUNT(*) as total FROM `users`") or die(mysqli_error());
										 $fetch = $q->fetch_array();
?>
                                <div class="widget-int num-count counter" data-count="<?php echo $fetch['total']?>">
                                    0
                                </div>
                                <div class="widget-title">Medical Staff</div>
                                <div class="widget-subtitle">in the system</div>
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                    data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->

                    </div>
                    <div class="col-md-3">

                        <!-- START WIDGET CLOCK -->
                        <div class="widget widget-primary widget-padding-sm">
                            <div class="widget-big-int" id="currentTime" style="font-size: 37px">
                            </div>
                            <div class="widget-subtitle plugin-date" id="day">Loading...</div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                    data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                            <div class="widget-buttons widget-c3">
                                <div class="col">
                                    <a href="#"><span class="fa fa-clock-o"></span></a>
                                </div>
                                <div class="col">
                                    <a href="#"><span class="fa fa-bell"></span></a>
                                </div>
                                <div class="col">
                                    <a href="#"><span class="fa fa-calendar"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET CLOCK -->

                    </div>
                </div>
                <!-- END WIDGETS -->
                <div class="row">
                    <?php
                        date_default_timezone_set('Asia/Manila');
                                    $date_created=date("F j, Y g:i a");
                                    $month = date("M");
                                    $year = date("Y");
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div id="chartContainer1" style="width: 100%; height: 300px"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Follow Up Schedule Calendar</strong></h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <a href="requesttransportrecord.php" class="btn btn-primary pull-right">See
                                                Detailed</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="calendar" class="vertical-box-column p-15 calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Patient Classification - Gender</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <?php
										require 'require/config.php';	
												$query1 = $conn->query("SELECT count(*) as total from `patient` where patient_id && gender = 'Male' && year = '$year'") or die(mysqli_error());
												$fetch1 = $query1->fetch_array();
												$query2 = $conn->query("SELECT count(*) as total from `patient` where patient_id && gender = 'Female' && year = '$year'") or die(mysqli_error());
												$fetch2 = $query2->fetch_array();
										?>
                                    <ul class='list-group border-bottom'>
                                        <li class='list-group-item'><span class='fa fa-male'></span>Male<span
                                                class='badge badge-info'><?php echo $fetch1['total']?></span></li>
                                        <li class='list-group-item'><span class='fa fa-female'></span>Female<span
                                                class='badge badge-info'><?php echo $fetch2['total']?></span></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Patient Classification - Type</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <?php
												require 'require/config.php';	
												$query1 = $conn->query("SELECT count(*) as total from `patient` where patient_id && `age` <= 15 && year = '$year'") or die(mysqli_error());
												$fetch1 = $query1->fetch_array();

												$query2 = $conn->query("SELECT count(*) as total from `patient` where patient_id && `age` >= 16 && year = '$year'") or die(mysqli_error());
												$fetch2 = $query2->fetch_array();
											?>
                                    <ul class='list-group border-bottom'>
                                        <li class='list-group-item'><span class='fa fa-child'></span>Children<span
                                                class='badge badge-info'><?php echo $fetch1['total']?></span></li>
                                        <li class='list-group-item'><span class='fa fa-user'></span>Adult<span
                                                class='badge badge-info'><?php echo $fetch2['total']?></span></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Patient Classification - Type of Treatment</strong>
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <ul class='list-group border-bottom'>
                                        <li class='list-group-item'><span class='fa fa-user'></span>Tuberculosis<span
                                                class='badge badge-info'>0</span></li>
                                        <li class='list-group-item'><span class='fa fa-user'></span>Family Planning<span
                                                class='badge badge-info'>1</span></li>
                                        <li class='list-group-item'><span class='fa fa-user'></span>Immunization<span
                                                class='badge badge-info'>0</span></li>
                                        <li class='list-group-item'><span class='fa fa-user'></span>Prenatal<span
                                                class='badge badge-info'>0</span></li>
                                    </ul>
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
            <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
            <!-- END PLUGINS -->

            <!-- START THIS PAGE PLUGINS-->
            <script src="js/timedate.js"></script>
            <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
            <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
            <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
            <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
            <!-- END THIS PAGE PLUGINS-->

            <!-- START TEMPLATE -->
            <script type="text/javascript" src="js/settings.js"></script>

            <script type="text/javascript" src="js/plugins.js"></script>
            <script type="text/javascript" src="js/actions.js"></script>

            <script type="text/javascript" src="js/demo_dashboard.js"></script>
            <!-- END TEMPLATE -->
            <script>
                $('.counter').each(function () {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 2000,
                        easing: 'linear',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                            //alert('finished');
                        }
                    });
                });
            </script>
            <!-- END SCRIPTS -->
</body>

</html>