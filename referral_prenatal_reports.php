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
    <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
    <?php require 'js/loadcharts/reports/referral_prenatal.php'?>
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
                <li><a href="services_reports">Referral Report</a></li>
                <li class="active"><strong><mark>Referral Prenatal Report</mark></strong></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row print">
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control select" data-style="btn-primary" id="select-report" name="filterbutton">
                                <option value="monthly" selected="selected" disabled="disabled">Select Report</option>
                                <option value="monthly">Monthly</option>
                                <option value="quarterly">Quarterly</option>
                                <option value="yearly">Yearly</option>
                            </select>
                        </div>
                        <p><b>Graphical</b></p>
                    </div>
                    <div class="col-md-2">
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
                    <div class="col-md-2">
                        <div class="btn-group pull-right">
                            <button style="display: none;" type="button" class="btn btn-warning monthly quarterly yearly reporttype" onclick="openTabular()">Filter Reports</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <span id="shit">Choose from the given Graphical Report above.</span>
                                <div id="chartContainer1" class="monthly reporttype" style="width: 100%; height: 300px"></div>
                                <div id="chartContainer2" class="quarterly reporttype" style="width: 100%; height: 300px"></div>
                                <div id="chartContainer3" class="yearly reporttype" style="width: 100%; height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="alert" class="alert alert-danger" style="display:none;">
                            <center><span id="checkfield"></span></center>
                        </div>
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Tabular Report</a></li>
                                <li><a href="#tab-second" role="tab" data-toggle="tab">Date Range tabular Report</a></li>
                            </ul>
                            <div class="panel-body tab-content">

                                <div class="tab-pane active" id="tab-first">
                                    <div class="row">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><strong>Tabular Report</strong></h3>
                                            </div>
                                            <div class="panel-body list-group list-group-contacts scroll" style="height: 595px;">
                                                <div class="panel-body panel-body-table">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-bordered">
                                                            <thead>
                                                                <tr class="warning">
                                                                    <th>Month</th>
                                                                    <th><center>Number of Patients Consulted per Month</center></th>
                                                                    <th><center>View Patients</center></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    require 'chartqueries/referral_prenatal.php';
                                                                ?>
                                                                <tr>
                                                                    <td><strong>January</strong></td>
                                                                    <td><center><strong><?php echo $fjan['total']?></strong></center>
                                                                    </td>
                                                                    <td><center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#jan">View Record</button></center></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>February</strong></td>
                                                                    <td><center><strong><?php echo $ffeb['total']?></strong></center></td>
                                                                    <td>
                                                                        <center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#feb">View Record</button></center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>March</strong></td>
                                                                    <td>
                                                                        <center><strong><?php echo $fmar['total']?></strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#mar">View Record</button></center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>April</strong></td>
                                                                    <td>
                                                                        <center><strong><?php echo $fapr['total']?></strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#apr">View Record</button></center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>May</strong></td>
                                                                    <td>
                                                                        <center><strong><?php echo $fmay['total']?></strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#may">View Record</button>
                                                                        </center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>June</strong></td>
                                                                    <td>
                                                                        <center><strong><?php echo $fjun['total']?></strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#jun">View Record</button></center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>July</strong></td>
                                                                    <td>
                                                                        <center><strong><?php echo $fjul['total']?></strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#jul">View Record</button>
                                                                        </center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>August</strong></td>
                                                                    <td>
                                                                        <center><strong><?php echo $faug['total']?></strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#aug">View Record</button>
                                                                        </center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>September</strong></td>
                                                                    <td>
                                                                        <center><strong><?php echo $fsep['total']?></strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#sep">View Record</button>
                                                                        </center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>October</strong></td>
                                                                    <td>
                                                                        <center><strong><?php echo $foct['total']?></strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#oct">View Record</button></center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>November</strong></td>
                                                                    <td>
                                                                        <center><strong><?php echo $fnov['total']?></strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#nov">View Record</button></center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>December</strong></td>
                                                                    <td>
                                                                        <center><strong><?php echo $fdec['total']?></strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#dec">View Record</button></center>
                                                                    </td>
                                                                </tr>
                                                                <tr class="danger">
                                                                    <td>
                                                                        <h3><strong>Grand Total</strong></h3>
                                                                    </td>
                                                                    <td>
                                                                        <center><strong><span class="label label-danger" style="font-size:15px;"><?php echo $total['total']?></span></strong></center>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="tab-pane" id="tab-second">
                                    <div class="row">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><strong>Date Range Tabular Report</strong></h3>
                                                <div class="btn-group pull-right">
                                                    <div class="form-inline">
                                                        <form id="prenataldaterange">
                                                        <input type="text" class="form-control datepicker" placeholder="Start" id="date1" />
                                                        <input type="text" class="form-control datepicker" placeholder="End" id="date2" />
                                                        <button style="margin-left: 6px;" type="button" class="btn btn-success" id="btn_search"><span class="glyphicon glyphicon-search" style="margin-right: 0px;"></span></button> <button type="button" id="reset" class="btn btn-info"><span class="glyphicon glyphicon-refresh" style="margin-right: 0px;"><span></span></span></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body list-group list-group-contacts scroll" style="height: 595px;">
                                                <div class="panel-body panel-body-table">
                                                    <div id="patient_daterange">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr class="warning">
                                                                        <th><center>Referral No</center></th>
                                                                        <th><center>Patient Name</center></th>
                                                                        <th><center>Date</center></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="load_data">
                                                                    <?php
                                            $query = $conn->query("SELECT * FROM `referral_prenatal` order by `referral_id` DESC LIMIT 16") or die(mysqli_error());
                                            while($fetch = $query->fetch_array()){
                                    ?>
                                                                    <tr>
                                                                        <td><strong><center><?php echo $fetch['year']."".$fetch['referral_id']?></center></strong></td>
                                                                        <td><strong><?php echo $fetch['patient_name']?></strong></td>
                                                                        <td><strong><center><?php echo date("m/d/Y", strtotime($fetch['referral_date']))?></center></strong></td>
                                                                    </tr>
                                                                    <?php
                                        }
                                    ?>
                                                                </tbody>
                                                            </table>
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
    <script type="text/javascript" src="functions/referral_prenatal_daterange.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
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
                window.location = 'referral_prenatal_reports?year=' + year;
            });
        });

    </script>

    <script>
        function openTabular() {
            window.open("referral_prenatal_filter");
        }

    </script>

    <script>
        $(function() {
            /* DOM ready */
            $("#select-report").change(function() {
                document.getElementById("shit").style.display = "none";
            });
        });

    </script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <?php require 'reports/tabular_referral_prenatal.php'?>
</body>

</html>
