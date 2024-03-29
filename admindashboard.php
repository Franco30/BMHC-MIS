<?php
require 'require/logincheck.php';
?>
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
    <script src="js/jquery.canvasjs.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <?php require 'js/loadcharts/reports/drilldown2.php' ?>
    <style>
        #backButton {
            /*
            border-radius: 4px;
            padding: 6px;
            border: none;
            font-size: 16px;
            background-color: #2eacd1;
            color: white;
*/
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .invisible {
            display: none;
        }
    </style>
    <?php //require 'js/loadcharts/reports/sickforecasting.php'
    ?>
    <?php require 'loadcalendar.php' ?>

    <script src="js/moment.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("select").change(function() {
                $(this).find("option:selected").each(function() {
                    var optionValue = $(this).attr("value");
                    if (optionValue) {
                        $(".reporttype").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".reporttype").hide();
                    }
                });
            }).change();
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#pyear").on('change', function() {
                var year = $(this).val();
                window.location = 'admindashboard?year=' + year;
            });
        });
    </script>
    <!--    <script src="functions/loadcalendar.js"></script>-->



    <script>
        // You will need to have jQuery running on your webpage to run this script.

        $(function() {
            var pageUrl = "https://api.nhs.uk/conditions/coronavirus-covid-19?url=BMHC.CF&modules=false";
            $.ajax({
                type: 'GET',
                url: pageUrl,
                headers: {
                    'Content-Type': 'application/json'
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                }
            });


        });
    </script>
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container page-navigation-top-fixed">
        <?php require 'require/adminsidebar.php' ?>
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <!-- Insert headerhere-->
            <?php require 'require/adminheader.php' ?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li class="active"><mark><strong>Dashboard</strong></mark></li>
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
                                    <?php
                                    $year = date('Y');
                                    if (isset($_GET['year'])) {
                                        $year = $_GET['year'];
                                    }
                                    date_default_timezone_set('Asia/Manila');
                                    //		    $date_today = date('F j, Y');
                                    $date_today = date('Y-m-d');
                                    require 'require/config.php';
                                    $q = $conn->query("SELECT COUNT(*) as total FROM `family_planning` WHERE `year` = '$year' && `date_time` REGEXP '$date_today'") or die(mysqli_error());
                                    $f = $q->fetch_array();
                                    $q2 = $conn->query("SELECT COUNT(*) as total FROM `prenatal` WHERE `year` = '$year' && `prenatal_date` REGEXP '$date_today'") or die(mysqli_error());
                                    $fetch = $q2->fetch_array();
                                    $q3 = $conn->query("SELECT COUNT(*) as total FROM `immunization` WHERE `year` = '$year' && `date_time` REGEXP '$date_today'") or die(mysqli_error());
                                    $fetch2 = $q3->fetch_array();
                                    $q4 = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` = '$year' && `consultation_date` REGEXP '$date_today'") or die(mysqli_error());
                                    $fetch3 = $q4->fetch_array();
                                    $q5 = $conn->query("SELECT COUNT(*) as total FROM `referral` WHERE `year` = '$year' && `date_time` REGEXP '$date_today'") or die(mysqli_error());
                                    $fetch4 = $q5->fetch_array();
                                    $q6 = $conn->query("SELECT COUNT(*) as total FROM `referral_prenatal` WHERE `year` = '$year' && `date_time` REGEXP '$date_today'") or die(mysqli_error());
                                    $fetch5 = $q6->fetch_array();
                                    $grandtotal = $f['total'] + $fetch['total'] + $fetch2['total'] + $fetch3['total'] + $fetch4['total'] + $fetch5['total'];
                                    ?>
                                    <div class="widget-title">Family Planning</div>
                                    <div class="widget-subtitle">Patients for Today</div>
                                    <div class="widget-int"><?php echo $f['total'] ?></div>
                                </div>
                                <div>
                                    <div class="widget-title">Prenatal</div>
                                    <div class="widget-subtitle">Patients for Today</div>
                                    <div class="widget-int"><?php echo $fetch['total'] ?></div>
                                </div>
                                <div>
                                    <div class="widget-title">Immunization</div>
                                    <div class="widget-subtitle">Patients for Today</div>
                                    <div class="widget-int"><?php echo $fetch2['total'] ?></div>
                                </div>
                                <div>
                                    <div class="widget-title">Consultation</div>
                                    <div class="widget-subtitle">Patients for Today</div>
                                    <div class="widget-int"><?php echo $fetch3['total'] ?></div>
                                </div>
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET SLIDER -->

                    </div>
                    <div class="col-md-3">

                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-primary widget-item-icon" onclick="location.href='master_file_patient';">
                            <div class="widget-item-left">
                                <span class="fa fa-male"></span>
                            </div>
                            <div class="widget-data">
                                <?php
                                $year = date('Y');
                                if (isset($_GET['year'])) {
                                    $year = $_GET['year'];
                                }
                                date_default_timezone_set('Asia/Manila');
                                $time = date("g:i a");
                                $date = date("F j, Y");
                                require 'require/config.php';
                                $q = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `year` = '$year'") or die(mysqli_error());
                                $fetch = $q->fetch_array();
                                $q2 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` WHERE `year` = '$year'") or die(mysqli_error());
                                $f2 = $q2->fetch_array();
                                $sum = $fetch['total'] + $f2['total'];
                                ?>
                                <div class="widget-int num-count counter" data-count="<?php echo $grandtotal ?>">0
                                </div>
                                <div class="widget-title">Daily Patients</div>
                                <div class="widget-subtitle">Catered in Transactions</div>
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->

                    </div>
                    <div class="col-md-3">

                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-primary widget-item-icon" onclick="location.href='usermanagement';">
                            <div class="widget-item-left">
                                <span class="fa fa-user-md"></span>
                            </div>
                            <div class="widget-data">
                                <?php
                                $year = date('Y');
                                if (isset($_GET['year'])) {
                                    $year = $_GET['year'];
                                }
                                require 'require/config.php';
                                $q = $conn->query("SELECT COUNT(*) as total FROM `users`") or die(mysqli_error());
                                $fetch = $q->fetch_array();
                                ?>
                                <div class="widget-int num-count counter" data-count="<?php echo $fetch['total'] ?>">
                                    0
                                </div>
                                <div class="widget-title">Medical Staff</div>
                                <div class="widget-subtitle">in the system</div>
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->

                    </div>
                    <div class="col-md-3">

                        <!-- START WIDGET CLOCK -->
                        <div class="widget widget-primary widget-padding-sm">
                            <div class="widget-big-int" id="currentTime" style="font-size: 36px">
                            </div>
                            <div class="widget-subtitle plugin-date" id="day">Loading...</div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
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
                    $date_created = date("F j, Y g:i a");
                    $month = date("M");
                    $year = date("Y");
                    ?>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>COVID-19 CASES REPORT</strong></h3>
                                </div>
                                <div class="panel-body">

                                <style>.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style><div class="embed-container"><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="COVID-19" src="https://www.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6"></iframe></div>
                                </div>
                            </div>

                        </div>

                        <div class="bingwidget" data-type="covid19" data-market="en-us" data-language="en-us" data-app="bingwidget"></div>

                        <script src="//www.bing.com/widget/bootstrap.answer.js" async=""></script>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="form-row">
                                            <div class="col-md-2">
                                                <div class="form-group" style="margin-left:-10px">
                                                    <select id="pyear" class="validate[required] select" data-style="btn-primary" data-live-search="true">
                                                        <option value="<?php
                                                                        if (isset($_GET['year'])) {
                                                                            $value = $_GET['year'];
                                                                            echo $value;
                                                                        } else {
                                                                            echo date('Y');
                                                                        }
                                                                        ?>">
                                                            <?php
                                                            if (isset($_GET['year'])) {
                                                                $value = $_GET['year'];
                                                                echo $value;
                                                            } else {
                                                                echo date('Y');
                                                            }
                                                            ?>
                                                        </option>
                                                        <?php
                                                        $earliest_year = 1950;
                                                        foreach (range(date('Y'), $earliest_year) as $x) {
                                                        ?>
                                                            <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group pull-right" style="margin-right: 10px;">
                                            <div class="pull-left">
                                                <!--
                                        <select class="form-control select" data-style="btn-primary" data-live-search="true" id="select-report" name="filterbutton">
                                            <option disabled="disabled">Select Chart Type</option>
                                            <option value="colmonth">Column Chart</option>
                                            <option value="linemonth">Line Chart</option>
                                            <option value="stackmonth">Stack Column Chart</option>
                                        </select>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div id="chartContainer" style="width: 100%; height: 310px"></div>
                                        <div class="pull-left">
                                            <button class="btn btn-info invisible" id="backButton" style="margin: -51px;margin-right: 0px;">Back</button>
                                        </div>
                                        <!--
                                    <div id="chartContainer1" class="colmonth reporttype" style="width: 100%; height: 300px;"></div>
                                    <div id="chartContainer2" class="linemonth reporttype" style="width: 100%; height: 300px;"></div>
                                    <div id="chartContainer3" class="stackmonth reporttype" style="width: 100%; height: 300px;"></div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- NEWS WIDGET -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><span class="fa fa-archive"></span> <strong>Recent Prenatal Referral</strong></h3>
                                    </div>
                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 288px;">
                                        <?php
                                        $year = date('Y');
                                        if (isset($_GET['year'])) {
                                            $year = $_GET['year'];
                                        }
                                        require 'require/config.php';
                                        $query = $conn->query("SELECT * FROM `referral_prenatal` ORDER BY `referral_id` DESC limit 10") or die(mysqli_error());
                                        while ($fetch = $query->fetch_array()) {
                                        ?>
                                            <a href="#" class="list-group-item">
                                                <span class="contacts-title"><?php echo $fetch['patient_name'] ?></span>
                                                <p>Referral Date : <?php echo $fetch['referral_date'] ?></p>
                                                <p>Complaints : <?php echo $fetch['complaints'] ?></p>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer" style="background-color:#fcf8e3;">
                                        <a href="referral" style="color:#8a6d3b;">See All</a>
                                    </div>
                                    <!-- END NEWS WIDGET -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!-- NEWS WIDGET -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><span class="fa fa-archive"></span> <strong>Recent Referral</strong></h3>
                                    </div>
                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 288px;">
                                        <?php
                                        $year = date('Y');
                                        if (isset($_GET['year'])) {
                                            $year = $_GET['year'];
                                        }
                                        require 'require/config.php';
                                        $query = $conn->query("SELECT * FROM `referral` ORDER BY `referral_id` DESC limit 10") or die(mysqli_error());
                                        while ($fetch = $query->fetch_array()) {
                                        ?>
                                            <a href="#" class="list-group-item">
                                                <span class="contacts-title"><?php echo $fetch['patient_name'] ?></span>
                                                <p>Referral Date : <?php echo $fetch['referral_date'] ?></p>
                                                <p>Complaints : <?php echo $fetch['complaints'] ?></p>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer" style="background-color:#fcf8e3;">
                                        <a href="referral" style="color:#8a6d3b;">See All</a>
                                    </div>
                                    <!-- END NEWS WIDGET -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!-- NEWS WIDGET -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><span class="glyphicon glyphicon-list"></span> <strong>User's Activity Log</strong></h3>
                                    </div>
                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 288px;">
                                        <?php
                                        $year = date('Y');
                                        if (isset($_GET['year'])) {
                                            $year = $_GET['year'];
                                        }
                                        require 'require/config.php';
                                        $query = $conn->query("SELECT * FROM `users_activity_log`, `users` where users.user_id = users_activity_log.user_id ORDER BY `log_id` DESC limit 10") or die(mysqli_error());
                                        while ($fetch = $query->fetch_array()) {
                                        ?>
                                            <a href="#" class="list-group-item">
                                                <span class="contacts-title"><?php echo $fetch['fullname'] ?></span>
                                                <p>Activity : <?php echo $fetch['action'] ?></p>
                                                <p>Date and Time : <?php echo $fetch['date_time'] ?></p>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer" style="background-color:#fcf8e3;">
                                        <a href="usersactivity" style="color:#8a6d3b;">See All</a>
                                    </div>
                                    <!-- END NEWS WIDGET -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Prenatal Follow Up Schedule Calendar</strong></h3>
                                        <div class="btn-group pull-right">
                                            <div class="pull-left">
                                                <a href="follow_up_table" class="btn btn-primary pull-right">See
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
                                        <h3 class="panel-title"><strong>Patient Classification
                                                - Purok</strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php
                                        $year = date('Y');
                                        if (isset($_GET['year'])) {
                                            $year = $_GET['year'];
                                        }
                                        require 'require/config.php';
                                        $query1 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `purok` = 'Gauzon' && `year` = '$year'") or die(mysqli_error());
                                        $fetch1 = $query1->fetch_array();
                                        $child1 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` WHERE `purok` = 'Gauzon' && `year` = '$year'") or die(mysqli_error());
                                        $f1 = $child1->fetch_array();
                                        $gauzon = $fetch1['total'] + $f1['total'];

                                        $query2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `purok` = 'Himaya' && `year` = '$year'") or die(mysqli_error());
                                        $fetch2 = $query2->fetch_array();
                                        $child2 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` WHERE `purok` = 'Himaya' && `year` = '$year'") or die(mysqli_error());
                                        $f2 = $child2->fetch_array();
                                        $himaya = $fetch2['total'] + $f2['total'];

                                        $query3 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `purok` = 'Kabugwason' && `year` = '$year'") or die(mysqli_error());
                                        $fetch3 = $query3->fetch_array();
                                        $child3 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` WHERE `purok` = 'Kabugwason' && `year` = '$year'") or die(mysqli_error());
                                        $f3 = $child3->fetch_array();
                                        $kabugwason = $fetch3['total'] + $f3['total'];

                                        $query4 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `purok` = 'Kahirup A' && `year` = '$year'") or die(mysqli_error());
                                        $fetch4 = $query4->fetch_array();
                                        $child4 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` WHERE `purok` = 'Kahirup A' && `year` = '$year'") or die(mysqli_error());
                                        $f4 = $child4->fetch_array();
                                        $kahirupA = $fetch4['total'] + $f4['total'];

                                        $query5 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `purok` = 'Kahirup B' && `year` = '$year'") or die(mysqli_error());
                                        $fetch5 = $query5->fetch_array();
                                        $child5 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` WHERE `purok` = 'Kahirup B' && `year` = '$year'") or die(mysqli_error());
                                        $f5 = $child5->fetch_array();
                                        $kahirupB = $fetch5['total'] + $f5['total'];

                                        $query6 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `purok` = 'Kasilingan' && `year` = '$year'") or die(mysqli_error());
                                        $fetch6 = $query6->fetch_array();
                                        $child6 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` WHERE `purok` = 'Kasilingan' && `year` = '$year'") or die(mysqli_error());
                                        $f6 = $child6->fetch_array();
                                        $kasilingan = $fetch6['total'] + $f6['total'];

                                        $query7 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `purok` = 'Katilingban' && `year` = '$year'") or die(mysqli_error());
                                        $fetch7 = $query7->fetch_array();
                                        $child7 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` WHERE `purok` = 'Katilingban' && `year` = '$year'") or die(mysqli_error());
                                        $f7 = $child7->fetch_array();
                                        $katilingban = $fetch7['total'] + $f7['total'];

                                        $query8 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `purok` = 'Mabinuligon' && `year` = '$year'") or die(mysqli_error());
                                        $fetch8 = $query8->fetch_array();
                                        $child8 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` WHERE `purok` = 'Mabinuligon' && `year` = '$year'") or die(mysqli_error());
                                        $f8 = $child8->fetch_array();
                                        $mabinuligon = $fetch8['total'] + $f8['total'];

                                        $query9 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `purok` = 'Matahum' && `year` = '$year'") or die(mysqli_error());
                                        $fetch9 = $query9->fetch_array();
                                        $child9 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` WHERE `purok` = 'Matahum' && `year` = '$year'") or die(mysqli_error());
                                        $f9 = $child9->fetch_array();
                                        $matahum = $fetch9['total'] + $f9['total'];

                                        $query10 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `purok` = 'Paghidaet' && `year` = '$year'") or die(mysqli_error());
                                        $fetch10 = $query10->fetch_array();
                                        $child10 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` WHERE `purok` = 'Paghidaet' && `year` = '$year'") or die(mysqli_error());
                                        $f10 = $child10->fetch_array();
                                        $paghidaet = $fetch10['total'] + $f10['total'];

                                        $query11 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `purok` = 'Paglaum' && `year` = '$year'") or die(mysqli_error());
                                        $fetch11 = $query11->fetch_array();
                                        $child11 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` WHERE `purok` = 'Paglaum' && `year` = '$year'") or die(mysqli_error());
                                        $f11 = $child11->fetch_array();
                                        $paglaum = $fetch11['total'] + $f11['total'];
                                        ?>
                                        <ul class='list-group border-bottom'>
                                            <li class='list-group-item'><span class='fa fa-home'></span>Prk. Gauzon<span class='badge badge-info'><?php echo $gauzon ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-home'></span>Prk. Himaya<span class='badge badge-info'><?php echo $himaya ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-home'></span>Prk. Kabugwason<span class='badge badge-info'><?php echo $kabugwason ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-home'></span>Prk. Kahirup A<span class='badge badge-info'><?php echo $kahirupA ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-home'></span>Prk. Kahirup B<span class='badge badge-info'><?php echo $kahirupB ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-home'></span>Prk. Kasilingan<span class='badge badge-info'><?php echo $kasilingan ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-home'></span>Prk. Katilingban<span class='badge badge-info'><?php echo $katilingban ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-home'></span>Prk. Mabinuligon<span class='badge badge-info'><?php echo $mabinuligon ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-home'></span>Prk. Matahum<span class='badge badge-info'><?php echo $matahum ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-home'></span>Prk. Paghidaet<span class='badge badge-info'><?php echo $paghidaet ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-home'></span>Prk. Paglaum<span class='badge badge-info'><?php echo $paglaum ?></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title" style="font-size: 15px;"><strong>Patient Classification
                                                - Type of Treatment</strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php
                                        $year = date('Y');
                                        if (isset($_GET['year'])) {
                                            $year = $_GET['year'];
                                        }
                                        require 'require/config.php';
                                        $query1 = $conn->query("SELECT COUNT(*) as total FROM `family_planning` WHERE `year` = '$year'") or die(mysqli_error());
                                        $fetch1 = $query1->fetch_array();

                                        $query2 = $conn->query("SELECT COUNT(*) as total FROM `immunization` WHERE `year` = '$year'") or die(mysqli_error());
                                        $fetch2 = $query2->fetch_array();

                                        $query3 = $conn->query("SELECT COUNT(*) as total FROM `prenatal` WHERE `year` = '$year'") or die(mysqli_error());
                                        $fetch3 = $query3->fetch_array();

                                        $query4 = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` = '$year'") or die(mysqli_error());
                                        $fetch4 = $query4->fetch_array();
                                        ?>
                                        <ul class='list-group border-bottom'>
                                            <li class='list-group-item'><span class='fa fa-user'></span>Family
                                                Planning<span class='badge badge-info'><?php echo $fetch1['total'] ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-user'></span>Immunization<span class='badge badge-info'><?php echo $fetch2['total'] ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-user'></span>Prenatal<span class='badge badge-info'><?php echo $fetch3['total'] ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-user'></span>Consultation<span class='badge badge-info'><?php echo $fetch4['total'] ?></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Patient Classification - Gender</strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php
                                        $year = date('Y');
                                        if (isset($_GET['year'])) {
                                            $year = $_GET['year'];
                                        }
                                        require 'require/config.php';
                                        $query1 = $conn->query("SELECT count(*) as total from `patient` where gender = 'Male' && year = '$year'") or die(mysqli_error());
                                        $fetch1 = $query1->fetch_array();
                                        $query3 = $conn->query("SELECT count(*) as total from `patient_child` where gender = 'Male' && year = '$year'") or die(mysqli_error());
                                        $fetch3 = $query3->fetch_array();
                                        $sum = $fetch1['total'] + $fetch3['total'];
                                        $query2 = $conn->query("SELECT count(*) as total from `patient` where gender = 'Female' && year = '$year'") or die(mysqli_error());
                                        $fetch2 = $query2->fetch_array();
                                        $query4 = $conn->query("SELECT count(*) as total from `patient_child` where gender = 'Female' && year = '$year'") or die(mysqli_error());
                                        $fetch4 = $query4->fetch_array();
                                        $sum2 = $fetch2['total'] + $fetch4['total'];
                                        ?>
                                        <ul class='list-group border-bottom'>
                                            <li class='list-group-item'><span class='fa fa-male'></span>Male<span class='badge badge-info'><?php echo $sum ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-female'></span>Female<span class='badge badge-info'><?php echo $sum2 ?></span></li>

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
                                        $year = date('Y');
                                        if (isset($_GET['year'])) {
                                            $year = $_GET['year'];
                                        }
                                        require 'require/config.php';
                                        $query1 = $conn->query("SELECT count(*) as total from `patient` where `age` <= 15 && year = '$year'") or die(mysqli_error());
                                        $fetch1 = $query1->fetch_array();

                                        $query2 = $conn->query("SELECT count(*) as total from `patient` where `age` >= 16 && year = '$year'") or die(mysqli_error());
                                        $fetch2 = $query2->fetch_array();

                                        $query3 = $conn->query("SELECT count(*) as total from `patient_child` where year = '$year'") or die(mysqli_error());
                                        $fetch3 = $query3->fetch_array();

                                        $sum = $fetch1['total'] + $fetch3['total'];
                                        ?>
                                        <ul class='list-group border-bottom'>
                                            <li class='list-group-item'><span class='fa fa-child'></span>Children<span class='badge badge-info'><?php echo $sum ?></span></li>
                                            <li class='list-group-item'><span class='fa fa-user'></span>Adult<span class='badge badge-info'><?php echo $fetch2['total'] ?></span></li>

                                        </ul>
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
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->
        <script src="js/timedate.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js">
        </script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>

        <!-- END TEMPLATE -->


        <script>
            $('.counter').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'linear',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
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
        <!-- END SCRIPTS -->
</body>

</html>