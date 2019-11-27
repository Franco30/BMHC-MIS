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
            $query2 = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();
					?>
                <li>Transactions</li>
                <li><a href="familyplanning">Family Planning</a></li>
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
                                <h3 class="panel-title"><strong>Familly Planning / <?php echo $fetch2['patient_name']?></strong></h3>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">

                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="fptable" class="table datatable" width="100%">
                                    <thead>
                                        <tr class="warning">
                                        <th><center>Family Planning No</center></th>
                                        <th><center>Patient No</center></th>
                                        <th><center>Patient Name</center></th>
                                        <th><center>Type of Acceptor</center></th>
                                        <th class="print"><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
	                            require 'require/config.php';
			                    $query = $conn->query("SELECT * FROM `family_planning` WHERE `family_planning`.`patient_id` =  '$_GET[patient_id]'") or die(mysqli_error());
                                    while($fetch = $query->fetch_array()){
                                        $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
                                        $f = $q->fetch_array();
                                        $q2 = $conn->query("SELECT * FROM `family_planning` WHERE `patient_id` = '$_GET[patient_id]' && `status` = 'No Assessment'")or die(mysqli_error());
                                        $f2 = $q2->fetch_array();
                                        ?>
                                        <tr>
                                            <td><center><strong><?php echo $fetch['year']?><?php echo "0".$fetch['family_planning_id']?></strong></center></td>
                                            <td><center><strong><?php echo $f['year']?><?php echo "0".$fetch['patient_id']?></strong></center></td>
                                            <td><center><?php echo $fetch['method_accepted']?></center></td>
                                            <td><center><?php echo $fetch['type_of_acceptor']?></center></td>
                                            <td class="print"><center>
                                            <?php if($fetch['status'] == 'No Assessment') { ?>
                                            <a href="familyplanning_assessment?patient_id=<?php echo $fetch['patient_id']?>&&family_planning_id=<?php echo $fetch['family_planning_id']?>" class="btn btn-md btn-danger"><span class="fa fa-stethoscope animated infinite pulse"></span> Assessment</a>
                                            <?php } else { ?>
                                            <a href="#" class="btn btn-md btn-info">Overview</a>  <?php } ?>
                                                </center>
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
    <?php require 'modals/add_consultation.php'?>
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="functions/crudconsultation.js"></script>
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
