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
								<li><a href="#tab-first" role="tab" data-toggle="tab">Patient Info</a></li>
								<li class="active"><a href="#tab-second" role="tab" data-toggle="tab">Prenatal</a></li>
								<li><a href="#tab-third" role="tab" data-toggle="tab">Family Planning</a></li>
								<li><a href="#tab-fifth" role="tab" data-toggle="tab">Immunization</a></li>
								<li><a href="#tab-sixth" role="tab" data-toggle="tab">TB</a></li>
								<li><a href="#tab-seventh" role="tab" data-toggle="tab">Consultation</a></li>
								<!-- <li><a href="#tab-eigth" role="tab" data-toggle="tab">TST</a></li>
									<li><a href="#tab-ninth" role="tab" data-toggle="tab">CXR</a></li> -->
							</ul>
							<div class="panel-body tab-content">
								<div class="tab-pane" id="tab-first">
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
																<strong><?php echo $fetch['year']. "080" .$fetch['patient_id']?></strong>
															</div>
														</div>
													</div>
													<div class="panel-body">
														<div class="contact-info">
															<p><small style="font-size:13px;">Age</small><br /><?php echo $fetch['age']?>
																years old</p>
															<p><small style="font-size:13px;">Contact
																	Number</small><br /><?php echo $fetch['contact_no']?>
															</p>
															<p><small style="font-size:13px;">Current
																	Address</small><br /><?php echo $fetch['address']?>
															</p>
														</div>
													</div>
												</div>
											
											</div>
											<div class="col-md-5"> <br>
												<h5><strong>Height: </strong><?php echo $fetch['height'], " cms." ?>
												</h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Gender: </strong><?php echo $fetch['gender']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Birthdate: </strong><?php echo $fetch['birthdate']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Occupation: </strong><?php echo $fetch['occupation']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Contact Person:
													</strong><?php echo $fetch['contact_person']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Emergency No: </strong><?php echo $fetch['emergency_no']?>
												</h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Philhealth No: </strong><?php echo $fetch['philhealth_no']?>
												</h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Registration Date: </strong><?php echo $fetch['year']?></h5>
												<hr style="margin:0px 0 5px 0;">
											</div>
											<div class="col-md-4"> <br>
												<h5><strong>Region/Provice:
													</strong><?php echo $fetch['region_province']?></h5>
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
									</div>

								</div>


								<div class="tab-pane" id="tab-third">
										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-body">
														<?php require 'masterfile/familyplanning_patient_info.php'?>
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
	<?php require 'modals/new_medicine.php'?>
	<?php require 'modals/edit_medicine.php'?>
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
	<script type="text/javascript" src="js/plugins/tocify/jquery.tocify.min.js"></script>
	<script>
		$(function() {
			var toc = $("#tocify").tocify({context: ".tocify-content", showEffect: "fadeIn",extendPage:false,selectors: "h2, h3, h4" });
			});
	</script>
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