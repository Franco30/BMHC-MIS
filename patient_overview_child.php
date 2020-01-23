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
</head>

<body>
	<!-- START PAGE CONTAINER -->
	<div class="page-container">
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
			$query = $conn->query("SELECT * FROM `patient_child` WHERE `child_id` = '$_GET[child_id]'") or die(mysqli_error());
			$fetch = $query->fetch_array();
			$id = $fetch['child_id'];
					?>
				<li>Data Entry</li>
				<li><a href="master_file_patient">Patient Master File</a></li>
				<li><mark><strong><?php echo $fetch['child_name']?></strong></mark></li>
			</ul>
			<!-- END BREADCRUMB -->
			<!-- PAGE CONTENT WRAPPER -->
			<div class="page-content-wrap">
				<div class="row">
					<div class="col-md-12">
						<div id="alert" class="alert alert-info" style="display:none;">
							<center><span id="alerttext"></span></center>
						</div>
						<div class="panel panel-default">
							<div class="panel-body">
						<div class="panel panel-default tabs">
							<ul class="nav nav-tabs" role="tablist">
								<li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Patient Info</a></li>
								<?php if($fetch['status'] == 'Registered Immunization') { ?>
								<li><a href="#tab-second" role="tab" data-toggle="tab">Immunization</a></li>
								<?php } ?>
							</ul>
							<div class="panel-body tab-content">
								<div class="tab-pane active" id="tab-first">
									<div class="panel-body scroll" style="height: 430px;">
										<div class="row">
											<div class="col-md-3">
												<div class="panel panel-default">
													<div class="panel-body profile">
														<div class="profile-image">
															<img src="assets/images/patient.ico" alt="John Doe" />
														</div>
														<div class="profile-data">
															<div class="profile-data-name" style="color:#555252; font-size:20px;">
																<strong><?php echo $fetch['child_name']?></strong>
															</div>
															<div class="profile-data-title" style="color:#555252; font-size:12px;">
																<strong><?php echo $fetch['year']. "0" .$fetch['child_id']?></strong>
															</div>
														</div>
													</div>
													<div class="panel-body">
														<div class="contact-info">
															<p><small style="font-size:13px;">Gender</small><br /><?php echo $fetch['gender']?></p>
															<p><small style="font-size:13px;">Date of Birth</small><br /><?php echo $fetch['birthdate']?>
															</p>
															<p><small style="font-size:13px;">Date First Seen</small><br /><?php echo $fetch['date_first_seen']?>
															</p>
														</div>
													</div>
												</div>

											</div>
											<div class="col-md-5"> <br>
												<h5><strong>Mother's Name: </strong><?php echo $fetch['mother_name']?>
												</h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Educational Level: </strong><?php echo $fetch['mother_education']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Occupation: </strong><?php echo $fetch['mother_occupation']?></h5>
												<hr style="margin:0px 0 5px 0;">

											</div>
											<div class="col-md-4"> <br>
												<h5><strong>Father's Name:
													</strong><?php echo $fetch['father_name']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Educational Level:
													</strong><?php echo $fetch['father_education']?></h5>
												<hr style="margin:0px 0 5px 0;">
												<h5><strong>Occupation:
													</strong><?php echo $fetch['father_occupation']?></h5>
												<hr style="margin:0px 0 5px 0;">
											</div>
											<div class="col-md-9">
												<h5><strong>Brothers and Sisters</strong></h5>
												<hr style="margin:0px 0 5px 0;">
												<br>
												<div class="panel panel-default">
												<div class="panel-heading">
													<div class="btn-group pull-right">
														<div class="pull-left">
															<button class="btn btn-info btn-md" data-toggle="modal" data-target="#add_brattysis">Add Brother and Sister</button>
														</div>
													</div>
												</div>
												<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr class="warning">
																<th><center>Name</center></th>
																<th><center>Gender</center></th>
																<th><center>Date of Birth</center></th>
															</tr>
														</thead>
														<tbody>
															<?php
															$query = $conn->query("SELECT * FROM `brothers_and_sisters` WHERE `child_id` = '$_GET[child_id]'") or die(mysqli_error());
															while($fetch = $query->fetch_array()){
															?>
															<tr>
																<td><center><?php echo $fetch['fullname']?></center></td>
																<td><center><?php echo $fetch['gender']?></center></td>
																<td><center><?php echo $fetch['birthdate']?></center></td>
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

								<div class="tab-pane" id="tab-second">
									<div class="panel-body">
										<div class="row">
											<?php require 'masterfile/overview_immunization.php'?>
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
		</div>
	</div>
	<?php require 'modals/add_brattysis.php'?>
	<!-- END PAGE CONTAINER -->
	<!-- START PRELOADS -->
	<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
	<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
	<!-- END PRELOADS -->

	<!-- START SCRIPTS -->
	<!-- START PLUGINS -->
	<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="functions/brattysis.js"></script>
	<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
	<!-- END PLUGINS -->

	<!-- START THIS PAGE PLUGINS-->
	<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
	<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
	<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
	<script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
	<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/plugins/tocify/jquery.tocify.min.js"></script>
	<script>
		$(function() {
			var toc = $("#tocify").tocify({
				context: ".tocify-content",
				showEffect: "fadeIn",
				extendPage: false,
				selectors: "h2, h3, h4"
			});
		});

	</script>
	<!-- END THIS PAGE PLUGINS-->
	<!-- START TEMPLATE -->
	<script type="text/javascript" src="js/settings.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/actions.js"></script>
	<!-- END TEMPLATE -->
	<!-- END SCRIPTS -->
</body>

</html>
