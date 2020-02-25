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
    <link href="assets3/css/invoice-print.min.css" rel="stylesheet" />
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
    <?php require 'js/loadchart/medicines_dispensed.php'?>
    <?php require 'js/loadcharts/reports/reportsinventory.php'?>
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
    <div class="page-container page-navigation-top-fixed">
        <!-- START PAGE SIDEBAR -->
        <?php require 'require/adminsidebar.php' ?>
        <!-- END PAGE SIDEBAR -->
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <?php require 'require/adminheader.php' ?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb print">
                <li>Reports</li>
                <li class="active"><strong><mark>Inventory Report</mark></strong></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
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
                <div class="row">

                    <div class="col-md-4">
                        <!-- NEWS WIDGET -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Medicine Current Stocks</strong></h3>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll print" style="height: 288px;">
                                <?php
                            require 'require/config.php';
                            $query = $conn->query("SELECT * FROM `medicine` order by `running_balance` ASC") or die(mysqli_error());
                            while($fetch = $query->fetch_array()){
                            ?>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <span class="contacts-title"><?php echo $fetch['medicine_name']?></span>
                                    <p> Medicine Category : <?php echo $fetch['medicine_category']?>
                                        <span class="text-muted"><br /> <?php if ($fetch['running_balance']<=15)echo "<span class='badge badge-danger animated infinite pulse' style='margin-left: 21px;animation-duration:.6s;'>Current Balance :  ".$fetch['running_balance']."</span>";
            if ($fetch['running_balance']>=16)echo "<span class='badge badge-info' style='margin-left: 21px;'>Current Balance :  ".$fetch['running_balance']."</span>"
                                                        ?>
                                        </span>
                                    </p>
                                </a>
                                <?php
                                }

                                ?>
                            </div>

                        </div>
                        <!-- END NEWS WIDGET -->

                    </div>

                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div id="chartContainer1" style="width: 100%; height: 310px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-primary print">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="font-size: 15px;"><strong>Patients Medication Dispensation Reports</strong></h3>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll print" style="height: 470px;">
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th class="print">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $year = date('Y');
                                                if(isset($_GET['year']))
                                                {
                                                $year=$_GET['year'];
                                                }
                                                require 'require/config.php';
												$query = $conn->query("SELECT * FROM `patient` WHERE `year` = '$year' ORDER BY `patient_id` DESC") or die(mysqli_error());
												while($fetch = $query->fetch_array()){
												?>
                                            <tr>
                                                <td><?php echo $fetch['patient_name']?></td>
                                                <td class="print">
                                                    <a href="dispensation_reports?id=<?php echo $fetch['patient_id']?>&patient_name=<?php echo $fetch['patient_name']?>" class="btn btn-sm btn-default">View</a>
                                                </td>
                                            </tr>
                                            <?php
													}
													$conn->close();
												?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="panel panel-primary">
                            <div class="panel-heading print">
                                <?php require 'require/select_year.php'?>
                                <div class="btn-group pull-left print">
                                    <div class="pull-left">
                                        <!-- Chart Type Monthly -->
                                        <select class="form-control select print" data-style="btn-primary" data-live-search="true" id="select-report" name="filterbutton">
                                            <option disabled="disabled">Select Chart Type</option>
                                            <option value="colmonth">Column Chart</option>
                                            <option value="piemonth">Pie Chart</option>
                                            <option value="barmonth">Bar Chart</option>
                                            <option value="linemonth">Line Chart</option>
                                            <option value="doughnutmonth">Doughnut Chart</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body scroll" style="height: 470px;">
                                <div id="chartContainer2" class="colmonth reporttype" style="width: 100%; height: 425px;"></div>
                                <div id="chartContainer3" class="piemonth reporttype" style="width: 100%; height: 425px"></div>
                                <div id="chartContainer4" class="barmonth reporttype" style="width: 100%; height: 425px"></div>
                                <div id="chartContainer5" class="linemonth reporttype" style="width: 100%; height: 425px"></div>
                                <div id="chartContainer6" class="doughnutmonth reporttype" style="width: 100%; height: 425px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- START PRELOADS -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
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
                window.location = 'medication_dispense_table?year=' + year;
            });
        });

    </script>
    <!-- END SCRIPTS -->
</body>

</html>
