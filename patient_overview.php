<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html lang="en">

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
								<li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Patient Info</a></li>
								<?php if($fetch['gender'] == 'Female') { ?>
								<li><a href="#tab-second" role="tab" data-toggle="tab">Prenatal</a></li>
								<li><a href="#tab-third" role="tab" data-toggle="tab">Family Planning</a></li>
								<?php } ?>
								<li><a href="#tab-fourth" role="tab" data-toggle="tab">Consultation</a></li>
								<!-- <li><a href="#tab-eigth" role="tab" data-toggle="tab">TST</a></li>
									<li><a href="#tab-ninth" role="tab" data-toggle="tab">CXR</a></li> -->
							</ul>
							<div class="panel-body tab-content">
								<div class="tab-pane active" id="tab-first">
									<div class="panel-body list-group list-group-contacts scroll" style="height: 460px;">
										<div class="row">
											<div class="col-md-3">
												<div class="panel panel-default">
													<div class="panel-body profile">
														<div class="profile-image">
															<img src="assets/images/patient.ico" alt="John Doe" />
														</div>
														<div class="profile-data">
															<div class="profile-data-name" style="color:#555252; font-size:20px;">
																<strong><?php echo $_GET['patient_name']?></strong>
															</div>
															<div class="profile-data-title" style="color:#555252; font-size:12px;">
																<strong><?php echo $fetch['year']. "0" .$fetch['patient_id']?></strong>
															</div>
														</div>
													</div>
													<div class="panel-body">
														<div class="contact-info">
															<p><small style="font-size:13px;">Philhealth No.</small><br /><?php echo $fetch['philhealth_no']?>
															</p>
															<p><small style="font-size:13px;">Age</small><br /><?php echo $fetch['age']?>
																years old</p>
															<p><small style="font-size:13px;">Contact
																	Number</small><br /><?php echo $fetch['contact_no']?>
															</p>
														</div>
													</div>
												</div>

											</div>
											<div class="col-md-5"> <br>
												<h5><strong>Civil Status:
													</strong><?php echo $fetch['civil_status']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Height: </strong><?php echo $fetch['height'], " cms." ?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Weight: </strong><?php echo $fetch['weight'], " kgs." ?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Gender: </strong><?php echo $fetch['gender']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Birthdate: </strong><?php echo $fetch['birthdate']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Occupation: </strong><?php echo $fetch['occupation']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Registration Date: </strong><?php echo $fetch['month']." ".$fetch['year']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Region/Provice:
													</strong><?php echo $fetch['region_province']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Address:
													</strong><?php echo $fetch['purok']." ".$fetch['street_address']?></h5>
												<hr style="margin:0px 0 5px 0;">
											</div>
											<div class="col-md-4"> <br>
												<h5><strong>Contact Person:
													</strong><?php echo $fetch['contact_person']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Emergency No: </strong><?php echo $fetch['emergency_no']?>
												</h5>
												<hr style="margin:0px 0 5px 0;">
											</div>
										</div>
										<hr>
									</div>
								</div>

								<div class="tab-pane" id="tab-second">
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default">
												<div class="panel-body">
													<table id="prenatal" class="table datatable">
														<thead>
															<tr>
																<th>
																	<center>Doctor's Order and Advice</center>
																</th>
																<th>
																	<center>Date</center>
																</th>
																<th>
																	<center>Presentation</center>
																</th>
																<th>
																	<center>Complaints</center>
																</th>
																<th>
																	<center>Action</center>
																</th>
															</tr>
														</thead>
														<tbody>
															<?php
															$conn = new mysqli('localhost','root','','bmhc')or die(mysqli_error());
								$query = $conn->query("SELECT * FROM `patient` NATURAL JOIN `prenatal` WHERE `patient_id` = '$_GET[id]' ORDER BY prenatal_id DESC") or die(mysqli_error());
								while($fetch = $query->fetch_array()){
									?>
															<tr>
																<td>
																	<center><?php echo $fetch['doctors_advice']?></center>
																</td>
																<td>
																	<center><?php echo $fetch['date']?></center>
																</td>
																<td>
																	<center><?php echo $fetch['presentation']?></center>
																</td>
																<td>
																	<center><?php echo $fetch['complaints']?></center>
																</td>
																<td>
																	<center><a class="btn btn-default" href="familyplanninginfo.php?id=<?php echo $fetch['patient_id'];?>&&patient_name=<?php echo $fetch['patient_name'];?>&&c_id=<?php echo $fetch['consultation_id'];?>">View Detail</a></center>
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
											<!-- END CONTACT ITEM -->
										</div>
									</div>
									<hr>
								</div>

								<div class="tab-pane" id="tab-third">
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default">
												<div class="panel-body">
													<table id="familyplanning" class="table datatable">
														<thead>
															<tr>
																<th>
																	<center>Date & Time</center>
																</th>
																<th>
																	<center>Type of Acceptor</center>
																</th>
																<th>
																	<center>Previously Used Method</center>
																</th>
																<th>
																	<center>Birthdate</center>
																</th>
																<th>
																	<center>Highest Education</center>
																</th>
																<th>
																	<center>Action</center>
																</th>
															</tr>
														</thead>
														<tbody>
															<?php
															$conn = new mysqli('localhost','root','','bmhc')or die(mysqli_error());
								$query = $conn->query("SELECT * FROM `patient` NATURAL JOIN `family_planning` WHERE `patient_id` = '$_GET[id]' ORDER BY family_planning_id DESC") or die(mysqli_error());
								while($fetch = $query->fetch_array()){
									?>
															<tr>
																<td>
																	<center><?php echo $fetch['date']." ".$fetch['time'];?></center>
																</td>
																<td>
																	<center><?php echo $fetch['type_of_acceptor']?></center>
																</td>
																<td>
																	<center><?php echo $fetch['prev_used_method']?></center>
																</td>
																<td>
																	<center><?php echo $fetch['patient_birthdate']?></center>
																</td>
																<td>
																	<center><?php echo $fetch['patient_highest_education']?></center>
																</td>
																<td>
																	<center><a class="btn btn-default" href="familyplanninginfo.php?id=<?php echo $fetch['patient_id'];?>&&patient_name=<?php echo $fetch['patient_name'];?>&&fp_id=<?php echo $fetch['family_planning_id'];?>">View Detail</a></center>
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
											<!-- END CONTACT ITEM -->
										</div>
									</div>
									<hr>
								</div>

								<div class="tab-pane" id="tab-fourth">
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default">
												<div class="panel-body">
													<table id="consultation" class="table datatable">
														<thead>
															<tr>
																<th>
																	<center>Complaints</center>
																</th>
																<th>
																	<center>Pertinent P.E Findings</center>
																</th>
																<th>
																	<center>Diagnosis</center>
																</th>
																<th>
																	<center>Action</center>
																</th>
															</tr>
														</thead>
														<tbody>
															<?php
															$conn = new mysqli('localhost','root','','bmhc')or die(mysqli_error());
								$query = $conn->query("SELECT * FROM `patient` NATURAL JOIN `consultation` WHERE `patient_id` = '$_GET[id]' ORDER BY consultation_id DESC") or die(mysqli_error());
								while($fetch = $query->fetch_array()){
									?>
															<tr>
																<td>
																	<center><?php echo $fetch['complaints']?></center>
																</td>
																<td>
																	<center><?php echo $fetch['findings']?></center>
																</td>
																<td>
																	<center><?php echo $fetch['diagnosis']?></center>
																</td>
																<td>
																	<center><a class="btn btn-default" href="familyplanninginfo.php?id=<?php echo $fetch['patient_id'];?>&&patient_name=<?php echo $fetch['patient_name'];?>&&c_id=<?php echo $fetch['consultation_id'];?>">View Detail</a></center>
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
											<!-- END CONTACT ITEM -->
										</div>
									</div>
									<hr>
								</div>

							</div>
						</div>
					</div>
					<!-- END PAGE CONTENT WRAPPER -->
				</div>
				<!-- END PAGE CONTENT -->
			</div>
		</div>
	</div>
	<!-- END PAGE CONTAINER -->
	<!-- START PRELOADS -->
	<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
	<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
	<!-- END PRELOADS -->

	<!-- START SCRIPTS -->
	<!-- START PLUGINS -->z
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
