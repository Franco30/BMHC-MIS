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
    <link rel="stylesheet" type="text/css" href="assets2/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
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
                <li>Reports</li>
                <li class="active"><strong><mark>Follow-up Visit Reports</mark></strong></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <div id="alert" class="alert alert-info" style="display:none;">
                            <center><span id="alerttext"></span></center>
                        </div>
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Prenatal</a></li>
                                <li><a href="#tab-second" role="tab" data-toggle="tab">Family Planning</a></li>
                            </ul>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 560px;">
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                    <?php
                                                    $month = date("F Y", strtotime("+8 HOURS"));
                                                    ?>
                                                    <h3 class="panel-title"><strong>Patients for Prenatal Follow-up this month of <?php echo $month?></strong></h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                        <table class="table datatable">
											<thead> 
												<tr class="warning">
													<th><center>Patient No</center></th>
													<th><center>Patient Name</center></th>
													<th><center>Contact Number</center></th>
													<th><center>Home Address</center></th>
													<th><center>Follow-up Date</center></th>
                                                    <th><center>Follow-up Status</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
	                                   //$month = date("M", strtotime("+8 HOURS"));
                                       $month = date("m", strtotime("+8 HOURS")); 
										require 'require/config.php';
										$query = $conn->query("SELECT * FROM `prenatal_follow_up`, `patient` where patient.patient_id = prenatal_follow_up.patient_id && patient.status = 'Active' && follow_up_date_time REGEXP '$month' group by patient_name") or die(mysqli_error());
										while($fetch = $query->fetch_array()){
												?>                                      
												<tr>
													<td><center><strong><?php echo $fetch['year']."0".$fetch['patient_id']?></strong></center></td>
													<td><center><strong><?php echo $fetch['patient_name']?></strong></center></td>
													<td><center><?php echo $fetch['contact_no']?></center></td>
													<td><center>Prk. <?php echo $fetch['purok']." ".$fetch['street_address']?></center></td>
													<td><center><?php echo $fetch['follow_up_date_time']?></center></td>
                                                    <td>
                                                    <center>
                                                        <?php 
                                                    if ($fetch['follow_up_status'] == 'Pending')echo "<span class='badge badge-danger animated infinite pulse' style='animation-duration:.8s;'>Pending</span>";
                                                    if ($fetch['follow_up_status'] == 'Done')echo "<span class='badge badge-info'>Done</span>";
                                                    if ($fetch['follow_up_status'] == 'Cancelled')echo "<span class='badge badge-warning'>Cancelled</span>";
                                                ?></center>
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
                                    <div class="tab-pane" id="tab-second">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                    <?php
                                                    $month = date("F Y", strtotime("+8 HOURS"));
                                                    ?>
                                                    <h3 class="panel-title"><strong>Patients for Family Planning Follow-up this month of <?php echo $month?></strong></h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                        <table class="table datatable">
											<thead> 
												<tr class="warning">
													<th><center>Patient No</center></th>
													<th><center>Patient Name</center></th>
													<th><center>Contact Number</center></th>
													<th><center>Home Address</center></th>
													<th><center>Follow-up Date</center></th>
                                                    <th><center>Follow-up Status</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
	                                   //$month = date("M", strtotime("+8 HOURS"));
                                       $month = date("m", strtotime("+8 HOURS")); 
										require 'require/config.php';
										$query = $conn->query("SELECT * FROM `fp_follow_up`, `patient` where patient.patient_id = fp_follow_up.patient_id && patient.status = 'Active' && next_service_date REGEXP '$month' group by patient_name") or die(mysqli_error());
										while($fetch = $query->fetch_array()){
												?>                                      
												<tr>
													<td><center><strong><?php echo $fetch['year']."0".$fetch['patient_id']?></strong></center></td>
													<td><center><strong><?php echo $fetch['patient_name']?></strong></center></td>
													<td><center><?php echo $fetch['contact_no']?></center></td>
													<td><center>Prk. <?php echo $fetch['purok']." ".$fetch['street_address']?></center></td>
													<td><center><?php echo $fetch['next_service_date']?></center></td>
                                                    <td>
                                                    <center>
                                                        <?php 
                                                    if ($fetch['follow_up_status'] == 'Pending')echo "<span class='badge badge-danger animated infinite pulse' style='animation-duration:.8s;'>Pending</span>";
                                                    if ($fetch['follow_up_status'] == 'Done')echo "<span class='badge badge-info'>Done</span>";
                                                    if ($fetch['follow_up_status'] == 'Cancelled')echo "<span class='badge badge-warning'>Cancelled</span>";
                                                ?></center>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <?php require 'modals/fp_follow_up.php'; ?>
    <?php require 'modals/prenatal_follow_up.php'; ?>
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

    <!-- START THIS PAGE PLUGINS-->
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="assets2/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js">
    </script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
    <!-- END THIS PAGE PLUGINS-->
    <!-- START TEMPLATE -->
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->

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
