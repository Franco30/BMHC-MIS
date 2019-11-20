<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>BMHC-MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="assets/images/bmhc.png" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
    <link rel="stylesheet" type="text/css" href="assets3/vendor/font-awesome/css/font-awesome.min.css" />

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
                <?php
	       require 'require/config.php';
            $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
			$fetch = $query->fetch_array();
            $q2 = $conn->query("SELECT * FROM `consultation` WHERE `patient_id` = '$_GET[patient_id]' && `status` = 'No Prescription'") or die(mysqli_error());
			$f2 = $q2->fetch_array();
					?>
                <li>Transactions</li>
                <li>Consultation</li>
                <li><a href="patient_consultation?patient_id=<?php echo $fetch['patient_id']?>">Treatment</a></li>
                <li><mark><strong><?php echo $fetch['patient_name']?></strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <div id="alert" class="alert alert-info" style="display:none;">
                            <center><span id="alerttext"></span></center>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Consultation / Treatment / <?php echo $fetch['patient_name']?></strong></h3>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                        <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#add_prescription">Add Prescription</button>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
<!--                                <div id="prescriptionTable"></div>-->
                                <table id="prescriptiontable" class="table datatable">
                                    <thead>
                                        <tr class="warning">
                                            <th>
                                                <center>Medicine Category</center>
                                            </th>
                                            <th>
                                                <center>Medication & Dosage</center>
                                            </th>
                                            <th>
                                                <center>6 (AM)</center>
                                            </th>
                                            <th>
                                                <center>8 (AM)</center>
                                            </th>
                                            <th>
                                                <center>12 (NN)</center>
                                            </th>
                                            <th>
                                                <center>2 (PM)</center>
                                            </th>
                                            <th>
                                                <center>4 (PM)</center>
                                            </th>
                                            <th>
                                                <center>6 (PM)</center>
                                            </th>
                                            <th>
                                                <center>8 (PM)</center>
                                            </th>
                                            <th>
                                                <center>Quantity</center>
                                            </th>
                                            <th>
                                                <center>Recommendation</center>
                                            </th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
            $query = $conn->query("SELECT * FROM `consultation_prescription` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>
                                        <tr>
                                            <td>
                                                <center><strong><?php echo $fetch['medicine_category']?></strong></center>
                                            </td>
                                            <td>
                                                <center><strong><?php echo $fetch['medname']?></strong></center>
                                            </td>
                                            <td style="font-weight: bold;">
                                                <center><?php echo $fetch['6am']?></center>
                                            </td>
                                            <td style="font-weight: bold;">
                                                <center><?php echo $fetch['8am']?></center>
                                            </td>
                                            <td style="font-weight: bold;">
                                                <center><?php echo $fetch['12nn']?></center>
                                            </td>
                                            <td style="font-weight: bold;">
                                                <center><?php echo $fetch['2pm']?></center>
                                            </td>
                                            <td style="font-weight: bold;">
                                                <center><?php echo $fetch['4pm']?></center>
                                            </td>
                                            <td style="font-weight: bold;">
                                                <center><?php echo $fetch['6pm']?></center>
                                            </td>
                                            <td style="font-weight: bold;">
                                                <center><?php echo $fetch['8pm']?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $fetch['qty']?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $fetch['recommendation']?></center>
                                            </td>
                                            <td class="print">
                                                <center>
                                                    <button data-target="#edit_child_patient<?php echo $fetch['child_id']; ?>" data-toggle="modal" class="btn btn-sm btn-default">Update</button>
                                                </center>
                                                <?php //require('../modals/editchildpatient.php'); ?>
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
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
    <?php require 'modals/add_prescription.php'?>
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="functions/crud_prescription.js"></script>
    <script src="js/angolia.js"></script>
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
    <!--
    <script>
        $.ajaxPrefilter(function(options, originalOptions, jqXHR) {
            options.async = true;
        });

    </script>
-->
    <!--
    <script type="text/javascript">
        $(document).ready(function() {
            $('#medicine_category').change(function() {
                var category = $('#medicine_category').val();
                //                if (category = "category1") {
                //                    document.getElementById("category1").style.display = "block";
                //                }
                //                else if (category !== "category1") {
                //                    document.getElementById("category1").style.display = "none";
                //                }
                switch (category) {

                    case 'Antibiotic':
                        document.getElementById("category1").style.display = "block";
                        document.getElementById("category2").style.display = "none";
                        document.getElementById("category3").style.display = "none";
                        document.getElementById("category4").style.display = "none";
                        document.getElementById("category5").style.display = "none";
                        document.getElementById("category6").style.display = "none";
                        break;

                    case 'Antipyretic':
                        document.getElementById("category2").style.display = "block";
                        document.getElementById("category1").style.display = "none";
                        document.getElementById("category3").style.display = "none";
                        document.getElementById("category4").style.display = "none";
                        document.getElementById("category5").style.display = "none";
                        document.getElementById("category6").style.display = "none";
                        break;

                    case 'Analgesic':
                        document.getElementById("category3").style.display = "block";
                        document.getElementById("category1").style.display = "none";
                        document.getElementById("category2").style.display = "none";
                        document.getElementById("category4").style.display = "none";
                        document.getElementById("category5").style.display = "none";
                        document.getElementById("category6").style.display = "none";
                        break;

                    case 'Vitamins':
                        document.getElementById("category4").style.display = "block";
                        document.getElementById("category1").style.display = "none";
                        document.getElementById("category2").style.display = "none";
                        document.getElementById("category3").style.display = "none";
                        document.getElementById("category5").style.display = "none";
                        document.getElementById("category6").style.display = "none";
                        break;

                    case 'CoughPreparation':
                        document.getElementById("category5").style.display = "block";
                        document.getElementById("category1").style.display = "none";
                        document.getElementById("category2").style.display = "none";
                        document.getElementById("category3").style.display = "none";
                        document.getElementById("category4").style.display = "none";
                        document.getElementById("category6").style.display = "none";
                        break;

                    case 'Antihistamines':
                        document.getElementById("category6").style.display = "block";
                        document.getElementById("category1").style.display = "none";
                        document.getElementById("category2").style.display = "none";
                        document.getElementById("category3").style.display = "none";
                        document.getElementById("category4").style.display = "none";
                        document.getElementById("category5").style.display = "none";
                        break;

                    default:
                        document.getElementById("category1").style.display = "none";
                        document.getElementById("category2").style.display = "none";
                        document.getElementById("category3").style.display = "none";
                        document.getElementById("category4").style.display = "none";
                        document.getElementById("category5").style.display = "none";
                        document.getElementById("category6").style.display = "none";
                }
            });
        });

    </script>
-->
</body>

</html>
