<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html>

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
    <style>
        @media print {
            @page {
                size: 8.5in 11in;
                max-width: 8.5in;
            }
        }

        #print {
            width: 850px;
            height: 900px;
            overflow: hidden;
            margin: auto;
            border: 2px solid #000;
        }

    </style>
</head>
<?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `patient_child`, `immunization` WHERE `patient_child`.`child_id`= '$_GET[child_id]' && `immunization`.`immunization_id` = '$_GET[immunization_id]'") or die(mysqli_error());
$fetch = $query->fetch_array();
$q2 = $conn->query("SELECT * FROM `immunization` WHERE `child_id` = '$_GET[child_id]'") or die(mysqli_error());
$f2 = $q2->fetch_array();
date_default_timezone_set('Asia/Manila');
$date=date("F j, Y");
?>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <!-- START TEXT ELEMENTS -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="btn-group pull-right">
                            <div class="pull-left">
                                <button class="btn btn-default btn-sm" onclick="printContent('print')"><span class="glyphicon glyphicon-print"></span> Print</button>
                                <a href="immunization_consultation?child_id=<?php echo $fetch['child_id'] ?>&&immunization_id=<?php echo $fetch['immunization_id'] ?>" class="btn btn-default btn-sm">Back</a>
                            </div>
                        </div>
                    </div>
                    <div id="print">
                        <div class="panel-body">
                            <?php
								require 'require/config.php';
								$query = $conn->query("SELECT * FROM `immunization_consultation` WHERE `child_id` = '$_GET[child_id]' && `immunization_id` = '$_GET[immunization_id]' && `ic_id` = '$_GET[ic_id]'") or die(mysqli_error());
								$fetch = $query->fetch_array();
								$query2 = $conn->query("SELECT * FROM `patient_child` WHERE `child_id` = '$_GET[child_id]'") or die(mysqli_error());
                                $fetch2 = $query2->fetch_array();
								?>
                            <center><img style="height:100px;width:130px;" src="assets/images/bmhclogo.png"> <br> <br>
                                <h6><strong>Barangay Mansilingan Health Center</strong></h6>
                                <p><small><strong>Brgy. Mansilingan 6100 Bacolod City</strong> <br>
                                        (034) 434 4098 <br>
                                        brgymansilingan@yahoo.com</small></p> <br>

                                <h6 style="font-size:25px;"><strong>IMMUNIZATION CONSULTATION</strong></h6>
                            </center>
                            <br>
                            <p style="font-size: 14px;margin-left: 20px;" class="text-justify"><strong>Child Name:</strong>&nbsp;&nbsp;<?php echo $fetch2['child_name']?></p>
                            <p style="font-size: 14px;margin-left: 20px;" class="text-justify"><strong>NUTRITIONAL STATUS:</strong>&nbsp;&nbsp;<?php echo $fetch['nutritional_status']?></p>
                            <hr style="margin:0px 0 5px 0;margin-left: 20px;margin-right: 20px;">
                            <p style="font-size: 14px;margin-left: 20px;" class="text-justify"><strong>MEDICAL HISTORY:</strong>&nbsp;&nbsp;<?php echo $fetch['medical_history']?></p>
                            <hr style="margin:0px 0 5px 0;margin-left: 20px;margin-right: 20px;">
                            <br>
                            <p style="font-size: 14px;margin-left: 20px;" class="text-justify"><strong>PRESENT ILLNESS:</strong></p>
                            
                            <p style="font-size: 14px;margin-left: 20px;" class="text-justify"><strong>DATE:</strong>&nbsp;&nbsp;<?php echo $fetch['date']?> &nbsp;&nbsp;&nbsp;&nbsp; <strong>Temp:</strong>&nbsp;&nbsp;<?php echo $fetch['temp']?> °C&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong>RR:</strong>&nbsp;&nbsp;<?php echo $fetch['rr']?> °C&nbsp;&nbsp;&nbsp;&nbsp; <strong>BP:</strong>&nbsp;&nbsp;<?php echo $fetch['bp']?> mmhg&nbsp;&nbsp;&nbsp;&nbsp; <strong>WT:</strong>&nbsp;&nbsp;<?php echo $fetch['weight']?> kg</p>
                            <br>
                            <p style="font-size: 14px;margin-left: 20px;" class="text-justify">
                                <strong>Complaints:</strong><br>
                                <u><?php echo $fetch['complaints']?></u></p>
                            <hr style="margin:0px 0 5px 0;margin-left: 20px;margin-right: 20px;">
                            <br>
                            <p style="font-size: 14px;margin-left: 20px;" class="text-justify">
                                <strong>Diagnosis:</strong><br>
                                <u><?php echo $fetch['diagnosis']?></u></p>
                             <hr style="margin:0px 0 5px 0;margin-left: 20px;margin-right: 20px;">
                            <br>
                            <p style="font-size: 14px;margin-left: 20px;" class="text-justify">
                                <strong>Plan of Actions:</strong><br>
                                <u><?php echo $fetch['plan_of_action']?></u></p>
                             <hr style="margin:0px 0 5px 0;margin-left: 20px;margin-right: 20px;">
                            <br>
                            <p style="font-size: 14px;margin-left: 20px;" class="text-justify">
                                <strong>Remarks:</strong><br>
                                <u><?php echo $fetch['remarks']?></u></p>
                             <hr style="margin:0px 0 5px 0;margin-left: 20px;margin-right: 20px;">
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function printContent(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }

    </script>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
</body>

</html>
