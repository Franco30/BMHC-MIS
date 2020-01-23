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
            $query2 = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();
            $query3 = $conn->query("SELECT * FROM `prenatal` WHERE `prenatal_id` = '$_GET[prenatal_id]' && `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
			$fetch3 = $query3->fetch_array();
					?>
                <li>Transactions</li>
                <li><a href="prenatal">Prenatal</a></li>
                <li><a href="patient_prenatal?patient_id=<?php echo $fetch2['patient_id']?>">Prenatal Record</a></li>
                <li>Prenatal Consultation</li>
                <li><mark><strong><?php echo $fetch2['patient_name']?></strong></mark></li>
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
                                <h3 class="panel-title"><strong>Prenatal Record / <?php echo $fetch2['patient_name']?></strong></h3>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                    <?php
                                    require 'require/config.php';
                                    $q = $conn->query("SELECT COUNT(*) as total FROM `prenatal_consultation` WHERE `patient_id` =  '$_GET[patient_id]' && `prenatal_id` = '$_GET[prenatal_id]'") or die(mysqli_error());
                                    $f = $q->fetch_array();
                                    ?>
                                    <?php if($f['total'] >= 1) { ?>
                                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#add_consultation">Add Consultation</button>
                                    <?php } else { ?>
                                   <a href="prenatal_consultation?patient_id=<?php echo $fetch2['patient_id']?>&&prenatal_id=<?php echo $fetch3['prenatal_id']?>" class="btn btn-primary"> Add Consultation</a>
                                    <?php } ?> 
                                    <a href="patient_prenatal?patient_id=<?php echo $fetch2['patient_id']?>" class="btn btn-default">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <?php require 'tables/prenatal_record.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
    <?php require 'modals/add_prenatal_consultation.php'?>
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="functions/crudprenatalconsultation2.js"></script>
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
    <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>

    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>

    <!-- END THIS PAGE PLUGINS -->



</body>

</html>
