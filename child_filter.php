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
    <link href="assets3/css/invoice-print.min.css" rel="stylesheet" />
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
    <?php require 'js/loadcharts/reports/child2.php'?>
    <?php require 'js/loadcharts/reports/child3.php'?>
    <!-- EOF CSS INCLUDE -->
    <style type="text/css">
        @media print {
/*
            @page {
                margin: -40px 10px 10px 50px;
                size: letter;
            }
*/

            .print {
                display: none !important;
            }

            .hidden-header {
                display: inline !important;
                margin: 0px 0px 0px 200px;
            }
        }

    </style>
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container page-navigation-top">
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <?php require 'require/header.php';?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb print">
                <li><strong><mark><?php echo $find['fullname']; ?></mark></strong></li>
                &nbsp;-
                <li>Child Patient Reports</li>
                <li class="active"><mark><strong>Child Patient Filtered Reports</strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="p-20" style="padding: 20px !important;">
                    <div class="row">
                        <div class="row ">
                            <div class="col-md-1"></div>
                            <?php
                        date_default_timezone_set('Asia/Manila');
                        $date=date("F j, Y");
                        ?>
                            <div class="col-md-3">
                                <h6 style="float:right; display:none;" class="hidden-header"><?php echo $date?></h6>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="row print">
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select id="pyear" class="validate[required] select" data-style="btn-primary" data-live-search="true">
            <option value="<?php 
                           if(isset($_GET['year'])){
                               $value=$_GET['year']; 
                               echo $value;
                           }
                           else{
                               echo date('Y');
                           }
                           ?>">
                <?php 
                if(isset($_GET['year']))
                {
                    $value=$_GET['year']; 
                    echo $value;
                }
                else
                {
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
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select" data-style="btn-primary" id="select-report" name="filterbutton">
                                            <option value="monthly" selected="selected" disabled="disabled">Select Report</option>
                                            <option value="monthly">Monthly</option>
                                            <option value="quarterly">Quarterly</option>
                                            <option value="yearly">Yearly</option>
                                            <option value="colpatientgender">Patient Gender</option>
                                            <option value="colpatientpurok">Patient Purok</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <!--Month Report Type-->
                                    <div class="form-group monthly barmonth splinemonth4 piemonth dougnutmonth reporttype">
                                        <select class="form-control select" data-style="btn-primary" name="filterbutton" style="display: none;">
                                            <option value="monthly" selected="selected" disabled="disabled">Select Chart</option>
                                            <option value="monthly">Column Chart</option>
                                            <option value="barmonth">Bar Chart</option>
                                            <option value="splinemonth4">Spline Chart</option>
                                            <option value="piemonth">Pie Chart</option>
                                            <option value="dougnutmonth">Doughnut Chart</option>
                                        </select>
                                    </div>
                                    <!--Quarter Report Type-->
                                    <div class="form-group quarterly barquarter splinequarter piequarter dougnutquarter reporttype">
                                        <select style="display: none;" class="form-control select" data-style="btn-primary" name="filterbutton">
                                            <option value="quarterly" selected="selected" disabled="disabled">Select Chart</option>
                                            <option value="quarterly">Column Chart</option>
                                            <option value="barquarter">Bar Chart</option>
                                            <option value="splinequarter">Spline Chart</option>
                                            <option value="piequarter">Pie Chart</option>
                                            <option value="dougnutquarter">Doughnut Chart</option>
                                        </select>
                                    </div>
                                    <!--Quarter Report Type-->
                                    <div class="form-group yearly baryear splineyear pieyear dougnutyear reporttype">
                                        <select style="display: none;" class="form-control select" data-style="btn-primary" name="filterbutton">
                                            <option value="yearly" selected="selected" disabled="disabled">Select Chart</option>
                                            <option value="yearly">Column Chart</option>
                                            <option value="baryear">Bar Chart</option>
                                            <option value="splineyear">Spline Chart</option>
                                            <option value="pieyear">Pie Chart</option>
                                            <option value="dougnutyear">Doughnut Chart</option>
                                        </select>
                                    </div>
                                    <!-- Patient Gender Report Month-->
                                    <div class="form-group stackedareamonth2 stackedcolmonth2 splinemonth2 colpatientgender reporttype">
                                        <select style="display: none;" class="form-control select" data-style="btn-primary" name="filterbutton">
                                            <option value="colpatientgender" selected="selected" disabled="disabled">Select Chart</option>
                                            <option value="colpatientgender">Column Chart</option>
                                            <option value="splinemonth2">Spline Chart</option>
                                            <option value="stackedcolmonth2">Stacked Column Chart</option>
                                            <option value="stackedareamonth2">Stacked Area Chart</option>
                                        </select>
                                    </div>
                                    <!-- Patient Purok Report Month-->
                                    <div class="form-group colpatientpurok barpurok splinepurok stackedareapurok reporttype">
                                        <select style="display: none;" class="form-control select" data-style="btn-primary" name="filterbutton">
                                            <option value="colpatientpurok" selected="selected" disabled="disabled">Select Chart</option>
                                            <option value="colpatientpurok">Column Chart</option>
                                            <option value="barpurok">Bar Chart</option>
                                            <option value="splinepurok">Spline Chart</option>
                                            <option value="stackedareapurok">Stacked Area Chart</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-1"></div>
                                <div class="col-md-2 print">
                                    <div class="alert alert-info fade in m-b-15" style="background-color: #7cdda7;color: #3c763d;border-color: #7cdda7;">
                                        <strong><i class="fa fa-print"></i> Press P to Print!</strong>
                                        <span class="close" data-dismiss="alert">&times;</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="hidden-header" style="display:none;">
                                    <br>
                                    <center><img src="assets/images/bmhclogo.png" style="width:131px;height:100px; padding: 10px; margin:0px 0px 0px -10px;" alt="bmhclogo" /></center>
                                    <!--                        <img src="assets/images/bmhc.png" style="width:131px;height:100px; padding: -10px; margin:0px 0px 0px -10px;" alt="drrmopicture" />-->
                                    <h3 style="margin: 0px 0px 0px 10px">
                                        <center>Barangay Mansilingan Health Center</center>
                                    </h3>
                                    <h4 style="margin: 0px 0px 0px 10px">
                                        <center>Brgy. Mansilingan 6100 Bacolod City</center>
                                    </h4>
                                    <h4 style="margin: 0px 0px 0px 10px">
                                        <center>(034) 434-4098</center>
                                    </h4>
                                    <br>
                                </label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <span id="shit">Choose from the given Graphical Report above.</span>
                                        <!--Monthly Report Type-->
                                        <div id="chartContainer1" class="monthly reporttype" style="height:300px;width:100%;"></div>
                                        <div id="chartContainer1.1" class="barmonth reporttype" style="height:300px;width:100%;"></div>
                                        <div id="chartContainer1.2" class="splinemonth4 reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer1.3" class="piemonth reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer1.4" class="dougnutmonth reporttype" style="width: 100%; height: 300px"></div>
                                        <!--Quarterly Report Type-->
                                        <div id="chartContainer2" class="quarterly reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer2.1" class="barquarter reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer2.2" class="splinequarter reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer2.3" class="piequarter reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer2.4" class="dougnutquarter reporttype" style="width: 100%; height: 300px"></div>
                                        <!--yearly Report Type-->
                                        <div id="chartContainer3" class="yearly reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer3.1" class="baryear reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer3.2" class="splineyear reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer3.3" class="pieyear reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer3.4" class="dougnutyear reporttype" style="width: 100%; height: 300px"></div>
                                        <!-- Patient Gender Report Month-->
                                        <div id="chartContainer5" class="colpatientgender reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer5.1" class="splinemonth2 reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer5.2" class="stackedcolmonth2 reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer5.3" class="stackedareamonth2 reporttype" style="width: 100%; height: 300px"></div>
                                        <!-- Patient Purok Report Month-->
                                        <div id="chartContainer7" class="colpatientpurok reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer7.1" class="barpurok reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer7.2" class="splinepurok reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer7.3" class="stackedareapurok reporttype" style="width: 100%; height: 300px"></div>
                                        
                                        <?php require 'reports/child_monthly.php'?>
                                        <?php require 'reports/child_quarter.php'?>
                                        <?php require 'reports/child_yearly.php'?>
                                        <?php require 'reports/child_gender.php'?>
                                        <?php require 'reports/child_purok.php'?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- PAGE CONTENT WRAPPER -->
                    </div>
                </div>
            </div>
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

    <!-- THIS PAGE PLUGINS -->
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <!-- END PAGE PLUGINS -->

    <!-- START TEMPLATE -->
    <script type="text/javascript" src="js/settings.js"></script>

    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->
    <script>
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
                window.location = 'child_filter?year=' + year;
            });
        });

    </script>
    <script>
        $(function() {
            /* DOM ready */
            $("#select-report").change(function() {
                document.getElementById("shit").style.display = "none";
            });
        });

    </script>
    <?php require 'require/pressp.php'?>
    <!-- END SCRIPTS -->
</body>

</html>
