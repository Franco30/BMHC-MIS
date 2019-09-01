<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>BMHC-MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="html/favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
    <link rel="stylesheet" type="text/css" href="assets3/vendor/font-awesome/css/font-awesome.min.css" />
    <!-- EOF CSS INCLUDE -->
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
			$query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]' && `patient_name` = '$_GET[patient_name]'") or die(mysqli_error());
			$fetch = $query->fetch_array();
			$id = $fetch['patient_id'];
					?>
                <li>Data Entry</li>
                <li><a href="master_file_patient">Patient Master File</a></li>
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
						<div class="panel panel-default tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li><a href="#tab-first" role="tab" data-toggle="tab">Patient</a></li>
									<li  class="active"><a href="#tab-second" role="tab" data-toggle="tab">Treatment</a></li>
									<li><a href="#tab-fourth" role="tab" data-toggle="tab">DSSM</a></li>
									<li><a href="#tab-fifth" role="tab" data-toggle="tab">Xpert MTB</a></li>
									<li><a href="#tab-sixth" role="tab" data-toggle="tab">TB Culture</a></li>
									<li><a href="#tab-seventh" role="tab" data-toggle="tab">DST</a></li>
									<li><a href="#tab-eigth" role="tab" data-toggle="tab">TST</a></li>
									<li><a href="#tab-ninth" role="tab" data-toggle="tab">CXR</a></li>
								</ul>
								<div class="panel-body tab-content">
									<div class="tab-pane" id="tab-first">
										<div class="panel-body list-group list-group-contacts scroll" style="height: 460px;">
											<div class="row">
												<div class="col-md-3">
													<div class="panel panel-default">
														<div class="panel-body profile">
															<div class="profile-image">
																<img src="assets/images/patient.ico" alt="John Doe"/>
															</div>
															<div class="profile-data">
																<div class="profile-data-name" style="color:#555252; font-size:20px;"><strong><?php echo $_GET['patient_name']?></strong></div>
																<div class="profile-data-title" style="color:#555252; font-size:12px;"><strong><?php echo $fetch['year']. "080" .$fetch['patient_id']?></strong></div>
															</div>
														</div>                                
														<div class="panel-body">                                    
															<div class="contact-info">
															<p><small style="font-size:13px;">Age</small><br/><?php echo $fetch['age']?> years old</p>
																<p><small style="font-size:13px;">Contact Number</small><br/><?php echo $fetch['contact_no']?></p>
																<p><small style="font-size:13px;">Current Address</small><br/><?php echo $fetch['address']?></p>                                   
															</div>
														</div>                                
													</div>
													<!-- END CONTACT ITEM -->
												</div>
												<div class="col-md-5">   <br>                                             
													<h5><strong>Height: </strong><?php echo $fetch['height'], " cms." ?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Gender: </strong><?php echo $fetch['gender']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Birthdate: </strong><?php echo $fetch['birthdate']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Occupation: </strong><?php echo $fetch['occupation']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Contact Person: </strong><?php echo $fetch['contact_person']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Emergency No: </strong><?php echo $fetch['emergency_no']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Philhealth No: </strong><?php echo $fetch['philhealth_no']?></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Registration Date: </strong><?php echo $fetch['year']?></h5>
													<hr style="margin:0px 0 5px 0;">
												</div>
												<div class="col-md-4">   <br>                     
													<h5><strong>Source of Patient: </strong></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Registration Group: </strong></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Diagnosis: </strong></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Bacteriological Status: </strong></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Family Planning: </strong></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Pre-natal: </strong></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Immunization: </strong></h5>
													<hr style="margin:0px 0 5px 0;">
													<h5><strong>Duration: </strong></h5>
												</div>
											</div>
											<hr>
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">
														<div class="btn-group pull-left">
															<div class="pull-left">
																<a href="#new_member" data-target="#new_member" data-toggle="modal" class="btn btn-info btn-md"><span class="fa fa-user-plus"></span> New Family Member</a>
															</div>
														</div>
													</div>
													<div class="panel-body">
														<table class="table table-hover">
															<thead>
																<tr>
																	<th><center>Name</center></th>
																	<th><center>Age</center></th>
																	<th><center>Date Screened</center></th>
																	<th><center>Action</center></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><center>Ma. Jesselva Monique Latosa</center></td>
																	<td><center>22</center></td>
																	<td><center>June 30, 2019</center></td>
																	<td><center>
																		<a href="#updatemember" data-target="#updatemember" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span> </a>
																		</center></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h3 class="panel-title">Treatment Partner</h3>
													</div>
													<div class="panel-body">
														<table id="laboratory_request" class="table table-hover">

															<thead>
																<tr>
																	<th><center>Treatment Partner Name</center></th>
																	<th><center>Designation</center></th>
																	<th><center>Action</center></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><center></center></td>
																	<td><center></center></td>
																	<td><center>
																		<a href="#updatepartner" data-target="#updatepartner" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span> </a>
																		</center></td>
																</tr>
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
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->
    <?php require 'modals/new_medicine.php'?>
    <?php require 'modals/edit_medicine.php'?>
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
    <script type="text/javascript" src="functions/patientmasterfile.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <!-- END THIS PAGE PLUGINS-->
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- START TEMPLATE -->
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
</body>

</html>
