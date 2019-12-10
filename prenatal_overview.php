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
	<link href="assets3/css/invoice-print.min.css" rel="stylesheet" />
	<style type="text/css">
		@media print {
			@page {
				margin: -40px 10px 10px 50px;
				size: letter;
			}

			.print {
				display: none !important;
			}

			.hidden-header {
				display: inline !important;
				margin: 0px 0px 0px 200px;
			}
		}

	</style>
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
			<ul class="breadcrumb print">
				<?php
			require 'require/config.php';
			$query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
			$fetch = $query->fetch_array();
			$query3 = $conn->query("SELECT * FROM `prenatal_consultation` WHERE `prenatal_id` = '$_GET[prenatal_id]' && `patient_id` = '$_GET[patient_id]' && `prenatal_consultation_id` = '$_GET[prenatal_consultation_id]'") or die(mysqli_error());
			$fetch3 = $query3->fetch_array();
			?>
				<li>Transactions</li>
				<li><a href="prenatal">Prenatal</a></li>
				<li><a href="prenatal_record?patient_id=<?php echo $fetch['patient_id']?>&&prenatal_id=<?php echo $fetch3['prenatal_id']?>">Prenatal Record</a></li>
				<li>Prenatal Consultation Overview</li>
				<li><mark><strong><?php echo $fetch['patient_name']?></strong></mark></li>
			</ul>
			<!-- END BREADCRUMB -->
			<!-- PAGE CONTENT WRAPPER -->
			<div class="page-content-wrap">

				<div class="row">
					<label class="hidden-header" style="display:none;">
						<br>
						<center><img src="assets/images/bmhclogo.png" style="width:131px;height:100px; padding: 10px; margin:0px 0px 0px -10px;" alt="drrmopicture" /></center>
						<!--                        <img src="assets/images/bmhc.png" style="width:131px;height:100px; padding: -10px; margin:0px 0px 0px -10px;" alt="drrmopicture" />-->
						<h3 style="margin: 0px 0px 0px 10px">
							<center>Barangay Mansilingan Health Center</center>
						</h3>
						<h4 style="margin: 0px 0px 0px 10px">
							<center>2nd Floor, Old City Hall, Luzuriaga St., Bacolod City 6100, Negros Occidental</center>
						</h4>
						<h4 style="margin: 0px 0px 0px 10px;">
							<center>432-3879</center>
						</h4>
						<br>
					</label>
				</div>

				<div class="row">
					<div class="col-md-12">
						<?php
						require 'require/config.php';
						$q = $conn->query("SELECT * FROM `prenatal_consultation` WHERE `patient_id` =  '$_GET[patient_id]' && `prenatal_id` = '$_GET[prenatal_id]' && `prenatal_consultation_id` = '$_GET[prenatal_consultation_id]' && `status` = 'first'") or die(mysqli_error());
						$f = $q->fetch_array();
						?>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">
									<strong>Prenatal Information</strong>
								</h4>
								<div class="btn-group pull-right">
									<div class="pull-left">
										<a href="prenatal_record?patient_id=<?php echo $fetch['patient_id']?>&&prenatal_id=<?php echo $fetch3['prenatal_id']?>" class="btn btn-default">Back</a>
									</div>
								</div>
							</div>
							<div class="panel-body">
							<?php
							require 'require/config.php';
							$q2 = $conn->query("SELECT * FROM `prenatal` WHERE `patient_id` =  '$_GET[patient_id]' && `prenatal_id` = '$_GET[prenatal_id]'") or die(mysqli_error());
							$f2 = $q2->fetch_array();
							?>
								<div class="row">
									<div class="col-md-6">
										<h5><strong>Patient Name:
											</strong><?php echo $fetch['patient_name']?></h5>
										<hr style="margin:0px 0 5px 0;">
										<h5><strong>Menstrual Hx:
											</strong><?php echo $f2['menstrual_hx']?>
											&nbsp;&nbsp;<strong>Menarch:
											</strong><?php echo $f2['menarch']?>
											&nbsp;&nbsp;<strong>Cycle:
											</strong><?php echo $f2['cycle']?>
										</h5>
										<hr style="margin:0px 0 5px 0;">
										<h5><strong>Flow: </strong><?php echo $f2['flow']?>
											&nbsp;&nbsp;<strong>Duration:
											</strong><?php echo $f2['duration']?>
										</h5>
										<hr style="margin:0px 0 5px 0;">
										<h5><strong>Dysmenorrhea: </strong><?php echo $f2['dysmenorrhea']?></h5>
										<hr style="margin:0px 0 5px 0;">
										<h5><strong>OB-Gyne Hx: </strong><?php echo $f2['obgynehx']?></h5>
										<hr style="margin:0px 0 5px 0;">
										<h5><strong>Past Medical Hx: </strong><?php echo $f2['past_medical_hx']?></h5>
										<hr style="margin:0px 0 5px 0;">
										<h5><strong>Blood Type: </strong><?php echo $f2['bloodtype']?></h5>
										<hr style="margin:0px 0 5px 0;">
									</div>
									<div class="col-md-6">
										<h5><strong>Husband Name: </strong><?php echo $f2['husband']?></h5>
										<hr style="margin:0px 0 5px 0;">
										<h5><strong>Tetanus Toxoid</strong></h5>
										<hr style="margin:0px 0 5px 0;">
										<h5><strong>TT 1: </strong><?php echo $f2['tt1']?></h5>
										<hr style="margin:0px 0 5px 0;">
										<h5><strong>TT 2: </strong><?php echo $f2['tt2']?></h5>
										<hr style="margin:0px 0 5px 0;">
										<h5><strong>TT 3: </strong><?php echo $f2['tt3']?></h5>
										<hr style="margin:0px 0 5px 0;">
										<h5><strong>TT 4: </strong><?php echo $f2['tt4']?></h5>
										<hr style="margin:0px 0 5px 0;">
										<h5><strong>TT 5: </strong><?php echo $f2['tt5']?></h5>
										<hr style="margin:0px 0 5px 0;">
									</div>
								</div>
							</div>

							<?php if($f['status'] == 'first') { ?>
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<strong>Prenatal Consultation</strong>
									</h4>
								</div>
								<div class="panel-body">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body profile">
												<div class="profile-image">
													<img src="assets/images/patient.ico" alt="John Doe" />
												</div>
												<div class="profile-data">
													<div class="profile-data-name" style="color:#555252; font-size:20px;">
														<strong><?php echo $fetch['patient_name']?></strong>
													</div>
													<div class="profile-data-title" style="color:#555252; font-size:12px;">
														<strong><?php echo $fetch['year']. "0" .$fetch['patient_id']?></strong>
													</div>
												</div>
											</div>
											<div class="panel-body" style="height:60px">
												<div class="contact-info">
													<p><small style="font-size:13px;">Age</small><br /><?php echo $fetch['age']?>
														years old</p>
												</div>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-4">
											<h5><strong>Doctor's Order and Advice:<br><br></strong>
												<textarea class="form-control" style="color:#444444;resize:none;height:213px;background:#ffffff;" readonly><?php echo $fetch3['doctors_order_advice']?></textarea>
											</h5>
										</div>
										<div class="col-md-5">
											<h5><strong>Date:
												</strong><?php echo $fetch3['date']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>G:
												</strong><?php echo $fetch3['g']?>
												&nbsp;&nbsp;<strong>P:
												</strong><?php echo $fetch3['p']?>
												&nbsp;&nbsp;<strong>(FT:
												</strong><?php echo $fetch3['ft']?>
												&nbsp;&nbsp;<strong>PT:
												</strong><?php echo $fetch3['pt']?>
												&nbsp;&nbsp;<strong>A:
												</strong><?php echo $fetch3['a']?>
												&nbsp;&nbsp;<strong>LB:
												</strong><?php echo $fetch3['lb']?>)</h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>LMP: </strong><?php echo $fetch3['lmp']?>
												&nbsp;&nbsp;<strong>FH:
												</strong><?php echo $fetch3['fh']?>
											</h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>EDC: </strong><?php echo $fetch3['edc']?>
												&nbsp;&nbsp;<strong>FHB: </strong><?php echo $fetch3['fhb']?>
											</h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>BP: </strong><?php echo $fetch3['bp']?> mmHg
												&nbsp;&nbsp;<strong>Temperature: </strong><?php echo $fetch3['temp']?> °C</h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Weight: </strong><?php echo $fetch3['weight']?> kg
												&nbsp;&nbsp;<strong>Height: </strong><?php echo $fetch3['height']?> cms.
												&nbsp;&nbsp;<strong>AOG: </strong><?php echo $fetch3['aog']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Presentation: </strong><?php echo $fetch3['presentation']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Complaints: </strong><?php echo $fetch3['complaints']?></h5>
											<hr style="margin:0px 0 5px 0;">
										</div>
									</div>
								</div>
							</div>
							<?php } else { ?>
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<strong>Prenatal Consultation</strong>
									</h4>
								</div>
								<div class="panel-body">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body profile" style="height:185px">
												<div class="profile-image">
													<img src="assets/images/patient.ico" alt="John Doe" />
												</div>
												<div class="profile-data">
													<div class="profile-data-name" style="color:#555252; font-size:20px;">
														<strong><?php echo $fetch['patient_name']?></strong>
													</div>
													<div class="profile-data-title" style="color:#555252; font-size:12px;">
														<strong><?php echo $fetch['year']. "0" .$fetch['patient_id']?></strong>
														<br>
														<strong>Age: </strong><?php echo $fetch['age']?> years old
													</div>
												</div>
											</div>
											<div class="panel-body">
												<div class="contact-info">
												</div>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-4">
											<h5><strong>Doctor's Order and Advice:<br><br></strong>
												<textarea class="form-control" style="color:#444444;resize:none;height:183px;background:#ffffff;" readonly><?php echo $fetch3['doctors_order_advice']?></textarea>
											</h5>
										</div>
										<div class="col-md-5">
											<h5><strong>Date:
												</strong><?php echo $fetch3['date']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>FH: </strong><?php echo $fetch3['fh']?>
												&nbsp;&nbsp;<strong>FHB: </strong><?php echo $fetch3['fhb']?>
												&nbsp;&nbsp;<strong>BP: </strong><?php echo $fetch3['bp']?> mmHg
												&nbsp;&nbsp;<strong>Weight: </strong><?php echo $fetch3['weight']?> kg
											</h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>AOG: </strong><?php echo $fetch3['aog']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Presentation: </strong><?php echo $fetch3['presentation']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Complaints: </strong><?php echo $fetch3['complaints']?></h5>
											<hr style="margin:0px 0 5px 0;">
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
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
