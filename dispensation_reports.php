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
    <link href="assets3/css/invoice-print.min.css" rel="stylesheet" />
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
                <?php
	require 'require/config.php';
			$query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
			$fetch = $query->fetch_array();
			$id = $fetch['patient_id'];
					?>
                <li>Reports</li>
                <li><a href="medication_dispense_table">Medicines Dispensed</a></li>
                <li><mark><strong><?php echo $fetch['patient_name'];?></strong></mark></li>
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
                    <div class="col-md-8">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Medication Dispensation Log</strong></h3>
                                <div class="btn-group pull-right">
                                    <a class="btn btn-default print" href="medication_dispense_table">Back</a>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr class="warning">
                                                <th>
                                                    <center>Number</center>
                                                </th>
                                                <th>
                                                    <center>Drug Name</center>
                                                </th>
                                                <th>
                                                    <center>Date Given</center>
                                                </th>
                                                <th>
                                                    <center>Quantity</center>
                                                </th>
                                                <th>
                                                    <center>Received By</center>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

            require 'require/config.php';
            $query = $conn->query("SELECT * FROM `patient`,`medicine`,`medication_dispensation` WHERE medicine.medicine_id = medication_dispensation.medicine_id && patient.patient_id = medication_dispensation.patient_id && patient.patient_id = '$_GET[id]'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                                ?>
                                            <tr>
                                                <td>
                                                    <center><?php echo $fetch['dispensation_id']?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo $fetch['medicine_name']?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo $fetch['date_given']?></center>
                                                </td>
                                                <td>
                                                    <center><?php echo $fetch['quantity']?>
                                                        <?php if($fetch['quantity'] > 1){ ?> pcs. <?php }
                                                        else { ?> pc. <?php } ?> </center>
                                                </td>
                                                <td>
                                                    <center><?php echo $fetch['patient_name']?></center>
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
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="functions/crudpatient.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>

    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>

    <!-- END THIS PAGE PLUGINS -->



</body>

</html>
