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
            $q2 = $conn->query("SELECT * FROM `consultation` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]'") or die(mysqli_error());
			$f2 = $q2->fetch_array();
					?>
				<li>Data Entry</li>
				<li><a href="patient_overview?id=<?php echo $fetch['patient_id']?>&&patient_name=<?php echo $fetch['patient_name'] ?>">Patient Masterfile</a></li>
				<li>Consultation</li>
				<li><mark><strong><?php echo $fetch['patient_name']?></strong></mark></li>
			</ul>
			<!-- END BREADCRUMB -->
			<!-- PAGE CONTENT WRAPPER -->
			<div class="page-content-wrap">

				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Consultation</a></li>
                                <li><a href="#tab-second" role="tab" data-toggle="tab">Treatment</a></li>
									<div class="btn-group pull-right">
										<div class="pull-left">
											<a href="patient_overview?id=<?php echo $fetch['patient_id']?>&&patient_name=<?php echo $fetch['patient_name'] ?>" class="btn btn-default btn-md">Back</a>
										</div>
									</div>
                            </ul>
                            <div class="panel-body">  
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab-first">
                                            <div class="row">
										<div class="table-responsive">
											<table class="table table-hover table-bordered">
											<thead>
												<tr class="warning">
													<th><center>Consultation Date</center></th>
													<th><center>Head of the Family</center></th>
													<th><center>Weight</center></th>
													<th><center>Blood Pressure</center></th>
													<th><center>Temperature</center></th>
													<th><center>Respiratory Rate</center></th>
													<th><center>Pulse Rate</center></th>
													<th><center>Complaints</center></th>
													<th><center>Pertinent P.E Findings</center></th>
													<th><center>Diagnosis</center></th>
													<th><center>Laboratory Request</center></th>
												</tr>
											</thead>
											<tbody>
											<?php
											require 'require/config.php';
											$query = $conn->query("SELECT * FROM `consultation` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]' ORDER BY `consultation_id` DESC") or die(mysqli_error());
											while($fetch = $query->fetch_array()){
											?>
												<tr>
													<td><center><?php echo $fetch['consultation_date']?></center></td>
													<td><center><?php echo $fetch['head_of_the_family']?></center></td>
													<td><center><?php echo $fetch['weight']?></center></td>
													<td><center><?php echo $fetch['bp']?></center></td>
													<td><center><?php echo $fetch['temp']?></center></td>
													<td><center><?php echo $fetch['rr']?></center></td>
													<td><center><?php echo $fetch['pr']?></center></td>
													<td><center><?php echo $fetch['complaints']?></center></td>
													<td><center><?php echo $fetch['pe_findings']?></center></td>
													<td><center><?php echo $fetch['diagnosis']?></center></td>
													<td><center><?php echo $fetch['lab_request']?></center></td>
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
                                        <div class="tab-pane" id="tab-second">
                                            <div class="row">
                                 				<div class="table-responsive">
											<table class="table table-hover table-bordered">
											<thead>
												<tr class="warning">
													<th><center>Medicine Category</center></th>
													<th><center>Medication & Dosage</center></th>
													<th><center>6 <br> (AM)</center></th>
													<th><center>8 <br> (AM)</center></th>
													<th><center>12 <br> (NN)</center></th>
													<th><center>2 <br> (PM)</center></th>
													<th><center>4 <br> (PM)</center></th>
													<th><center>6 <br> (PM)</center></th>
													<th><center>8 <br> (PM)</center></th>
													<th><center>Quantity</center></th>
													<th><center>Recommendation</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
													require 'require/config.php';
													$query = $conn->query("SELECT * FROM `consultation_prescription` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]' ORDER BY `consultation_id` DESC") or die(mysqli_error());
													while($fetch = $query->fetch_array()){
													?>
												<tr>
													<td><center><?php echo $fetch['medicine_category']?></center></td>
													<td><center><?php echo $fetch['medname']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['6am']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['8am']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['12nn']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['2pm']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['4pm']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['6pm']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['8pm']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['qty']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['recommendation']?></center></td>
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
		<!-- END PAGE CONTENT WRAPPER -->
	</div>
	<!-- END PAGE CONTENT -->
	<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
	<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
	<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
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
